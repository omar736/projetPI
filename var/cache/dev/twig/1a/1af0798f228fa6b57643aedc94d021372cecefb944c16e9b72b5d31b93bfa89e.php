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

/* quizz_history/show.html.twig */
class __TwigTemplate_b877432ca1c45da844b2a0de7d96bc293d72cbe60f4a122e8e06555fd1d25871 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz_history/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz_history/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz_history/show.html.twig", 1);
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

        echo "User index";
        
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
    <br>
    <h2 class=\"text-center\">Historique des quizz passés</h1>
    <br>

    <section class=\"container\" style=\"margin-top: 15px;\">
        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzHistory"]) || array_key_exists("quizzHistory", $context) ? $context["quizzHistory"] : (function () { throw new RuntimeError('Variable "quizzHistory" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quizz"]) {
            // line 15
            echo "
                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, $context["quizz"], "numberOfQuestions", [], "any", false, false, false, 16) == twig_get_attribute($this->env, $this->source, $context["quizz"], "score", [], "any", false, false, false, 16))) {
                // line 17
                echo "
                <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 18rem;\">

                ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 20
$context["quizz"], "numberOfQuestions", [], "any", false, false, false, 20) - twig_get_attribute($this->env, $this->source, $context["quizz"], "score", [], "any", false, false, false, 20)) <= (twig_get_attribute($this->env, $this->source, $context["quizz"], "numberOfQuestions", [], "any", false, false, false, 20) / 2))) {
                // line 21
                echo "
                <div class=\"card text-white bg-success mb-3\" style=\"max-width: 18rem;\">

                ";
            } else {
                // line 25
                echo "
                <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 18rem;\">

                ";
            }
            // line 29
            echo "                
                <div class=\"card-header text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizz"], "categorie", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizz"], "score", [], "any", false, false, false, 32), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizz"], "numberOfQuestions", [], "any", false, false, false, 32), "html", null, true);
            echo "</h5>
                    <hr>
                    <p class=\"card-text text-center\">Quizz passé le : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizz"], "datePassed", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                </div>
                </div> 
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizz_history/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 39,  141 => 34,  134 => 32,  129 => 30,  126 => 29,  120 => 25,  114 => 21,  112 => 20,  107 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}

    <br>
    <h2 class=\"text-center\">Historique des quizz passés</h1>
    <br>

    <section class=\"container\" style=\"margin-top: 15px;\">
        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">

            {% for quizz in quizzHistory %}

                {% if quizz.numberOfQuestions == quizz.score %}

                <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 18rem;\">

                {% elseif (quizz.numberOfQuestions - quizz.score) <= (quizz.numberOfQuestions / 2) %}

                <div class=\"card text-white bg-success mb-3\" style=\"max-width: 18rem;\">

                {% else %}

                <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 18rem;\">

                {% endif %}
                
                <div class=\"card-header text-center\">{{ quizz.categorie }}</div>
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">{{ quizz.score }} / {{ quizz.numberOfQuestions }}</h5>
                    <hr>
                    <p class=\"card-text text-center\">Quizz passé le : {{ quizz.datePassed }}</p>
                </div>
                </div> 
            
            {% endfor %}
        
        </div>
    </section>

{% endblock %}", "quizz_history/show.html.twig", "C:\\Users\\aea\\Desktop\\Quizz_PHP_SYMFONY-master\\templates\\quizz_history\\show.html.twig");
    }
}
