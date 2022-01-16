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

/* form_themes/edit_trick_layout.html.backup */
class __TwigTemplate_688b40f69503a0d73377490022ca57d5de62f4079ea35f304b56e9b42b8ef5e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_themes/edit_trick_layout.html.backup"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form_themes/edit_trick_layout.html.backup"));

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
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('_trick_illustrations_row', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('_trick_illustrations_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('_trick_illustrations_entry_row', $context, $blocks);
        // line 99
        echo "
";
        // line 100
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
        class=\"add-another-collection-widget\"
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
        <iframe 
            id=\"video";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" 
            width=\"100%\"
            height=\"100%\"
            frameborder=\"0\" 
            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" 
            allowfullscreen>
        </iframe>
    </div>
    <div>
        <fieldset class=\"form-group\">
            <div id=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "url", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                <div class=\"form-group\">
                    <input 
                        type=\"text\" 
                        id=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "url", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\" 
                        name=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "url", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "full_name", [], "any", false, false, false, 47), "html", null, true);
        echo "\" 
                        required=\"required\" 
                        maxlength=\"255\" 
                        class=\"form-control\" 
                        value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "url", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
        <div class=\"text-center w-100 m-3\"> 
        </div>
        <div class=\"m-3\">
            <a href=\"\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
        echo "\"></a>
        </div>
        <div class=\"m-3\">
            <a href=\"\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
        echo "\"></a>
        </div>
    </div>
    <script>
        var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
        var url = \"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "url", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "value", [], "any", false, false, false, 68), "html", null, true);
        echo "\";
        var match = url.match(regExp);
        if (match && match[2].length == 11) 
        {
            var id = match[2];
            var embedlink = \"http://www.youtube.com/embed/\" + id;
            var iframe = document.getElementById(\"video";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
        echo "\");
            iframe.src = embedlink;
        }
    </script>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block__trick_illustrations_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_row"));

        // line 82
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget', ["attr" => ["data-widget-tags" => "<div></div>"]]);
        // line 86
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block__trick_illustrations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_widget"));

        // line 90
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'widget');
        echo "
        <button type=\"button\"
        class=\"add-another-collection-widget\"
        data-list-selector=\"#trick_illustrations\">Rajouter une image</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block__trick_illustrations_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_row"));

        // line 97
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'widget');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block__trick_illustrations_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_trick_illustrations_entry_widget"));

        // line 101
        echo "    <div class=\"illustrationMiniBox flex-column  border border-dark  m-3 p-0\">
        <div class=\"w-100\">
            <img class=\"trickMiniBoxPicture w-100\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "fileName", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "value", [], "any", false, false, false, 103), "html", null, true);
        echo "\">
        </div>
        <div>
            <fieldset class=\"form-group\">
                <div id=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "fileName", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <input 
                            type=\"text\" 
                            id=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "fileName", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        echo "\" 
                            name=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "fileName", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "full_name", [], "any", false, false, false, 112), "html", null, true);
        echo "\" 
                            required=\"required\" 
                            maxlength=\"255\" 
                            class=\"form-control\" 
                            value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "fileName", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116), "html", null, true);
        echo "\">
                    </div>
                </div>
            </fieldset>
        </div>
        <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
            <div class=\"text-center w-100 m-3\"> 
            </div>
            <div class=\"m-3\">
                <a href=\"\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"m-3\">
                <a href=\"\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
        echo "\"></a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form_themes/edit_trick_layout.html.backup";
    }

    public function getDebugInfo()
    {
        return array (  458 => 128,  452 => 125,  440 => 116,  433 => 112,  429 => 111,  422 => 107,  415 => 103,  411 => 101,  401 => 100,  388 => 97,  378 => 96,  362 => 90,  352 => 89,  341 => 86,  338 => 82,  328 => 81,  312 => 74,  303 => 68,  295 => 63,  289 => 60,  277 => 51,  270 => 47,  266 => 46,  259 => 42,  246 => 32,  241 => 29,  231 => 28,  218 => 25,  208 => 24,  192 => 18,  182 => 17,  171 => 14,  168 => 10,  158 => 9,  141 => 6,  131 => 5,  118 => 2,  108 => 1,  98 => 100,  95 => 99,  93 => 96,  90 => 95,  88 => 89,  85 => 88,  83 => 81,  80 => 80,  78 => 28,  75 => 27,  73 => 24,  70 => 23,  68 => 17,  65 => 16,  63 => 9,  60 => 8,  58 => 5,  55 => 4,  53 => 1,);
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
        class=\"add-another-collection-widget\"
        data-list-selector=\"#trick_videos\">Rajouter une vidéo</button>
{% endblock %}

{% block _trick_videos_entry_row %}
    {{ form_widget(form)}}
{% endblock %}

{% block _trick_videos_entry_widget %}
<div class=\"trickVideo videoMiniBox flex-column border border-dark m-3 p-0\">
    <div class=\"w-100 trickMiniBoxVideo\">
        <iframe 
            id=\"video{{ form.vars.name }}\" 
            width=\"100%\"
            height=\"100%\"
            frameborder=\"0\" 
            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" 
            allowfullscreen>
        </iframe>
    </div>
    <div>
        <fieldset class=\"form-group\">
            <div id=\"{{ form.url.vars.id }}\">
                <div class=\"form-group\">
                    <input 
                        type=\"text\" 
                        id=\"{{ form.url.vars.id }}\" 
                        name=\"{{ form.url.vars.full_name}}\" 
                        required=\"required\" 
                        maxlength=\"255\" 
                        class=\"form-control\" 
                        value=\"{{ form.url.vars.value }}\">
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
        <div class=\"text-center w-100 m-3\"> 
        </div>
        <div class=\"m-3\">
            <a href=\"\"><img src=\"{{ asset('/img/modify.jpg') }}\"></a>
        </div>
        <div class=\"m-3\">
            <a href=\"\"><img src=\"{{ asset('/img/delete.jpg') }}\"></a>
        </div>
    </div>
    <script>
        var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
        var url = \"{{ form.url.vars.value }}\";
        var match = url.match(regExp);
        if (match && match[2].length == 11) 
        {
            var id = match[2];
            var embedlink = \"http://www.youtube.com/embed/\" + id;
            var iframe = document.getElementById(\"video{{ form.vars.name }}\");
            iframe.src = embedlink;
        }
    </script>
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
        class=\"add-another-collection-widget\"
        data-list-selector=\"#trick_illustrations\">Rajouter une image</button>
{% endblock %}

{% block _trick_illustrations_entry_row %}
    {{ form_widget(form)}}
{% endblock %}

{% block _trick_illustrations_entry_widget %}
    <div class=\"illustrationMiniBox flex-column  border border-dark  m-3 p-0\">
        <div class=\"w-100\">
            <img class=\"trickMiniBoxPicture w-100\" src=\"{{ form.fileName.vars.value }}\">
        </div>
        <div>
            <fieldset class=\"form-group\">
                <div id=\"{{ form.fileName.vars.id }}\">
                    <div class=\"form-group\">
                        <input 
                            type=\"text\" 
                            id=\"{{ form.fileName.vars.id }}\" 
                            name=\"{{ form.fileName.vars.full_name }}\" 
                            required=\"required\" 
                            maxlength=\"255\" 
                            class=\"form-control\" 
                            value=\"{{ form.fileName.vars.value }}\">
                    </div>
                </div>
            </fieldset>
        </div>
        <div class=\"trickMiniBoxTitreAndActionsContainer d-flex flex-row border-top border-dark\">
            <div class=\"text-center w-100 m-3\"> 
            </div>
            <div class=\"m-3\">
                <a href=\"\"><img src=\"{{ asset('/img/modify.jpg') }}\"></a>
            </div>
            <div class=\"m-3\">
                <a href=\"\"><img src=\"{{ asset('/img/delete.jpg') }}\"></a>
            </div>
        </div>
    </div>
{% endblock %}", "form_themes/edit_trick_layout.html.backup", "/app/myapp/templates/form_themes/edit_trick_layout.html.backup");
    }
}
