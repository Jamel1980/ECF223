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

/* saisir_note/form.html.twig */
class __TwigTemplate_a935431832acf67632d3af95b14ec56b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisir_note/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisir_note/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "saisir_note/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div id=\"\" class=\" d-flex justify-content-center mt-4\">
    <div class=\"w-50 bg-light shadow-lg p-3\">
        <h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
        <a href=\"\" id=\"modal_close\">
            <i class=\"fa fa-close\"></i>
        </a>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "text-center"]]);
        echo "

        <div class=\"form-group row\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "evaluation", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "CODE"]);
        echo "
            <div class=\"col-md-9\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "evaluation", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "individu", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "NOM & PRENOM"]);
        echo "
            <div class=\"col-md-9\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "individu", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "note", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "NOTE"]);
        echo "
            <div class=\"col-md-9\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "note", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "appreciation", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "APPRECIATION"]);
        echo "
            <div class=\"col-md-9\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "appreciation", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"  d-flex justify-content-around\">
                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saisir_note");
        echo "\" class=\"btn btn-secondary\">Fermer</a>
                <a href=\"\" class=\"btn btn-primary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-success\">Valider</button>
            </div>
        </div>

        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "saisir_note/form.html.twig";
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
        return array (  145 => 48,  136 => 42,  127 => 36,  122 => 34,  114 => 29,  109 => 27,  101 => 22,  96 => 20,  88 => 15,  83 => 13,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

<div id=\"\" class=\" d-flex justify-content-center mt-4\">
    <div class=\"w-50 bg-light shadow-lg p-3\">
        <h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
        <a href=\"\" id=\"modal_close\">
            <i class=\"fa fa-close\"></i>
        </a>
        {{ form_start(form, {'attr': {'class': 'text-center'}}) }}

        <div class=\"form-group row\">
            {{ form_label(form.evaluation, 'CODE', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
            <div class=\"col-md-9\">
                {{ form_widget(form.evaluation, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group row\">
            {{ form_label(form.individu, 'NOM & PRENOM', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
            <div class=\"col-md-9\">
                {{ form_widget(form.individu, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group row\">
            {{ form_label(form.note, 'NOTE', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
            <div class=\"col-md-9\">
                {{ form_widget(form.note, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group row\">
            {{ form_label(form.appreciation, 'APPRECIATION', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
            <div class=\"col-md-9\">
                {{ form_widget(form.appreciation, {'attr': {'class': 'form-control'}}) }}
            </div>
        </div>

        <div class=\"form-group row\">
            <div class=\"  d-flex justify-content-around\">
                <a href=\"{{path('app_saisir_note')}}\" class=\"btn btn-secondary\">Fermer</a>
                <a href=\"\" class=\"btn btn-primary\">Annuler</a>
                <button type=\"submit\" class=\"btn btn-success\">Valider</button>
            </div>
        </div>

        {{ form_end(form) }}
    </div>
</div>

{% endblock %}", "saisir_note/form.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/saisir_note/form.html.twig");
    }
}
