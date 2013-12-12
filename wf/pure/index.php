<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A set of small, responsive CSS modules that you can use in every web project.">

    <title>Pure</title>
    <?php include 'head.php'; ?>

</head>
<body>

<div class="pure-g-r" id="layout">
<a href="#menu" id="menuLink" class="pure-menu-link">
    <span></span>
</a>
<?php include 'left_menu.php'; ?>


<div class="pure-u-1" id="main">


    <div class="hero">
        <div class="hero-titles">
            <h1>Pure</h1>

            <h2>A set of small, responsive CSS modules that you can use in every web project.</h2>
        </div>

        <div class="hero-cta">
            <pre class="snippet" data-language="html"><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;http://yui.yahooapis.com/pure/0.3.0/pure-min.css&quot;&gt;</code></pre>

            <p>
                <a class="pure-button pure-button-cta" href="/bootstrap/customize/">Get Started</a>
                <a class="pure-button pure-button-secondary" href="https://github.com/yui/pure/">View on GitHub</a>
            </p>
        </div>
    </div>

    <div class="marketing-ribbon">
        <div class="size-chart l-vbox pure-g">
            <div class="size-chart-item size-chart-base pure-u" style="width: 20.1730%;">
                <a class="size-chart-label" href="/base/">
                    Base <span class="size-chart-size">1.2KB</span>
                </a>
            </div>
            <div class="size-chart-item size-chart-grids pure-u" style="width: 14.6891%;">
                <a class="size-chart-label" href="/grids/">
                    Grids <span class="size-chart-size">0.9KB</span>
                </a>
            </div>
            <div class="size-chart-item size-chart-forms pure-u" style="width: 23.7310%;">
                <a class="size-chart-label" href="/forms/">
                    Forms <span class="size-chart-size">1.4KB</span>
                </a>
            </div>
            <div class="size-chart-item size-chart-buttons pure-u" style="width: 13.5466%;">
                <a class="size-chart-label" href="/buttons/">
                    Buttons <span class="size-chart-size">0.8KB</span>
                </a>
            </div>
            <div class="size-chart-item size-chart-tables pure-u" style="width: 8.1116%;">
                <a class="size-chart-label" href="/tables/">
                    Tables <span class="size-chart-size">0.5KB</span>
                </a>
            </div>
            <div class="size-chart-item size-chart-menus pure-u" style="width: 19.7487%;">
                <a class="size-chart-label" href="/menus/">
                    Menus <span class="size-chart-size">1.2KB</span>
                </a>
            </div>
        </div>

        <div class="content">
            <div class="l-box">
                <h3>CSS with a minimal footprint.</h3>

                <p>
                    Pure is ridiculously tiny. The entire set of modules clocks in at <b>4.4KB* minified and gzipped</b>,
                    without forgoing responsive styles, design, or ease of use. Crafted with mobile devices in mind, it
                    was important to us to keep our file sizes small, and every line of CSS was carefully considered. If
                    you decide to only use a subset of these modules, you'll save even more bytes.
                </p>

                <p style="font-size:small;">
                    * We can add correctly :) the numbers above are individual module sizes; when grouped together
                    gzipping compresses them even more.
                </p>
            </div>
        </div>
    </div>

    <div class="pure-g-r marketing-ribbon">
        <div class="pure-u-1-3">
            <div class="l-box">
                <h3>Your CSS foundation.</h3>

                <p>
                    Pure builds on <a href="http://necolas.github.io/normalize.css/">Normalize.css</a> and provides
                    layout and styling for native HTML elements, plus the most common UI components. It's what you need,
                    without the cruft.
                </p>
            </div>
        </div>

        <div class="pure-u-1-3">
            <div class="l-box">
                <h3>Made with mobile in mind.</h3>

                <p>
                    Pure is responsive out of the box, so elements look great on all screen sizes. Customize your styles
                    with the <a href="http://yui.github.io/skinbuilder/?mode=pure">Skin Builder</a> to make your style
                    your own.
                </p>
            </div>
        </div>

        <div class="pure-u-1-3">
            <div class="l-box">
                <h3>Stays out of your way.</h3>

                <p>
                    Pure has minimal styles and encourages you to write your application styles on top of it. It's
                    designed to get out of your way and makes it easy to override styles.
                </p>
            </div>
        </div>
    </div>


    <div class="pure-g-r marketing-ribbon">
        <div class="pure-u-1-2">
            <div class="l-box">
                <a href="/layouts/">
                    <img src="img/layout-icon.jpg" alt="Diagram of a sample layout.">
                </a>
            </div>
        </div>

        <div class="pure-u-1-2">
            <div class="l-hbox">
                <h3>Create responsive layouts.</h3>

                <p>
                    By using <a href="/grids/">Grids</a>, <a href="/menus/">Menus</a>, and more, it's easy to create
                    beautiful responsive layouts for all screen sizes. We've made it easy for you to get started. Take a
                    look at a few different <a href="/layouts/">layouts</a> and start your next web project with a
                    rock-solid foundation.
                </p>

                <p>
                    <a href="/layouts/" class="pure-button">View Layouts</a>
                </p>
            </div>
        </div>
    </div>

    <div class="pure-g-r marketing-ribbon">
        <div class="pure-u-1-2">
            <div class="l-hbox">
                <h3>Create your own look and feel.</h3>

                <p>
                    Unlike other frameworks, Pure's design is unopinionated, minimal and flat. We believe that it's much
                    easier to add new CSS rules than to overwrite existing rules. By adding a few lines of CSS, you can
                    customize Pure's appearance to work with your web project.
                </p>

                <p>
                    <a href="/extend/" class="pure-button">Extend Pure</a>
                </p>
            </div>
        </div>
        <div class="pure-u-1-2">
            <div class="l-box sample-buttons">
                <p>
                    <button class="pure-button">Grey</button>
                    <button class="pure-button pure-button-a">Blue</button>
                    <button class="pure-button pure-button-b">Yellow</button>
                </p>
                <p>
                    <button class="pure-button pure-button-c">Black</button>
                    <button class="pure-button pure-button-d">Green</button>
                    <button class="pure-button pure-button-e">Red</button>
                </p>
                <p>
                    <button class="pure-button pure-button-f">Purple</button>
                    <button class="pure-button pure-button-g">Orange</button>
                    <button class="pure-button pure-button-h">Indigo</button>
                </p>
            </div>
        </div>
    </div>


    <div class="legal pure-g-r">
        <div class="pure-u-2-5">
            <div class="l-box">
                <p class="legal-license">
                    This site is built with &lt;3 using Pure v0.3.0<br>
                    All code on this site is licensed under the <a href="http://yuilibrary.com/license/">BSD License</a>
                    unless stated otherwise.
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
