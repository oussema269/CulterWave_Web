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

/* user/makeNewpassword.html.twig */
class __TwigTemplate_f70a09a5d9ed50ab75a489c44785409b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cssandthings' => [$this, 'block_cssandthings'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/makeNewpassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/makeNewpassword.html.twig"));

        // line 1
        echo "<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<title>E Store - eCommerce HTML Template</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"keywords\"/>
\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t<link
\t\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t<!-- CSS Libraries -->
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> ";
        $this->displayBlock('cssandthings', $context, $blocks);
        // line 22
        echo "\t\t<!-- Template Stylesheet -->
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/></head>
\t<style>
\t\t.card1 {
\t\t\tdisplay: flex;
\t\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\t\ttransition: 0.3s; /* width: 70%; */
\t\t\tflex-direction: column;
\t\t\tflex-wrap: wrap;
\t\t\talign-content: center;
\t\t\tjustify-content: space-evenly;
\t\t\talign-items: center;
\t\t}
\t\t.card1:hover {
\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t}
\t</style>
</html></head><body>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
<div class=\"container \">
\t<h1 class=\"my-5\" style=\"text-align: center;\">welcome</h1>
\t<div class=\"card1\">
\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/culiterwave.png"), "html", null, true);
        echo "\"/>
\t\t";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Email", [], "any", false, false, false, 47), 'label', ["label" => "votre Email"]);
        echo "
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "Email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "Email", [], "any", false, false, false, 49), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "code", [], "any", false, false, false, 52), 'label', ["label" => "votre code"]);
        echo "
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "code", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "code", [], "any", false, false, false, 54), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'label', ["label" => "New Password"]);
        echo "
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "password1", [], "any", false, false, false, 62), 'label', ["label" => "Confirm Password"]);
        echo "
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "password1", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "password1", [], "any", false, false, false, 64), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"\">
\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "submit", [], "any", false, false, false, 67), 'label', ["label" => "Confirm"]);
        echo "
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "submit", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
\t\t</div>

\t</div>

</div>
";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end', ["render_reset" => false]);
        echo "
<!-- JavaScript Libraries -->
<link href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_cssandthings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cssandthings"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/makeNewpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 21,  207 => 80,  203 => 79,  199 => 78,  195 => 77,  189 => 76,  184 => 74,  175 => 68,  171 => 67,  165 => 64,  161 => 63,  157 => 62,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  133 => 53,  129 => 52,  123 => 49,  119 => 48,  115 => 47,  110 => 45,  106 => 44,  99 => 40,  79 => 23,  76 => 22,  72 => 21,  68 => 20,  56 => 11,  44 => 1,);
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

\t\t<link
\t\thref=\"{{asset(\"img/favicon.ico\")}}\" rel=\"icon\"/>

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t<!-- CSS Libraries -->
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"{{asset(\"lib/slick/slick.css\")}}\" rel=\"stylesheet\"/>
\t\t<link href=\"{{asset(\"lib/slick/slick-theme.css\")}}\" rel=\"stylesheet\"/> {% block cssandthings %}{% endblock %}
\t\t<!-- Template Stylesheet -->
\t\t<link href=\"{{asset(\"css/style.css\")}}\" rel=\"stylesheet\"/></head>
\t<style>
\t\t.card1 {
\t\t\tdisplay: flex;
\t\t\tbox-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
\t\t\ttransition: 0.3s; /* width: 70%; */
\t\t\tflex-direction: column;
\t\t\tflex-wrap: wrap;
\t\t\talign-content: center;
\t\t\tjustify-content: space-evenly;
\t\t\talign-items: center;
\t\t}
\t\t.card1:hover {
\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t}
\t</style>
</html></head><body>
{{ form_start(form) }}
<div class=\"container \">
\t<h1 class=\"my-5\" style=\"text-align: center;\">welcome</h1>
\t<div class=\"card1\">
\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"{{ asset('img/culiterwave.png') }}\"/>
\t\t{{ form_start(form) }}
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t{{ form_label(form.Email, 'votre Email') }}
\t\t\t{{ form_widget(form.Email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.Email) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t{{ form_label(form.code, 'votre code') }}
\t\t\t{{ form_widget(form.code, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.code) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t{{ form_label(form.password, 'New Password') }}
\t\t\t{{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.password) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"width: 30%; display: flex; align-content: space-between; flex-direction: column; justify-content: center; align-items: center;\">
\t\t\t{{ form_label(form.password1, 'Confirm Password') }}
\t\t\t{{ form_widget(form.password1, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.password1) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"\">
\t\t\t{{ form_label(form.submit, 'Confirm') }}
\t\t\t{{ form_widget(form.submit, {'attr': {'class': 'btn btn-primary'}}) }}
\t\t</div>

\t</div>

</div>
{{ form_end(form, {'render_reset': false }) }}
<!-- JavaScript Libraries -->
<link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\"/><script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script></body></html>
", "user/makeNewpassword.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\makeNewpassword.html.twig");
    }
}
