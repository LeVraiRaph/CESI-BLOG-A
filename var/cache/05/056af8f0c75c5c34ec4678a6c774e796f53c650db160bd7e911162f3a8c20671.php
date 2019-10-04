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

/* Login/register.html.twig */
class __TwigTemplate_18e5e7179fc359eb9998c5b3f3bf9dc2934ffd5898c175057040f9d373bc4bab extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Login/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Login ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">S'inscrire</h5>


                <form class=\"form-signin\" name=\"authentification\" method=\"POST\">
                    <div class=\"form-label-group\">
                        <input type=\"email\" name=\"mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo "\">
                        <label for=\"inputLogin\">Votre Identifiant</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo "\">
                        <label for=\"inputPassword\">Votre mot de passe</label>
                    </div>

                     <div class=\"form-label-group\">
                        <input type=\"text\" name=\"nom\" id=\"inputNom\" class=\"form-control\" placeholder=\"Nom\">
                        <label for=\"inputPassword\">Votre nom</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"text\" name=\"prenom\" id=\"inputPrenom\" class=\"form-control\" placeholder=\"Prenom\">
                        <label for=\"inputPassword\">Votre prénom</label>
                    </div>

                    <div class=\"custom-control custom-checkbox mb-3\">
                        ";
        // line 34
        $context["checked"] = "";
        // line 35
        echo "                        ";
        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null) != "")) {
            echo " ";
            $context["checked"] = "checked";
        }
        // line 36
        echo "                        <input type=\"checkbox\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo " class=\"custom-control-input\" name =\"remember\" id=\"customCheck1\">
                        <label class=\"custom-control-label\" for=\"customCheck1\">Remember password</label>
                    </div>
                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Valider l'inscription</button>
                </form>
            </div>
        </div>
    </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Login/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  98 => 35,  96 => 34,  78 => 19,  70 => 14,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Login {% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">S'inscrire</h5>


                <form class=\"form-signin\" name=\"authentification\" method=\"POST\">
                    <div class=\"form-label-group\">
                        <input type=\"email\" name=\"mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus value=\"{{ arrayRememberMe[0] }}\">
                        <label for=\"inputLogin\">Votre Identifiant</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required value=\"{{ arrayRememberMe[1] }}\">
                        <label for=\"inputPassword\">Votre mot de passe</label>
                    </div>

                     <div class=\"form-label-group\">
                        <input type=\"text\" name=\"nom\" id=\"inputNom\" class=\"form-control\" placeholder=\"Nom\">
                        <label for=\"inputPassword\">Votre nom</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"text\" name=\"prenom\" id=\"inputPrenom\" class=\"form-control\" placeholder=\"Prenom\">
                        <label for=\"inputPassword\">Votre prénom</label>
                    </div>

                    <div class=\"custom-control custom-checkbox mb-3\">
                        {% set checked = \"\" %}
                        {% if arrayRememberMe[0] != '' %} {% set checked = \"checked\" %}{% endif %}
                        <input type=\"checkbox\" {{ checked }} class=\"custom-control-input\" name =\"remember\" id=\"customCheck1\">
                        <label class=\"custom-control-label\" for=\"customCheck1\">Remember password</label>
                    </div>
                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Valider l'inscription</button>
                </form>
            </div>
        </div>
    </div>
    </div>


{% endblock %}", "Login/register.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\Login\\register.html.twig");
    }
}
