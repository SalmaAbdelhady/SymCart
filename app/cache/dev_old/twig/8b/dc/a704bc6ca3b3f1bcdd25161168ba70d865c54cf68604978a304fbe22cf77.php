<?php

/* SalmaSymCartBundle:Section:list.html.twig */
class __TwigTemplate_8bdca704bc6ca3b3f1bcdd25161168ba70d865c54cf68604978a304fbe22cf77 extends Twig_Template
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
        echo "Sections!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : $this->getContext($context, "sections")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 7
            echo "        <div class=\"panel panel-info\">

            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("section_show", array("id" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "name"), "html", null, true);
            echo "</a></h3>
            </div>
            <div class=\"media\">
                <a class=\"pull-left\" href=\"#\" align=\"center\">
                    ";
            // line 14
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "ext")) {
                // line 15
                echo "                     
                        <img class=\"thumbnail media-body\" width=\"180\" height=\"180\"  src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/salmasymcart/images/sections/", 1 => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"), 2 => ".", 3 => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "ext")))), "html", null, true);
                echo "\" />
                       
                     
                    ";
            } else {
                // line 20
                echo "                        <img  class=\"thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/images/no-image.png"), "html", null, true);
                echo "\" />

                    ";
            }
            // line 23
            echo "                </a>
                <div class=\"media-body\" >
                    <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "description"), "html", null, true);
            echo "</p>
                    <p class=\"continue\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("section_show", array("id" => $this->getAttribute((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")), "id"))), "html", null, true);
            echo "\">View Products...</a></p>
                </div>
            </div>


        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "            <p>There are no section entries for SymCart</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Section:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  97 => 33,  85 => 26,  81 => 25,  77 => 23,  70 => 20,  63 => 16,  60 => 15,  58 => 14,  49 => 10,  44 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
