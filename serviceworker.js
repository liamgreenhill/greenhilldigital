
const version = 'V0.37'; // change this after changing any cached file and the "install" event will be run again.
const staticCacheName = version + 'staticfiles';
const imageCacheName = 'images';
const pagesCacheName = 'pages';

const cacheList = [
  staticCacheName,
  imageCacheName,
  pagesCacheName
];

// Push Notifications (snippet from Urban Airship)

// 86acbd31cd7c09cf30acb66d2fbedc91daa48b86:1542112855.62
importScripts('https://web-sdk.urbanairship.com/notify/v1/ua-sdk.min.js')
uaSetup.worker(self, {
  defaultIcon: 'https://www.greenhilldigital.com/logo\u002D400x400.png',
  defaultTitle: 'Greenhill',
  defaultActionURL: 'https://www.greenhilldigital.com/',
  appKey: 'mU_F9iTFQzixv9QgSOfMsw',
  token: 'MTptVV9GOWlURlF6aXh2OVFnU09mTXN3Onp4ZDRvR3NSSS05ZTBNcVVBMmZvVVgybVBaYTV3OWlfTjBsQzk0N19Na28',
  vapidPublicKey: 'BK0G_5N95hblFqChHfkJwqSDBkKnj5aiyYLqdhcbkk7AvDaWI45UWZny37W9GqVbFElWoIcCdQ6f9udH43jSIkk=', 
  workerUrl: '/serviceworker.js'
})










// function trimCache()
// Limit the number of items in a specified cache so that we’re not unnecessarily using up storage.
function trimCache(cacheName, maxItems) {
  caches.open(cacheName)
  .then( cache => {
    cache.keys()
    .then(keys => {
      if (keys.length > maxItems) {
        cache.delete(keys[0])
        .then(
          trimCache(cacheName, maxItems)
        );
      }
    });
  });
}

// If a page controlled by this Service Worker sends the message “clean up caches” (once it finishes loading) then trim our caches.
addEventListener('message', messageEvent => {
  if (messageEvent.data == 'clean up caches') {
    trimCache(pagesCacheName, 20);
    trimCache(imageCacheName, 50);
  }
});



function stashInCache(request, cacheName) {
  // Fetch the file
  fetch(request)
  .then( responseFromFetch => {
    // Open the cache
    caches.open(cacheName)
    .then( theCache => {
      // Put the file into the cache
      return theCache.put(request, responseFromFetch);
    });
  });
}




// Listen for the "install" event
// This runs once only.
// Here, we'll cache some files.
addEventListener('install', installEvent => {
    // have this service worker take control as soon as it is installed - this is useful after updates.
    // Makes the updated version take control and removes the old version.
    skipWaiting();

    // OK Mr Browser. When you’re about to install the service worker, wait until you’ve added these files to the static cache.
    installEvent.waitUntil(
        caches.open(staticCacheName)
        .then( staticCache => { // reference to the open cache
            // Cache your files here

            // Nice to have
            staticCache.addAll([
                'favicon.ico' // remember to update names when filenames change
            ]);

            // Must have (use a return so installation won't be completed until all items in array have been cached)
            return staticCache.addAll([
                'css/screen_v5.css', // remember to update names when filenames change
                'js/plugins.js',
                'js/main_v4.js',
                'offline_v4.html', 
                'img/fallback.png'
            ]);
        })
    ); // end waitUntil
}); // end addEventListener


// Listen for the "activate" event
// Here, we'll delete old caches.
addEventListener('activate', activateEvent => {
    activateEvent.waitUntil(
        caches.keys()
        .then( cacheNames => {
            return Promise.all(
                cacheNames.map( cacheName => {
                    if (!cacheList.includes(cacheName)) {
                        return caches.delete(cacheName);
                    }
                })
            );
        })
        .then( () => {
            return clients.claim(); // Let’s have our newly activated service worker take immediate control over any open tabs rather than waiting for a refresh or page-switch. 
        })
    );
});



// caches.open('savedpages')
// .then( function (cache) {
//     cache.add(window.location.href)
//     .then( function () {
//         const data = {
//             "title": document.querySelector('title').innerText,
//             "description": document.querySelector('meta[name="description"]').getAttribute('content')
//         };
//         localStorage.setItem(
//             window.location.href,
//             JSON.stringify(data)
//         );
//     }); // end add then
// }); // end open then




