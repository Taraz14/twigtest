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

/* layouts/index.html */
class __TwigTemplate_dcd9e360f0202dc2bd202696d42e7ea44ac5337520658a3f29c060965c111b32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["favicon"] ?? null), "html", null, true);
        echo "favicon.ico\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "vendor/bootstrap/css/bootstrap.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "vendor/fontawesome-free-6.0.0/css/all.css\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "owncss/style.css\">
\t\t<title>Welcome</title>
\t\t<style>
\t\t\t.payment-list {
\t\t\t\tlist-style: none;
\t\t\t\tmargin-left: -31px;
\t\t\t}

\t\t\tli.payment {
\t\t\t\tdisplay: inline;

\t\t\t}

\t\t\t.soc {
\t\t\t\tpadding-top: 10px;
\t\t\t\tpadding-right: 10px;
\t\t\t\twidth: 31%;
\t\t\t}

\t\t\t.svg {
\t\t\t\tlist-style: none;
\t\t\t\tmargin: 10px 0;
\t\t\t\tpadding-left: 25px;
\t\t\t\tvertical-align: middle;
\t\t\t\tfont-family: \"Montserrat-light\";
\t\t\t\tbackground: url(\"data:image/svg+xml;charset=UTF-8, <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-circle-check' width='24' height='24' viewBox='0 0 24 24' stroke-width='2' stroke='white' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'></path><circle fill='limegreen' cx='12' cy='12' r='9'></circle><path d='M9 12l2 2l4 -4'></path></svg>\") 0 0 / contain no-repeat;
\t\t\t}


\t\t</style>
\t</head>
\t<body>

\t\t";
        // line 43
        $this->loadTemplate("layouts/topNavbar.html", "layouts/index.html", 43)->display($context);
        // line 44
        echo "\t\t";
        $this->loadTemplate("layouts/navbar.html", "layouts/index.html", 44)->display($context);
        // line 45
        echo "\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "

\t    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "vendor/fontawesome-free-6.0.0/js/all.js\"></script>
    </body>
</html>
";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  110 => 49,  106 => 48,  102 => 46,  99 => 45,  96 => 44,  94 => 43,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/index.html", "C:\\laragon\\www\\docker\\view\\layouts\\index.html");
    }
}
