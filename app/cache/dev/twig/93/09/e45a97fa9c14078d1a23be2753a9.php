<?php

/* ::header.html.twig */
class __TwigTemplate_9309e45a97fa9c14078d1a23be2753a9 extends Twig_Template
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

    
<header class=\"row-fluid\">
    
    <span class=\"span1\"></span>
    
    <span class=\"span10\" style=\"padding: 0px;\">
        
        ";
        // line 11
        $this->env->loadTemplate("::headerNiveauUn.html.twig")->display($context);
        // line 12
        echo "
        ";
        // line 13
        $this->env->loadTemplate("::headerNiveauDeux.html.twig")->display($context);
        // line 14
        echo "
        ";
        // line 16
        echo "        
     </span>
    
    <span class=\"span1\"></span>
</header>

";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  37 => 14,  35 => 13,  32 => 12,  30 => 11,  19 => 2,  268 => 50,  266 => 49,  261 => 46,  259 => 45,  254 => 42,  252 => 41,  249 => 40,  246 => 39,  240 => 7,  234 => 74,  142 => 72,  138 => 65,  130 => 59,  128 => 58,  120 => 52,  118 => 39,  110 => 33,  108 => 32,  94 => 20,  38 => 18,  34 => 10,  28 => 7,  21 => 2,);
    }
}
