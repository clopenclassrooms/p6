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

/* base.html.twig */
class __TwigTemplate_89ee98c13ca7507c4c8095f73ff97d08fa5caa836d8021526b54061e1146cdc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'scripts' => [$this, 'block_scripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 12
        echo "    </head>

    <body>
        <header>
        <div class=\"d-none d-lg-flex flex-row justify-content-between col-12 menuContainer \">
            <div class=\"\">
                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Snowtricks</a></div>
            </div>
            <div class=\"d-flex flex-row\">
                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayAllTricks");
        echo "\">Liste des Tricks</a></div>
                ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    <div class=\"m-3\"><a class=\"headerLink\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTrick");
            echo "\">Rajouter un trick</a></div>
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"d-flex flex-row\">

                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyProfile");
            echo "\">Mon compte</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Se déconnecter</a></div>
                ";
        } else {
            // line 33
            echo "                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Créer un compte</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">S'identifier</a></div>
                ";
        }
        // line 36
        echo "            </div>
        </div>
    </header>
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        <section id=\"menuMobile\">
            <div class=\"ButtomMobileSpace d-flex d-lg-none\">

            </div>
            <div id=\"mobileMenuDeployement\" class=\" d-lg-none w-100 bg-light border border-black flex-column\">
                <div class=\"border border-black p-3 text-center\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayAllTricks");
        echo "\">Liste des Tricks</a></div>
                ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "                    <div class=\"border border-black p-3 text-center\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTrick");
            echo "\">Rajouter un trick</a></div>
                ";
        }
        // line 51
        echo "                <div class=\"border border-black p-3 text-center\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Créer un compte</a></div>
            </div>
            <div class=\"mobileMenu d-flex d-lg-none w-100 bg-light border border-black justify-content-around\">
                <div class=\"align-middle\">
                    <img class=\"mobileMenuImg\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/homepage.jpg"), "html", null, true);
        echo "\" onClick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "';\">
                </div>
                <div class=\"align-middle\">
                    <img class=\"mobileMenuImg\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/menu.jpg"), "html", null, true);
        echo "\" onClick=\"
                    var mobileMenuDeployement = document.getElementById('mobileMenuDeployement');
                    if (mobileMenuDeployement.classList.contains('displayFlex'))
                    {
                        mobileMenuDeployement.classList.remove('displayFlex');
                    }else
                    {
                        mobileMenuDeployement.classList.add('displayFlex');
                    }
                    \">
                </div>
                <div class=\"align-middle\">
                    ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "                        <img class=\"mobileMenuImg\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/logout.jpg"), "html", null, true);
            echo "\" onClick=\"window.location.href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "';\">
                    ";
        } else {
            // line 73
            echo "                        <img class=\"mobileMenuImg\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/login.jpg"), "html", null, true);
            echo "\" onClick=\"window.location.href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "';\">
                    ";
        }
        // line 75
        echo "                </div>
            <div>
        </section>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">    
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 9
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 40,  249 => 39,  237 => 9,  227 => 8,  213 => 5,  203 => 4,  188 => 75,  180 => 73,  172 => 71,  170 => 70,  155 => 58,  147 => 55,  139 => 51,  133 => 49,  131 => 48,  127 => 47,  120 => 42,  118 => 39,  113 => 36,  108 => 34,  103 => 33,  98 => 31,  93 => 30,  91 => 29,  86 => 26,  80 => 24,  78 => 23,  74 => 22,  70 => 21,  64 => 18,  56 => 12,  53 => 8,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block stylesheets %}
        <link href=\"{{ asset('/css/style.css') }}\" rel=\"stylesheet\"> 
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">    
        {% endblock %}
        {% block scripts %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>

    <body>
        <header>
        <div class=\"d-none d-lg-flex flex-row justify-content-between col-12 menuContainer \">
            <div class=\"\">
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('homepage')}}\">Snowtricks</a></div>
            </div>
            <div class=\"d-flex flex-row\">
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('homepage')}}\">Accueil</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('displayAllTricks')}}\">Liste des Tricks</a></div>
                {% if app.user %}
                    <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('addTrick')}}\">Rajouter un trick</a></div>
                {% endif %}
            </div>
            <div class=\"d-flex flex-row\">

                {% if app.user %}
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('modifyProfile')}}\">Mon compte</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('security_logout')}}\">Se déconnecter</a></div>
                {% else %}
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('app_register')}}\">Créer un compte</a></div>
                <div class=\"m-3\"><a class=\"headerLink\" href=\"{{ path('security_login')}}\">S'identifier</a></div>
                {% endif %}
            </div>
        </div>
    </header>
        {% block body %}
        
        {% endblock %}
        <section id=\"menuMobile\">
            <div class=\"ButtomMobileSpace d-flex d-lg-none\">

            </div>
            <div id=\"mobileMenuDeployement\" class=\" d-lg-none w-100 bg-light border border-black flex-column\">
                <div class=\"border border-black p-3 text-center\"><a href=\"{{ path('displayAllTricks')}}\">Liste des Tricks</a></div>
                {% if app.user %}
                    <div class=\"border border-black p-3 text-center\"><a href=\"{{ path('addTrick')}}\">Rajouter un trick</a></div>
                {% endif %}
                <div class=\"border border-black p-3 text-center\"><a href=\"{{ path('app_register')}}\">Créer un compte</a></div>
            </div>
            <div class=\"mobileMenu d-flex d-lg-none w-100 bg-light border border-black justify-content-around\">
                <div class=\"align-middle\">
                    <img class=\"mobileMenuImg\" src=\"{{ asset('/img/homepage.jpg') }}\" onClick=\"window.location.href='{{ path('homepage')}}';\">
                </div>
                <div class=\"align-middle\">
                    <img class=\"mobileMenuImg\" src=\"{{ asset('/img/menu.jpg') }}\" onClick=\"
                    var mobileMenuDeployement = document.getElementById('mobileMenuDeployement');
                    if (mobileMenuDeployement.classList.contains('displayFlex'))
                    {
                        mobileMenuDeployement.classList.remove('displayFlex');
                    }else
                    {
                        mobileMenuDeployement.classList.add('displayFlex');
                    }
                    \">
                </div>
                <div class=\"align-middle\">
                    {% if app.user %}
                        <img class=\"mobileMenuImg\" src=\"{{ asset('/img/logout.jpg') }}\" onClick=\"window.location.href='{{ path('security_logout')}}';\">
                    {% else %}
                        <img class=\"mobileMenuImg\" src=\"{{ asset('/img/login.jpg') }}\" onClick=\"window.location.href='{{ path('security_login')}}';\">
                    {% endif %}
                </div>
            <div>
        </section>
    </body>
</html>
", "base.html.twig", "/app/myapp/templates/base.html.twig");
    }
}
