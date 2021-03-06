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

/* home/index.html.twig */
class __TwigTemplate_ba352bde971d395b362731b35176653cda0302b619266f0aa57fff2d5797047d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Les chiffres du COVID-19 en France
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 19), 0, [], "any", false, false, false, 19), "hospitalises", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de Réa</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 29), 0, [], "any", false, false, false, 29), "reanimation", [], "any", false, false, false, 29), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre total de décès 😥</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">";
        // line 39
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 39), 0, [], "any", false, false, false, 39), "deces", [], "any", false, false, false, 39) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 39), 0, [], "any", false, false, false, 39), "decesEhpad", [], "any", false, false, false, 39)), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre totale de guéris</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 49), 0, [], "any", false, false, false, 49), "gueris", [], "any", false, false, false, 49), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de cas confirmés</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de cas confirmés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\">";
        // line 59
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 59), 0, [], "any", false, false, false, 59), "casConfirmes", [], "any", false, false, false, 59) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 59), 0, [], "any", false, false, false, 59), "casConfirmesEhpad", [], "any", false, false, false, 59)), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Source des données</h5>
\t\t\t\t\t\t\t<p class=\"card-text\"><br>";
        // line 67
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 67), 0, [], "any", false, false, false, 67), "sourceType", [], "any", false, false, false, 67)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\">";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "FranceGlobalLiveData", [], "any", false, false, false, 69), 0, [], "any", false, false, false, 69), "date", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    <div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en PACA</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paca"]) || array_key_exists("paca", $context) ? $context["paca"] : (function () { throw new RuntimeError('Variable "paca" does not exist.', 87, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 87), 0, [], "any", false, false, false, 87), "hospitalises", [], "any", false, false, false, 87), "html", null, true);
        echo "</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de Réa</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paca"]) || array_key_exists("paca", $context) ? $context["paca"] : (function () { throw new RuntimeError('Variable "paca" does not exist.', 97, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 97), 0, [], "any", false, false, false, 97), "reanimation", [], "any", false, false, false, 97), "html", null, true);
        echo "</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre total de décès 😥</h5>
                            <p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
                        </div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paca"]) || array_key_exists("paca", $context) ? $context["paca"] : (function () { throw new RuntimeError('Variable "paca" does not exist.', 107, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 107), 0, [], "any", false, false, false, 107), "deces", [], "any", false, false, false, 107), "html", null, true);
        echo "</h3>
                    </div>
                </div>
            </div>
            <div class=\"mx-auto\">
                <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Nombre totale de guéris</h5>
                                <p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
                            </div>
                            <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paca"]) || array_key_exists("paca", $context) ? $context["paca"] : (function () { throw new RuntimeError('Variable "paca" does not exist.', 118, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 118), 0, [], "any", false, false, false, 118), "gueris", [], "any", false, false, false, 118), "html", null, true);
        echo "</h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"album py-5\" id=\"department\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 par département</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 129, $this->source); })()), "allLiveFranceData", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 130
            echo "\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-lg h-100 m-2\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "nom", [], "any", false, false, false, 133), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Actuellement hospitalisée <span class=\"badge bg-secondary\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "hospitalises", [], "any", false, false, false, 134), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Actuellement en réa <span class=\"badge bg-secondary\">";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["department"], "reanimation", [], "any", false, false, false, 135), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement", ["department" => twig_get_attribute($this->env, $this->source, $context["department"], "nom", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\" role=\"button\" aria-pressed=\"true\">Plus de chiffres</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 141,  267 => 136,  263 => 135,  259 => 134,  255 => 133,  250 => 130,  246 => 129,  232 => 118,  218 => 107,  205 => 97,  192 => 87,  171 => 69,  166 => 67,  155 => 59,  142 => 49,  129 => 39,  116 => 29,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les chiffres du COVID-19 en France
{% endblock %}

{% block body %}
\t<div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en France</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.hospitalises }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de Réa</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.reanimation }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre total de décès 😥</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.deces + data.FranceGlobalLiveData.0.decesEhpad }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre totale de guéris</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.gueris }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre de cas confirmés</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de cas confirmés depuis le début de la pandémie</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-info text-dark mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.casConfirmes + data.FranceGlobalLiveData.0.casConfirmesEhpad }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Source des données</h5>
\t\t\t\t\t\t\t<p class=\"card-text\"><br>{{ data.FranceGlobalLiveData.0.sourceType |upper}}</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-secondary text-grey mx-2 rounded-pill\">{{ data.FranceGlobalLiveData.0.date  |date(\"d/m/Y\")}}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    <div class=\"album py-5\" id=\"france\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 en PACA</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"card shadow-sm h-100\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">Nombre d’hospitalisations</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">Nombre de personnes actuellement hospitalisée</p>
\t\t\t\t\t\t</div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ paca.LiveDataByDepartement.0.hospitalises }}</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre de Réa</h5>
                            <p class=\"card-text\">Nombre de personnes actuellement en réanimation</p>
                        </div>
                        <h3 class=\"card-footer bg-warning text-dark mx-2 rounded-pill\">{{ paca.LiveDataByDepartement.0.reanimation }}</h3>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Nombre total de décès 😥</h5>
                            <p class=\"card-text\">Nombre de personnes décédés depuis le début de la pandémie</p>
                        </div>
                        <h3 class=\"card-footer bg-dark text-light mx-2 rounded-pill\">{{ paca.LiveDataByDepartement.0.deces }}</h3>
                    </div>
                </div>
            </div>
            <div class=\"mx-auto\">
                <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Nombre totale de guéris</h5>
                                <p class=\"card-text\">Nombre de personnes guéris depuis le début de la pandémie</p>
                            </div>
                            <h3 class=\"card-footer bg-success text-dark mx-2 rounded-pill\">{{ paca.LiveDataByDepartement.0.gueris }}</h3>
                        </div>
                </div>
            </div>
        </div>
    </div>
\t<div class=\"album py-5\" id=\"department\">
\t\t<div class=\"container\">
            <h1 class=\"mb-5\">Les chiffres du COVID-19 par département</h1>

\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t{% for department in departments.allLiveFranceData %}
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"card shadow-lg h-100 m-2\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ department.nom }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Actuellement hospitalisée <span class=\"badge bg-secondary\">{{ department.hospitalises }}</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Actuellement en réa <span class=\"badge bg-secondary\">{{ department.reanimation }}</span></p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('departement', {'department': department.nom }) }}\" class=\"btn btn-secondary\" role=\"button\" aria-pressed=\"true\">Plus de chiffres</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock %}
", "home/index.html.twig", "/Users/quentindesgardin/Documents/Project/covid/templates/home/index.html.twig");
    }
}
