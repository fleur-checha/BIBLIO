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

/* updateBook.html.twig */
class __TwigTemplate_000c20f97b854713676982703c825709fc59d0717e5f696fdcd327963b11b75e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "updateBook.html.twig", 1);
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
        echo "    <h1>Modification de : <a href=\"?controller=Livre&action=UpdateBook&param=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></h1>

    <form name=\"UpdateLivre\" method=\"post\" action=\"?controller=Livre&action=UpdateBook\">
        <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "auteur", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "editeur", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "nb_pages", [], "any", false, false, false, 16), "html", null, true);
        echo "\" >
        <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "date_publication", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["livre_image"] ?? null), "html", null, true);
        echo "\">
        <input type=\"submit\" value=\"Modifier\">

    </form>
";
    }

    public function getTemplateName()
    {
        return "updateBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  94 => 17,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
{% endblock %}

{% block body %}
    <h1>Modification de : <a href=\"?controller=Livre&action=UpdateBook&param={{ livre.id }}\">{{ livre.titre }}</a></h1>

    <form name=\"UpdateLivre\" method=\"post\" action=\"?controller=Livre&action=UpdateBook\">
        <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" value=\"{{ livre.titre }}\">
        <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\" value=\"{{ livre.auteur }}\">
        <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\" value=\"{{ livre.editeur }}\">
        <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" value=\"{{ livre.nb_pages }}\" >
        <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\" value=\"{{ livre.date_publication}}\">
        <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\" value=\"{{ livre_image}}\">
        <input type=\"submit\" value=\"Modifier\">

    </form>
{% endblock %}

", "updateBook.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\updateBook.html.twig");
    }
}
