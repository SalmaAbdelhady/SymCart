<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_76626cc4325ea9ef4176873d5109e29df4c7a6805aeefb9d32d5b07d35b3229b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"panel panel-success\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_registration", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register form-horizontal\">

                <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'row', array("label" => "User name", "attr" => array("class" => "form-control")));
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row', array("label" => "Email", "attr" => array("class" => "form-control")));
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'row', array("label" => "Password", "attr" => array("class" => "form-control")));
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'row', array("label" => "Confirm Password", "attr" => array("class" => "form-control")));
        echo "
              
                </div>
                
                <div class=\"form-actions\">
                    <input type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  42 => 9,  34 => 4,  26 => 5,  24 => 3,  20 => 1,  31 => 3,  28 => 2,  192 => 88,  189 => 87,  186 => 86,  177 => 76,  165 => 69,  154 => 61,  140 => 50,  130 => 43,  124 => 40,  117 => 36,  111 => 34,  108 => 33,  104 => 31,  98 => 29,  95 => 28,  92 => 27,  86 => 81,  84 => 33,  81 => 32,  79 => 27,  71 => 22,  66 => 19,  63 => 18,  57 => 89,  55 => 86,  51 => 84,  49 => 18,  45 => 16,  39 => 15,  36 => 6,  33 => 13,);
    }
}
