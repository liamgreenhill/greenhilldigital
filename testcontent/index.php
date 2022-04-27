<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/console/runtime.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/prepare_page_vars.php');
$page = [
  'title' => "Test Content",
  'meta_description' => "Test content meta description", 
  'meta_link_canonical' => $production_URL . '/testcontent'
]; 
$is_homepage = false;
require_once($_SERVER['DOCUMENT_ROOT'].'/inc/page_start.php');
?>

<main>
<!-- begin home hero (comment out using HTML comments to instead see page begin with blog content) --> 
<!-- <style>
@media (min-width: 37.5em) {
    .hero { background-image: url(/img/home-hero-medium-wide-769x433.jpg); } /* 769px wide image (covers up to next breakpoint) with a 16:9 aspect ratio */  
}
@media only screen and (min-width: 660px) and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min--moz-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-resolution: 1.5dppx) {
    .hero { background-image: url(/img/home-hero-medium-wide-769@2x.jpg); } /* 1538 wide, 16:9; */ 
}

@media (min-width: 769px) {
    .hero { background-image: url(/img/home-hero-medium-wide-960x540.jpg); } /* 960px wide image (covers up to next breakpoint) with a 16:9 aspect ratio */  
}
@media only screen and (min-width: 769px) and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min--moz-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-resolution: 1.5dppx) {
    .hero { background-image: url(/img/home-hero-medium-wide-960@2x.jpg); } /* 1920 wide, 16:9; */ 
}

@media (min-width: 960px) {
    .hero { background-image: url(/img/home-hero-widest-1100x619.jpg); } /* 1100px wide image with a 16:9 aspect ratio */  
}
@media only screen and (min-width: 960px) and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min--moz-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-device-pixel-ratio: 1.5), only screen and (min-width: 60em) and (min-resolution: 1.5dppx) {
    .hero { background-image: url(/img/home-hero-medium-wide-1100@2x.jpg); } /* 2200 wide, 16:9; */ 
}
</style>

<article class="hero" id="home-main-feature">
    <img 
    srcset="/img/home-hero-narrow-320x240.jpg 320w,  
            /img/home-hero-narrow-480x360.jpg 480w,  
            /img/home-hero-narrow-640x480.jpg 640w,  
            /img/home-hero-narrow-960x720.jpg 960w"
    sizes="100vw" 
    src="/img/home-hero-narrow-960x720.jpg" alt="cat" />
    <div class="hero-detail">
        <h2>Rubadub App</h2>
        <p>Greenhill and Rubadub redefine record shopping for 2018: personalised recommendations direct to your phone, immersive media and easy checkout.</p>
        <span class="btn btn-more">Read story</span>
    </div>
</article> -->

<!-- end of home hero -->

<header id="section-header">
<h1>Services</h1>
<p>We’ve worked with blue-chip companies, boutiques and start-ups to achieve great things.</p>
</header>

<!-- begin basic page with nondescript content -->

<!-- <h1>Give me twenty six soldiers of lead and I will conquer the world</h1>

<p>Lorem ipsum dolor amet forage kickstarter irure banh mi fugiat air plant knausgaard in normcore pinterest. Photo booth adaptogen banjo dreamcatcher reprehenderit shaman disrupt mlkshk elit raclette. Air plant viral blog coloring book craft beer.</p>

<p>Cray gastropub qui irure, health goth incididunt gochujang poke culpa prism chia. Exercitation tattooed vaporware tofu. Enamel pin proident aute, fingerstache minim la croix shoreditch knausgaard sed taxidermy palo santo hella subway tile.</p>

<h2>Give me twenty six soldiers</h2>

<p>Qui shoreditch ut tofu, biodiesel leggings drinking vinegar. PBR&B squid irure letterpress meggings trust fund ea banh mi magna meh jean shorts. Sartorial hammock air plant neutra hot chicken DIY 8-bit offal blog pickled gochujang ea tousled chillwave. Small batch excepteur quis, hexagon lomo forage incididunt gluten-free. Ullamco cold-pressed synth squid ut small batch. Poke everyday carry copper mug twee veniam flannel.</p>

<h2>Give me twenty six soldiers of lead and I will conquer the world</h2>

<h3>Give me twenty six soldiers of lead and I will conquer the world</h3>

