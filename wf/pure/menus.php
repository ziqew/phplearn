<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Simple CSS for menus.">

    <title>Menus &ndash; Pure</title>
<?php include 'head.php'; ?>
</head>
<body>

    <div class="pure-g-r" id="layout">
        <a href="#menu" id="menuLink" class="pure-menu-link">
    <span></span>
</a>

<?php include 'left_menu.php'; ?>
        <div class="pure-u-1" id="main">







<div class="header">
    <h1>Menus</h1>


    <h2>Simple CSS for menus.</h2>

</div>


<!-- adding to the top so that the dropdown example code can run -->
<script>

(function (g) {
// -- Namespaces --


// -- Exposed --
g.YUI_config = {"gallery":"gallery-2013.03.27-22-06","combine":true,"filter":"min"};
}(this));

</script>

<script src="http://yui.yahooapis.com/3.12.0/build/yui/yui-min.js"></script>
<script>
YUI().use('node-base', 'node-event-delegate', function (Y) {
    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('body').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});
</script>


<div class="content">

    <h2 id="horizontal-menu" class="content-subhead">Horizontal Menu<a href="#horizontal-menu" class="content-link"></a></h2>
    <p>
        To create a horizontal menu, add the <code>pure-menu-horizontal</code> class name. You can mark the active list element by adding the <code>pure-menu-selected</code> class to the list element.
    </p>

    <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <ul>
        <li><a href="#">Home</a></li>
        <li class="pure-menu-selected"><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Finance</a></li>
    </ul>
</div>


  <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-menu pure-menu-open pure-menu-horizontal&quot;&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;pure-menu-selected&quot;&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messenger&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Finance&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>


    <h2 id="menu-with-headings" class="content-subhead">Menu with Headings<a href="#menu-with-headings" class="content-link"></a></h2>
    <p>
        To add headings to your menu, place some content outside the <code>&lt;ul&gt;</code> element and wrap it in an <code>&lt;a&gt;</code> element with the <code>pure-menu-heading</code> class name.
    </p>

    <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">Site Title</a>

    <ul>
        <li class="pure-menu-selected"><a href="#">Home</a></li>
        <li><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Finance</a></li>
    </ul>
</div>


  <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-menu pure-menu-open pure-menu-horizontal&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;pure-menu-heading&quot;&gt;Site Title&lt;/a&gt;

    &lt;ul&gt;
        &lt;li class=&quot;pure-menu-selected&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messenger&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Finance&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>


    <h2 id="vertical-menu" class="content-subhead">Vertical Menu<a href="#vertical-menu" class="content-link"></a></h2>
    <p>
        Menus are vertical by default. You need only add the <code>pure-menu</code> class to style the menu, and the <code>pure-menu-open</code> class to ensure that it is visible.
    </p>

    <div class="pure-menu pure-menu-open">
    <a class="pure-menu-heading">Yahoo! Sites</a>

    <ul>
        <li><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Finance</a></li>
        <li class="pure-menu-heading">More Sites!</li>
        <li><a href="#">Games</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">OMG!</a></li>
    </ul>
</div>


  <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-menu pure-menu-open&quot;&gt;
    &lt;a class=&quot;pure-menu-heading&quot;&gt;Yahoo! Sites&lt;/a&gt;

    &lt;ul&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messenger&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Finance&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;pure-menu-heading&quot;&gt;More Sites!&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Games&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;News&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;OMG!&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>


    <h2 id="add-dropdowns-to-menus" class="content-subhead">Add Dropdowns to Menus<a href="#add-dropdowns-to-menus" class="content-link"></a></h2>
    <p>
        Adding dropdowns to menus requires the use of JavaScript. For example, YUI's <code>Y.Menu</code> module adds dropdown functionality and the ability to create JavaScript menus.
    </p>

    <div id="demo-horizontal-menu">
    <ul id="std-menu-items">
        <li class="pure-menu-selected"><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">Finance</a></li>
        <li>
            <a href="#">Other</a>
            <ul>
                <li class="pure-menu-heading">More from Yahoo!</li>
                <li class="pure-menu-separator"></li>
                <li><a href="#">Autos</a></li>
                <li><a href="#">Flickr</a></li>
                <li><a href="#">Answers</a></li>
                <li>
                    <a href="#">Even More</a>
                    <ul>
                        <li><a href="#">Horoscopes</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">OMG</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>

