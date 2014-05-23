<?php

/* SalmaSymCartBundle:Offer:show.html.twig */
class __TwigTemplate_1bacfa92edc8c2f0d6e87b0c7aa3f76ae1e8c73ebce3568852452ed461bf2e61 extends Twig_Template
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
        if ((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer"))) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "name"), "html", null, true);
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
        echo "

    ";
        // line 12
        if ((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer"))) {
            // line 13
            echo "        <div class=\"page-header\">
            <h1 >";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "name"), "html", null, true);
            echo "
                ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "quantity")) {
                // line 16
                echo "                    <small style=\"color: #009900\" >In Stock</small>
                ";
            } else {
                // line 18
                echo "                    <small style=\"color: #D43F3A\" >Out Of Stock </small>
                ";
            }
            // line 20
            echo "            </h1>
        </div>
        <div id=\"cart-alert\" style=\"display: none\" class=\"alert alert-success\">
            <button type=\"button\" onclick=\"\$('#cart-alert').hide()\" class=\"close\">&times;</button>
            <strong>Success!</strong> the item has been added to <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("cart_index");
            echo "\" class=\"alert-link\">your Cart!</a>
        </div>
        <div  class=\"col-md-8 col-xs-12\">

            <div class=\"col-xs-9\">
                <h3> <strike>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "price"), "html", null, true);
            echo " <small>USD</small></strike> <br />
                    <strong style=\"color: #D43F3A\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "discount"), "html", null, true);
            echo " <small style=\"color: #D43F3A\">USD</small></strong></h3>
            </div>
            <div class=\"col-xs-3\">
                <button class=\"btn btn-success btn-lg\" id=\"add-to-cart\" action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id"), "offer" => 1)), "html", null, true);
            echo "\" role=\"button\">Add to Cart
                    <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                </button>

            </div>

            <div class=\"col-xs-10\">
                <p>
                    <strong >Model :</strong> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "model"), "html", null, true);
            echo "
                </p>
                <p>
                    <strong>Features :</strong>
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "features"), "html", null, true);
            echo "
                </p>
            </div>

        </div>
        <div  class=\"col-md-4\">

            ";
            // line 52
            if ($this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "ext")) {
                // line 53
                echo "
                <img class=\"thumbnail\" width=\"280\" height=\"300\"  src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "id"), 2 => ".", 3 => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "ext")))), "html", null, true);
                echo "\" />


            ";
            } else {
                // line 58
                echo "                <img  class=\"thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

            ";
            }
            // line 61
            echo "
        </div>
        <div  class=\"col-md-12\">
            <section>
                <strong>specification :</strong>
                ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "specifications"), "html", null, true);
            echo "
            </section>
        </div>
        <br /><br />
    ";
        } else {
            // line 71
            echo "        <div class=\"alert alert-warning\">
            this offer is no more exists
        </div>
    ";
        }
        // line 75
        echo "
";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "
    ";
        // line 79
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Offer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 81,  178 => 79,  175 => 78,  172 => 77,  167 => 75,  161 => 71,  153 => 66,  146 => 61,  139 => 58,  132 => 54,  129 => 53,  127 => 52,  117 => 45,  110 => 41,  99 => 33,  93 => 30,  89 => 29,  81 => 24,  75 => 20,  71 => 18,  67 => 16,  65 => 15,  61 => 14,  58 => 13,  56 => 12,  52 => 10,  49 => 9,  43 => 6,  37 => 4,  35 => 3,  30 => 2,);
    }
}
