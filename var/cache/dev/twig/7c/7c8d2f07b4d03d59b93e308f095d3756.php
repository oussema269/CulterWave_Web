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

/* user/new.html.twig */
class __TwigTemplate_913fe9d15ed5b346c63f6fddc48baa5f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        // line 1
        echo "<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>E Store - eCommerce HTML Template</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"keywords\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>


\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


\t\t<style>
\t\t\t.card1 {
\t\t\t\tdisplay: flex;
\t\t\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\t\t\ttransition: 0.3s; /* width: 70%; */
\t\t\t\tflex-direction: column;
\t\t\t\tflex-wrap: wrap;
\t\t\t\talign-content: center;
\t\t\t\tjustify-content: space-evenly;
\t\t\t\talign-items: center;
\t\t\t}


\t\t\t.card1:hover {
\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"container\">

\t\t\t<div class=\"card1\">
\t\t\t\t<h6 style=\"hiden\">welcome</h6>
\t\t\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/culiterwave.png"), "html", null, true);
        echo "\"/>

\t\t\t\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Nom", [], "any", false, false, false, 49), 'label', ["label" => "votre nom"]);
        echo "
\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Nom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Nom", [], "any", false, false, false, 51), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Prenom", [], "any", false, false, false, 54), 'label', ["label" => "votre prenom"]);
        echo "
\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "Prenom", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "Prenom", [], "any", false, false, false, 56), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Email", [], "any", false, false, false, 59), 'label', ["label" => "votre Email"]);
        echo "
\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Email", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Email", [], "any", false, false, false, 61), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "password", [], "any", false, false, false, 64), 'label', ["label" => "votre password"]);
        echo "
\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "password", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "password", [], "any", false, false, false, 66), 'errors');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Type", [], "any", false, false, false, 69), 'label', ["label" => "account type"]);
        echo "
\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "Type", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Type", [], "any", false, false, false, 71), 'errors');
        echo "
\t\t\t\t</div>

\t\t\t\t<div style=\"display: flex; align-content: flex-end; justify-content: center;\">
\t\t\t\t\t";
        // line 75
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "</div>
\t\t\t\t";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end', ["render_reset" => false]);
        echo "

\t\t\t</div>

\t\t</div>

\t\t<!-- JavaScript Libraries -->
\t\t<link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>
\t\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 88,  212 => 87,  208 => 86,  204 => 85,  200 => 84,  196 => 83,  186 => 76,  182 => 75,  175 => 71,  171 => 70,  167 => 69,  161 => 66,  157 => 65,  153 => 64,  147 => 61,  143 => 60,  139 => 59,  133 => 56,  129 => 55,  125 => 54,  119 => 51,  115 => 50,  111 => 49,  106 => 47,  101 => 45,  72 => 19,  68 => 18,  64 => 17,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>E Store - eCommerce HTML Template</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"keywords\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t<link href=\"{{asset(\"img/favicon.ico\")}}\" rel=\"icon\"/>


\t\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"{{asset(\"lib/slick/slick.css\")}}\" rel=\"stylesheet\"/>
\t\t<link href=\"{{asset(\"lib/slick/slick-theme.css\")}}\" rel=\"stylesheet\"/>
\t\t<link href=\"{{asset(\"css/style.css\")}}\" rel=\"stylesheet\"/>


\t\t<style>
\t\t\t.card1 {
\t\t\t\tdisplay: flex;
\t\t\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\t\t\ttransition: 0.3s; /* width: 70%; */
\t\t\t\tflex-direction: column;
\t\t\t\tflex-wrap: wrap;
\t\t\t\talign-content: center;
\t\t\t\tjustify-content: space-evenly;
\t\t\t\talign-items: center;
\t\t\t}


\t\t\t.card1:hover {
\t\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"container\">

\t\t\t<div class=\"card1\">
\t\t\t\t<h6 style=\"hiden\">welcome</h6>
\t\t\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"{{ asset('img/culiterwave.png') }}\"/>

\t\t\t\t{{ form_start(form) }}
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t{{ form_label(form.Nom, 'votre nom') }}
\t\t\t\t\t{{ form_widget(form.Nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Nom) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t{{ form_label(form.Prenom, 'votre prenom') }}
\t\t\t\t\t{{ form_widget(form.Prenom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Prenom) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t{{ form_label(form.Email, 'votre Email') }}
\t\t\t\t\t{{ form_widget(form.Email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Email) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t{{ form_label(form.password, 'votre password') }}
\t\t\t\t\t{{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.password) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t\t\t{{ form_label(form.Type, 'account type') }}
\t\t\t\t\t{{ form_widget(form.Type, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t{{ form_errors(form.Type) }}
\t\t\t\t</div>

\t\t\t\t<div style=\"display: flex; align-content: flex-end; justify-content: center;\">
\t\t\t\t\t{{ include('user/_form.html.twig') }}</div>
\t\t\t\t{{ form_end(form, {'render_reset': false }) }}

\t\t\t</div>

\t\t</div>

\t\t<!-- JavaScript Libraries -->
\t\t<link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\"/>
\t\t<script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
\t\t<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
\t\t<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
\t\t<script src=\"{{ asset('lib/slick/slick.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t</body>
</html>
{# <h1>Create new User</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 50%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.Nom, 'votre nom') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.Nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
{# 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 50%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.Prenom, 'votre prenom') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Prenom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 25%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.Email, 'votre Email') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 25%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.password, 'votre password') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 25%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.Type, 'account type') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Type, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('user/_form.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_end(form, {'render_reset': false }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_index') }}\">back to list</a> #}
", "user/new.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\new.html.twig");
    }
}
