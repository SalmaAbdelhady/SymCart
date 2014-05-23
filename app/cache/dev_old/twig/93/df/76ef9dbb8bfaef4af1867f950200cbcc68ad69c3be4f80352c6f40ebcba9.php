<?php

/* SalmaSymCartBundle:Section:show.html.twig */
class __TwigTemplate_93df76ef9dbb8bfaef4af1867f950200cbcc68ad69c3be4f80352c6f40ebcba9 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"page-header\">
        <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name"), "html", null, true);
        echo "<small>items</small></h1>
    </div>

    <div class=\"row\">
        <div id=\"cart-alert\" style=\"display: none\" class=\"alert alert-success\">
            <button type=\"button\" onclick=\"\$('#cart-alert').hide()\" class=\"close\">&times;</button>
            <strong>Success!</strong> the item has been added to <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("cart_index");
        echo "\" class=\"alert-link\">your Cart!</a>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "                <div class=\"col-md-4\">
                    <div class=\"thumbnail\">

                        <h3 align=\"right\"> 
                            <span class=\"label label-info\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
            echo " \$</span>
                        </h3>

                        ";
            // line 23
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "ext")) {
                // line 24
                echo "
                            <img  src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), 2 => ".", 3 => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "ext")))), "html", null, true);
                echo "\" />


                        ";
            } else {
                // line 29
                echo "                            <img  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

                        ";
            }
            // line 32
            echo "                        <div class=\"caption\">
                            <h3>
                                <a >";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</a>

                            </h3>
                            <p></p>
                            <p align=\"center\">

                                <a type=\"button\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wishlist_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                    Wish-list
                                    <span class=\"glyphicon glyphicon-star\"></span>

                                </a>
                                <button class=\"btn btn-success\" id=\"add-to-cart\" action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
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
            // line 54
            echo "                    <p>There are no products entries for this sections</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </div>
                    ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "
                            ";
        // line 60
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

                            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

                        ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Section:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 62,  146 => 60,  143 => 59,  140 => 58,  135 => 56,  128 => 54,  114 => 45,  106 => 40,  97 => 34,  93 => 32,  86 => 29,  79 => 25,  76 => 24,  74 => 23,  68 => 20,  62 => 16,  57 => 15,  51 => 12,  42 => 6,  39 => 5,  36 => 4,  30 => 2,);
    }
}
