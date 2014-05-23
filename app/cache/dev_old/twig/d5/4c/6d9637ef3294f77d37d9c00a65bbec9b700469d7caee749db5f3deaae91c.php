<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_d54c6d9637ef3294f77d37d9c00a65bbec9b700469d7caee749db5f3deaae91c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  20 => 11,  103 => 56,  95 => 51,  89 => 50,  83 => 46,  69 => 38,  62 => 34,  57 => 32,  48 => 26,  40 => 21,  34 => 17,  32 => 12,  26 => 14,  199 => 82,  193 => 80,  189 => 79,  186 => 78,  181 => 73,  178 => 72,  173 => 67,  149 => 43,  145 => 41,  142 => 40,  137 => 37,  131 => 36,  123 => 18,  117 => 15,  113 => 13,  110 => 12,  104 => 8,  99 => 83,  97 => 78,  92 => 75,  90 => 72,  84 => 68,  82 => 67,  76 => 63,  74 => 40,  68 => 37,  64 => 36,  51 => 26,  45 => 22,  43 => 12,  36 => 8,  27 => 13,  38 => 6,  35 => 5,  29 => 15,);
    }
}
