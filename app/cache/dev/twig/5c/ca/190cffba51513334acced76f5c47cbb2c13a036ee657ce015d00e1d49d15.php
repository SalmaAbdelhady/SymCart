<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_5cca190cffba51513334acced76f5c47cbb2c13a036ee657ce015d00e1d49d15 extends Twig_Template
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
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 12,  19 => 11,  270 => 4,  268 => 3,  264 => 2,  253 => 1,  243 => 83,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 68,  198 => 66,  196 => 65,  192 => 64,  189 => 61,  187 => 60,  185 => 59,  182 => 57,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 49,  167 => 48,  165 => 47,  163 => 45,  160 => 44,  156 => 41,  137 => 37,  115 => 33,  113 => 31,  111 => 30,  100 => 23,  95 => 22,  90 => 20,  81 => 15,  45 => 28,  30 => 9,  27 => 8,  129 => 59,  117 => 34,  109 => 53,  107 => 52,  103 => 50,  97 => 47,  93 => 21,  91 => 44,  89 => 43,  84 => 16,  74 => 11,  72 => 10,  69 => 9,  66 => 29,  64 => 28,  60 => 81,  57 => 80,  55 => 79,  52 => 78,  44 => 18,  39 => 17,  34 => 15,  29 => 15,  26 => 13,  85 => 21,  82 => 39,  79 => 37,  76 => 18,  70 => 16,  63 => 40,  61 => 39,  58 => 38,  51 => 34,  49 => 31,  37 => 16,  35 => 15,  32 => 14,  154 => 40,  148 => 48,  142 => 46,  139 => 45,  135 => 44,  127 => 43,  124 => 42,  120 => 36,  114 => 39,  108 => 28,  105 => 51,  101 => 49,  98 => 31,  96 => 33,  92 => 25,  86 => 17,  80 => 28,  77 => 36,  73 => 17,  65 => 83,  62 => 82,  56 => 37,  53 => 22,  50 => 44,  47 => 43,  42 => 27,  40 => 20,  36 => 16,  31 => 14,  28 => 14,);
    }
}
