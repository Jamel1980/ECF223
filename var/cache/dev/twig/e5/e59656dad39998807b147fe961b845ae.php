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

/* individu/index.html.twig */
class __TwigTemplate_63352e853af477f046f0d0d05d26e80c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "individu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "individu/index.html.twig", 1);
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
        echo "<h1 class=\"card-title text-center my-2\">INDIVIDU</h1>
\t<div class=\"eval-container bg-white\">
\t\t
\t\t<div class=\"inner-container\">
\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t<a id=\"show_modal_art\" href=\"javascript:creer()\" class=\"btn btn-dark btn-lg font-weigth-bold\">Créer</a>
\t\t\t\t<a href=\"javascript:show()\" class=\"btn btn-primary btn-lg font-weigth-bold\">Afficher</a>
\t\t\t\t<a href=\"javascript:modifier()\" class=\"btn btn-success btn-lg font-weigth-bold\">Modifier</a>
\t\t\t\t<a href=\"javascript:supprimer()\" class=\"btn btn-danger btn-lg font-weigth-bold\">Supprimer</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t\t<th class=\"bg-dark text-light w5\"></th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">MATRICULE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">NOM</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-3\">PRENOM</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">ADRESSE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-3 \">TELEPHONE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">C.LIBELLE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-2 \">ROLE LIBELLE</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["individus"]) || array_key_exists("individus", $context) ? $context["individus"] : (function () { throw new RuntimeError('Variable "individus" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["individu"]) {
            // line 33
            echo "\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" name=\"check\" onclick=\"onlyOne(this)\"></td>
\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "numeroMatricule", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "preNom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "adresse", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["individu"], "telephone", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["individu"], "classe", [], "any", false, false, false, 40), "libelle", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["individu"], "TypeIndividu", [], "any", false, false, false, 41), "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['individu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot id=\"tfooter_eval\">
\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t<th colspan=\"12\" class=\"text-center\">Total:</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"modal_art\">
\t\t<div id=\"modal_art_content\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Nouvelle Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t<div action=\"\" class=\"text_center\">
\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">Matricule</label>
\t\t\t\t\t<input type=\"text\" id=\"id\" name=\"\" value=\"\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM</label>
\t\t\t\t\t<input type=\"text\" id=\"numClient\" name=\"numClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">PRENOM</label>
\t\t\t\t\t<input type=\"text\" id=\"nomClient\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">ADRESSE</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">TELEPHONE</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">Classe</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">Role
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\" d-flex justify-content-between mt-4\">
\t\t\t\t\t<a href=\"\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Valider</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 98
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

        // line 99
        echo "\t\t<script>
\t\tconst show = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu');
\t\t} else {
\t\tconst url = \"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu_show", ["id" => "placeholder"]);
        echo "\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl;
\t\t}
\t\t}

\t\tconst creer = () => {
\t\tconst url = \"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu_new", ["id" => 0]);
        echo "\";
\t\tdocument.location.href = url;
\t\t}
\t\tconst modifier = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu à modifier');
\t\t} else {
\t\tconst url = \"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu_new", ["id" => "placeholder"]);
        echo "\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl;
\t\t}
\t\t}

\t\tconst supprimer = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu à supprimer');
\t\t} else {
\t\tconst response = confirm('Etes vous sur de vouloir supprimer?');
\t\tif (response) {
\t\tconst url = \"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_individu_delete", ["id" => "placeholder"]);
        echo "\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl
\t\t}

