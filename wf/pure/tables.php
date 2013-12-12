<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Simple CSS for HTML tables.">

    <title>Tables &ndash; Pure</title>
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
    <h1>Tables</h1>


    <h2>Simple CSS for HTML tables.</h2>

</div>


<div class="content">

    <h2 id="default-table" class="content-subhead">Default Table<a href="#default-table" class="content-link"></a></h2>
    <p>
        To style an HTML table, add the <code>pure-table</code> classname. This class adds padding and borders to table elements, and emphasizes the header.
    </p>

    <table class="pure-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
        </tr>
    </tbody>
</table>


  <pre class="snippet" data-language="html"><code>&lt;table class=&quot;pure-table&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Make&lt;/th&gt;
            &lt;th&gt;Model&lt;/th&gt;
            &lt;th&gt;Year&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Honda&lt;/td&gt;
            &lt;td&gt;Accord&lt;/td&gt;
            &lt;td&gt;2009&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Toyota&lt;/td&gt;
            &lt;td&gt;Camry&lt;/td&gt;
            &lt;td&gt;2012&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Hyundai&lt;/td&gt;
            &lt;td&gt;Elantra&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


    <h2 id="bordered-table" class="content-subhead">Bordered Table<a href="#bordered-table" class="content-link"></a></h2>
    <p>
        To add horizontal and vertical borders to all cells, add the <code>pure-table-bordered</code> classname to the <code>&lt;table&gt;</code> element.
    </p>

    <table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
        </tr>
    </tbody>
</table>


  <pre class="snippet" data-language="html"><code>&lt;table class=&quot;pure-table pure-table-bordered&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Make&lt;/th&gt;
            &lt;th&gt;Model&lt;/th&gt;
            &lt;th&gt;Year&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Honda&lt;/td&gt;
            &lt;td&gt;Accord&lt;/td&gt;
            &lt;td&gt;2009&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Toyota&lt;/td&gt;
            &lt;td&gt;Camry&lt;/td&gt;
            &lt;td&gt;2012&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Hyundai&lt;/td&gt;
            &lt;td&gt;Elantra&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


    <h2 id="table-with-horizontal-borders" class="content-subhead">Table with Horizontal Borders<a href="#table-with-horizontal-borders" class="content-link"></a></h2>
    <p>
        If you prefer horizontal lines only, add the <code>pure-table-horizontal</code> classname to the <code>&lt;table&gt;</code> element.
    </p>

    <table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr>
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
        </tr>
    </tbody>
</table>


  <pre class="snippet" data-language="html"><code>&lt;table class=&quot;pure-table pure-table-horizontal&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Make&lt;/th&gt;
            &lt;th&gt;Model&lt;/th&gt;
            &lt;th&gt;Year&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Honda&lt;/td&gt;
            &lt;td&gt;Accord&lt;/td&gt;
            &lt;td&gt;2009&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Toyota&lt;/td&gt;
            &lt;td&gt;Camry&lt;/td&gt;
            &lt;td&gt;2012&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Hyundai&lt;/td&gt;
            &lt;td&gt;Elantra&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


    <h2 id="striped-table" class="content-subhead">Striped Table<a href="#striped-table" class="content-link"></a></h2>
    <p>
        Large tables are easier to parse visually if rows are easily distinguishable. Adding the <code>pure-table-odd</code> class name to every other <code>&lt;tr&gt;</code> element changes the background of the row and creates a zebra-styled effect.
    </p>

    <p>
        <b>Note:</b> In browsers which support the CSS3 <a href="http://caniuse.com/#search=nth-child"><code>nth-child</code> pseudo selector</a> a simpler approach can be used. The <code>pure-table-striped</code> classname can be added to the <code>&lt;table&gt;</code> element and the zebra-styled striping will happen automatically. This approach will <em>not</em> work in Internet Explorer 8 or lower.
    </p>

    <table class="pure-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
        </tr>
    </thead>

    <tbody>
        <tr class="pure-table-odd">
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
        </tr>

        <tr class="pure-table-odd">
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
        </tr>

        <tr>
            <td>4</td>
            <td>Ford</td>
            <td>Focus</td>
            <td>2008</td>
        </tr>

        <tr class="pure-table-odd">
            <td>5</td>
            <td>Nissan</td>
            <td>Sentra</td>
            <td>2011</td>
        </tr>

        <tr>
            <td>6</td>
            <td>BMW</td>
            <td>M3</td>
            <td>2009</td>
        </tr>

        <tr class="pure-table-odd">
            <td>7</td>
            <td>Honda</td>
            <td>Civic</td>
            <td>2010</td>
        </tr>

        <tr>
            <td>8</td>
            <td>Kia</td>
            <td>Soul</td>
            <td>2010</td>
        </tr>
    </tbody>
</table>


  <pre class="snippet" data-language="html"><code>&lt;table class=&quot;pure-table&quot;&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;#&lt;/th&gt;
            &lt;th&gt;Make&lt;/th&gt;
            &lt;th&gt;Model&lt;/th&gt;
            &lt;th&gt;Year&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;

    &lt;tbody&gt;
        &lt;tr class=&quot;pure-table-odd&quot;&gt;
            &lt;td&gt;1&lt;/td&gt;
            &lt;td&gt;Honda&lt;/td&gt;
            &lt;td&gt;Accord&lt;/td&gt;
            &lt;td&gt;2009&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;2&lt;/td&gt;
            &lt;td&gt;Toyota&lt;/td&gt;
            &lt;td&gt;Camry&lt;/td&gt;
            &lt;td&gt;2012&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr class=&quot;pure-table-odd&quot;&gt;
            &lt;td&gt;3&lt;/td&gt;
            &lt;td&gt;Hyundai&lt;/td&gt;
            &lt;td&gt;Elantra&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;4&lt;/td&gt;
            &lt;td&gt;Ford&lt;/td&gt;
            &lt;td&gt;Focus&lt;/td&gt;
            &lt;td&gt;2008&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr class=&quot;pure-table-odd&quot;&gt;
            &lt;td&gt;5&lt;/td&gt;
            &lt;td&gt;Nissan&lt;/td&gt;
            &lt;td&gt;Sentra&lt;/td&gt;
            &lt;td&gt;2011&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;6&lt;/td&gt;
            &lt;td&gt;BMW&lt;/td&gt;
            &lt;td&gt;M3&lt;/td&gt;
            &lt;td&gt;2009&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr class=&quot;pure-table-odd&quot;&gt;
            &lt;td&gt;7&lt;/td&gt;
            &lt;td&gt;Honda&lt;/td&gt;
            &lt;td&gt;Civic&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;

        &lt;tr&gt;
            &lt;td&gt;8&lt;/td&gt;
            &lt;td&gt;Kia&lt;/td&gt;
            &lt;td&gt;Soul&lt;/td&gt;
            &lt;td&gt;2010&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</code></pre>
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
