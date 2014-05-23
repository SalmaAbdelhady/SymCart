<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_3c18e89e0cb744bb60032ad2edbaa31b8da01ef1674c7557816095f525b72a82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'title' => array($this, 'block_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
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

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 24
        echo "
<h2>";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        echo "</h2>

  
<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 31
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 34
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 37
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 40
        echo "    </div>

</div>
  ";
    }

    // line 16
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((!array_key_exists("breadcrumb_context", $context))) {
            // line 18
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
    </div>
";
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 31
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "requestUri"))));
        echo "
        ";
    }

    // line 39
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  79 => 19,  76 => 18,  70 => 16,  63 => 40,  61 => 39,  58 => 38,  51 => 34,  49 => 31,  37 => 24,  35 => 16,  32 => 15,  154 => 49,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 40,  114 => 39,  108 => 39,  105 => 36,  101 => 32,  98 => 31,  96 => 33,  92 => 25,  86 => 30,  80 => 28,  77 => 27,  73 => 17,  65 => 25,  62 => 24,  56 => 37,  53 => 22,  50 => 21,  47 => 20,  42 => 19,  40 => 25,  36 => 16,  31 => 15,  28 => 14,);
    }
}
