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
class __TwigTemplate_5f68ea12c18bb9001aa85799f3f6fa29 extends Template
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
\t\t<meta
\t\tcontent=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t<!-- Favicon -->
\t\t<link
\t\thref=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t<!-- CSS Libraries -->
\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> ";
        $this->displayBlock('cssandthings', $context, $blocks);
        // line 24
        echo "\t\t<!-- Template Stylesheet -->
\t\t<link href=\"";
        // line 25
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

\t\t}

\t\t.card1:hover {
\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t}
\t\t</head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html>
\t\t</head>
\t</html>
</style></head><body>
<div class=\"container\">

\t<div class=\"card1\">
\t\t<h6 style=\"hiden\">welcome</h6>
\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/culiterwave.png"), "html", null, true);
        echo "\"/>

\t\t";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "Nom", [], "any", false, false, false, 57), 'label', ["label" => "votre nom"]);
        echo "
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "Nom", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Nom", [], "any", false, false, false, 59), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Prenom", [], "any", false, false, false, 62), 'label', ["label" => "votre prenom"]);
        echo "
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Prenom", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Prenom", [], "any", false, false, false, 64), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Email", [], "any", false, false, false, 67), 'label', ["label" => "votre Email"]);
        echo "
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "Email", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "Email", [], "any", false, false, false, 69), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), 'label', ["label" => "votre password"]);
        echo "
\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "password", [], "any", false, false, false, 74), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Type", [], "any", false, false, false, 77), 'label', ["label" => "account type"]);
        echo "
\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Type", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "Type", [], "any", false, false, false, 79), 'errors');
        echo "
\t\t</div>

\t\t<div style=\"display: flex; align-content: flex-end; justify-content: center;\">
\t\t\t";
        // line 83
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "</div>
\t\t";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end', ["render_reset" => false]);
        echo "

\t</div>

</div>

<!-- JavaScript Libraries -->
<link href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script></body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
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
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 23,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  211 => 92,  207 => 91,  197 => 84,  193 => 83,  186 => 79,  182 => 78,  178 => 77,  172 => 74,  168 => 73,  164 => 72,  158 => 69,  154 => 68,  150 => 67,  144 => 64,  140 => 63,  136 => 62,  130 => 59,  126 => 58,  122 => 57,  117 => 55,  112 => 53,  81 => 25,  78 => 24,  74 => 23,  70 => 22,  58 => 13,  44 => 1,);
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
\t\t<meta
\t\tcontent=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t<!-- Favicon -->
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

\t\t}

\t\t.card1:hover {
\t\t\tbox-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
\t\t}
\t\t</head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html> </head> </html>
\t\t</head>
\t</html>
</style></head><body>
<div class=\"container\">

\t<div class=\"card1\">
\t\t<h6 style=\"hiden\">welcome</h6>
\t\t<img style=\"width:50%; display: block; margin-left: auto;margin-right: auto;\" src=\"{{ asset('img/culiterwave.png') }}\"/>

\t\t{{ form_start(form) }}
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t{{ form_label(form.Nom, 'votre nom') }}
\t\t\t{{ form_widget(form.Nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.Nom) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t{{ form_label(form.Prenom, 'votre prenom') }}
\t\t\t{{ form_widget(form.Prenom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.Prenom) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t{{ form_label(form.Email, 'votre Email') }}
\t\t\t{{ form_widget(form.Email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.Email) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t{{ form_label(form.password, 'votre password') }}
\t\t\t{{ form_widget(form.password, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.password) }}
\t\t</div>
\t\t<div class=\"form-group\" style=\"display: flex; flex-direction: row; align-content: center; flex-wrap: wrap; justify-content: center; align-items: stretch;\">
\t\t\t{{ form_label(form.Type, 'account type') }}
\t\t\t{{ form_widget(form.Type, { 'attr': {'class': 'form-control'} }) }}
\t\t\t{{ form_errors(form.Type) }}
\t\t</div>

\t\t<div style=\"display: flex; align-content: flex-end; justify-content: center;\">
\t\t\t{{ include('user/_form.html.twig') }}</div>
\t\t{{ form_end(form, {'render_reset': false }) }}

\t</div>

</div>

<!-- JavaScript Libraries -->
<link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\"/>
<script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script></body></html>{# <h1>Create new User</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width: 50%;\" class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.Nom, 'votre nom') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.Nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.Nom) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}{# 
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
