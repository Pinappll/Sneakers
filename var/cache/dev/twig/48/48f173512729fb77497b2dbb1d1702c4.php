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

/* account/order.html.twig */
class __TwigTemplate_8e8c3bf4a7f3614191710fc0c757a432 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
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

        echo "Mes Commandes - Sneakers";
        
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
        echo "    <h1>Mes Commandes</h1>
    C'est dans cet espace que vous pourrez gérer toutes vos commandes.<br>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>

    ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 10, $this->source); })())) == 0)) {
            // line 11
            echo "        <p class=\"text-center\"  >
            Vous n'avez pas encore passer de commande sur le site Sneakers.
        </p>
    ";
        } else {
            // line 15
            echo "
        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 28
                echo "
                    <tr>
                        <td><span class=\"badge badge-secondary\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 30), "html", null, true);
                echo "</span></td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 31), "d/m/y"), "html", null, true);
                echo "</td>
                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 32)), "html", null, true);
                echo "</td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 33) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 33)) / 100), 2, ",", ","), "html", null, true);
                echo "</td>
                        <td class=\"text-right\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">Voir ma commande</a></td>


                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </tbody>
        </table>







    ";
        }
        // line 49
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  154 => 39,  143 => 34,  139 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 28,  119 => 27,  105 => 15,  99 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Commandes - Sneakers{% endblock %}

{% block content %}
    <h1>Mes Commandes</h1>
    C'est dans cet espace que vous pourrez gérer toutes vos commandes.<br>
    <a href=\"{{ path('account') }}\">Retour</a>

    {% if orders|length ==0 %}
        <p class=\"text-center\"  >
            Vous n'avez pas encore passer de commande sur le site Sneakers.
        </p>
    {% else %}

        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
                {% for order in orders %}

                    <tr>
                        <td><span class=\"badge badge-secondary\">{{ order.reference }}</span></td>
                        <td>{{ order.createdAt|date('d/m/y') }}</td>
                        <td>{{ order.orderDetails|length }}</td>
                        <td>{{ ((order.carrierPrice + order.getTotal)/100)|number_format(2,',',',') }}</td>
                        <td class=\"text-right\"><a href=\"{{ path('app_account_order_show', {'reference':order.reference}) }}\">Voir ma commande</a></td>


                    </tr>
                {% endfor %}
            </tbody>
        </table>







    {% endif %}



{% endblock %}
", "account/order.html.twig", "/home/valence/Cours/Examen/PPEWeb1/Sneakers/templates/account/order.html.twig");
    }
}
