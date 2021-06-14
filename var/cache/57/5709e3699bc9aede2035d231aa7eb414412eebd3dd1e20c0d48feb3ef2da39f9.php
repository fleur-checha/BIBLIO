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
class __TwigTemplate_ac639ddf68ae221b66be7f95cd24409eb921e720542fdb97d91b1d1be235bfda extends Template
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
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
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
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["livreList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 14
                echo "            <p>livre ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "titre", [], "any", false, false, false, 14), "html", null, true);
                echo "</p>
            <p>Auteur";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
            <button onclick=\"window.location.href= '?controller=Livre&action=getone&param=";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "'\">Detail</button>
            <button onclick=\"window.location.href= '?controller=Livre&action=updatebook&param=";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "'\">A Modifier</button>
            <form name=\"Detail_Livre\" method=\"post\" action=\"?controller=Livre&action=deleteBook&param=";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
                <button  onclick=\"deleteConfirm(";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livre"] ?? null), "id", [], "any", false, false, false, 19), "html", null, true);
                echo ")\" id=\"deleteButton\">Supprimer</button>
            </form>

            <hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        <h1>Détail de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lIVRE"] ?? null), "TITRE", [], "any", false, false, false, 25), "html", null, true);
            echo "</h1>
        <h2>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Livre"] ?? null), "AUTEUR", [], "any", false, false, false, 26), "html", null, true);
            echo "</h2>
    ";
        }
        // line 28
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
        return array (  126 => 28,  121 => 26,  116 => 25,  113 => 24,  102 => 19,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  81 => 14,  77 => 13,  74 => 12,  72 => 11,  69 => 10,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}

{% block title %}Livre - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForAccueil.css\">
{% endblock %}

{% block body %}

    {% if livreList is defined %}
        <h1>Liste des Livres</h1>
        {% for book in livreList %}
            <p>livre {{ book.titre }}</p>
            <p>Auteur{{ book.auteur }}</p>
            <button onclick=\"window.location.href= '?controller=Livre&action=getone&param={{ book.id }}'\">Detail</button>
            <button onclick=\"window.location.href= '?controller=Livre&action=updatebook&param={{ book.id }}'\">A Modifier</button>
            <form name=\"Detail_Livre\" method=\"post\" action=\"?controller=Livre&action=deleteBook&param={{ book.id }}\">
                <button  onclick=\"deleteConfirm({{ livre.id }})\" id=\"deleteButton\">Supprimer</button>
            </form>

            <hr>
        {% endfor %}
    {% else %}
        <h1>Détail de {{ lIVRE.TITRE }}</h1>
        <h2>{{ Livre.AUTEUR }}</h2>
    {% endif %}

