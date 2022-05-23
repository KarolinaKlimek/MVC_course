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

/* Book/create.html.twig */
class __TwigTemplate_8a32de76211e3800f616b6adc710d0ef extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "Book/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Add book</h1>
    <form action=\"\" method=\"post\">
        <label>
            <span>Book title:</span>
            <input type=\"text\" name=\"name\" placeholder=\"Book title\">
        </label><br>
        <label>
            <span>Book description</span>
            <textarea name=\"description\" placeholder=\"Book description\"></textarea>
        </label><br>
        <label>
            <input type=\"submit\" value=\"Submit\">
        </label>
    </form>
";
    }

    public function getTemplateName()
    {
        return "Book/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Book/create.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\Book\\create.html.twig");
    }
}
