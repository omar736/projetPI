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

/* quizz_history/sessionHistory.html.twig */
class __TwigTemplate_ac30d86c37a05750dd5d72daafd3bf94e65aae7e8e9dc00b13a87ff3740ceb7e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz_history/sessionHistory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz_history/sessionHistory.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz_history/sessionHistory.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Quizz";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        if (((array_key_exists("scoreTotal", $context)) ? (_twig_default_filter((isset($context["scoreTotal"]) || array_key_exists("scoreTotal", $context) ? $context["scoreTotal"] : (function () { throw new RuntimeError('Variable "scoreTotal" does not exist.', 7, $this->source); })()))) : (""))) {
            // line 8
            echo "<section class=\"container\" style=\"margin-top: 15px;\">
    <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scoreTotal"]) || array_key_exists("scoreTotal", $context) ? $context["scoreTotal"] : (function () { throw new RuntimeError('Variable "scoreTotal" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quizzScore"]) {
                // line 11
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["quizzScore"], "numberOfQuestions", [], "any", false, false, false, 11) == twig_get_attribute($this->env, $this->source, $context["quizzScore"], "score", [], "any", false, false, false, 11))) {
                    // line 12
                    echo "
        <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 18rem;\">

        ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 15
$context["quizzScore"], "numberOfQuestions", [], "any", false, false, false, 15) - twig_get_attribute($this->env, $this->source, $context["quizzScore"], "score", [], "any", false, false, false, 15)) <= (twig_get_attribute($this->env, $this->source, $context["quizzScore"], "numberOfQuestions", [], "any", false, false, false, 15) / 2))) {
                    // line 16
                    echo "
        <div class=\"card text-white bg-success mb-3\" style=\"max-width: 18rem;\">

        ";
                } else {
                    // line 20
                    echo "
        <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 18rem;\">

        ";
                }
                // line 24
                echo "        
        <div class=\"card-header text-center\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "categorie", [], "any", false, false, false, 25), "html", null, true);
                echo "</div>
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "score", [], "any", false, false, false, 27), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "numberOfQuestions", [], "any", false, false, false, 27), "html", null, true);
                echo "</h5>
                <hr>
                <p class=\"card-text text-center\">Quizz passé le : ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "datePassed", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
            </div>
        </div> 


    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizzScore'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
    </div>
</section>
";
        } else {
            // line 39
            echo "    <h4 class=\"alert-heading text-center\" style=\"margin-top: 30px;\">Vous n'avez pas passé de quizz</h4>
";
        }
        // line 41
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizz_history/sessionHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  156 => 39,  150 => 35,  138 => 29,  131 => 27,  126 => 25,  123 => 24,  117 => 20,  111 => 16,  109 => 15,  104 => 12,  101 => 11,  97 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quizz{% endblock %}

{% block body %}

{% if scoreTotal|default %}
<section class=\"container\" style=\"margin-top: 15px;\">
    <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
    {% for quizzScore in scoreTotal %}
        {% if quizzScore.numberOfQuestions == quizzScore.score %}

        <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 18rem;\">

        {% elseif (quizzScore.numberOfQuestions - quizzScore.score) <= (quizzScore.numberOfQuestions / 2) %}

        <div class=\"card text-white bg-success mb-3\" style=\"max-width: 18rem;\">

        {% else %}

        <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 18rem;\">

        {% endif %}
        
        <div class=\"card-header text-center\">{{ quizzScore.categorie }}</div>
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">{{ quizzScore.score }} / {{ quizzScore.numberOfQuestions }}</h5>
                <hr>
                <p class=\"card-text text-center\">Quizz passé le : {{ quizzScore.datePassed }}</p>
            </div>
        </div> 


    {% endfor %}

    </div>
</section>
{% else %}
    <h4 class=\"alert-heading text-center\" style=\"margin-top: 30px;\">Vous n'avez pas passé de quizz</h4>
{% endif %}

{% endblock %}


", "quizz_history/sessionHistory.html.twig", "C:\\Users\\oumai\\OneDrive\\Bureau\\quizz\\templates\\quizz_history\\sessionHistory.html.twig");
    }
}
