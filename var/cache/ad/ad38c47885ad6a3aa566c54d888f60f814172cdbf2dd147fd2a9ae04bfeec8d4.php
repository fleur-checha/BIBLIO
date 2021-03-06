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

/* base.html.twig */
class __TwigTemplate_0d8d7361ffab39321e996d2c8515fbcb17337a62c1219a8895344210febec36f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\">
    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 10
        echo "
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">BIBLIO</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"?controller=livre&action=index\">Accueil
";
        // line 27
        echo "                    </a>
                </li>
                <li class=\"nav-item\">
                    ";
        // line 30
        if ((($context["session"] ?? null) == 0)) {
            // line 31
            echo "                    <a class=\"nav-link\" href=\"?controller=livre&action=list\">Livres</a>
                    ";
        } else {
            // line 33
            echo "                    <a class=\"nav-link\" href=\"?controller=livre&action=listAdmin\">Livres Admin</a>
                    ";
        }
        // line 35
        echo "                </li>
            </ul>

                ";
        // line 38
        if ((($context["isOnline"] ?? null) == false)) {
            // line 39
            echo "                <button class=\"btn btn-secondary my-2 my-sm-0\" onclick=\"window.location.href= '/?controller=User&action=LoginUser'\">Login</button>
                ";
        } else {
            // line 41
            echo "                <button class=\"btn btn-secondary my-2 my-sm-0\" onclick=\"window.location.href= '/?controller=User&action=LogoutUser'\">Logout</button>
                ";
        }
        // line 43
        echo "        </div>
    </div>
</nav>
<div class=\"container\">

    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
";
        // line 53
        $this->displayBlock('script', $context, $blocks);
        // line 54
        echo "</body>
</html>";
    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BIBLIOTHEQUE ";
    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 48,  132 => 11,  126 => 9,  121 => 54,  119 => 53,  113 => 49,  111 => 48,  104 => 43,  100 => 41,  96 => 39,  94 => 38,  89 => 35,  85 => 33,  81 => 31,  79 => 30,  74 => 27,  56 => 11,  53 => 10,  51 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\">
    {% block css %}{% endblock %}

    <title>{% block title %}BIBLIOTHEQUE {% endblock %}</title>

</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">BIBLIO</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"?controller=livre&action=index\">Accueil
{#                        <span class=\"visually-hidden\">(current)</span>#}
                    </a>
                </li>
                <li class=\"nav-item\">
                    {% if session  == 0 %}
                    <a class=\"nav-link\" href=\"?controller=livre&action=list\">Livres</a>
                    {% else %}
                    <a class=\"nav-link\" href=\"?controller=livre&action=listAdmin\">Livres Admin</a>
                    {% endif %}
                </li>
            </ul>

                {% if isOnline == false %}
                <button class=\"btn btn-secondary my-2 my-sm-0\" onclick=\"window.location.href= '/?controller=User&action=LoginUser'\">Login</button>
                {% else %}
                <button class=\"btn btn-secondary my-2 my-sm-0\" onclick=\"window.location.href= '/?controller=User&action=LogoutUser'\">Logout</button>
                {% endif %}
        </div>
    </div>
</nav>
<div class=\"container\">

    {% block body %}{% endblock %}

</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
{% block script %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp2\\htdocs\\BIBLIO\\Templates\\base.html.twig");
    }
}
