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

/* quizz/show.html.twig */
class __TwigTemplate_1843e4236fee10eb288585ce5d2ed60a0cd39bffdd384314b591cc499c4ef7ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizz/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizz/show.html.twig", 1);
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

        echo "Question index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $context["currentQuestion"] = 1;
        // line 6
        $context["currentAnswer"] = 1;
        // line 7
        echo "    <form class=\"container\" method=\"POST\" style=\"margin-top: 15px;\">
    <h1 style=\"text-align: center;\">Questionnaire</h1>
        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 11
            echo "            <div class=\"card\" style=\"width: 18rem; margin-bottom: 15px;\">
                <div class=\"card-header\" style=\"background-color: dodgerblue;\">
                    <strong>
                        ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 14), "html", null, true);
            echo "
                    </strong>
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "reponses", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 19
                echo "                        <li class=\"list-group-item\">
                            <input type=\"radio\" name=\"question";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["currentQuestion"]) || array_key_exists("currentQuestion", $context) ? $context["currentQuestion"] : (function () { throw new RuntimeError('Variable "currentQuestion" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\" id=\"reponse";
                echo twig_escape_filter($this->env, (isset($context["currentAnswer"]) || array_key_exists("currentAnswer", $context) ? $context["currentAnswer"] : (function () { throw new RuntimeError('Variable "currentAnswer" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo "\" required>
                            <label for=\"reponse";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["currentAnswer"]) || array_key_exists("currentAnswer", $context) ? $context["currentAnswer"] : (function () { throw new RuntimeError('Variable "currentAnswer" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo " </label>
                        </li>
                        ";
                // line 23
                $context["currentAnswer"] = ((isset($context["currentAnswer"]) || array_key_exists("currentAnswer", $context) ? $context["currentAnswer"] : (function () { throw new RuntimeError('Variable "currentAnswer" does not exist.', 23, $this->source); })()) + 1);
                // line 24
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    ";
            $context["currentQuestion"] = ((isset($context["currentQuestion"]) || array_key_exists("currentQuestion", $context) ? $context["currentQuestion"] : (function () { throw new RuntimeError('Variable "currentQuestion" does not exist.', 25, $this->source); })()) + 1);
            // line 26
            echo "                </ul>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <div>
                <td colspan=\"4\">no records found</td>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
        <div class=\"col-md-12 text-center\" style=\"margin-top: 30px; margin-bottom: 30px;\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Envoyer\" />
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "quizz/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 33,  154 => 29,  147 => 26,  144 => 25,  138 => 24,  136 => 23,  129 => 21,  121 => 20,  118 => 19,  114 => 18,  107 => 14,  102 => 11,  97 => 10,  92 => 7,  90 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Question index{% endblock %}
{% block body %}
{% set currentQuestion = 1 %}
{% set currentAnswer = 1 %}
    <form class=\"container\" method=\"POST\" style=\"margin-top: 15px;\">
    <h1 style=\"text-align: center;\">Questionnaire</h1>
        <div class=\"row justify-content-around\" style=\"margin-top: 25px;\">
        {% for question in questions %}
            <div class=\"card\" style=\"width: 18rem; margin-bottom: 15px;\">
                <div class=\"card-header\" style=\"background-color: dodgerblue;\">
                    <strong>
                        {{ question.question }}
                    </strong>
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for answer in question.reponses %}
                        <li class=\"list-group-item\">
                            <input type=\"radio\" name=\"question{{ currentQuestion }}\" id=\"reponse{{ currentAnswer }}\" value=\"{{ answer }}\" required>
                            <label for=\"reponse{{ currentAnswer }}\"> {{ answer }} </label>
                        </li>
                        {% set currentAnswer = currentAnswer + 1 %}
                    {% endfor %}
                    {% set currentQuestion = currentQuestion + 1 %}
                </ul>
            </div>
        {% else %}
            <div>
                <td colspan=\"4\">no records found</td>
            </div>
        {% endfor %}
        </div>
        <div class=\"col-md-12 text-center\" style=\"margin-top: 30px; margin-bottom: 30px;\">
            <input type=\"submit\" class=\"btn btn-success\" value=\"Envoyer\" />
        </div>
    </form>
{% endblock %}", "quizz/show.html.twig", "C:\\Users\\aea\\Desktop\\Quizz_PHP_SYMFONY-master\\templates\\quizz\\show.html.twig");
    }
}
