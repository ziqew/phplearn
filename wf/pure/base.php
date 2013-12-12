<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Leveraging Normalize.css, an HTML5-ready alternative to CSS resets.">
<title>Base &ndash; Pure</title>
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
    <h1>Base</h1>


    <h2>Leveraging Normalize.css, an HTML5-ready alternative to CSS resets.</h2>

</div>


<div class="content">
    <h2 id="the-foundation" class="content-subhead">The Foundation<a href="#the-foundation" class="content-link"></a></h2>
    <p>
        All modules in Pure build on top of <a href="http://necolas.github.com/normalize.css/">Normalize.css</a>. It's our foundational layer to maintain some degree of cross-browser consistency. We use Normalize v1.x because it supports older versions of Internet Explorer. We like Normalize so much that we put it on our CDN. You can pull in Normalize.css by adding this <code>&lt;link&gt;</code> element on your page:
    </p>

    <pre class="snippet" data-language="html"><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;http://yui.yahooapis.com/pure/0.3.0/base-min.css&quot;&gt;</code></pre>

    <h3>A bit about Normalize.css</h3>
    <p>
        <a href="http://necolas.github.com/normalize.css/">Normalize.css</a> is an open-source project by <a href="http://twitter.com/necolas">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal">Jonathan Neal</a>. <a href="http://nicolasgallagher.com/about-normalize-css/">In their own words</a>:
    </p>

    <blockquote class="content-quote">
        Normalize.css is a small CSS file that provides better cross-browser consistency in the default styling of HTML elements. It’s a modern, HTML5-ready, alternative to the traditional CSS reset."
    </blockquote>

    <p>
        Normalize.css comes with <a href="https://github.com/necolas/normalize.css/wiki">great documentation</a> and a <a href="http://nicolasgallagher.com/about-normalize-css/">thorough guide</a> explaining how it differs from a traditional reset. You can also check out YUI's <a href="http://yuilibrary.com/yui/docs/cssnormalize/">CSSNormalize</a> module, which includes the generic Normalize along with a <a href="http://yuilibrary.com/yui/docs/cssnormalize/#context">contextual version</a>. The contextual version of Normalize only applies normalized styles to elements that are children of an element with the class name <code>yui3-normalized</code>.
    </p>

    <h2 id="typography" class="content-subhead">Typography<a href="#typography" class="content-link"></a></h2>
    <p>
        To keep Pure lean and extensible, we do not add any typographic styles over the foundational layer provided by Normalize. This means that you get headings with different sizes, blockquotes, lists, definition lists, and more, but their styles are minimal and easy to override.
    </p>


    <h2 id="headings" class="content-subhead">Headings<a href="#headings" class="content-link"></a></h2>
    <p>
        Headings run from 1 to 6 in decreasing size. Font sizes are defined in <code>em</code>.
    </p>

    <table class="pure-table pure-table-bordered">
    <tbody>
        <tr>
            <td><h1>Heading 1</h1></td>
            <td><h2>Heading 2</h2></td>
            <td><h3>Heading 3</h3></td>
        </tr>
        <tr>
            <td><h4>Heading 4</h4></td>
            <td><h5>Heading 5</h5></td>
            <td><h6>Heading 6</h6></td>
        </tr>
    </tbody>
</table>



    <h2 id="lists" class="content-subhead">Lists<a href="#lists" class="content-link"></a></h2>
    <p>
        Lists come in different forms. There are unordered lists, ordered lists, and definition lists. Normalize provides basic styling and cross-browser consistency for these lists. You can style these further in your specific application. If you're looking to use lists to make menus, check out <a href="/menus/">Menu CSS</a>.
    </p>

    <div class="pure-g-r">
    <div class="pure-u-1-3">
        <h4>Unordered List</h4>

        <ul>
            <li>list item 1</li>
            <li>list item 1
                <ul>
                    <li>list item 2</li>
                    <li>list item 2
                        <ul>
                            <li>list item 3</li>
                            <li>list item 3</li>
                        </ul>
                    </li>
                    <li>list item 2</li>
                    <li>list item 2</li>
                </ul>
            </li>
            <li>list item 1</li>
            <li>list item 1</li>
        </ul>
    </div>

    <div class="pure-u-1-3">
        <h3>Ordered List</h3>

        <ol>
            <li>list item 1</li>
            <li>list item 1
                <ol>
                    <li>list item 2</li>
                    <li>list item 2
                        <ol>
                            <li>list item 3</li>
                            <li>list item 3</li>
                        </ol>
                    </li>
                    <li>list item 2</li>
                    <li>list item 2</li>
                </ol>
            </li>
            <li>list item 1</li>
            <li>list item 1</li>
        </ol>
    </div>

    <div class="pure-u-1-3">
        <h3>Definition Lists</h3>

        <dl>
            <dt>Definition term</dt>
            <dd>Definition description</dd>

            <dt>Definition term</dt>
            <dd>Definition description</dd>
            <dd>Definition description</dd>

            <dt>Definition term</dt>
            <dt>Definition term</dt>
            <dd>Definition description</dd>
        </dl>
    </div>
