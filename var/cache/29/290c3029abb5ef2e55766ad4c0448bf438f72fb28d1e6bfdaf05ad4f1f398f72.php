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

/* base.admin.html.twig */
class __TwigTemplate_bad0262bd112fb33b96f10613178be77db0c801f7e5d9fac03926786930492e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"/AdminPost/Index\">Espace Admin</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Gestion des articles
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/AdminPost/List\">Liste</a>
                    <a class=\"dropdown-item\" href=\"/AdminPost/Add\">Ajout</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Interface Fichier
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/AdminFile/Read\">Lire</a>
                    <a class=\"dropdown-item\" href=\"/AdminFile/Write\">Ecrire</a>
                </div>
            </li>
            <a class=\"nav-item nav-link \" href=\"/AdminFixtures/Load\">Fixtures</a>
            <a class=\"nav-item nav-link \" href=\"/Login/Logout\">Déconnexion</a>
        </div>
    </div>
</nav>

<div class=\"container\">

    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
</div>

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#postDescription' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
";
        // line 64
        $this->displayBlock('javascript', $context, $blocks);
        // line 65
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ADMIN";
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 64
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 64,  135 => 46,  129 => 10,  122 => 5,  117 => 65,  115 => 64,  96 => 47,  94 => 46,  57 => 11,  55 => 10,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}ADMIN{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    {% block css %}{% endblock %}

<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"/AdminPost/Index\">Espace Admin</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
        <div class=\"navbar-nav\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Gestion des articles
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/AdminPost/List\">Liste</a>
                    <a class=\"dropdown-item\" href=\"/AdminPost/Add\">Ajout</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Interface Fichier
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item\" href=\"/AdminFile/Read\">Lire</a>
                    <a class=\"dropdown-item\" href=\"/AdminFile/Write\">Ecrire</a>
                </div>
            </li>
            <a class=\"nav-item nav-link \" href=\"/AdminFixtures/Load\">Fixtures</a>
            <a class=\"nav-item nav-link \" href=\"/Login/Logout\">Déconnexion</a>
        </div>
    </div>
</nav>

<div class=\"container\">

    {% block body %}{% endblock %}

</div>

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#postDescription' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
{% block javascript %}{% endblock %}
</body>
</html>", "base.admin.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\base.admin.html.twig");
    }
}
