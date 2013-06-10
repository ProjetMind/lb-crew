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

    
<header>
    
    ";
        // line 7
        $this->env->loadTemplate("::headerNiveauUn.html.twig")->display($context);
        // line 8
        echo "        
    ";
        // line 9
        $this->env->loadTemplate("::headerNiveauDeux.html.twig")->display($context);
        // line 10
        echo "        
    ";
        // line 11
        $this->env->loadTemplate("::headerNiveauTrois.html.twig")->display($context);
        // line 12
        echo "        
</header>

<div id=\"conteneur\">";
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
        return array (  33 => 10,  26 => 7,  19 => 2,  100 => 42,  97 => 41,  91 => 7,  85 => 46,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  72 => 39,  70 => 38,  51 => 21,  38 => 12,  21 => 2,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 11,  34 => 10,  31 => 9,  28 => 8,);
    }
}
