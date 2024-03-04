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

/* eval/index.html.twig */
class __TwigTemplate_446735f1688635b6019edc9c466c8d00 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eval/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eval/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eval/index.html.twig", 1);
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
        echo "<h1 class=\"card-title text-center my-2\">LISTE EVALUATION TRIMESTRIELLE</h1>
<div class=\"eval-container bg-white\">
    <div class=\"inner-container\">
        <div class=\"buttons d-flex justify-content-between my-3\">
            <a href=\"javascript:ajouter()\" class=\"btn btn-dark btn-lg font-weigth-bold\">Créer</a>
            <a href=\"javascript:show()\" class=\"btn btn-primary btn-lg font-weigth-bold\">Afficher</a>
            <a href=\"javascript:modify()\" class=\"btn btn-success btn-lg font-weigth-bold\">Modifier</a>
            <a href=\"javascript:saisieNote()\" class=\"btn btn-warning btn-lg font-weigth-bold\">Saisie note et appreciation</a>
            <a href=\"javascript:supprimer()\" class=\"btn btn-danger btn-lg font-weigth-bold\">Supprimer</a>
        </div>


        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead class=\"bg-dark\">
                    <tr class=\" bg-danger inside bg-black\">
                        <th class=\"bg-dark text-light w5\"></th>
                        <th class=\"bg-dark text-light col-1 \">ANNEE SCOLAIRE</th>
                        <th class=\"bg-dark text-light col-1 \">TRIMESTRE</th>
                        <th class=\"bg-dark text-light col-3\">N° EVALUATION</th>
                        <th class=\"bg-dark text-light col-1 \">DATE EVALUATION</th>
                        <th class=\"bg-dark text-light col-3 \">FORMATEUR</th>
                        <th class=\"bg-dark text-light col-1 \">CLASSE</th>
                        <th class=\"bg-dark text-light col-2 \">MATIERE</th>
                    </tr>
                </thead>
                <tbody id=\"tbody_eval\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 35
            echo "                    <tr class=\"text-center\">
                        <td><input type=\"checkbox\" name=\"check\" class=\"form-check-input\" id=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
                                value=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" onclick=\"onlyOne(this)\"></td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "trimestre", [], "any", false, false, false, 38), "anneescolaire", [], "any", false, false, false, 38), "code", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "trimestre", [], "any", false, false, false, 39), "libelle", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "numero", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "dateEvaluation", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "individu", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "individu", [], "any", false, false, false, 43), "classe", [], "any", false, false, false, 43), "libelle", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["line"], "matiere", [], "any", false, false, false, 44), "libelle", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
";
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
        echo "<script>

    const saisieNote = () => {
        {
            const url = \"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_saisir_note");
        echo "\";
            document.location.href = url;
        }
    }
    const ajouter = () => {
        const url = \"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eval_new", ["id" => 0]);
        echo "\";
        document.location.href = url;
    }

    const modify = () => {
        alert('Bonjour');
    }

    const supprimer = () => {
        let id = getIdChecked('check');
        if (id == 0) {
            alert('Selectionner une ligne');
        } else {
            let response = confirm('Etes vous sur de vouloir supprimer? ');
            if (response) {
                const url = \"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eval_delete", ["id" => "placeholder"]);
        echo "\";
                const newUrl = url.replace('placeholder', id);
                document.location.href = newUrl;
            }
        }
    }
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
        return "eval/index.html.twig";
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
        return array (  225 => 77,  207 => 62,  199 => 57,  193 => 53,  174 => 52,  167 => 47,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  123 => 35,  119 => 34,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EvalController!
{% endblock %}

{% block body %}
<h1 class=\"card-title text-center my-2\">LISTE EVALUATION TRIMESTRIELLE</h1>
<div class=\"eval-container bg-white\">
    <div class=\"inner-container\">
        <div class=\"buttons d-flex justify-content-between my-3\">
            <a href=\"javascript:ajouter()\" class=\"btn btn-dark btn-lg font-weigth-bold\">Créer</a>
            <a href=\"javascript:show()\" class=\"btn btn-primary btn-lg font-weigth-bold\">Afficher</a>
            <a href=\"javascript:modify()\" class=\"btn btn-success btn-lg font-weigth-bold\">Modifier</a>
            <a href=\"javascript:saisieNote()\" class=\"btn btn-warning btn-lg font-weigth-bold\">Saisie note et appreciation</a>
            <a href=\"javascript:supprimer()\" class=\"btn btn-danger btn-lg font-weigth-bold\">Supprimer</a>
        </div>


        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <thead class=\"bg-dark\">
                    <tr class=\" bg-danger inside bg-black\">
                        <th class=\"bg-dark text-light w5\"></th>
                        <th class=\"bg-dark text-light col-1 \">ANNEE SCOLAIRE</th>
                        <th class=\"bg-dark text-light col-1 \">TRIMESTRE</th>
                        <th class=\"bg-dark text-light col-3\">N° EVALUATION</th>
                        <th class=\"bg-dark text-light col-1 \">DATE EVALUATION</th>
                        <th class=\"bg-dark text-light col-3 \">FORMATEUR</th>
                        <th class=\"bg-dark text-light col-1 \">CLASSE</th>
                        <th class=\"bg-dark text-light col-2 \">MATIERE</th>
                    </tr>
                </thead>
                <tbody id=\"tbody_eval\">
                    {% for line in evaluation %}
                    <tr class=\"text-center\">
                        <td><input type=\"checkbox\" name=\"check\" class=\"form-check-input\" id=\"{{line.id}}\"
                                value=\"{{line.id}}\" onclick=\"onlyOne(this)\"></td>
                        <td>{{line.trimestre.anneescolaire.code}}</td>
                        <td>{{line.trimestre.libelle}}</td>
                        <td>{{line.numero}}</td>
                        <td>{{ line.dateEvaluation|date('Y-m-d') }}</td>
                        <td>{{line.individu.nom}}</td>
                        <td>{{line.individu.classe.libelle}}</td>
                        <td>{{line.matiere.libelle}}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% block script %}
<script>

    const saisieNote = () => {
        {
            const url = \"{{ path('app_saisir_note') }}\";
            document.location.href = url;
        }
    }
    const ajouter = () => {
        const url = \"{{ path('app_eval_new',{'id':0}) }}\";
        document.location.href = url;
    }

    const modify = () => {
        alert('Bonjour');
    }

    const supprimer = () => {
        let id = getIdChecked('check');
        if (id == 0) {
            alert('Selectionner une ligne');
        } else {
            let response = confirm('Etes vous sur de vouloir supprimer? ');
            if (response) {
                const url = \"{{ path('app_eval_delete',{'id':    'placeholder'}) }}\";
                const newUrl = url.replace('placeholder', id);
                document.location.href = newUrl;
            }
        }
    }
</script>
{% endblock %}
{% endblock %}", "eval/index.html.twig", "/Users/mabookair/Desktop/ecf_3/templates/eval/index.html.twig");
    }
}
