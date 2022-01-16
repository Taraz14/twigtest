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

/* layouts/topNavbar.html */
class __TwigTemplate_b45047a8ea184581fa3b11c8f4a540e93df6ae4f0fbeadf09beea64b67dc00f9 extends Template
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
        // line 2
        echo "<nav class=\"nav-header navbar-expand-sm navbar-light bg-white\">
\t<div class=\"container\">
\t\t<div class=\"navbar-collapse font-weight-light\">
\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0 d-flex\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#\">
\t\t\t\t\t\t<img class=\"tag-img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "images/1.png\"/>
\t\t\t\t\t\tGratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"d-flex\">
\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0 d-flex\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fas fa-phone\"></i>
\t\t\t\t\t\t\t0274-5305505</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fas fa-message\"></i>
\t\t\t\t\t\t\tLive Chat</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fas fa-user-circle\"></i>
\t\t\t\t\t\t\tMember Area</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "layouts/topNavbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/topNavbar.html", "C:\\laragon\\www\\docker\\view\\layouts\\topNavbar.html");
    }
}
