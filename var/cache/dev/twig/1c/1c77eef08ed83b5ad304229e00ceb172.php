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

/* eval/show.html.twig */
class __TwigTemplate_8010fd4b1a18fa46ecac3211a8240708 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eval/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eval/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eval/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Evaluation Trimestrielle
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- Vertically centered modal -->

<div class=\"eval-container\">
\t<h1 class=\"title\">SAISIE EVALUATION TRIMESTRIELLE</h1>
\t<div class=\"inner-container container-sm\">
\t\t<div class=\"form-container container-fluid\" >
\t\t\t";
        // line 43
        echo "
\t\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["class" => "form-container container-fluid"]]);
        echo "
\t\t\t<div class=\"form-group form-flex-half row\">
\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "numero", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => ""], "label" => "Numero:"]);
        echo "
\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "numero", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "code", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "col-12 col-md-5"], "label" => "Annéé Scolaire:"]);
        echo "
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "code", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control col-12 col-md-5"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "trimestre", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "col-12 col-md-5"], "label" => "Triméstre:"]);
        echo "
\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "trimestre", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control col-12 col-md-5"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "individu", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "col-12 col-md-5"], "label" => "Formateur:"]);
        echo "
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "individu", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control col-12 col-md-5"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "libelle", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "col-12 col-md-5"], "label" => "Classe:"]);
        echo "
\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "libelle", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control col-12 col-md-5"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "matiere", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "col-12 col-md-5"], "label" => "Matière:"]);
        echo "
\t\t\t\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "matiere", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control col-12 col-md-5"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t<a id=\"show_modal_art\" href=\"#modal_art\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Importer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-success\">Exporter vers Excel</a>
\t\t\t\t<input type=\"submit\" value=\"submit\">

\t\t\t</div>
\t\t\t";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "

