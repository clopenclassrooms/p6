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

/* form_themes/edit_trick_layout.html.twig */
class __TwigTemplate_f1a3b0e94b0fa2776a916edf2b9f5cf2ad3b7f75c3eb62d5cbb397c333af438d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_trick_description_row' => [$this, 'block__trick_description_row'],
            '_trick_description_widget' => [$this, 'block__trick_description_widget'],
            '_trick_videos_row' => [$this, 'block__trick_videos_row'],
            '_trick_videos_widget' => [$this, 'block__trick_videos_widget'],
            '_trick_videos_entry_row' => [$this, 'block__trick_videos_entry_row'],
            '_trick_videos_entry_widget' => [$this, 'block__trick_videos_entry_widget'],
            '_trick_illustrations_row' => [$this, 'block__trick_illustrations_row'],
            '_trick_illustrations_widget' => [$this, 'block__trick_illustrations_widget'],
            '_trick_illustrations_entry_row' => [$this, 'block__trick_illustrations_entry_row'],
            '_trick_illustrations_entry_widget' => [$this, 'block__trick_illustrations_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_themes/edit_trick_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_themes/edit_trick_layout.html.twig"));

        // line 1
        $this->displayBlock('_trick_description_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_trick_description_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_trick_videos_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_trick_videos_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('_trick_videos_entry_row', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('_trick_videos_entry_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('_trick_illustrations_row', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('_trick_illustrations_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('_trick_illustrations_entry_row', $context, $blocks);
        // line 110
        echo "é
";
        // line 111
        $this->displayBlock('_trick_illustrations_entry_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block__trick_description_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_description_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_description_row"));

        // line 2
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block__trick_description_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_description_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_description_widget"));

        // line 6
        echo "    <textarea id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"form-control\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "full_name", [], "any", false, false, false, 6), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "html", null, true);
        echo "</textarea>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block__trick_videos_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_row"));

        // line 10
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'widget', ["attr" => ["data-widget-tags" => "<div></div>"]]);
        // line 14
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block__trick_videos_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_widget"));

        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo "
        <button type=\"button\"
        class=\"add-another-collection-widget btn-primary btn\"
        data-list-selector=\"#trick_videos\">Rajouter une vidéo</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block__trick_videos_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_entry_row"));

        // line 25
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block__trick_videos_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_videos_entry_widget"));

        // line 29
        echo "<div class=\"trickVideo videoMiniBox flex-column border border-dark m-3 p-0\">
    <div class=\"w-100 trickMiniBoxVideo\">
        ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31);
        echo "
    </div>
    <div>
        <fieldset class=\"form-group\">
            <div>
                <div class=\"form-group\">
                    <input 
                        type=\"text\" 
                        id=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "url", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\" 
                        name=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "full_name", [], "any", false, false, false, 40), "html", null, true);
        echo "\" 
                        required=\"required\" 
                        maxlength=\"1000\" 
                        class=\"form-control\" 
                        value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "url", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
        echo "\"
                        onchange=\"addIframe(
                        document.getElementById('";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "url", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "').value,
                        '";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "',
                        this,
                        document.getElementById('";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "url", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "')
                        )\"
                        >
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
        <div class=\"text-center w-100 m-3\"> 
        </div>
        <div class=\"m-3\">
            <div onclick=\"addIframe(
                document.getElementById('";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "url", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "').value,
                '";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "',
                this,
                document.getElementById('";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "url", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        echo "')
                )\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"m-3\">
            <div onclick=\"this.closest('.videoMiniBox').remove();\">
                <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
     <!--
    <script>
        var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
        var url = \"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "url", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78), "html", null, true);
        echo "\";
        var match = url.match(regExp);
        if (match && match[2 src].length == 11) 
        {
            var id = match[2];
            var embedlink = \"http://www.youtube.com/embed/\" + id;
            var iframe = document.getElementById(\"video";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "\");
            iframe.src = embedlink;
        }
    </script>
    --> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block__trick_illustrations_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_row"));

        // line 93
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'widget', ["attr" => ["data-widget-tags" => "<div></div>"]]);
        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block__trick_illustrations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_widget"));

        // line 101
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'widget');
        echo "
        <button type=\"button\"
        class=\"add-another-collection-widget btn-primary btn\"
        data-list-selector=\"#trick_illustrations\">Rajouter une image</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block__trick_illustrations_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_row"));

        // line 108
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block__trick_illustrations_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_widget"));

        // line 112
        echo "    <div class=\"illustrationMiniBox flex-column  border border-dark  m-3 p-0\">
        <div class=\"IllustrationContainer w-100\">
            <img class=\"trickMiniBoxPicture w-100\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "fileName", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114), "html", null, true);
        echo "\">
            <input 
                type=\"hidden\" 
                name=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "fileName", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "full_name", [], "any", false, false, false, 117), "html", null, true);
        echo "\" 
                value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "fileName", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118), "html", null, true);
        echo "\"
            >
        </div>
        <div class=\"d-none\">
            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "img", [], "any", false, false, false, 122), 'widget', ["attr" => ["onchange" => "changeImg(this)"]]);
        echo "
        </div>
        <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
            <div class=\"text-center w-100 m-3\"> 
            </div>
            <div class=\"m-3\">
                <label for=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "img", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"m-3\">
                <div onclick=\"this.closest('.illustrationMiniBox').remove();\">
                    <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form_themes/edit_trick_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  476 => 132,  467 => 128,  458 => 122,  451 => 118,  447 => 117,  441 => 114,  437 => 112,  427 => 111,  414 => 108,  404 => 107,  388 => 101,  378 => 100,  367 => 97,  364 => 93,  354 => 92,  337 => 84,  328 => 78,  318 => 71,  310 => 66,  305 => 64,  300 => 62,  296 => 61,  281 => 49,  276 => 47,  272 => 46,  267 => 44,  260 => 40,  256 => 39,  245 => 31,  241 => 29,  231 => 28,  218 => 25,  208 => 24,  192 => 18,  182 => 17,  171 => 14,  168 => 10,  158 => 9,  141 => 6,  131 => 5,  118 => 2,  108 => 1,  98 => 111,  95 => 110,  93 => 107,  90 => 106,  88 => 100,  85 => 99,  83 => 92,  80 => 91,  78 => 28,  75 => 27,  73 => 24,  70 => 23,  68 => 17,  65 => 16,  63 => 9,  60 => 8,  58 => 5,  55 => 4,  53 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _trick_description_row %}
        {{ form_widget(form)}}
{% endblock %}

