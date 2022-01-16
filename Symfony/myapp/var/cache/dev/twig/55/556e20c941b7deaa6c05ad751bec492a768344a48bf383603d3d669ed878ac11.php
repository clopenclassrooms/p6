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

/* trick/displayTrick.html.twig */
class __TwigTemplate_98abe9fcde19e5fd80881df9d28ac9b0a54a11020443b3af4cc9369a2f3732d1 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/displayTrick.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/displayTrick.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 1, $this->source); })()), [0 => "form_themes/comment_layout.html.twig"], true);
        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "trick/displayTrick.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"imageHeader\">
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column\">
            <div class=\"text-center\">
                <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1>
            </div>
        </div>
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "        <div class=\"modifyOrDelete position-absolute border border-dark d-flex flex-row bg-light \">
            <div class=\"m-3\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifyTrick", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 16, $this->source); })()), "slug", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/modify.jpg"), "html", null, true);
            echo "\"></a>
            </div>
            <div class=\"m-3\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteTrick", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 19, $this->source); })()), "slug", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/delete.jpg"), "html", null, true);
            echo "\"></a>
            </div>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/arrowPointingDown.png"), "html", null, true);
        echo "\" onClick=\"window.location.href='#illustrationAndVideoContainer';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/homePageHeader.jpg"), "html", null, true);
        echo "\"></img>
        </div>
    </div>
</section>
<section id=\"displayTrick\">
    <div id=\"buttonDisplayImgAndVideo\" class=\"justify-content-center m-3\">
        <button class=\"btn btn-primary\" onClick=\"
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
    <div id=\"illustrationAndVideoContainer\" class=\"flex-column mt-5\">
        <div class=\"listIllustrationAndVideo m-3\">
            <div id=\"trick_illustrations\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 47, $this->source); })()), "illustrations", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["illustration"]) {
            // line 48
            echo "                <div class=\"illustrationMiniBox flex-column border border-dark m-3 p-0\">
                    <div class=\"w-100\">
                        <img class=\"trickMiniBoxPicture w-100\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["illustration"], "fileName", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['illustration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
            <div id=\"trick_videos\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 56, $this->source); })()), "videos", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 57
            echo "                <div class=\"videoMiniBox flex-column border border-dark m-3 p-0\">
                    ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 58);
            echo "
                </div>
                <script>
                    var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
                    var url = \"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 62), "html", null, true);
            echo "\";
                    var match = url.match(regExp);
                    if (match && match[2].length == 11) 
                    {
                        var id = match[2];
                        var embedlink = \"http://www.youtube.com/embed/\" + id;
                        var iframe = document.getElementById(\"video";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\");
                        iframe.src = embedlink;
                    }
                </script> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
        </div>
    </div>

    <div class=\"d-flex flex-row justify-content-center\">
        <div class=\"descriptionWidth d-flex flex-column\">
            <div class=\"d-flex flex-column\">
                <div>
                    ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"d-flex flex-row justify-content-center\">
                ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["trick"] ?? null), "trickgroup", [], "any", false, true, false, 85), "name", [], "any", true, true, false, 85)) {
            // line 86
            echo "                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Groupe de trick : <strong>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 88, $this->source); })()), "trickgroup", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</strong>
                    </span>
                </div>
                ";
        }
        // line 92
        echo "                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Date de création : <strong>";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 94, $this->source); })()), "createdat", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
        echo "</strong>
                    </span>
                </div>
                ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 97, $this->source); })()), "modifyat", [], "any", false, false, false, 97)) {
            // line 98
            echo "                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Date de modification : <strong>";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 100, $this->source); })()), "modifyat", [], "any", false, false, false, 100), "d/m/Y"), "html", null, true);
            echo "</strong>
                    </span>
                </div>
                ";
        }
        // line 104
        echo "            </div>
        </div>
    </div>
    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            // line 108
            echo "    <div>
        <div class=\"justify-content-center d-flex\">
            <div class=\"commentWidth border-top border-bottom border-black d-flex justify-content-center\">
                ";
            // line 111
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 111, $this->source); })()), 'form', ["attr" => ["class" => "d-flex w-100 m-3"]]);
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 116
        echo "    <div id=\"comments\" class=\"d-flex flex-column m-4\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 117, $this->source); })()), "comments", [], "any", false, false, false, 117)), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 118
            echo "        <div class=\"d-flex justify-content-center flex-row\">
            <div class=\"commentContainer d-flex flex-row\">
                <div class=\" m-1 p-1 d-flex flex-column\">
                    <div>
                        ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 122), "photo", [], "any", false, false, false, 122)) {
                // line 123
                echo "                        <img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 123), "photo", [], "any", false, false, false, 123), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 125
                echo "                        <img class=\"avatar\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/userAvatar.jpg"), "html", null, true);
                echo "\">
                        ";
            }
            // line 127
            echo "                    </div>
                    <div class=\"text-center\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128), "html", null, true);
            echo "</div>
                </div>
                <div class=\"border border-black m-1 p-1 w-100\">
                    <h5>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 131), "html", null, true);
            echo "</h5>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
    </div>
    <div class=\"row text-center m-4\">
        ";
        // line 139
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 139, $this->source); })()), "comments", [], "any", false, false, false, 139)), 10))) {
            // line 140
            echo "            <button id=\"loadMoreComments\" class=\"btn btn-primary col-md-6 col-8 mx-auto\">Voir plus de commentaires</button>
        ";
        }
        // line 142
        echo " </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
