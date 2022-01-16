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

/* landingPage.twig */
class __TwigTemplate_947b9d0822b869216835d06de692ce041a66391d04df36a98468432664a82838 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/index.html", "landingPage.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<div class=\"hr content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<h2 class=\"section-title\">
\t\t\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, ($context["welcome"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"hero-text\">Cepat, Handal, penuh dengan modul PHP yang Anda butuhkan</div>
\t\t\t\t\t\t<div class=\"mt-3 text-content list-section\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Solusi PHP untuk performa query yang lebih cepat.</li>
\t\t\t\t\t\t\t\t<li>Konsumsi memori yang lebih rendah.</li>
\t\t\t\t\t\t\t\t<li>Support PHP 5.3. PHP 5.4. PHP 5.5. PHP 5.6. PHP 7.</li>
\t\t\t\t\t\t\t\t<li>Fitur enkripsi IonCube dan Zend Guard Loaders.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/illustration banner PHP hosting-01.svg\" width=\"90%\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"text-center d-flex align-items-center justify-content-center mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/illustration-banner-PHP-zenguard01.svg\" width=\"20%\" class=\"size\" alt=\"...\">
\t\t\t\t\t\t<div class=\"caption center-block text-content\">PHP Zend Guard Loader.</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon-composer.svg\" width=\"20%\" class=\"size\" alt=\"...\">
\t\t\t\t\t\t<figcaption class=\"caption center-block text-content\">PHP Composer.</figcaption>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon-php-hosting-ioncube.svg\" width=\"20%\" class=\"size\" alt=\"...\">
\t\t\t\t\t\t<figcaption class=\"caption center-block text-content mb-5\">PHP ionCube Loader.</figcaption>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</div>
<div class=\"text-center d-flex align-items-center justify-content-center mt-5 mb-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 text-center\">
\t\t\t<h3 class=\"section-title\">Paket Hosting Singapura yang Tepat</h3>
\t\t\t<span class=\"text-diskon\">Diskon 40% + Domain dan SSL Gratis untuk Anda</span>
\t\t</div>
\t\t<div class=\"col-lg-12 text-center mt-5\">
\t\t\t<div class=\"row container g-0\">
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"text-judul\">Bayi</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<strike>Rp
\t\t\t\t\t\t\t\t";
        // line 68
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["last_price"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["bayi_last"] ?? null) : null), "html", null, true);
        echo "</strike>
\t\t\t\t\t\t\t<div class=\"harga\">
\t\t\t\t\t\t\t\t";
        // line 70
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["new_price"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["bayi_new"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header text-pengguna\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>938</strong>
\t\t\t\t\t\t\t\tPengguna Terdaftar</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t0.5X RECOURCE POWER
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t\t\t500 MB
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\tDisk Space</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tBandwidth</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDatabases</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>1</strong>
\t\t\t\t\t\t\t\t\tDomain</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Instant</strong>
\t\t\t\t\t\t\t\t\tBackup</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tSSL Gratis Selamanya</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"btn btn-outline-dark\">Pilih Sekarang</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"text-judul\">Pelajar</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<strike>Rp
\t\t\t\t\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["last_price"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["pelajar_last"] ?? null) : null), "html", null, true);
        echo "</strike>
\t\t\t\t\t\t\t<div class=\"harga\">
\t\t\t\t\t\t\t\t";
        // line 119
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["new_price"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["pelajar_new"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header text-pengguna\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>4.168</strong>
\t\t\t\t\t\t\t\tPengguna Terdaftar</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>1X RECOURCE POWER</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDisk Space</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tBandwidth</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tPOP3 Email</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDatabases</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>10</strong>
\t\t\t\t\t\t\t\t\tAddon Domains</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Instant</strong>
\t\t\t\t\t\t\t\t\tBackup
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Domain Gratis</strong>
\t\t\t\t\t\t\t\t\tSelamanya
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tSSL Gratis Selamanya</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"btn btn-outline-dark\">Pilih Sekarang</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header terbaik bestseller\">
\t\t\t\t\t\t\t<h4>Personal</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header terbaik\">
\t\t\t\t\t\t\t<strike>Rp
\t\t\t\t\t\t\t\t";
        // line 170
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["last_price"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["personal_last"] ?? null) : null), "html", null, true);
        echo "</strike>
