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

/* departement/index.html.twig */
class __TwigTemplate_1915cb5dffde6b2410c978e2cf700d882d9aa6522ae0e643de24a58580ee04c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/index.html.twig", 1);
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

        echo "Les chiffres du COVID-19|";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 3), 0, [], "any", false, false, false, 3), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "\t<div class=\"px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
\t\t<h1 class=\"display-4\">Les chiffres du COVID-19 -
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 9), 0, [], "any", false, false, false, 9), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
\t\t<p class=\"lead\">Source :
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 11), 0, [], "any", false, false, false, 11), "sourceType", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
\t\t<p class=\"lead\">Date d'actualisation :
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 13), 0, [], "any", false, false, false, 13), "date", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
\t</div>

\t<div class=\"card mb-5 shadow-lg\">
\t\t<div class=\"card-body\">
\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("chart", (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 18, $this->source); })()));
        echo "
\t\t</div>
\t</div>


\t<div class=\"row text-center\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card mb-4 shadow-sm mt-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"my-0 fw-normal\">Nombre d’hospitalisations</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title pricing-card-title\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 30), 0, [], "any", false, false, false, 30), "hospitalises", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card mb-4 shadow-sm mt-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"my-0 fw-normal\">Nombre de personnes réa</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title pricing-card-title\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "LiveDataByDepartement", [], "any", false, false, false, 40), 0, [], "any", false, false, false, 40), "reanimation", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "departement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  128 => 30,  113 => 18,  105 => 13,  100 => 11,  95 => 9,  91 => 7,  81 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Les chiffres du COVID-19|{{ data.LiveDataByDepartement.0.nom }}
{% endblock %}

{% block body %}
\t<div class=\"px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
\t\t<h1 class=\"display-4\">Les chiffres du COVID-19 -
\t\t\t{{ data.LiveDataByDepartement.0.nom }}</h1>
\t\t<p class=\"lead\">Source :
\t\t\t{{ data.LiveDataByDepartement.0.sourceType }}</p>
\t\t<p class=\"lead\">Date d'actualisation :
\t\t\t{{ data.LiveDataByDepartement.0.date }}</p>
\t</div>

\t<div class=\"card mb-5 shadow-lg\">
\t\t<div class=\"card-body\">
\t\t\t{{ render_chart(chart) }}
\t\t</div>
\t</div>


\t<div class=\"row text-center\">
\t\t<div class=\"col\">
\t\t\t<div class=\"card mb-4 shadow-sm mt-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"my-0 fw-normal\">Nombre d’hospitalisations</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title pricing-card-title\">{{ data.LiveDataByDepartement.0.hospitalises }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"card mb-4 shadow-sm mt-4\">
\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t<h4 class=\"my-0 fw-normal\">Nombre de personnes réa</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h1 class=\"card-title pricing-card-title\">{{ data.LiveDataByDepartement.0.reanimation }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "departement/index.html.twig", "/Users/quentindesgardin/Documents/Project/covid/templates/departement/index.html.twig");
    }
}
