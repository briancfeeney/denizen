<?php

/* _includes/field */
class __TwigTemplate_ac4f8b75e4af2730d100cc965452840a8e3656ac289a3fd8452760f6b4b8d549 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 4
        echo "
";
        // line 5
        $context["value"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"))) : (null));
        // line 6
        $context["errors"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle")), "method")) : (null));
        // line 7
        $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => (isset($context["element"]) ? $context["element"] : null)), "method");
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : null)) {
            // line 10
            echo "\t";
            $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), 1 => (isset($context["value"]) ? $context["value"] : null)), "method");
        } else {
            // line 12
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type")))) . "</p>");
        }
        // line 14
        echo "
";
        // line 15
        echo $context["forms"]->getfield(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name"))), "required" => (isset($context["required"]) ? $context["required"] : null), "translatable" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "translatable"), "instructions" => \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions")), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), "errors" => (isset($context["errors"]) ? $context["errors"] : null)), (isset($context["input"]) ? $context["input"] : null));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  53 => 15,  50 => 14,  46 => 12,  40 => 9,  35 => 7,  31 => 5,  21 => 2,  67 => 11,  59 => 5,  45 => 11,  42 => 10,  27 => 3,  23 => 2,  19 => 1,  115 => 43,  110 => 40,  108 => 36,  102 => 33,  98 => 32,  94 => 30,  92 => 29,  87 => 24,  72 => 22,  68 => 21,  64 => 6,  62 => 18,  56 => 12,  41 => 10,  37 => 8,  33 => 6,  30 => 4,  28 => 4,  26 => 5,  24 => 3,);
    }
}
