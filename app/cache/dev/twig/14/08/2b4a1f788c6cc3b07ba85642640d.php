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
        return array (  44 => 21,  42 => 20,  23 => 4,  36 => 16,  33 => 10,  31 => 9,  26 => 6,  19 => 2,  240 => 52,  237 => 51,  231 => 7,  225 => 65,  133 => 63,  129 => 57,  126 => 56,  124 => 55,  121 => 54,  119 => 51,  116 => 50,  113 => 49,  111 => 48,  92 => 31,  87 => 28,  82 => 20,  38 => 12,  34 => 15,  28 => 9,  21 => 2,);
    }
}
