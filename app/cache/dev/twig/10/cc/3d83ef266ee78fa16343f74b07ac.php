<?php

/* LBcrewMediaBundle:Alertes:alerteAjoutVideoOk.html.twig */
class __TwigTemplate_10cc3d83ef266ee78fa16343f74b07ac extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "    <div class=\"alert fade in\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <strong>Big Up !! </strong> ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "LBcrewMediaBundle:Alertes:alerteAjoutVideoOk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  87 => 25,  62 => 19,  40 => 11,  20 => 1,  227 => 35,  224 => 34,  218 => 7,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 20,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 28,  67 => 18,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 22,  72 => 20,  68 => 12,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 53,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 24,  75 => 23,  71 => 19,  58 => 18,  34 => 5,  26 => 4,  24 => 6,  25 => 3,  19 => 2,  70 => 20,  63 => 24,  46 => 9,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 51,  115 => 39,  106 => 38,  101 => 34,  96 => 32,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 12,  52 => 15,  50 => 8,  43 => 7,  41 => 10,  37 => 8,  35 => 5,  32 => 4,  29 => 8,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 45,  111 => 38,  108 => 39,  102 => 30,  98 => 33,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 17,  60 => 14,  57 => 14,  54 => 16,  51 => 11,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 5,  30 => 6,);
    }
}
