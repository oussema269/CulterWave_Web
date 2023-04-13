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

/* user/Editadmin.html.twig */
class __TwigTemplate_35e3fc309b578c5c823c4d4dcf43d797 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Editadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Editadmin.html.twig"));

        $this->parent = $this->loadTemplate("Admindachboard.html.twig", "user/Editadmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_cssandthings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        // line 4
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
\t<div class=\"container\">

\t\t<div class=\"row\" style=\"display: flex; justify-content: center;align-items: center;\">
\t\t\t<div class=\"col-md-6\">

\t\t\t\t";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "Nom", [], "any", false, false, false, 87), 'label', ["label" => "votre nom"]);
        echo "
\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "Nom", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "Nom", [], "any", false, false, false, 89), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "Prenom", [], "any", false, false, false, 92), 'label', ["label" => "votre prenom"]);
        echo "
\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "Prenom", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "Prenom", [], "any", false, false, false, 94), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "Email", [], "any", false, false, false, 97), 'label', ["label" => "votre Email"]);
        echo "
\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Email", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "Email", [], "any", false, false, false, 99), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), 'label', ["label" => "votre password"]);
        echo "
\t\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "password", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "password", [], "any", false, false, false, 104), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "Type", [], "any", false, false, false, 108), 'label', ["label" => "account type"]);
        echo "
\t\t\t\t\t";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "Type", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "Type", [], "any", false, false, false, 110), 'errors');
        echo "

\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\" style=\" display: flex;flex-direction: row;justify-content: center; align-items: flex-start;\">
\t\t\t\t\t";
        // line 115
        echo twig_include($this->env, $context, "user/_form.html.twig", ["button_label" => "Update"]);
        echo "
\t\t\t\t\t";
        // line 116
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
\t\t\t\t</div>

\t\t\t\t";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end', ["render_reset" => false]);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/Editadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 119,  252 => 116,  248 => 115,  240 => 110,  236 => 109,  232 => 108,  225 => 104,  221 => 103,  217 => 102,  211 => 99,  207 => 98,  203 => 97,  197 => 94,  193 => 93,  189 => 92,  183 => 89,  179 => 88,  175 => 87,  170 => 85,  162 => 79,  152 => 78,  69 => 4,  59 => 3,  36 => 1,);
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

\t<div class=\"container\">

\t\t<div class=\"row\" style=\"display: flex; justify-content: center;align-items: center;\">
\t\t\t<div class=\"col-md-6\">

\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.Nom, 'votre nom') }}
\t\t\t\t\t{{ form_widget(form.Nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Nom) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.Prenom, 'votre prenom') }}
\t\t\t\t\t{{ form_widget(form.Prenom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Prenom) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.Email, 'votre Email') }}
\t\t\t\t\t{{ form_widget(form.Email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Email) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.password, 'votre password') }}
\t\t\t\t\t{{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.password) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\"></div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.Type, 'account type') }}
\t\t\t\t\t{{ form_widget(form.Type, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Type) }}

\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\" style=\" display: flex;flex-direction: row;justify-content: center; align-items: flex-start;\">
\t\t\t\t\t{{ include('user/_form.html.twig', {'button_label': 'Update'}) }}
\t\t\t\t\t{{ include('user/_delete_form.html.twig') }}
\t\t\t\t</div>

\t\t\t\t{{ form_end(form, {'render_reset': false }) }}
\t\t\t</div>
\t\t</div>
\t</div>{# {{ include('user/_form.html.twig', {'button_label': 'Update'}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('user/_delete_form.html.twig') }}</div> #}{% endblock %}
", "user/Editadmin.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\Editadmin.html.twig");
    }
}
