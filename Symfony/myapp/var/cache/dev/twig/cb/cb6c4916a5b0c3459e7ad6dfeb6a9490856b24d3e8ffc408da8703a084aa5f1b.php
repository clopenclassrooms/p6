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

/* trick/loadMoreComments.html.twig */
class __TwigTemplate_983fdc04af29ec899a829af21c3d91b10c43400d0ae1414fe6e33624a54eb030 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/loadMoreComments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/loadMoreComments.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 2, $this->source); })()), "comments", [], "any", false, false, false, 2)), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 2, $this->source); })()), 10));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 3
            echo "        <div class=\"d-flex justify-content-center flex-row\">
            <div class=\"commentContainer d-flex flex-row\">
                <div class=\" m-1 p-1 d-flex flex-column\">
                    <div>
                        ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 7), "photo", [], "any", false, false, false, 7)) {
                // line 8
                echo "                        <img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 8), "photo", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 10
                echo "                        <img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/userAvatar.jpg"), "html", null, true);
                echo "\">
                        ";
            }
            // line 12
            echo "                    </div>
                    <div class=\"text-center\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
                </div>
                <div class=\"border border-black m-1 p-1 w-100\">
                    <h5>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 16), "html", null, true);
            echo "</h5>
                </div>
            </div>
        </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "trick/loadMoreComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  73 => 13,  70 => 12,  64 => 10,  58 => 8,  56 => 7,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for comment in trick.comments | reverse | slice(start, 10) %}
        <div class=\"d-flex justify-content-center flex-row\">
            <div class=\"commentContainer d-flex flex-row\">
                <div class=\" m-1 p-1 d-flex flex-column\">
                    <div>
                        {% if comment.user.photo %}
                        <img class=\"avatar\" src=\"{{ comment.user.photo }}\">
                        {% else %}
                        <img class=\"avatar\" src=\"{{ asset('/img/userAvatar.jpg') }}\">
                        {% endif %}
                    </div>
                    <div class=\"text-center\">{{ comment.user.name }}</div>
                </div>
                <div class=\"border border-black m-1 p-1 w-100\">
                    <h5>{{ comment.comment }}</h5>
                </div>
            </div>
        </div>
{% endfor %}", "trick/loadMoreComments.html.twig", "/app/myapp/templates/trick/loadMoreComments.html.twig");
    }
}
