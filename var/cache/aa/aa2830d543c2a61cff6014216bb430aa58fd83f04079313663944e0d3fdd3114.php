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

/* AdminFile/read.html.twig */
class __TwigTemplate_af513490daf2e17273bbcae557a0e6ae32b6394b8ec7fceba48efe45d8400f94 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminFile/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Lecture de fichier ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Lire un fichier</h1>
        <form method=\"post\">
            <input type=\"hidden\" name=\"champMini\">
            <button type=\"submit\" class=\"btn btn-primary\">Lire</button>
        </form>
    </div>

    ";
        // line 14
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => ($context["arrayDataFile"] ?? null)]), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "AdminFile/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Lecture de fichier {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Lire un fichier</h1>
        <form method=\"post\">
            <input type=\"hidden\" name=\"champMini\">
            <button type=\"submit\" class=\"btn btn-primary\">Lire</button>
        </form>
    </div>

    {{ dump(arrayDataFile) }}

{% endblock %}", "AdminFile/read.html.twig", "C:\\wamp64\\www\\CESI-BLOG-A\\templates\\AdminFile\\read.html.twig");
    }
}