<script>
    click = 0;
    function loadMoreComments(event) {
        event.preventDefault();
        click++;
        var start = 10 * click;
        
        const url = \"/trick/loadMoreComments/";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152), "html", null, true);
        echo "/\" + start;
        axios.get(url).then(function(response) {
            \$(\"#comments\").append(response.data);
        });
        if (start >= ";
        // line 156
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 156, $this->source); })()), "comments", [], "any", false, false, false, 156)), "html", null, true);
        echo ")
        {
            document.getElementById('loadMoreComments').className += \" d-none\";
        }
    }
    document.getElementById(\"loadMoreComments\").addEventListener(\"click\", loadMoreComments);
</script>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "trick/displayTrick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 156,  337 => 152,  325 => 142,  321 => 140,  319 => 139,  314 => 136,  303 => 131,  297 => 128,  294 => 127,  288 => 125,  282 => 123,  280 => 122,  274 => 118,  270 => 117,  267 => 116,  259 => 111,  254 => 108,  252 => 107,  247 => 104,  240 => 100,  236 => 98,  234 => 97,  228 => 94,  224 => 92,  217 => 88,  213 => 86,  211 => 85,  204 => 81,  194 => 73,  183 => 68,  174 => 62,  167 => 58,  164 => 57,  160 => 56,  156 => 54,  146 => 50,  142 => 48,  138 => 47,  115 => 27,  109 => 24,  106 => 23,  97 => 19,  89 => 16,  85 => 14,  83 => 13,  77 => 10,  71 => 6,  61 => 5,  50 => 3,  48 => 1,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme formComment 'form_themes/comment_layout.html.twig' %}

{% extends 'base.html.twig' %}

{% block body %}
<section id=\"imageHeader\">
    <div class=\"position-relative\">
        <div class=\"titleContainer position-absolute d-flex flex-column\">
            <div class=\"text-center\">
                <h1>{{ trick.name }}</h1>
            </div>
        </div>
        {% if app.user %}
        <div class=\"modifyOrDelete position-absolute border border-dark d-flex flex-row bg-light \">
            <div class=\"m-3\">
                <a href=\"{{ path('modifyTrick',{ 'slug': trick.slug }) }}\"><img src=\"{{ asset('/img/modify.jpg') }}\"></a>
            </div>
            <div class=\"m-3\">
                <a href=\"{{ path('deleteTrick',{ 'slug': trick.slug }) }}\"><img src=\"{{ asset('/img/delete.jpg') }}\"></a>
            </div>
        </div>
        {% endif %}
        <div class=\"arrowPointingDownContainer position-absolute \">
            <img class=\"arrowPointingDown\" src=\"{{ asset('/img/arrowPointingDown.png') }}\" onClick=\"window.location.href='#illustrationAndVideoContainer';\">
        </div>
        <div class=\"w-100\">
            <img class=\"headerPicture w-100\" src=\"{{ asset('/img/homePageHeader.jpg') }}\"></img>
        </div>
    </div>
</section>
<section id=\"displayTrick\">
    <div id=\"buttonDisplayImgAndVideo\" class=\"justify-content-center m-3\">
        <button class=\"btn btn-primary\" onClick=\"
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
    <div id=\"illustrationAndVideoContainer\" class=\"flex-column mt-5\">
        <div class=\"listIllustrationAndVideo m-3\">
            <div id=\"trick_illustrations\">
                {% for illustration in trick.illustrations %}
                <div class=\"illustrationMiniBox flex-column border border-dark m-3 p-0\">
                    <div class=\"w-100\">
                        <img class=\"trickMiniBoxPicture w-100\" src=\"{{ illustration.fileName }}\">
                    </div>
                </div>
                {% endfor %}
            </div>
            <div id=\"trick_videos\">
                {% for video in trick.videos %}
                <div class=\"videoMiniBox flex-column border border-dark m-3 p-0\">
                    {{ video.url | raw}}
                </div>
                <script>
                    var regExp = /^.*(youtu\\.be\\/|v\\/|u\\/\\w\\/|embed\\/|watch\\?v=|\\&v=)([^#\\&\\?]*).*/;
                    var url = \"{{ video.url }}\";
                    var match = url.match(regExp);
                    if (match && match[2].length == 11) 
                    {
                        var id = match[2];
                        var embedlink = \"http://www.youtube.com/embed/\" + id;
                        var iframe = document.getElementById(\"video{{ video.id }}\");
                        iframe.src = embedlink;
                    }
                </script> 
                {% endfor %}
            </div>
        </div>
    </div>

    <div class=\"d-flex flex-row justify-content-center\">
        <div class=\"descriptionWidth d-flex flex-column\">
            <div class=\"d-flex flex-column\">
                <div>
                    {{ trick.description }}
                </div>
            </div>
            <div class=\"d-flex flex-row justify-content-center\">
                {% if trick.trickgroup.name is defined %}
                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Groupe de trick : <strong>{{ trick.trickgroup.name }}</strong>
                    </span>
                </div>
                {% endif %}
                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Date de création : <strong>{{ trick.createdat|date(\"d/m/Y\") }}</strong>
                    </span>
                </div>
                {% if  trick.modifyat %}
                <div class=\"border border-black m-1 m-lg-4\">
                    <span>
                        Date de modification : <strong>{{ trick.modifyat|date(\"d/m/Y\") }}</strong>
                    </span>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% if app.user %}
    <div>
        <div class=\"justify-content-center d-flex\">
            <div class=\"commentWidth border-top border-bottom border-black d-flex justify-content-center\">
                {{ form(formComment, {'attr': {'class': 'd-flex w-100 m-3'}}) }}
            </div>
        </div>
    </div>
    {% endif %}
    <div id=\"comments\" class=\"d-flex flex-column m-4\">
        {% for comment in trick.comments | reverse | slice(0,10) %}
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
        {% endfor %}

    </div>
    <div class=\"row text-center m-4\">
        {% if trick.comments | length > 10 %}
            <button id=\"loadMoreComments\" class=\"btn btn-primary col-md-6 col-8 mx-auto\">Voir plus de commentaires</button>
        {% endif %}
 </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
<script>
    click = 0;
    function loadMoreComments(event) {
        event.preventDefault();
        click++;
        var start = 10 * click;
        
        const url = \"/trick/loadMoreComments/{{ trick.id }}/\" + start;
        axios.get(url).then(function(response) {
            \$(\"#comments\").append(response.data);
        });
        if (start >= {{ trick.comments | length }})
        {
            document.getElementById('loadMoreComments').className += \" d-none\";
        }
    }
    document.getElementById(\"loadMoreComments\").addEventListener(\"click\", loadMoreComments);
</script>
</section>
{% endblock %}", "trick/displayTrick.html.twig", "/app/myapp/templates/trick/displayTrick.html.twig");
    }
}
