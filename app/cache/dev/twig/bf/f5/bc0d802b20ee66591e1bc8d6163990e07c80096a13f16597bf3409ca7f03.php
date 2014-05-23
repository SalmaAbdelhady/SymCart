<?php

/* MopaBootstrapBundle::base_lessjs.html.twig */
class __TwigTemplate_bff5bc0d802b20ee66591e1bc8d6163990e07c80096a13f16597bf3409ca7f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base_less.html.twig");

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
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
    public function block_head_style($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/less/frontend.less"), "html", null, true);
        echo "\">
";
    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        // line 8
        echo "<script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_lessjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 144,  407 => 144,  405 => 142,  402 => 141,  395 => 161,  389 => 158,  381 => 152,  378 => 151,  374 => 147,  361 => 137,  358 => 136,  351 => 133,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  322 => 127,  315 => 122,  312 => 121,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 27,  277 => 26,  268 => 24,  260 => 22,  257 => 21,  252 => 124,  250 => 121,  247 => 120,  238 => 105,  235 => 103,  227 => 100,  222 => 98,  206 => 93,  203 => 92,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  179 => 83,  176 => 82,  170 => 80,  167 => 79,  164 => 77,  155 => 74,  150 => 71,  140 => 66,  134 => 59,  131 => 58,  128 => 57,  115 => 53,  106 => 50,  103 => 49,  97 => 47,  94 => 46,  88 => 44,  85 => 43,  73 => 38,  66 => 28,  63 => 21,  56 => 15,  53 => 14,  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 103,  401 => 101,  398 => 100,  393 => 97,  390 => 96,  385 => 93,  382 => 92,  376 => 149,  371 => 141,  368 => 140,  363 => 78,  360 => 77,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  341 => 139,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  283 => 56,  279 => 54,  276 => 53,  263 => 23,  259 => 104,  256 => 103,  254 => 100,  251 => 99,  249 => 96,  246 => 95,  244 => 111,  241 => 109,  239 => 90,  236 => 89,  234 => 73,  231 => 72,  229 => 101,  226 => 62,  223 => 57,  221 => 56,  218 => 97,  215 => 96,  212 => 95,  209 => 94,  204 => 48,  201 => 47,  197 => 90,  194 => 89,  192 => 106,  189 => 105,  187 => 51,  184 => 50,  181 => 47,  178 => 46,  173 => 43,  168 => 40,  165 => 39,  161 => 35,  158 => 75,  152 => 32,  148 => 30,  146 => 70,  143 => 69,  139 => 18,  137 => 62,  135 => 13,  132 => 12,  127 => 36,  125 => 56,  121 => 33,  117 => 54,  114 => 31,  112 => 52,  107 => 19,  105 => 12,  101 => 10,  98 => 9,  93 => 6,  90 => 5,  84 => 128,  82 => 42,  79 => 41,  77 => 40,  74 => 45,  72 => 43,  69 => 34,  67 => 39,  62 => 9,  59 => 17,  57 => 5,  52 => 2,  50 => 1,  71 => 19,  64 => 38,  55 => 15,  48 => 13,  30 => 7,  39 => 7,  29 => 3,  26 => 6,  51 => 14,  44 => 4,  42 => 8,  35 => 5,  31 => 5,  43 => 6,  41 => 3,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
