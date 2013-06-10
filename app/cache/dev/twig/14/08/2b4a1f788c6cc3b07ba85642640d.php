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
        return array (  44 => 21,  23 => 4,  36 => 16,  33 => 10,  31 => 9,  26 => 6,  19 => 2,  111 => 50,  108 => 49,  102 => 7,  96 => 54,  94 => 53,  91 => 52,  89 => 49,  86 => 48,  83 => 47,  81 => 46,  58 => 25,  53 => 22,  47 => 14,  42 => 20,  38 => 12,  34 => 15,  28 => 9,  21 => 2,);
    }
}
