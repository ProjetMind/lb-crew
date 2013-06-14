<?php

/* BcBootstrapBundle:Menu:menu.html.twig */
class __TwigTemplate_567e17db5295565da99e52b3b9996a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('list', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('dropdownList', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('listList', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('children', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('item', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('linkElement', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('dropdownElement', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('dividerElement', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('spanElement', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 20
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => 0));
        // line 21
        if ((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array(), "any", true, true)) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass") == "current"))) {
            // line 22
            echo "    ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentClass" => "active"));
        }
        // line 24
        echo "
";
        // line 25
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 26
        $this->displayBlock("list", $context, $blocks);
    }

    // line 29
    public function block_list($context, array $blocks = array())
    {
        // line 30
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 31
            echo "    ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " nav"))));
            // line 32
            echo "
    ";
            // line 33
            $context["listClass"] = "";
            // line 34
            echo "    ";
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "tabs"))) {
                // line 35
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 36
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "pills"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "stacked_tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "stacked_pills"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 44
                echo "    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "right"))) {
                // line 47
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . " pull-right"));
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "pull", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "pull") == "left"))) {
                // line 49
                echo "        ";
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter((isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass")), "")) : ("")) . "pull-left"));
                // line 50
                echo "    ";
            }
            // line 51
            echo "
    ";
            // line 52
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim((((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " ") . (isset($context["listClass"]) ? $context["listClass"] : $this->getContext($context, "listClass"))))));
            // line 53
            echo "
    <ul";
            // line 54
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 55
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 60
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 63
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => trim(((($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["listAttributes"]) ? $context["listAttributes"] : null), "class"), "")) : ("")) . " dropdown-menu"))));
            // line 64
            echo "        <ul";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method");
            echo ">
        ";
            // line 65
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_listList($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 74
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_children($context, array $blocks = array())
    {
        // line 81
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 82
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 84
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 85
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 87
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("currentDepth" => ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") + 1)));
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 93
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 96
    public function block_item($context, array $blocks = array())
    {
        // line 97
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 99
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 100
            if (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current")))) {
                // line 101
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")), "method")) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor")))) {
                // line 103
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 105
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 106
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 108
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 109
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 111
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list")) || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 112
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "nav-header"));
            } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 114
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
            }
            // line 117
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 119
            if ((((($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "navbar")) && $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider")))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))) {
                // line 120
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider-vertical"));
            } elseif (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
                // line 122
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "divider"));
            }
            // line 125
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 126
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 129
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))), "method");
            echo ">";
            // line 130
            if (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), "divider"))))) {
            } elseif (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))) {
                // line 132
                echo "        ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((array_key_exists("matcher", $context) && (!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 134
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array(), "any", true, true) && (!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current"))) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 136
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 138
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 141
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 142
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 143
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 144
            if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type") == "list") || (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentDepth") === 1))))) {
                // line 145
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 147
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 149
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 151
            echo "    </li>
";
        }
    }

    // line 155
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 157
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    ";
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes");
        // line 160
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("class" => trim(((($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["labelAttributes"]) ? $context["labelAttributes"] : null), "class"), "")) : ("")) . " dropdown-toggle"))));
        // line 161
        echo "    ";
        $context["labelAttributes"] = twig_array_merge((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")), array("data-toggle" => "dropdown"));
        // line 162
        echo "    <a href=\"#\"";
        echo $this->getAttribute($this, "attributes", array(0 => (isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 167
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 173
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
        } else {
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"));
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BcBootstrapBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 4,  480 => 3,  476 => 2,  465 => 1,  455 => 173,  445 => 171,  440 => 167,  437 => 166,  427 => 162,  424 => 161,  416 => 158,  413 => 157,  401 => 155,  391 => 149,  387 => 147,  381 => 144,  379 => 143,  375 => 141,  367 => 136,  363 => 134,  359 => 132,  356 => 130,  352 => 129,  349 => 126,  347 => 125,  344 => 122,  341 => 120,  334 => 114,  326 => 109,  324 => 108,  321 => 106,  319 => 105,  316 => 103,  313 => 101,  311 => 100,  309 => 99,  304 => 96,  300 => 93,  298 => 92,  281 => 89,  262 => 87,  257 => 84,  255 => 82,  253 => 81,  250 => 79,  238 => 73,  233 => 71,  224 => 65,  219 => 64,  213 => 62,  208 => 60,  200 => 55,  193 => 53,  188 => 51,  176 => 47,  168 => 44,  156 => 40,  150 => 38,  128 => 30,  125 => 29,  110 => 21,  86 => 172,  69 => 155,  56 => 78,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 167,  776 => 165,  769 => 162,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 151,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 145,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 121,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 108,  607 => 107,  604 => 106,  601 => 105,  599 => 104,  596 => 103,  588 => 98,  583 => 97,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 79,  535 => 78,  533 => 77,  530 => 76,  528 => 75,  525 => 74,  516 => 69,  514 => 68,  511 => 67,  505 => 65,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 58,  481 => 53,  475 => 51,  469 => 49,  467 => 48,  461 => 46,  458 => 45,  456 => 44,  453 => 43,  447 => 41,  441 => 39,  439 => 38,  435 => 36,  433 => 35,  430 => 34,  421 => 160,  418 => 159,  412 => 26,  409 => 25,  395 => 151,  389 => 21,  383 => 145,  377 => 142,  374 => 16,  371 => 138,  369 => 14,  366 => 13,  357 => 8,  351 => 6,  348 => 5,  346 => 4,  343 => 3,  339 => 119,  337 => 117,  335 => 551,  333 => 550,  331 => 112,  329 => 111,  327 => 547,  325 => 546,  323 => 545,  320 => 544,  317 => 542,  315 => 536,  312 => 535,  310 => 529,  307 => 97,  305 => 516,  302 => 515,  299 => 513,  297 => 506,  294 => 505,  284 => 487,  279 => 461,  277 => 440,  274 => 439,  272 => 434,  269 => 433,  266 => 431,  264 => 88,  261 => 427,  259 => 85,  256 => 420,  254 => 410,  251 => 409,  246 => 394,  244 => 383,  241 => 74,  239 => 379,  236 => 72,  231 => 364,  229 => 355,  226 => 354,  217 => 330,  210 => 292,  207 => 291,  202 => 283,  199 => 282,  197 => 276,  192 => 269,  187 => 262,  182 => 49,  179 => 48,  174 => 46,  169 => 240,  167 => 234,  164 => 233,  142 => 177,  137 => 171,  134 => 170,  129 => 155,  117 => 118,  107 => 103,  99 => 90,  97 => 74,  77 => 3,  49 => 60,  53 => 15,  23 => 4,  87 => 34,  62 => 19,  40 => 11,  20 => 1,  243 => 40,  240 => 39,  234 => 365,  228 => 72,  124 => 136,  301 => 100,  295 => 96,  292 => 498,  289 => 497,  287 => 488,  282 => 462,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 395,  245 => 77,  230 => 75,  222 => 351,  220 => 331,  215 => 310,  211 => 61,  204 => 289,  198 => 63,  185 => 50,  183 => 60,  177 => 247,  160 => 57,  112 => 22,  82 => 13,  65 => 16,  38 => 9,  144 => 36,  141 => 35,  135 => 47,  126 => 45,  109 => 111,  103 => 28,  67 => 18,  61 => 95,  47 => 9,  105 => 15,  93 => 9,  76 => 165,  72 => 20,  68 => 25,  27 => 8,  91 => 27,  84 => 171,  94 => 73,  88 => 20,  79 => 166,  59 => 79,  21 => 2,  44 => 29,  31 => 8,  28 => 6,  225 => 96,  216 => 63,  212 => 309,  205 => 84,  201 => 83,  196 => 54,  194 => 275,  191 => 52,  189 => 268,  186 => 76,  180 => 72,  172 => 241,  159 => 41,  154 => 213,  147 => 37,  132 => 156,  127 => 137,  121 => 26,  118 => 44,  114 => 117,  104 => 102,  100 => 27,  78 => 24,  75 => 23,  71 => 156,  58 => 21,  34 => 9,  26 => 4,  24 => 6,  25 => 6,  19 => 1,  70 => 20,  63 => 23,  46 => 59,  22 => 3,  163 => 63,  155 => 58,  152 => 198,  149 => 197,  145 => 46,  139 => 176,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 10,  83 => 18,  80 => 24,  74 => 157,  66 => 154,  55 => 12,  52 => 15,  50 => 8,  43 => 11,  41 => 28,  37 => 8,  35 => 8,  32 => 10,  29 => 9,  184 => 261,  178 => 71,  171 => 45,  165 => 43,  162 => 42,  157 => 214,  153 => 39,  151 => 52,  143 => 54,  138 => 34,  136 => 33,  133 => 32,  130 => 31,  122 => 128,  119 => 25,  116 => 24,  111 => 38,  108 => 20,  102 => 91,  98 => 11,  95 => 34,  92 => 58,  89 => 173,  85 => 24,  81 => 170,  73 => 19,  64 => 96,  60 => 14,  57 => 14,  54 => 71,  51 => 70,  48 => 13,  45 => 8,  42 => 8,  39 => 15,  36 => 14,  33 => 8,  30 => 6,);
    }
}
