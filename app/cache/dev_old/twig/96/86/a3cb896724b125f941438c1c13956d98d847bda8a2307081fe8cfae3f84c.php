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
            echo $this->env->getExtension('routing')->getPath("wishlist_index");
            echo "\">
                        <span class=\"glyphicon glyphicon-star\"></span>
                        My Wishlist</a> 
                </li>

                <li>
                    <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
            echo "</a> 
                </li>

                <li>  
                    <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                        <span class=\"glyphicon glyphicon-log-out\"></span>
                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                </li>

            </ul>
        </nav>
    ";
        } else {
            // line 46
            echo "          <nav >
            <ul class=\"nav nav-pills\">

        <li>
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " 
                <strong>OR</strong> ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        </li>
            </ul>
          </nav>
    ";
        }
        // line 56
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
        return array (  103 => 56,  95 => 51,  89 => 50,  83 => 46,  69 => 38,  62 => 34,  57 => 32,  48 => 26,  40 => 21,  34 => 17,  32 => 16,  26 => 14,  199 => 82,  193 => 80,  189 => 79,  186 => 78,  181 => 73,  178 => 72,  173 => 67,  149 => 43,  145 => 41,  142 => 40,  137 => 37,  131 => 36,  123 => 18,  117 => 15,  113 => 13,  110 => 12,  104 => 8,  99 => 83,  97 => 78,  92 => 75,  90 => 72,  84 => 68,  82 => 67,  76 => 63,  74 => 40,  68 => 37,  64 => 36,  51 => 26,  45 => 22,  43 => 12,  36 => 8,  27 => 1,  38 => 6,  35 => 5,  29 => 15,);
    }
}
