<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Choose the modules that you need.">

    <title>Customize &ndash; Pure</title>
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
    <h1>Customize</h1>


    <h2>Choose the modules that you need.</h2>

</div>


<div class="content">

    <h2 id="rollups" class="content-subhead">Rollups<a href="#rollups" class="content-link"></a></h2>
    <p>
        Rollups consist of all the modules in Pure. There are two rollups available - a regular (responsive) one, and a non-responsive one. Choose that one that's right for your project.
    </p>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
                <th>Size (gzipped)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Responsive Rollup</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/pure-min.css</td>
                <td>4.4KB</td>
            </tr>
            <tr>
                <td>Non-Responsive Rollup</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/pure-nr-min.css</td>
                <td>4.1KB</td>
            </tr>
        </tbody>
    </table>

    <h3>Alternate CDNs</h3>
    <p>
        The main host for Pure is the Yahoo! CDN where Pure is available over HTTP and individual modules can be combined together in a single combo request. The following table lists alternate CDNs where Pure is hosted.
    </p>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>CDN</th>
                <th>URL</th>
                <th>HTTPS</th>
                <th>Combo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="http://cdnjs.com/">cdnjs</a></td>
                <td>//cdnjs.cloudflare.com/ajax/libs/pure/0.3.0/pure-min.css</td>
                <td>Yes</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="http://www.osscdn.com/">OSS MaxCDN</a></td>
                <td>//oss.maxcdn.com/libs/pure/0.3.0/pure-min.css</td>
                <td>Yes</td>
                <td>No</td>
            </tr>
            <tr>
                <td><a href="http://www.staticfile.org/">Staticfile</a></td>
                <td>http://cdn.staticfile.org/pure/0.3.0/pure-min.css</td>
                <td>No</td>
                <td>No</td>
            </tr>
        </tbody>
    </table>

    <p>
        <b>Note:</b> If the latest version of Pure is not yet on one of the alternate CDNs, please contact them to update to the latest vesion of Pure: <b>0.3.0</b>.
    </p>


    <h2 id="individual-modules" class="content-subhead">Individual Modules<a href="#individual-modules" class="content-link"></a></h2>
    <p>
        You can also pull in the modules individually. The Yahoo! CDN supports combo handling, so you can combo your requests and get a single CSS file back. Here's an example of a combo URL that only includes CSS for <a href="/base/">Base</a>, <a href="/grids/">Grids</a>, and <a href="/forms/">Forms</a>:
    </p>

<pre class="snippet" data-language="html"><code>&lt;link rel=&quot;stylesheet&quot; href=&quot;http://yui.yahooapis.com/combo?pure/0.3.0/base-min.css&amp;pure/0.3.0/grids-min.css&amp;pure/0.3.0/forms-min.css&quot;&gt;</code></pre>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Base</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/base-min.css</td>
            </tr>
            <tr>
                <td>Buttons</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/buttons-min.css</td>
            </tr>
            <tr>
                <td>Forms (Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/forms-min.css</td>
            </tr>
            <tr>
                <td>Forms (Non-Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/forms-nr-min.css</td>
            </tr>
            <tr>
                <td>Grids (Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/grids-min.css</td>
            </tr>
            <tr>
                <td>Grids (Non-Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/grids-nr-min.css</td>
            </tr>
            <tr>
                <td>Menus (Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/menus-min.css</td>
            </tr>
            <tr>
                <td>Menus (Non-Responsive)</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/menus-nr-min.css</td>
            </tr>
            <tr>
                <td>Tables</td>
                <td>http://yui.yahooapis.com/pure/0.3.0/tables-min.css</td>
            </tr>
        </tbody>
    </table>

    <h2 id="skinning" class="content-subhead">Skinning<a href="#skinning" class="content-link"></a></h2>
    <p>
        Pure comes with a minimalistic style that allows you to customize it with your own CSS. The <a href="https://git.corp.yahoo.com/pages/yui/skinbuilder/">YUI Skin Builder</a> is a great tool to use if you need help developing a theme. With a single click, the Skin Builder is able to generate all the CSS necessary to theme Pure.
    </p>

    <p>
        <a href="http://yui.github.io/skinbuilder/?mode=pure" class="pure-button">Launch Skin Builder</a>
    </p>

    <h2 id="contribute-on-github" class="content-subhead">Contribute on GitHub<a href="#contribute-on-github" class="content-link"></a></h2>
    <p>
        Pure is an open-source project under the BSD License. We welcome issues, pull requests, and feedback. Check out our <a href="https://github.com/yui/pure">repo on GitHub</a>.
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
