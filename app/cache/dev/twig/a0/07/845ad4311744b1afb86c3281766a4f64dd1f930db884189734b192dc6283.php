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
        return array (  233 => 47,  230 => 46,  220 => 43,  214 => 42,  211 => 41,  207 => 40,  198 => 37,  196 => 36,  193 => 35,  190 => 34,  149 => 25,  126 => 20,  123 => 19,  120 => 18,  104 => 15,  87 => 14,  75 => 11,  60 => 6,  54 => 3,  27 => 1,  418 => 144,  407 => 144,  405 => 142,  402 => 141,  395 => 161,  389 => 158,  381 => 152,  378 => 151,  374 => 147,  361 => 137,  358 => 136,  351 => 133,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  322 => 127,  315 => 122,  312 => 121,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 27,  277 => 26,  268 => 24,  260 => 22,  257 => 21,  252 => 124,  250 => 51,  247 => 120,  238 => 105,  235 => 103,  227 => 45,  222 => 98,  206 => 93,  203 => 92,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  179 => 83,  176 => 33,  170 => 80,  167 => 79,  164 => 30,  155 => 74,  150 => 71,  140 => 22,  134 => 59,  131 => 58,  128 => 57,  115 => 16,  106 => 50,  103 => 49,  97 => 47,  94 => 46,  88 => 44,  85 => 43,  73 => 38,  66 => 28,  63 => 7,  56 => 4,  53 => 14,  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 103,  401 => 101,  398 => 100,  393 => 97,  390 => 96,  385 => 93,  382 => 92,  376 => 149,  371 => 141,  368 => 140,  363 => 78,  360 => 77,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  341 => 139,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  283 => 56,  279 => 54,  276 => 53,  263 => 23,  259 => 104,  256 => 52,  254 => 100,  251 => 99,  249 => 96,  246 => 95,  244 => 111,  241 => 49,  239 => 90,  236 => 48,  234 => 73,  231 => 72,  229 => 101,  226 => 62,  223 => 44,  221 => 56,  218 => 97,  215 => 96,  212 => 95,  209 => 94,  204 => 39,  201 => 38,  197 => 90,  194 => 89,  192 => 106,  189 => 105,  187 => 51,  184 => 50,  181 => 47,  178 => 46,  173 => 43,  168 => 40,  165 => 39,  161 => 35,  158 => 28,  152 => 26,  148 => 30,  146 => 70,  143 => 23,  139 => 18,  137 => 62,  135 => 13,  132 => 12,  127 => 36,  125 => 56,  121 => 33,  117 => 17,  114 => 31,  112 => 52,  107 => 19,  105 => 12,  101 => 10,  98 => 9,  93 => 6,  90 => 5,  84 => 128,  82 => 42,  79 => 41,  77 => 40,  74 => 45,  72 => 43,  69 => 9,  67 => 39,  62 => 9,  59 => 17,  57 => 5,  52 => 2,  50 => 1,  71 => 19,  64 => 38,  55 => 15,  48 => 13,  30 => 7,  39 => 7,  29 => 3,  26 => 6,  51 => 14,  44 => 4,  42 => 8,  35 => 5,  31 => 5,  43 => 2,  41 => 3,  28 => 3,  24 => 2,  32 => 4,  25 => 3,  22 => 32,  19 => 13,);
    }
}
