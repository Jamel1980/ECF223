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

/* saisir_note/index.html.twig */
class __TwigTemplate_255766885229bf9915c01fb155a99301 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisir_note/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "saisir_note/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "saisir_note/index.html.twig", 1);
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
        echo "<h1 class=\"title-lg text-center bg-secondary\">SAISIE EVALUATION TRIMESTRIELLE</h1>
<div class=\"eval-container bg-white\">
\t<div class=\"inner-container container-sm\">
\t\t<div class=\"form-container container-fluid\">
\t\t\t<form action=\"\" method=\"post\" class=\"form-container container-fluid\">
\t\t\t
\t\t\t\t<div class=\"form-group form-flex-half row\">
\t\t\t\t\t<label for=\"num\">Numero:</label>
\t\t\t\t\t<input type=\"text\" id=\"num\" class=\"form-control\" value=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"anneeScolaire\" class=\"col-12 col-md-5\">Année Scolaire:</label>
\t\t\t\t\t<input type=\"text\" id=\"anneeScolaire\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"trimestre\" class=\"col-12 col-md-5\">Trimestre:</label>
\t\t\t\t\t<input type=\"text\" id=\"trimestre\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"formateur\" class=\"col-12 col-md-5\">Formateur:</label>
\t\t\t\t\t<input type=\"text\" id=\"formateur\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"classe\" class=\"col-12 col-md-5\">Classe:</label>
\t\t\t\t\t<input type=\"text\" id=\"classe\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"matiere\" class=\"col-12 col-md-5\">Matière:</label>
\t\t\t\t\t<input type=\"text\" id=\"matiere\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div class=\"inner-container container-fluid\">
\t<div class=\"inner-container container-fluid\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered W100 container-fluid\">
\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t<th class=\"bg-dark text-light w5\"></th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-1\">CODE</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">NOM</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">PRENOM</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">NOTE</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-4\">APPRECIATION</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ligneEval"]) || array_key_exists("ligneEval", $context) ? $context["ligneEval"] : (function () { throw new RuntimeError('Variable "ligneEval" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 57
            echo "\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tname=\"check\" onclick=\"onlyOne(this)\"></td>
\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "individu", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "individu", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "note", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "appreciation", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t</tbody>
\t\t\t\t<tfoot id=\"tfooter_eval\" class=\"\">
\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t<th colspan=\"12\" class=\"text-center \">Moyenne de classe:</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t\t<a href=\"#modal_art\" id=\"show_modal_art\">Modal</a>
\t\t\t\t\t<a id=\"\" href=\"javascript:modifier()\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Importer</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Exporter vers Excel</a>
\t\t\t\t</div>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div id=\"modal_art\" class=\"\">
\t<div id=\"modal_art_content\">
\t\t<h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
\t\t<a href=\"\" id=\"modal_close\">
\t\t\t<i class=\"fa fa-close\"></i>
\t\t</a>
\t\t";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_start', ["attr" => ["class" => "text-center"]]);
        echo "

\t\t<div class=\"form-group row\">
\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "evaluation", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "CODE"]);
        echo "
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "evaluation", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "disabled" => "disabled"]]);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group row\">
\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "individu", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "NOM & PRENOM"]);
        echo "
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "individu", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "disabled" => "disabled"]]);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "note", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "NOTE"]);
        echo "
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "note", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "appreciation", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "col-form-label col-md-3"], "label" => "APPRECIATION"]);
        echo "
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "appreciation", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"  d-flex justify-content-around\">
\t\t\t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saisir_note");
        echo "\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Valider</button>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        echo "
\t</div>
</div>
";
        // line 130
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

        // line 131
        echo "<script>


