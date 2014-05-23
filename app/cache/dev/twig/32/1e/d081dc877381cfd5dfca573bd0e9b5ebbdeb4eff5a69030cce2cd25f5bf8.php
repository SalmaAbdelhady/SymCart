<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_321ed081dc877381cfd5dfca573bd0e9b5ebbdeb4eff5a69030cce2cd25f5bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer_tag_start' => array($this, 'block_footer_tag_start'),
            'footer' => array($this, 'block_footer'),
            'footer_tag_end' => array($this, 'block_footer_tag_end'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'body_end_before_js' => array($this, 'block_body_end_before_js'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_8b8e09e9595353d119dd8217449d846ccbadf7d3423fc9f94235b02782cbdf5b"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body_tag', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body_start', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('body_end', $context, $blocks);
        // line 128
        echo "</body>
</html>
";
    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        // line 6
        echo "<html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 22
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 34
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 36
        echo "</head>
";
    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 18
        echo "    ";
    }

    // line 22
    public function block_head_script($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        // line 30
        echo "    ";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 34
    public function block_head_bottom($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 39
    public function block_body_tag($context, array $blocks = array())
    {
        // line 40
        echo "<body>
";
    }

    // line 43
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('body_end_before_js', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        // line 48
        echo "    <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->
    ";
    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 57
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('flashes', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('content_row', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer_tag_start', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('footer_tag_end', $context, $blocks);
        // line 103
        echo "    ";
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 104
        echo "    ";
    }

    // line 52
    public function block_container_div_start($context, array $blocks = array())
    {
        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
    }

    public function block_container_class($context, array $blocks = array())
    {
        echo "container";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "        ";
    }

    // line 56
    public function block_content_div_start($context, array $blocks = array())
    {
        echo "<div class=\"content\">";
    }

    // line 57
    public function block_page_header($context, array $blocks = array())
    {
        // line 58
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 59
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
    }

    public function block_headline($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 63
    public function block_flashes($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
            // line 65
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
            // line 67
            echo $context["__internal_8b8e09e9595353d119dd8217449d846ccbadf7d3423fc9f94235b02782cbdf5b"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 71
        echo "            ";
    }

    // line 73
    public function block_content_row($context, array $blocks = array())
    {
        // line 74
        echo "            <div class=\"row\">
                ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "                <div class=\"col-sm-9\">
                    ";
        // line 77
        $this->displayBlock('content_content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 82
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 85
        echo "                </div>
                ";
    }

    // line 77
    public function block_content_content($context, array $blocks = array())
    {
        // line 78
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
    }

    // line 82
    public function block_content_sidebar($context, array $blocks = array())
    {
        // line 83
        echo "                    <h2>Sidebar</h2>
                    ";
    }

    // line 90
    public function block_content_div_end($context, array $blocks = array())
    {
        echo "</div>";
    }

    // line 92
    public function block_footer_tag_start($context, array $blocks = array())
    {
        // line 93
        echo "        <footer>
        ";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "        <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2013</p>
        ";
    }

    // line 100
    public function block_footer_tag_end($context, array $blocks = array())
    {
        // line 101
        echo "        </footer>
        ";
    }

    // line 103
    public function block_container_div_end($context, array $blocks = array())
    {
        echo "</div><!-- /container -->";
    }

    // line 106
    public function block_body_end_before_js($context, array $blocks = array())
    {
        // line 107
        echo "    ";
    }

    // line 109
    public function block_foot_script($context, array $blocks = array())
    {
        // line 110
        echo "    ";
        // line 114
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 116
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
";
    }

    // line 114
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 115
        echo "    ";
    }

    // line 126
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 114,  422 => 110,  419 => 109,  415 => 107,  412 => 106,  406 => 103,  401 => 101,  398 => 100,  393 => 97,  390 => 96,  385 => 93,  382 => 92,  376 => 90,  371 => 83,  368 => 82,  363 => 78,  360 => 77,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 76,  341 => 75,  336 => 87,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  283 => 56,  279 => 54,  276 => 53,  263 => 52,  259 => 104,  256 => 103,  254 => 100,  251 => 99,  249 => 96,  246 => 95,  244 => 92,  241 => 91,  239 => 90,  236 => 89,  234 => 73,  231 => 72,  229 => 63,  226 => 62,  223 => 57,  221 => 56,  218 => 55,  215 => 53,  212 => 52,  209 => 51,  204 => 48,  201 => 47,  197 => 109,  194 => 108,  192 => 106,  189 => 105,  187 => 51,  184 => 50,  181 => 47,  178 => 46,  173 => 43,  168 => 40,  165 => 39,  161 => 35,  158 => 34,  152 => 32,  148 => 30,  146 => 23,  143 => 22,  139 => 18,  137 => 14,  135 => 13,  132 => 12,  127 => 36,  125 => 34,  121 => 33,  117 => 32,  114 => 31,  112 => 22,  107 => 19,  105 => 12,  101 => 10,  98 => 9,  93 => 6,  90 => 5,  84 => 128,  82 => 126,  79 => 125,  77 => 46,  74 => 45,  72 => 43,  69 => 42,  67 => 39,  62 => 9,  59 => 8,  57 => 5,  52 => 2,  50 => 1,  71 => 19,  64 => 38,  55 => 15,  48 => 13,  30 => 7,  39 => 9,  29 => 4,  26 => 6,  51 => 14,  44 => 12,  42 => 6,  35 => 5,  31 => 5,  43 => 6,  41 => 5,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
