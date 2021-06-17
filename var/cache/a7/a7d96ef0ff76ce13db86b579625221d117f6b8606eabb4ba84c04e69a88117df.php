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

/* user/connexion.html.twig */
class __TwigTemplate_aeb9479776fae7e6d090bc172de7e6dff6bba7d836d4d63b2b5d59b9f12f759e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/connexion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "User - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForUser.css\">
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h2>Connexion</h2>
    <form name=\"AddUser\" method=\"post\" action=\"?controller=User&action=LoginUser\">
        <fieldset>
            <div class=\"form-group\">
                <label for=\"email\" class=\"form-label mt-4\">Email</label>
                <input type=\"email\" name=\"mail\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"votre email\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"password\" class=\"form-label mt-4\">Mot de Passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"emailHelp\" placeholder=\"votre mot de passe\"required>
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <button type=\"submit\" id=\"buttonInscription\" class=\"btn btn-primary\">Se connecter</button>
    </form>
        </fieldset>
        <fieldset>
            <div class=\"form-group\">
                <label for=\"createLogin\" class=\"col-sm-2 col-form-label\">Pas encore inscrit? </label>
                <div class=\"col-sm-10\">
                    <button id=\"createLogin\" class=\"btn btn-primary\" onclick=\"window.location.href= '?controller=User&action=adduser'\">Créer un login</button>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "user/connexion.html.twig";
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

{% block title %}User - {{ parent() }}{% endblock %}

{% block css %}
    <link rel=\"stylesheet\" href=\"/assets/css/mystyleForUser.css\">
{% endblock %}

{% block body %}
<h2>Connexion</h2>
    <form name=\"AddUser\" method=\"post\" action=\"?controller=User&action=LoginUser\">
        <fieldset>
            <div class=\"form-group\">
                <label for=\"email\" class=\"form-label mt-4\">Email</label>
                <input type=\"email\" name=\"mail\" class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"votre email\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"password\" class=\"form-label mt-4\">Mot de Passe</label>
                <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password\" aria-describedby=\"emailHelp\" placeholder=\"votre mot de passe\"required>
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <button type=\"submit\" id=\"buttonInscription\" class=\"btn btn-primary\">Se connecter</button>
    </form>
        </fieldset>
        <fieldset>
            <div class=\"form-group\">
                <label for=\"createLogin\" class=\"col-sm-2 col-form-label\">Pas encore inscrit? </label>
                <div class=\"col-sm-10\">
                    <button id=\"createLogin\" class=\"btn btn-primary\" onclick=\"window.location.href= '?controller=User&action=adduser'\">Créer un login</button>
                </div>
            </div>
{% endblock %}
", "user/connexion.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\user\\connexion.html.twig");
    }
}