\t\t\t<div class=\"inner-container container-fluid\">
\t\t\t\t<div class=\"inner-container container-fluid\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered W100 container-fluid my-4\">
\t\t\t\t\t\t\t<!-- Your table content -->
\t\t\t\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t\t\t\t<th class=\"bg-black w5\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-1\">CODE</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">NOM</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">PRENOM</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">NOTE</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-4\">APPRCIATION</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"\"></td>
\t\t\t\t\t\t\t\t\t<td>001</td>
\t\t\t\t\t\t\t\t\t<td>Ramesh</td>
\t\t\t\t\t\t\t\t\t<td>Dular</td>
\t\t\t\t\t\t\t\t\t<td>Average</td>
\t\t\t\t\t\t\t\t\t<td>Moyen</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot id=\"tfooter_eval\" class=\"\">
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th colspan=\"12\" class=\"bg-black text-center \">Moyenne de classe:</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"modal_art\" class=\"\">
\t\t\t<div id=\"modal_art_content\">
\t\t\t\t<h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
\t\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t</a>
\t\t\t\t<div action=\"\" class=\"text_center\">
\t\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">CODE</label>
\t\t\t\t\t\t<input type=\"text\" id=\"id\" name=\"\" value=\"\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM & PRENOM</label>
\t\t\t\t\t\t<input type=\"text\" id=\"numClient\" name=\"numClient\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">NOTE</label>
\t\t\t\t\t\t<input type=\"text\" id=\"nomClient\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"adresseClient\" class=\"col-12 col-md-3\">APPRECIATION</label>
\t\t\t\t\t\t<textarea id=\"adresseClient\" name=\"adresseClient\" class=\"form-control w-50\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" d-flex justify-content-between mt-4\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Valider</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<img id=\"loader\" src=\"img/loader1.gif\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "eval/show.html.twig";
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
        return array (  172 => 76,  160 => 67,  156 => 66,  150 => 63,  146 => 62,  140 => 59,  136 => 58,  130 => 55,  126 => 54,  120 => 51,  116 => 50,  110 => 47,  106 => 46,  101 => 44,  98 => 43,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Evaluation Trimestrielle
{% endblock %}
{% block body %}
<!-- Vertically centered modal -->

<div class=\"eval-container\">
\t<h1 class=\"title\">SAISIE EVALUATION TRIMESTRIELLE</h1>
\t<div class=\"inner-container container-sm\">
\t\t<div class=\"form-container container-fluid\" >
\t\t\t{# <form action=\"\" method=\"post\"class=\"form-container container-fluid\">
\t\t\t<div class=\"form-group form-flex-half row\">
\t\t\t\t<label for=\"num\" class=\"\">Numero:</label>
\t\t\t\t<input type=\"text\" id=\"num\" class=\"form-control\">
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t<label for=\"num\" class=\"col-12 col-md-5\">Annéé Scolaire:</label>
\t\t\t\t<input type=\"text\" id=\"\" class=\"form-control col-12 col-md-5\">
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t<label for=\"num\" class=\"col-12 col-md-5\">Triméstre:</label>
\t\t\t\t<input type=\"text\" id=\"\" class=\"form-control col-12 col-md-5\">
\t\t\t</div>
\t\t\t<div class=\"form-group  form-flex row\">
\t\t\t\t<label for=\"num\" class=\"col-12 col-md-5\">Formateur:</label>
\t\t\t\t<input type=\"text\" id=\"\" class=\"form-control col-12 col-md-5\">
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t<label for=\"num\" class=\"col-12 col-md-5\">Classe:</label>
\t\t\t\t<input type=\"text\" id=\"\" class=\"form-control col-12 col-md-5\">
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t<label for=\"num\" class=\"col-12 col-md-5\">Matière:</label>
\t\t\t\t<input type=\"text\" id=\"\" class=\"form-control col-12 col-md-5\">
\t\t\t</div>
\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t<a id=\"show_modal_art\" href=\"#modal_art\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Importer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-success\">Exporter vers Excel</a>
\t\t\t</div>
\t\t\t</form> #}

\t\t\t{{ form_start(form, {'attr': {'class': 'form-container container-fluid'}}) }}
\t\t\t<div class=\"form-group form-flex-half row\">
\t\t\t\t{{ form_label(form.numero, 'Numero:', {'label_attr': {'class': ''}}) }}
\t\t\t\t{{ form_widget(form.numero, {'attr': {'class': 'form-control'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t{{ form_label(form.code, 'Annéé Scolaire:', {'label_attr': {'class': 'col-12 col-md-5'}}) }}
\t\t\t\t{{ form_widget(form.code, {'attr': {'class': 'form-control col-12 col-md-5'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t{{ form_label(form.trimestre, 'Triméstre:', {'label_attr': {'class': 'col-12 col-md-5'}}) }}
\t\t\t\t{{ form_widget(form.trimestre, {'attr': {'class': 'form-control col-12 col-md-5'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t{{ form_label(form.individu, 'Formateur:', {'label_attr': {'class': 'col-12 col-md-5'}}) }}
\t\t\t\t{{ form_widget(form.individu, {'attr': {'class': 'form-control col-12 col-md-5'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t{{ form_label(form.libelle, 'Classe:', {'label_attr': {'class': 'col-12 col-md-5'}}) }}
\t\t\t\t{{ form_widget(form.libelle, {'attr': {'class': 'form-control col-12 col-md-5'}}) }}
\t\t\t</div>
\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t{{ form_label(form.matiere, 'Matière:', {'label_attr': {'class': 'col-12 col-md-5'}}) }}
\t\t\t\t{{ form_widget(form.matiere, {'attr': {'class': 'form-control col-12 col-md-5'}}) }}
\t\t\t</div>
\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t<a id=\"show_modal_art\" href=\"#modal_art\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Importer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-success\">Exporter vers Excel</a>
\t\t\t\t<input type=\"submit\" value=\"submit\">

\t\t\t</div>
\t\t\t{{ form_end(form) }}

\t\t\t<div class=\"inner-container container-fluid\">
\t\t\t\t<div class=\"inner-container container-fluid\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered W100 container-fluid my-4\">
\t\t\t\t\t\t\t<!-- Your table content -->
\t\t\t\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t\t\t\t<th class=\"bg-black w5\"></th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-1\">CODE</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">NOM</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">PRENOM</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-2\">NOTE</th>
\t\t\t\t\t\t\t\t\t<th class=\"bg-black col-4\">APPRCIATION</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"\"></td>
\t\t\t\t\t\t\t\t\t<td>001</td>
\t\t\t\t\t\t\t\t\t<td>Ramesh</td>
\t\t\t\t\t\t\t\t\t<td>Dular</td>
\t\t\t\t\t\t\t\t\t<td>Average</td>
\t\t\t\t\t\t\t\t\t<td>Moyen</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t<tfoot id=\"tfooter_eval\" class=\"\">
\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<th colspan=\"12\" class=\"bg-black text-center \">Moyenne de classe:</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"modal_art\" class=\"\">
\t\t\t<div id=\"modal_art_content\">
\t\t\t\t<h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
\t\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t</a>
\t\t\t\t<div action=\"\" class=\"text_center\">
\t\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">CODE</label>
\t\t\t\t\t\t<input type=\"text\" id=\"id\" name=\"\" value=\"\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM & PRENOM</label>
\t\t\t\t\t\t<input type=\"text\" id=\"numClient\" name=\"numClient\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">NOTE</label>
\t\t\t\t\t\t<input type=\"text\" id=\"nomClient\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t\t<label for=\"adresseClient\" class=\"col-12 col-md-3\">APPRECIATION</label>
\t\t\t\t\t\t<textarea id=\"adresseClient\" name=\"adresseClient\" class=\"form-control w-50\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" d-flex justify-content-between mt-4\">
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Valider</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<img id=\"loader\" src=\"img/loader1.gif\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t\t{% endblock %}", "eval/show.html.twig", "/Users/sonamsherpa/ecf_2/templates/eval/show.html.twig");
    }
}