{% endblock %}
{#        <div class=\"container\">#}
{#            <div class=\"row\">#}
{#                <div class=\"col-6\">#}
{#                    <img src=\"{{ movie.POSTER }}\" alt=\"Affiche du film {{ movie.NAME }}\">#}
{#                </div>#}
{#                <div class=\"col-6\">#}
{#                    <iframe width=\"595\" height=\"446\"#}
{#                            src=\"{{ movie.TRAILER }}?autoplay=1&mute=1\">#}
{#                    </iframe>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#        <p>Date de sortie: {{ movie.RELEASE_DATE }}</p>#}
{#        <p>{{ movie.SYNOPSIS }}</p>#}
{#        <hr>#}
{#        <table>#}
{#            <tbody>#}
{#            <tr>#}
{#                <td>Note : {{ totalRate }}#}
{#                    {% if totalRate == \"Non défini\" %}#}

{#                    {% elseif totalRate >= 10 %}#}
{#                        ⭐⭐⭐⭐⭐#}
{#                    {% elseif totalRate >= 8 %}#}
{#                        ⭐⭐⭐⭐#}
{#                    {% elseif totalRate >= 6 %}#}
{#                        ⭐⭐⭐#}
{#                    {% elseif totalRate >= 4 %}#}
{#                        ⭐⭐#}
{#                    {% elseif totalRate >= 2 %}#}
{#                        ⭐#}
{#                    {% endif %}#}
{#                </td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Origine : {{ movie.ORIGIN }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>VO : {{ movie.VO }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Acteurs : {{ movie.ACTORS }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Réalisateur : {{ movie.DIRECTOR }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Genre : {{ movie.GENRE }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Production : {{ movie.PRODUCTION }}</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Durée : {{ movie.RUNTIME }} minutes</td>#}
{#            </tr>#}
{#            <tr>#}
{#                <td>Nomination : {{ movie.NOMINATION }}</td>#}
{#            </tr>#}
{#            </tbody>#}
{#        </table>#}
{#        <hr>#}

{#        {% if infoMovieList is defined %}#}

{#            {% set commentOK = 0 %}#}
{#            {% for infoMovie in infoMovieList %}#}
{#                {% if (ID_SESSION == infoMovie.ID_USER)  %}#}

{#                    <h1>Liste des Commentaires</h1>#}

{#                    <h4>Note : {{ infoMovie.RATE }}</h4>#}
{#                    <p>{{ infoMovie.COMMENT }}</p>#}
{#                    <button class=\"btn btn-success\" onclick=\"window.location.href='/infomovie/editcomment/{{ infoMovie.ID_INFO }}'\">Modifier</button>#}
{#                    <button class=\"btn btn-danger\" onclick=\"deleteDetailConfirm({{ infoMovie.ID_INFO }})\" id=\"deleteButton\">Supprimer</button>#}
{#                    {% set commentOK = 1 %}#}
{#                {% endif %}#}

{#            {% endfor %}#}

{#            {% if commentOK == 0 and ID_SESSION != null%}#}
{#                <h2>Ajouter un commentaire</h2>#}
{#                <form name=\"addInfoMovie\" method=\"post\" action=\"/infomovie/addcomment/{{ movie.ID_MOVIE }}\">#}

{#                    <input id=\"Rate\" type=\"number\" step=\"0.1\" min=\"0\" max=\"10\" name=\"Rate\" placeholder=\"Note\" required><br><br>#}
{#                    <textarea id=\"Comment\" name=\"Comment\" placeholder=\"Commentaire\" rows=\"5\" cols=\"33\" required></textarea>#}
{#                    <input type=\"checkbox\" id=\"Share\" name=\"Share\">#}
{#                    <label for=\"Share\">actuellement prêté</label>#}
{#                    <input type=\"checkbox\" id=\"To_See\" name=\"To_See\" >#}
{#                    <label for=\"To_See\">A voir</label>#}
{#                    <button class=\"btn btn-primary\" id=\"btnAdComment\" type=\"submit\">Envoyer</button><br><br>#}

{#                </form>#}


{#                {% if infoMovieList != false %}#}
{#                    <h1>Liste des Commentaires</h1>#}
{#                {% endif %}#}

{#            {% endif %}#}

{#            {% for infoMovie in infoMovieList %}#}
{#                {% if (ID_SESSION != infoMovie.ID_USER)  %}#}
{#                    <h4>Note : {{ infoMovie.RATE }}</h4>#}
{#                    <p>{{ infoMovie.COMMENT }}</p>#}
{#                    {% if (IS_ADMIN == 1) %}#}
{#                        <button class=\"btn btn-danger\" onclick=\"deleteDetailConfirm({{ infoMovie.ID_INFO }})\" id=\"deleteButton\">Supprimer</button>#}
{#                    {% endif %}#}
{#                {% endif %}#}
{#                <hr>#}
{#            {% endfor %}#}
{#        {% endif %}#}

{#    {% endif %}#}
{#{% endblock %}#}

{#{% block javascript %}#}
{#<script src=\"/assets/js/listMovie.js\"></script>#}
{#<script src=\"/assets/js/listInfoMovie.js\"></script>#}
{#{% endblock %}#}
", "list.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\list.html.twig");
    }
}