\t\t\t\t\t\t\t<div class=\"harga-terbaik\">
\t\t\t\t\t\t\t\t";
        // line 172
        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["new_price"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[0] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["personal_new"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header pengguna-terbaik\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>10.017</strong>
\t\t\t\t\t\t\t\tPengguna Terdaftar</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body terbaik-body\">
\t\t\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>2X RECOURCE POWER</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDisk Space</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tBandwidth</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tPOP3 Email</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDatabases</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tAddon Domains</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Instant</strong>
\t\t\t\t\t\t\t\t\tBackup</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Domain Gratis</strong>
\t\t\t\t\t\t\t\t\tSelamanya</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tSSL Gratis Selamanya</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Private</strong>
\t\t\t\t\t\t\t\t\tName Server</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>SpamAssasin</strong>
\t\t\t\t\t\t\t\t\tMail Protection</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Pilih Sekarang</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h4 class=\"text-judul\">Bisnis</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<strike>Rp
\t\t\t\t\t\t\t\t";
        // line 227
        echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["last_price"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["bisnis_last"] ?? null) : null), "html", null, true);
        echo "</strike>
\t\t\t\t\t\t\t<div class=\"harga\">
\t\t\t\t\t\t\t\t";
        // line 229
        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["new_price"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["bisnis_new"] ?? null) : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-header text-pengguna\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>3.552</strong>
