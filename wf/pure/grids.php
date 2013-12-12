<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Fully customizable and responsive CSS grids.">

    <title>Grids &ndash; Pure</title>
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
    <h1>Grids</h1>


    <h2>Fully customizable and responsive CSS grids.</h2>

</div>


<div class="content">

    <h2 id="introduction-to-pure-grids" class="content-subhead">Introduction to Pure Grids<a href="#introduction-to-pure-grids" class="content-link"></a></h2>

    <p>
        Pure Grids are easy to work with, and very powerful. There are a few simple concepts to keep in mind:
    </p>

    <dl>
        <dt>Grid classes vs. unit classes</dt>
        <dd>
            Pure Grids consist of two types of classes: grid classes (<code>pure-g</code> or <code>pure-g-r</code>) and unit classes (<code>pure-u</code> or <code>pure-u-*</code>)
        </dd>

        <dt>The widths of the units are fractions</dt>
        <dd>
            Units have various class names that represent their widths. For example, <code>pure-u-1-2</code> has a width of 50%, whereas <code>pure-u-1-5</code> would have a width of 20%.
        </dd>

        <dt>All child elements of a grid must be units</dt>
        <dd>
            Child elements contained within an element with a <code>pure-g</code> classname <em>must</em> be a grid unit with a <code>pure-u</code> or <code>pure-u-*</code> classname.
        </dd>

        <dt>Content goes inside grid units<dt>
        <dd>
            All content which is visible to people needs to be contained inside a grid unit. This ensures that the content will be rendered properly.
        </dd>
    </dl>

    <aside>
        <p>
            When setting a <code>font-family</code> in your project, be sure to check out the section on <a href="#using-grids-with-custom-fonts">using Grids with your font-family</a>.
        </p>
    </aside>

    <p>
        Let's start with a simple example. Here's a grid with three columns:
    </p>

    <pre class="snippet" data-language="html"><code>&lt;body&gt;
    &lt;div class=&quot;pure-g&quot;&gt;
        &lt;div class=&quot;pure-u-1-3&quot;&gt;
            &lt;!--
            By default, grid units don&#x27;t have any margin/padding.
            If you want to add these, put them in a child container.
            --&gt;
            &lt;p&gt;Thirds&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class=&quot;pure-u-1-3&quot;&gt;
            &lt;p&gt;Thirds&lt;/p&gt;
        &lt;/div&gt;

        &lt;div class=&quot;pure-u-1-3&quot;&gt;
            &lt;p&gt;Thirds&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;</code></pre>


    <h2 id="pure-responsive-grids" class="content-subhead">Pure Responsive Grids<a href="#pure-responsive-grids" class="content-link"></a></h2>

    <p>
        Pure Responsive Grids builds on top of the base Grids. It adds a single new classname called <code>pure-g-r</code> (the "r" stands for responsive, you see). You can use this instead of using <code>pure-g</code> as you normally do. All elements with a classname of <code>pure-u-*-*</code> will automatically become responsive and collapse to <code>width: 100%;</code> when the viewport's width is <code>767px</code> or lower.
    </p>

    <h3>Regular Grid vs. Responsive Grid</h3>

    <p>
        The first snippet below shows how regular Pure Grids are written. These grids are unresponsive. They'll always be one-thirds, irrespective of the width of the screen. The second snippet replaces the <code>pure-g</code> with <code>pure-g-r</code>, thereby making the one-third columns collapse to <code>width: 100%;</code> on lower screen widths (<code>767px</code> by default).
    </p>

    <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-g&quot;&gt;

    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;
    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;
    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;

&lt;/div&gt;</code></pre>

    <pre class="snippet" data-language="html"><code>&lt;div class=&quot;pure-g-r&quot;&gt;

    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;
    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;
    &lt;div class=&quot;pure-u-1-3&quot;&gt; ... &lt;/div&gt;

