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
        return array (  86 => 48,  53 => 22,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 11,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 14,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 4,  91 => 52,  84 => 28,  94 => 53,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 7,  28 => 7,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 25,  34 => 10,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 13,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 54,  83 => 47,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 11,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 50,  108 => 49,  102 => 7,  98 => 22,  95 => 34,  92 => 28,  89 => 49,  85 => 24,  81 => 46,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 12,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
