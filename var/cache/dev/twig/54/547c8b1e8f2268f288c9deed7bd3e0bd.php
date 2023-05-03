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

/* base.html.twig */
class __TwigTemplate_93ab6f3ebc631977bc11518276d4cb96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navBarr' => [$this, 'block_navBarr'],
            'cssandthings' => [$this, 'block_cssandthings'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('navBarr', $context, $blocks);
        // line 78
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 713
        echo "\t\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 817
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 817, $this->source); })()), "session", [], "any", false, false, false, 817), "getFlashBag", [], "any", false, false, false, 817), "get", [0 => "success"], "method", false, false, false, 817));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 818
            echo "  <br>
  <br>
  <div class=\"container position-fixed top-3 start-50 translate-middle-x\" style=\"width:300px;\">
    <div class=\"alert alert-success text-center\" role=\"alert\" style=\"background-color: #d4edda; border-color: #c3e6cb; color: #155724; border-radius: .25rem;\">
      ";
            // line 822
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
  </div>

   <script>
        setTimeout(function() {
            document.querySelector('.alert-success').remove();
        }, 3000);
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_navBarr($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBarr"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBarr"));

        // line 2
        echo "\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>E Store - eCommerce HTML Template</title>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"keywords\"/>
\t\t\t<meta
\t\t\tcontent=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t\t<!-- Favicon -->
\t\t\t<link
\t\t\thref=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t\t<!-- CSS Libraries -->
\t\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t";
        // line 25
        $this->displayBlock('cssandthings', $context, $blocks);
        // line 26
        echo "\t\t\t<!-- Template Stylesheet -->
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t</head>

\t\t<body>
\t\t\t<!-- Nav Bar Start -->
\t\t\t<div class=\"nav\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-md bg-dark navbar-dark\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-brand\">MENU</a>
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
\t\t\t\t\t\t\t<div class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_read2");
        // line 50
        echo "\" class=\"nav-item nav-link active\">event</a>
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>

\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"nav-item nav-link\">Event
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-item nav-link\">formation</a>
\t\t\t\t\t\t\t\t<a href=\"product-list.html\" class=\"nav-item nav-link\">Products</a>
\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"nav-item nav-link\">Cart</a>
\t\t\t\t\t\t\t\t<a href=\"checkout.html\" class=\"nav-item nav-link\">Checkout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">User Account</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show");
        echo "\" class=\"nav-item nav-link\">My Account</a>


\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"dropdown-item\">log out</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Nav Bar End -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
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

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "\t\t\t<!-- Bottom Bar Start -->
\t\t\t<div class=\"bottom-bar\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px\" src=\"img/culiterwave.png\" alt=\"Logo\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t<a href=\"wishlist.html\" class=\"btn wishlist\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t<span>(0)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"btn cart\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t<span>(0)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Bottom Bar End -->

\t\t\t<!-- Main Slider Start -->
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"header-slider normal-slider\">
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-1.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-2.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-3.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"header-img\">
\t\t\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/category-1.jpg\"/>
\t\t\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/category-2.jpg\"/>
\t\t\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Main Slider End -->

\t\t\t<!-- Category Start-->
\t\t\t<div class=\"category\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t\t\t<img src=\"img/category-3.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t\t\t<img src=\"img/category-4.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t\t\t<img src=\"img/category-5.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t\t\t<img src=\"img/category-6.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t\t\t<img src=\"img/category-7.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t\t\t<img src=\"img/category-8.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Category End-->

\t\t\t<!-- Call to Action Start -->
\t\t\t<div class=\"call-to-action\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1>call us for any queries</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<a href=\"tel:0123456789\">+012-345-6789</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Call to Action End -->

\t\t\t<!-- Featured Product Start -->
\t\t\t<div class=\"featured-product product\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h1>Featured Product</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-1.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-2.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-3.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-4.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-5.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Featured Product End -->

\t\t\t<!-- Newsletter Start -->
\t\t\t<div class=\"newsletter\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1>Subscribe Our Newsletter</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"Your email here\"/>
\t\t\t\t\t\t\t\t<button>Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Newsletter End -->

\t\t\t<!-- Recent Product Start -->
\t\t\t<div class=\"recent-product product\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h1>Recent Product</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-6.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-7.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-8.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-9.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-10.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Recent Product End -->