\t\t}
\t\t}
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
        return "individu/index.html.twig";
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
        return array (  283 => 133,  267 => 120,  256 => 112,  246 => 105,  238 => 99,  219 => 98,  163 => 44,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  124 => 34,  121 => 33,  117 => 32,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EvalController!
{% endblock %}

{% block body %}
<h1 class=\"card-title text-center my-2\">INDIVIDU</h1>
\t<div class=\"eval-container bg-white\">
\t\t
\t\t<div class=\"inner-container\">
\t\t\t<div class=\"buttons d-flex justify-content-between my-3\">
\t\t\t\t<a id=\"show_modal_art\" href=\"javascript:creer()\" class=\"btn btn-dark btn-lg font-weigth-bold\">Créer</a>
\t\t\t\t<a href=\"javascript:show()\" class=\"btn btn-primary btn-lg font-weigth-bold\">Afficher</a>
\t\t\t\t<a href=\"javascript:modifier()\" class=\"btn btn-success btn-lg font-weigth-bold\">Modifier</a>
\t\t\t\t<a href=\"javascript:supprimer()\" class=\"btn btn-danger btn-lg font-weigth-bold\">Supprimer</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t<thead class=\"bg-dark\">
\t\t\t\t\t\t<tr class=\" bg-danger inside bg-black\">
\t\t\t\t\t\t\t<th class=\"bg-dark text-light w5\"></th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">MATRICULE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">NOM</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-3\">PRENOM</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">ADRESSE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-3 \">TELEPHONE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-1 \">C.LIBELLE</th>
\t\t\t\t\t\t\t<th class=\"bg-dark text-light col-2 \">ROLE LIBELLE</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"tbody_eval\">
\t\t\t\t\t\t{% for individu in individus %}
\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"form-check-input\" id=\"{{individu.id}}\" value=\"{{individu.id}}\" name=\"check\" onclick=\"onlyOne(this)\"></td>
\t\t\t\t\t\t\t\t<td>{{individu.numeroMatricule}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.preNom}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.adresse}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.telephone}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.classe.libelle}}</td>
\t\t\t\t\t\t\t\t<td>{{individu.TypeIndividu.libelle}}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot id=\"tfooter_eval\">
\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t<th colspan=\"12\" class=\"text-center\">Total:</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"modal_art\">
\t\t<div id=\"modal_art_content\">
\t\t\t<h1 class=\"title text-dark\" id=\"client\">Nouvelle Individu</h1>
\t\t\t<a href=\"\" id=\"modal_close\">
\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t</a>
\t\t\t<div action=\"\" class=\"text_center\">
\t\t\t\t<div class=\"zone_saisie my-2 row\">
\t\t\t\t\t<label for=\"\" class=\"lab20 fw-bold col-12 col-md-3\">Matricule</label>
\t\t\t\t\t<input type=\"text\" id=\"id\" name=\"\" value=\"\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"numClient\" class=\"col-12 col-md-3\">NOM</label>
\t\t\t\t\t<input type=\"text\" id=\"numClient\" name=\"numClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">PRENOM</label>
\t\t\t\t\t<input type=\"text\" id=\"nomClient\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">ADRESSE</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">TELEPHONE</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">Classe</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\"zone_saisie my-2 fw-bold row \">
\t\t\t\t\t<label for=\"nomClient\" class=\"col-12 col-md-3\">Role
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"text\" id=\"\" name=\"nomClient\" class=\"form-control w-50\">
\t\t\t\t</div>
\t\t\t\t<div class=\" d-flex justify-content-between mt-4\">
\t\t\t\t\t<a href=\"\" class=\"btn btn-secondary\">Fermer</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-primary\">Annuler</a>
\t\t\t\t\t<a href=\"\" class=\"btn btn-success\">Valider</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% block script %}
\t\t<script>
\t\tconst show = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu');
\t\t} else {
\t\tconst url = \"{{ path('app_individu_show', {'id': 'placeholder'}) }}\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl;
\t\t}
\t\t}

\t\tconst creer = () => {
\t\tconst url = \"{{ path('app_individu_new',{'id':0}) }}\";
\t\tdocument.location.href = url;
\t\t}
\t\tconst modifier = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu à modifier');
\t\t} else {
\t\tconst url = \"{{ path('app_individu_new',{'id':'placeholder'}) }}\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl;
\t\t}
\t\t}

\t\tconst supprimer = () => {
\t\tlet id = getIdChecked('check');
\t\tif (id == 0) {
\t\talert('Merci de sélectionner un individu à supprimer');
\t\t} else {
\t\tconst response = confirm('Etes vous sur de vouloir supprimer?');
\t\tif (response) {
\t\tconst url = \"{{ path('app_individu_delete',{'id':'placeholder'}) }}\";
\t\tconst newUrl = url.replace('placeholder', id);
\t\tdocument.location.href = newUrl
\t\t}

\t\t}
\t\t}
\t\t</script>
\t{% endblock %}
{% endblock %}
", "individu/index.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/individu/index.html.twig");
    }
}
