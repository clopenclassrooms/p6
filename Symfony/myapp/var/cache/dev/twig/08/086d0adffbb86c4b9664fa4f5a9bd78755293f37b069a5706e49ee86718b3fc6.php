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

/* trick/displayAllTricks.html.twig */
class __TwigTemplate_0548495385b6c8ae5208df3c2166ca1d55f1afc946e1ee4beef47a097f232397 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/displayAllTricks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/displayAllTricks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/displayAllTricks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"imageHeader\">
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column\">
            <div class=\"text-center\">
                <h1>Snowtricks</h1>
            </div>
            <div class=\"text-center\">
                <h2>Le SNOW comme on l'aime!!</h2>
            </div>
        </div>
        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/arrowPointingDown.png"), "html", null, true);
        echo "\" onClick=\"window.location.href='#displayAllTricks';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/homePageHeader.jpg"), "html", null, true);
        echo "\"></img>
        </div>
    </div>
</section>
<section id=\"displayAllTricks\">
    <div class=\"d-flex flex-column mt-5\">
        <div class=\"text-center\">
            <h1>Display all tricks</h1>
        </div>
        <div id=\"Tricks\" class=\"d-flex flex-row flex-wrap m-3\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 28, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 29
            echo "            <div class=\"trickMiniBox flex-column border border-dark m-3 p-0\">
                <div class=\"w-100\">
                    ";
            // line 31
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trick"], "illustrations", [], "any", false, false, false, 31))) {
                // line 32
                echo "                        <img class=\"trickMiniBoxPicture w-100\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trick"], "illustrations", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32), "fileName", [], "any", false, false, false, 32), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 34
                echo "                        <img class=\"trickMiniBoxPicture w-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/trickNoImage.jpg"), "html", null, true);
                echo "\">
                    ";
            }
            // line 36
            echo "                </div>
                <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row\">
                    <div class=\"text-center w-100 m-3\">
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><span class=\"align-middle h-100 d-inline-block\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</span></a>
                    </div>
                    <div class=\"m-3\">
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
            echo "\"></a>
                    </div>
                    <div class=\"m-3\">
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" onclick=\"return confirm(`Voulez-vous réellement supprimer le trick : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 45), "html", null, true);
            echo " ?`)\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
            echo "\"></a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
        <div class=\"row text-center\">
            <button id=\"loadMoreTricks\" class=\"btn btn-primary col-md-6 col-8 mx-auto\">Voir plus de tricks</button>
        </div>
        <div class=\"d-flex justify-content-end\">
            <img id=\"arrowPointingUp\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/arrowPointingUp.png"), "html", null, true);
        echo "\" onClick=\"window.location.href='#displayAllTricks';\">
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script>
        click = 0;
        function loadMoreTricks(event) {
            event.preventDefault();
            click++;
            var start = 4 * click;
            console.log(start);
            if (start + 4 > 15){
                document.getElementById(\"arrowPointingUp\").style.display = \"block\";
                console.log(\"plus de 15\");
            }
            const url = \"/trick/loadMoreTricks/\" + start;
            axios.get(url).then(function(response) {
                \$(\"#Tricks\").append(response.data);
            });
        }
        document.getElementById(\"loadMoreTricks\").addEventListener(\"click\", loadMoreTricks);
    </script>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/displayAllTricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  158 => 50,  143 => 45,  135 => 42,  127 => 39,  122 => 36,  116 => 34,  110 => 32,  108 => 31,  104 => 29,  100 => 28,  87 => 18,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<section id=\"imageHeader\">
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column\">
            <div class=\"text-center\">
                <h1>Snowtricks</h1>
            </div>
            <div class=\"text-center\">
                <h2>Le SNOW comme on l'aime!!</h2>
            </div>
        </div>
        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"{{ asset('/img/arrowPointingDown.png') }}\" onClick=\"window.location.href='#displayAllTricks';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"{{ asset('/img/homePageHeader.jpg') }}\"></img>
        </div>
    </div>
</section>
<section id=\"displayAllTricks\">
    <div class=\"d-flex flex-column mt-5\">
        <div class=\"text-center\">
            <h1>Display all tricks</h1>
        </div>
        <div id=\"Tricks\" class=\"d-flex flex-row flex-wrap m-3\">
        {% for trick in tricks | slice(0,4) %}
            <div class=\"trickMiniBox flex-column border border-dark m-3 p-0\">
                <div class=\"w-100\">
                    {% if trick.illustrations is not empty %}
                        <img class=\"trickMiniBoxPicture w-100\" src=\"{{ trick.illustrations[0].fileName}}\">
                        {% else %}
                        <img class=\"trickMiniBoxPicture w-100\" src=\"{{ asset('/img/trickNoImage.jpg') }}\">
                    {% endif %}
                </div>
                <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row\">
                    <div class=\"text-center w-100 m-3\">
                        <a href=\"{{ path('displayTrick',{ 'slug': trick.slug })}}\"><span class=\"align-middle h-100 d-inline-block\" >{{ trick.name }}</span></a>
                    </div>
                    <div class=\"m-3\">
                        <a href=\"{{ path('modifyTrick',{ 'slug': trick.slug }) }}\"><img src=\"{{ asset('/img/modify.jpg') }}\"></a>
                    </div>
                    <div class=\"m-3\">
                        <a href=\"{{ path('deleteTrick',{ 'slug': trick.slug }) }}\" onclick=\"return confirm(`Voulez-vous réellement supprimer le trick : {{trick.name}} ?`)\"><img src=\"{{ asset('/img/delete.jpg') }}\"></a>
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>
        <div class=\"row text-center\">
            <button id=\"loadMoreTricks\" class=\"btn btn-primary col-md-6 col-8 mx-auto\">Voir plus de tricks</button>
        </div>
        <div class=\"d-flex justify-content-end\">
            <img id=\"arrowPointingUp\" src=\"{{ asset('/img/arrowPointingUp.png') }}\" onClick=\"window.location.href='#displayAllTricks';\">
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script>
        click = 0;
        function loadMoreTricks(event) {
            event.preventDefault();
            click++;
            var start = 4 * click;
            console.log(start);
            if (start + 4 > 15){
                document.getElementById(\"arrowPointingUp\").style.display = \"block\";
                console.log(\"plus de 15\");
            }
            const url = \"/trick/loadMoreTricks/\" + start;
            axios.get(url).then(function(response) {
                \$(\"#Tricks\").append(response.data);
            });
        }
        document.getElementById(\"loadMoreTricks\").addEventListener(\"click\", loadMoreTricks);
    </script>
</section>
{% endblock %}
", "trick/displayAllTricks.html.twig", "/app/myapp/templates/trick/displayAllTricks.html.twig");
    }
}
