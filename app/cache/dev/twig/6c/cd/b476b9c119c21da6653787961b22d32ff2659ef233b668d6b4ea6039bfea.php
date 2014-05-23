<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_6ccdb476b9c119c21da6653787961b22d32ff2659ef233b668d6b4ea6039bfea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 12,  19 => 11,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  100 => 23,  95 => 22,  90 => 20,  81 => 15,  45 => 28,  30 => 9,  27 => 8,  129 => 59,  117 => 34,  109 => 53,  107 => 52,  103 => 50,  97 => 47,  93 => 21,  91 => 44,  89 => 43,  84 => 16,  74 => 11,  72 => 10,  69 => 9,  66 => 29,  64 => 28,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  44 => 18,  39 => 17,  34 => 15,  29 => 15,  26 => 14,  85 => 21,  82 => 39,  79 => 37,  76 => 18,  70 => 16,  63 => 40,  61 => 39,  58 => 38,  51 => 34,  49 => 31,  37 => 16,  35 => 15,  32 => 14,  154 => 40,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 36,  114 => 39,  108 => 28,  105 => 51,  101 => 49,  98 => 31,  96 => 33,  92 => 25,  86 => 17,  80 => 28,  77 => 36,  73 => 17,  65 => 83,  62 => 82,  56 => 37,  53 => 22,  50 => 44,  47 => 43,  42 => 27,  40 => 20,  36 => 16,  31 => 14,  28 => 14,);
    }
}
