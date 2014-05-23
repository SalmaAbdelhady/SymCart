<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_3a2b2b891f43ad8613c5e922647fe7771f10a6aee016ef43fb8fc408436278d8 extends Twig_Template
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
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name") == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } elseif ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest"))) {
                // line 16
                echo "        ";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 17,  34 => 16,  31 => 15,  29 => 14,  26 => 13,  22 => 12,  19 => 11,  956 => 271,  953 => 270,  950 => 269,  946 => 302,  942 => 300,  936 => 297,  933 => 296,  931 => 295,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  903 => 286,  901 => 285,  898 => 284,  892 => 282,  890 => 281,  887 => 280,  881 => 278,  879 => 277,  876 => 276,  870 => 274,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  857 => 267,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  828 => 246,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  796 => 233,  791 => 262,  788 => 233,  785 => 232,  780 => 303,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  753 => 220,  749 => 218,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  707 => 208,  700 => 205,  696 => 204,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  603 => 179,  600 => 178,  597 => 177,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  418 => 112,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  343 => 92,  337 => 90,  332 => 88,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  221 => 38,  216 => 35,  203 => 32,  200 => 31,  197 => 30,  191 => 26,  188 => 25,  182 => 23,  176 => 309,  174 => 154,  171 => 153,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 72,  136 => 70,  133 => 69,  123 => 65,  106 => 64,  94 => 60,  92 => 59,  87 => 57,  83 => 55,  81 => 38,  78 => 37,  76 => 30,  73 => 29,  71 => 25,  66 => 23,  63 => 22,  61 => 21,  59 => 20,  57 => 19,  53 => 17,  51 => 16,  47 => 14,  45 => 13,  43 => 12,  41 => 11,  635 => 188,  624 => 224,  620 => 223,  612 => 220,  607 => 180,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 221,  545 => 198,  536 => 194,  532 => 192,  529 => 159,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 156,  504 => 155,  501 => 154,  497 => 156,  493 => 143,  490 => 142,  485 => 124,  474 => 122,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 114,  421 => 90,  415 => 127,  412 => 126,  410 => 110,  406 => 111,  404 => 90,  401 => 89,  398 => 88,  393 => 168,  391 => 163,  385 => 159,  381 => 105,  379 => 104,  376 => 103,  369 => 148,  359 => 144,  354 => 101,  351 => 141,  347 => 140,  340 => 91,  335 => 133,  333 => 132,  329 => 130,  326 => 86,  323 => 85,  320 => 84,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  287 => 77,  284 => 76,  281 => 75,  264 => 74,  261 => 50,  258 => 72,  252 => 68,  246 => 67,  243 => 66,  239 => 64,  235 => 63,  230 => 62,  224 => 39,  212 => 60,  210 => 59,  207 => 33,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  178 => 48,  175 => 47,  173 => 46,  169 => 78,  163 => 40,  160 => 39,  156 => 38,  152 => 36,  149 => 35,  144 => 26,  134 => 182,  131 => 181,  129 => 67,  126 => 66,  120 => 176,  117 => 175,  114 => 174,  110 => 172,  108 => 171,  105 => 170,  103 => 63,  100 => 62,  98 => 72,  95 => 71,  93 => 35,  90 => 34,  85 => 32,  80 => 31,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  67 => 26,  62 => 24,  58 => 22,  55 => 18,  49 => 15,  42 => 15,  39 => 18,);
    }
}
