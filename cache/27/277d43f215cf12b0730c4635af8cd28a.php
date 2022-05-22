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
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["app.lang"]), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/main.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <title>";
        // line 8
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
        echo "    <footer>
        Copyright kurs ";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('year')->getCallable(), []), "html", null, true);
        echo " - all rights reserved.
    </footer>

</div>
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
        return array (  94 => 17,  90 => 16,  85 => 11,  81 => 10,  71 => 20,  68 => 19,  66 => 16,  61 => 13,  59 => 10,  54 => 8,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\layout.html.twig");
    }
}
