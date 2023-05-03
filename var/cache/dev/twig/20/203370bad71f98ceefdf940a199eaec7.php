<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/pdf.html.twig */
class __TwigTemplate_8668bb903b11b26b117f7c2786b808a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pdf.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>My PDF Document</title>
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>
\t\t<style>
\t\t\ttable {
\t\t\t\tborder-collapse: separate;
\t\t\t\tborder-spacing: 0 15px;
\t\t\t}
\t\t\tth {
\t\t\t\tbackground-color: #4287f5;
\t\t\t\tcolor: white;
\t\t\t}
\t\t\tth,
\t\t\ttd {
\t\t\t\twidth: 150px;
\t\t\t\ttext-align: center;
\t\t\t\tborder: 1px solid black;
\t\t\t\tpadding: 5px;
\t\t\t}
\t\t\th2 {
\t\t\t\tcolor: #4287f5;
\t\t\t}
\t\t\tspan.circle {}
\t\t\th2 {
\t\t\t\tfont-size: 45px;

\t\t\t\tfont-family: monospace, monospace;
\t\t\t}
\t\t\timg {
\t\t\t\twidth: 20% height: 50%
\t\t\t}
\t\t\tp {
\t\t\t\ttext-align: center;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h2>
\t\t\tCuliter Wave</h2>
\t\t<p>
\t\t\tPrint Date :";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "</p>

\t\t";
        // line 47
        echo "\t\t";
        // line 52
        echo "
\t\t<div>
\t\t\t<span class=\"circle\">total users are:";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 54, $this->source); })())), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div>
\t\t\t<table>
\t\t\t\t<thead>


\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Type</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>


\t\t\t\t<tbody>


\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            echo "\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td style=\"margin-left:500px \">
\t\t\t\t\t\t\t\t<span>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 78), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 81), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 84), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Type", [], "any", false, false, false, 88), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t</tbody>

\t\t\t</table>
\t\t\t";
        // line 102
        echo "\t\t</div>
