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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "bouh !";
    }

    public function getTemplateName()
    {
        return "RedacteurPost/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("bouh !", "RedacteurPost/list.html.twig", "C:\\wamp64\\www\\cesiblog\\CESI-BLOG-A\\templates\\RedacteurPost\\list.html.twig");
    }
}