<p>Locavore adipisicing cronut, distillery microdosing PBR&B tacos cloud bread trust fund cred qui live-edge hoodie deserunt small batch. Occupy shaman fugiat, church-key beard pitchfork 90's thundercats knausgaard. Four loko glossier duis jianbing. Chicharrones next level selvage scenester tattooed palo santo prism cred.</p>

<p>Pitchfork copper mug eiusmod ugh cronut messenger bag, before they sold out hashtag minim iceland. Blue bottle do squid est, chambray 8-bit cardigan thundercats ennui typewriter snackwave. Bespoke sint butcher, dolore fixie cardigan drinking vinegar. Selvage hoodie qui heirloom. Taiyaki lorem consectetur retro, umami dolore gentrify etsy lo-fi iceland viral next level fanny pack quinoa. Eu occupy tofu quinoa ut. Nulla skateboard VHS, tattooed everyday carry duis affogato mlkshk lumbersexual put a bird on it minim.</p>

<p>XOXO hella next level, blue bottle sed selfies asymmetrical in selvage quis. Keytar church-key air plant beard deserunt disrupt ut. Flannel cliche paleo yuccie occaecat, umami next level messenger bag reprehenderit adaptogen sustainable post-ironic cornhole velit. Austin hammock anim drinking vinegar taxidermy wayfarers everyday carry sed copper mug bicycle rights adaptogen irony. Adipisicing pok pok heirloom vexillologist gochujang chillwave humblebrag tacos umami jean shorts.</p>
 -->
<!-- end basic page with nondescript content -->


<article class="h-entry">

<h1 class="p-name">Give me twenty six soldiers of lead and I will conquer the world</h1>
<p class="byline">
    <span class="author-and-date">by <span class="p-author h-card">Kieran Parker</span> <time class="dt-published" datetime="2018-06-14T09:01:00-04:00">June 14, 2018</time></span> 
    <!-- <span class="byline-additional meta">in <a href="/">blogging</a>, <a href="/">side-projects</a></span> -->
</p>
<p class="standfirst">Every developer should have a blog. Here’s why, and how to stick with it.</p>

<figure>
    <img 
    srcset="/img/320x240.jpg 320w,
            /img/480x360.jpg 480w,
            /img/640x480.jpg 640w, 
            /img/752x564.jpg 752w, 
            /img/960x720.jpg 960w" 
    sizes="(max-width: 59em) 90vw, 
           (max-width: 105em) 50vw,
           960px" 
    src="/img/960x720.jpg" alt="A referee uses the we.ref app during a football match at Broadwood Stadium near Glasgow">
    <figcaption>We.Ref app in action. Photo by Bob Smith.</figcaption>
</figure>

<div class="article-body description e-content">
    
<p>A blog is useful for many reasons. It can become <a href="/">a source of leads</a>, it can be the place where, in the future, you might sell your products if you want to become an indie developer, or it can simply be the place where you have your audience and express your ideas.</p>

<p>I’ve been blogging for more than 11 years now, more or less consistently — although sometimes I stopped for too long. I recently revamped the blog and started to write consistently — very consistently — to the point I now write every single day of the week. I’ve already seen a lot of good results.</p>

<figure class="gh-figure">
    <img src="/img/home-hero-narrow-960x720.jpg" alt="" />
    <figcaption>Noel Gallaghers High Flying Birds</figcaption>
</figure>

<p>Sed eu sapien sed metus dapibus imperdiet sit amet non diam. Vivamus quis dolor eros. Donec ut libero ut nisi imperdiet hendrerit vitae at lacus. Nunc convallis molestie tortor eget ultricies.</p>

<p>Pellentesque imperdiet accumsan tellus, id varius metus scelerisque at. Donec fermentum sapien id libero pulvinar, at ornare magna ultrices. In hac habitasse platea dictumst. Donec tincidunt nibh id massa dignissim consectetur. Nulla a tortor vehicula, imperdiet velit vel, elementum quam. Aliquam id leo quis odio molestie sodales. Sed eget luctus enim. Suspendisse id tristique risus. Nunc vitae eros erat.</p>

<figure class="gh-figure gh-figure-alt">
    <img src="/img/home-hero-narrow-960x720.jpg" alt="" />
    <figcaption>Noel Gallaghers High Flying Birds</figcaption>
</figure>

<p>Sed eu sapien sed metus dapibus imperdiet sit amet non diam. Vivamus quis dolor eros. Donec ut libero ut nisi imperdiet hendrerit vitae at lacus. Nunc convallis molestie tortor eget ultricies.</p>

