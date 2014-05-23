<?php

/* SalmaSymCartBundle:Wishlist:wishlist.html.twig */
class __TwigTemplate_d5d48f2aa4c7155d7b1f3260ea5cf038417b1198fdf2bc23205add0044505381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SalmaSymCartBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SalmaSymCartBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My Wishlist!";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"cart-alert\" style=\"display: none\" class=\"alert alert-success\">
        <button type=\"button\" onclick=\"\$('#cart-alert').hide()\" class=\"close\">&times;</button>
        <strong>Success!</strong> the item has been added to <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("cart_index");
        echo "\" class=\"alert-link\">your Cart!</a>
    </div>
    <table class=\"table table-striped \">
        <input type=\"hidden\" id=\"path\" value=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("cart_change_quantity");
        echo "\"/>

        <tbody>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                <tr>
                    <td>
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                ";
            // line 18
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "ext")) {
                // line 19
                echo "
                                    <img class=\"thumbnail\" width=\"100\" height=\"100\"  src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), 2 => ".", 3 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "ext")))), "html", null, true);
                echo "\" />


                                ";
            } else {
                // line 24
                echo "                                    <img  class=\"thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

                                ";
            }
            // line 27
            echo "                            </div>
                            <div class=\"col-md-4\">
                                <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</h2> 
                                <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "model"), "html", null, true);
            echo "</p>
                                <strong style=\"color: #D43F3A\" >";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " USD</strong>


                            </div>
                    </td>
                    <td align=\"right\">
                        <button class=\"btn btn-success\" id=\"add-to-cart\" action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" role=\"button\">Add to Cart
                            <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                        </button>
                        <a class=\"btn btn-danger\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wishlist_remv_item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" role=\"button\">Remove
                            <span class=\"glyphicon glyphicon-trash\"></span>
                        </a>
                    </td>

                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                    <tr  class=\"warning\"> 
                        <td colspan=\"5\" align=\"center\">Your Wishlist is Empty</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </tbody>
                </table>
                ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "
                        ";
        // line 56
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

                        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

                    ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Wishlist:wishlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  145 => 56,  142 => 55,  139 => 54,  133 => 51,  124 => 47,  112 => 40,  106 => 37,  97 => 31,  93 => 30,  89 => 29,  85 => 27,  78 => 24,  71 => 20,  68 => 19,  66 => 18,  60 => 14,  55 => 13,  49 => 10,  43 => 7,  39 => 5,  36 => 4,  30 => 3,);
    }
}
