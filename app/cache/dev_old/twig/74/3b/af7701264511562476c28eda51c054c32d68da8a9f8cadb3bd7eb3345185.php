<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_743baf7701264511562476c28eda51c054c32d68da8a9f8cadb3bd7eb3345185 extends Twig_Template
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
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  563 => 188,  560 => 187,  558 => 186,  555 => 185,  553 => 184,  549 => 182,  543 => 179,  537 => 176,  532 => 174,  528 => 173,  525 => 172,  523 => 171,  518 => 170,  514 => 168,  511 => 167,  508 => 165,  501 => 161,  495 => 158,  491 => 157,  487 => 156,  474 => 150,  460 => 143,  455 => 141,  449 => 138,  442 => 134,  439 => 133,  436 => 132,  433 => 130,  426 => 126,  420 => 123,  415 => 121,  411 => 120,  405 => 118,  403 => 117,  400 => 116,  398 => 115,  393 => 112,  387 => 110,  384 => 109,  380 => 107,  366 => 106,  360 => 104,  358 => 103,  354 => 101,  337 => 97,  331 => 96,  325 => 94,  322 => 93,  320 => 92,  317 => 91,  314 => 88,  311 => 87,  308 => 86,  304 => 85,  289 => 82,  272 => 81,  267 => 78,  249 => 74,  240 => 72,  233 => 71,  216 => 70,  213 => 69,  196 => 68,  192 => 66,  189 => 65,  186 => 64,  181 => 61,  174 => 59,  167 => 57,  161 => 54,  158 => 53,  155 => 52,  152 => 51,  146 => 49,  140 => 47,  137 => 46,  134 => 45,  132 => 44,  126 => 42,  124 => 41,  109 => 40,  105 => 39,  102 => 38,  98 => 37,  93 => 34,  87 => 33,  81 => 30,  73 => 29,  67 => 27,  64 => 26,  60 => 25,  55 => 22,  52 => 21,  49 => 20,  47 => 19,  43 => 18,  39 => 17,  36 => 16,  26 => 13,  21 => 12,  19 => 11,);
    }
}
