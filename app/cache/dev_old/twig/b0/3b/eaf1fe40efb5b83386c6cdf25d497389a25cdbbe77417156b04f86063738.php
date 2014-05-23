<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b03beaf1fe40efb5b83386c6cdf25d497389a25cdbbe77417156b04f86063738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  192 => 88,  189 => 87,  186 => 86,  177 => 76,  165 => 69,  154 => 61,  140 => 50,  130 => 43,  124 => 40,  117 => 36,  111 => 34,  108 => 33,  104 => 31,  98 => 29,  95 => 28,  92 => 27,  86 => 81,  84 => 33,  81 => 32,  79 => 27,  71 => 22,  66 => 19,  63 => 18,  57 => 89,  55 => 86,  51 => 84,  49 => 18,  45 => 16,  39 => 15,  36 => 14,  33 => 13,);
    }
}
