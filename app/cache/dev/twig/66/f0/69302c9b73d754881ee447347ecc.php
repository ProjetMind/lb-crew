<?php

/* LBcrewMediaBundle::layout.html.twig */
class __TwigTemplate_66f069302c9b73d754881ee447347ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Lb crew - Ajouter une vidéo ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        $this->env->loadTemplate("LBcrewMediaBundle:Media:MenuGauche.html.twig")->display($context);
        // line 11
        echo "
    ";
        // line 12
        $this->env->loadTemplate("LBcrewMediaBundle:Media:MenuDroit.html.twig")->display($context);
        // line 13
        echo "
    ";
        // line 14
        $this->env->loadTemplate("LBcrewMediaBundle:media:index.html.twig")->display($context);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "LBcrewMediaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  23 => 4,  87 => 25,  62 => 19,  40 => 11,  20 => 1,  221 => 35,  218 => 34,  206 => 54,  110 => 45,  97 => 37,  90 => 32,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 9,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 28,  67 => 18,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 20,  72 => 20,  68 => 25,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 4,  28 => 6,  225 => 96,  216 => 90,  212 => 7,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 52,  104 => 36,  100 => 27,  78 => 24,  75 => 23,  71 => 19,  58 => 21,  34 => 5,  26 => 4,  24 => 6,  25 => 3,  19 => 2,  70 => 20,  63 => 23,  46 => 12,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 36,  66 => 15,  55 => 12,  52 => 15,  50 => 8,  43 => 11,  41 => 10,  37 => 8,  35 => 8,  32 => 4,  29 => 6,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 39,  98 => 22,  95 => 34,  92 => 33,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 17,  60 => 14,  57 => 14,  54 => 16,  51 => 14,  48 => 13,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 8,  30 => 6,);
    }
}
