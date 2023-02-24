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

/* order/add.html.twig */
class __TwigTemplate_a4c108913c244ac2082508afcb4149d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ma commande - Snekers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifier vos informations avant de payer vos commandes.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                ";
        // line 17
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "
            </div>



           <hr>
           <strong>Mon transporteur</strong>
            <div class=\"form-check\">
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "<br>
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 26, $this->source); })()), "Description", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27) / 100), 2, ",", "."), "html", null, true);
        echo " €
            </div>


        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
            </div>

            <div class=\"order-summary\">
                ";
        // line 38
        $context["total"] = null;
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 40
            echo "                    <div class=\"row ";
            if (($context["key"] > 0)) {
                echo " mt-2";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "illustration", [], "any", false, false, false, 42), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\" height=\"75px\" >
                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "<br>
                            <small>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "subtitle", [], "any", false, false, false, 46), "html", null, true);
            echo "
                                <br>
                            x";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            ";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)) / 100), 2, ",", "."), "html", null, true);
            echo "€
                        </div>
                    </div>
                    ";
            // line 54
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
            <hr>
            <strong>Sous-total :</strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
            <strong>Livraison :</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 59, $this->source); })()), "price", [], "any", false, false, false, 59) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total :</strong><br> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 61, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_create_session", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 62, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3 mb-4\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 62, $this->source); })()), "price", [], "any", false, false, false, 62)) / 100), 2, ",", "."), "html", null, true);
        echo "€</a>

        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 62,  217 => 61,  212 => 59,  208 => 58,  204 => 56,  198 => 55,  196 => 54,  190 => 51,  184 => 48,  179 => 46,  175 => 45,  167 => 42,  159 => 40,  154 => 39,  152 => 38,  138 => 27,  134 => 26,  130 => 25,  119 => 17,  110 => 10,  100 => 9,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Ma commande - Snekers{% endblock %}

{% block content %}
    <h2>Mon récapitulatif</h2>
    <p>Vérifier vos informations avant de payer vos commandes.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br>
            <div class=\"form-check mt-4\">
                {{ delivery|raw }}
            </div>



           <hr>
           <strong>Mon transporteur</strong>
            <div class=\"form-check\">
                {{ carrier.name }}<br>
                {{ carrier.Description }}<br>
                {{ (carrier.price/100) |number_format(2,',','.') }} €
            </div>


        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br>
            </div>

            <div class=\"order-summary\">
                {% set total = null %}
                {% for key,product in cart %}
                    <div class=\"row {% if key>0 %} mt-2{% endif %}\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\" >
                        </div>
                        <div class=\"col-8 my-auto\">
                            {{ product.product.name }}<br>
                            <small>{{ product.product.subtitle }}
                                <br>
                            x{{ product.quantity }}</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            {{ ((product.product.price * product.quantity)/100)|number_format(2,',','.') }}€
                        </div>
                    </div>
                    {% set total = total + (product.product.price * product.quantity) %}
                {% endfor %}
            </div>
            <hr>
            <strong>Sous-total :</strong> {{ (total/100)|number_format(2,',','.') }} €<br>
            <strong>Livraison :</strong> {{ (carrier.price/100)|number_format(2,',','.') }} €
            <hr>
            <strong>Total :</strong><br> {{ ((total/100)+(carrier.price/100))|number_format(2,',','.') }} €
            <a href=\"{{ path('app_stripe_create_session',{'reference':reference}) }}\" class=\"btn btn-success btn-block mt-3 mb-4\" id=\"checkout-button\">Payer | {{ ((total + carrier.price)/100)|number_format(2,',', '.') }}€</a>

        </div>

    </div>

{% endblock %}


", "order/add.html.twig", "/home/valence/Cours/Examen/PPEWeb1/Sneakers/templates/order/add.html.twig");
    }
}
