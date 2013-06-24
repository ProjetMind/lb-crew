<?php

/* LBcrewUserBundle:Security:login.html.twig */
class __TwigTemplate_1f3ecce72992a4d5881a24a51a993c85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


";
        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "
";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form id=\"formHeaderConnexion\" class=\"form-inline\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
    
    <div>
        <input name=\"_username\" required=\"required\" placeholder=\"Email\" class=\"input-small\" type=\"email\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /> </br>
        <a href=\"#\">Mot de passe oublié</a>
    </div>
    
    <div>
        <input name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"input-small\" type=\"password\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"sign on\">
        <a href=\"#\" class=\"btn\">Inscription</a>
        </br>
        <label for=\"_remember_me\" class=\"checkbox required\">
            <input id=\"remember_me\" name=\"_remember_me\" value=\"on\" required=\"required\" type=\"checkbox\" /> Remember me
        </label>
    </div>
    
    
    
</form>
    
";
    }

    public function getTemplateName()
    {
        return "LBcrewUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 7,  20 => 1,  274 => 50,  272 => 49,  267 => 46,  265 => 45,  260 => 42,  258 => 41,  255 => 40,  252 => 39,  246 => 7,  240 => 74,  142 => 72,  128 => 58,  110 => 33,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  112 => 42,  82 => 24,  65 => 16,  38 => 6,  144 => 50,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  27 => 32,  91 => 20,  84 => 28,  94 => 20,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 12,  31 => 7,  28 => 7,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 49,  121 => 45,  118 => 39,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 10,  26 => 6,  24 => 3,  25 => 4,  19 => 1,  70 => 20,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 52,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 13,  52 => 15,  50 => 10,  43 => 7,  41 => 11,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 50,  133 => 43,  130 => 59,  122 => 44,  119 => 36,  116 => 35,  111 => 38,  108 => 32,  102 => 30,  98 => 22,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
