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

/* trick/loadMoreTricks.html.twig */
class __TwigTemplate_b38eccf7ab5a1fdd37d972f75fff5e74ac0abccc01d254e4772164811be6774d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/loadMoreTricks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/loadMoreTricks.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 1, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 1, $this->source); })()), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 2
            echo "
    <div class=\"trickMiniBox flex-column border border-dark m-3 p-0\">
        <div class=\"w-100\">
            ";
            // line 5
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trick"], "illustrations", [], "any", false, false, false, 5))) {
                // line 6
                echo "                <img class=\"trickMiniBoxPicture w-100\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trick"], "illustrations", [], "any", false, false, false, 6), 0, [], "array", false, false, false, 6), "fileName", [], "any", false, false, false, 6), "html", null, true);
                echo "\">
                ";
            } else {
                // line 8
                echo "                <img class=\"trickMiniBoxPicture w-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/trickNoImage.jpg"), "html", null, true);
                echo "\">
            ";
            }
            // line 10
            echo "        </div>
        <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row\">
            <div class=\"text-center w-100 m-3\">
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"><span class=\"align-middle h-100 d-inline-block\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</span></a>
            </div>
            <div class=\"m-3\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
            echo "\"></a>
            </div>
            <div class=\"m-3\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteTrick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" onclick=\"return confirm(`Voulez-vous réellement supprimer le trick : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 19), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "trick/loadMoreTricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  79 => 16,  71 => 13,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for trick in tricks | slice(start, 4 ) %}

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
{% endfor %}", "trick/loadMoreTricks.html.twig", "/app/myapp/templates/trick/loadMoreTricks.html.twig");
    }
}
