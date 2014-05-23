<?php

/* MopaBootstrapBundle::base_initializr.html.twig */
class __TwigTemplate_f59f365e83d88f0ebbadf313f1e8b32abe921ed088cdc2c953bd4c1e5cda226d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base_less.html.twig");

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'dns_prefetch' => array($this, 'block_dns_prefetch'),
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
            'jquery' => array($this, 'block_jquery'),
            'jquery_cdn_url' => array($this, 'block_jquery_cdn_url'),
            'jquery_local_url' => array($this, 'block_jquery_local_url'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base_less.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_html_tag($context, array $blocks = array())
    {
        // line 4
        echo "<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->

";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "<head>
    ";
        // line 17
        echo "    <meta charset=\"utf-8\" />

    ";
        // line 21
        echo "    ";
        $this->displayBlock('dns_prefetch', $context, $blocks);
        // line 28
        echo "
    ";
        // line 34
        echo "    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" /><![endif]-->

    ";
        // line 38
        echo "    <meta name=\"viewport\" content=\"width=device-width\" />

    ";
        // line 40
        $context["meta_robots"] = "";
        // line 41
        echo "    ";
        $context["metatitle"] = "";
        // line 42
        echo "    ";
        if (array_key_exists("meta", $context)) {
            // line 43
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array(), "any", true, true)) {
                // line 44
                echo "            <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 46
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array(), "any", true, true)) {
                // line 47
                echo "            <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 49
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true)) {
                // line 50
                echo "            <meta name=\"author\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 52
            echo "        ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_url", array(), "any", true, true) && $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true))) {
                // line 53
                echo "            ";
                // line 54
                echo "            <link rel=\"author\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_url", array(), "array"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 56
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array(), "any", true, true)) {
                // line 57
                echo "            ";
                $context["metatitle"] = $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title");
                // line 58
                echo "        ";
            }
            // line 59
            echo "
        ";
            // line 62
            echo "
        ";
            // line 66
            echo "
        ";
            // line 69
            echo "
        <link rel=\"shortcut icon\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
        <link rel=\"apple-touch-icon\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
            echo "\" />

        ";
            // line 74
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array", true, true)) {
                // line 75
                echo "        <link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 77
            echo "
        ";
            // line 79
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array", true, true)) {
                // line 80
                echo "        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Atom\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 82
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array", true, true)) {
                // line 83
                echo "        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 85
            echo "
        ";
            // line 87
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "noindex", array(), "array")) {
                // line 88
                echo "            ";
                $context["meta_robots"] = "noindex,";
                // line 89
                echo "        ";
            }
            // line 90
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "nofollow", array(), "array")) {
                // line 91
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : null) . "nofollow");
                // line 92
                echo "        ";
            } else {
                // line 93
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : null) . "follow");
                // line 94
                echo "        ";
            }
            // line 95
            echo "    ";
        }
        // line 96
        echo "
    <meta name=\"robots\" content=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["meta_robots"]) ? $context["meta_robots"] : null), "html", null, true);
        echo "\" />
    <title>";
        // line 98
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 100
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array", true, true)) {
            // line 101
            echo "        <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 103
        echo "
    ";
        // line 105
        echo "
    ";
        // line 109
        echo "
    ";
        // line 111
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 120
        echo "
    ";
        // line 121
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 124
        echo "</head>
