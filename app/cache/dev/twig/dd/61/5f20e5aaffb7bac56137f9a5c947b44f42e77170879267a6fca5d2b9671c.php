<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dd615f20e5aaffb7bac56137f9a5c947b44f42e77170879267a6fca5d2b9671c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div>
    ";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 5
        echo "</div>
";
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  26 => 5,  24 => 3,  20 => 1,);
    }
}