\t\t\t\t\t\t\t\tPengguna Terdaftar</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>3X RECOURCE POWER</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDisk Space</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tBandwidth</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tPOP3 Email</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tDatabases</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tAddon Domains</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Magic auto</strong>
\t\t\t\t\t\t\t\t\tbackup & Restore Backup</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Domain Gratis</strong>
\t\t\t\t\t\t\t\t\tSelamanya</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Unlimited</strong>
\t\t\t\t\t\t\t\t\tSSL Gratis Selamanya</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Private</strong>
\t\t\t\t\t\t\t\t\tName Server</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>Prioritas</strong>
\t\t\t\t\t\t\t\t\tLayanan Support</li>
\t\t\t\t\t\t\t\t<li style=\"color:#008FEE\">&#9733;&#9733;&#9733;&#9733;&#9733;</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<strong>SpamExpert</strong>
\t\t\t\t\t\t\t\t\tPro Mail Protection</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"btn btn-outline-dark\">Diskon 40%</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"text-center d-flex align-items-center justify-content-center mt-5 mb-5\" style=\"padding-top:100px;\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 text-center\">
\t\t\t<span class=\"text-diskon\">Powerful dengan Limit PHP yang Lebih Besar</span>
\t\t</div>
\t\t<div class=\"col-lg-12 mt-5\">
\t\t\t<div class=\"row container d-flex align-items-center justify-content-center\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content \">Max execution time 300ms</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content\">Max execution time 300ms</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content\">php memory limit 1024 MB</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content\">post max size 128 MB</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content\">upload max filesize 128 MB</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<li class=\"svg text-content\">max input vars 2500</li>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"hr-short\"></div>
<div class=\"text-center d-flex align-items-center justify-content-center mt-5 mb-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 text-center mb-5\">
\t\t\t<span class=\"text-diskon\">Semua Paket Hosting Sudah Termasuk</span>
\t\t</div>
\t\t<div class=\"col-lg-12 text-center mt-5\">
\t\t\t<div class=\"row container\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_PHP Semua Versi.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">PHP Semua versi</li>
\t\t\t\t\t\t<li class=\"text-content\">Pilih Mulai dari Versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_My SQL.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">MySQL Versi 5.6</li>
\t\t\t\t\t\t<li class=\"text-content\">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_CPanel.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">Panel Hosting cPanel</li>
\t\t\t\t\t\t<li class=\"text-content\">Kelola website dengan panel canggih yang familiar di hati Anda</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 365
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_garansi uptime.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">Garansi Uptime 99.9%</li>
\t\t\t\t\t\t<li class=\"text-content\">Data center yang mendukung kelangsungan website Anda 24/7.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_InnoDB.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">Database InnoDB Unlimited</li>
\t\t\t\t\t\t<li class=\"text-content\">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<ul class=\"include_packet\">
\t\t\t\t\t\t<li><img src=\"";
        // line 379
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/icon PHP Hosting_My SQL remote.svg\" width=\"20%\"/></li>
\t\t\t\t\t\t<li class=\"text-title\">Wildcard Remote MySQL</li>
\t\t\t\t\t\t<li class=\"text-content\">Mendukung s/d 25 max_user_connections dan 100 max_connections.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"hr-short\"></div>
<div class=\"d-flex align-items-center justify-content-center mt-5 mb-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 text-center mb-5\">
\t\t\t<span class=\"text-diskon\">Mendukung Penuh Framework Laravel</span>
\t\t</div>
\t\t<div class=\"col-lg-12 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"lara-support\">Tak perlu menggunakan dedicated server ataupun vps yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda.</div>
\t\t\t\t\t\t<div class=\"mt-3 mb-3 text-content list-section\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Install Laravel
\t\t\t\t\t\t\t\t\t<strong>1 Klik</strong>
\t\t\t\t\t\t\t\t\tdengan Softaculous Installer.
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>Mendukung ekstensi
\t\t\t\t\t\t\t\t\t<strong>PHP MCrypt, phar, mbstring, json,</strong>
\t\t\t\t\t\t\t\t\tdan
\t\t\t\t\t\t\t\t\t<strong>fileinfo</strong>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>Tersedia
\t\t\t\t\t\t\t\t\t<strong>Composer</strong>
\t\t\t\t\t\t\t\t\tdan
\t\t\t\t\t\t\t\t\t<strong>SSH</strong>
\t\t\t\t\t\t\t\t\tuntuk menginstall packages pilihan Anda.</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<small class=\"nb\">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary mt-5\">Pilih Sekarang</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 mt-3\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "svg/illustration banner support laravel hosting.svg\" width=\"90%\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"d-flex align-items-center justify-content-center mt-5 mb-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 text-center mb-5\">
\t\t\t<span class=\"text-diskon\">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</span>
\t\t</div>
\t\t<div class=\"col-lg-8 col-lg-12 mb-5 justify-content-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 col-lg-3 mt-3 mb-3\">
\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t<li>IcePHP</li>
\t\t\t\t\t\t<li>apc</li>
\t\t\t\t\t\t<li>apcu</li>
\t\t\t\t\t\t<li>apm</li>
\t\t\t\t\t\t<li>ares</li>
\t\t\t\t\t\t<li>bcmath</li>
\t\t\t\t\t\t<li>bcompiler</li>
\t\t\t\t\t\t<li>big_int</li>
\t\t\t\t\t\t<li>bitset</li>
\t\t\t\t\t\t<li>bloomy</li>
\t\t\t\t\t\t<li>bz2_filter</li>
\t\t\t\t\t\t<li>clamav</li>
\t\t\t\t\t\t<li>coin_acceptor</li>
\t\t\t\t\t\t<li>crack</li>
\t\t\t\t\t\t<li>dba</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-lg-3 mt-3 mb-3\">
\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t<li>http</li>
\t\t\t\t\t\t<li>huffman</li>
\t\t\t\t\t\t<li>idn</li>
\t\t\t\t\t\t<li>igbinary</li>
\t\t\t\t\t\t<li>imagick</li>
\t\t\t\t\t\t<li>imap</li>
\t\t\t\t\t\t<li>inclued</li>
\t\t\t\t\t\t<li>inotify</li>
\t\t\t\t\t\t<li>interbase</li>
\t\t\t\t\t\t<li>intl</li>
\t\t\t\t\t\t<li>ioncube_loader</li>
\t\t\t\t\t\t<li>ioncube_loader_4</li>
\t\t\t\t\t\t<li>jsmin</li>
\t\t\t\t\t\t<li>json</li>
\t\t\t\t\t\t<li>ldap</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-lg-3 mt-3 mb-3\">
\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t<li>nd_pdo_mysql</li>
\t\t\t\t\t\t<li>oauth</li>
\t\t\t\t\t\t<li>oci8</li>
\t\t\t\t\t\t<li>odbc</li>
\t\t\t\t\t\t<li>opcache</li>
\t\t\t\t\t\t<li>pdf</li>
\t\t\t\t\t\t<li>pdo</li>
\t\t\t\t\t\t<li>pdo_dblib</li>
\t\t\t\t\t\t<li>pdo_firebird</li>
\t\t\t\t\t\t<li>pdo_mysql</li>
\t\t\t\t\t\t<li>pdo_odbc</li>
\t\t\t\t\t\t<li>pdo_pgsql</li>
\t\t\t\t\t\t<li>pdo_sqlite</li>
\t\t\t\t\t\t<li>pgsql</li>
\t\t\t\t\t\t<li>phalcon</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-2 col-lg-3 mt-3 mb-3\">
\t\t\t\t\t<ul class=\"cardpricing-list\">
\t\t\t\t\t\t<li>stats</li>
\t\t\t\t\t\t<li>stem</li>
\t\t\t\t\t\t<li>stomp</li>
\t\t\t\t\t\t<li>suhosin</li>
\t\t\t\t\t\t<li>sybase_ct</li>
\t\t\t\t\t\t<li>sysvmsg</li>
\t\t\t\t\t\t<li>sysvsem</li>
\t\t\t\t\t\t<li>sysvshm</li>
\t\t\t\t\t\t<li>tidy</li>
\t\t\t\t\t\t<li>timezonedb</li>
\t\t\t\t\t\t<li>trader</li>
\t\t\t\t\t\t<li>translit</li>
\t\t\t\t\t\t<li>uploadprogress</li>
\t\t\t\t\t\t<li>uri_template</li>
\t\t\t\t\t\t<li>uuid</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t<button class=\"btn btn-outline-dark\">Selengkapnya</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"d-flex align-items-center justify-content-center mt-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"text-diskon mb-3\">Linux Hosting yang Stabil dengan Teknologi LVE</div>
\t\t\t\t\t\t<div class=\"text-content-x\">SuperMicro
\t\t\t\t\t\t\t<strong>Intel Xeoon 24-Cores</strong>
\t\t\t\t\t\t\tserver dengan RAM
\t\t\t\t\t\t\t<strong>128 GB</strong>
\t\t\t\t\t\t\tdan teknologi
\t\t\t\t\t\t\t<strong>LVE CloudLinux</strong>
\t\t\t\t\t\t\tuntuk stabilitas server Anda. Dilengkapi dengan
\t\t\t\t\t\t\t<strong>SSD</strong>
\t\t\t\t\t\t\tuntuk kecepatan
\t\t\t\t\t\t\t<strong>MySQL</strong>
\t\t\t\t\t\t\tdan caching. Apache load balancer berbasis LiteSpeed Technologies,
\t\t\t\t\t\t\t<strong>CageFS</strong>
\t\t\t\t\t\t\tsecurity,
\t\t\t\t\t\t\t<strong>Raid-10</strong>
\t\t\t\t\t\t\tprotection dan auto backup untuk keamanan website PHP Anda.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Pilih Hosting Anda</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 mt-5\">
\t\t\t\t\t\t<img class=\"gambar-4\" src=\"";
        // line 550
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "images/Image support.png\" width=\"90%\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-12 sosmed-like-background\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row py-2\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"payment text-content\">Bagikan jika Anda menyukai halaman ini.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6 d-flex justify-content-start\">
\t\t\t\t\t\t<ul class=\"payment-list\">
\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square\" style=\"height:32px; color:#23599B;\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter-square\" style=\"height:32px; color:#00AEF1;\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-google-plus-square\" style=\"height:32px; color:#FC4A35;\"></i>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"col-lg-12 bantuan-background py-5\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 d-flex align-items-end justify-content-start vl\">
\t\t\t\t\t\t<div class=\"bantuan-text\">Perlu
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\tBANTUAN?
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\tHubungi Kami:
\t\t\t\t\t\t\t<strong>0274-5305505</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t<div class=\"col-lg-5 d-flex align-items-end justify-content-start\">
\t\t\t\t\t\t<button class=\"btn btn-outline-light btn-lg\">
\t\t\t\t\t\t\t<i class=\"fas fa-message\"></i>
\t\t\t\t\t\t\tLive Chat
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<footer class=\"bd-footer py-5 footer-background\">
\t<div class=\"container\">
\t\t<div class=\"col-lg-12 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 mt-5\">
\t\t\t\t\t\t<div class=\"footer-title\">Hubungi Kami</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content\">0274-5305505</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Senin - Minggu</li>

