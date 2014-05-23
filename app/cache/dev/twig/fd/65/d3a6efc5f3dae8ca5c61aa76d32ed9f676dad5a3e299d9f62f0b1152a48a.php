<?php

/* SalmaSymCartBundle:Cart:checkout.html.twig */
class __TwigTemplate_fd65d3a6efc5f3dae8ca5c61aa76d32ed9f676dad5a3e299d9f62f0b1152a48a extends Twig_Template
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
        echo "SalmaSymCartBundle:Cart:checkout";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Cart:checkout page</h1>
";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle:Cart:checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
