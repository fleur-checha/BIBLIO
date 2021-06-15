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
            'javascript' => [$this, 'block_javascript'],
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
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForBook.css\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
";
        // line 12
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <img src=\"/images/";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "livre_image", [], "any", false, false, false, 16), "html", null, true);
        echo "\" alt=\"Couverture du Livre ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-6\" >
        <p> Titre du livre : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "titre", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
        <p> Auteur : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "auteur", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
        <p>Editeur : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "editeur", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
        <p>Nb_pages : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "nb_pages", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
        <p>Date de publication : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "date_publication", [], "any", false, false, false, 23), "html", null, true);
        echo " </p>
        </div>

";
    }

    // line 28
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <script src=\"/assets/js/detail_livre.js\"></script>
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
        return array (  117 => 29,  113 => 28,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  81 => 16,  73 => 12,  70 => 10,  66 => 9,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForBook.css\">
{% endblock %}

{% block body %}

{#    <h1>Detail du livre :<a href=\"?controller=Livre&action=getOne&param={{ livre.id }}\">{{ livre.titre }}</a></h1>#}
    <h1>{{ livre.titre }}</h1>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <img src=\"/images/{{ livre.livre_image }}\" alt=\"Couverture du Livre {{ livre.titre }}\">
        </div>
        <div class=\"col-6\" >
        <p> Titre du livre : {{ livre.titre }}</p>
        <p> Auteur : {{ livre.auteur }}</p>
        <p>Editeur : {{ livre.editeur }}</p>
        <p>Nb_pages : {{ livre.nb_pages }}</p>
        <p>Date de publication : {{ livre.date_publication }} </p>
        </div>

{% endblock %}

{% block javascript %}
    <script src=\"/assets/js/detail_livre.js\"></script>
{% endblock %}

", "detail_livre.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\detail_livre.html.twig");
    }
}