\tconst modifier = () => {
\t
\t\tlet id = getIdChecked(\"check\");
\t\tif (id == 0) {
\t\t\talert('Sélectionner une ligne à modifier.');
\t\t} else {
\t\t\tconst url = \"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saisir_show", ["id" => "placeholder"]);
        echo "\";
\t\t\tconst newUrl = url.replace('placeholder', id);
\t\t\tdocument.location.href = newUrl;
\t\t\tshow_modal_art.click();
\t\t}
\t}

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "saisir_note/index.html.twig";
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
        return array (  310 => 140,  299 => 131,  280 => 130,  274 => 127,  265 => 121,  256 => 115,  251 => 113,  243 => 108,  238 => 106,  230 => 101,  225 => 99,  218 => 95,  213 => 93,  207 => 90,  183 => 68,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  150 => 58,  147 => 57,  143 => 56,  91 => 6,  81 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Evaluation Trimestrielle
{% endblock %}
{% block body %}
<h1 class=\"title-lg text-center bg-secondary\">SAISIE EVALUATION TRIMESTRIELLE</h1>
<div class=\"eval-container bg-white\">
\t<div class=\"inner-container container-sm\">
\t\t<div class=\"form-container container-fluid\">
\t\t\t<form action=\"\" method=\"post\" class=\"form-container container-fluid\">
\t\t\t
\t\t\t\t<div class=\"form-group form-flex-half row\">
\t\t\t\t\t<label for=\"num\">Numero:</label>
\t\t\t\t\t<input type=\"text\" id=\"num\" class=\"form-control\" value=\"\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"anneeScolaire\" class=\"col-12 col-md-5\">Année Scolaire:</label>
\t\t\t\t\t<input type=\"text\" id=\"anneeScolaire\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"trimestre\" class=\"col-12 col-md-5\">Trimestre:</label>
\t\t\t\t\t<input type=\"text\" id=\"trimestre\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"formateur\" class=\"col-12 col-md-5\">Formateur:</label>
\t\t\t\t\t<input type=\"text\" id=\"formateur\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"classe\" class=\"col-12 col-md-5\">Classe:</label>
\t\t\t\t\t<input type=\"text\" id=\"classe\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group form-flex row\">
\t\t\t\t\t<label for=\"matiere\" class=\"col-12 col-md-5\">Matière:</label>
\t\t\t\t\t<input type=\"text\" id=\"matiere\" class=\"form-select col-12 col-md-5\">
\t\t\t\t</div>

\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div class=\"inner-container container-fluid\">
\t<div class=\"inner-container container-fluid\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered W100 container-fluid\">
\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t<th class=\"bg-dark text-light w5\"></th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-1\">CODE</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">NOM</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">PRENOM</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-2\">NOTE</th>
\t\t\t\t\t\t<th class=\"bg-dark text-light col-4\">APPRECIATION</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t{% for line in ligneEval %}
\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-check-input\" id=\"{{line.id}}\" value=\"{{line.id}}\"
\t\t\t\t\t\t\t\tname=\"check\" onclick=\"onlyOne(this)\"></td>
\t\t\t\t\t\t<td>{{line.id}}</td>
\t\t\t\t\t\t<td>{{line.individu.nom}}</td>
\t\t\t\t\t\t<td>{{line.individu.prenom}}</td>
\t\t\t\t\t\t<td>{{line.note}}</td>
\t\t\t\t\t\t<td>{{line.appreciation}}</td>
\t\t\t\t\t</tr>

\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t\t<tfoot id=\"tfooter_eval\" class=\"\">
\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t<th colspan=\"12\" class=\"text-center \">Moyenne de classe:</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t\t<a href=\"#modal_art\" id=\"show_modal_art\">Modal</a>
\t\t\t\t\t<a id=\"\" href=\"javascript:modifier()\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Importer</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Exporter vers Excel</a>
\t\t\t\t</div>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
<div id=\"modal_art\" class=\"\">
\t<div id=\"modal_art_content\">
\t\t<h1 class=\"title text-dark\" id=\"client\">MODIFICATION NOTE</h1>
\t\t<a href=\"\" id=\"modal_close\">
\t\t\t<i class=\"fa fa-close\"></i>
\t\t</a>
\t\t{{ form_start(form, {'attr': {'class': 'text-center'}}) }}

\t\t<div class=\"form-group row\">
\t\t\t{{ form_label(form.evaluation, 'CODE', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{{ form_widget(form.evaluation, {'attr': {'class': 'form-control', 'disabled': 'disabled'}}) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group row\">
\t\t\t{{ form_label(form.individu, 'NOM & PRENOM', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{{ form_widget(form.individu, {'attr': {'class': 'form-control','disabled': 'disabled'}}) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t{{ form_label(form.note, 'NOTE', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{{ form_widget(form.note, {'attr': {'class': 'form-control'}}) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t{{ form_label(form.appreciation, 'APPRECIATION', {'label_attr': {'class': 'col-form-label col-md-3'}}) }}
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{{ form_widget(form.appreciation, {'attr': {'class': 'form-control'}}) }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group row\">
\t\t\t<div class=\"  d-flex justify-content-around\">
\t\t\t\t<a href=\"{{path('app_saisir_note')}}\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Valider</button>
\t\t\t</div>
\t\t</div>

\t\t{{ form_end(form) }}
\t</div>
</div>
{% block script %}
<script>


\tconst modifier = () => {
\t
\t\tlet id = getIdChecked(\"check\");
\t\tif (id == 0) {
\t\t\talert('Sélectionner une ligne à modifier.');
\t\t} else {
\t\t\tconst url = \"{{ path('app_saisir_show', {'id': 'placeholder'}) }}\";
\t\t\tconst newUrl = url.replace('placeholder', id);
\t\t\tdocument.location.href = newUrl;
\t\t\tshow_modal_art.click();
\t\t}
\t}

</script>
{% endblock %}
{% endblock %}", "saisir_note/index.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/saisir_note/index.html.twig");
    }
}
