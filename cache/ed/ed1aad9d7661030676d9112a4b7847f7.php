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
    <form method=\"post\">
        <label>
            <span>Book title:</span>
            <input type=\"text\" name=\"name\" placeholder=\"Book title\"><br>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 10
            echo "                <span style=\"color: #ff7300\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </label><br>
        <label>
            <span>Book description</span>
            <textarea name=\"description\" placeholder=\"Book description\"></textarea><br>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 17
            echo "                <span style=\"color: #ff0000\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </label><br>
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
        return array (  89 => 19,  80 => 17,  76 => 16,  70 => 12,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Book/create.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\Book\\create.html.twig");
    }
}
