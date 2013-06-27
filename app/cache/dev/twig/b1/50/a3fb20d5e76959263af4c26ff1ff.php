<?php

/* ::navigation.html.twig */
class __TwigTemplate_b150a3fb20d5e76959263af4c26ff1ff extends Twig_Template
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
<div id=\"navigationRapide\">

    <div class=\"media\">
        <a class=\"pull-left\" href=\"#\">
            <img class=\"media-object\" data-src=\"holder.js/88x88/text:Pages\" src=\"/lb-crew/web/bundles/lbcrewsite/images/iconeavatar.png\"/>
        </a>
        <div class=\"media-body\">
        <h1 class=\"media-heading\"><a href=\"#\" title=\"\">Pages</a></h1>
        
        
            ";
        // line 13
        echo twig_var_dump($this->env, $context, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        echo "
        </div>
    </div>

    <ul class=\"breadcrumb\">
            <li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
            <li><a href=\"#\">Library</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">Data</li>
    </ul>

</div>


    ";
    }

    public function getTemplateName()
    {
        return "::navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 13,  19 => 2,);
    }
}
