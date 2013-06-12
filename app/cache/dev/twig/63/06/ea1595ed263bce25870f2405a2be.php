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
        return array (  26 => 6,  44 => 21,  42 => 20,  36 => 16,  23 => 4,  24 => 13,  40 => 14,  35 => 12,  33 => 11,  30 => 10,  19 => 1,  215 => 31,  212 => 30,  206 => 7,  200 => 47,  108 => 45,  104 => 39,  98 => 35,  96 => 34,  93 => 33,  91 => 30,  88 => 29,  86 => 28,  76 => 20,  38 => 13,  34 => 15,  28 => 9,  21 => 2,);
    }
}
