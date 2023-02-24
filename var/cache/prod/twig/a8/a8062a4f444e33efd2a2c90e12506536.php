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

/* cart/index.html.twig */
class __TwigTemplate_16a5be74a917499dd7eb19ab97873051 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon panier - Snekers";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Mon panier</h1>
    Retrouver l'ensemble des produits que vous avez ajouté à votre panier.

    ";
        // line 9
        if ((twig_length_filter($this->env, ($context["cart"] ?? null)) > 0)) {
            // line 10
            echo "        <table class=\"table mt-3\">
            <thead>
            <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\"></th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context["total"] = null;
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "            <tr>
                <th>
                    <img src=\"/uploads/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 26), "illustration", [], "any", false, false, false, 26), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "\" height=\"75px\" >
                </th>
                <td>
                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo "<br>
                    <small>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "subtitle", [], "any", false, false, false, 30), "html", null, true);
                echo "</small>
                </td>
                <td>
                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus-sign.png"), "html", null, true);
                echo "\" height=\"10px\" alt=\"augmenter\">
                    </a>

                    ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
                echo "
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/plus-button.png"), "html", null, true);
                echo "\" height=\"10px\" alt=\"réduire\">
                    </a>

                </td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "price", [], "any", false, false, false, 44) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 44)) / 100), 2, ",", "."), "html", null, true);
                echo "€</td>
                <td>
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/des-ordures.png"), "html", null, true);
                echo "\" height=\"25px\" alt=\"Supprimer mon produit\">
                    </a>
                </td>
            </tr>
                ";
                // line 51
                $context["total"] = (($context["total"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 51)));
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </tbody>
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre de produit : </b>";
            // line 56
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["cart"] ?? null)), "html", null, true);
            echo "<br>
            <b>Total de mon panier :</b>";
            // line 57
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($context["total"] ?? null) / 100), 2, ",", "."), "html", null, true);
            echo "€
            <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
            echo "\" class=\"btn btn-success btn-block mt-3\">Valider mon panier</a>

        </div>
    ";
        } else {
            // line 62
            echo "        <hr>
        <p><b>Votre panier est vide.</b></p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  174 => 58,  170 => 57,  166 => 56,  161 => 53,  155 => 52,  153 => 51,  146 => 47,  142 => 46,  137 => 44,  133 => 43,  126 => 39,  122 => 38,  118 => 37,  112 => 34,  108 => 33,  102 => 30,  98 => 29,  90 => 26,  86 => 24,  81 => 23,  79 => 22,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Users/joshua/Desktop/PPE Web/Sneakers/templates/cart/index.html.twig");
    }
}
