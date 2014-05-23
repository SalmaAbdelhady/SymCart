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
        return array (  34 => 4,  26 => 5,  24 => 3,  20 => 1,  31 => 3,  28 => 3,  192 => 88,  189 => 87,  186 => 86,  177 => 76,  165 => 69,  154 => 61,  140 => 50,  130 => 43,  124 => 40,  117 => 36,  111 => 34,  108 => 33,  104 => 31,  98 => 29,  95 => 28,  92 => 27,  86 => 81,  84 => 33,  81 => 32,  79 => 27,  71 => 22,  66 => 19,  63 => 18,  57 => 89,  55 => 86,  51 => 84,  49 => 18,  45 => 16,  39 => 15,  36 => 14,  33 => 13,);
    }
}
