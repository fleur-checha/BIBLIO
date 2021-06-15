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

/* AddBook.html.twig */
class __TwigTemplate_7b701b92e9812455c473b035188b6ff23ea826a916b08505ccd3a3122068701f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "AddBook.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajout Livre - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForBook.css\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h1>Ajout d'un livre</h1>

<form class=\"form-horizontal\" name=\"AddBook\" method=\"post\" action=\"?controller=Livre&action=AddBook\">
    <fieldset>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
                <input id=\"Titre\" class=\"form-control\" type=\"text\" name=\"titre\" placeholder=\"Titre\" required>
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Auteur\" class=\"form-control\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Editeur\" class=\"form-control\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Nb_pages\" class=\"form-control\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" required>
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Date_publication\" class=\"form-control\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Livre_image\" class=\"form-control\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\">
        </div>
        </div>
    <input type=\"submit\" class=\"btn btn-primary m-2\" value=\"Ajouter\">
        </fieldset>
    </form>
    ";
    }

    public function getTemplateName()
    {
        return "AddBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Ajout Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForBook.css\">
{% endblock %}

{% block body %}
<h1>Ajout d'un livre</h1>

<form class=\"form-horizontal\" name=\"AddBook\" method=\"post\" action=\"?controller=Livre&action=AddBook\">
    <fieldset>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
                <input id=\"Titre\" class=\"form-control\" type=\"text\" name=\"titre\" placeholder=\"Titre\" required>
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Auteur\" class=\"form-control\" type=\"text\" name=\"auteur\" placeholder=\"Auteur\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Editeur\" class=\"form-control\" type=\"text\" name=\"editeur\" placeholder=\"Editeur\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Nb_pages\" class=\"form-control\" type=\"number\" name=\"nb_pages\" placeholder=\"Nombre de pages\" required>
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Date_publication\" class=\"form-control\" type=\"date\" name=\"date_publication\" placeholder=\"Date de Publication\">
            </div>
        </div>
        <div class=\"form-group p-2\">
            <div class=\"col-lg-10\">
    <input id=\"Livre_image\" class=\"form-control\" type=\"text\" name=\"livre_image\" placeholder=\"lien image\">
        </div>
        </div>
    <input type=\"submit\" class=\"btn btn-primary m-2\" value=\"Ajouter\">
        </fieldset>
    </form>
    {% endblock %}

", "AddBook.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\addBook.html.twig");
    }
}
