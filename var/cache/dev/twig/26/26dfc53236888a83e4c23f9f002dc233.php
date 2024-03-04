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

/* individu/show.html.twig */
class __TwigTemplate_cb71eded94c890220f8e3f8cc041cf6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "individu/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div id=\"\" class=\" d-flex justify-content-center mt-4\">
\t\t<div class=\"w-50 bg-light shadow-lg p-3\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Detail Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t<form action=\"\" method=\"post\" class=\"text_center\">
\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">Matricule</label>
\t\t\t\t\t<input type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 13, $this->source); })()), "numeroMatricule", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"form-control w-50\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">PRENOM</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">ADRESSE</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">TELEPHONE</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"\" class=\"col-12 col-md-3\">Classe</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 33, $this->source); })()), "classe", [], "any", false, false, false, 33), "libelle", [], "any", false, false, false, 33), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"\" class=\"col-12 col-md-3\">Role
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["individu"]) || array_key_exists("individu", $context) ? $context["individu"] : (function () { throw new RuntimeError('Variable "individu" does not exist.', 38, $this->source); })()), "typeindividu", [], "any", false, false, false, 38), "libelle", [], "any", false, false, false, 38), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 38, $this->source); })()), "html", null, true);
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\" d-flex justify-content-center mt-4\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu");
        echo "\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "individu/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  142 => 41,  134 => 38,  124 => 33,  115 => 29,  106 => 25,  97 => 21,  88 => 17,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<div id=\"\" class=\" d-flex justify-content-center mt-4\">
\t\t<div class=\"w-50 bg-light shadow-lg p-3\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Detail Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t<form action=\"\" method=\"post\" class=\"text_center\">
\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">Matricule</label>
\t\t\t\t\t<input type=\"text\" value=\"{{individu.numeroMatricule}}\" class=\"form-control w-50\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.nom}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">PRENOM</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.prenom}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">ADRESSE</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.adresse}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">TELEPHONE</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.telephone}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"\" class=\"col-12 col-md-3\">Classe</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.classe.libelle}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"\" class=\"col-12 col-md-3\">Role
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" value=\"{{individu.typeindividu.libelle}}\" {{disabled}}>
\t\t\t\t</div>
\t\t\t\t<div class=\" d-flex justify-content-center mt-4\">
\t\t\t\t\t<a href=\"{{path('app_individu')}}\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>{% endblock %}
", "individu/show.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/individu/show.html.twig");
    }
}
