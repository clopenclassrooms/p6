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

/* trick/addTrick.html.old.twig */
class __TwigTemplate_32d3de2174696a7facd9252056195ad7045aaf0ff4a1429db471104dac484317 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.old.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.old.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "trick/addTrick.html.old.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 4
        $this->displayParentBlock("scripts", $context, $blocks);
        echo "
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/add-collection-widget.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>Rajouter un trick</h1>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), 'row');
        echo "
";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'row');
        echo "

<div id=\"trick_trickgroup\">
    <div class=\"form-group\">
        <label>Groupes :
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "trickgroup", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["list" => "trick_trickgroup_name", "autocomplete" => "off"], "id" => ""]);
        // line 23
        echo "
        </label>

        <datalist id=\"trick_trickgroup_name\" name=\"trick[trickgroup][name]\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trickGroups"]) || array_key_exists("trickGroups", $context) ? $context["trickGroups"] : (function () { throw new RuntimeError('Variable "trickGroups" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trickGroup"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trickGroup"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trickGroup"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </datalist>
        
    </div>
</div>


<div id=\"trick_videos\">
    <div class=\"form-group\"> 
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "videos", [], "any", false, false, false, 38), 'label');
        echo "
        <ul id=\"video-fields-list\"
            data-prototype=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "videos", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "prototype", [], "any", false, false, false, 40), 'widget'));
        echo "\"
            data-widget-tags=\"";
        // line 41
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\"
            data-widget-counter=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "videos", [], "any", false, false, false, 42)), "html", null, true);
        echo "\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "videos", [], "any", false, false, false, 43), 'widget');
        echo "  
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "videos", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["videoField"]) {
            // line 45
            echo "            <li>
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["videoField"], 'errors');
            echo "
                ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["videoField"], 'widget');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </ul>
        <button type=\"button\"
        class=\"add-another-collection-widget\"
        data-list-selector=\"#video-fields-list\">Ajouter une vidéo</button>
    </div>
</div>


<div id=\"trick_illustrations\">
    <div class=\"form-group\"> 
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "illustrations", [], "any", false, false, false, 60), 'label');
        echo "
        <ul id=\"illustration-fields-list\"
        data-prototype=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "illustrations", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "prototype", [], "any", false, false, false, 62), 'widget'));
        echo "\"
        data-widget-tags=\"";
        // line 63
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\"
        data-widget-counter=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "illustrations", [], "any", false, false, false, 64)), "html", null, true);
        echo "\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "illustrations", [], "any", false, false, false, 65), 'widget');
        echo "
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "illustrations", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["illustrationField"]) {
            // line 67
            echo "        <li>
            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["illustrationField"], 'errors');
            echo "
            ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["illustrationField"], 'widget');
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['illustrationField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </ul>
        <button type=\"button\"
        class=\"add-another-collection-widget\"
        data-list-selector=\"#illustration-fields-list\">Ajouter une illustration</button>
    </div>
</div>

";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/addTrick.html.old.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 79,  245 => 72,  236 => 69,  232 => 68,  229 => 67,  225 => 66,  221 => 65,  217 => 64,  213 => 63,  209 => 62,  204 => 60,  192 => 50,  183 => 47,  179 => 46,  176 => 45,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  151 => 38,  141 => 30,  130 => 28,  126 => 27,  120 => 23,  118 => 17,  110 => 12,  106 => 11,  101 => 9,  98 => 8,  88 => 7,  76 => 5,  72 => 4,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block scripts %}
{{ parent() }}
<script src=\"{{ asset('js/add-collection-widget.js') }}\"></script>
{% endblock %}
{% block body %}
<h1>Rajouter un trick</h1>
{{ form_start(form) }}

{{ form_row(form.name) }}
{{ form_row(form.description) }}

<div id=\"trick_trickgroup\">
    <div class=\"form-group\">
        <label>Groupes :
            {{ form_widget(form.trickgroup.name,  {
                'attr': {
                    'list': 'trick_trickgroup_name', 
                    'autocomplete':'off', 
                    }, 
                'id':''
                }) }}
        </label>

        <datalist id=\"trick_trickgroup_name\" name=\"trick[trickgroup][name]\">
        {% for trickGroup in trickGroups %}
            <option value=\"{{trickGroup.name}}\">{{trickGroup.name}}</option>
        {% endfor %}
        </datalist>
        
    </div>
</div>


<div id=\"trick_videos\">
    <div class=\"form-group\"> 
        {{ form_label(form.videos) }}
        <ul id=\"video-fields-list\"
            data-prototype=\"{{ form_widget(form.videos.vars.prototype)|e }}\"
            data-widget-tags=\"{{ '<li></li>'|e }}\"
            data-widget-counter=\"{{ form.videos|length }}\">
            {{ form_widget(form.videos) }}  
        {% for videoField in form.videos %}
            <li>
                {{ form_errors(videoField) }}
                {{ form_widget(videoField) }}
            </li>
        {% endfor %}
        </ul>
        <button type=\"button\"
        class=\"add-another-collection-widget\"
        data-list-selector=\"#video-fields-list\">Ajouter une vidéo</button>
    </div>
</div>


<div id=\"trick_illustrations\">
    <div class=\"form-group\"> 
        {{ form_label(form.illustrations) }}
        <ul id=\"illustration-fields-list\"
        data-prototype=\"{{ form_widget(form.illustrations.vars.prototype)|e }}\"
        data-widget-tags=\"{{ '<li></li>'|e }}\"
        data-widget-counter=\"{{ form.illustrations|length }}\">
        {{ form_widget(form.illustrations) }}
    {% for illustrationField in form.illustrations %}
        <li>
            {{ form_errors(illustrationField) }}
            {{ form_widget(illustrationField) }}
        </li>
    {% endfor %}
    </ul>
        <button type=\"button\"
        class=\"add-another-collection-widget\"
        data-list-selector=\"#illustration-fields-list\">Ajouter une illustration</button>
    </div>
</div>

{{ form_end(form) }}
{% endblock %}", "trick/addTrick.html.old.twig", "/app/myapp/templates/trick/addTrick.html.old.twig");
    }
}
