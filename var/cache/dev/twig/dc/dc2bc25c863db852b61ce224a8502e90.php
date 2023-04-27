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

/* user/AdminProfile.html.twig */
class __TwigTemplate_b9a9bd1c516738d4cfd2ac968f5f84db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cssandthings' => [$this, 'block_cssandthings'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/AdminProfile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/AdminProfile.html.twig"));

        $this->parent = $this->loadTemplate("Admindachboard.html.twig", "user/AdminProfile.html.twig", 1);
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
        echo "
\t<style>
\t\t.bn632-hover {
\t\t\twidth: 160px;
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\tcursor: pointer;
\t\t\tmargin: 20px;
\t\t\theight: 55px;
\t\t\ttext-align: center;
\t\t\tborder: none;
\t\t\tbackground-size: 300% 100%;
\t\t\tborder-radius: 50px;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.bn632-hover:hover {
\t\t\tbackground-position: 100% 0;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.bn632-hover:focus {
\t\t\toutline: none;
\t\t}

\t\t.bn632-hover.bn20 {
\t\t\tbackground-image: linear-gradient(to right, #667eea, #764ba2, #6b8dd6, #8e37d7);
\t\t\tbox-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
\t\t}


\t\t.btn12-hover {
\t\t\twidth: 160px;
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\tcursor: pointer;
\t\t\tmargin: 20px;
\t\t\theight: 55px;
\t\t\ttext-align: center;
\t\t\tborder: none;
\t\t\tbackground-size: 300% 100%;
\t\t\tborder-radius: 50px;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.btn12-hover:hover {
\t\t\tbackground-position: 100% 0;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.btn12-hover:focus {
\t\t\toutline: none;
\t\t}

\t\t.btn12-hover.bn19 {
\t\t\tbackground-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
\t\t\tbox-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "

\t<h1>
\t\thello
\t\t";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "nom", [], "any", false, false, false, 83), "html", null, true);
        echo "</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "Nom", [], "any", false, false, false, 93), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<td>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "Prenom", [], "any", false, false, false, 97), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "Email", [], "any", false, false, false, 101), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Password</th>
\t\t\t\t<td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "password", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "Type", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>IsActive</th>
\t\t\t\t<td>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "isActive", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<div class=\"form-group\" style=\" display: flex;flex-direction: row;justify-content: center; align-items: flex-start;\">
\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_editadmin", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\">
\t\t\t<button class=\"bn632-hover bn20\">Edit</button>
\t\t</a>
\t\t";
        // line 123
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/AdminProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 123,  229 => 120,  219 => 113,  212 => 109,  205 => 105,  198 => 101,  191 => 97,  184 => 93,  177 => 89,  168 => 83,  162 => 79,  152 => 78,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Admindachboard.html.twig' %}
{% block cssandthings %}

\t<style>
\t\t.bn632-hover {
\t\t\twidth: 160px;
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\tcursor: pointer;
\t\t\tmargin: 20px;
\t\t\theight: 55px;
\t\t\ttext-align: center;
\t\t\tborder: none;
\t\t\tbackground-size: 300% 100%;
\t\t\tborder-radius: 50px;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.bn632-hover:hover {
\t\t\tbackground-position: 100% 0;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.bn632-hover:focus {
\t\t\toutline: none;
\t\t}

\t\t.bn632-hover.bn20 {
\t\t\tbackground-image: linear-gradient(to right, #667eea, #764ba2, #6b8dd6, #8e37d7);
\t\t\tbox-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
\t\t}


\t\t.btn12-hover {
\t\t\twidth: 160px;
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 600;
\t\t\tcolor: #fff;
\t\t\tcursor: pointer;
\t\t\tmargin: 20px;
\t\t\theight: 55px;
\t\t\ttext-align: center;
\t\t\tborder: none;
\t\t\tbackground-size: 300% 100%;
\t\t\tborder-radius: 50px;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.btn12-hover:hover {
\t\t\tbackground-position: 100% 0;
\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\ttransition: all 0.4s ease-in-out;
\t\t}

\t\t.btn12-hover:focus {
\t\t\toutline: none;
\t\t}

\t\t.btn12-hover.bn19 {
\t\t\tbackground-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
\t\t\tbox-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
\t\t}
\t</style>
{% endblock %}

{% block body %}


\t<h1>
\t\thello
\t\t{{user.nom }}</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ user.id }}</td>
\t\t\t</tr>
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
\t\t\t\t<th>Password</th>
\t\t\t\t<td>{{ user.password }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>{{ user.Type }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>IsActive</th>
\t\t\t\t<td>{{ user.isActive }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<div class=\"form-group\" style=\" display: flex;flex-direction: row;justify-content: center; align-items: flex-start;\">
\t\t<a href=\"{{ path('app_user_editadmin', {'id': user.id}) }}\">
\t\t\t<button class=\"bn632-hover bn20\">Edit</button>
\t\t</a>
\t\t{{ include('user/_delete_form.html.twig') }}
\t</div>
{% endblock %}
", "user/AdminProfile.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\AdminProfile.html.twig");
    }
}
