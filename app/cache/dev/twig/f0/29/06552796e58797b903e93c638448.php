<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_f02906552796e58797b903e93c638448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  170 => 60,  90 => 28,  62 => 16,  340 => 158,  288 => 129,  228 => 89,  214 => 82,  206 => 78,  203 => 77,  158 => 56,  148 => 58,  140 => 49,  113 => 40,  242 => 75,  232 => 73,  195 => 66,  190 => 64,  181 => 61,  166 => 55,  482 => 4,  480 => 3,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  440 => 167,  437 => 166,  427 => 162,  424 => 161,  416 => 158,  413 => 157,  401 => 155,  391 => 149,  387 => 147,  381 => 144,  379 => 143,  375 => 141,  367 => 136,  363 => 134,  359 => 132,  356 => 163,  352 => 129,  349 => 126,  347 => 160,  344 => 122,  341 => 120,  334 => 114,  326 => 109,  324 => 108,  321 => 106,  319 => 105,  316 => 145,  313 => 101,  311 => 100,  309 => 141,  304 => 96,  300 => 93,  298 => 92,  281 => 125,  262 => 87,  257 => 84,  255 => 82,  253 => 81,  250 => 79,  238 => 97,  233 => 71,  224 => 65,  219 => 64,  213 => 62,  208 => 60,  200 => 55,  193 => 65,  188 => 67,  176 => 61,  168 => 56,  156 => 40,  150 => 50,  125 => 44,  86 => 29,  69 => 20,  56 => 13,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 167,  776 => 165,  769 => 162,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 151,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 145,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 121,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 108,  607 => 107,  604 => 106,  601 => 105,  599 => 104,  596 => 103,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 76,  528 => 75,  525 => 74,  516 => 69,  514 => 68,  511 => 67,  505 => 65,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  469 => 49,  467 => 48,  461 => 46,  458 => 45,  456 => 44,  453 => 43,  447 => 41,  441 => 39,  439 => 38,  435 => 36,  433 => 35,  430 => 34,  421 => 160,  418 => 159,  412 => 26,  409 => 25,  395 => 151,  389 => 21,  383 => 145,  377 => 142,  374 => 16,  371 => 138,  369 => 14,  366 => 13,  357 => 8,  351 => 6,  348 => 5,  346 => 4,  343 => 159,  339 => 119,  337 => 117,  335 => 157,  333 => 156,  331 => 112,  329 => 111,  327 => 547,  325 => 150,  323 => 149,  320 => 544,  317 => 542,  315 => 536,  312 => 535,  310 => 529,  307 => 97,  305 => 516,  302 => 137,  299 => 513,  297 => 506,  294 => 505,  284 => 487,  279 => 461,  277 => 440,  274 => 121,  272 => 434,  269 => 433,  264 => 88,  256 => 420,  251 => 409,  244 => 383,  241 => 74,  239 => 379,  236 => 72,  231 => 364,  229 => 355,  226 => 354,  217 => 83,  210 => 292,  207 => 68,  202 => 283,  199 => 282,  197 => 276,  192 => 72,  187 => 63,  182 => 64,  179 => 48,  174 => 67,  169 => 240,  167 => 64,  164 => 63,  137 => 46,  134 => 54,  129 => 44,  124 => 136,  117 => 118,  107 => 103,  99 => 90,  97 => 74,  87 => 34,  77 => 24,  53 => 15,  23 => 4,  49 => 13,  40 => 7,  20 => 1,  266 => 431,  261 => 427,  259 => 109,  254 => 410,  252 => 105,  246 => 394,  240 => 7,  234 => 365,  142 => 177,  128 => 45,  110 => 42,  301 => 100,  295 => 133,  292 => 498,  289 => 497,  287 => 488,  282 => 462,  276 => 86,  273 => 85,  270 => 84,  268 => 50,  263 => 80,  249 => 395,  245 => 101,  230 => 75,  222 => 351,  220 => 71,  215 => 310,  211 => 81,  204 => 71,  198 => 69,  185 => 68,  183 => 60,  177 => 247,  160 => 59,  112 => 22,  82 => 29,  65 => 16,  38 => 7,  144 => 36,  141 => 35,  135 => 47,  126 => 43,  109 => 38,  103 => 34,  67 => 23,  61 => 22,  47 => 11,  105 => 15,  93 => 31,  76 => 27,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 73,  88 => 31,  79 => 23,  59 => 21,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 63,  212 => 309,  205 => 71,  201 => 83,  196 => 54,  194 => 275,  191 => 70,  189 => 268,  186 => 76,  180 => 72,  172 => 64,  159 => 41,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 26,  118 => 39,  114 => 117,  104 => 35,  100 => 35,  78 => 24,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 4,  24 => 4,  25 => 6,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 3,  163 => 54,  155 => 52,  152 => 198,  149 => 197,  145 => 57,  139 => 176,  131 => 46,  123 => 47,  120 => 50,  115 => 44,  106 => 37,  101 => 36,  96 => 34,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 19,  52 => 14,  50 => 10,  43 => 13,  41 => 28,  37 => 10,  35 => 6,  32 => 5,  29 => 9,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 42,  157 => 214,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 33,  133 => 32,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 39,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 58,  89 => 29,  85 => 30,  81 => 24,  73 => 26,  64 => 23,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 14,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
