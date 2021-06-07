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

/* addBook.html.twig */
class __TwigTemplate_79ed7d1d3bcb910cf6442196a26450ab5b0874d037b43508737de17c3c5a8b3f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "addBook.html.twig", 1);
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
        echo "<h1>Ajout d'un livre</h1>
<<<<<<< HEAD

<form name=\"addLivre\" method=\"post\" action=\"?controller=Livre&action=AddLivre\">
    <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" required>
    <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\">
    <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\">
    <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" required>
    <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\">
    <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\">
    <input type=\"submit\" value=\"Submit Livre\">
    =======
";
        // line 44
        echo "    </form>
    ";
    }

    public function getTemplateName()
    {
        return "addBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
{% endblock %}

{% block body %}
<h1>Ajout d'un livre</h1>
<<<<<<< HEAD

<form name=\"addLivre\" method=\"post\" action=\"?controller=Livre&action=AddLivre\">
    <input id=\"Titre\" type=\"text\" name=\"titre\" placeholder=\"Titre\" required>
    <input id=\"Auteur\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\">
    <input id=\"Editeur\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\">
    <input id=\"Nb_pages\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" required>
    <input id=\"Date_publication\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\">
    <input id=\"Livre_image\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\">
    <input type=\"submit\" value=\"Submit Livre\">
    =======
{#    <form name=\"addMovie\" method=\"post\" action=\"?controller=Movie&action=AddMovie\">#}
{#        <label for=\"Name\">Name</label><input class=\"form-control\" id=\"Name\" type=\"text\" name=\"Name\" placeholder=\"Name\" required>#}
{#        <label for=\"Poster\">Poster</label><input class=\"form-control\" id=\"Poster\" type=\"text\" name=\"Poster\" placeholder=\"Link Poster\" required>#}
{#        <label for=\"Trailer\">Trailer</label><input class=\"form-control\" id=\"Trailer\" type=\"text\" name=\"Trailer\" placeholder=\"Link Trailer\">#}
{#        <label for=\"Origin\">Origin</label><input class=\"form-control\" id=\"Origin\" type=\"text\" name=\"Origin\" placeholder=\"Origin\">#}
{#        <label for=\"VO\">VO</label><input class=\"form-control\" id=\"VO\" type=\"text\" name=\"VO\" placeholder=\"VO\">#}
{#        <label for=\"Genre\">Genre</label><input class=\"form-control\" id=\"Genre\" type=\"text\" name=\"Genre\" placeholder=\"Genre\">#}
{#        <label for=\"ReleaseDate\">ReleaseDate</label><input class=\"form-control\" id=\"ReleaseDate\" type=\"date\" name=\"ReleaseDate\" placeholder=\"ReleaseDate\">#}
{#        <label for=\"Runtime\">Runtime</label><input class=\"form-control\" id=\"Runtime\" type=\"number\" name=\"Runtime\" placeholder=\"Runtime\" required>#}
{#        <label for=\"Actors\">Actors</label><input class=\"form-control\" id=\"Actors\" type=\"text\" name=\"Actors\" placeholder=\"Actors\">#}
{#        <label for=\"Director\">Director</label><input class=\"form-control\" id=\"Director\" type=\"text\" name=\"Director\" placeholder=\"Director\">#}
{#        <label for=\"Production\">Production</label><input class=\"form-control\" id=\"Production\" type=\"text\" name=\"Production\" placeholder=\"Production\">#}
{#        <label for=\"Nomination\">Nomination</label><input class=\"form-control\" id=\"Nomination\" type=\"text\" name=\"Nomination\" placeholder=\"Nomination\">#}
{#        <label for=\"Synopsis\">Synopsis</label><input class=\"form-control\" id=\"Synopsis\" type=\"text\" name=\"Synopsis\" placeholder=\"Synopsis\" required>#}
{#        <input id=\"DVD\" name=\"DVD\" type=\"checkbox\" class=\"checkbox\">#}
{#        <label for=\"DVD\">Dispo en DVD</label>#}
{#        <div class=\"form-row\">#}
{#            <div class=\"col\">#}
{#                <button class=\"btn btn-primary mb-2\" type=\"submit\">Submit Movie</button>#}
{#            </div>#}
{#        </div>#}
{#        >>>>>>> 7c7f4d79fe1f1b0b511b93b13fdc98acfdd92e9d#}
    </form>
    {% endblock %}

", "addBook.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\addBook.html.twig");
    }
}
