<?php

/* ::base.html.twig */
class __TwigTemplate_1afbdc19d5b6577f9f53d44505fd4a6898ee9ec52a177887419bd7c6a6057635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>


<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "



        <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">


                <br />
                <hgroup>
                    <h2>";
        // line 33
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 34
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
                <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
                    ";
        // line 37
        $this->displayBlock('navigation', $context, $blocks);
        // line 62
        echo "                </nav>
            </header>
            <br /><br />
            <section class=\"col-md-12\">

                ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
            </section>
            <br /><br />

            <div id=\"footer\">

                ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "            </div>
        </section>

        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "SymCart - SymCart";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap_bootstrap_1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


        ";
    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Sym-Cart</a>";
    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        // line 38
        echo "                        <div  style=\"float:right\">

                            ";
        // line 40
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.account")));
        echo "

                        </div>
                        <div  style=\"float:left\">


                            <nav  >
                                <ul  class=\"nav nav-pills\">

                                    <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">

                                            <span class=\"glyphicon glyphicon-home\"></span> Home

                                        </a></li>
                                    <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("offer_list");
        echo "\">Offers</a></li>
                                        ";
        // line 55
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SalmaSymCartBundle:Section:sectionMenu"), array());
        // line 56
        echo "

                                </ul>
                            </nav>
                        </div>
                    ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "
                ";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "                    created by <a href=\"\">Salma Abdelhady</a>
                ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "            ";
        // asset "06837fc"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06837fc") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/06837fc.js");
        // line 84
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
            ";
        unset($context["asset_url"]);
        // line 86
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 86,  207 => 84,  203 => 83,  200 => 82,  195 => 77,  192 => 76,  187 => 68,  184 => 67,  175 => 56,  173 => 55,  169 => 54,  161 => 49,  149 => 40,  145 => 38,  142 => 37,  137 => 34,  131 => 33,  123 => 15,  117 => 12,  114 => 11,  111 => 10,  105 => 8,  100 => 87,  98 => 82,  93 => 79,  91 => 76,  83 => 70,  81 => 67,  74 => 62,  72 => 37,  66 => 34,  62 => 33,  49 => 23,  43 => 19,  41 => 10,  36 => 8,  27 => 1,);
    }
}
