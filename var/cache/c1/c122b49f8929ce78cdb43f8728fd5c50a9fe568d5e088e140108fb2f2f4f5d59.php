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

/* detail_livre.html.twig */
class __TwigTemplate_4a6e1ce5931866ddb24a64b0373780087617303dbb52437f5a10027b8854972f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "detail_livre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Livre - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <h1>Detail du livre :<a href=\"?controller=Livre&action=showOneBook&param=";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></h1>

    <form name=\"Detail_Livre\" method=\"post\" action=\"?controller=Livre&action=ShowOneBook\">
        <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo "\"><br>
        <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "auteur", [], "any", false, false, false, 15), "html", null, true);
        echo "\"><br>
        <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "editeur", [], "any", false, false, false, 16), "html", null, true);
        echo "\"><br>
        <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "nb_pages", [], "any", false, false, false, 17), "html", null, true);
        echo "\"><br>
        <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "date_publication", [], "any", false, false, false, 18), "html", null, true);
        echo "\"><br>
        <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\" value =\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "livre_image", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
        <button  onclick=\"deleteConfirm(";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo ")\" id=\"deleteButton\">Supprimer</button>
        <input type=\"submit\" value=\"modifier\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "detail_livre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  72 => 11,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
{% endblock %}

{% block body %}

    <h1>Detail du livre :<a href=\"?controller=Livre&action=showOneBook&param={{ livre.id }}\">{{ livre.titre }}</a></h1>

    <form name=\"Detail_Livre\" method=\"post\" action=\"?controller=Livre&action=ShowOneBook\">
        <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" value=\"{{ livre.titre }}\"><br>
        <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\" value=\"{{ livre.auteur }}\"><br>
        <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\" value=\"{{ livre.editeur }}\"><br>
        <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" value=\"{{ livre.nb_pages }}\"><br>
        <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\" value=\"{{ livre.date_publication }}\"><br>
        <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\" value =\"{{ livre.livre_image }}\">
        <button  onclick=\"deleteConfirm({{ livre.id }})\" id=\"deleteButton\">Supprimer</button>
        <input type=\"submit\" value=\"modifier\">
    </form>
{% endblock %}

", "detail_livre.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\detail_livre.html.twig");
    }
}
