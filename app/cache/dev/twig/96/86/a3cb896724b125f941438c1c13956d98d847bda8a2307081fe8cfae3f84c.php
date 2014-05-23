<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_9686a3cb896724b125f941438c1c13956d98d847bda8a2307081fe8cfae3f84c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 17
            echo "        <nav >
            <ul class=\"nav nav-pills\">

                <li>
                    <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("cart_index");
            echo "\">
                        <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                        My Cart</a> 
                </li>
                <li>
                    <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("order_list");
            echo "\">
                        <span class=\"glyphicon glyphicon-credit-card\"></span>
                        Track Orders</a> 
                </li>
                <li>
                    <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("wishlist_index");
            echo "\">
                        <span class=\"glyphicon glyphicon-star\"></span>
                        My Wishlist</a> 
                </li>
                
                <li>
                    <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a> 
                </li>

                <li>  
                    <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                        ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                </li>

            </ul>
        </nav>
    ";
        } else {
            // line 51
            echo "        <nav >
            <ul class=\"nav nav-pills\">

                <li>
                    <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " 
                    </a> </li>
                   <li>
                    <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"> 
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 64,  109 => 59,  105 => 58,  97 => 55,  91 => 51,  82 => 45,  77 => 43,  70 => 39,  65 => 37,  56 => 31,  48 => 26,  40 => 21,  34 => 17,  32 => 16,  29 => 15,  26 => 14,);
    }
}