\t</body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 102,  171 => 98,  162 => 94,  151 => 88,  144 => 84,  138 => 81,  132 => 78,  127 => 75,  122 => 74,  99 => 54,  95 => 52,  93 => 47,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>My PDF Document</title>
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../img/favicon.png\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>
\t\t<style>
\t\t\ttable {
\t\t\t\tborder-collapse: separate;
\t\t\t\tborder-spacing: 0 15px;
\t\t\t}
\t\t\tth {
\t\t\t\tbackground-color: #4287f5;
\t\t\t\tcolor: white;
\t\t\t}
\t\t\tth,
\t\t\ttd {
\t\t\t\twidth: 150px;
\t\t\t\ttext-align: center;
\t\t\t\tborder: 1px solid black;
\t\t\t\tpadding: 5px;
\t\t\t}
\t\t\th2 {
\t\t\t\tcolor: #4287f5;
\t\t\t}
\t\t\tspan.circle {}
\t\t\th2 {
\t\t\t\tfont-size: 45px;

\t\t\t\tfont-family: monospace, monospace;
\t\t\t}
\t\t\timg {
\t\t\t\twidth: 20% height: 50%
\t\t\t}
\t\t\tp {
\t\t\t\ttext-align: center;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<h2>
\t\t\tCuliter Wave</h2>
\t\t<p>
\t\t\tPrint Date :{{ \"now\"|date(\"Y-m-d\") }}</p>

\t\t{# <p>This is some example content for the PDF.</p> #}
\t\t{# <img src=\"{{ asset('img/culiterwave.png') }}\" alt=\"culiterwave\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.saymedia-content.com/.image/c_limit%2Ccs_srgb%2Cq_auto:eco%2Cw_640/MTc0NDYxOTk3MzAyMTYzMDc4/basic-web-design-with-html-css.webp\" alt=\"Description of the image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ logo_path }}\" alt=\"My logo\"> #}

\t\t<div>
\t\t\t<span class=\"circle\">total users are:{{users|length }}</span>
\t\t</div>
\t\t<div>
\t\t\t<table>
\t\t\t\t<thead>


\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Type</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>


\t\t\t\t<tbody>


\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td style=\"margin-left:500px \">
\t\t\t\t\t\t\t\t<span>{{ user.Nom }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>{{ user.Prenom }}</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>{{ user.Email }}</span>
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span>{{ user.Type }}</span>
\t\t\t\t\t\t\t</td>


\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>

\t\t\t</table>
\t\t\t{# <img src=\"{{ asset('img/culiterwave.jpg') }}\" alt=\"culiterwave\"> #}
\t\t</div>
\t</body>
</html>


{# <!DOCTYPE html>
<html>
\t<head>
\t\t<style>
\t\t\t/* 
Import the desired font from Google fonts. 
*/
\t\t\t@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

\t\t\t/* 
Define all colors used in this template 
*/:root
\t\t\t{
\t\t\t\t--font-color: black;
\t\t\t\t--highlight-color: #60D0E4;
\t\t\t\t--header-bg-color: #B8E6F1;
\t\t\t\t--footer-bg-color: #BFC0C3;
\t\t\t\t--table-row-separator-color: #BFC0C3;
\t\t\t}

\t\t\t@page {
\t\t\t\t/*
  This CSS highlights how page sizes, margins, and margin boxes are set.
  https://docraptor.com/documentation/article/1067959-size-dimensions-orientation

  Within the page margin boxes content from running elements is used instead of a 
  standard content string. The name which is passed in the element() function can
  be found in the CSS code below in a position property and is defined there by 
  the running() function.
  */
\t\t\t\tsize: A4;
\t\t\t\tmargin: 8cm 0 3cm;

\t\t\t\t@top-left {
\t\t\t\t\tcontent: element(header);
\t\t\t\t}

\t\t\t\t@bottom-left {
\t\t\t\t\tcontent: element(footer);
\t\t\t\t}
\t\t\t}

\t\t\t/* 
The body itself has no margin but a padding top & bottom 1cm and left & right 2cm.
Additionally the default font family, size and color for the document is defined
here.
*/
\t\t\tbody {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 1cm 2cm;
\t\t\t\tcolor: var(--font-color);
\t\t\t\tfont-family: 'Montserrat', sans-serif;
\t\t\t\tfont-size: 10pt;
\t\t\t}

\t\t\t/*
The links in the document should not be highlighted by an different color and underline
instead we use the color value inherit to get the current texts color.
*/
\t\t\ta {
\t\t\t\tcolor: inherit;
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\t/*
For the dividers in the document we use an HR element with a margin top and bottom 
of 1cm, no height and only a border top of one millimeter.
*/
\t\t\thr {
\t\t\t\tmargin: 1cm 0;
\t\t\t\theight: 0;
\t\t\t\tborder: 0;
\t\t\t\tborder-top: 1mm solid var(--highlight-color);
\t\t\t}

\t\t\t/*
The page header in our document uses the HTML HEADER element, we define a height 
of 8cm matching the margin top of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(header) makes this HTML element float into the top left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.
*/
\t\t\theader {
\t\t\t\theight: 8cm;
\t\t\t\tpadding: 0 2cm;
\t\t\t\tposition: running(header);
\t\t\t\tbackground-color: var(--header-bg-color);
\t\t\t}

\t\t\t/*
For the different sections in the header we use some flexbox and keep space between
with the justify-content property.
*/
\t\t\theader .headerSection {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t}

\t\t\t/*
To move the first sections a little down and have more space between the top of 
the document and the logo/company name we give the section a padding top of 5mm.
*/
\t\t\theader .headerSection:first-child {
\t\t\t\tpadding-top: 0.5cm;
\t\t\t}

\t\t\t/*
Similar we keep some space at the bottom of the header with the padding-bottom
property.
*/
\t\t\theader .headerSection:last-child {
\t\t\t\tpadding-bottom: 0.5cm;
\t\t\t}

\t\t\t/*
Within the header sections we have defined two DIV elements, and the last one in
each headerSection element should only take 35% of the headers width.
*/
\t\t\theader .headerSection div:last-child {
\t\t\t\twidth: 35%;
\t\t\t}

\t\t\t/*
For the logo, where we use an SVG image and the company text we also use flexbox
to align them correctly.
*/
\t\t\theader .logoAndName {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: space-between;
\t\t\t}

\t\t\t/*
The SVG gets set to a fixed size and get 5mm margin right to keep some distance
to the company name.
*/
\t\t\theader .logoAndName svg {
\t\t\t\twidth: 1.5cm;
\t\t\t\theight: 1.5cm;
\t\t\t\tmargin-right: 0.5cm;
\t\t\t}

\t\t\t/*
To ensure the top right section \"ESTIMATE\" starts on the same level as the Logo &
Name we set a padding top of 1cm for this element.
*/
\t\t\theader .headerSection .estimateDetails {
\t\t\t\tpadding-top: 1cm;
\t\t\t}

\t\t\t/*
In the second row of header sections, we find the \"ISSUED TO\" area where we also
make use of flexbox to achive the desired layout.
*/
\t\t\theader .headerSection .issuedTo {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t}

\t\t\t/*
The H3 element \"ISSUED TO\" gets another 25mm margin to the right to keep some 
space between this header and the client's address.
Additionally this header text gets the hightlight color as font color.
*/
\t\t\theader .headerSection .issuedTo h3 {
\t\t\t\tmargin: 0 0.75cm 0 0;
\t\t\t\tcolor: var(--highlight-color);
\t\t\t}

\t\t\t/*
The paragraphs within the header sections DIV elements get a small 2px margin top
to ensure its in line with the \"ISSUED TO\" header text.
*/
\t\t\theader .headerSection div p {
\t\t\t\tmargin-top: 2px;
\t\t\t}

\t\t\t/*
All header elements and paragraphs within the HTML HEADER tag get a margin of 0.
*/
\t\t\theader h1,
\t\t\theader h2,
\t\t\theader h3,
\t\t\theader p {
\t\t\t\tmargin: 0;
\t\t\t}

\t\t\t/*
Heading of level 2 and 3 (\"ESTIMATE\" and \"ISSUED TO\") need to be written in 
uppercase, so we use the text-transform property for that.
*/
\t\t\theader h2,
\t\t\theader h3 {
\t\t\t\ttext-transform: uppercase;
\t\t\t}

\t\t\t/*
The divider in the HEADER element gets a slightly different margin than the 
standard dividers.
*/
\t\t\theader hr {
\t\t\t\tmargin: 1cm 0 0.5cm;
\t\t\t}

\t\t\t/*
Our main content is all within the HTML MAIN element. In this template this are
two tables. The one which lists all items and the table which shows us the 
subtotal, tax and total amount.

Both tables get the full width and collapse the border.
*/
\t\t\tmain table {
\t\t\t\twidth: 100%;
\t\t\t\tborder-collapse: collapse;
\t\t\t}

\t\t\t/*
We put the first tables headers in a THEAD element, this way they repeat on the
next page if our table overflows to multiple pages.

The text color gets set to the highlight color.
*/
\t\t\tmain table thead th {
\t\t\t\theight: 1cm;
\t\t\t\tcolor: var(--highlight-color);
\t\t\t}

\t\t\t/*
For the last three columns we set a fixed width of 2.5cm, so if we would change
the documents size only the first column with the item name and description grows.
*/
\t\t\tmain table thead th:nth-of-type(2),
\t\t\tmain table thead th:nth-of-type(3),
\t\t\tmain table thead th:last-of-type {
\t\t\t\twidth: 2.5cm;
\t\t\t}

\t\t\t/*
The items itself are all with the TBODY element, each cell gets a padding top
and bottom of 2mm and a border bottom of .5mm as a row separator.
*/
\t\t\tmain table tbody td {
\t\t\t\tpadding: 2mm 0;
\t\t\t\tborder-bottom: 0.5mm solid var(--table-row-separator-color);
\t\t\t}

\t\t\t/*
The cells in the last column (in this template the column containing the total)
get a text align right so the text is at the end of the table.
*/
\t\t\tmain table thead th:last-of-type,
\t\t\tmain table tbody td:last-of-type {
\t\t\t\ttext-align: right;
\t\t\t}

\t\t\t/*
By default text within TH elements is aligned in the center, we do not want that
so we overwrite it with an left alignment.
*/
\t\t\tmain table th {
\t\t\t\ttext-align: left;
\t\t\t}

\t\t\t/*
The summary table, so the table containing the subtotal, tax and total amount 
gets a width of 40% + 2cm. The plus 2cm is added because our body has a 2cm padding
but we want our highlight color for the total row to go to the edge of the document.

To move the table to the right side we simply set a margin-left of 60%.
*/
\t\t\tmain table.summary {
\t\t\t\twidth: calc(40% + 2cm);
\t\t\t\tmargin-left: 60%;
\t\t\t\tmargin-top: 0.5cm;
\t\t\t}

\t\t\t/*
The row containing the total amount gets its background color set to the highlight 
color and the font weight to bold.
*/
\t\t\tmain table.summary tr.total {
\t\t\t\tfont-weight: bold;
\t\t\t\tbackground-color: var(--highlight-color);
\t\t\t}

\t\t\t/*
The TH elements of the summary table are not on top but the cells on the left side
these get a padding left of 1cm to give the highlight color some space.
*/
\t\t\tmain table.summary th {
\t\t\t\tpadding: 4mm 0 4mm 1cm;
\t\t\t\tborder-bottom: 0;
\t\t\t}

\t\t\t/*
As only the highlight background color should go to the edge of the document
but the text should still have the 2cm distance, we set the padding right to 
2cm.
*/
\t\t\tmain table.summary td {
\t\t\t\tpadding: 4mm 2cm 4mm 0;
\t\t\t\tborder-bottom: 0;
\t\t\t}

\t\t\t/*
The content below the tables is placed in a ASIDE element next to the MAIN element.
To ensure this element is always at the bottom of the page, just above the page 
footer, we use the Prince custom property \"-prince-float\" with the value bottom.

See Page Floats on https://www.princexml.com/howcome/2021/guides/float/.
*/
\t\t\taside {
\t\t\t\t-prince-float: bottom;
\t\t\t\tpadding: 0 2cm 0.5cm;
\t\t\t}

\t\t\t/*
The content itself is shown in 2 columns.
*/
\t\t\taside p {
\t\t\t\tmargin: 0;
\t\t\t\tcolumn-count: 2;
\t\t\t}

\t\t\t/*
The page footer in our document uses the HTML FOOTER element, we define a height 
of 3cm matching the margin bottom of the page (see @page rule) and a padding left
and right of 2cm. We did not give the page itself a margin of 2cm to ensure that
the background color goes to the edges of the document.

As mentioned above in the comment for the @page the position property with the 
value running(footer) makes this HTML element float into the bottom left page margin
box. This page margin box repeats on every page in case we would have a multi-page
estimate.

The content inside the footer is aligned with the help of line-height 3cm and a 
flexbox for the child elements.
*/
\t\t\tfooter {
\t\t\t\theight: 3cm;
\t\t\t\tline-height: 3cm;
\t\t\t\tpadding: 0 2cm;
\t\t\t\tposition: running(footer);
\t\t\t\tbackground-color: var(--footer-bg-color);
\t\t\t\tfont-size: 8pt;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: baseline;
\t\t\t\tjustify-content: space-between;
\t\t\t}

\t\t\tfooter a:first-child {
\t\t\t\tfont-weight: bold;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<!-- The header element will appear on the top of each page of this estimate document. -->
\t\t<header>
\t\t\t<div
\t\t\t\tclass=\"headerSection\">
\t\t\t\t<!-- As a logo we take an SVG element and add the name in an standard H1 element behind it. -->
\t\t\t\t<div class=\"logoAndName\">
\t\t\t\t\t<svg>
\t\t\t\t\t\t<circle cx=\"50%\" cy=\"50%\" r=\"40%\" stroke=\"black\" stroke-width=\"3\" fill=\"black\"/>
\t\t\t\t\t</svg>
\t\t\t\t\t<h1>Logo &amp; Name</h1>
\t\t\t\t</div>
\t\t\t\t<!-- Details about the estimation are on the right top side of each page. -->
\t\t\t\t<div>
\t\t\t\t\t<h2>Estimate</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>Date Issued</b>
\t\t\t\t\t\t{{ \"now\"|date(\"Y-m-d\") }}
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- The two header rows are divided by an blue line, we use the HR element for this. -->
\t\t\t<hr/>
\t\t\t<div
\t\t\t\tclass=\"headerSection\">
\t\t\t\t<!-- The clients details come on the left side below the logo and company name. -->
\t\t\t\t<div class=\"issuedTo\">
\t\t\t\t\t<h3>Issued to</h3>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>Client Name</b>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t123 Alphabet Road, Suite 01
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tIndianapolis, IN 46260
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<a href=\"mailto:clientname@clientwebsite.com\">
\t\t\t\t\t\t\tclientname@clientwebsite.com
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t317.123.8765
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<!-- Additional notes can be placed below the estimation details. -->
\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\t<b>Notes</b>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\tMorbi euismod scelerisque pellentesque.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<!-- The footer contains the company's website and address. To align the address details we will use flexbox in the CSS style. -->
\t\t<footer>
\t\t\t<a href=\"https://companywebsite.com\">
\t\t\t\tcompanywebsite.com
\t\t\t</a>
\t\t\t<a href=\"mailto:company@website.com\">
\t\t\t\tcompany@website.com
\t\t\t</a>
\t\t\t<span>
\t\t\t\t317.123.8765
\t\t\t</span>
\t\t\t<span>
\t\t\t\t123 Alphabet Road, Suite 01, Indianapolis, IN 46260
\t\t\t</span>
\t\t</footer>

\t\t<!-- In the main section the table for the separate items is added. Also we add another table for the summary, so subtotal, tax and total amount. -->
\t\t<main>
\t\t\t<table>
\t\t\t\t<!-- A THEAD element is used to ensure the header of the table is repeated if it consumes more than one page. -->
\t\t\t\t<thead>
\t\t\t\t\t<tr>


\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Email</th>

\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<!-- The single estimate items are all within the TBODY of the table. -->
\t\t\t\t<tbody>
\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ user.Nom }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ user.Prenom }}

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ user.Email }}
\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<!-- The summary table contains the subtotal, tax and total amount. -->

\t\t</main>
\t\t<!-- Within the aside tag we will put the terms and conditions which shall be shown below the estimate table. -->
\t\t<aside>
\t\t\t<!-- Before the terms and conditions we will add another blue divider line with the help of the HR tag. -->
\t\t\t<hr/>
\t\t\t<b>Terms &amp; Conditions</b>
\t\t\t<p>
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod scelerisque pellentesque. Nullam at urna cursus, efficitur sapien vitae, porttitor tellus. Aliquam quis semper nisi. Morbi euismod scelerisque pellentesque. Nullam at urna cursus, efficitur sapien vitae, porttitor tellus.
\t\t\t</p>
\t\t</aside>
\t</body>
</html> #}
", "user/pdf.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\pdf.html.twig");
    }
}