\t\t\t<!-- Review Start -->
\t\t\t<div class=\"review\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center review-slider normal-slider\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-1.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-2.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-3.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Review End -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 713
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 714
        echo "\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>123 E Store, Los Angeles, USA
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>email@example.com</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>+123-456-7890</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Follow Us</h2>
\t\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Company Info</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Condition</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Purchase Info</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pyament Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Shipping Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Return Policy</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row payment align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t\t\t<h2>We Accept:</h2>
\t\t\t\t\t\t\t\t<img src=\"img/payment-method.png\" alt=\"Payment Method\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"payment-security\">
\t\t\t\t\t\t\t\t<h2>Secured By:</h2>
\t\t\t\t\t\t\t\t<img src=\"img/godaddy.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t\t<img src=\"img/norton.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t\t<img src=\"img/ssl.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->

\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t</a>

\t\t\t<!-- JavaScript Libraries -->
\t\t\t<link href=\"";
        // line 807
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\"/>
\t\t\t<script src=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://code.jquery.com/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 810
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

\t\t</body>
\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1001 => 812,  997 => 811,  993 => 810,  989 => 809,  985 => 808,  981 => 807,  886 => 714,  876 => 713,  233 => 79,  223 => 78,  205 => 25,  185 => 68,  179 => 65,  162 => 50,  160 => 45,  139 => 27,  136 => 26,  134 => 25,  130 => 24,  126 => 23,  114 => 14,  100 => 2,  90 => 1,  66 => 822,  60 => 818,  55 => 817,  52 => 713,  49 => 78,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block navBarr %}
\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>E Store - eCommerce HTML Template</title>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
\t\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t\t<meta content=\"eCommerce HTML Template Free Download\" name=\"keywords\"/>
\t\t\t<meta
\t\t\tcontent=\"eCommerce HTML Template Free Download\" name=\"description\"/>

\t\t\t<!-- Favicon -->
\t\t\t<link
\t\t\thref=\"{{asset(\"img/favicon.ico\")}}\" rel=\"icon\"/>

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap\" rel=\"stylesheet\"/>

\t\t\t<!-- CSS Libraries -->
\t\t\t<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"/>
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t\t<link href=\"{{asset(\"lib/slick/slick.css\")}}\" rel=\"stylesheet\"/>
\t\t\t<link href=\"{{asset(\"lib/slick/slick-theme.css\")}}\" rel=\"stylesheet\"/>
\t\t\t{% block cssandthings %}{% endblock %}
\t\t\t<!-- Template Stylesheet -->
\t\t\t<link href=\"{{asset(\"css/style.css\")}}\" rel=\"stylesheet\"/>
\t\t</head>

\t\t<body>
\t\t\t<!-- Nav Bar Start -->
\t\t\t<div class=\"nav\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-md bg-dark navbar-dark\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-brand\">MENU</a>
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
\t\t\t\t\t\t\t<div class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"{{
              path(
                'app_read2',
               
              )
            }}\" class=\"nav-item nav-link active\">event</a>
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>

\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"nav-item nav-link\">Event
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-item nav-link\">formation</a>
\t\t\t\t\t\t\t\t<a href=\"product-list.html\" class=\"nav-item nav-link\">Products</a>
\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"nav-item nav-link\">Cart</a>
\t\t\t\t\t\t\t\t<a href=\"checkout.html\" class=\"nav-item nav-link\">Checkout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">User Account</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show') }}\" class=\"nav-item nav-link\">My Account</a>


\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"dropdown-item\">log out</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Nav Bar End -->
\t\t{% endblock %}
\t\t{% block body %}
\t\t\t<!-- Bottom Bar Start -->
\t\t\t<div class=\"bottom-bar\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t<img style=\"height: 100px\" src=\"img/culiterwave.png\" alt=\"Logo\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t\t\t\t<button>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t<a href=\"wishlist.html\" class=\"btn wishlist\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t<span>(0)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"btn cart\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t<span>(0)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Bottom Bar End -->

\t\t\t<!-- Main Slider Start -->
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"header-slider normal-slider\">
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-1.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-2.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"header-slider-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/slider-3.jpg\" alt=\"Slider Image\"/>
\t\t\t\t\t\t\t\t\t<div class=\"header-slider-caption\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Shop Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"header-img\">
\t\t\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/category-1.jpg\"/>
\t\t\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"img-item\">
\t\t\t\t\t\t\t\t\t<img src=\"img/category-2.jpg\"/>
\t\t\t\t\t\t\t\t\t<a class=\"img-text\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Main Slider End -->

