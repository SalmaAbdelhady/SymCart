<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_077bd9178660c78ab1db0d1b74577dd451de7a066322ebadde6226a48d9a3a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  41 => 17,  77 => 33,  71 => 31,  65 => 29,  62 => 28,  59 => 27,  45 => 21,  40 => 20,  37 => 19,  138 => 36,  135 => 35,  127 => 32,  124 => 31,  119 => 28,  105 => 27,  81 => 25,  78 => 24,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  52 => 23,  34 => 16,  31 => 15,  28 => 14,  29 => 15,  26 => 14,  109 => 19,  104 => 18,  99 => 26,  94 => 16,  89 => 33,  85 => 31,  79 => 28,  76 => 27,  74 => 26,  69 => 24,  61 => 23,  58 => 22,  56 => 26,  53 => 20,  50 => 19,  47 => 18,  44 => 17,  42 => 16,  39 => 15,  36 => 14,  33 => 17,  27 => 12,  24 => 14,);
    }
}
