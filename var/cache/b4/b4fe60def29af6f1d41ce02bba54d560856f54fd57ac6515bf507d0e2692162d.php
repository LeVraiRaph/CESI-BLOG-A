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

/* AdminCategory/list.html.twig */
class __TwigTemplate_edf768f313f7f733d8ed1c877184048deac78342f62bd7b88855094d64b83ddc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminCategory/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Catégories des articles ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Catégories</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
            <div class=\"col-2\"><a class=\"btn btn-primary\" href=\"/Adminpost/Add\">Ajouter</a></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
        <th scope=\"col\">Nom</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => ($context["listCategorie"] ?? null)]), "html", null, true);
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCategorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cateogie"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cateogie"], "Nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-warning\" href=\"/AdminCategory/Edit/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cateogie"], "Nom", [], "any", false, false, false, 28), "html", null, true);
            echo "\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminCategory/Delete/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cateogie"], "Nom", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "AdminCategory/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  99 => 29,  95 => 28,  90 => 26,  87 => 25,  83 => 24,  79 => 23,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Catégories des articles {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Catégories</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
            <div class=\"col-2\"><a class=\"btn btn-primary\" href=\"/Adminpost/Add\">Ajouter</a></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
        <th scope=\"col\">Nom</th>
        </tr>
        </thead>
        <tbody>
        {{dump(listCategorie)}}
        {% for cateogie in listCategorie %}
            <tr>
                <td>{{ cateogie.Nom }}</td>
                <td>
                    <a class=\"btn btn-warning\" href=\"/AdminCategory/Edit/{{ cateogie.Nom }}\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminCategory/Delete/{{ cateogie.Nom }}\">Supprimer</a>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>

{% endblock %}", "AdminCategory/list.html.twig", "C:\\wamp64\\www\\CESI-BLOG-A\\templates\\AdminCategory\\list.html.twig");
    }
}
