<?php

/* SalmaSymCartBundle:Product:show.html.twig */
class __TwigTemplate_7822f4144cb738b0e3f65229201ad77c979956492a9409eca8df47b3b0066a4b extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "  
    ";
        // line 3
        if ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "
    ";
        } else {
            // line 6
            echo "        SymCart
    ";
        }
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))) {
            // line 11
            echo "        <div class=\"page-header\">
            <h1 >";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "
                ";
            // line 13
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "quantity")) {
                // line 14
                echo "                    <small style=\"color: #009900\" >In Stock</small>
                ";
            } else {
                // line 16
                echo "                    <small style=\"color: #D43F3A\" >Out Of Stock </small>
                ";
            }
            // line 18
            echo "            </h1>
        </div>
        <div id=\"cart-alert\" style=\"display: none\" class=\"alert alert-success\">
            <button type=\"button\" onclick=\"\$('#cart-alert').hide()\" class=\"close\">&times;</button>
            <strong>Success!</strong> the item has been added to <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("cart_index");
            echo "\" class=\"alert-link\">your Cart!</a>
        </div>
        <div  class=\"col-md-8 col-xs-12\">

            <div class=\"col-xs-9\">
                <strong ><h2 style=\"color: #D43F3A\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " <span>USD</span></h2></strong>
            </div>
            <div class=\"col-xs-3\">
                <button class=\"btn btn-success btn-lg\" id=\"add-to-cart\" action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" role=\"button\">Add to Cart
                    <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                </button>
                <a  href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wishlist_add", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\">Add to Wishlist</a>
            </div>

            <div class=\"col-xs-10\">
                <p>
                    <strong >Model :</strong> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "model"), "html", null, true);
            echo "
                </p>
                <p>
                    <strong>Features :</strong>
                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "features"), "html", null, true);
            echo "
                </p>
            </div>

        </div>
        <div  class=\"col-md-4\">

            ";
            // line 49
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "ext")) {
                // line 50
                echo "
                <img class=\"thumbnail\" width=\"280\" height=\"300\"  src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), 2 => ".", 3 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "ext")))), "html", null, true);
                echo "\" />


            ";
            } else {
                // line 55
                echo "                <img  class=\"thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

            ";
            }
            // line 58
            echo "
        </div>
        <div  class=\"col-md-12\">
            <section>
                <strong>specification :</strong>
                ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "specifications"), "html", null, true);
            echo "
            </section>
        </div>
        <br /><br />
    ";
        } else {
            // line 68
            echo "        <div class=\"alert alert-warning\">
            this Product is no more exists
        </div>
    ";
        }
        // line 72
        echo "
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        echo "
    ";
        // line 76
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 78,  174 => 76,  171 => 75,  168 => 74,  163 => 72,  157 => 68,  149 => 63,  142 => 58,  135 => 55,  128 => 51,  125 => 50,  123 => 49,  113 => 42,  106 => 38,  98 => 33,  92 => 30,  86 => 27,  78 => 22,  72 => 18,  68 => 16,  64 => 14,  62 => 13,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  43 => 6,  37 => 4,  35 => 3,  30 => 2,);
    }
}
