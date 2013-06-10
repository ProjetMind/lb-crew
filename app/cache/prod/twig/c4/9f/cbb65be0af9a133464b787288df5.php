<?php

/* ::layout.html.twig */
class __TwigTemplate_c49fcbb65be0af9a133464b787288df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/src/LBcrew/SiteBundle/Resources/public/css/styleBase.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/src/LBcrew/SiteBundle/Resources/public/css/modalbox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        
        <!-- JS -->
        <script src=\"//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js\"></script>
        <script src=\"//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js?¬
    load=builder,effects\"></script>
        <script src=\"/lb-crew/src/LBcrew/SiteBundle/Resources/public/js/modalbox.js\"></script>
        
        <!--[if lt IE 9]>
        <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/src/LBcrew/SiteBundle/Resources/public/css/internetExplorer.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <![endif]-->
        
        <!--[if lte IE 6]>
        <style type=\"text/css\">\t
        section {
            overflow: visible;
            height: 1%;
        }
        </style>
        <![endif]-->
        
    </head>

<body>
    
    ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        $this->env->loadTemplate("::header.html.twig")->display($context);
        // line 40
        echo "    
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    
        ";
        // line 45
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 46
        echo "    
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur le site de la LB crew ";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  97 => 41,  91 => 7,  85 => 46,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  72 => 39,  70 => 38,  51 => 21,  38 => 11,  21 => 2,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  34 => 10,  31 => 7,  28 => 7,);
    }
}