<p>Pellentesque imperdiet accumsan tellus, id varius metus scelerisque at. Donec fermentum sapien id libero pulvinar, at ornare magna ultrices. In hac habitasse platea dictumst. Donec tincidunt nibh id massa dignissim consectetur. Nulla a tortor vehicula, imperdiet velit vel, elementum quam. Aliquam id leo quis odio molestie sodales. Sed eget luctus enim. Suspendisse id tristique risus. Nunc vitae eros erat highlight.</p>

<!-- <figure class="gh-figure-highlight">
    <img 
    srcset="/img/home-hero-narrow-320x240.jpg 320w,  
            /img/home-hero-narrow-480x360.jpg 480w,  
            /img/home-hero-narrow-640x480.jpg 640w,  
            /img/home-hero-narrow-960x720.jpg 960w"
    sizes="100vw" 
    src="/img/home-hero-narrow-320x240.jpg" alt="cat" />
    <figcaption>Noel Gallaghers High Flying Birds</figcaption>
</figure> -->

<figure class="gh-figure-highlight">
    <img 
    srcset="/img/home-hero-medium-wide-769x433.jpg 769w, 
            /img/home-hero-medium-wide-960x540.jpg 960w, 
            /img/home-hero-widest-1100x619.jpg 1100w, 
            /img/home-hero-medium-wide-769@2x.jpg 1538w, 
            /img/home-hero-medium-wide-960@2x.jpg 1920w,  
            /img/home-hero-medium-wide-1100@2x.jpg 2200w" 
    sizes="100vw" 
    src="/img/home-hero-medium-wide-1100@2x.jpg" alt="cat" />
    <figcaption>Noel Gallagher’s High Flying Birds</figcaption>
</figure>

<p>Sed eu sapien sed metus dapibus imperdiet sit amet non diam. Vivamus quis dolor eros. Donec ut libero ut nisi imperdiet hendrerit vitae at lacus. Nunc convallis molestie tortor eget ultricies.</p>

<p>Pellentesque imperdiet accumsan tellus, id varius metus scelerisque at. Donec fermentum sapien id libero pulvinar, at ornare magna ultrices. In hac habitasse platea dictumst. Donec tincidunt nibh id massa dignissim consectetur. Nulla a tortor vehicula, imperdiet velit vel, elementum quam. Aliquam id leo quis odio molestie sodales. Sed eget luctus enim. Suspendisse id tristique risus. Nunc vitae eros erat.</p>


<table>
    <thead>
        <tr>
            <th>Col 1</th>
            <th>Col 2</th>
            <th>Col 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Val 1</td>
            <td>Val 2</td>
            <td>Val 3</td>
        </tr>
        <tr>
            <td>Val 1</td>
            <td>Val 2</td>
            <td>Val 3</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Col 1</th>
            <th>Col 2</th>
            <th>Col 3</th>
        </tr>
    </tfoot>
</table>

<p>Sed eu sapien sed metus dapibus imperdiet sit amet non diam. Vivamus quis dolor eros. Donec ut libero ut nisi imperdiet hendrerit vitae at lacus. Nunc convallis molestie tortor eget ultricies. Pellentesque imperdiet accumsan tellus, id varius metus scelerisque at. Donec fermentum sapien id libero pulvinar, at ornare magna ultrices. In hac habitasse platea dictumst. Donec tincidunt nibh id massa dignissim consectetur. Nulla a tortor vehicula, imperdiet velit vel, elementum quam. Aliquam id leo quis odio molestie sodales. Sed eget luctus enim. Suspendisse id tristique risus. Nunc vitae eros erat.</p>

<p><small>Small print text here</small></p>

<dl>
    <dt>Item One Definition Title</dt>
    <dd>Item One Definition Data</dd>
    <dt>Item Two Definition Title</dt>
    <dd>Item Two Definition Data</dd>
</dl>

<h2>Give me twenty six soldiers of lead and I will conquer the world</h2>

<h3>Give me twenty six soldiers of lead and I will conquer the world</h3>

<p>Anyone has a unique angle, a perspective on something that’s worth sharing. You might think you don’t know as much as person X, but person Y might have much less experience than you and would benefit from reading your thoughts and learnings.</p>

<p>Also, the best moment to teach something is right after you’ve learned it, because you remember how not knowing about it feels.</p>

<h3>"I'm not a good writer"</h3>

<p>I’m not either, but I don’t care.</p>

