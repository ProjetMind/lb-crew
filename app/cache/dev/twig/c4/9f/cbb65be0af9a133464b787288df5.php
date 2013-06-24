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
        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ec7567_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_bootstrap_1.css");
            // line 18
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_responsive_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_3_mediaStyle_1.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_4_corpsStyle_1.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_4_headerStyle_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_4_menuDGStyle_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_4_modalbox_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7ec7567_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap_part_4_styleBase_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "7ec7567"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ec7567") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bootstrap.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        
    </head>

<body style=\"background-color: #F5F5F5;\">
    
    <div class=\"container-fluid\">
        
        <div class=\"row-fluid\">
            
            
            <span class=\"span12\">
                
            ";
        // line 32
        $this->env->loadTemplate("::header.html.twig")->display($context);
        // line 33
        echo "            
            <section id=\"containerCorps\" class=\"row-fluid\">    
                <span class=\"span1\"></span>
                <span class=\"span10\">
                    
                   <section id=\"corps\" class=\"row-fluid\">
                        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "                    </section>
                        
                 </span>
                 <span class=\"span1\"></span>
            </section>
                
            ";
        // line 58
        $this->env->loadTemplate("::footer.html.twig")->display($context);
        // line 59
        echo "                
            </span>
            
        </div>
    </div>
   
    ";
        // line 65
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b186120_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_jquery.min_1.js");
            // line 72
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-affix_1.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-alert_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-button_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-carousel_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-collapse_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-dropdown_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-modal_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-popover_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-scrollspy_9.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-tab_10.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-tooltip_11.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-transition_12.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_2_bootstrap-typeahead_13.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "b186120_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap_part_3_holder_1.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b186120"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b186120") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bootstrap.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 74
        echo "        
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue sur le site de la LB crew ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "                           <span class=\"span2\" id=\"menuGauche\">
                               ";
        // line 41
        $this->env->loadTemplate("::menuGauche.html.twig")->display($context);
        // line 42
        echo "                           </span>
                           
                           <span class=\"span7\">
                           ";
        // line 45
        $this->env->loadTemplate("::navigation.html.twig")->display($context);
        // line 46
        echo "                           </span>
                        
                           <span class=\"span3\" id=\"menuDroit\">
                               ";
        // line 49
        $this->env->loadTemplate("::menuDroit.html.twig")->display($context);
        // line 50
        echo "                           </span>
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
        return array (  274 => 50,  272 => 49,  267 => 46,  265 => 45,  260 => 42,  258 => 41,  255 => 40,  252 => 39,  246 => 7,  240 => 74,  142 => 72,  138 => 65,  130 => 59,  128 => 58,  120 => 52,  118 => 39,  110 => 33,  108 => 32,  94 => 20,  38 => 18,  34 => 10,  28 => 7,  21 => 2,);
    }
}
