<?php

/* SalmaSymCartBundle::layout.html.twig */
class __TwigTemplate_e617c549535a883bb2430895d45274cdff3f1d0584a4efd915e50e71c5284d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
   
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/css/cart.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "SalmaSymCartBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  31 => 7,  28 => 6,  158 => 59,  153 => 57,  150 => 56,  147 => 55,  143 => 54,  135 => 49,  129 => 46,  125 => 44,  119 => 41,  115 => 40,  112 => 39,  109 => 38,  99 => 33,  87 => 26,  80 => 24,  74 => 23,  70 => 22,  66 => 21,  63 => 20,  58 => 19,  43 => 7,  39 => 5,  36 => 4,  30 => 2,);
    }
}
