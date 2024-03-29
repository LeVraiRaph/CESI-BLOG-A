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

/* RedacteurPost/list.html.twig */
class __TwigTemplate_53db254d96717a77ff873f5ae60f50c56b88ae31eaa4c4c9fe24a720be2ec43e extends \Twig\Template
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
        return "base.redacteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.redacteur.html.twig", "RedacteurPost/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Contact ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1>Bienvenue Monsieur ";
        // line 7
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                    <li>liste à venir</li>
                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "RedacteurPost/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.redacteur.html.twig\" %}
{% block title %}{{ parent() }} - Contact {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1>Bienvenue Monsieur {{ nom }}</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                    <li>liste à venir</li>
                </ul>
            </div>
        </div>
    </div>

{% endblock %}", "RedacteurPost/list.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\RedacteurPost\\list.html.twig");
    }
}
