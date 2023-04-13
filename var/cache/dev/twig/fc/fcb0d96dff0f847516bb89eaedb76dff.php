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

/* user/index.html.twig */
class __TwigTemplate_559b0ac0df39479558519b44f6781b83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cssandthings' => [$this, 'block_cssandthings'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Admindachboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("Admindachboard.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_cssandthings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        // line 3
        echo "\t<style>
\t\t.btnnn {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tbackground: none;
\t\t\tborder: 1px solid #bdbdbd;
\t\t\theight: 48px;
\t\t\tpadding: 0 24px 0 16px;
\t\t\tletter-spacing: 0.25px;
\t\t\tborder-radius: 24px;
\t\t\tcursor: pointer;
\t\t}
\t\t.btnnn:focus {
\t\t\toutline: none;
\t\t}
\t\t.btnnn .mdi {
\t\t\tmargin-right: 8px;
\t\t}
\t\t.btnnn-delete {
\t\t\tfont-size: 16px;
\t\t\tcolor: red;
\t\t}
\t\t.btnnn-delete > .mdi-delete-empty {
\t\t\tdisplay: none;
\t\t}
\t\t.btnnn-delete:hover {
\t\t\tbackground-color: #fff5f5;
\t\t}
\t\t.btnnn-delete:hover > .mdi-delete-empty {
\t\t\tdisplay: block;
\t\t}
\t\t.btnnn-delete:hover > .mdi-delete {
\t\t\tdisplay: none;
\t\t}
\t\t.btnnn-delete:focus {
\t\t\tbox-shadow: 0 0 0 4px #fcc;
\t\t}
\t</style>
\t<link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
\t<link
\thref=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link
\thref=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- NProgress -->
\t<link
\thref=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link
\thref=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Datatables -->

\t<link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link
\thref=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- Custom Theme Style -->
\t<link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "\t";
        // line 70
        echo "
\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-sm-12 \">
\t\t\t<div class=\"x_panel\">
\t\t\t\t<div class=\"x_title\">

\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"collapse-link\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 1</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 2</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"close-link\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card-box table-responsive\">
\t\t\t\t\t\t\t\t<h5>Rechercher :

\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher\"></h5>

\t\t\t\t\t\t\t\t<table id=\"myTable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t<thead>


\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>


\t\t\t\t\t\t\t\t\t<tbody id=\"tableBody\">


