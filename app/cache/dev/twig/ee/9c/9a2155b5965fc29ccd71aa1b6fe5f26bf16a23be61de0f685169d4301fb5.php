<?php

/* SalmaSymCartBundle:Offer:list.html.twig */
class __TwigTemplate_ee9c9a2155b5965fc29ccd71aa1b6fe5f26bf16a23be61de0f685169d4301fb5 extends Twig_Template
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
        echo "Offers - SymCart";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div id=\"cart-alert\" style=\"display: none\" class=\"alert alert-success\">
            <button type=\"button\" onclick=\"\$('#cart-alert').hide()\" class=\"close\">&times;</button>
            <strong>Success!</strong> the item has been added to <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cart_index");
        echo "\" class=\"alert-link\">your Cart!</a>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 13
            echo "                <div class=\"col-md-4\">
                    <div class=\"thumbnail\">
                          <h3 > 
                            <span style=\"alignment-baseline: left\" class=\"label label-danger\">SALE</span>
                            <span style=\"float: right\"  class=\"label label-info\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "discount"), "html", null, true);
            echo " \$</span>
                        </h3>
                      <br />

                        ";
            // line 21
            if ($this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "ext")) {
                // line 22
                echo "
                            <img  src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "id"), 2 => ".", 3 => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "ext")))), "html", null, true);
                echo "\" />


                        ";
            } else {
                // line 27
                echo "                            <img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

                        ";
            }
            // line 30
            echo "                        <div class=\"caption\">
                            <h3>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "name"), "html", null, true);
            echo "</a>

                            </h3>
                            <p></p>
                            <p align=\"center\">

                              
                                <button class=\"btn btn-success\" id=\"add-to-cart\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "product"), "id"))), "html", null, true);
            echo "\" role=\"button\">Add to Cart
                                    <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                                </button>
                            </p>
                        </div>
                    </div>
                </div>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                    <p>There are no offers entries for this sections</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </div>
                    ";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "
                            ";
        // line 54
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

                            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

                        ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Offer:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  135 => 54,  132 => 53,  129 => 52,  124 => 50,  117 => 48,  103 => 39,  91 => 32,  87 => 30,  80 => 27,  73 => 23,  70 => 22,  68 => 21,  61 => 17,  55 => 13,  50 => 12,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
