<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_6e6b75272587398de42096240719d8e6d5887b92c54aa139c30d931a1e03d419 extends Craft\BaseTemplate
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
        // line 1
        if ((!array_key_exists("customizableTabs", $context))) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (((!(isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) && (!array_key_exists("pretendTabName", $context)))) {
            // line 3
            echo "\t";
            $context["pretendTabName"] = \Craft\Craft::t("Content");
        }
        // line 5
        echo "
";
        // line 6
        $context["groups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 7
        $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllFields", array(0 => "id"), "method");
        // line 8
        echo "
";
        // line 9
        \Craft\craft()->templates->includeTranslations(
        	"Rename",
        	"Delete",
        	"Make required",
        	"Make not required",
        	"Remove",
        	"Give your tab a name."
        );
        // line 17
        echo "
";
        // line 18
        \Craft\craft()->templates->includeCssFile("//fonts.googleapis.com/css?family=Coming+Soon");
        // line 19
        echo "
";
        // line 42
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("Design your field layout"), "html", null, true);
        echo "</h2>

\t";
        // line 49
        if (array_key_exists("instructions", $context)) {
            // line 50
            echo "\t\t<div class=\"instructions\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
            echo "</div>
\t";
        }
        // line 52
        echo "
\t<div class=\"fld-tabs\">
\t\t";
        // line 54
        if ((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null)) {
            // line 55
            echo "\t\t\t";
            $context["macros"] = $this;
            // line 56
            echo "
\t\t\t";
            // line 57
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                // line 58
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 59
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->gettab((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null), $this->getAttribute($context["tab"], "name", array()), $this->getAttribute($context["tab"], "getFields", array(), "method"));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t\t";
            } else {
                // line 62
                echo "\t\t\t\t";
                echo $context["macros"]->gettab((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null), (isset($context["pretendTabName"]) ? $context["pretendTabName"] : null), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFields", array(), "method"));
                echo "
\t\t\t";
            }
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t</div>

\t";
        // line 67
        if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
            // line 68
            echo "\t\t<div class=\"newtabbtn-container\">
\t\t\t<div class=\"btn add icon\">";
            // line 69
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Tab"), "html", null, true);
            echo "</div>
\t\t\t<h3>";
            // line 70
            echo twig_escape_filter($this->env, \Craft\Craft::t("…Or use one of your field groups as a starting point:"), "html", null, true);
            echo "</h3>
\t\t</div>
\t";
        }
        // line 73
        echo "
\t<div class=\"unusedfields\">
\t\t";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 76
            echo "\t\t\t";
            $context["totalUnselected"] = 0;
            // line 77
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 78
                echo "\t\t\t\t";
                if (((!(isset($context["fieldLayout"]) ? $context["fieldLayout"] : null)) || !twig_in_filter($this->getAttribute($context["field"], "id", array()), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFieldIds", array(), "method")))) {
                    // line 79
                    echo "\t\t\t\t\t";
                    $context["totalUnselected"] = ((isset($context["totalUnselected"]) ? $context["totalUnselected"] : null) + 1);
                    // line 80
                    echo "\t\t\t\t";
                }
                // line 81
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "
\t\t\t<div class=\"fld-tab unused";
            // line 83
            if (((isset($context["totalUnselected"]) ? $context["totalUnselected"] : null) == 0)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 89
                echo "\t\t\t\t\t\t";
                $context["selected"] = ((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null) && twig_in_filter($this->getAttribute($context["field"], "id", array()), $this->getAttribute((isset($context["fieldLayout"]) ? $context["fieldLayout"] : null), "getFieldIds", array(), "method")));
                // line 90
                echo "\t\t\t\t\t\t<div class=\"fld-field unused";
                if ((isset($context["selected"]) ? $context["selected"] : null)) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t</div>

</div>

";
        // line 101
        ob_start();
        // line 102
        echo "\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#";
        // line 103
        echo twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId("fieldlayoutform"), "html", null, true);
        echo "', {
\t\t\tcustomizableTabs: ";
        // line 104
        echo (((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) ? ("true") : ("false"));
        echo ",
\t\t\tfieldInputName: '";
        // line 105
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName("fieldLayout[__TAB_NAME__][]"), "js"), "html", null, true);
        echo "',
\t\t\trequiredFieldInputName: '";
        // line 106
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName("requiredFields[]"), "js"), "html", null, true);
        echo "'
\t\t});
\t};

\t";
        // line 110
        if (array_key_exists("tab", $context)) {
            // line 111
            echo "
\t\tvar \$fldTab = \$('#";
            // line 112
            echo twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId(("tab-" . (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
            echo "');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t";
        } else {
            // line 127
            echo "
\t\tinitFLD();

\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 132
        echo "
";
        // line 133
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    // line 20
    public function gettab($__customizableTabs__ = null, $__tabName__ = null, $__tabFields__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $__customizableTabs__,
            "tabName" => $__tabName__,
            "tabFields" => $__tabFields__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel";
            // line 23
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                echo " draggable";
            }
            echo "\">
\t\t\t\t<span>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["tabName"]) ? $context["tabName"] : null), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 25
            if ((isset($context["customizableTabs"]) ? $context["customizableTabs"] : null)) {
                // line 26
                echo "\t\t\t\t\t<a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabFields"]) ? $context["tabFields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "\t\t\t\t<div class=\"fld-field";
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"settings icon\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<span>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "getField", array(), "method"), "name", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 35
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["tabName"]) ? $context["tabName"] : null), "url"), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldId", array()), "html", null, true);
                    echo "\">";
                }
                // line 37
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 39,  355 => 37,  349 => 36,  343 => 35,  339 => 34,  335 => 33,  326 => 32,  322 => 31,  317 => 28,  311 => 26,  309 => 25,  305 => 24,  299 => 23,  295 => 21,  282 => 20,  278 => 133,  275 => 132,  268 => 127,  250 => 112,  247 => 111,  245 => 110,  238 => 106,  234 => 105,  230 => 104,  226 => 103,  223 => 102,  221 => 101,  215 => 97,  207 => 94,  198 => 91,  189 => 90,  186 => 89,  182 => 88,  176 => 85,  169 => 83,  166 => 82,  160 => 81,  157 => 80,  154 => 79,  151 => 78,  146 => 77,  143 => 76,  139 => 75,  135 => 73,  129 => 70,  125 => 69,  122 => 68,  120 => 67,  116 => 65,  113 => 64,  107 => 62,  104 => 61,  95 => 59,  90 => 58,  88 => 57,  85 => 56,  82 => 55,  80 => 54,  76 => 52,  70 => 50,  68 => 49,  63 => 47,  56 => 42,  53 => 19,  51 => 18,  48 => 17,  39 => 9,  36 => 8,  34 => 7,  32 => 6,  29 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
