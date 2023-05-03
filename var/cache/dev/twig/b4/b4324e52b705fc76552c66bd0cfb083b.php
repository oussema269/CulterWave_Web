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

/* user/forgetpassword.html.twig */
class __TwigTemplate_d1f6feb5674791d0b541a5670fda9f8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/forgetpassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/forgetpassword.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'label', ["label" => "votre Email"]);
        echo "
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'errors');
        echo "
\t\t</div>
\t\t";
        // line 51
        echo twig_include($this->env, $context, "user/_form.html.twig", ["button_label" => "Send Email"]);
        echo "
\t</div>

</div>
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end', ["render_reset" => false]);
        echo "
<!-- JavaScript Libraries -->
<link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
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
        return "user/forgetpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 21,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  140 => 57,  135 => 55,  128 => 51,  123 => 49,  119 => 48,  115 => 47,  110 => 45,  106 => 44,  99 => 40,  79 => 23,  76 => 22,  72 => 21,  68 => 20,  56 => 11,  44 => 1,);
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
\t\t\t{{ form_label(form.email, 'votre Email') }}
\t\t\t{{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.email) }}
\t\t</div>
\t\t{{ include('user/_form.html.twig', {'button_label': 'Send Email'}) }}
\t</div>

</div>
{{ form_end(form, {'render_reset': false }) }}
<!-- JavaScript Libraries -->
<link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\"/><script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script></body></html>
", "user/forgetpassword.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\user\\forgetpassword.html.twig");
    }
}
