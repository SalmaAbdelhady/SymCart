<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig */
class __TwigTemplate_f63589fd94f56d5a0b5d9546d9b2441158204bed114c078429a7662df70ec8a8 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters"))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
                // line 47
                echo "
                    <a  href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasroute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 59
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 68
            echo "            </span>

            ";
            // line 70
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
                // line 71
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                    title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 80
            echo "        </span>

        ";
            // line 82
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
            // line 83
            echo "    </div>

    ";
            // line 85
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  162 => 71,  563 => 188,  560 => 187,  555 => 185,  549 => 182,  543 => 179,  537 => 176,  528 => 173,  525 => 172,  523 => 171,  514 => 168,  511 => 167,  508 => 165,  495 => 158,  491 => 157,  487 => 156,  474 => 150,  460 => 143,  455 => 141,  449 => 138,  442 => 134,  436 => 132,  433 => 130,  426 => 126,  420 => 123,  403 => 117,  387 => 110,  384 => 109,  380 => 107,  366 => 106,  354 => 101,  337 => 97,  314 => 88,  304 => 85,  272 => 81,  267 => 78,  216 => 70,  213 => 69,  186 => 82,  175 => 77,  169 => 74,  159 => 70,  142 => 61,  320 => 92,  311 => 87,  309 => 117,  305 => 115,  288 => 107,  281 => 105,  275 => 103,  269 => 100,  265 => 99,  253 => 95,  243 => 89,  232 => 84,  228 => 83,  217 => 79,  210 => 75,  156 => 68,  153 => 56,  65 => 30,  119 => 43,  96 => 40,  160 => 70,  133 => 49,  124 => 41,  113 => 41,  95 => 43,  145 => 52,  136 => 58,  130 => 57,  118 => 49,  111 => 78,  108 => 48,  122 => 44,  100 => 36,  33 => 16,  144 => 62,  138 => 50,  116 => 43,  110 => 48,  76 => 33,  23 => 18,  78 => 36,  20 => 11,  99 => 41,  92 => 35,  89 => 40,  86 => 33,  81 => 30,  46 => 35,  37 => 16,  61 => 25,  47 => 19,  45 => 19,  36 => 16,  102 => 38,  68 => 31,  40 => 19,  58 => 25,  49 => 20,  38 => 17,  34 => 26,  21 => 12,  1883 => 659,  1881 => 658,  1879 => 657,  1876 => 656,  1871 => 653,  1860 => 651,  1855 => 650,  1852 => 649,  1849 => 648,  1840 => 643,  1837 => 642,  1833 => 640,  1827 => 638,  1824 => 637,  1821 => 636,  1818 => 635,  1812 => 633,  1806 => 631,  1803 => 630,  1800 => 627,  1780 => 625,  1777 => 624,  1774 => 623,  1771 => 622,  1768 => 621,  1765 => 620,  1763 => 619,  1760 => 618,  1757 => 617,  1754 => 616,  1751 => 615,  1749 => 614,  1746 => 613,  1742 => 612,  1740 => 611,  1737 => 610,  1730 => 603,  1724 => 601,  1718 => 599,  1716 => 598,  1714 => 597,  1711 => 596,  1704 => 589,  1700 => 587,  1693 => 585,  1690 => 581,  1686 => 580,  1681 => 579,  1678 => 578,  1671 => 576,  1668 => 571,  1663 => 570,  1660 => 569,  1657 => 568,  1654 => 567,  1639 => 565,  1636 => 564,  1632 => 563,  1629 => 562,  1611 => 561,  1609 => 560,  1607 => 559,  1604 => 558,  1596 => 552,  1594 => 551,  1592 => 550,  1590 => 549,  1587 => 548,  1578 => 544,  1573 => 542,  1571 => 541,  1568 => 540,  1560 => 535,  1554 => 533,  1552 => 532,  1532 => 531,  1529 => 530,  1521 => 524,  1518 => 523,  1512 => 521,  1509 => 520,  1506 => 519,  1503 => 518,  1498 => 516,  1495 => 515,  1492 => 514,  1490 => 513,  1487 => 512,  1478 => 507,  1475 => 506,  1472 => 505,  1469 => 504,  1467 => 503,  1464 => 502,  1455 => 498,  1453 => 497,  1450 => 496,  1443 => 490,  1438 => 489,  1436 => 488,  1433 => 487,  1425 => 480,  1419 => 478,  1417 => 477,  1414 => 476,  1410 => 474,  1408 => 473,  1398 => 471,  1392 => 469,  1390 => 468,  1387 => 467,  1384 => 466,  1381 => 465,  1379 => 464,  1376 => 463,  1374 => 462,  1368 => 460,  1362 => 458,  1359 => 457,  1357 => 456,  1354 => 455,  1345 => 451,  1339 => 449,  1335 => 448,  1330 => 447,  1324 => 444,  1321 => 443,  1318 => 442,  1316 => 441,  1313 => 440,  1306 => 437,  1303 => 436,  1295 => 432,  1291 => 431,  1286 => 430,  1283 => 429,  1277 => 425,  1271 => 423,  1268 => 422,  1262 => 420,  1260 => 419,  1252 => 418,  1249 => 417,  1246 => 416,  1240 => 412,  1234 => 410,  1231 => 409,  1225 => 407,  1223 => 406,  1217 => 405,  1214 => 404,  1211 => 403,  1204 => 400,  1201 => 399,  1193 => 393,  1187 => 391,  1184 => 390,  1178 => 388,  1175 => 387,  1169 => 385,  1166 => 384,  1160 => 382,  1158 => 381,  1154 => 380,  1152 => 379,  1136 => 378,  1133 => 377,  1130 => 376,  1127 => 375,  1124 => 374,  1121 => 373,  1118 => 372,  1115 => 371,  1112 => 370,  1109 => 369,  1106 => 368,  1103 => 367,  1100 => 366,  1098 => 365,  1096 => 364,  1093 => 363,  1081 => 359,  1078 => 358,  1075 => 357,  1072 => 356,  1070 => 355,  1067 => 354,  1058 => 347,  1055 => 346,  1048 => 343,  1045 => 342,  1042 => 341,  1040 => 340,  1033 => 339,  1027 => 337,  1024 => 336,  1021 => 335,  1019 => 334,  1017 => 333,  1015 => 332,  1012 => 331,  1004 => 327,  1001 => 326,  999 => 325,  996 => 324,  988 => 320,  985 => 319,  983 => 318,  980 => 317,  971 => 311,  967 => 310,  963 => 309,  959 => 308,  955 => 307,  950 => 306,  947 => 305,  944 => 304,  938 => 302,  932 => 299,  924 => 298,  912 => 297,  903 => 296,  900 => 295,  897 => 294,  895 => 293,  892 => 292,  883 => 287,  880 => 286,  874 => 284,  872 => 283,  868 => 282,  863 => 281,  860 => 280,  857 => 279,  850 => 276,  844 => 273,  838 => 272,  826 => 271,  819 => 270,  816 => 269,  814 => 268,  812 => 267,  809 => 266,  801 => 261,  797 => 259,  795 => 258,  794 => 257,  793 => 256,  792 => 255,  789 => 254,  786 => 253,  779 => 250,  773 => 247,  767 => 246,  749 => 245,  742 => 244,  739 => 243,  737 => 242,  735 => 241,  732 => 240,  724 => 235,  721 => 234,  719 => 233,  711 => 229,  708 => 228,  706 => 227,  693 => 226,  685 => 224,  683 => 223,  680 => 222,  676 => 220,  674 => 219,  670 => 217,  668 => 216,  666 => 215,  663 => 214,  657 => 210,  655 => 209,  650 => 208,  644 => 207,  640 => 205,  638 => 204,  633 => 202,  629 => 201,  613 => 200,  607 => 198,  604 => 197,  599 => 196,  596 => 195,  593 => 194,  590 => 193,  587 => 192,  584 => 191,  582 => 190,  579 => 189,  570 => 184,  567 => 183,  558 => 186,  553 => 184,  550 => 179,  535 => 177,  532 => 174,  529 => 175,  527 => 174,  524 => 173,  521 => 172,  518 => 170,  516 => 170,  513 => 169,  510 => 164,  507 => 163,  504 => 162,  501 => 161,  498 => 160,  496 => 159,  493 => 158,  486 => 154,  470 => 153,  467 => 152,  464 => 151,  458 => 147,  447 => 143,  443 => 142,  439 => 133,  432 => 140,  428 => 139,  423 => 138,  421 => 137,  411 => 120,  409 => 131,  400 => 116,  388 => 122,  379 => 118,  364 => 112,  362 => 111,  359 => 110,  356 => 109,  346 => 107,  343 => 106,  338 => 104,  329 => 99,  326 => 98,  316 => 94,  301 => 89,  286 => 84,  271 => 79,  266 => 77,  255 => 73,  240 => 72,  237 => 86,  225 => 61,  195 => 51,  174 => 59,  171 => 63,  163 => 58,  157 => 56,  154 => 67,  147 => 52,  129 => 57,  109 => 40,  91 => 39,  83 => 32,  80 => 31,  70 => 29,  233 => 71,  230 => 46,  220 => 80,  214 => 42,  211 => 41,  207 => 40,  198 => 52,  196 => 68,  193 => 35,  190 => 34,  149 => 62,  126 => 42,  123 => 54,  120 => 46,  104 => 43,  87 => 33,  75 => 32,  60 => 25,  54 => 19,  27 => 14,  418 => 136,  407 => 144,  405 => 118,  402 => 141,  395 => 125,  389 => 158,  381 => 119,  378 => 151,  374 => 116,  361 => 137,  358 => 103,  351 => 108,  348 => 132,  339 => 136,  333 => 132,  330 => 131,  325 => 94,  322 => 93,  315 => 120,  312 => 121,  308 => 86,  302 => 117,  299 => 112,  293 => 109,  290 => 111,  284 => 106,  280 => 82,  277 => 81,  268 => 78,  260 => 98,  257 => 74,  252 => 72,  250 => 93,  247 => 120,  238 => 105,  235 => 103,  227 => 45,  222 => 81,  206 => 55,  203 => 54,  200 => 91,  191 => 69,  188 => 83,  185 => 68,  179 => 66,  176 => 77,  170 => 74,  167 => 57,  164 => 72,  155 => 52,  150 => 65,  140 => 47,  134 => 59,  131 => 48,  128 => 47,  115 => 50,  106 => 50,  103 => 46,  97 => 41,  94 => 69,  88 => 33,  85 => 34,  73 => 29,  66 => 26,  63 => 27,  56 => 24,  53 => 24,  445 => 126,  441 => 115,  438 => 114,  427 => 116,  424 => 145,  422 => 110,  419 => 109,  415 => 121,  412 => 145,  406 => 130,  401 => 101,  398 => 115,  393 => 112,  390 => 96,  385 => 121,  382 => 92,  376 => 149,  371 => 115,  368 => 140,  363 => 78,  360 => 104,  355 => 85,  353 => 82,  349 => 80,  347 => 77,  344 => 140,  341 => 105,  336 => 135,  334 => 75,  331 => 96,  328 => 73,  324 => 71,  317 => 91,  313 => 93,  310 => 92,  307 => 91,  295 => 87,  292 => 86,  289 => 82,  283 => 83,  279 => 104,  276 => 53,  263 => 76,  259 => 104,  256 => 96,  254 => 100,  251 => 99,  249 => 74,  246 => 68,  244 => 111,  241 => 49,  239 => 90,  236 => 48,  234 => 64,  231 => 63,  229 => 101,  226 => 62,  223 => 60,  221 => 56,  218 => 59,  215 => 78,  212 => 57,  209 => 94,  204 => 73,  201 => 72,  197 => 70,  194 => 89,  192 => 85,  189 => 65,  187 => 51,  184 => 50,  181 => 61,  178 => 46,  173 => 43,  168 => 60,  165 => 72,  161 => 54,  158 => 53,  152 => 51,  148 => 64,  146 => 49,  143 => 23,  139 => 60,  137 => 46,  135 => 45,  132 => 58,  127 => 56,  125 => 45,  121 => 53,  117 => 51,  114 => 50,  112 => 49,  107 => 44,  105 => 47,  101 => 37,  98 => 44,  93 => 34,  90 => 34,  84 => 39,  82 => 33,  79 => 31,  77 => 58,  74 => 34,  72 => 31,  69 => 33,  67 => 27,  62 => 29,  59 => 23,  57 => 22,  52 => 21,  50 => 20,  71 => 29,  64 => 26,  55 => 22,  48 => 40,  30 => 15,  39 => 17,  29 => 16,  26 => 13,  51 => 23,  44 => 21,  42 => 18,  35 => 16,  31 => 14,  43 => 18,  41 => 20,  28 => 13,  24 => 13,  32 => 15,  25 => 13,  22 => 12,  19 => 11,);
    }
}
