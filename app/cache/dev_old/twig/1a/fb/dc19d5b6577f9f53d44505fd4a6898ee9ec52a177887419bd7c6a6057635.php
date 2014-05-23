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
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "



        <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">


                <br />
                <hgroup>
                    <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>

                ";
        // line 40
        $this->displayBlock('navigation', $context, $blocks);
        // line 63
        echo "            </header>
            <br /><br />
            <section class=\"col-md-12\">

            ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        </section>
        <br /><br />

        <div id=\"footer\">
            ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "        </div>
    </section>

    ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "SymCart - SymCart";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/salmasymcart/css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap_bootstrap_1.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


        ";
    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Sym-Cart</a>";
    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
    }

    // line 40
    public function block_navigation($context, array $blocks = array())
    {
        // line 41
        echo "                    <div  style=\"float:right\">

                        ";
        // line 43
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.account")));
        echo "

                    </div>
                    <div  style=\"float:left\">


                        <nav >
                            <ul  class=\"nav nav-pills\">

                                <li><a href=\"#\">

                                        <span class=\"glyphicon glyphicon-home\"></span> Home

                                    </a></li>
                                <li><a href=\"#\">About</a></li>

                            </ul>
                        </nav>
                    </div>
                ";
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "                created by <a href=\"\">Salma Abdelhady</a>
            ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "        ";
        // asset "06837fc"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_06837fc") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/06837fc.js");
        // line 80
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
        ";
        unset($context["asset_url"]);
        // line 82
        echo "    ";
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
        return array (  199 => 82,  193 => 80,  189 => 79,  186 => 78,  181 => 73,  178 => 72,  173 => 67,  149 => 43,  145 => 41,  142 => 40,  137 => 37,  131 => 36,  123 => 18,  117 => 15,  113 => 13,  110 => 12,  104 => 8,  99 => 83,  97 => 78,  92 => 75,  90 => 72,  84 => 68,  82 => 67,  76 => 63,  74 => 40,  68 => 37,  64 => 36,  51 => 26,  45 => 22,  43 => 12,  36 => 8,  27 => 1,  38 => 6,  35 => 5,  29 => 3,);
    }
}