<p>Just remember: you will never become a good writer unless you practice writing every day for years. You <em>will become</em> a good writer eventually.</p>

<blockquote>
    <p>One more attribute the modern typographer must have: the capacity for taking great pains with seemingly unimportant detail. To him, one typographical point must be as important as one inch, and he must harden his heart against the accusation of being too fussy.</p>
    <footer>— Hans P. Schmoller, in ‘Book Design Today’, <span class="cite-and-pubdate"><cite>Printing Review</cite>, 1951</span></footer>
</blockquote>

<p>Text following a blockquoute and preceding a pull quote.</p>

<blockquote class="pullquote" cite="http://inl-agency.com/">
    <p>Always available, always happy to find good solutions, clear thinking. <br />Greenhill GET IT.</p>
    <footer>– Rich Thomas, Director INL Agency, Geneva</footer>
</blockquote>

<h3>A third level heading that will run ontf two lines because it has a lot of crap in it</h3>

<p>Some text here.</p>

<h4>Give me twenty six soldiers of lead and I will conquer the world</h4>

<p>Some text here.</p>

<ul>
    <li>First list item</li>
    <li>Second list item</li>
    <li>Third list item
        <ul>
            <li>inner item one</li>
            <li>inner item two</li>
            <li>inner item three</li>
        </ul>
    </li>
</ul>

<ol>
    <li>First list item</li>
    <li>Second list item</li>
</ol>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dignissim dolor et laoreet consequat. Sed eu augue arcu. Maecenas lectus tortor, pretium at ex id, tempor tristique tellus. Pellentesque efficitur tincidunt quam et ornare. Donec dictum, sapien sit amet pulvinar sagittis, urna erat fringilla nisl, eget iaculis felis ipsum iaculis metus. Fusce egestas finibus sem sit amet laoreet. Donec in lacus nulla. Donec iaculis libero et egestas tempor.</p>

<p>Sed eu sapien sed metus dapibus imperdiet sit amet non diam. Vivamus quis dolor eros. Donec ut libero ut nisi imperdiet hendrerit vitae at lacus. Nunc convallis molestie tortor eget ultricies. Pellentesque imperdiet accumsan tellus, id varius metus scelerisque at. Donec fermentum sapien id libero pulvinar, at ornare magna ultrices. In hac habitasse platea dictumst. Donec tincidunt nibh id massa dignissim consectetur. Nulla a tortor vehicula, imperdiet velit vel, elementum quam. Aliquam id leo quis odio molestie sodales. Sed eget luctus enim. Suspendisse id tristique risus. Nunc vitae eros erat.</p>

</div> <!-- .article-body -->

</article>

<form action="">
    <label for="input-1" class="form-group">
        <b class="label-text">Input 1</b>
        <input type="text" id="input-1" />
    </label>
    <div class="error-msg">This is required.</div>
    <label for="input-2" class="form-group">
        <b class="label-text">Input 2</b>
        <input type="url" id="input-2" />
    </label>
    <label class="form-group" for="input-3">
        <b class="label-text">Birthday</b>
        <span class="custom-select"> <!-- using a span set in CSS as block-level because using a div inside a label isn't valid HTML5 -->
            <select id="input-3">
                <option selected disabled>Month</option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
        </span>
    </label>
    <label for="input-4" class="form-group">
        <b class="label-text">Input 4</b>
        <input type="text" id="input-4" />
    </label>
    <div class="error-msg">This is required.</div>
    <div class="submit-wrap">
        <button type="submit">Submit</button>
    </div>
</form>