</div>



    <h2 id="blockquotes" class="content-subhead">Blockquotes<a href="#blockquotes" class="content-link"></a></h2>
    <p>
        Blockquotes encompass text that is meant to represent a quotation. By default, blockquotes look like regular text, except that they are indented. This gives you the freedom to set your own styles on top. Here's a default one:
    </p>

    <blockquote>
    One small step for man, one giant leap for mankind.
</blockquote>


  <pre class="snippet" data-language="html"><code>&lt;blockquote&gt;
    One small step for man, one giant leap for mankind.
&lt;/blockquote&gt;</code></pre>

    <p>
        Taking advantage of the lack of default styles, we've customized the blockquotes on this site to look a little different. We encourage you to do the same based on how your site looks.
    </p>

    <blockquote class="content-quote">
        One small step for man, one giant leap for mankind.
    </blockquote>


    <h2 id="abbreviations" class="content-subhead">Abbreviations<a href="#abbreviations" class="content-link"></a></h2>
    <p>
        The <code>&lt;abbr&gt;</code> represents an abbreviation. If a <code>title</code> attribute is provided, it'll show up on hover. Abbreviations generally have a small dotted underline.
    </p>

    <p>
    <abbr title="Yahoo User Interface">YUI</abbr> is a free, open source JavaScript and CSS library for building richly interactive web applications.
</p>


  <pre class="snippet" data-language="html"><code>&lt;p&gt;
    &lt;abbr title=&quot;Yahoo User Interface&quot;&gt;YUI&lt;/abbr&gt; is a free, open source JavaScript and CSS library for building richly interactive web applications.
&lt;/p&gt;</code></pre>


    <h2 id="addresses" class="content-subhead">Addresses<a href="#addresses" class="content-link"></a></h2>
    <p>
        The <code>&lt;address&gt;</code> is used to reference contact information. By default, addresses have no specific styling. However, they can be styled using the various inline styles available through Normalize.
    </p>

    <address>
    <a href="https://github.com/tilomitra">Tilo Mitra</a><br>
    <a href="https://github.com/ericf">Eric Ferraiuolo</a><br>
    <a href="https://github.com/msweeney">Matt Sweeney</a><br>
    <a href="https://github.com/jconniff">Jeff Conniff</a><br>
</address>


  <pre class="snippet" data-language="html"><code>&lt;address&gt;
    &lt;a href=&quot;https://github.com/tilomitra&quot;&gt;Tilo Mitra&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://github.com/ericf&quot;&gt;Eric Ferraiuolo&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://github.com/msweeney&quot;&gt;Matt Sweeney&lt;/a&gt;&lt;br&gt;
    &lt;a href=&quot;https://github.com/jconniff&quot;&gt;Jeff Conniff&lt;/a&gt;&lt;br&gt;
&lt;/address&gt;</code></pre>


    <h2 id="inline-styles" class="content-subhead">Inline Styles<a href="#inline-styles" class="content-link"></a></h2>
    <p>
        There are numerous other inline styles that can be used. Here's a quick list from the <a href="http://github.com/necolas/normalize.css">Normalize documentation</a>:
    </p>

    <div class="pure-g-r">
    <div class="pure-u-1-2">
        <div class="l-box">
            <p>
                <cite>cite element</cite> example<br>
                The <code>code element</code> example<br>
                The <del>del element</del> example<br>
                The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples<br>
                The <em>em element</em> example<br>
                The <i>i element</i> example<br>
                The img element <img src="http://lorempixel.com/24/24" alt=""> example<br>
                The <ins>ins element</ins> example<br>
                The <kbd>kbd element</kbd> example<br>
                The <mark>mark element</mark> example
            </p>
        </div>
    </div>

    <div class="pure-u-1-2">
        <div class="l-box">
            <p>
                The <q>q element <q>inside</q> a q element</q> example<br>
                The <s>s element</s> example<br>
                The <samp>samp element</samp> example<br>
                The <small>small element</small> example<br>
                The <span>span element</span> example<br>
                The <strong>strong element</strong> example<br>
                The <sub>sub element</sub> example<br>
                The <sup>sup element</sup> example<br>
                The <u>u element</u> example<br>
                The <var>var element</var> example
            </p>
        </div>
    </div>
</div>



    <h2 id="moving-beyond-normalize" class="content-subhead">Moving beyond Normalize<a href="#moving-beyond-normalize" class="content-link"></a></h2>
    <p>
        Normalize.css is a great starting place for your project, but some HTML elements such as forms, tables, and menus require more styling than what's provided by Normalize.
    </p>

    <p>
        We made a more opinionated look and feel for these elements, while keeping them minimal enough so that you can customize them for your site or app's needs. Check out our CSS for <a href="/forms/">Forms</a>, <a href="/tables/">Tables</a>, and <a href="/menus/">Menus</a>.
    </p>
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
