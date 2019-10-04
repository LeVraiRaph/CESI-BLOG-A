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

/* AdminPost/edit.html.twig */
class __TwigTemplate_acf383b73a55198c995c89c1c0fd2e64816b74e81f23340f68bd9fbd78d8a7de extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminPost/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edition article ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Titre", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Modifier l'Article</h1>
        <form name=\"postAdd\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"postTitre\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitre\" name=\"postTitre\" placeholder=\"titre de l'article\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Titre", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
            </div>

            <div class=\"form-group\">
                <label for=\"postDescription\">Description</label>
                <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"3\" placeholder=\"Description de l'article\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Description", [], "any", false, false, false, 16), "html", null, true);
        echo "</textarea>
            </div>

            <script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>


            <div class=\"form-group\">
                <label for=\"postAuteur\">Auteur</label>
                <select class=\"form-control\" id=\"postAuteur\" name=\"postAuteur\">
                    <option value=\"Brice\" ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 25) == "Brice")) {
            echo "selected=\"selected\"";
        }
        echo ">Brice</option>
                    <option value=\"Bruno\" ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 26) == "Bruno")) {
            echo "selected=\"selected\"";
        }
        echo ">Bruno</option>
                    <option value=\"Fabien\" ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 27) == "Fabien")) {
            echo "selected=\"selected\"";
        }
        echo ">Fabien</option>
                    <option value=\"Marion\" ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 28) == "Marion")) {
            echo "selected=\"selected\"";
        }
        echo ">Marion</option>
                    <option value=\"Marion\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 29) == "Emmanuel")) {
            echo "selected=\"selected\"";
        }
        echo ">Emmanuel</option>
                    <option value=\"Marion\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 30) == "Sylvie")) {
            echo "selected=\"selected\"";
        }
        echo ">Sylvie</option>
                    <option value=\"Marion\" ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 31) == "Benoit")) {
            echo "selected=\"selected\"";
        }
        echo ">Benoit</option>
                    <option value=\"Marion\" ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 32) == "Jean-Pierre")) {
            echo "selected=\"selected\"";
        }
        echo ">Jean-Pierre</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"postDate\">Date de l'article</label>
                <input type=\"date\" class=\"form-control\" id=\"postDate\" name=\"postDate\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "DateAjout", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true);
        echo "\" >
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label for=\"postImage\">fichier Image</label>
                        <input type=\"file\" class=\"form-control\" id=\"postImage\" name=\"postImage\" >
                    </div>
                </div>
                <div class=\"col-6\">
                    ";
        // line 47
        if ((call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageRepository", [], "any", false, false, false, 47)) . "/") . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 47))]) && (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 47) != ""))) {
            // line 48
            echo "                        <img src=\"/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageRepository", [], "any", false, false, false, 48), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"img-thumbnail\"/>
                    ";
        }
        // line 50
        echo "                </div>
            </div>
            <input type=\"hidden\" name=\"postImageFull\" id=\"postImageFull\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageRepository", [], "any", false, false, false, 52), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 52), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"postId\" id=\"postID\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "token", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

    
";
    }

    public function getTemplateName()
    {
        return "AdminPost/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  173 => 53,  167 => 52,  163 => 50,  155 => 48,  153 => 47,  140 => 37,  130 => 32,  124 => 31,  118 => 30,  112 => 29,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  76 => 16,  68 => 11,  60 => 5,  56 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Edition article {{ post.Titre }}{% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Modifier l'Article</h1>
        <form name=\"postAdd\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"postTitre\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitre\" name=\"postTitre\" placeholder=\"titre de l'article\" value=\"{{ post.Titre }}\">
            </div>

            <div class=\"form-group\">
                <label for=\"postDescription\">Description</label>
                <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"3\" placeholder=\"Description de l'article\">{{ post.Description }}</textarea>
            </div>

            <script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>


            <div class=\"form-group\">
                <label for=\"postAuteur\">Auteur</label>
                <select class=\"form-control\" id=\"postAuteur\" name=\"postAuteur\">
                    <option value=\"Brice\" {% if post.Auteur == 'Brice' %}selected=\"selected\"{% endif %}>Brice</option>
                    <option value=\"Bruno\" {% if post.Auteur == 'Bruno' %}selected=\"selected\"{% endif %}>Bruno</option>
                    <option value=\"Fabien\" {% if post.Auteur == 'Fabien' %}selected=\"selected\"{% endif %}>Fabien</option>
                    <option value=\"Marion\" {% if post.Auteur == 'Marion' %}selected=\"selected\"{% endif %}>Marion</option>
                    <option value=\"Marion\" {% if post.Auteur == 'Emmanuel' %}selected=\"selected\"{% endif %}>Emmanuel</option>
                    <option value=\"Marion\" {% if post.Auteur == 'Sylvie' %}selected=\"selected\"{% endif %}>Sylvie</option>
                    <option value=\"Marion\" {% if post.Auteur == 'Benoit' %}selected=\"selected\"{% endif %}>Benoit</option>
                    <option value=\"Marion\" {% if post.Auteur == 'Jean-Pierre' %}selected=\"selected\"{% endif %}>Jean-Pierre</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"postDate\">Date de l'article</label>
                <input type=\"date\" class=\"form-control\" id=\"postDate\" name=\"postDate\" value=\"{{ post.DateAjout|date('Y-m-d') }}\" >
            </div>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"form-group\">
                        <label for=\"postImage\">fichier Image</label>
                        <input type=\"file\" class=\"form-control\" id=\"postImage\" name=\"postImage\" >
                    </div>
                </div>
                <div class=\"col-6\">
                    {% if file_exist( './uploads/images/'~post.getImageRepository~'/'~post.getImageFileName ) and post.getImageFileName !=\"\" %}
                        <img src=\"/uploads/images/{{ post.getImageRepository }}/{{ post.getImageFileName }}\" class=\"img-thumbnail\"/>
                    {% endif %}
                </div>
            </div>
            <input type=\"hidden\" name=\"postImageFull\" id=\"postImageFull\" value=\"{{ post.getImageRepository}}/{{ post.getImageFileName}}\">
            <input type=\"hidden\" name=\"postId\" id=\"postID\" value=\"{{ post.id }}\">
            <input type=\"hidden\" name=\"token\" value=\"{{ session.token }}\">
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

    
{% endblock %}", "AdminPost/edit.html.twig", "C:\\wamp64\\www\\CESI-BLOG-A\\templates\\AdminPost\\edit.html.twig");
    }
}
