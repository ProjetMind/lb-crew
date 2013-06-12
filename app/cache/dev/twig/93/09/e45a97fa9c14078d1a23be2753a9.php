<?php

/* ::header.html.twig */
class __TwigTemplate_9309e45a97fa9c14078d1a23be2753a9 extends Twig_Template
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

    
<header class=\"row-fluid\">
    
    <span class=\"span1\"></span>
    
    <span class=\"span10\">
        ";
        // line 10
        $this->env->loadTemplate("::headerNiveauUn.html.twig")->display($context);
        // line 11
        echo "
        ";
        // line 13
        echo "
        ";
        // line 15
        echo "     </span>
    
    <span class=\"span1\"></span>
</header>

";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  34 => 13,  31 => 11,  29 => 10,  19 => 2,);
    }
}
