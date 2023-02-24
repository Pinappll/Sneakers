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
class __TwigTemplate_aaa9e2018c6010bf44d950e6ac415efc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/adress.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes Adresses - Sneakers";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "adresses", [], "any", false, false, false, 11)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19), "adresses", [], "any", false, false, false, 19));
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
        return array (  130 => 38,  123 => 33,  110 => 28,  101 => 26,  97 => 25,  93 => 24,  87 => 20,  83 => 19,  78 => 16,  72 => 12,  70 => 11,  65 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/adress.html.twig", "/Users/joshua/Desktop/PPE Web/Sneakers/templates/account/adress.html.twig");
    }
}
