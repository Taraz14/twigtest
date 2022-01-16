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

/* layouts/navbar.html */
class __TwigTemplate_cd647716edb2b59661d1caaf5d5335b4ea1dc80a8ea39f4a14d955af90d870a8 extends Template
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
        // line 1
        echo "
";
        // line 3
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "images/Background.png\" width=\"80%\"/></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"#\">Hosting</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Domain</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Server</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Website</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Afiliasi</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Promo</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Pembayaran</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Review</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Kontak</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\">Blog</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "layouts/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/navbar.html", "C:\\laragon\\www\\docker\\view\\layouts\\navbar.html");
    }
}
