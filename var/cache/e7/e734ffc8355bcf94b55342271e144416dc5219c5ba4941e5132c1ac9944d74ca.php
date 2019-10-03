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
class __TwigTemplate_56cd7e64d0af6eb252290376c2ec0d7ec71d6797eae76092f7495368443f87ab extends \Twig\Template
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
        echo "    ";
        // line 6
        echo "    <div class=\"jumbotron\" style=\"margin-top: 50px;\">
        <h1>Mon Profil</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                ";
        // line 12
        echo "                    <li class=\"list-group-item\">";
        echo twig_escape_filter($this->env, ($context["nom"] ?? null), "html", null, true);
        echo "</li>
                ";
        // line 14
        echo "                    <li class=\"list-group-item\">";
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</li>
                ";
        // line 16
        echo "                    <li class=\"list-group-item\">";
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
        return array (  78 => 16,  73 => 14,  68 => 12,  61 => 6,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Contact {% endblock %}

{% block body %}
    {# Création du container pour afficher les identifiants et le rôle #}
    <div class=\"jumbotron\" style=\"margin-top: 50px;\">
        <h1>Mon Profil</h1> 
        <div class=\"row\">
            <div class=\"col-10\">
                <ul class=\"list-group\">
                {# Je recupere le nom #}
                    <li class=\"list-group-item\">{{ nom }}</li>
                {# Je recupere le Prénom #}
                    <li class=\"list-group-item\">{{ prenom }}</li>
                {# Je recupere le Rôle #}
                    <li class=\"list-group-item\">{{ role }}</li>
                </ul>
            </div>
        </div>
    </div>

{% endblock %}", "Compte/compte.html.twig", "C:\\wamp64\\www\\CESI-BLOG-A\\templates\\Compte\\compte.html.twig");
    }
}
