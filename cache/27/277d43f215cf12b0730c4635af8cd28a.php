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

/* layout.html.twig */
class __TwigTemplate_78d9d7ab68ef21f706d6254d19e1bf65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 8
        echo "    <title>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body>
<div class=\"container\">
";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</div>
</body>
";
    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  77 => 16,  72 => 11,  68 => 10,  62 => 19,  60 => 16,  55 => 13,  53 => 10,  47 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\layout.html.twig");
    }
}
