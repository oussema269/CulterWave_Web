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

/* Admindachboard.html.twig */
class __TwigTemplate_a66c1876a36775edbf4400ba3d762109 extends Template
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
            'fotter' => [$this, 'block_fotter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admindachboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admindachboard.html.twig"));

        // line 1
        $this->displayBlock('navBarr', $context, $blocks);
        // line 199
        echo "
\t\t\t\t<div class=\"top_nav\">
\t\t\t\t\t<div class=\"nav_menu\">
\t\t\t\t\t\t<div class=\"nav toggle\">
\t\t\t\t\t\t\t<a id=\"menu_toggle\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<ul class=\"navbar-right\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown open\" style=\"padding-left: 15px\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"\"/>John Doe
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_admin");
        echo "\">

\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-red pull-right\">50%</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new-for-admin");
        echo "\">

\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tCreate New User</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:;\">Help</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tLog Out</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"nav-item dropdown open\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-green\">6</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>See All Alerts</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /top navigation -->

\t\t\t\t<!-- page content -->
\t\t\t\t<div class=\"right_col\" role=\"main\"> ";
        // line 308
        $this->displayBlock('body', $context, $blocks);
        // line 309
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- /page content -->

\t\t\t\t\t<!-- footer content -->
\t\t\t\t\t<footer>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\tGentelella - Bootstrap Admin Template by
\t\t\t\t\t\t\t<a href=\"https://colorlib.com\">Colorlib</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- /footer content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/fastclick.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- jQuery -->
\t\t\t<script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Bootstrap -->
\t\t\t<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- FastClick -->
\t\t\t<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- NProgress -->
\t\t\t<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Chart.js -->
\t\t\t<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- gauge.js -->
\t\t\t<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- bootstrap-progressbar -->
\t\t\t<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- iCheck -->
\t\t\t<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Skycons -->
\t\t\t<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Flot -->
\t\t\t<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Flot plugins -->
\t\t\t<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- DateJS -->
\t\t\t<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- JQVMap -->
\t\t\t<script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- bootstrap-daterangepicker -->
\t\t\t<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Custom Theme Scripts -->
\t\t\t<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>

\t\t\t";
        // line 365
        $this->displayBlock('fotter', $context, $blocks);
        
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
        echo "\t<!DOCTYPE html>
\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta
\t\t\thttp-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
\t\t\t<!-- Meta, title, CSS, favicons, etc. -->
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t\t<link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/ico\"/>

\t\t\t<title>Gentelella Alela!</title>

\t\t\t<!-- Bootstrap -->
\t\t\t<link
\t\t\thref=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- NProgress -->
\t\t\t<link
\t\t\thref=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- iCheck -->
\t\t\t<link
\t\t\thref=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t\t\t<!-- bootstrap-progressbar -->
\t\t\t<link
\t\t\thref=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- JQVMap -->
\t\t\t<link
\t\t\thref=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- bootstrap-daterangepicker -->
\t\t\t<link
\t\t\thref=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

