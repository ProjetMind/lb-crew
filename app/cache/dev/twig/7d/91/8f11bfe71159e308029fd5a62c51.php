<?php

/* LBcrewMediaBundle:Formulaires:formVideo.html.twig */
class __TwigTemplate_7d918f11bfe71159e308029fd5a62c51 extends Twig_Template
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
<div class=\"input titre_video control-group\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_video"), 'label', array("label" => "Titre de la vidéo :"));
        echo "
    <div class=\"controls\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_video"), 'widget');
        echo " 
    </div>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre_video"), 'errors');
        echo "   
     
</div>

<div class=\"fichier control-group\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label', array("label" => "Votre vidéo :"));
        echo "
    <div class=\"controls\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'errors');
        echo "
    </div>
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
</div>

<div class=\"textarea control-group\">
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descrip_video"), 'label', array("label" => "Déscription de la vidéo :"));
        echo "
    <div class=\"controls\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descrip_video"), 'errors');
        echo "
    </div>
    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descrip_video"), 'widget');
        echo "
</div>

";
        // line 36
        echo "

        
    ";
    }

    public function getTemplateName()
    {
        return "LBcrewMediaBundle:Formulaires:formVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  62 => 19,  40 => 11,  20 => 1,  240 => 52,  237 => 51,  231 => 7,  129 => 57,  124 => 55,  113 => 49,  87 => 25,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 20,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 56,  109 => 41,  103 => 28,  67 => 18,  61 => 16,  47 => 9,  105 => 24,  93 => 29,  76 => 22,  72 => 20,  68 => 25,  27 => 4,  91 => 27,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 4,  28 => 6,  225 => 65,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 54,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 24,  75 => 23,  71 => 19,  58 => 21,  34 => 5,  26 => 4,  24 => 6,  25 => 3,  19 => 2,  70 => 20,  63 => 23,  46 => 15,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 36,  66 => 15,  55 => 12,  52 => 15,  50 => 8,  43 => 7,  41 => 13,  37 => 8,  35 => 5,  32 => 4,  29 => 8,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 63,  130 => 47,  122 => 44,  119 => 51,  116 => 50,  111 => 48,  108 => 37,  102 => 30,  98 => 22,  95 => 34,  92 => 31,  89 => 19,  85 => 24,  81 => 24,  73 => 19,  64 => 17,  60 => 14,  57 => 14,  54 => 16,  51 => 17,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 8,  30 => 6,);
    }
}
