<?php

/* ::headerNiveauDeux.html.twig */
class __TwigTemplate_4079d332a990cb8749bed6ba2a812cb0 extends Twig_Template
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
<section id=\"HeaderNiveauDeux\" class=\"row-fluid\">
   
    <ul class=\"breadcrumb\">
        <li><a href=\"#\">Accueil</a> <span class=\"divider\">|</span></li>
        <li><a href=\"#\">Vidéo</a> <span class=\"divider\">|</span></li>
        <li><a href=\"#\">Musique</a> <span class=\"divider\">|</span></li>
        <li><a href=\"#\">Evénements</a> <span class=\"divider\">|</span></li>
        <li>
            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\">
                    Autres
                    <b class=\"caret\"></b>
                </a>
                <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                    <li><a href=\"#\">Photos</a></li>
                    <li><a href=\"#\">professeur</a></li>
                    <li><a href=\"#\">DJ</a></li>
                    <li><a href=\"#\">Ecoles</a></li>
                </ul>
            </div>
        </li>
    </ul>
    
</section>

    
";
    }

    public function getTemplateName()
    {
        return "::headerNiveauDeux.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