&lt;/div&gt;</code></pre>

    <h3>Responsive Grid: An Example</h3>

    <p>
        Resize the page to see the grid collapse.
    </p>

    <div class="pure-g-r grid-example">
    <div class="pure-u-1-2">
        <div class="l-box">
            <h3>Fast</h3>
            <p>
                YUI's lightweight core and modular architecture make it scalable, fast, and robust. Built by frontend engineers at Yahoo!, YUI powers the most popular websites in the world.
            </p>
        </div>
    </div>

    <div class="pure-u-1-2">
        <div class="l-box">
            <h3>Complete</h3>
            <p>
                YUI's intuitive and well-documented API takes you from basic DOM handling to building performant and maintainable applications on desktop browsers, mobile devices, and servers.
            </p>
        </div>
    </div>

    <div class="pure-u-1-2">
        <div class="l-box">
            <h3>Industrial Strength</h3>
            <p>
                A thriving community, a carefully architected infrastructure, and a comprehensive suite of tools help you code like a pro, from simple web pages to complex web applications.
            </p>
        </div>
    </div>

    <div class="pure-u-1-2">
        <div class="l-box">
            <h3>Free and Open</h3>
            <p>
                YUI is free for all uses and is developed in the open on GitHub. Core team members can always be found in the forums and the #yui IRC channel on Freenode. Pull requests welcome!
            </p>
        </div>
    </div>

    <div class="pure-u-1 l-centered">
        <img src="http://24.media.tumblr.com/31f24c22894d6d46a7b6f4b0687db9cd/tumblr_mnh0uemhCk1st5lhmo1_1280.jpg"
             alt="Sample image of a meeting for a responsive image example.">
    </div>

    <div class="pure-u-2-5">
        <div class="l-box">
            <h3>Two-Fifth Column</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur fermentum dui turpis.
            </p>
        </div>
    </div>

    <div class="pure-u-3-5">
        <div class="l-box">
            <h3>Three-Fifth Column</h3>
            <p>
                Quisque ac magna eget est porta varius ut eget quam. Curabitur tincidunt gravida nisl.
            </p>

            <p>
                Fusce accumsan, sem vitae tempus tempor, nulla lectus interdum felis, eget molestie urna mauris vel elit. Curabitur vel ipsum nulla.
            </p>
        </div>
    </div>
</div>



    <h2 id="grids-on-mobile" class="content-subhead">Grids on Mobile<a href="#grids-on-mobile" class="content-link"></a></h2>

    <p>
        Putting the <code>pure-g</code> classname on the wrapper instead of <code>pure-g-r</code> will ensure that grid units will not collapse on small screens. This is a good way to make grids on smaller screens like phones.
    </p>

    <div class="pure-g grid-example">
    <div class="pure-u-1-3">
        <div class="l-box">
            <h3>Thirds</h3>
            <p>This cell will be a grid even on mobile devices.</p>
         </div>
    </div>

    <div class="pure-u-1-3">
        <div class="l-box">
            <h3>Thirds</h3>
            <p>This cell will be a grid even on mobile devices.</p>
         </div>
    </div>

    <div class="pure-u-1-3">
        <div class="l-box">
            <h3>Thirds</h3>
            <p>This cell will be a grid even on mobile devices.</p>
         </div>
    </div>
</div>



    <h2 id="grid-helper-classes" class="content-subhead">Grid Helper Classes<a href="#grid-helper-classes" class="content-link"></a></h2>

    <p>
        Pure's Responsive Grids also comes with the following helper classes to show or hide content at different screen widths.
    </p>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Helper Class Name</th>
                <th>Description</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><code>pure-hidden-phone</code></td>
                <td>
                    Content marked with this class will be hidden below <code>768px</code>
                </td>
            </tr>

            <tr>
                <td><code>pure-hidden-tablet</code></td>
                <td>
                    Content marked with this class will be hidden between <code>768px</code> and <code>979px</code>
                </td>
            </tr>

            <tr>
                <td><code>pure-hidden-desktop</code></td>
                <td>
                    Content marked with this class will be hidden above <code>980px</code>
                </td>
            </tr>
        </tbody>
    </table>


    <h2 id="applying-padding-and-borders-to-grid-units" class="content-subhead">Applying Padding and Borders to Grid Units<a href="#applying-padding-and-borders-to-grid-units" class="content-link"></a></h2>

    <p>
        To add borders and padding to Pure Grids, you have two options. The first option is to nest a <code>&lt;div&gt;</code> inside each Grid unit and style the child container:
    </p>

    <pre class="snippet" data-language="html"><code>&lt;style&gt;
    .l-box {
        padding: 1em;
    }
