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
    
    <button id=\"btnNavRapide\" type=\"button\" onclick=\"Modalbox.show('navRapide.php',{width: 200, title: 'Navigation rapide'}); return false;\">Navigation rapide</button>
    <!--Nav pour les musique-->
    
    ";
        // line 8
        $this->env->loadTemplate("::barreNavigation.html.twig")->display($context);
        // line 9
        echo "</div>
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
        return array (  29 => 9,  27 => 8,  33 => 10,  26 => 7,  19 => 2,  100 => 42,  97 => 41,  91 => 7,  85 => 46,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  72 => 39,  70 => 38,  51 => 21,  38 => 12,  21 => 2,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 11,  34 => 10,  31 => 9,  28 => 8,);
    }
}
