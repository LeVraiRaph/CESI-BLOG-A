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

/* Login/form.html.twig */
class __TwigTemplate_4e9dae7102a67d270b8b14dcc11741dfad4bb7ba1a894a581f60543e2dfbb0cd extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Login/form.html.twig", 1);
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
                    <h5 class=\"card-title text-center\">Login</h5>
                    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", true, true, false, 10)) {
            // line 11
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "errorlogin", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
                    ";
        }
        // line 13
        echo "
                <form class=\"form-signin\" name=\"authentification\" action=\"/Login/Check\" method=\"POST\">
                    <div class=\"form-label-group\">
                        <input type=\"email\" name=\"Mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo "\">
                        <label for=\"inputLogin\">Votre Identifiant</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" name=\"Password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo "\">
                        <label for=\"inputPassword\">Password</label>
                    </div>

                    <div class=\"custom-control custom-checkbox mb-3\">
                        ";
        // line 26
        $context["checked"] = "";
        // line 27
        echo "                        ";
        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null) != "")) {
            echo " ";
            $context["checked"] = "checked";
        }
        // line 28
        echo "                        <input type=\"checkbox\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
        echo " class=\"custom-control-input\" name =\"remember\" id=\"customCheck1\">
                        <label class=\"custom-control-label\" for=\"customCheck1\">Remember password</label>
                    </div>
                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Se connecter</button>
                    <a class=\"btn btn-lg btn-primary btn-block text-uppercase\" href=\"/Login/Register\">S'inscrire</a>
                </form>
            </div>
        </div>
    </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Login/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 27,  95 => 26,  87 => 21,  79 => 16,  74 => 13,  68 => 11,  66 => 10,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
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
                    <h5 class=\"card-title text-center\">Login</h5>
                    {% if session.errorlogin is defined %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ session.errorlogin }}</div>
                    {% endif %}

                <form class=\"form-signin\" name=\"authentification\" action=\"/Login/Check\" method=\"POST\">
                    <div class=\"form-label-group\">
                        <input type=\"email\" name=\"Mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus value=\"{{ arrayRememberMe[0] }}\">
                        <label for=\"inputLogin\">Votre Identifiant</label>
                    </div>

                    <div class=\"form-label-group\">
                        <input type=\"password\" name=\"Password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required value=\"{{ arrayRememberMe[1] }}\">
                        <label for=\"inputPassword\">Password</label>
                    </div>

                    <div class=\"custom-control custom-checkbox mb-3\">
                        {% set checked = \"\" %}
                        {% if arrayRememberMe[0] != '' %} {% set checked = \"checked\" %}{% endif %}
                        <input type=\"checkbox\" {{ checked }} class=\"custom-control-input\" name =\"remember\" id=\"customCheck1\">
                        <label class=\"custom-control-label\" for=\"customCheck1\">Remember password</label>
                    </div>
                    <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\">Se connecter</button>
                    <a class=\"btn btn-lg btn-primary btn-block text-uppercase\" href=\"/Login/Register\">S'inscrire</a>
                </form>
            </div>
        </div>
    </div>
    </div>


{% endblock %}", "Login/form.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\Login\\form.html.twig");
    }
}
