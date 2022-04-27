(function() {

  // console.log('main1');

  // Store the details of this page in localStorage to match with pages cached by our service worker...
  // and allow our "You're offline!" page to list each cached page as something human-readable rather than just a URL.
  
  const titleElement = document.querySelector('title'),
        metaDescription = document.querySelector('meta[name="description"]');
  //console.log('main2');
  if (titleElement && metaDescription) {
      //console.log('main3');
      const data = {
          "title": titleElement.innerText,
          "description": metaDescription.getAttribute('content')
      };
      //console.log('main4');
      localStorage.setItem(
          window.location.href,
          JSON.stringify(data)
      );
      //console.log('main5');
  }

  // Push Notifications (with help from Urban Airship). NB it is recommended that this snippet be placed on all pages of the site.
  // 86acbd31cd7c09cf30acb66d2fbedc91daa48b86:1542112855.62
  !function(n,t,c,e,u){function r(n){try{f=n(u)}catch(n){return h=n,void i(p,n)}i(s,f)}function i(n,t){for(var c=0;c<n.length;c++)d(n[c],t);
  }function o(n,t){return n&&(f?d(n,f):s.push(n)),t&&(h?d(t,h):p.push(t)),l}function a(n){return o(!1,n)}function d(t,c){
  n.setTimeout(function(){t(c)},0)}var f,h,s=[],p=[],l={then:o,catch:a,_setup:r};n[e]=l;var v=t.createElement("script");
  v.src=c,v.async=!0,v.id="_uasdk",v.rel=e,t.head.appendChild(v)}(window,document,'https://web-sdk.urbanairship.com/notify/v1/ua-sdk.min.js',
    'UA', {
      vapidPublicKey: 'BK0G_5N95hblFqChHfkJwqSDBkKnj5aiyYLqdhcbkk7AvDaWI45UWZny37W9GqVbFElWoIcCdQ6f9udH43jSIkk=',
      websitePushId: 'web.com.greenhill.v2',
      appKey: 'mU_F9iTFQzixv9QgSOfMsw',
      token: 'MTptVV9GOWlURlF6aXh2OVFnU09mTXN3Onp4ZDRvR3NSSS05ZTBNcVVBMmZvVVgybVBaYTV3OWlfTjBsQzk0N19Na28', 
      workerUrl: '/serviceworker.js'
    });



  // // Push Notifications
  // var button = document.getElementById("notifications");
  // if (button) {
  //     button.addEventListener('click', function(e) {
  //         Notification.requestPermission().then(function(result) {
  //             if(result === 'granted') {
  //                 randomNotification();
  //             }
  //         });
  //     });
  // }

  // function randomNotification() {
  //     //var randomItem = Math.floor(Math.random()*games.length);
  //     var notifTitle = 'The Title';
  //     var notifBody = 'Created by Bob';
  //     var notifImg = '/icon-180x180.png';
  //     var options = {
  //         body: notifBody,
  //         icon: notifImg
  //     }
  //     var notif = new Notification(notifTitle, options);
  //     setTimeout(randomNotification, 30000);
  // }




}());