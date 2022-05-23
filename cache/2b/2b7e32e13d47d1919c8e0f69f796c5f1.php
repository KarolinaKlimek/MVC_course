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

/* Book/update.html.twig */
class __TwigTemplate_37379bf92de1cd6899cc95e0a8419662 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "Book/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Update book</h1>
    <form action=\"\" method=\"post\">
        <label>
            <span>Book title:</span>
            <input type=\"text\" name=\"name\" placeholder=\"Book title\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        </label><br>
        <label>
            <span>Book description</span>
            <textarea name=\"description\" placeholder=\"Book description\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</textarea>
        </label><br>
        <label>
            <input type=\"submit\" value=\"Submit\">
        </label>
    </form>
";
    }

    public function getTemplateName()
    {
        return "Book/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Book/update.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\Book\\update.html.twig");
    }
}
