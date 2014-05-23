<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_5d59fca0dd899735b281bd112fa2df71c79d5a132b268c1fac88e3d82b1f4ced extends Twig_Template
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
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 15,  26 => 14,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  70 => 16,  63 => 40,  61 => 39,  58 => 38,  51 => 34,  49 => 31,  37 => 24,  35 => 16,  32 => 15,  154 => 49,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 40,  114 => 39,  108 => 39,  105 => 36,  101 => 32,  98 => 31,  96 => 33,  92 => 25,  86 => 30,  80 => 28,  77 => 27,  73 => 17,  65 => 25,  62 => 24,  56 => 37,  53 => 22,  50 => 21,  47 => 20,  42 => 19,  40 => 25,  36 => 16,  31 => 15,  28 => 14,);
    }
}
