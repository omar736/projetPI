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

/* quizz/index.html.twig */
class __TwigTemplate_5c6b95e0b3997db5b78ae2a9ad6070457dfdb9a80d93e4a7c364920f7b0b9c19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz/index.html.twig", 1);
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
        echo "    <section class=\"container\" style=\"margin-top: 15px;\">
        ";
        // line 7
        if (((array_key_exists("score", $context)) ? (_twig_default_filter((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 7, $this->source); })()))) : (""))) {
            // line 8
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <h4 class=\"alert-heading text-center\">Vous avez passé le quizz ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentCategorie"]) || array_key_exists("currentCategorie", $context) ? $context["currentCategorie"] : (function () { throw new RuntimeError('Variable "currentCategorie" does not exist.', 9, $this->source); })()), 0, [], "array", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</h4>
                <p class=\"text-center\">Votre score est de : ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 13
        echo "        ";
        if (((array_key_exists("scoreTotal", $context)) ? (_twig_default_filter((isset($context["scoreTotal"]) || array_key_exists("scoreTotal", $context) ? $context["scoreTotal"] : (function () { throw new RuntimeError('Variable "scoreTotal" does not exist.', 13, $this->source); })()))) : (""))) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scoreTotal"]) || array_key_exists("scoreTotal", $context) ? $context["scoreTotal"] : (function () { throw new RuntimeError('Variable "scoreTotal" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["quizzScore"]) {
                // line 15
                echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <h4 class=\"alert-heading text-center\">Vous avez passé le quizz ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "categorie", [], "array", false, false, false, 16), "html", null, true);
                echo "</h4>
                    <p class=\"text-center\">Votre score est de : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quizzScore"], "score", [], "array", false, false, false, 17), "html", null, true);
                echo "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizzScore'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " 
            <h4 style=\"text-align: center;\">
                <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz_new_categorie");
            echo "\" class=\"btn btn-primary\">Créer une nouvelle catégorie</a>
                <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz_new_question");
            echo "\" class=\"btn btn-primary\">Créer une nouvelle question</a>
                <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz_new_response");
            echo "\" class=\"btn btn-primary\">Créer une nouvelle réponse</a>
            </h4>
        ";
        }
        // line 29
        echo "        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 31
            echo "            <div class=\"card rounded\" style=\"width: 18rem; margin-bottom: 15px;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</h5>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quizz_get", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Jouer</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 38,  170 => 34,  166 => 33,  162 => 31,  158 => 30,  155 => 29,  149 => 26,  145 => 25,  141 => 24,  136 => 22,  133 => 21,  130 => 20,  121 => 17,  117 => 16,  114 => 15,  109 => 14,  106 => 13,  100 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Quizz{% endblock %}

{% block body %}
    <section class=\"container\" style=\"margin-top: 15px;\">
        {% if score|default %}
            <div class=\"alert alert-success\" role=\"alert\">
                <h4 class=\"alert-heading text-center\">Vous avez passé le quizz {{ currentCategorie[0].name }}</h4>
                <p class=\"text-center\">Votre score est de : {{ score }}</p>
            </div>
        {% endif %}
        {% if scoreTotal|default %}
            {% for quizzScore in scoreTotal %}
                <div class=\"alert alert-success\" role=\"alert\">
                    <h4 class=\"alert-heading text-center\">Vous avez passé le quizz {{ quizzScore['categorie'] }}</h4>
                    <p class=\"text-center\">Votre score est de : {{ quizzScore['score'] }}</p>
                </div>
            {% endfor %}
        {% endif %}

        {% if is_granted('ROLE_USER') %} 
            <h4 style=\"text-align: center;\">
                <a href=\"{{ path('quizz_new_categorie') }}\" class=\"btn btn-primary\">Créer une nouvelle catégorie</a>
                <a href=\"{{ path('quizz_new_question') }}\" class=\"btn btn-primary\">Créer une nouvelle question</a>
                <a href=\"{{ path('quizz_new_response') }}\" class=\"btn btn-primary\">Créer une nouvelle réponse</a>
            </h4>
        {% endif %}
        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
        {% for categorie in categories %}
            <div class=\"card rounded\" style=\"width: 18rem; margin-bottom: 15px;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ categorie.name }}</h5>
                        <a href=\"{{ path('quizz_get', {'id': categorie.id}) }}\" class=\"btn btn-success\">Jouer</a>
                </div>
            </div>
        {% endfor %}
        </div>
{% endblock %}", "quizz/index.html.twig", "C:\\Users\\oumai\\OneDrive\\Bureau\\quizz\\templates\\quizz\\index.html.twig");
    }
}
