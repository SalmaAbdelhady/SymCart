<?php

/* SonataUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a5e95c1c2cf9c0486f9f009217768b34d1623fca5387daeec16be021c46aa558 extends Twig_Template
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
        $this->env->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 35,  69 => 34,  63 => 31,  52 => 23,  47 => 21,  43 => 20,  37 => 17,  31 => 4,  28 => 3,);
    }
}
