<?php

/* ::navRapide.html.twig */
class __TwigTemplate_6306ea1595ed263bce25870f2405a2be extends Twig_Template
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
        // line 1
        echo "<nav id=\"idNavRapide\">
    
    <ul class=\"modal-body\">
        <li id=\"liAccueilNavRapide\" style=\"text-align: center\">
        \t
                <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lb_crew_racine"), "html", null, true);
        echo "\" title=\"Accueil lb crew\">
                    <img src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/images/iconeaccueil.png\" alt=\"Icône accueil lb crew\"/>
                Accueil</a>
            </li>
            
            <li id=\"liVideoNavRapide\">
                <a href=\"/accueil/video/voir-video\" title=\"Vidéos lb crew\">
                    <img src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/images/iconevideo.png\" alt=\"Icône vidéos lb crew\"/>
                Vidéos</a>
            </li>
            
            <li id=\"liMusiqueNavRapide\">
                <a href=\"/accueil/musique/ecouter-musique\" title=\"Musique lb crew\">
                    <img src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/images/iconemusique.png\" alt=\"Icône  lb crew\"/>
               Musiques</a>
            </li>
            
            <li id=\"liPhotoNavRapide\">
                <a href=\"/accueil/photos/voir-photo\" title=\"Photo lb crew\">
                    <img src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/images/iconephoto.png\" alt=\"Icône photos lb crew\"/>
                Photos</a>
            </li>
            
            <li id=\"liNewNavRapide\">
                <a href=\"/accueil/news/voir-news\" title=\"News lb crew\">
                    <img src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/images/iconenews.png\" alt=\"Icône news lb crew\"/>
                News</a>
            </li>
        </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "::navRapide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 21,  42 => 20,  23 => 4,  36 => 16,  33 => 10,  31 => 9,  26 => 6,  19 => 1,  240 => 52,  237 => 51,  231 => 7,  225 => 65,  133 => 63,  129 => 57,  126 => 56,  124 => 55,  121 => 54,  119 => 51,  116 => 50,  113 => 49,  111 => 48,  92 => 31,  87 => 28,  82 => 20,  38 => 12,  34 => 15,  28 => 8,  21 => 2,);
    }
}
