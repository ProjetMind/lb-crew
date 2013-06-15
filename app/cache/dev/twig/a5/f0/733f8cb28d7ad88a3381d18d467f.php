<?php

/* BcBootstrapBundle:Pagination:pagination.html.twig */
class __TwigTemplate_a5f0733f8cb28d7ad88a3381d18d467f extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("style", $context))) {
            // line 4
            echo "    ";
            $context["style"] = "pagination";
        }
        // line 6
        echo "
";
        // line 7
        if ((!array_key_exists("prev_label", $context))) {
            // line 8
            echo "    ";
            $context["prev_label"] = "Previous";
        }
        // line 10
        if ((!array_key_exists("next_label", $context))) {
            // line 11
            echo "    ";
            $context["next_label"] = "Next";
        }
        // line 13
        if ((!array_key_exists("first_label", $context))) {
            // line 14
            echo "    ";
            $context["first_label"] = "First";
        }
        // line 16
        if ((!array_key_exists("last_label", $context))) {
            // line 17
            echo "    ";
            $context["last_label"] = "Last";
        }
        // line 19
        echo "

";
        // line 21
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 22
            echo "    ";
            if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "pagination")) {
                // line 23
                echo "        ";
                $context["orientation_class"] = "";
                // line 24
                echo "        ";
                if (array_key_exists("alignment", $context)) {
                    // line 25
                    echo "            ";
                    if (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "center")) {
                        // line 26
                        echo "                ";
                        $context["orientation_class"] = " pagination-centered";
                        // line 27
                        echo "            ";
                    } elseif (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "right")) {
                        // line 28
                        echo "                ";
                        $context["orientation_class"] = " pagination-right";
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        <div class=\"pagination";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["orientation_class"]) ? $context["orientation_class"] : $this->getContext($context, "orientation_class")), "html", null, true);
                echo "\">
            <ul>
            ";
                // line 34
                if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) ? $context["first_label"] : $this->getContext($context, "first_label"));
                    echo "</a></li>
            ";
                }
                // line 37
                echo "
            ";
                // line 38
                if (array_key_exists("previous", $context)) {
                    // line 39
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                }
                // line 41
                echo "
            ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 43
                    echo "                ";
                    if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                        // line 44
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 46
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 48
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
            ";
                // line 51
                if (array_key_exists("next", $context)) {
                    // line 52
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) ? $context["last_label"] : $this->getContext($context, "last_label"));
                    echo "</a></li>
            ";
                }
                // line 58
                echo "            </ul>
        </div>
    ";
            } else {
                // line 61
                echo "        ";
                if ((!array_key_exists("aligned", $context))) {
                    // line 62
                    echo "            ";
                    $context["aligned"] = false;
                    // line 63
                    echo "        ";
                }
                // line 64
                echo "        <ul class=\"pager\">
            ";
                // line 65
                if (array_key_exists("previous", $context)) {
                    // line 66
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</span></li>
            ";
                }
                // line 70
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 71
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 73
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</span></li>
            ";
                }
                // line 75
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BcBootstrapBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  232 => 73,  195 => 66,  190 => 64,  181 => 61,  166 => 55,  482 => 4,  480 => 3,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  440 => 167,  437 => 166,  427 => 162,  424 => 161,  416 => 158,  413 => 157,  401 => 155,  391 => 149,  387 => 147,  381 => 144,  379 => 143,  375 => 141,  367 => 136,  363 => 134,  359 => 132,  356 => 130,  352 => 129,  349 => 126,  347 => 125,  344 => 122,  341 => 120,  334 => 114,  326 => 109,  324 => 108,  321 => 106,  319 => 105,  316 => 103,  313 => 101,  311 => 100,  309 => 99,  304 => 96,  300 => 93,  298 => 92,  281 => 89,  262 => 87,  257 => 84,  255 => 82,  253 => 81,  250 => 79,  238 => 73,  233 => 71,  224 => 65,  219 => 64,  213 => 62,  208 => 60,  200 => 55,  193 => 65,  188 => 51,  176 => 58,  168 => 56,  156 => 40,  150 => 50,  125 => 29,  86 => 172,  69 => 155,  56 => 78,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 167,  776 => 165,  769 => 162,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 151,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 145,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 121,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 108,  607 => 107,  604 => 106,  601 => 105,  599 => 104,  596 => 103,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 76,  528 => 75,  525 => 74,  516 => 69,  514 => 68,  511 => 67,  505 => 65,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  469 => 49,  467 => 48,  461 => 46,  458 => 45,  456 => 44,  453 => 43,  447 => 41,  441 => 39,  439 => 38,  435 => 36,  433 => 35,  430 => 34,  421 => 160,  418 => 159,  412 => 26,  409 => 25,  395 => 151,  389 => 21,  383 => 145,  377 => 142,  374 => 16,  371 => 138,  369 => 14,  366 => 13,  357 => 8,  351 => 6,  348 => 5,  346 => 4,  343 => 3,  339 => 119,  337 => 117,  335 => 551,  333 => 550,  331 => 112,  329 => 111,  327 => 547,  325 => 546,  323 => 545,  320 => 544,  317 => 542,  315 => 536,  312 => 535,  310 => 529,  307 => 97,  305 => 516,  302 => 515,  299 => 513,  297 => 506,  294 => 505,  284 => 487,  279 => 461,  277 => 440,  274 => 439,  272 => 434,  269 => 433,  264 => 88,  256 => 420,  251 => 409,  244 => 383,  241 => 74,  239 => 379,  236 => 72,  231 => 364,  229 => 355,  226 => 354,  217 => 70,  210 => 292,  207 => 68,  202 => 283,  199 => 282,  197 => 276,  192 => 269,  187 => 63,  182 => 49,  179 => 48,  174 => 46,  169 => 240,  167 => 234,  164 => 233,  137 => 46,  134 => 170,  129 => 44,  124 => 136,  117 => 118,  107 => 103,  99 => 90,  97 => 74,  87 => 34,  77 => 3,  53 => 15,  23 => 4,  49 => 16,  40 => 7,  20 => 1,  266 => 431,  261 => 427,  259 => 85,  254 => 410,  252 => 41,  246 => 394,  240 => 7,  234 => 365,  142 => 177,  128 => 30,  110 => 21,  301 => 100,  295 => 96,  292 => 498,  289 => 497,  287 => 488,  282 => 462,  276 => 86,  273 => 85,  270 => 84,  268 => 50,  263 => 80,  249 => 395,  245 => 77,  230 => 75,  222 => 351,  220 => 71,  215 => 310,  211 => 61,  204 => 289,  198 => 63,  185 => 50,  183 => 60,  177 => 247,  160 => 57,  112 => 22,  82 => 29,  65 => 16,  38 => 9,  144 => 36,  141 => 35,  135 => 47,  126 => 43,  109 => 38,  103 => 34,  67 => 24,  61 => 22,  47 => 9,  105 => 15,  93 => 9,  76 => 27,  72 => 14,  68 => 25,  27 => 8,  91 => 32,  84 => 171,  94 => 73,  88 => 31,  79 => 28,  59 => 21,  21 => 2,  44 => 29,  31 => 7,  28 => 6,  225 => 96,  216 => 63,  212 => 309,  205 => 84,  201 => 83,  196 => 54,  194 => 275,  191 => 52,  189 => 268,  186 => 76,  180 => 72,  172 => 241,  159 => 41,  154 => 213,  147 => 37,  132 => 156,  127 => 137,  121 => 26,  118 => 39,  114 => 117,  104 => 102,  100 => 33,  78 => 24,  75 => 23,  71 => 156,  58 => 21,  34 => 9,  26 => 4,  24 => 4,  25 => 6,  19 => 2,  70 => 25,  63 => 23,  46 => 59,  22 => 3,  163 => 54,  155 => 52,  152 => 198,  149 => 197,  145 => 46,  139 => 176,  131 => 42,  123 => 47,  120 => 52,  115 => 39,  106 => 37,  101 => 36,  96 => 34,  83 => 18,  80 => 24,  74 => 157,  66 => 154,  55 => 19,  52 => 15,  50 => 10,  43 => 13,  41 => 28,  37 => 10,  35 => 8,  32 => 10,  29 => 9,  184 => 62,  178 => 71,  171 => 45,  165 => 43,  162 => 42,  157 => 214,  153 => 51,  151 => 52,  143 => 48,  138 => 34,  136 => 33,  133 => 32,  130 => 31,  122 => 42,  119 => 41,  116 => 24,  111 => 39,  108 => 20,  102 => 91,  98 => 35,  95 => 34,  92 => 58,  89 => 173,  85 => 30,  81 => 170,  73 => 26,  64 => 23,  60 => 23,  57 => 14,  54 => 71,  51 => 17,  48 => 13,  45 => 14,  42 => 9,  39 => 11,  36 => 14,  33 => 8,  30 => 6,);
    }
}
