<?php

/* SalmaSymCartBundle:Page:index.html.twig */
class __TwigTemplate_5c57ec22da59437fd6c3116fe155754a5cb0c010084ae147419de9c794127004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SalmaSymCartBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "SymCart";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        if ((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) {
            // line 9
            echo "        <div class=\"col-md-12\">
            <div class=\"page-header\">
                <h1>Products</h1>
            </div>
            ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 14
                echo "
                <div class=\"col-md-3\">
                    <div class=\"thumbnail products_item\">
                        <h3 align=\"right\"> 
                            <span   class=\"label label-info\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
                echo " \$</span>

                        </h3>
                        <h2> <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "</a>
                        </h2>
                        <br />
                        <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                echo "\">
                        ";
                // line 25
                if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "ext")) {
                    // line 26
                    echo "
                            <img width=\"180\" height=\"180\" class=\"thumbnail\" src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/products/", 1 => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), 2 => ".", 3 => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "ext")))), "html", null, true);
                    echo "\" />


                        ";
                } else {
                    // line 31
                    echo "                            <img  src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                    echo "\" />

                        ";
                }
                // line 34
                echo "                        </a>
                    </div>
                </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  96 => 34,  89 => 31,  82 => 27,  79 => 26,  77 => 25,  73 => 24,  65 => 21,  59 => 18,  53 => 14,  49 => 13,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 3,);
    }
}
