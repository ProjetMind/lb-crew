<?php

/* ::headerNiveauTrois.html.twig */
class __TwigTemplate_ba72120acd0471ed7f9e72368a58758b extends Twig_Template
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
<div id=\"HeaderNiveauTrois\">
    
    <!-- Bouton de naviagtion rapide -->
    <div id=\"btnNavRapide\" class=\"btn-group blockNavRapide\">
        <button class=\"btn btn-primary\">Navigation rapide</button>
        <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
    
            <span class=\"caret\"></span>
            
        </button>
        
        <ul class=\"dropdown-menu\">
            ";
        // line 15
        $this->env->loadTemplate("::navRapide.html.twig")->display($context);
        // line 16
        echo "        </ul>
    </div>
    
    <!-- Barre de navigation musique -->
    ";
        // line 20
        $this->env->loadTemplate("::barreNavigation.html.twig")->display($context);
        // line 21
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "::headerNiveauTrois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  42 => 20,  23 => 4,  36 => 16,  33 => 10,  31 => 9,  26 => 7,  19 => 2,  240 => 52,  237 => 51,  231 => 7,  225 => 65,  133 => 63,  129 => 57,  126 => 56,  124 => 55,  121 => 54,  119 => 51,  116 => 50,  113 => 49,  111 => 48,  92 => 31,  87 => 28,  82 => 20,  38 => 12,  34 => 15,  28 => 8,  21 => 2,);
    }
}
