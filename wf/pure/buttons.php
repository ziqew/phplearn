<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Simple CSS for buttons.">

    <title>Buttons &ndash; Pure</title>
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
    <h1>Buttons</h1>


    <h2>Simple CSS for buttons.</h2>

</div>


<div class="content">

    <h2 id="default-buttons" class="content-subhead">Default Buttons<a href="#default-buttons" class="content-link"></a></h2>
    <p>
        To create a Pure Button, add the <code>pure-button</code> classname to any <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.
    </p>


    <a class="pure-button" href="#">A Pure Button</a>
<button class="pure-button">A Pure Button</button>




  <pre class="snippet" data-language="html"><code>&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;A Pure Button&lt;/a&gt;
&lt;button class=&quot;pure-button&quot;&gt;A Pure Button&lt;/button&gt;</code></pre>

    <h2 id="disabled-buttons" class="content-subhead">Disabled Buttons<a href="#disabled-buttons" class="content-link"></a></h2>
    <p>
        To mark a button as disabled, add the <code>pure-button-disabled</code> classname alongside <code>pure-button</code>.
    </p>


    <a class="pure-button pure-button-disabled" href="#">A Disabled Button</a>
<button class="pure-button pure-button-disabled">A Disabled Button</button>



  <pre class="snippet" data-language="html"><code>&lt;a class=&quot;pure-button pure-button-disabled&quot; href=&quot;#&quot;&gt;A Disabled Button&lt;/a&gt;
&lt;button class=&quot;pure-button pure-button-disabled&quot;&gt;A Disabled Button&lt;/button&gt;</code></pre>

    <h2 id="active-buttons" class="content-subhead">Active Buttons<a href="#active-buttons" class="content-link"></a></h2>
    <p>
        To style a button so that it appears "pressed", add the <code>pure-button-active</code> classname alongside <code>pure-button</code>.
    </p>


    <a class="pure-button pure-button-active" href="#">An Active Button</a>
<button class="pure-button pure-button-active">An Active Button</button>




  <pre class="snippet" data-language="html"><code>&lt;a class=&quot;pure-button pure-button-active&quot; href=&quot;#&quot;&gt;An Active Button&lt;/a&gt;
&lt;button class=&quot;pure-button pure-button-active&quot;&gt;An Active Button&lt;/button&gt;</code></pre>

    <h2 id="primary-buttons" class="content-subhead">Primary Buttons<a href="#primary-buttons" class="content-link"></a></h2>
    <p>
        To indicate that a button represents a primary action, add the <code>pure-button-primary</code> classname alongside <code>pure-button</code>.
    </p>


    <a class="pure-button pure-button-primary" href="#">A Primary Button</a>
<button class="pure-button pure-button-primary">A Primary Button</button>



  <pre class="snippet" data-language="html"><code>&lt;a class=&quot;pure-button pure-button-primary&quot; href=&quot;#&quot;&gt;A Primary Button&lt;/a&gt;
&lt;button class=&quot;pure-button pure-button-primary&quot;&gt;A Primary Button&lt;/button&gt;</code></pre>



    <h2 id="customizing-buttons" class="content-subhead">Customizing Buttons<a href="#customizing-buttons" class="content-link"></a></h2>
    <p>
        Thanks to Pure's minimal styling, it is easy to build off of the generic Pure button and create customized buttons for your own application.
    </p>

    <p>
        To customize button styles, you should group your custom CSS into a class such as <code>pure-button-foo</code>, which you can then append to an element that already has the <code>pure-button</code> classname. Here are some examples.
    </p>

    <h3 class="content-subhead">Colored buttons with rounded corners</h3>


    <div>
    <style scoped>

        .pure-button-success,
        .pure-button-error,
        .pure-button-warning,
        .pure-button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .pure-button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .pure-button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .pure-button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .pure-button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

    </style>

    <button class="pure-button pure-button-success">Success Button</button>
    <button class="pure-button pure-button-error">Error Button</button>
    <button class="pure-button pure-button-warning">Warning Button</button>
    <button class="pure-button pure-button-secondary">Secondary Button</button>
</div>



  <pre class="snippet" data-language="html"><code>&lt;div&gt;
    &lt;style scoped&gt;

        .pure-button-success,
        .pure-button-error,
        .pure-button-warning,
        .pure-button-secondary {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
        }

        .pure-button-success {
            background: rgb(28, 184, 65); /* this is a green */
        }

        .pure-button-error {
            background: rgb(202, 60, 60); /* this is a maroon */
        }

        .pure-button-warning {
            background: rgb(223, 117, 20); /* this is an orange */
        }

        .pure-button-secondary {
            background: rgb(66, 184, 221); /* this is a light blue */
        }

    &lt;/style&gt;

    &lt;button class=&quot;pure-button pure-button-success&quot;&gt;Success Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-error&quot;&gt;Error Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-warning&quot;&gt;Warning Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-secondary&quot;&gt;Secondary Button&lt;/button&gt;
&lt;/div&gt;</code></pre>


    <h3 class="content-subhead">Buttons with different sizes</h3>


    <div>
    <style scoped>

        .pure-button-xsmall {
            font-size: 70%;
        }

        .pure-button-small {
            font-size: 85%;
        }

        .pure-button-large {
            font-size: 110%;
        }

        .pure-button-xlarge {
            font-size: 125%;
        }

    </style>

    <button class="pure-button pure-button-xsmall">Extra Small Button</button>
    <button class="pure-button pure-button-small">Small Button</button>
    <button class="pure-button">Regular Button</button>
    <button class="pure-button pure-button-large">Large Button</button>
    <button class="pure-button pure-button-xlarge">Extra Large Button</button>
</div>



  <pre class="snippet" data-language="html"><code>&lt;div&gt;
    &lt;style scoped&gt;

        .pure-button-xsmall {
            font-size: 70%;
        }

        .pure-button-small {
            font-size: 85%;
        }

        .pure-button-large {
            font-size: 110%;
        }

        .pure-button-xlarge {
            font-size: 125%;
        }

    &lt;/style&gt;

    &lt;button class=&quot;pure-button pure-button-xsmall&quot;&gt;Extra Small Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-small&quot;&gt;Small Button&lt;/button&gt;
    &lt;button class=&quot;pure-button&quot;&gt;Regular Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-large&quot;&gt;Large Button&lt;/button&gt;
    &lt;button class=&quot;pure-button pure-button-xlarge&quot;&gt;Extra Large Button&lt;/button&gt;
&lt;/div&gt;</code></pre>


    <h3 class="content-subhead">Buttons with icons</h3>
    <p>
        Pure doesn't ship with icon fonts, but we play nice with existing ones. Incorporating icon fonts with Pure Buttons is easy. In the example below, we're using icon fonts from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Put the <a href="http://fortawesome.github.io/Font-Awesome/get-started/">Font Awesome CSS file</a> on your page and use an <code>&lt;i&gt;</code> element within a <code>pure-button</code> element.
    </p>



<button class="pure-button">
    <i class="icon-cog"></i>
    Settings
</button>

<a class="pure-button" href="#">
    <i class="icon-shopping-cart icon-large"></i>
    Checkout
</a>



  <pre class="snippet" data-language="html"><code>&lt;button class=&quot;pure-button&quot;&gt;
    &lt;i class=&quot;icon-cog&quot;&gt;&lt;/i&gt;
    Settings
&lt;/button&gt;

&lt;a class=&quot;pure-button&quot; href=&quot;#&quot;&gt;
    &lt;i class=&quot;icon-shopping-cart icon-large&quot;&gt;&lt;/i&gt;
    Checkout
&lt;/a&gt;</code></pre>

</div>

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
