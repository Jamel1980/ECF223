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

/* individu/form.html.twig */
class __TwigTemplate_030d7d0aa2295a02bd431c13d597d184 extends Template
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
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "individu/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello EvalController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"d-flex justify-content-center mt-4\">
\t\t<div class=\"w-50 bg-light shadow-lg p-3\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "text_center"]]);
        echo "

\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "numeroMatricule", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "lab20 fw-bold col-12 col-md-3"], "label" => "Matricule"]);
        echo "
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "numeroMatricule", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control w-50", "placeholder" => "FOR001 si formateur,ELE001 si eleve"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "lab20 fw-bold col-12 col-md-3"], "label" => "NOM"]);
        echo "
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "col-12 col-md-3 fw-bold"], "label" => "PRENOM"]);
        echo "
\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "col-12 col-md-3 fw-bold"], "label" => "ADRESSE"]);
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "adresse", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "col-12 col-md-3 fw-bold"], "label" => "NUM TEL"]);
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telephone", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "typeindividu", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "col-12 col-md-3 fw-bold"], "label" => "ROLE IND"]);
        echo "
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "typeindividu", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "classe", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "col-12 col-md-3 fw-bold"], "label" => "CLASSE"]);
        echo "
\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "classe", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control w-50"]]);
        echo "
\t\t\t</div>
\t\t\t<!-- Add other fields similarly -->
\t\t\t<div class=\"d-flex justify-content-between mt-4\">
\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu");
        echo "\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Valider</button>
\t\t\t</div>
\t\t\t";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
\t";
        // line 52
        $this->displayBlock('script', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 53
        echo "\t\t<script>
\t\t\tconst show = () => {}

const creer = () => {
const url = \"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu_new", ["id" => 0]);
        echo "\";
document.location.href = url;
}
\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "individu/form.html.twig";
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
        return array (  213 => 57,  207 => 53,  188 => 52,  182 => 49,  175 => 45,  168 => 41,  164 => 40,  158 => 37,  154 => 36,  148 => 33,  144 => 32,  138 => 29,  134 => 28,  128 => 25,  124 => 24,  118 => 21,  114 => 20,  108 => 17,  104 => 16,  98 => 13,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EvalController!
{% endblock %}

{% block body %}
\t<div class=\"d-flex justify-content-center mt-4\">
\t\t<div class=\"w-50 bg-light shadow-lg p-3\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t{{ form_start(form, {'attr': {'class': 'text_center'}}) }}

\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.numeroMatricule, null, {'label_attr': {'class': 'lab20 fw-bold col-12 col-md-3'}, 'label': 'Matricule'}) }}
\t\t\t\t{{ form_widget(form.numeroMatricule, {'attr': {'class': 'form-control w-50','placeholder':'FOR001 si formateur,ELE001 si eleve'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.nom, null, {'label_attr': {'class': 'lab20 fw-bold col-12 col-md-3'}, 'label': 'NOM'}) }}
\t\t\t\t{{ form_widget(form.nom, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.prenom, null, {'label_attr': {'class': 'col-12 col-md-3 fw-bold'}, 'label': 'PRENOM'}) }}
\t\t\t\t{{ form_widget(form.prenom, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.adresse, null, {'label_attr': {'class': 'col-12 col-md-3 fw-bold'}, 'label': 'ADRESSE'}) }}
\t\t\t\t{{ form_widget(form.adresse, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.telephone, null, {'label_attr': {'class': 'col-12 col-md-3 fw-bold'}, 'label': 'NUM TEL'}) }}
\t\t\t\t{{ form_widget(form.telephone, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.typeindividu, null, {'label_attr': {'class': 'col-12 col-md-3 fw-bold'}, 'label': 'ROLE IND'}) }}
\t\t\t\t{{ form_widget(form.typeindividu, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t{{ form_label(form.classe, null, {'label_attr': {'class': 'col-12 col-md-3 fw-bold'}, 'label': 'CLASSE'}) }}
\t\t\t\t{{ form_widget(form.classe, {'attr': {'class': 'form-control w-50'}}) }}
\t\t\t</div>
\t\t\t<!-- Add other fields similarly -->
\t\t\t<div class=\"d-flex justify-content-between mt-4\">
\t\t\t\t<a href=\"{{ path('app_individu') }}\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Valider</button>
\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
\t{% block script %}
\t\t<script>
\t\t\tconst show = () => {}

const creer = () => {
const url = \"{{ path('app_individu_new',{'id':0}) }}\";
document.location.href = url;
}
\t\t</script>
\t{% endblock %}
{% endblock %}
", "individu/form.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/individu/form.html.twig");
    }
}
