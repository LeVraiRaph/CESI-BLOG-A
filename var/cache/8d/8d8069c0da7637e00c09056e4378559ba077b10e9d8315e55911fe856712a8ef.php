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

/* AdminUser/list.html.twig */
class __TwigTemplate_baca895596da7db382cea808ab930bae9295633111300ac9fd03014f9ac350ce extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminUser/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste des articles ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des utilisateurs</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Rôle</th>
            <th scope=\"col\">Validation</th>
        </tr>
        </thead> 
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataUsers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "            <tr>
                <th scope=\"row\"><a href=\"/AdminUser/View/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</a></th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Prenom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Role", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "ValidationAdmin", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"/AdminUser/View/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">Voir</a>
                    <a class=\"btn btn-warning\" href=\"/AdminUser/Edit/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminUser/Delete/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">Supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </tbody>
    </table>
    

";
    }

    public function getTemplateName()
    {
        return "AdminUser/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  120 => 36,  116 => 35,  112 => 34,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  89 => 28,  86 => 27,  82 => 26,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Liste des articles {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des utilisateurs</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Rôle</th>
            <th scope=\"col\">Validation</th>
        </tr>
        </thead> 
        <tbody>
        {% for user in dataUsers %}
            <tr>
                <th scope=\"row\"><a href=\"/AdminUser/View/{{ user.id }}\">{{ user.id }}</a></th>
                <td>{{ user.Nom }}</td>
                <td>{{ user.Prenom }}</td>
                <td>{{ user.Role }}</td>
                <td>{{ user.ValidationAdmin }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"/AdminUser/View/{{ user.id }}\">Voir</a>
                    <a class=\"btn btn-warning\" href=\"/AdminUser/Edit/{{ user.id }}\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminUser/Delete/{{ user.id }}\">Supprimer</a>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>
    

{% endblock %}", "AdminUser/list.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\AdminUser\\list.html.twig");
    }
}