{% block _trick_description_widget %}
    <textarea id=\"{{ form.vars.id }}\" class=\"form-control\" name=\"{{ form.vars.full_name }}\">{{ form.vars.value }}</textarea>
{% endblock %}

{% block _trick_videos_row %}
        {{ form_widget(form, {
                'attr': {
                    'data-widget-tags': '<div></div>'
                    }
                })}}
{% endblock %}

{% block _trick_videos_widget %}
    {{ form_widget(form)}}
        <button type=\"button\"
        class=\"add-another-collection-widget btn-primary btn\"
        data-list-selector=\"#trick_videos\">Rajouter une vidéo</button>
{% endblock %}

{% block _trick_videos_entry_row %}
    {{ form_widget(form)}}
{% endblock %}

{% block _trick_videos_entry_widget %}
<div class=\"trickVideo videoMiniBox flex-column border border-dark m-3 p-0\">
    <div class=\"w-100 trickMiniBoxVideo\">
        {{ form.url.vars.value | raw}}
    </div>
    <div>
        <fieldset class=\"form-group\">
            <div>
                <div class=\"form-group\">
                    <input 
                        type=\"text\" 
                        id=\"{{ form.url.vars.id }}\" 
                        name=\"{{ form.url.vars.full_name }}\" 
                        required=\"required\" 
                        maxlength=\"1000\" 
                        class=\"form-control\" 
                        value=\"{{ form.url.vars.value }}\"
                        onchange=\"addIframe(
                        document.getElementById('{{ form.url.vars.id }}').value,
                        '{{ form.vars.name }}',
                        this,
                        document.getElementById('{{ form.url.vars.id }}')
                        )\"
                        >
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
        <div class=\"text-center w-100 m-3\"> 
        </div>
        <div class=\"m-3\">
            <div onclick=\"addIframe(
                document.getElementById('{{ form.url.vars.id }}').value,
                '{{ form.vars.name }}',
                this,
                document.getElementById('{{ form.url.vars.id }}')
                )\">
                <img src=\"{{ asset('/img/modify.jpg') }}\">
            </div>
        </div>
        <div class=\"m-3\">
            <div onclick=\"this.closest('.videoMiniBox').remove();\">
                <img src=\"{{ asset('/img/delete.jpg') }}\">
            </div>
        </div>
    </div>
     <!--
    <script>
        var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
        var url = \"{{ form.url.vars.value }}\";
        var match = url.match(regExp);
        if (match && match[2 src].length == 11) 
        {
            var id = match[2];
            var embedlink = \"http://www.youtube.com/embed/\" + id;
            var iframe = document.getElementById(\"video{{ form.vars.name }}\");
            iframe.src = embedlink;
        }
    </script>
    --> 
</div>
{% endblock %}

{% block _trick_illustrations_row %}
    {{ form_widget(form, {
                'attr': {
                    'data-widget-tags': '<div></div>'
                    }
                })}}
{% endblock %}

{% block _trick_illustrations_widget %}
    {{ form_widget(form)}}
        <button type=\"button\"
        class=\"add-another-collection-widget btn-primary btn\"
        data-list-selector=\"#trick_illustrations\">Rajouter une image</button>
{% endblock %}

{% block _trick_illustrations_entry_row %}
    {{ form_widget(form)}}
{% endblock %}
é
{% block _trick_illustrations_entry_widget %}
    <div class=\"illustrationMiniBox flex-column  border border-dark  m-3 p-0\">
        <div class=\"IllustrationContainer w-100\">
            <img class=\"trickMiniBoxPicture w-100\" src=\"{{ form.fileName.vars.value }}\">
            <input 
                type=\"hidden\" 
                name=\"{{ form.fileName.vars.full_name }}\" 
                value=\"{{ form.fileName.vars.value }}\"
            >
        </div>
        <div class=\"d-none\">
            {{ form_widget(form.img, {'attr':{'onchange':'changeImg(this)'}}) }}
        </div>
        <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
            <div class=\"text-center w-100 m-3\"> 
            </div>
            <div class=\"m-3\">
                <label for=\"{{ form.img.vars.id }}\"><img src=\"{{ asset('/img/modify.jpg') }}\"></label>
            </div>
            <div class=\"m-3\">
                <div onclick=\"this.closest('.illustrationMiniBox').remove();\">
                    <img src=\"{{ asset('/img/delete.jpg') }}\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "form_themes/edit_trick_layout.html.twig", "/app/myapp/templates/form_themes/edit_trick_layout.html.twig");
    }
}
