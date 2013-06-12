<?php

/* ::barreNavigation.html.twig */
class __TwigTemplate_14082b4a1f788c6cc3b07ba85642640d extends Twig_Template
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
 <div id=\"barreNavigation\"> 
    <ul class=\"nav nav-pills\">
        <li class=\"active\"><a href=\"#\" title=\"\">Morceaux</a></li>
        <li><a href=\"#\" title=\"\">Albums</a></li>
        <li><a href=\"#\" title=\"\">Artistes</a></li>
        <li><a href=\"#\" title=\"\">Genres</a></li>
        <li class=\"btn btn-primary\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter_video"), "html", null, true);
        echo "\" title=\"Ajouter une video\">Ajouter une vidéo</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "::barreNavigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  44 => 21,  42 => 20,  36 => 16,  23 => 4,  24 => 13,  40 => 14,  35 => 12,  33 => 11,  30 => 10,  19 => 2,  215 => 31,  212 => 30,  206 => 7,  200 => 47,  108 => 45,  104 => 39,  98 => 35,  96 => 34,  93 => 33,  91 => 30,  88 => 29,  86 => 28,  76 => 20,  38 => 13,  34 => 15,  28 => 9,  21 => 2,);
    }
}