<script>
YUI({
    classNamePrefix: 'pure'
}).use('gallery-sm-menu', function (Y) {

    var horizontalMenu = new Y.Menu({
        container         : '#demo-horizontal-menu',
        sourceNode        : '#std-menu-items',
        orientation       : 'horizontal',
        hideOnOutsideClick: false,
        hideOnClick       : false
    });

    horizontalMenu.render();
    horizontalMenu.show();

});
</script>


  <pre class="snippet" data-language="html"><code>&lt;div id=&quot;demo-horizontal-menu&quot;&gt;
    &lt;ul id=&quot;std-menu-items&quot;&gt;
        &lt;li class=&quot;pure-menu-selected&quot;&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Messenger&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Finance&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;a href=&quot;#&quot;&gt;Other&lt;/a&gt;
            &lt;ul&gt;
                &lt;li class=&quot;pure-menu-heading&quot;&gt;More from Yahoo!&lt;/li&gt;
                &lt;li class=&quot;pure-menu-separator&quot;&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Autos&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Answers&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#&quot;&gt;Even More&lt;/a&gt;
                    &lt;ul&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Horoscopes&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Games&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Jobs&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;OMG&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;

&lt;script&gt;
YUI({
    classNamePrefix: &#x27;pure&#x27;
}).use(&#x27;gallery-sm-menu&#x27;, function (Y) {

    var horizontalMenu = new Y.Menu({
        container         : &#x27;#demo-horizontal-menu&#x27;,
        sourceNode        : &#x27;#std-menu-items&#x27;,
        orientation       : &#x27;horizontal&#x27;,
        hideOnOutsideClick: false,
        hideOnClick       : false
    });

    horizontalMenu.render();
    horizontalMenu.show();

});
&lt;/script&gt;</code></pre>


    <h2 id="menus-with-disabled-items" class="content-subhead">Menus with Disabled Items<a href="#menus-with-disabled-items" class="content-link"></a></h2>
    <p>
        To mark a link as disabled, add an <code>&lt;a&gt;</code> element with the <code>pure-menu-disabled</code> class name. Disabled items appear faded and do not inherit hover styles.
    </p>

    <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">Site Title</a>

    <ul>
        <li class="pure-menu-selected"><a href="#">Home</a></li>
        <li><a href="#">Flickr</a></li>
        <li class="pure-menu-disabled"><a href="#">Disabled Item</a></li>
    </ul>
</div>


  <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-menu pure-menu-open pure-menu-horizontal&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;pure-menu-heading&quot;&gt;Site Title&lt;/a&gt;

    &lt;ul&gt;
        &lt;li class=&quot;pure-menu-selected&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Flickr&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;pure-menu-disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;Disabled Item&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>


    <h2 id="paginators" class="content-subhead">Paginators<a href="#paginators" class="content-link"></a></h2>
    <p>
        To create a paginator control, add the <code>pure-paginator</code> classname to a <code>&lt;ul&gt;</code> element. For paginator controls that look like buttons, add the <code>pure-button</code> class name. For a plainer paginator, you can omit this class.
    </p>

    <ul class="pure-paginator">
    <li><a class="pure-button prev" href="#">&#171;</a></li>
    <li><a class="pure-button" href="#">1</a></li>
    <li><a class="pure-button pure-button-active" href="#">2</a></li>
    <li><a class="pure-button" href="#">3</a></li>
    <li><a class="pure-button" href="#">4</a></li>
    <li><a class="pure-button" href="#">5</a></li>
    <li><a class="pure-button next" href="#">&#187;</a></li>
</ul>


  <pre class="snippet" data-language="html"><code>&lt;ul class=&quot;pure-paginator&quot;&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button prev&quot; href=&quot;#&quot;&gt;&amp;#171;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button pure-button-active&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class=&quot;pure-button next&quot; href=&quot;#&quot;&gt;&amp;#187;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>

</div>


            <div class="legal pure-g-r">
    <div class="pure-u-2-5">
        <div class="l-box">
            <p class="legal-license">
                This site is built with &lt;3 using Pure v0.3.0<br>
                All code on this site is licensed under the <a href="http://yuilibrary.com/license/">BSD License</a> unless stated otherwise.
            </p>
        </div>
    </div>

    <div class="pure-u-1-5">
        <div class="l-box legal-logo">
            <a href="http://yuilibrary.com/">
                <img src="http://purecss.io/img/logo-footer.png" height="30" width="65"
                     alt="YUI logo">
            </a>
        </div>
    </div>

    <div class="pure-u-2-5">
        <div class="l-box">
            <ul class="legal-links">
                <li><a href="https://github.com/yui/pure/">GitHub Project</a></li>
                <li><a href="http://yuilibrary.com/security/">Security Contact Info</a></li>
            </ul>

            <p class="legal-copyright">
                &copy; 2013 Yahoo! Inc. All rights reserved.
            </p>
        </div>
    </div>
</div>


        </div>
    </div>





    <script src="js/rainbow/rainbow-min.js"></script>


</body>
</html>
