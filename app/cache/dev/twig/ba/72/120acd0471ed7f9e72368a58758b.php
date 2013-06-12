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
<section id=\"HeaderNiveauTrois\" class=\"row-fluid\">
    
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
</section>
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
        return array (  44 => 21,  42 => 20,  36 => 16,  23 => 4,  24 => 13,  40 => 14,  35 => 12,  33 => 11,  30 => 10,  19 => 2,  215 => 31,  212 => 30,  206 => 7,  200 => 47,  108 => 45,  104 => 39,  98 => 35,  96 => 34,  93 => 33,  91 => 30,  88 => 29,  86 => 28,  76 => 20,  38 => 13,  34 => 15,  28 => 9,  21 => 2,);
    }
}
