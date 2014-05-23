<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_33bdee4c88eda33e84445a6d5b61980419ef85ee10a7d03423ac955920d461da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . ((((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "")) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline")) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 75
            echo "            ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 55,  956 => 271,  953 => 270,  946 => 302,  942 => 300,  933 => 296,  925 => 292,  917 => 291,  914 => 290,  909 => 288,  901 => 285,  898 => 284,  890 => 281,  887 => 280,  879 => 277,  870 => 274,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  822 => 244,  820 => 243,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  791 => 262,  788 => 233,  778 => 267,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  743 => 217,  738 => 214,  720 => 211,  717 => 210,  713 => 209,  700 => 205,  688 => 202,  682 => 201,  679 => 200,  673 => 198,  665 => 196,  660 => 194,  647 => 191,  641 => 189,  632 => 187,  626 => 184,  616 => 182,  610 => 181,  603 => 179,  600 => 178,  597 => 177,  588 => 175,  561 => 161,  554 => 224,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  525 => 157,  522 => 156,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  373 => 102,  370 => 101,  304 => 81,  296 => 151,  291 => 80,  274 => 53,  216 => 35,  624 => 224,  620 => 223,  612 => 220,  601 => 216,  594 => 176,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  551 => 221,  545 => 198,  536 => 194,  526 => 190,  523 => 189,  514 => 167,  511 => 166,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  410 => 110,  404 => 90,  391 => 163,  369 => 148,  354 => 101,  340 => 91,  320 => 84,  318 => 86,  261 => 50,  321 => 100,  306 => 95,  303 => 94,  300 => 93,  287 => 77,  275 => 86,  12 => 36,  118 => 49,  327 => 102,  323 => 85,  319 => 124,  265 => 51,  262 => 81,  228 => 41,  213 => 82,  110 => 45,  23 => 11,  20 => 11,  270 => 84,  180 => 66,  175 => 47,  172 => 51,  160 => 39,  113 => 46,  100 => 42,  65 => 29,  58 => 28,  34 => 14,  1402 => 417,  1400 => 416,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1297 => 381,  1287 => 379,  1279 => 377,  1273 => 376,  1256 => 369,  1251 => 368,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1145 => 322,  1143 => 321,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1036 => 284,  1032 => 283,  1029 => 282,  1016 => 276,  1014 => 272,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  939 => 243,  936 => 297,  934 => 241,  931 => 295,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  894 => 226,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  873 => 217,  865 => 272,  862 => 212,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 246,  825 => 196,  817 => 192,  798 => 184,  796 => 233,  785 => 232,  783 => 177,  780 => 303,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 220,  751 => 163,  746 => 161,  729 => 155,  715 => 151,  712 => 150,  710 => 149,  707 => 208,  699 => 142,  697 => 141,  696 => 204,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  635 => 188,  619 => 183,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  564 => 162,  557 => 96,  555 => 200,  547 => 93,  515 => 305,  512 => 84,  509 => 228,  503 => 81,  490 => 142,  478 => 74,  459 => 116,  456 => 68,  450 => 114,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 109,  403 => 48,  377 => 37,  366 => 150,  350 => 26,  342 => 23,  335 => 133,  332 => 88,  311 => 83,  288 => 79,  281 => 75,  253 => 78,  248 => 100,  245 => 335,  210 => 59,  202 => 55,  186 => 51,  124 => 51,  81 => 38,  76 => 30,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 421,  1410 => 474,  1408 => 419,  1398 => 415,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 396,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 382,  1295 => 432,  1291 => 380,  1286 => 430,  1283 => 378,  1277 => 425,  1271 => 375,  1268 => 374,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 367,  1246 => 366,  1240 => 412,  1234 => 410,  1231 => 358,  1225 => 407,  1223 => 356,  1217 => 405,  1214 => 404,  1211 => 349,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 342,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 327,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 299,  1058 => 347,  1055 => 346,  1048 => 290,  1045 => 342,  1042 => 341,  1040 => 285,  1033 => 339,  1027 => 281,  1024 => 280,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 271,  1004 => 266,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 256,  963 => 309,  959 => 308,  955 => 252,  950 => 269,  947 => 249,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 289,  903 => 286,  900 => 228,  897 => 227,  895 => 293,  892 => 282,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 273,  863 => 269,  860 => 268,  857 => 267,  850 => 276,  844 => 204,  838 => 272,  826 => 271,  819 => 270,  816 => 241,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  797 => 259,  795 => 258,  794 => 257,  793 => 182,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 264,  767 => 170,  749 => 218,  742 => 244,  739 => 156,  737 => 242,  735 => 241,  732 => 213,  724 => 154,  721 => 153,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 135,  680 => 134,  676 => 199,  674 => 219,  670 => 217,  668 => 197,  666 => 126,  663 => 195,  657 => 193,  655 => 209,  650 => 192,  644 => 190,  640 => 119,  638 => 118,  633 => 202,  629 => 186,  613 => 200,  607 => 180,  604 => 197,  599 => 215,  596 => 106,  593 => 105,  590 => 193,  587 => 192,  584 => 173,  582 => 190,  579 => 189,  570 => 164,  567 => 183,  558 => 160,  553 => 180,  550 => 94,  535 => 177,  532 => 192,  529 => 159,  527 => 91,  524 => 90,  521 => 172,  518 => 180,  516 => 170,  513 => 230,  510 => 164,  507 => 156,  504 => 155,  501 => 154,  498 => 160,  496 => 79,  493 => 143,  486 => 154,  470 => 121,  467 => 72,  464 => 125,  458 => 147,  447 => 113,  443 => 142,  439 => 141,  432 => 140,  428 => 116,  421 => 90,  411 => 132,  400 => 47,  388 => 42,  364 => 112,  359 => 144,  356 => 126,  346 => 107,  343 => 92,  338 => 130,  329 => 130,  326 => 86,  316 => 16,  301 => 80,  286 => 84,  271 => 108,  266 => 366,  255 => 353,  237 => 71,  225 => 67,  195 => 54,  174 => 64,  129 => 47,  70 => 29,  233 => 82,  211 => 81,  207 => 33,  198 => 55,  190 => 49,  126 => 66,  104 => 43,  418 => 112,  405 => 108,  395 => 125,  389 => 158,  378 => 151,  361 => 137,  358 => 139,  351 => 141,  348 => 132,  339 => 136,  333 => 132,  330 => 103,  325 => 128,  315 => 98,  308 => 13,  302 => 79,  299 => 116,  293 => 90,  290 => 90,  284 => 76,  280 => 87,  277 => 109,  260 => 104,  257 => 103,  250 => 44,  222 => 66,  206 => 57,  200 => 73,  191 => 26,  188 => 25,  185 => 61,  170 => 80,  167 => 56,  155 => 73,  150 => 34,  134 => 49,  97 => 41,  53 => 17,  445 => 126,  441 => 115,  438 => 114,  424 => 114,  422 => 110,  419 => 109,  415 => 127,  412 => 126,  406 => 111,  401 => 89,  390 => 43,  385 => 159,  382 => 92,  376 => 103,  371 => 35,  363 => 32,  353 => 82,  349 => 80,  347 => 140,  344 => 24,  336 => 135,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 84,  310 => 83,  307 => 82,  295 => 87,  292 => 91,  289 => 112,  279 => 77,  276 => 395,  263 => 365,  259 => 104,  256 => 79,  251 => 101,  249 => 96,  244 => 43,  239 => 64,  236 => 42,  234 => 64,  231 => 69,  226 => 62,  223 => 60,  218 => 59,  215 => 280,  212 => 74,  197 => 72,  194 => 52,  192 => 53,  184 => 68,  181 => 73,  178 => 48,  165 => 61,  161 => 75,  152 => 36,  148 => 49,  146 => 53,  137 => 29,  127 => 52,  114 => 50,  90 => 38,  84 => 34,  77 => 35,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 116,  423 => 57,  413 => 134,  409 => 131,  407 => 144,  402 => 107,  398 => 88,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 36,  368 => 34,  365 => 141,  362 => 148,  360 => 128,  355 => 27,  341 => 131,  337 => 90,  322 => 96,  314 => 99,  312 => 97,  309 => 82,  305 => 119,  298 => 91,  294 => 90,  285 => 78,  283 => 83,  278 => 410,  268 => 107,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 49,  229 => 101,  220 => 65,  214 => 75,  177 => 65,  169 => 78,  140 => 52,  132 => 57,  128 => 47,  107 => 44,  61 => 29,  273 => 85,  269 => 94,  254 => 46,  243 => 66,  240 => 72,  238 => 84,  235 => 63,  230 => 81,  227 => 80,  224 => 79,  221 => 38,  219 => 84,  217 => 76,  208 => 72,  204 => 57,  179 => 44,  159 => 196,  143 => 33,  135 => 44,  119 => 44,  102 => 43,  71 => 33,  67 => 19,  63 => 22,  59 => 20,  38 => 20,  94 => 60,  89 => 39,  85 => 36,  75 => 32,  68 => 30,  56 => 25,  87 => 57,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 37,  46 => 19,  27 => 14,  44 => 16,  31 => 15,  28 => 14,  201 => 56,  196 => 52,  183 => 50,  171 => 63,  166 => 209,  163 => 40,  158 => 74,  156 => 38,  151 => 54,  142 => 30,  138 => 49,  136 => 50,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 15,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 33,  47 => 14,  40 => 19,  37 => 16,  22 => 12,  246 => 67,  157 => 57,  145 => 53,  139 => 51,  131 => 48,  123 => 65,  120 => 46,  115 => 47,  111 => 43,  108 => 45,  101 => 42,  98 => 36,  96 => 40,  83 => 37,  74 => 34,  66 => 23,  55 => 18,  52 => 23,  50 => 21,  43 => 12,  41 => 11,  35 => 19,  32 => 18,  29 => 15,  209 => 58,  203 => 32,  199 => 82,  193 => 51,  189 => 70,  187 => 69,  182 => 23,  176 => 309,  173 => 46,  168 => 62,  164 => 55,  162 => 60,  154 => 36,  149 => 35,  147 => 52,  144 => 26,  141 => 72,  133 => 69,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 105,  109 => 45,  106 => 64,  103 => 43,  99 => 41,  95 => 41,  92 => 59,  86 => 38,  82 => 33,  80 => 36,  73 => 29,  64 => 30,  60 => 24,  57 => 19,  54 => 19,  51 => 25,  48 => 24,  45 => 23,  42 => 18,  39 => 15,  36 => 17,  33 => 16,  30 => 13,);
    }
}
