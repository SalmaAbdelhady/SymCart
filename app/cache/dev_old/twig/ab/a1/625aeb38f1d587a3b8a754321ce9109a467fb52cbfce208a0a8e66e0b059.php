<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_aba1625aeb38f1d587a3b8a754321ce9109a467fb52cbfce208a0a8e66e0b059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
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

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 18
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 84
        echo "        </div>
        <div class=\"col-sm-6\">
            ";
        // line 86
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 89
        echo "        </div>
    </div>
";
    }

    // line 18
    public function block_sonata_user_login($context, array $blocks = array())
    {
        // line 19
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 27
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 32
        echo "
                    ";
        // line 33
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 81
        echo "                </div>
            </div>
            ";
    }

    // line 27
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 28
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 31
        echo "                    ";
    }

    // line 33
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 34
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                              class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\"
                                       class=\"col-sm-4 control-label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                                <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                      name=\"_username\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                                      required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\"
                                       class=\"col-sm-4 control-label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                                <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                      name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                           value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
    }

    // line 86
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        // line 87
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 88
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 88,  189 => 87,  186 => 86,  177 => 76,  165 => 69,  154 => 61,  140 => 50,  130 => 43,  124 => 40,  117 => 36,  111 => 34,  108 => 33,  104 => 31,  98 => 29,  95 => 28,  92 => 27,  86 => 81,  84 => 33,  81 => 32,  79 => 27,  71 => 22,  66 => 19,  63 => 18,  57 => 89,  55 => 86,  51 => 84,  49 => 18,  45 => 16,  39 => 15,  36 => 14,  33 => 13,);
    }
}
