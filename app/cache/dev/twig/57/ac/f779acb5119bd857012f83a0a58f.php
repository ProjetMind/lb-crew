<?php

/* LBcrewMediaBundle:Media:index.html.twig */
class __TwigTemplate_57acf779acb5119bd857012f83a0a58f extends Twig_Template
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
<section>
    <h1>Ajouter une vidéo</h1>
    
    <div class=\"form_add_media\">
        
        ";
        // line 8
        $this->env->loadTemplate("LBcrewMediaBundle:Alertes:alerteAjoutVideoOk.html.twig")->display($context);
        // line 9
        echo "        
        <form method=\"post\" class=\"form-horizontal\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter_video"), "html", null, true);
        echo "\">
        
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
        
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            
            ";
        // line 16
        $this->env->loadTemplate("LBcrewMediaBundle:Formulaires:formVideo.html.twig")->display($context);
        // line 17
        echo "            
         ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        
        <div class=\"submit\">
            <input type=\"submit\" class=\"btn btn-primary\" />
        </div>
    
        </form>
            
    </div>
    
</section>
";
    }

    public function getTemplateName()
    {
        return "LBcrewMediaBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  23 => 4,  49 => 16,  40 => 7,  20 => 1,  266 => 49,  261 => 46,  259 => 45,  254 => 42,  252 => 41,  246 => 39,  240 => 7,  234 => 74,  142 => 72,  128 => 58,  110 => 33,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 50,  263 => 80,  249 => 40,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 9,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 25,  27 => 8,  91 => 20,  84 => 28,  94 => 20,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 14,  31 => 4,  28 => 6,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 39,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 21,  34 => 7,  26 => 4,  24 => 7,  25 => 4,  19 => 2,  70 => 20,  63 => 23,  46 => 12,  22 => 3,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 52,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 36,  66 => 15,  55 => 13,  52 => 15,  50 => 10,  43 => 11,  41 => 10,  37 => 8,  35 => 8,  32 => 10,  29 => 9,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 50,  133 => 43,  130 => 59,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 32,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 18,  51 => 17,  48 => 13,  45 => 8,  42 => 9,  39 => 12,  36 => 7,  33 => 8,  30 => 6,);
    }
}
