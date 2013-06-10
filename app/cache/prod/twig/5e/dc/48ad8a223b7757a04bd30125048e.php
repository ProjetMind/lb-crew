<?php

/* LBcrewSiteBundle::layout.html.twig */
class __TwigTemplate_5edc48ad8a223b7757a04bd30125048e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        $this->env->loadTemplate("LBcrewSiteBundle:Site:MenuGauche.html.twig")->display($context);
        // line 9
        echo "
    ";
        // line 10
        $this->env->loadTemplate("LBcrewSiteBundle:Site:MenuDroit.html.twig")->display($context);
        // line 11
        echo "
    ";
        // line 12
        $this->env->loadTemplate("LBcrewSiteBundle:Site:index.html.twig")->display($context);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "LBcrewSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  34 => 8,  31 => 7,  28 => 6,);
    }
}
