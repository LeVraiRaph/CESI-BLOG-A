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

/* base.html.twig */
class __TwigTemplate_db4122e77280760ce0943eff1684d24b1f26b264a7e986acd12457791ac9ecab extends \Twig\Template
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
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Contact\">Contact</a>
            </li>
            <?php if (\$isConnected == true) { ?>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Compte/compte\">Mon Compte</a>
            </li>
            <?php } ?>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\" method=\"post\" action=\"/Post/List\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" aria-label=\"Search\" name=\"search\">
        </form>
    </div>
</nav>

<div class=\"container\">

    ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "
</div>

<script src=\"https://code.jquery.com/jquery-3.4.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#postDescription' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
";
        // line 60
        $this->displayBlock('javascript', $context, $blocks);
        // line 61
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CESI BLOG";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 60
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  131 => 43,  125 => 12,  118 => 5,  113 => 61,  111 => 60,  93 => 44,  91 => 43,  59 => 13,  57 => 12,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}CESI BLOG{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/pepper-grinder/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\">
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <script src=\"https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js\"></script>
    {% block css %}{% endblock %}

<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Contact\">Contact</a>
            </li>
            <?php if (\$isConnected == true) { ?>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/Compte/compte\">Mon Compte</a>
            </li>
            <?php } ?>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\" method=\"post\" action=\"/Post/List\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Rechercher un article\" aria-label=\"Search\" name=\"search\">
        </form>
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
<script>
    ClassicEditor
        .create( document.querySelector( '#postDescription' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
{% block javascript %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\CESI-BLOG-A\\templates\\base.html.twig");
    }
}
