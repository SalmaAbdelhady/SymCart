<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_3a5c56d3f0fa6513a5ef093507b35c8a0597da4301f0505f5be7a4d9b1624972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "
        ";
            // line 4
            $context["_bg_class"] = "bg-light-blue";
            // line 5
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            // line 6
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 7
            echo "        ";
            $context["_user_image"] = $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "defaultAvatar"));
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            // line 10
            echo "
        ";
            // line 11
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 12
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 13
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit")));
                // line 14
                echo "            ";
                $context["_logout_text"] = "(exit)";
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        <li class=\"user-header ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) ? $context["_bg_class"] : $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 18
            if ((isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image"))) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 21
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "</p>
        </li>

";
            // line 30
            echo "
        <li class=\"user-footer\">
";
            // line 38
            echo "
            <div class=\"pull-right\">
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) ? $context["_logout_uri"] : $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) ? $context["_logout_text"] : $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  203 => 55,  196 => 52,  193 => 51,  188 => 48,  183 => 46,  160 => 38,  150 => 35,  143 => 33,  132 => 28,  118 => 23,  108 => 21,  105 => 20,  102 => 19,  93 => 17,  68 => 10,  57 => 27,  43 => 8,  33 => 16,  54 => 26,  50 => 11,  40 => 7,  28 => 3,  20 => 1,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 411,  278 => 410,  276 => 395,  273 => 394,  271 => 374,  268 => 373,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  243 => 327,  240 => 326,  235 => 311,  225 => 298,  222 => 297,  220 => 290,  215 => 280,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  194 => 248,  191 => 246,  186 => 47,  181 => 232,  179 => 44,  176 => 223,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  156 => 195,  154 => 36,  149 => 182,  144 => 176,  141 => 175,  139 => 169,  131 => 160,  126 => 26,  124 => 25,  121 => 24,  119 => 117,  116 => 116,  114 => 111,  111 => 22,  106 => 104,  104 => 90,  101 => 89,  96 => 18,  94 => 40,  91 => 56,  84 => 41,  79 => 21,  69 => 13,  238 => 312,  233 => 304,  230 => 303,  227 => 301,  224 => 79,  217 => 56,  214 => 75,  212 => 279,  200 => 54,  197 => 249,  189 => 240,  187 => 69,  184 => 233,  180 => 66,  177 => 43,  174 => 42,  171 => 216,  168 => 41,  165 => 61,  162 => 60,  157 => 37,  153 => 55,  151 => 188,  146 => 34,  140 => 52,  136 => 30,  134 => 161,  129 => 27,  125 => 46,  109 => 105,  103 => 43,  100 => 42,  95 => 41,  89 => 47,  86 => 30,  83 => 37,  80 => 13,  74 => 20,  71 => 18,  64 => 16,  99 => 68,  90 => 38,  77 => 12,  66 => 12,  63 => 14,  58 => 14,  55 => 13,  52 => 12,  39 => 12,  35 => 5,  27 => 14,  25 => 12,  22 => 12,  19 => 11,  49 => 17,  37 => 6,  34 => 5,  31 => 4,  29 => 3,  26 => 2,  87 => 14,  81 => 40,  76 => 31,  73 => 19,  67 => 17,  61 => 15,  56 => 28,  53 => 18,  51 => 9,  48 => 8,  45 => 9,  42 => 7,  38 => 18,  36 => 6,  32 => 4,  30 => 17,  24 => 13,  21 => 11,);
    }
}
