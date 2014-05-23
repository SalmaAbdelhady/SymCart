<?php

/* SalmaSymCartBundle:Cart:cart.html.twig */
class __TwigTemplate_8d3ea2759c8ad5a773cacec6cd6874dd4a4476e9ba9140d5149566345d15a47d extends Twig_Template
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
        echo "My Cart!";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <table class=\"table table-striped \">
        <input type=\"hidden\" id=\"path\" value=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("cart_change_quantity");
        echo "\"/>
        <thead>
            <tr class=\"text-light-blue\">
                <td align=\"center\"><strong>Item Name</strong></td>
                <td align=\"center\"><strong>Unit Price</strong></td>
                <td align=\"center\"><strong>Quantity</strong></td>
                <td align=\"center\"><strong>Subtotal</strong></td>
                <td align=\"center\"><strong>Action</strong></td>
            </tr>

        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                <tr id=\"quantity\">
                    <td align=\"center\"> <a  href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\"  >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</a> </td>
                    <td align=\"center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
            echo " USD</td>
                    <td width=\"5%\" align=\"center\" ><input type=\"number\" min=\"1\" id=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "quantity"), "html", null, true);
            echo "\" class=\"form-control\"/></td>
                    <td align=\"center\" id=\"subtotal-";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "\">
                        <strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "subtotal"), "html", null, true);
            echo " USD</strong>
                        <img style=\"display: none\" src='";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/ajax-loader.gif"), "html", null, true);
            echo "' />
                    </td>
                    <td align=\"center\" >
                        <a type=\"button\" id=\"remv-item\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_remv_item", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-trash\"></span>
                        </a>
                    </td>

                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                    <tr  class=\"warning\"> 
                        <td colspan=\"5\" align=\"center\"> No Items in Your Cart</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                        ";
        if ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))) {
            // line 42
            echo "                            <tr >
                                <td colspan=\"4\"  id=\"total\"  align=\"right\" >
                                    <strong>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo " USD</strong>
                                    <img style=\"display: none\" src='";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/ajax-loader.gif"), "html", null, true);
            echo "' />
                                </td>
                                <td align=\"center\"><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("cart_empty");
            echo "\"><input  type=\"button\" class=\"btn btn-danger btn-sm\" value=\"Empty Cart\"/></a></td>
                            </tr>
                        ";
        }
        // line 50
        echo "                    </tbody>
                </table>
                ";
        // line 52
        if ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))) {
            echo "<br />
                 
                    
                    <div style=\"float:right\"  class=\"btn-group\">

                         <a  href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("cart_checkout");
            echo "\" class=\"btn btn-danger btn-lg\" id=\"checkout\" type=\"button\" >Check Out</a>
                         <a  href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("index");
            echo "\" class=\"btn btn-success btn-lg\" type=\"button\" >Continue Shopping</a>
                       
                    </div>
                ";
        }
        // line 62
        echo "                ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "
                        ";
        // line 65
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

                        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/js/cart.js"), "html", null, true);
        echo "\"></script>

                    ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Cart:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 67,  173 => 65,  170 => 64,  167 => 63,  163 => 62,  156 => 58,  152 => 57,  144 => 52,  140 => 50,  134 => 47,  129 => 45,  125 => 44,  121 => 42,  118 => 41,  108 => 36,  96 => 29,  90 => 26,  86 => 25,  82 => 24,  76 => 23,  72 => 22,  66 => 21,  63 => 20,  58 => 19,  43 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
