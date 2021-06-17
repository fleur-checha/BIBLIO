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

/* list.html.twig */
class __TwigTemplate_45a382651c82ec19159090557f0aaeee48b49c6af27e85b307b59116fbb05bd5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
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
            echo "        <h1 style=\"text-align: center; margin: 1em\">Liste des Livres</h1>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["livreList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 14
                echo "            <p id=\"intitule\">Livre  : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
            <p id=\"intitule\">Auteur  : ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
            <button class=\"btn btn-info\" onclick=\"window.location.href= '?controller=Livre&action=getone&param=";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "'\">Detail</button>
            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        <h1>Détail de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lIVRE"] ?? null), "TITRE", [], "any", false, false, false, 20), "html", null, true);
            echo "</h1>
        <h2>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Livre"] ?? null), "AUTEUR", [], "any", false, false, false, 21), "html", null, true);
            echo "</h2>
    ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  107 => 21,  102 => 20,  99 => 19,  90 => 16,  86 => 15,  81 => 14,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
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
        <h1 style=\"text-align: center; margin: 1em\">Liste des Livres</h1>
        {% for book in livreList %}
            <p id=\"intitule\">Livre  : {{ book.titre }}</p>
            <p id=\"intitule\">Auteur  : {{ book.auteur }}</p>
            <button class=\"btn btn-info\" onclick=\"window.location.href= '?controller=Livre&action=getone&param={{ book.id }}'\">Detail</button>
            <hr>
        {% endfor %}
    {% else %}
        <h1>Détail de {{ lIVRE.TITRE }}</h1>
        <h2>{{ Livre.AUTEUR }}</h2>
    {% endif %}

{% endblock %}", "list.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\list.html.twig");
    }
}