<section class="teaser">
    <header>
        <h2 class="teaser-heading">Selected Services</h2>
        <p>Sometimes a paragraph follows the teaser heading just to introduce the list content.</p>
    </header>

    <ul class="teaser-list">
        <li>
            <a class="wrapping-anchor teaser-group" href="/">
                <img srcset="/img/320x240.jpg 320w,
                            /img/480x360.jpg 480w,
                            /img/640x480.jpg 640w, 
                            /img/752x564.jpg 752w, 
                            /img/960x720.jpg 960w" 
                        sizes="(max-width: 59.99em) 90vw, 
                                (max-width: 105em) 17.5em,
                                960px" 
                        src="/img/960x720.jpg" alt="A referee uses the we.ref app during a football match at Broadwood Stadium near Glasgow">
                <div class="teaser-text">
                    <h3 class="teaser-item-heading">iOS and Android App Development</h3>
                    <p>Two-way communication between your central database and your customer app</p>
                </div>
            </a>
        </li>
        <li>
            <a class="wrapping-anchor teaser-group" href="/">
                <img srcset="/img/320x240.jpg 320w,
                            /img/480x360.jpg 480w,
                            /img/640x480.jpg 640w, 
                            /img/752x564.jpg 752w, 
                            /img/960x720.jpg 960w" 
                        sizes="(max-width: 59.99em) 90vw, 
                                (max-width: 105em) 17.5em,
                                960px" 
                        src="/img/960x720.jpg" alt="A referee uses the we.ref app during a football match at Broadwood Stadium near Glasgow">
                <div class="teaser-text">
                    <h3 class="teaser-item-heading">Some other service</h3>
                    <p>Two-way communication between your central database and your customer app</p>
                </div>
            </a>
        </li>
        <li>
            <a class="wrapping-anchor teaser-group" href="/">
                <img srcset="/img/320x240.jpg 320w,
                            /img/480x360.jpg 480w,
                            /img/640x480.jpg 640w, 
                            /img/752x564.jpg 752w, 
                            /img/960x720.jpg 960w" 
                        sizes="(max-width: 59.99em) 90vw, 
                                (max-width: 105em) 17.5em,
                                960px" 
                        src="/img/960x720.jpg" alt="A referee uses the we.ref app during a football match at Broadwood Stadium near Glasgow">
                <div class="teaser-text">
                    <h3 class="teaser-item-heading">E-commerce Websites</h3>
                    <p>Two-way communication between your central database and your customer app</p>
                </div>
            </a>
        </li>
    </ul>
    <a class="btn btn-more btn-teaser-browse-all" href="/services/">Browse all services</a>
</section>

<section class="teaser">
    <header>
        <h2 class="teaser-heading">Latest Journal Entries</h2>
    </header>
    <?php perch_blog_recent_posts(10); ?>
    <a class="btn btn-more btn-teaser-browse-all" href="/journal/">Browse all entries</a>
</section>

<section class="teaser team-list">

    <h2 class="teaser-heading">Meet The Team</h2>
    <ul class="teaser-list">
        <li class="teaser-group">
            <img srcset="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg 400w,
                    https://www.greenhilldigital.com/console/resources/lhghphoto-w800.jpg 800w" sizes="(max-width: 59.99em) 90vw, 
                   (max-width: 105em) 17.5em,
                   960px" src="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg" alt="A photo of Laurence Hughes, Technical Director">
            <div class="teaser-text">
                <h3 class="teaser-item-heading">Laurence Hughes</h3>
                <p>Technical Director</p>
            </div>
        </li>
        <li class="teaser-group">
            <img srcset="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg 400w,
                    https://www.greenhilldigital.com/console/resources/lhghphoto-w800.jpg 800w" sizes="(max-width: 59.99em) 90vw, 
                   (max-width: 105em) 17.5em,
                   960px" src="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg" alt="A photo of Laurence Hughes, Technical Director">
            <div class="teaser-text">
                <h3 class="teaser-item-heading">Laurence Hughes</h3>
                <p>Technical Director</p>
            </div>
        </li>
        <li class="teaser-group">
            <img srcset="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg 400w,
                    https://www.greenhilldigital.com/console/resources/lhghphoto-w800.jpg 800w" sizes="(max-width: 59.99em) 90vw, 
                   (max-width: 105em) 17.5em,
                   960px" src="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg" alt="A photo of Laurence Hughes, Technical Director">
            <div class="teaser-text">
                <h3 class="teaser-item-heading">Laurence Hughes</h3>
                <p>Technical Director</p>
            </div>
        </li>
        <li class="teaser-group">
            <img srcset="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg 400w,
                    https://www.greenhilldigital.com/console/resources/lhghphoto-w800.jpg 800w" sizes="(max-width: 59.99em) 90vw, 
                   (max-width: 105em) 17.5em,
                   960px" src="https://www.greenhilldigital.com/console/resources/lhghphoto-w400.jpg" alt="A photo of Laurence Hughes, Technical Director">
            <div class="teaser-text">
                <h3 class="teaser-item-heading">Laurence Hughes</h3>
                <p>Technical Director</p>
            </div>
        </li>
    </ul>
    <a class="btn btn-more btn-teaser-browse-all" href="/services/">Browse all services</a>

</section> <!-- selected services -->

</main>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/page_end.php'); ?>
