<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_85e395a08d2c802dd810029cedca6699df18feb58afc63d1b51d15ce4e7ec035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  49 => 17,  37 => 20,  34 => 18,  31 => 16,  29 => 15,  26 => 14,  87 => 28,  81 => 20,  76 => 35,  73 => 34,  67 => 19,  61 => 29,  56 => 28,  53 => 18,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  38 => 21,  36 => 20,  32 => 15,  30 => 13,  24 => 13,  21 => 11,);
    }
}
