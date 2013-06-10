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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/src/LBcrew/MediaBundle/Resources/public/css/mediaStyle.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/src/LBcrew/SiteBundle/Resources/public/css/modalbox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/lb-crew/web/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"/>
        
        <!-- JS -->
        ";
        // line 22
        echo "        
        <!--[if lt IE 9]>
        <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 25
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
    
    <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
    <script src=\"/lb-crew/web/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/lb-crew/web/bootstrap/js/bootstrap-responsive.min.js\"></script>
    
    ";
        // line 46
        echo "        ";
        // line 47
        echo "        ";
        $this->env->loadTemplate("::header.html.twig")->display($context);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    
        ";
        // line 53
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 54
        echo "    
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur le site de la LB crew ";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
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
        return array (  111 => 50,  108 => 49,  102 => 7,  96 => 54,  94 => 53,  91 => 52,  89 => 49,  86 => 48,  83 => 47,  81 => 46,  58 => 25,  53 => 22,  47 => 14,  42 => 12,  38 => 11,  34 => 10,  28 => 7,  21 => 2,);
    }
}
