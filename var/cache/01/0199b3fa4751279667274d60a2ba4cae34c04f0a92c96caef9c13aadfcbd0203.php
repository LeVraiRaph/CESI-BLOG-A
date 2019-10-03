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

/* Compte/compte.html.twig */
class __TwigTemplate_2a1db0cdb33a2da36a4c729f11864621bb28343390a455a7cf156d72603dd58e extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "Compte/compte.html.twig", 1);
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
        <h1>Mon Profil</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["role"] ?? null), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Compte/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  71 => 12,  67 => 11,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Contact {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1>Mon Profil</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">{{ nom }}</li>
                    <li class=\"list-group-item\">{{ prenom }}</li>
                    <li class=\"list-group-item\">{{ role }}</li>
                </ul>
            </div>
        </div>
    </div>

{% endblock %}", "Compte/compte.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\Compte\\compte.html.twig");
    }
}
