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

/* navbar.html.twig */
class __TwigTemplate_78631a97057987512680fc91922b39b8b4bf66f569b10fe54368ff7c6b15c114 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">Home</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "    
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "email", [], "any", false, false, false, 12), "html", null, true);
            echo "
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">Historique des quizz</a>
            </div>
          </li>
          
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Admin
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/admin/user/\">Utilisateurs</a>
              <a class=\"dropdown-item\" href=\"/admin/categorie/\">Catégories</a>
              <a class=\"dropdown-item\" href=\"/admin/question/\">Questions</a>
              <a class=\"dropdown-item\" href=\"/admin/reponse/\">Réponses</a>
              <a class=\"dropdown-item\" href=\"/admin/quizz/history\">Historique des quizz</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), "html", null, true);
            echo "
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">Historique des quizz</a>
            </div>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        ";
        } else {
            // line 59
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/register\">Inscription</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/login\">Connexion</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Quizz
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"/quizz\">Quizz</a>
            <a class=\"dropdown-item\" href=\"/quizz/session/history\">Historique</a>
          </div>
        </li>
        ";
        }
        // line 76
        echo "      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  127 => 59,  118 => 53,  110 => 48,  102 => 43,  98 => 41,  96 => 40,  88 => 35,  67 => 17,  59 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">Home</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        {% if is_granted('ROLE_ADMIN') %}    
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              {{ app.user.email }}
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/{{ app.user.id }}\">Historique des quizz</a>
            </div>
          </li>
          
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Admin
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/admin/user/\">Utilisateurs</a>
              <a class=\"dropdown-item\" href=\"/admin/categorie/\">Catégories</a>
              <a class=\"dropdown-item\" href=\"/admin/question/\">Questions</a>
              <a class=\"dropdown-item\" href=\"/admin/reponse/\">Réponses</a>
              <a class=\"dropdown-item\" href=\"/admin/quizz/history\">Historique des quizz</a>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        {% elseif app.user %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              {{ app.user.email }}
            </a>

            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <a class=\"dropdown-item\" href=\"/profile\">Modifier profil</a>
              <a class=\"dropdown-item\" href=\"/quizz/history/{{ app.user.id }}\">Historique des quizz</a>
            </div>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/quizz\">Quizz</a>
          </li>
        {% else %}
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/register\">Inscription</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/login\">Connexion</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Quizz
          </a>

          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <a class=\"dropdown-item\" href=\"/quizz\">Quizz</a>
            <a class=\"dropdown-item\" href=\"/quizz/session/history\">Historique</a>
          </div>
        </li>
        {% endif %}
      </ul>
    </div>
  </div>
</nav>", "navbar.html.twig", "C:\\Users\\aea\\Desktop\\Quizz_PHP_SYMFONY-master\\templates\\navbar.html.twig");
    }
}
