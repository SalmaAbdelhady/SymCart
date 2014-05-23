<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_e425d49e9501e77757e84134e5fc3ba17d0b9fe1be5508a65fae405ebafbaef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"col-md-3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) {
                    // line 34
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</a></li>
                    ";
                } else {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 38
                echo "                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 40
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 42
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 47
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 49
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 51
            echo "            ";
        }
        // line 52
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  100 => 40,  33 => 11,  144 => 51,  138 => 49,  116 => 44,  110 => 42,  76 => 28,  23 => 27,  78 => 34,  20 => 1,  99 => 18,  92 => 38,  89 => 17,  86 => 36,  81 => 24,  46 => 21,  37 => 18,  61 => 27,  47 => 22,  45 => 20,  36 => 19,  102 => 12,  68 => 5,  40 => 19,  58 => 24,  49 => 22,  38 => 6,  34 => 18,  21 => 11,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 476,  1410 => 474,  1408 => 473,  1398 => 471,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 449,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 436,  1295 => 432,  1291 => 431,  1286 => 430,  1283 => 429,  1277 => 425,  1271 => 423,  1268 => 422,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 417,  1246 => 416,  1240 => 412,  1234 => 410,  1231 => 409,  1225 => 407,  1223 => 406,  1217 => 405,  1214 => 404,  1211 => 403,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 391,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 380,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 372,  1115 => 371,  1112 => 370,  1109 => 369,  1106 => 368,  1103 => 367,  1100 => 366,  1098 => 365,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 354,  1058 => 347,  1055 => 346,  1048 => 343,  1045 => 342,  1042 => 341,  1040 => 340,  1033 => 339,  1027 => 337,  1024 => 336,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 331,  1004 => 327,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 310,  963 => 309,  959 => 308,  955 => 307,  950 => 306,  947 => 305,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 296,  900 => 295,  897 => 294,  895 => 293,  892 => 292,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 280,  857 => 279,  850 => 276,  844 => 273,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 268,  812 => 267,  809 => 266,  801 => 261,  797 => 259,  795 => 258,  794 => 257,  793 => 256,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 246,  749 => 245,  742 => 244,  739 => 243,  737 => 242,  735 => 241,  732 => 240,  724 => 235,  721 => 234,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 223,  680 => 222,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 215,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 205,  638 => 204,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 195,  593 => 194,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 181,  553 => 180,  550 => 179,  535 => 177,  532 => 176,  529 => 175,  527 => 174,  524 => 173,  521 => 172,  518 => 171,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 161,  498 => 160,  496 => 159,  493 => 158,  486 => 154,  470 => 153,  467 => 152,  464 => 151,  458 => 147,  447 => 143,  443 => 142,  439 => 141,  432 => 140,  428 => 139,  423 => 138,  421 => 137,  411 => 132,  409 => 131,  400 => 126,  388 => 122,  379 => 118,  364 => 112,  362 => 111,  359 => 110,  356 => 109,  346 => 107,  343 => 106,  338 => 104,  329 => 99,  326 => 98,  316 => 94,  301 => 89,  286 => 84,  271 => 79,  266 => 77,  255 => 73,  240 => 66,  237 => 65,  225 => 61,  195 => 51,  174 => 43,  171 => 42,  163 => 36,  157 => 33,  154 => 32,  147 => 52,  129 => 26,  109 => 18,  91 => 28,  83 => 10,  80 => 9,  70 => 7,  233 => 47,  230 => 46,  220 => 43,  214 => 42,  211 => 41,  207 => 40,  198 => 52,  196 => 36,  193 => 35,  190 => 34,  149 => 25,  126 => 25,  123 => 43,  120 => 42,  104 => 37,  87 => 33,  75 => 33,  60 => 23,  54 => 23,  27 => 4,  418 => 136,  407 => 144,  405 => 142,  402 => 141,  395 => 125,  389 => 158,  381 => 119,  378 => 151,  374 => 116,  361 => 137,  358 => 136,  351 => 108,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 128,  322 => 96,  315 => 122,  312 => 121,  308 => 119,  302 => 117,  299 => 116,  293 => 112,  290 => 111,  284 => 98,  280 => 82,  277 => 81,  268 => 78,  260 => 75,  257 => 74,  252 => 72,  250 => 51,  247 => 120,  238 => 105,  235 => 103,  227 => 45,  222 => 98,  206 => 55,  203 => 54,  200 => 91,  191 => 88,  188 => 87,  185 => 85,  179 => 44,  176 => 33,  170 => 80,  167 => 79,  164 => 30,  155 => 74,  150 => 49,  140 => 22,  134 => 59,  131 => 44,  128 => 47,  115 => 16,  106 => 50,  103 => 16,  97 => 39,  94 => 39,  88 => 31,  85 => 11,  73 => 29,  66 => 27,  63 => 14,  56 => 23,  53 => 24,  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 145,  422 => 110,  419 => 109,  415 => 107,  412 => 145,  406 => 130,  401 => 101,  398 => 100,  393 => 124,  390 => 96,  385 => 121,  382 => 92,  376 => 149,  371 => 115,  368 => 140,  363 => 78,  360 => 77,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  341 => 105,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 93,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 85,  283 => 83,  279 => 54,  276 => 53,  263 => 76,  259 => 104,  256 => 52,  254 => 100,  251 => 99,  249 => 96,  246 => 68,  244 => 111,  241 => 49,  239 => 90,  236 => 48,  234 => 64,  231 => 63,  229 => 101,  226 => 62,  223 => 60,  221 => 56,  218 => 59,  215 => 58,  212 => 57,  209 => 94,  204 => 39,  201 => 53,  197 => 90,  194 => 89,  192 => 50,  189 => 49,  187 => 51,  184 => 50,  181 => 45,  178 => 46,  173 => 43,  168 => 41,  165 => 39,  161 => 35,  158 => 28,  152 => 26,  148 => 30,  146 => 70,  143 => 23,  139 => 18,  137 => 62,  135 => 45,  132 => 27,  127 => 36,  125 => 46,  121 => 33,  117 => 22,  114 => 31,  112 => 52,  107 => 13,  105 => 12,  101 => 25,  98 => 24,  93 => 6,  90 => 40,  84 => 32,  82 => 30,  79 => 41,  77 => 27,  74 => 24,  72 => 29,  69 => 32,  67 => 31,  62 => 14,  59 => 13,  57 => 5,  52 => 43,  50 => 23,  71 => 6,  64 => 21,  55 => 25,  48 => 21,  30 => 1,  39 => 13,  29 => 15,  26 => 14,  51 => 22,  44 => 21,  42 => 21,  35 => 17,  31 => 15,  43 => 20,  41 => 18,  28 => 14,  24 => 6,  32 => 16,  25 => 3,  22 => 1,  19 => 1,);
    }
}