\t\t\t<!-- Custom Theme Style -->
\t\t\t<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<style>
\t\t\t\t.bn632-hover {
\t\t\t\t\twidth: 160px;
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tfont-weight: 600;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tmargin: 20px;
\t\t\t\t\theight: 55px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tborder: none;
\t\t\t\t\tbackground-size: 300% 100%;
\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.bn632-hover:hover {
\t\t\t\t\tbackground-position: 100% 0;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.bn632-hover:focus {
\t\t\t\t\toutline: none;
\t\t\t\t}

\t\t\t\t.bn632-hover.bn20 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #667eea, #764ba2, #6b8dd6, #8e37d7);
\t\t\t\t\tbox-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
\t\t\t\t}


\t\t\t\t.btn12-hover {
\t\t\t\t\twidth: 160px;
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tfont-weight: 600;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tmargin: 20px;
\t\t\t\t\theight: 55px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tborder: none;
\t\t\t\t\tbackground-size: 300% 100%;
\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn12-hover:hover {
\t\t\t\t\tbackground-position: 100% 0;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn12-hover:focus {
\t\t\t\t\toutline: none;
\t\t\t\t}

\t\t\t\t.btn12-hover.bn19 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
\t\t\t\t\tbox-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
\t\t\t\t}
\t\t\t</style>
\t\t\t";
        // line 112
        $this->displayBlock('cssandthings', $context, $blocks);
        // line 113
        echo "\t\t\t<!-- Custom Theme Style -->
\t\t\t<link href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t</head>

\t\t<body class=\"nav-md\">
\t\t\t<div class=\"container body\">
\t\t\t\t<div class=\"main_container\">
\t\t\t\t\t<div class=\"col-md-3 left_col\">
\t\t\t\t\t\t<div class=\"left_col scroll-view\">


\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<!-- menu profile quick info -->
\t\t\t\t\t\t\t<div class=\"profile clearfix\">
\t\t\t\t\t\t\t\t<div class=\"profile_pic\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"profile_info\">
\t\t\t\t\t\t\t\t\t<span>Welcome,</span>
\t\t\t\t\t\t\t\t\t<h2>John Doe</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /menu profile quick info -->

\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<!-- sidebar menu -->
\t\t\t\t\t\t\t<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
\t\t\t\t\t\t\t\t<div class=\"menu_section\">
\t\t\t\t\t\t\t\t\t<h3>General</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"nav side-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProducts

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEvents

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tFormation

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tcommands
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /sidebar menu -->

\t\t\t\t\t\t\t<div class=\"sidebar-footer hidden-small\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
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

    // line 308
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 365
    public function block_fotter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fotter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fotter"));

        // line 366
        echo "\t\t\t</body>
\t\t</html>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Admindachboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 366,  623 => 365,  605 => 308,  587 => 112,  570 => 192,  521 => 146,  501 => 129,  483 => 114,  480 => 113,  478 => 112,  402 => 39,  396 => 36,  390 => 33,  384 => 30,  377 => 26,  371 => 23,  365 => 20,  359 => 17,  350 => 11,  339 => 2,  329 => 1,  319 => 365,  314 => 363,  308 => 360,  304 => 359,  299 => 357,  295 => 356,  291 => 355,  286 => 353,  281 => 351,  277 => 350,  273 => 349,  268 => 347,  264 => 346,  260 => 345,  256 => 344,  252 => 343,  247 => 341,  242 => 339,  237 => 337,  232 => 335,  227 => 333,  222 => 331,  217 => 329,  212 => 327,  207 => 325,  202 => 323,  186 => 309,  184 => 308,  153 => 280,  137 => 267,  121 => 254,  105 => 241,  88 => 227,  79 => 221,  69 => 214,  63 => 211,  49 => 199,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block navBarr %}
\t<!DOCTYPE html>
\t<html lang=\"en\">
\t\t<head>
\t\t\t<meta
\t\t\thttp-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
\t\t\t<!-- Meta, title, CSS, favicons, etc. -->
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t\t<link rel=\"icon\" href=\"{{ asset('images/favicon.ico') }}\" type=\"image/ico\"/>

\t\t\t<title>Gentelella Alela!</title>

\t\t\t<!-- Bootstrap -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- NProgress -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- iCheck -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\"/>

\t\t\t<!-- bootstrap-progressbar -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- JQVMap -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- bootstrap-daterangepicker -->
\t\t\t<link
\t\t\thref=\"{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}\" rel=\"stylesheet\"/>

\t\t\t<!-- Custom Theme Style -->
\t\t\t<link href=\"{{ asset('build/css/custom.min.css') }}\" rel=\"stylesheet\"/>
\t\t\t<style>
\t\t\t\t.bn632-hover {
\t\t\t\t\twidth: 160px;
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tfont-weight: 600;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tmargin: 20px;
\t\t\t\t\theight: 55px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tborder: none;
\t\t\t\t\tbackground-size: 300% 100%;
\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.bn632-hover:hover {
\t\t\t\t\tbackground-position: 100% 0;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.bn632-hover:focus {
\t\t\t\t\toutline: none;
\t\t\t\t}

\t\t\t\t.bn632-hover.bn20 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #667eea, #764ba2, #6b8dd6, #8e37d7);
\t\t\t\t\tbox-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
\t\t\t\t}


\t\t\t\t.btn12-hover {
\t\t\t\t\twidth: 160px;
\t\t\t\t\tfont-size: 16px;
\t\t\t\t\tfont-weight: 600;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\tmargin: 20px;
\t\t\t\t\theight: 55px;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tborder: none;
\t\t\t\t\tbackground-size: 300% 100%;
\t\t\t\t\tborder-radius: 50px;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn12-hover:hover {
\t\t\t\t\tbackground-position: 100% 0;
\t\t\t\t\tmoz-transition: all 0.4s ease-in-out;
\t\t\t\t\t-o-transition: all 0.4s ease-in-out;
\t\t\t\t\t-webkit-transition: all 0.4s ease-in-out;
\t\t\t\t\ttransition: all 0.4s ease-in-out;
\t\t\t\t}

\t\t\t\t.btn12-hover:focus {
\t\t\t\t\toutline: none;
\t\t\t\t}

\t\t\t\t.btn12-hover.bn19 {
\t\t\t\t\tbackground-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
\t\t\t\t\tbox-shadow: 0 5px 15px rgba(242, 97, 103, 0.4);
\t\t\t\t}
\t\t\t</style>
\t\t\t{% block cssandthings %}{% endblock %}
\t\t\t<!-- Custom Theme Style -->
\t\t\t<link href=\"{{asset(\"../build/css/custom.min.css\")}}\" rel=\"stylesheet\">
\t\t</head>

\t\t<body class=\"nav-md\">
\t\t\t<div class=\"container body\">
\t\t\t\t<div class=\"main_container\">
\t\t\t\t\t<div class=\"col-md-3 left_col\">
\t\t\t\t\t\t<div class=\"left_col scroll-view\">


\t\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t\t<!-- menu profile quick info -->
\t\t\t\t\t\t\t<div class=\"profile clearfix\">
\t\t\t\t\t\t\t\t<div class=\"profile_pic\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/img.jpg') }}\" alt=\"...\" class=\"img-circle profile_img\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"profile_info\">
\t\t\t\t\t\t\t\t\t<span>Welcome,</span>
\t\t\t\t\t\t\t\t\t<h2>John Doe</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /menu profile quick info -->

\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<!-- sidebar menu -->
\t\t\t\t\t\t\t<div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
\t\t\t\t\t\t\t\t<div class=\"menu_section\">
\t\t\t\t\t\t\t\t\t<h3>General</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"nav side-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_index') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProducts

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-desktop\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tEvents

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tFormation

\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tcommands
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /sidebar menu -->

\t\t\t\t\t\t\t<div class=\"sidebar-footer hidden-small\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}

\t\t\t\t<div class=\"top_nav\">
\t\t\t\t\t<div class=\"nav_menu\">
\t\t\t\t\t\t<div class=\"nav toggle\">
\t\t\t\t\t\t\t<a id=\"menu_toggle\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<nav class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<ul class=\"navbar-right\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown open\" style=\"padding-left: 15px\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/img.jpg') }}\" alt=\"\"/>John Doe
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_profil_admin') }}\">

\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-red pull-right\">50%</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Settings</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_user_new-for-admin') }}\">

\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\tCreate New User</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:;\">Help</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-sign-out pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t\tLog Out</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"nav-item dropdown open\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle info-number\" id=\"navbarDropdown1\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-green\">6</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\" aria-labelledby=\"navbarDropdown1\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{ asset('images/img.jpg') }}\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{ asset('images/img.jpg') }}\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{ asset('images/img.jpg') }}\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{ asset('images/img.jpg') }}\" alt=\"Profile Image\"/></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>John Smith</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">3 mins ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"message\">
\t\t\t\t\t\t\t\t\t\t\t\t\tFilm festivals used to be do-or-die moments for movie
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                          makers. They were where...
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>See All Alerts</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /top navigation -->

\t\t\t\t<!-- page content -->
\t\t\t\t<div class=\"right_col\" role=\"main\"> {% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /page content -->

\t\t\t\t\t<!-- footer content -->
\t\t\t\t\t<footer>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\tGentelella - Bootstrap Admin Template by
\t\t\t\t\t\t\t<a href=\"https://colorlib.com\">Colorlib</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</footer>
\t\t\t\t\t<!-- /footer content -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<script src=\"{{ asset('js/fastclick.js') }}\"></script>
\t\t\t<!-- jQuery -->
\t\t\t<script src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
\t\t\t<!-- Bootstrap -->
\t\t\t<script src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
\t\t\t<!-- FastClick -->
\t\t\t<script src=\"{{ asset('vendors/fastclick/lib/fastclick.js') }}\"></script>
\t\t\t<!-- NProgress -->
\t\t\t<script src=\"{{ asset('vendors/nprogress/nprogress.js') }}\"></script>
\t\t\t<!-- Chart.js -->
\t\t\t<script src=\"{{ asset('vendors/Chart.js/dist/Chart.min.js') }}\"></script>
\t\t\t<!-- gauge.js -->
\t\t\t<script src=\"{{ asset('vendors/gauge.js/dist/gauge.min.js') }}\"></script>
\t\t\t<!-- bootstrap-progressbar -->
\t\t\t<script src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}\"></script>
\t\t\t<!-- iCheck -->
\t\t\t<script src=\"{{ asset('vendors/iCheck/icheck.min.js') }}\"></script>
\t\t\t<!-- Skycons -->
\t\t\t<script src=\"{{ asset('vendors/skycons/skycons.js') }}\"></script>
\t\t\t<!-- Flot -->
\t\t\t<script src=\"{{ asset('vendors/Flot/jquery.flot.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/Flot/jquery.flot.pie.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/Flot/jquery.flot.time.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/Flot/jquery.flot.stack.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/Flot/jquery.flot.resize.js') }}\"></script>
\t\t\t<!-- Flot plugins -->
\t\t\t<script src=\"{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/flot.curvedlines/curvedLines.js') }}\"></script>
\t\t\t<!-- DateJS -->
\t\t\t<script src=\"{{ asset('vendors/DateJS/build/date.js') }}\"></script>
\t\t\t<!-- JQVMap -->
\t\t\t<script src=\"{{ asset('vendors/jqvmap/dist/jquery.vmap.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}\"></script>
\t\t\t<!-- bootstrap-daterangepicker -->
\t\t\t<script src=\"{{ asset('vendors/moment/min/moment.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>

\t\t\t<!-- Custom Theme Scripts -->
\t\t\t<script src=\"{{ asset('build/js/custom.min.js') }}\"></script>

\t\t\t{% block fotter %}
\t\t\t</body>
\t\t</html>
\t{% endblock %}
", "Admindachboard.html.twig", "C:\\xampp\\htdocs\\FirstProject\\templates\\Admindachboard.html.twig");
    }
}
