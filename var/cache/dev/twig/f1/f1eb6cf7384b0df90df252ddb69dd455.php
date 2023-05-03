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

/* user/AdminUserAfficharge.html.twig */
class __TwigTemplate_cc8d1c88f63e37264aec55922cf5aa01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/AdminUserAfficharge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/AdminUserAfficharge.html.twig"));

        $this->parent = $this->loadTemplate("Admindachboard.html.twig", "user/AdminUserAfficharge.html.twig", 1);
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
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
\t<link
\thref=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Font Awesome -->
\t<link
\thref=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- NProgress -->
\t<link
\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- iCheck -->
\t<link
\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Datatables -->

\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link
\thref=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<!-- Custom Theme Style -->
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
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

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "\t<h1>User index</h1>

\t<div class=\"table-responsive\">
\t\t<h5>Rechercher
\t\t\t<br><br>
\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom..\"></h5>
\t\t<h1>hello</h1>
\t\t<table id=\"myTable\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 52
            echo "\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Type", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t</tbody>
\t\t</table>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12 \">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Default Example
\t\t\t\t\t\t\t<small>Users</small>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"collapse-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"close-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"card-box table-responsive\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted font-13 m-b-30\">
\t\t\t\t\t\t\t\t\t\tDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:
\t\t\t\t\t\t\t\t\t\t<code>\$().DataTable();</code>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<table id=\"datatable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t\t<thead>


\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>


\t\t\t\t\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t\t\t\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 130, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 131
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Email", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Type", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Create new</a>
\t\t\t\t\t<script>
\t\t\t\t\t\t// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function () { // Get the user input and convert to lowercase
var filter = input.value.toLowerCase();

// Loop through all table rows and hide those that do not match the filter
for (var i = 0; i < tableBody.rows.length; i++) {
var row = tableBody.rows[i];
var nom = row.cells[0].getElementsByTagName(\"span\")[0];
if (nom.innerHTML.toLowerCase().indexOf(filter) > -1) {
row.style.display = \"\";
} else {
row.style.display = \"none\";
}
}
});
\t\t\t\t\t</script>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/AdminUserAfficharge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 156,  355 => 149,  346 => 145,  337 => 141,  333 => 140,  328 => 138,  324 => 137,  319 => 135,  315 => 134,  311 => 133,  307 => 131,  302 => 130,  240 => 70,  231 => 66,  222 => 62,  218 => 61,  213 => 59,  209 => 58,  204 => 56,  200 => 55,  196 => 54,  192 => 52,  187 => 51,  165 => 31,  155 => 30,  135 => 27,  123 => 25,  117 => 22,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  94 => 14,  88 => 11,  82 => 8,  76 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admindachboard.html.twig' %}
{% block cssandthings %}
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
\t<h1>User index</h1>

\t<div class=\"table-responsive\">
\t\t<h5>Rechercher
\t\t\t<br><br>
\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher par nom..\"></h5>
\t\t<h1>hello</h1>
\t\t<table id=\"myTable\" class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>

\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t<th>actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for user in users %}
\t\t\t\t\t<tr>

\t\t\t\t\t\t<td>{{ user.Nom }}</td>
\t\t\t\t\t\t<td>{{ user.Prenom }}</td>
\t\t\t\t\t\t<td>{{ user.Email }}</td>

\t\t\t\t\t\t<td>{{ user.Type }}</td>
\t\t\t\t\t\t<td>{{ user.isActive }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 col-sm-12 \">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>Default Example
\t\t\t\t\t\t\t<small>Users</small>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"collapse-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 1</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Settings 2</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"close-link\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"card-box table-responsive\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted font-13 m-b-30\">
\t\t\t\t\t\t\t\t\t\tDataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:
\t\t\t\t\t\t\t\t\t\t<code>\$().DataTable();</code>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<table id=\"datatable\" class=\"table table-striped table-bordered\" style=\"width:100%\">
\t\t\t\t\t\t\t\t\t\t<thead>


\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>IsActive</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>


\t\t\t\t\t\t\t\t\t\t<tbody>


\t\t\t\t\t\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.Nom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.Prenom }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.Email }}</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.Type }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.isActive }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"{{ path('app_user_new') }}\">Create new</a>
\t\t\t\t\t<script>
\t\t\t\t\t\t// Get the input field and table body
var input = document.getElementById(\"searchInput\");
var tableBody = document.getElementById(\"tableBody\");

// Add event listener to input field
input.addEventListener(\"keyup\", function () { // Get the user input and convert to lowercase
var filter = input.value.toLowerCase();

// Loop through all table rows and hide those that do not match the filter
for (var i = 0; i < tableBody.rows.length; i++) {
var row = tableBody.rows[i];
var nom = row.cells[0].getElementsByTagName(\"span\")[0];
if (nom.innerHTML.toLowerCase().indexOf(filter) > -1) {
row.style.display = \"\";
} else {
row.style.display = \"none\";
}
}
});
\t\t\t\t\t</script>
\t\t\t\t{% endblock %}
", "user/AdminUserAfficharge.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\AdminUserAfficharge.html.twig");
    }
}