&lt;/style&gt;

...

&lt;div class=&quot;pure-g&quot;&gt;

    &lt;div class=&quot;pure-u-1-2&quot;&gt;
        &lt;div class=&quot;l-box&quot;&gt; ... &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class=&quot;pure-u-1-2&quot;&gt;
        &lt;div class=&quot;l-box&quot;&gt; ... &lt;/div&gt;
    &lt;/div&gt;

&lt;/div&gt;</code></pre>

    <p>
        The second option is to add borders and padding directly to a grid unit. This would ordinarily risk breaking the layout, but you can easily avoid this problem by augmenting the behavior of the grid itself with a <code>box-sizing: border-box</code> rule:
    </p>

    <pre class="snippet" data-language="html"><code>&lt;style&gt;
    .pure-g &gt; div {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .l-box {
        padding: 1em;
    }
&lt;/style&gt;

...

&lt;div class=&quot;pure-g&quot;&gt;

    &lt;div class=&quot;pure-u-1-2 l-box&quot;&gt; ... &lt;/div&gt;
    &lt;div class=&quot;pure-u-1-2 l-box&quot;&gt; ... &lt;/div&gt;

&lt;/div&gt;</code></pre>

    <p>
        Using <code>box-sizing: border-box</code> keeps your markup cleaner, but has two minor drawbacks. Legacy browsers such as IE 7 and below <a href="http://caniuse.com/#search=box-sizing">lack support</a> for <code>box-sizing</code>, and setting this property on all grid units makes it harder to override or unset the value later on. As an unopinionated library, Pure lets <code>box-sizing</code> remain at the default value of <code>content-box</code> and leaves the choice up to you.
    </p>


    <h2 id="using-grids-with-custom-fonts" class="content-subhead">Using Grids with Your Font-Family<a href="#using-grids-with-custom-fonts" class="content-link"></a></h2>

    <p>
        Pure Grids use a specific font stack to ensure the greatest OS/browser compatibility, and by default grid units will have <code>font-family: sans-serif;</code> applied — this is the default font stack Pure's Base (Normalize.css) applies to the <code>&lt;body&gt;</code>. Fortunately, it's quite easy to make sure your <code>font-family</code> also applies to content within Pure Girds. Instead of applying your <code>font-family</code> to only the <code>&lt;body&gt;</code> element, apply it to the grid units as well:
    </p>

    <pre class="snippet" data-language="html"><code>&lt;style&gt;
/*
When setting the primary font stack, apply it to the Pure grid units along with
the &#x60;body&#x60;. Pure Grids use specific font stacks to ensure the greatest
OS/browser compatibility.
*/
body,
.pure-g [class *= &quot;pure-u&quot;],
.pure-g-r [class *= &quot;pure-u&quot;] {
    /* Set your content font stack here: */
    font-family: Georgia, Times, &quot;Times New Roman&quot;, serif;
}
&lt;/style&gt;</code></pre>


    <h2 id="want-to-just-use-grids" class="content-subhead">Want to just use Grids?<a href="#want-to-just-use-grids" class="content-link"></a></h2>

    <p>
        Grids is part of the Pure CSS file. However, if you just want Grids and not the other modules, you can pull it down separately. Just include this <code>&lt;link&gt;</code> element in your <code>&lt;head&gt;</code>.
    </p>

  <pre class="snippet" data-language="html"><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;http://yui.yahooapis.com/pure/0.3.0/grids-min.css&quot;&gt;</code></pre>

    <aside>
        <p>
            Optionally, you can head over to the <a href="http://yui.github.io/gridbuilder/">Grid Builder</a> to make your very own grid with custom media query breakpoints and column sizes. Save the outputted CSS in a file and you're good to go!
        </p>
    </aside>

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