\t\t\t\t\t\t\t<li class=\"footer-content mt-3\">24 Jam Nonstop</li>
\t\t\t\t\t\t\t<li class=\"footer-content\"></li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Jl.Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman Yogyakarta 5528</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 mt-5\">
\t\t\t\t\t\t<div class=\"footer-title \">Layanan</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content \">Domain</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Shared Hosting</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Cloud VPS Hosting</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Managed VPS Hosting</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Web Builder</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Keamanan SSL / HTTPS</li>
\t\t\t\t\t\t\t<li class=\"footer-content \">Jasa Pembuatan Website</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Program Afiliasi</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 mt-5\">
\t\t\t\t\t\t<div class=\"footer-title\">Service Hosting</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting Murah</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting Indonesia</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting Singapura SG</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting PHP</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting Wordpress</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Hosting Laravel</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 mt-5\">
\t\t\t\t\t\t<div class=\"footer-title\">Tutorial</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content\">Knowledgebase</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Blog</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Cara Pembayaran</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-12 mb-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-title\">Tentang Kami</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content\">Tim Niagahoster</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Karir</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Events</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Penawaran dan Promo Spesial</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Kontak Kami</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-title\">Kenapa Pilih Niagahoster?</div>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"footer-content\">Support Terbaik</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Garansi Harga Termurah</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Domain Gratis Selamanya</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Datacenter Hosting Terbaik</li>
\t\t\t\t\t\t\t<li class=\"footer-content\">Review Pelanggan</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<div class=\"footer-title\">Newsletter</div>
\t\t\t\t\t\t<div class=\"custom-subs\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"custom-subs-input\" placeholder=\"Email\">
\t\t\t\t\t\t\t<button class=\"custom-subs-button\" type=\"submit\">Berlangganan</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer-promo \">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 mt-4\">
\t\t\t\t\t\t<div class=\"bantuan-text d-flex align-items-center justify-content-start\">
\t\t\t\t\t\t\t<ul class=\"payment-list\">
\t\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"soc\" src=\"";
        // line 696
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "sosmed/fb.png\"/></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"soc\" src=\"";
        // line 699
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "sosmed/twitter.png\"/></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"payment\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"soc\" src=\"";
        // line 702
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "sosmed/google.png\"/></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-12\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"footer-title d-flex align-items-center justify-content-start\">Pembayaran</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<ul class=\"payment-list\">
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 719
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/bca.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 720
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/mandiri.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 721
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/bni.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 722
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/visa.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/mastercard.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 724
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/bersama.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 725
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/permata.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 726
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/prima.png\"/></li>
\t\t\t\t\t\t\t<li class=\"payment\"><img class=\"\" src=\"";
        // line 727
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "payment/alto.png\"/></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"footer-promo d-flex align-items-center justify-content-start\">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</div>
\t\t\t\t\t\t<hr style=\"border:2px\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column col-lg-8 col-md-12\">
\t\t\t\t\t\t<div class=\"as-footer__copyright\">
\t\t\t\t\t\t\tCopyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column col-lg-4 col-md-12 d-flex align-items-start justify-content-end\">
\t\t\t\t\t\t<ul class=\"as-footer__privacy\">
\t\t\t\t\t\t\t<li class=\"as-footer__privacy--list\">
\t\t\t\t\t\t\t\t<a href=\"https://www.niagahoster.co.id/syarat-dan-ketentuan\" class=\"as-footer__privacy--link pr-2\">Syarat dan Ketentuan</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"as-footer__privacy--list\">
\t\t\t\t\t\t\t\t<a href=\"https://www.niagahoster.co.id/kebijakan-privasi\" class=\"as-footer__privacy--link\">Kebijakan Privasi</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "landingPage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 727,  868 => 726,  864 => 725,  860 => 724,  856 => 723,  852 => 722,  848 => 721,  844 => 720,  840 => 719,  820 => 702,  814 => 699,  808 => 696,  659 => 550,  529 => 423,  482 => 379,  472 => 372,  462 => 365,  452 => 358,  442 => 351,  432 => 344,  314 => 229,  309 => 227,  251 => 172,  246 => 170,  192 => 119,  187 => 117,  137 => 70,  132 => 68,  105 => 44,  97 => 39,  89 => 34,  75 => 23,  58 => 9,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "landingPage.twig", "C:\\laragon\\www\\docker\\view\\landingPage.twig");
    }
}
