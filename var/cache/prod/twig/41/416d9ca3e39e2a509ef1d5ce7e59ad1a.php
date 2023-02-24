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
class __TwigTemplate_48b6eed8e93a46a488355ae0a8149e05 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commande - Snekers";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo ($context["delivery"] ?? null);
        echo "
            </div>



           <hr>
           <strong>Mon transporteur</strong>
            <div class=\"form-check\">
                ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "<br>
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "Description", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 27) / 100), 2, ",", "."), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
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
            $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
        echo " €<br>
            <strong>Livraison :</strong> ";
        // line 59
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 59) / 100), 2, ",", "."), "html", null, true);
        echo " €
            <hr>
            <strong>Total :</strong><br> ";
        // line 61
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) / 100) + (twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 61) / 100)), 2, ",", "."), "html", null, true);
        echo " €
            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_create_session", ["reference" => ($context["reference"] ?? null)]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3 mb-4\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["carrier"] ?? null), "price", [], "any", false, false, false, 62)) / 100), 2, ",", "."), "html", null, true);
        echo "€</a>

        </div>

    </div>

";
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
        return array (  179 => 62,  175 => 61,  170 => 59,  166 => 58,  162 => 56,  156 => 55,  154 => 54,  148 => 51,  142 => 48,  137 => 46,  133 => 45,  125 => 42,  117 => 40,  112 => 39,  110 => 38,  96 => 27,  92 => 26,  88 => 25,  77 => 17,  68 => 10,  64 => 9,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "order/add.html.twig", "/Users/joshua/Desktop/PPE Web/Sneakers/templates/order/add.html.twig");
    }
}
