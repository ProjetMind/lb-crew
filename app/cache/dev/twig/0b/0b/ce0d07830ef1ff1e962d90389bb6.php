<?php

/* LBcrewSiteBundle:Site:MenuGauche.html.twig */
class __TwigTemplate_0b0bce0d07830ef1ff1e962d90389bb6 extends Twig_Template
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

<nav id=\"menuGauche\">
    <ul>
        <li><a href=\"#\" title=\"\">";
        // line 6
        $this->env->loadTemplate("::userMenu.html.twig")->display($context);
        echo "</a></li>
        
        <li class=\"titreMenuItem\">Derniers inscrits</li>
        <li><a href=\"#\" title=\"\">Hipopeur</a></li>
        <li><a href=\"#\" title=\"\">Lb crew</a></li>
        <li><a href=\"#\" title=\"\">Da hip hop show</a></li>
        
        <li class=\"titreMenuItem\">Groupe</li>
        <li><a href=\"#\" title=\"\">lb crew family</a></li>
        <li><a href=\"#\" title=\"\">CB crew</a></li>
        
        <li class=\"titreMenuItem\">Médias</li>
        <li><a href=\"#\" title=\"\">vidéos</a></li>
        <li><a href=\"#\" title=\"\">Musiques</a></li>
        <li><a href=\"#\" title=\"\">Photos</a></li>
        
    </ul>
</nav>

";
    }

    public function getTemplateName()
    {
        return "LBcrewSiteBundle:Site:MenuGauche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,);
    }
}
