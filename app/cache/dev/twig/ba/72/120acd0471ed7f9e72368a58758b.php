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
        return array (  44 => 21,  23 => 4,  36 => 16,  33 => 10,  31 => 9,  26 => 7,  19 => 2,  111 => 50,  108 => 49,  102 => 7,  96 => 54,  94 => 53,  91 => 52,  89 => 49,  86 => 48,  83 => 47,  81 => 46,  58 => 25,  53 => 22,  47 => 14,  42 => 20,  38 => 12,  34 => 15,  28 => 8,  21 => 2,);
    }
}
