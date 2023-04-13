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

/* user/UserAfterlogin.html.twig */
class __TwigTemplate_8dd2d7382ee7ab47649ce4b11c2bc3e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/UserAfterlogin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/UserAfterlogin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/UserAfterlogin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>

\t\th1 {
\t\t\tfont-size: 50px;
\t\t\ttext-transform: uppercase;
\t\t\tfont-family: 'Gambetta', serif;
\t\t\tletter-spacing: -3px;
\t\t\ttransition: 700ms ease;
\t\t\tfont-variation-settings: \"wght\" 311;
\t\t\tmargin-bottom: 0.8rem;
\t\t\tcolor: #DC8965;
\t\t\toutline: none;
\t\t\ttext-align: center;
\t\t}

\t\th1:hover {
\t\t\tfont-variation-settings: \"wght\" 582;
\t\t\tletter-spacing: 1px;
\t\t}
\t</style>
\t<h1>
\t\thello
\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "Nom", [], "any", false, false, false, 29), "html", null, true);
        echo "
\t\t";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
\t<table class=\"table\" style=\"display: flex; align-content: center;flex-wrap: wrap;  justify-content: center;align-items: baseline;}\">
\t\t<tbody>

\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "Nom", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "Prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "Email", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "Type", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t</tbody>

\t</table>
\t<div style=\"    display: flex; flex-wrap: nowrap; align-content: space-around; justify-content: center; align-items: flex-start;\">
\t\t<button class=\"btn\">
\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">Edit</a>
\t\t</button>
\t\t";
        // line 59
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/UserAfterlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  159 => 57,  148 => 49,  140 => 44,  133 => 40,  126 => 36,  117 => 30,  113 => 29,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User
{% endblock %}

{% block body %}
\t<style>

\t\th1 {
\t\t\tfont-size: 50px;
\t\t\ttext-transform: uppercase;
\t\t\tfont-family: 'Gambetta', serif;
\t\t\tletter-spacing: -3px;
\t\t\ttransition: 700ms ease;
\t\t\tfont-variation-settings: \"wght\" 311;
\t\t\tmargin-bottom: 0.8rem;
\t\t\tcolor: #DC8965;
\t\t\toutline: none;
\t\t\ttext-align: center;
\t\t}

\t\th1:hover {
\t\t\tfont-variation-settings: \"wght\" 582;
\t\t\tletter-spacing: 1px;
\t\t}
\t</style>
\t<h1>
\t\thello
\t\t{{user.Nom}}
\t\t{{user.prenom}}</h1>
\t<table class=\"table\" style=\"display: flex; align-content: center;flex-wrap: wrap;  justify-content: center;align-items: baseline;}\">
\t\t<tbody>

\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ user.Nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<td>{{ user.Prenom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ user.Email }}</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>{{ user.Type }}</td>
\t\t\t</tr>

\t\t</tbody>

\t</table>
\t<div style=\"    display: flex; flex-wrap: nowrap; align-content: space-around; justify-content: center; align-items: flex-start;\">
\t\t<button class=\"btn\">
\t\t\t<a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">Edit</a>
\t\t</button>
\t\t{{ include('user/_delete_form.html.twig') }}
\t</div>
{% endblock %}
", "user/UserAfterlogin.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\UserAfterlogin.html.twig");
    }
}