// Runs every single time the browser requests a file from our site.
addEventListener('fetch', fetchEvent => {
    const request = fetchEvent.request;

    


    // When the user requests an HTML page
    if (request.headers.get('Accept').includes('text/html')) {
        if (
            (/\/journal\/.+/.test(request.url)) && 
            (!request.url.includes('/journal/archive')) && 
            (!request.url.includes('/journal/?'))
        ) {
            console.log("yo0");
            fetchEvent.respondWith(
                // Look in the cache
                caches.match(request)
                .then( responseFromCache => {
                    console.log("yo1");
                    if (responseFromCache) {
                        // Fetch a fresh version from the network
                        fetchEvent.waitUntil(
                            fetch(request)
                            .then( responseFromFetch => {
                                // Update the cache
                                caches.open(pagesCacheName)
                                .then( pagesCache => {
                                    console.log("yo2");
                                    return pagesCache.put(request, responseFromFetch);
                                });
                            })
                        ); // end waitUntil
                        console.log("yo3");
                        return responseFromCache;
                    } // end if
                    // Otherwise fetch the page from the network
                    console.log("yo4");
                    return fetch(request)
                    .then( responseFromFetch => {
                        // Put a copy in the cache
                        const copy = responseFromFetch.clone();
                        fetchEvent.waitUntil(
                            caches.open(pagesCacheName)
                            .then( pagesCache => {
                                console.log("yo5");
                                return pagesCache.put(request, copy);
                            }) // end open then
                        );
                        console.log("yo6");
                        return responseFromFetch;
                    })
                    .catch( error => {
                        // Otherwise show the fallback page
                        return caches.match('/offline_v4.html');
                    }); // end fetch catch and return
                }) // end match then
            ); // end respondWith
            return; // Go no further
        } else {
            // It's a page that is not in the /journal section
            fetchEvent.respondWith(
                // Fetch it from the network
                fetch(request)
                .then( responseFromFetch => {
                    console.log("here1");
                    // Put a copy in the cache
                    const copy = responseFromFetch.clone();
                    fetchEvent.waitUntil(
                        caches.open(pagesCacheName)
                        .then( pagesCache => {
                            return pagesCache.put(request, copy);
                        }) // end open then
                    ); // end waitUntil
                    return responseFromFetch;
                })
                .catch( error => {
                    // Otherwise look for a cached version of the page
                    console.log("here2");
                    return caches.match(request)
                    .then( responseFromCache => {
                        if (responseFromCache) {
                            return responseFromCache;
                        } // end if
                        // Otherwise show the fallback page
                        return caches.match('/offline_v4.html');
                    }); // end match then and return
                })
            );
            return; // Go no further.
        }




    // When the user requests an image
    } else if (request.headers.get('Accept').includes('image')) {
        fetchEvent.respondWith(
            // First choice: look for a cached version of the image.
            caches.match(request)
            .then(responseFromCache => {
                if (responseFromCache) { // A check to make sure it's not null.
                    // Even though we've got it from cache, still fetch a fresh version from the network to keep cache updated.
                    fetchEvent.waitUntil(
                        fetch(request)
                        .then (responseFromFetch => {
                            // Update the cache
                            caches.open(imageCacheName)
                            .then( imageCache => {
                                return imageCache.put(request, responseFromFetch);
                            }); // end open then
                        })
                    );
                    return responseFromCache;
                    // By returning, the end result is that,
                    // if there’s a matching file in the cache,
                    // the fetch event responds with the contents of that file.
                }
                // Second choice: No cached version so fetch image from network
                return fetch(request)
                .then( responseFromFetch => {
                    // Then put a copy in the cache
                    const copy = responseFromFetch.clone();
                    fetchEvent.waitUntil(
                        caches.open(imageCacheName)
                        .then( imageCache => {
                            return imageCache.put(request, copy);
                        })
                    );
                    return responseFromFetch;
                })
                .catch( error => {
                    // Otherwise show a fallback image
                    return caches.match('/img/fallback.png');
                })
            }) // End match. There's no point in a catch clause for match() because annoyingly, if match doesn’t find a match for the file, the promise doesn’t reject; instead it returns null.
        );
        return; // Go no further.

    } else {
        // Our code above handles HTML pages and images.
        // Now let’s handle everything else (CSS, javascript etc)
        fetchEvent.respondWith(
            // Look for a cached copy of the file
            caches.match(request)
            .then( responseFromCache => {
                if (responseFromCache) {
                    return responseFromCache;
                } // end if
                // Otherwise fetch the file from the network
                return fetch(request);
            }) // end match then
        ); // end respondWith

    }
});
