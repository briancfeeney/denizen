<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_2c7b9174b96229f34d7af98da07605cd2361c01afb4fce51c2a2184cf5c77ce9 extends Craft\BaseTemplate
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
        $context["allLabel"] = ((array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : null)) : (\Craft\Craft::t("All")));
        // line 2
        $context["allValue"] = ((array_key_exists("allValue", $context)) ? ((isset($context["allValue"]) ? $context["allValue"] : null)) : ("*"));
        // line 3
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 4
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) ? $context["values"] : null)) : (array()));
        // line 5
        $context["allChecked"] = (twig_test_empty((isset($context["values"]) ? $context["values"] : null)) || ((isset($context["values"]) ? $context["values"] : null) == (isset($context["allValue"]) ? $context["allValue"] : null)));
        // line 6
        echo "
<div class=\"checkbox-select";
        // line 7
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
\t<div>
\t\t";
        // line 9
        $this->env->loadTemplate("_includes/forms/checkbox")->display(array("id" => ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : null)) : (null)), "class" => "all", "label" => (("<b>" . ((array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : null)) : (\Craft\Craft::t("All")))) . "</b>"), "name" => ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : null)) : (null)), "value" => (isset($context["allValue"]) ? $context["allValue"] : null), "checked" => (isset($context["allChecked"]) ? $context["allChecked"] : null), "autofocus" => ((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method")))));
        // line 18
        echo "\t</div>";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 20
            $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
            // line 21
            $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
            // line 22
            if (((isset($context["optionValue"]) ? $context["optionValue"] : null) != (isset($context["allValue"]) ? $context["allValue"] : null))) {
                // line 23
                echo "\t\t\t<div>
\t\t\t\t";
                // line 24
                $this->env->loadTemplate("_includes/forms/checkbox")->display(array("label" => (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "name" => ((array_key_exists("name", $context)) ? (((isset($context["name"]) ? $context["name"] : null) . "[]")) : (null)), "value" => (isset($context["optionValue"]) ? $context["optionValue"] : null), "checked" => ((isset($context["allChecked"]) ? $context["allChecked"] : null) || twig_in_filter((isset($context["optionValue"]) ? $context["optionValue"] : null), (isset($context["values"]) ? $context["values"] : null))), "disabled" => (isset($context["allChecked"]) ? $context["allChecked"] : null)));
                // line 31
                echo "\t\t\t</div>
\t\t";
            }
            // line 33
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  63 => 33,  59 => 31,  57 => 24,  54 => 23,  52 => 22,  50 => 21,  48 => 20,  44 => 19,  42 => 18,  40 => 9,  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