\t\t\t<!-- Category Start-->
\t\t\t<div class=\"category\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t\t\t<img src=\"img/category-3.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t\t\t<img src=\"img/category-4.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t\t\t<img src=\"img/category-5.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-150\">
\t\t\t\t\t\t\t\t<img src=\"img/category-6.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"category-item ch-250\">
\t\t\t\t\t\t\t\t<img src=\"img/category-7.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"category-item ch-400\">
\t\t\t\t\t\t\t\t<img src=\"img/category-8.jpg\"/>
\t\t\t\t\t\t\t\t<a class=\"category-name\" href=\"\">
\t\t\t\t\t\t\t\t\t<p>Some text goes here that describes the image</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Category End-->

\t\t\t<!-- Call to Action Start -->
\t\t\t<div class=\"call-to-action\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1>call us for any queries</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<a href=\"tel:0123456789\">+012-345-6789</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Call to Action End -->

\t\t\t<!-- Featured Product Start -->
\t\t\t<div class=\"featured-product product\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h1>Featured Product</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-1.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-2.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-3.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-4.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-5.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Featured Product End -->

\t\t\t<!-- Newsletter Start -->
\t\t\t<div class=\"newsletter\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1>Subscribe Our Newsletter</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"form\">
\t\t\t\t\t\t\t\t<input type=\"email\" value=\"Your email here\"/>
\t\t\t\t\t\t\t\t<button>Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Newsletter End -->

\t\t\t<!-- Recent Product Start -->
\t\t\t<div class=\"recent-product product\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t\t<h1>Recent Product</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row align-items-center product-slider product-slider-4\">
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-6.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-7.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-8.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-9.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t<div class=\"product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Product Name</a>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/product-10.jpg\" alt=\"Product Image\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-action\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cart-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-price\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span>\$</span>99</h3>
\t\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>Buy Now</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Recent Product End -->

\t\t\t<!-- Review Start -->
\t\t\t<div class=\"review\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center review-slider normal-slider\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-1.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.

\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-2.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"review-slider-item\">
\t\t\t\t\t\t\t\t<div class=\"review-img\">
\t\t\t\t\t\t\t\t\t<img src=\"img/review-3.jpg\" alt=\"Image\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"review-text\">
\t\t\t\t\t\t\t\t\t<h2>Customer Name</h2>
\t\t\t\t\t\t\t\t\t<h3>Profession</h3>
\t\t\t\t\t\t\t\t\t<div class=\"ratting\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  Curabitur vitae nunc eget leo finibus luctus et vitae lorem
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Review End -->
\t\t{% endblock %}
\t\t{% block footer %}
\t\t\t<!-- Footer Start -->
\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Get in Touch</h2>
\t\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>123 E Store, Los Angeles, USA
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>email@example.com</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone\"></i>+123-456-7890</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Follow Us</h2>
\t\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Company Info</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Condition</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t\t<h2>Purchase Info</h2>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Pyament Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Shipping Policy</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Return Policy</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row payment align-items-center\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"payment-method\">
\t\t\t\t\t\t\t\t<h2>We Accept:</h2>
\t\t\t\t\t\t\t\t<img src=\"img/payment-method.png\" alt=\"Payment Method\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"payment-security\">
\t\t\t\t\t\t\t\t<h2>Secured By:</h2>
\t\t\t\t\t\t\t\t<img src=\"img/godaddy.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t\t<img src=\"img/norton.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t\t<img src=\"img/ssl.svg\" alt=\"Payment Security\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Footer End -->

\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"back-to-top\">
\t\t\t\t<i class=\"fa fa-chevron-up\"></i>
\t\t\t</a>

\t\t\t<!-- JavaScript Libraries -->
\t\t\t<link href=\"{{ asset('img/favicon.ico') }}\" rel=\"icon\"/>
\t\t\t<script src=\"{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('lib/slick/slick.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/main.js') }}\"></script>

\t\t</body>
\t</html>
{% endblock %}
  {% for message in app.session.getFlashBag.get('success') %}
  <br>
  <br>
  <div class=\"container position-fixed top-3 start-50 translate-middle-x\" style=\"width:300px;\">
    <div class=\"alert alert-success text-center\" role=\"alert\" style=\"background-color: #d4edda; border-color: #c3e6cb; color: #155724; border-radius: .25rem;\">
      {{ message }}
    </div>
  </div>

   <script>
        setTimeout(function() {
            document.querySelector('.alert-success').remove();
        }, 3000);
    </script>
{% endfor %}
", "base.html.twig", "C:\\xampp\\htdocs\\pisymfony\\testfortest-master\\templates\\base.html.twig");
    }
}
