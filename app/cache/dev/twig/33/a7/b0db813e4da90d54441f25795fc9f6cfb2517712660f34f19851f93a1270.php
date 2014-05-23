<?php

/* SalmaSymCartBundle:Orders:show.html.twig */
class __TwigTemplate_33a7b0db813e4da90d54441f25795fc9f6cfb2517712660f34f19851f93a1270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "orderNum"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2><strong>#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "orderNum"), "html", null, true);
        echo "</strong></h2>
    <table class=\"table table-striped \">
        <thead>
            <tr>
                <td align=\"center\"><strong>Product Name</strong></td>
                <td align=\"center\"><strong>Quantity</strong></td>
                <td align=\"center\"><strong>Subtotal</strong></td>
            </tr>
        </thead>

        <tbody>
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <tr>
                    <td align=\"center\">
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "productId"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "productId"), "name"), "html", null, true);
            echo "</a>
                    </td>
                    <td align=\"center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "quantity"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "subtotal"), "html", null, true);
            echo " USD</td>

                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                    <tr  class=\"warning\"> 
                        <td colspan=\"5\" align=\"center\">No Orders For You</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
                        <tr > 
                            <td colspan=\"2\" ><strong>Total</strong></td>
                            <td align=\"center\"><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total"), "html", null, true);
        echo " USD</strong></td>
                        </tr>
                    </tbody>
                </table>
                ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Orders:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  92 => 31,  83 => 27,  74 => 23,  70 => 22,  63 => 20,  59 => 18,  54 => 17,  39 => 6,  36 => 5,  29 => 3,);
    }
}
