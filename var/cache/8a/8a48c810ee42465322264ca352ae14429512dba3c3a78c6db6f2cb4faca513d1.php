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

/* listAdmin.html.twig */
class __TwigTemplate_cd2468063898ae3cb53153c02d6c53ed5999bceeee2373486ff9e54eea9d13f0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "listAdmin.html.twig", 1);
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
        // line 11
        if (array_key_exists("livreList", $context)) {
            // line 12
            echo "        <h1>Liste des Livres</h1>
        <div class=\"d-grid gap-2\">
            <button onclick=\"window.location.href= '?controller=Livre&action=addbook'\" class=\"btn btn-lg btn-primary m-4\" type=\"button\">ajouter un livre</button>
        </div>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["livreList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 17
                echo "            <p>livre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
            <p>Auteur : ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
            <div class=\"row\">
            <button class=\"btn btn-info pull-right col-2 m-2\" onclick=\"window.location.href= '?controller=Livre&action=getone&param=";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "'\">Detail</button>
            <button class=\"btn btn-warning col-2 m-2\" onclick=\"window.location.href= '?controller=Livre&action=updatebook&param=";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "'\">A Modifier</button>
            <form class=\"col-2 m-2\" name=\"Detail_Livre \" method=\"post\" action=\"?controller=Livre&action=deleteBook&param=";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                <button  class=\"btn btn-danger\" onclick=\"deleteConfirm(";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "id", [], "any", false, false, false, 23), "html", null, true);
                echo ")\" id=\"deleteButton\">Supprimer</button>
            </form>
            </div>
            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        <h1>Détail de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lIVRE"] ?? null), "TITRE", [], "any", false, false, false, 29), "html", null, true);
            echo "</h1>
        <h2>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Livre"] ?? null), "AUTEUR", [], "any", false, false, false, 30), "html", null, true);
            echo "</h2>
    ";
        }
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "listAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  125 => 30,  120 => 29,  117 => 28,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 18,  84 => 17,  80 => 16,  74 => 12,  72 => 11,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForBook.css\">
{% endblock %}

{% block body %}

    {% if livreList is defined %}
        <h1>Liste des Livres</h1>
        <div class=\"d-grid gap-2\">
            <button onclick=\"window.location.href= '?controller=Livre&action=addbook'\" class=\"btn btn-lg btn-primary m-4\" type=\"button\">ajouter un livre</button>
        </div>
        {% for book in livreList %}
            <p>livre : {{ book.titre }}</p>
            <p>Auteur : {{ book.auteur }}</p>
            <div class=\"row\">
            <button class=\"btn btn-info pull-right col-2 m-2\" onclick=\"window.location.href= '?controller=Livre&action=getone&param={{ book.id }}'\">Detail</button>
            <button class=\"btn btn-warning col-2 m-2\" onclick=\"window.location.href= '?controller=Livre&action=updatebook&param={{ book.id }}'\">A Modifier</button>
            <form class=\"col-2 m-2\" name=\"Detail_Livre \" method=\"post\" action=\"?controller=Livre&action=deleteBook&param={{ book.id }}\">
                <button  class=\"btn btn-danger\" onclick=\"deleteConfirm({{ livre.id }})\" id=\"deleteButton\">Supprimer</button>
            </form>
            </div>
            <hr>
        {% endfor %}
    {% else %}
        <h1>Détail de {{ lIVRE.TITRE }}</h1>
        <h2>{{ Livre.AUTEUR }}</h2>
    {% endif %}

{% endblock %}
", "listAdmin.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\listAdmin.html.twig");
    }
}
