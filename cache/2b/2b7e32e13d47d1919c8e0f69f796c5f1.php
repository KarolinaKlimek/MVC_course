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
            'head' => [$this, 'block_head'],
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
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"https://www.google.com/recaptcha/api.js?render=";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["auth.recaptcha_site_key"]), "html", null, true);
        echo "\"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('config')->getCallable(), ["auth.recaptcha_site_key"]), "html", null, true);
        echo "', {action: 'books'}).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <h1>Update book</h1>
    <form action=\"\" method=\"post\">
        <label>
            <span>Book title:</span>
            <input type=\"text\" name=\"name\" placeholder=\"Book title\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "\"><br>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 22
            echo "                <span style=\"color: #ff7300\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </label><br>
        <label>
            <span>Book description</span>
            <textarea name=\"description\" placeholder=\"Book description\"> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</textarea><br>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 29
            echo "                <span style=\"color: #ff0000\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </label><br>
        <label>
            <input type=\"hidden\" name=\"recaptcha\" id=\"recaptchaResponse\"><br>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "recaptcha", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 35
            echo "                <span style=\"color: #ff7300\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </label>
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
        return array (  136 => 37,  127 => 35,  123 => 34,  118 => 31,  109 => 29,  105 => 28,  101 => 27,  96 => 24,  87 => 22,  83 => 21,  79 => 20,  73 => 16,  69 => 15,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Book/update.html.twig", "D:\\xampp\\htdocs\\MVC\\resources\\View\\Book\\update.html.twig");
    }
}
