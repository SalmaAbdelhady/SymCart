<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_8c5cbd4ea907c1c794a37d1c7c3cd7d875155c418aeef1431edf0cd377a7f2f4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  81 => 20,  76 => 35,  73 => 34,  67 => 32,  61 => 29,  56 => 28,  53 => 27,  51 => 26,  48 => 25,  45 => 24,  42 => 23,  38 => 21,  36 => 20,  32 => 19,  30 => 13,  24 => 12,  21 => 11,);
    }
}
