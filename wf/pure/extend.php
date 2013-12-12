<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Build on top of Pure.">

    <title>Extend &ndash; Pure</title>
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
    <h1>Extend</h1>


    <h2>Build on top of Pure.</h2>

</div>


<div class="content">

    <p>
        One of our goals when developing Pure was to make it extremely extensible. By including Pure and writing some CSS on top of it, you can ensure that your site or app works in across browsers, while looking truly unique. Best of all, your CSS file size will remain tiny, which is a great thing for mobile users and others with slow connections.
    </p>

    <aside>
        <p>
            Want a quick start? Take a look at some <a href="/layouts/">layouts</a> that we've built on top of Pure.
        </p>
    </aside>


    <h2 id="style-guide" class="content-subhead">Style Guide<a href="#style-guide" class="content-link"></a></h2>

    <h3>Based on SMACSS</h3>
    <p>
        Pure is broken up into a set of responsive modules. From the beginning, we adopted <a href="http://smacss.com/">SMACSS</a> as a convention for writing our CSS. For those who are new to SMACSS, you should give it a quick read, especially the section on <a href="http://smacss.com/book/type-module">module rules</a>.
    </p>

    <h3>Class Name Conventions</h3>
    <p>
        One of the conventions in Pure is for every module to have a standard class name for common rules across a module, and then have additional class names for specific presentational rules for a specific sub-module. All classes start with a <code>pure-</code> prefix to prevent collisions. In addition, we try not to have presentational class names. Instead of calling something <code>pure-form-horizontal</code>, we prefer to call it <code>pure-form-aligned</code>. This prevents a tight coupling between class names and styles, which is good for maintainability.
    </p>

    <p>
        For example, let's consider the HTML and CSS for a <a href="/forms/">Stacked Form</a>:
    </p>

    <h4>Stacked Form: HTML</h4>
    <p>
        A stacked form is created by adding two class names, <code>pure-form</code> and <code>pure-form-stacked</code>.
    </p>

<pre class="snippet" data-language="html"><code>&lt;form class=&quot;pure-form pure-form-stacked&quot;&gt;
    ...
&lt;/form&gt;</code></pre>

    <h4>Stacked Form: CSS</h4>
    <p>
        The two class names serve different purposes. One is used as a general selector to group common rules for all forms, while the other defines specific rules for a stacked form.
    </p>

<pre class="snippet" data-language="css"><code>/*
Standard rules that all Pure Forms have. This includes rules for
styling .pure-form &lt;inputs&gt;, &lt;fieldsets&gt;, and &lt;legends&gt;, as well as layout
rules such as vertical alignments.
*/
.pure-form { ... }

/*
Specific rules that apply to stacked forms. This includes rules
such as taking child &lt;input&gt; elements and making them display: block
for the stacked effect.
*/
.pure-form-stacked  { ... }</code></pre>


    <h2 id="extending-pure" class="content-subhead">Extending Pure<a href="#extending-pure" class="content-link"></a></h2>
    <p>
        When you're extending Pure, we recommend that you follow this convention. For instance, if you wanted to create a new type of form, your HTML and CSS should look something like this:
    </p>

<pre class="snippet" data-language="html"><code>&lt;form class=&quot;pure-form pure-form-custom&quot;&gt;
    ...
&lt;/form&gt;</code></pre>

<pre class="snippet" data-language="css"><code>/* add your custom styles in this selector */
.pure-form-custom { ... }</code></pre>

    <p>
        One common task that you may wish to do is to style buttons so they look different. The <a href="/buttons/">Pure Button Documentation</a> has some examples on how you can create buttons with custom sizes and styles by adopting this modular architecture.
    </p>

    <h2 id="using-the-skin-builder" class="content-subhead">Using the Skin Builder<a href="#using-the-skin-builder" class="content-link"></a></h2>

    <p>
        The <a href="http://yui.github.io/skinbuilder/?mode=pure">Skin Builder</a> is a great way to customize the look and feel of Pure without writing any CSS. Just select a single color, and watch Skin Builder work its magic to skin all of Pure's components. You can copy and paste the generated CSS into a stylesheet and get started quickly.
    </p>

    <p>
        <a class="pure-button" href="http://yui.github.io/skinbuilder/?mode=pure">Launch Skin Builder</a>
    </p>


    <h2 id="pure-bootstrap-javascript" class="content-subhead">Pure + Bootstrap + JavaScript<a href="#pure-bootstrap-javascript" class="content-link"></a></h2>

    <p>
        Pure plays well with other libraries, including Bootstrap and jQuery. As a developer, you can pull in Pure as a foundational CSS framework, and then include specific Bootstrap or jQuery modules that your application may require. There are several benefits to doing this:
    </p>

    <ul>
        <li>
            <p>
                Your website or webapp's CSS will be a lot smaller &mdash; up to <em>5X smaller</em> in some cases!
            </p>
        </li>
        <li>
            <p>
                You get Pure's minimalist look that's easy to build on top of. No need to overwrite styles!
            </p>
        </li>
        <li>
            <p>
                You can take advantage of Bootstrap's ecosystem without pulling in a monolithic Bootstrap CSS file.
            </p>
        </li>
    </ul>

    <p>
        For example, here's a Bootstrap Modal. It's created by including the Pure CSS Rollup, and just adding Bootstrap's <a href="/css/bootstrap/modal.css"><code>modal.css</code></a> along with the jQuery plugin.
    </p>

    <!-- Button to trigger modal -->
<p>
    <a href="#myModal" role="button" class="pure-button pure-button-primary" data-toggle="modal">
        Launch Pure + Bootstrap Modal
    </a>
</p>

<!-- Modal -->
<!--
 * Bootstrap v2.3.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h1 id="myModalLabel">A Bootstrap Modal with Pure</h1>
    </div>

    <div class="modal-body">
        <p>
            This modal is launched by including <em>just</em> the <code>modal.css</code> and <code>modal.js</code> file from Bootstrap, and including Pure to drive all low-level styles. The result is a fully-functional Modal using just a fraction of the CSS.
        </p>

        <form class="pure-form pure-form-stacked">
            <legend>A Stacked Form</legend>

            <label for="email">Email</label>
            <input id="email" type="text" placeholder="Email">

            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password">

            <label for="state">State</label>
            <select id="state">
                <option>AL</option>
                <option>CA</option>
                <option>IL</option>
            </select>

            <label class="pure-checkbox">
                <input type="checkbox"> Remember me
            </label>
        </form>
    </div>

    <div class="modal-footer">
        <button class="pure-button" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="pure-button pure-button-primary">Submit</button>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>


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