";
    }

    // line 21
    public function block_dns_prefetch($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if (array_key_exists("dns_prefetch", $context)) {
            // line 23
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dns_prefetch"]) ? $context["dns_prefetch"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 24
                echo "            <link rel=\"dns-prefetch\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : null), "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 98
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["metatitle"]) ? $context["metatitle"] : null), "html", null, true);
    }

    // line 111
    public function block_head_style($context, array $blocks = array())
    {
        // line 112
        echo "        ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "

        ";
        // line 116
        echo "        ";
        if ((isset($context["diagnostic_mode"]) ? $context["diagnostic_mode"] : null)) {
            // line 117
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mopabootstrap/css/diagnostic.css"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        // line 119
        echo "    ";
    }

    // line 121
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 122
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mopabootstrap/js/modernizr-2.7.1-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 127
    public function block_body_start($context, array $blocks = array())
    {
        // line 128
        echo "<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 135
        echo "
    ";
        // line 136
        $this->displayBlock('container', $context, $blocks);
        // line 139
        echo "
    ";
        // line 140
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 132
    public function block_navbar($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 136
    public function block_container($context, array $blocks = array())
    {
        // line 137
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
    }

    // line 140
    public function block_foot_script($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        $this->displayBlock('jquery', $context, $blocks);
        // line 147
        echo "    ";
        // line 149
        echo "    ";
        // line 151
        echo "    ";
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array", true, true)) {
            // line 152
            echo "    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array"), "html", null, true);
            echo "');ga('send','pageview');
    </script>
    ";
        }
        // line 161
        echo "    ";
        $this->displayParentBlock("foot_script", $context, $blocks);
        echo "
    ";
    }

    // line 141
    public function block_jquery($context, array $blocks = array())
    {
        // line 142
        echo "      ";
        // line 144
        echo "      <script src=\"";
        $this->displayBlock('jquery_cdn_url', $context, $blocks);
        echo "\"></script>
      <script>window.jQuery || document.write('<script src=\"";
        // line 145
        $this->displayBlock('jquery_local_url', $context, $blocks);
        echo "\"><\\/script>')</script>
    ";
    }

    // line 144
    public function block_jquery_cdn_url($context, array $blocks = array())
    {
        echo "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js";
    }

    // line 145
    public function block_jquery_local_url($context, array $blocks = array())
    {
        echo "../js/libs/jquery-1.11.0.min.js";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_initializr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 144,  405 => 142,  395 => 161,  389 => 158,  378 => 151,  361 => 137,  358 => 136,  351 => 133,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  315 => 122,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 27,  277 => 26,  260 => 22,  257 => 21,  250 => 121,  222 => 98,  206 => 93,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  170 => 80,  167 => 79,  155 => 74,  150 => 71,  134 => 59,  97 => 47,  53 => 14,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 103,  401 => 101,  390 => 96,  385 => 93,  382 => 92,  376 => 149,  371 => 141,  363 => 78,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  279 => 54,  276 => 53,  263 => 23,  259 => 104,  256 => 103,  251 => 99,  249 => 96,  244 => 111,  239 => 90,  236 => 89,  234 => 73,  231 => 72,  226 => 62,  223 => 57,  218 => 97,  215 => 96,  212 => 95,  197 => 90,  194 => 89,  192 => 106,  184 => 50,  181 => 47,  178 => 46,  165 => 39,  161 => 35,  152 => 32,  148 => 30,  146 => 70,  139 => 18,  137 => 62,  127 => 36,  114 => 31,  90 => 5,  84 => 128,  77 => 40,  74 => 45,  52 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 116,  423 => 142,  413 => 134,  409 => 132,  407 => 144,  402 => 141,  398 => 100,  393 => 97,  387 => 122,  384 => 121,  381 => 152,  379 => 119,  374 => 147,  368 => 140,  365 => 111,  362 => 110,  360 => 77,  355 => 85,  341 => 139,  337 => 103,  322 => 127,  314 => 99,  312 => 121,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 24,  264 => 84,  258 => 81,  252 => 124,  247 => 120,  241 => 109,  229 => 101,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 66,  132 => 12,  128 => 57,  111 => 37,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 100,  246 => 95,  243 => 88,  240 => 86,  238 => 105,  235 => 103,  230 => 82,  227 => 100,  224 => 71,  221 => 56,  219 => 76,  217 => 75,  208 => 68,  204 => 48,  179 => 83,  159 => 61,  143 => 69,  135 => 13,  131 => 58,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 39,  63 => 21,  59 => 17,  47 => 9,  38 => 6,  94 => 46,  89 => 20,  85 => 43,  79 => 41,  75 => 17,  68 => 14,  56 => 15,  50 => 1,  29 => 3,  87 => 25,  72 => 43,  55 => 15,  21 => 2,  26 => 6,  98 => 9,  93 => 6,  88 => 44,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 4,  35 => 5,  31 => 5,  43 => 8,  41 => 3,  28 => 3,  201 => 47,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 75,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 33,  117 => 54,  115 => 53,  105 => 12,  101 => 10,  91 => 27,  69 => 34,  66 => 28,  62 => 9,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 94,  203 => 92,  199 => 67,  193 => 73,  189 => 105,  187 => 51,  182 => 66,  176 => 82,  173 => 43,  168 => 40,  164 => 77,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 56,  122 => 43,  116 => 41,  112 => 52,  109 => 34,  106 => 50,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 42,  80 => 19,  73 => 38,  64 => 38,  60 => 13,  57 => 5,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
