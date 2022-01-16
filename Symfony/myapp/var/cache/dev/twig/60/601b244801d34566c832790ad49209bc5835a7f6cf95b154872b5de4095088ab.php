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

/* trick/addTrick.html.twig */
class __TwigTemplate_65ad43ffb384cf1f7682d53eb2faa9428309fb7c87891789fb288b0d6e113256 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "form_themes/edit_trick_layout.html.twig"], true);
        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "trick/addTrick.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 5
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/add-collection-widget.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<section id=\"imageHeader\">
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column justify-content-center\">
            <div id=\"trickTitleModificationContainer\" class=\"text-center d-flex flex-row justify-content-center\">
                <div class=\"d-flex flex-column justify-content-center mr-3\">
                    <span>Nom du trick</span>
                </div>
                <div>
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors');
        echo "
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/arrowPointingDown.png"), "html", null, true);
        echo "\" onClick=\"window.location.href='#illustrationAndVideoContainer';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/homePageHeader.jpg"), "html", null, true);
        echo "\"></img>
        </div>
    </div>
</section>
<section >
    <div id=\"buttonDisplayImgAndVideo\" class=\"justify-content-center m-3\">
        <button type=\"button\" class=\"btn btn-primary\" onClick=\"
                    var mobileMenuDeployement = document.getElementById('illustrationAndVideoContainer');
                    if (mobileMenuDeployement.classList.contains('displayFlex'))
                    {
                        mobileMenuDeployement.classList.remove('displayFlex');
                    }else
                    {
                        mobileMenuDeployement.classList.add('displayFlex');
                    }
                    \">Afficher les images et vidéos</button>
    </div>
    <div id=\"illustrationAndVideoContainer\" class=\"listIllustrationAndVideo mt-5\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "illustrations", [], "any", false, false, false, 46), 'row');
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "videos", [], "any", false, false, false, 47), 'row');
        echo "
    </div>
    <div class=\"d-flex flex-row justify-content-center\">
        <div class=\"w-75 d-flex flex-column \">
            <div class=\"m-3 d-flex flex-column\">
                <div>
                    Description du trick : 
                </div>
                <div>
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'row');
        echo "
                </div>
            </div>
            <div class=\"d-flex flex-row justify-content-between\">
                <div class=\"m-3\">
                    <div>
                        Groupe de trick : 
                    </div>
                    <div>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "trickgroup", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), 'widget', ["attr" => ["list" => "trick_trickgroup_name", "autocomplete" => "off"], "id" => ""]);
        // line 71
        echo "

                        <datalist id=\"trick_trickgroup_name\" name=\"trick[trickgroup][name]\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trickGroups"]) || array_key_exists("trickGroups", $context) ? $context["trickGroups"] : (function () { throw new RuntimeError('Variable "trickGroups" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trickGroup"]) {
            // line 75
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trickGroup"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trickGroup"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                        </datalist>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center\">
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "submit", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "m-3 btn-primary btn"]]);
        echo "
    </div>
    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/addTrick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 86,  210 => 84,  201 => 77,  190 => 75,  186 => 74,  181 => 71,  179 => 65,  167 => 56,  155 => 47,  151 => 46,  130 => 28,  124 => 25,  116 => 20,  112 => 19,  101 => 11,  98 => 10,  88 => 9,  76 => 6,  72 => 5,  62 => 4,  51 => 2,  49 => 1,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'form_themes/edit_trick_layout.html.twig' %}
{% extends 'base.html.twig' %}

{% block scripts %}
{{ parent() }}
<script src=\"{{ asset('js/add-collection-widget.js') }}\"></script>
{% endblock %}

{% block body %}
<section id=\"imageHeader\">
{{ form_start(form) }}
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column justify-content-center\">
            <div id=\"trickTitleModificationContainer\" class=\"text-center d-flex flex-row justify-content-center\">
                <div class=\"d-flex flex-column justify-content-center mr-3\">
                    <span>Nom du trick</span>
                </div>
                <div>
                    {{ form_errors(form.name) }}
                    {{ form_row(form.name) }}
                </div>
            </div>
        </div>
        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"{{ asset('/img/arrowPointingDown.png') }}\" onClick=\"window.location.href='#illustrationAndVideoContainer';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"{{ asset('/img/homePageHeader.jpg') }}\"></img>
        </div>
    </div>
</section>
<section >
    <div id=\"buttonDisplayImgAndVideo\" class=\"justify-content-center m-3\">
        <button type=\"button\" class=\"btn btn-primary\" onClick=\"
                    var mobileMenuDeployement = document.getElementById('illustrationAndVideoContainer');
                    if (mobileMenuDeployement.classList.contains('displayFlex'))
                    {
                        mobileMenuDeployement.classList.remove('displayFlex');
                    }else
                    {
                        mobileMenuDeployement.classList.add('displayFlex');
                    }
                    \">Afficher les images et vidéos</button>
    </div>
    <div id=\"illustrationAndVideoContainer\" class=\"listIllustrationAndVideo mt-5\">
        {{ form_row(form.illustrations) }}
        {{ form_row(form.videos) }}
    </div>
    <div class=\"d-flex flex-row justify-content-center\">
        <div class=\"w-75 d-flex flex-column \">
            <div class=\"m-3 d-flex flex-column\">
                <div>
                    Description du trick : 
                </div>
                <div>
                    {{ form_row(form.description) }}
                </div>
            </div>
            <div class=\"d-flex flex-row justify-content-between\">
                <div class=\"m-3\">
                    <div>
                        Groupe de trick : 
                    </div>
                    <div>
                        {{ form_widget(form.trickgroup.name,  {
                            'attr': {
                                'list': 'trick_trickgroup_name', 
                                'autocomplete':'off', 
                                }, 
                            'id':''
                            }) }}

                        <datalist id=\"trick_trickgroup_name\" name=\"trick[trickgroup][name]\">
                        {% for trickGroup in trickGroups %}
                            <option value=\"{{trickGroup.name}}\">{{trickGroup.name}}</option>
                        {% endfor %}
                        </datalist>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"text-center\">
        {{ form_widget(form.submit, {'attr':{'class':'m-3 btn-primary btn'}}) }}
    </div>
    {{ form_end(form) }}
</section>
{% endblock %}", "trick/addTrick.html.twig", "/app/myapp/templates/trick/addTrick.html.twig");
    }
}