\t\t\t\t\t\t\t\t\t\t";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 125, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 129), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 132), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 135), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Type", [], "any", false, false, false, 139), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 142), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 145
            echo twig_include($this->env, $context, "user/desactive.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo twig_include($this->env, $context, "user/_delete_form.html.twig");
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<script>
\t\t\t\t\t// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function () { // Get the user input and convert to lowercase
var filter = input.value.toLowerCase();

// Loop through all table rows and hide those that do not match the filter
for (var i = 0; i < tableBody.rows.length; i++) {
var row = tableBody.rows[i];
var nom = row.cells[0].getElementsByTagName(\"span\")[0];
var prenom = row.cells[1].getElementsByTagName(\"span\")[0];
var email = row.cells[2].getElementsByTagName(\"span\")[0];

if (nom.innerHTML.toLowerCase().indexOf(filter) > -1 || prenom.innerHTML.toLowerCase().indexOf(filter) > -1 || email.innerHTML.toLowerCase().indexOf(filter) > -1) {
row.style.display = \"\";
} else {
row.style.display = \"none\";
}
}
});
\t\t\t\t</script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 155,  339 => 151,  321 => 146,  317 => 145,  311 => 142,  305 => 139,  298 => 135,  292 => 132,  286 => 129,  281 => 126,  263 => 125,  206 => 70,  204 => 69,  194 => 68,  174 => 65,  162 => 63,  156 => 60,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  133 => 52,  127 => 49,  121 => 46,  115 => 43,  110 => 41,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admindachboard.html.twig' %}
{% block cssandthings %}
\t<style>
\t\t.btnnn {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tbackground: none;
\t\t\tborder: 1px solid #bdbdbd;
\t\t\theight: 48px;
\t\t\tpadding: 0 24px 0 16px;
\t\t\tletter-spacing: 0.25px;
\t\t\tborder-radius: 24px;
\t\t\tcursor: pointer;
\t\t}
\t\t.btnnn:focus {
\t\t\toutline: none;
\t\t}
\t\t.btnnn .mdi {
\t\t\tmargin-right: 8px;
\t\t}
\t\t.btnnn-delete {
\t\t\tfont-size: 16px;
\t\t\tcolor: red;
\t\t}
\t\t.btnnn-delete > .mdi-delete-empty {
\t\t\tdisplay: none;
\t\t}
\t\t.btnnn-delete:hover {
\t\t\tbackground-color: #fff5f5;
\t\t}
\t\t.btnnn-delete:hover > .mdi-delete-empty {
\t\t\tdisplay: block;
\t\t}
\t\t.btnnn-delete:hover > .mdi-delete {
\t\t\tdisplay: none;
\t\t}
\t\t.btnnn-delete:focus {
\t\t\tbox-shadow: 0 0 0 4px #fcc;
\t\t}
\t</style>
\t<link href=\"{{asset(\"cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css\")}}\">
\t<link
\thref=\"{{asset(\"../vendors/bootstrap/dist/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link
\thref=\"{{asset(\"../vendors/font-awesome/css/font-awesome.min.css\")}}\" rel=\"stylesheet\">
\t<!-- NProgress -->
\t<link
\thref=\"{{asset(\"../vendors/nprogress/nprogress.css\")}}\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link
\thref=\"{{asset(\"../vendors/iCheck/skins/flat/green.css\")}}\" rel=\"stylesheet\">
\t<!-- Datatables -->

\t<link href=\"{{asset(\"../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\")}}\" rel=\"stylesheet\">
\t<link href=\"{{asset(\"../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\")}}\" rel=\"stylesheet\">
\t<link href=\"{{asset(\"../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\")}}\" rel=\"stylesheet\">
\t<link href=\"{{asset(\"../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\")}}\" rel=\"stylesheet\">
\t<link
\thref=\"{{asset(\"../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\")}}\" rel=\"stylesheet\">

\t<!-- Custom Theme Style -->
\t<link href=\"{{asset(\"../build/css/custom.min.css\")}}\" rel=\"stylesheet\">
{% endblock %}
{% block title %}User index
{% endblock %}

{% block body %}
\t{# <h1>{{user1}}</h1> #}

\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-sm-12 \">
\t\t\t<div class=\"x_panel\">
\t\t\t\t<div class=\"x_title\">

\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"collapse-link\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 1</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 2</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"close-link\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card-box table-responsive\">
\t\t\t\t\t\t\t\t<h5>Rechercher :

\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher\"></h5>

\t\t\t\t\t\t\t\t<table id=\"myTable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t<thead>


\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>


\t\t\t\t\t\t\t\t\t<tbody id=\"tableBody\">


\t\t\t\t\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ user.Nom }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ user.Prenom }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ user.Email }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ user.Type }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>{{ user.isActive }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('user/desactive.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('user/_delete_form.html.twig') }}

\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<script>
\t\t\t\t\t// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function () { // Get the user input and convert to lowercase
var filter = input.value.toLowerCase();

// Loop through all table rows and hide those that do not match the filter
for (var i = 0; i < tableBody.rows.length; i++) {
var row = tableBody.rows[i];
var nom = row.cells[0].getElementsByTagName(\"span\")[0];
var prenom = row.cells[1].getElementsByTagName(\"span\")[0];
var email = row.cells[2].getElementsByTagName(\"span\")[0];

if (nom.innerHTML.toLowerCase().indexOf(filter) > -1 || prenom.innerHTML.toLowerCase().indexOf(filter) > -1 || email.innerHTML.toLowerCase().indexOf(filter) > -1) {
row.style.display = \"\";
} else {
row.style.display = \"none\";
}
}
});
\t\t\t\t</script>
\t\t\t{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\index.html.twig");
    }
}
