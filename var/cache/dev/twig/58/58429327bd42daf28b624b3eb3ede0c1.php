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

/* account/adress.html.twig */
class __TwigTemplate_c09273a47505147840ddc45e38a7f83f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/adress.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/adress.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/adress.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Adresses - Sneakers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_adress");
        echo "\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
    <h1>Mes Adresses</h1>
    C'est dans cet espace que vous pourrez gérer toutes vos adresses.<br>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
    <hr>
    ";
        // line 11
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "adresses", [], "any", false, false, false, 11)) == 0)) {
            // line 12
            echo "    <p class=\"text-center\"  >
        Vous n'avez pas encore ajouter d'adresse à votre compte client. Pour en ajouter une veuillez <a href=\"\">cliquer ici</a>.
    </p>
    ";
        } else {
            // line 16
            echo "

        <div class=\"row\">
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "adresses", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["adress"]) {
                // line 20
                echo "                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "name", [], "any", false, false, false, 24), "html", null, true);
                echo "</h5>
                            <p class=\"card-text\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "adress", [], "any", false, false, false, 25), "html", null, true);
                echo ", <br>
                            ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "postal", [], "any", false, false, false, 26), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "city", [], "any", false, false, false, 26), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adress"], "country", [], "any", false, false, false, 26), "html", null, true);
                echo "
                            </p>
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_adress", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Modifier</a> | <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_adress", ["id" => twig_get_attribute($this->env, $this->source, $context["adress"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Supprimer</a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </div>



    ";
        }
        // line 38
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/adress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 38,  153 => 33,  140 => 28,  131 => 26,  127 => 25,  123 => 24,  117 => 20,  113 => 19,  108 => 16,  102 => 12,  100 => 11,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Adresses - Sneakers{% endblock %}

{% block content %}
    <a href=\"{{ path('app_add_adress') }}\" class=\"btn btn-info btn-sm float-right\">Ajouter une adresse</a>
    <h1>Mes Adresses</h1>
    C'est dans cet espace que vous pourrez gérer toutes vos adresses.<br>
    <a href=\"{{ path('account') }}\">Retour</a>
    <hr>
    {% if app.user.adresses|length ==0 %}
    <p class=\"text-center\"  >
        Vous n'avez pas encore ajouter d'adresse à votre compte client. Pour en ajouter une veuillez <a href=\"\">cliquer ici</a>.
    </p>
    {% else %}


        <div class=\"row\">
            {% for adress in app.user.adresses %}
                <div class=\"col-md-4\">
                    <div class=\"card\" style=\"width: 18rem;\">
                        <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ adress.name }}</h5>
                            <p class=\"card-text\">{{ adress.adress }}, <br>
                            {{ adress.postal }} - {{ adress.city }} - {{ adress.country }}
                            </p>
                            <a href=\"{{ path('app_edit_adress', {'id': adress.id}) }}\">Modifier</a> | <a href=\"{{ path('app_delete_adress', {'id' : adress.id}) }}\">Supprimer</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>



    {% endif %}



{% endblock %}
", "account/adress.html.twig", "/Users/joshua/Desktop/PPE Web/Sneakers/templates/account/adress.html.twig");
    }
}
