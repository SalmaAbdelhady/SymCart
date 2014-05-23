<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_a007845ad4311744b1afb86c3281766a4f64dd1f930db884189734b192dc6283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 32
        echo "
";
    }

    // line 1
    public function getflash($_type = null, $_message = null, $_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "message" => $_message,
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                echo "alert-dismissable";
            }
            echo "\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 4
                echo "        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadvanced_flash($_type = null, $_heading = null, $_message = null, $_close_tag = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "heading" => $_heading,
            "message" => $_message,
            "close_tag" => $_close_tag,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                echo "alert-dismissable";
            }
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                // line 17
                echo "        ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "a")) {
                    echo "href=\"#\"";
                } elseif (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "button")) {
                    echo "type=\"button\"";
                }
                echo ">&times;</";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter((isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsession_flash($_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["flash_messages"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
                // line 37
                echo "        ";
                $context["mapping"] = twig_array_merge($this->env->getExtension('mopa_bootstrap_flash')->getMapping(), array("fos_user_success" => "success"));
                // line 38
                echo "        ";
                $context["flashes"] = array();
                // line 39
                echo "
        ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping"))));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 41
                    echo "            ";
                    $context["flashes"] = twig_array_merge((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")), array((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "method")));
                    // line 42
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : $this->getContext($context, "flashes")));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 45
                    echo "            ";
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "fos_user_success")) {
                        // line 46
                        echo "                ";
                        $context["domain"] = "FOSUserBundle";
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 49
                        echo "                ";
                        echo $context["flash_messages"]->getflash($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : $this->getContext($context, "mapping")), (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "array"), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 47,  211 => 41,  207 => 40,  198 => 37,  190 => 34,  126 => 20,  104 => 15,  418 => 144,  405 => 142,  395 => 161,  389 => 158,  378 => 151,  361 => 137,  358 => 136,  351 => 133,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  315 => 122,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 27,  277 => 26,  260 => 22,  257 => 21,  250 => 51,  222 => 98,  206 => 93,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  170 => 80,  167 => 79,  155 => 74,  150 => 71,  134 => 59,  97 => 47,  53 => 14,  445 => 126,  441 => 115,  438 => 114,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 103,  401 => 101,  390 => 96,  385 => 93,  382 => 92,  376 => 149,  371 => 141,  363 => 78,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  279 => 54,  276 => 53,  263 => 23,  259 => 104,  256 => 52,  251 => 99,  249 => 96,  244 => 111,  239 => 90,  236 => 48,  234 => 73,  231 => 72,  226 => 62,  223 => 44,  218 => 97,  215 => 96,  212 => 95,  197 => 90,  194 => 89,  192 => 106,  184 => 50,  181 => 47,  178 => 46,  165 => 39,  161 => 35,  152 => 26,  148 => 30,  146 => 70,  137 => 62,  127 => 36,  114 => 31,  90 => 5,  84 => 128,  77 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 116,  423 => 142,  413 => 134,  409 => 132,  407 => 144,  402 => 141,  398 => 100,  393 => 97,  387 => 122,  384 => 121,  381 => 152,  379 => 119,  374 => 147,  368 => 140,  365 => 111,  362 => 110,  360 => 77,  355 => 85,  341 => 139,  337 => 103,  322 => 127,  314 => 99,  312 => 121,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 24,  264 => 84,  258 => 81,  252 => 124,  247 => 120,  241 => 49,  229 => 101,  220 => 43,  214 => 42,  177 => 65,  169 => 60,  140 => 22,  132 => 12,  128 => 57,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 100,  243 => 88,  240 => 86,  238 => 105,  235 => 103,  230 => 46,  227 => 45,  224 => 71,  221 => 56,  219 => 76,  217 => 75,  208 => 68,  204 => 39,  179 => 83,  159 => 61,  143 => 23,  135 => 13,  119 => 42,  102 => 32,  71 => 19,  67 => 39,  63 => 7,  59 => 17,  38 => 6,  94 => 46,  89 => 20,  85 => 43,  75 => 11,  68 => 14,  56 => 4,  87 => 14,  21 => 2,  26 => 6,  93 => 6,  88 => 44,  78 => 21,  46 => 7,  27 => 1,  44 => 4,  31 => 5,  28 => 3,  201 => 38,  196 => 36,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 28,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 33,  117 => 17,  105 => 12,  91 => 27,  62 => 9,  49 => 19,  24 => 4,  25 => 3,  19 => 13,  79 => 41,  72 => 43,  69 => 9,  47 => 9,  40 => 8,  37 => 10,  22 => 32,  246 => 95,  157 => 56,  145 => 46,  139 => 18,  131 => 58,  123 => 19,  120 => 18,  115 => 16,  111 => 37,  108 => 36,  101 => 10,  98 => 9,  96 => 31,  83 => 25,  74 => 45,  66 => 28,  55 => 15,  52 => 2,  50 => 1,  43 => 2,  41 => 3,  35 => 5,  32 => 4,  29 => 3,  209 => 94,  203 => 92,  199 => 67,  193 => 35,  189 => 105,  187 => 51,  182 => 66,  176 => 33,  173 => 43,  168 => 40,  164 => 30,  162 => 57,  154 => 58,  149 => 25,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 56,  122 => 43,  116 => 41,  112 => 52,  109 => 34,  106 => 50,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 42,  80 => 19,  73 => 38,  64 => 38,  60 => 6,  57 => 5,  54 => 3,  51 => 14,  48 => 13,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
