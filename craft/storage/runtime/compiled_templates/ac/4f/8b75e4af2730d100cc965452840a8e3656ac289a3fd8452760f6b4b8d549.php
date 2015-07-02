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
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false));
        // line 2
        $context["element"] = ((array_key_exists("element", $context)) ? ((isset($context["element"]) ? $context["element"] : null)) : (null));
        // line 3
        echo "
";
        // line 4
        $context["value"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getFieldValue", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array())), "method")) : (null));
        // line 5
        $context["errors"] = ((((isset($context["element"]) ? $context["element"] : null) && (!(isset($context["static"]) ? $context["static"] : null)))) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array())), "method")) : (null));
        // line 6
        $context["fieldtype"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getFieldType", array(), "method");
        // line 7
        $context["instructions"] = (((!(isset($context["static"]) ? $context["static"] : null))) ? (\Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions", array()))) : (null));
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : null)) {
            // line 10
            echo "\t";
            if ((isset($context["element"]) ? $context["element"] : null)) {
                // line 11
                echo "\t\t";
                $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "setElement", array(0 => (isset($context["element"]) ? $context["element"] : null)), "method");
                // line 12
                echo "\t";
            }
            // line 13
            echo "\t";
            if ((!(isset($context["static"]) ? $context["static"] : null))) {
                // line 14
                echo "\t\t";
                $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array()), 1 => (isset($context["value"]) ? $context["value"] : null)), "method");
                // line 15
                echo "\t";
            } else {
                // line 16
                echo "\t\t";
                $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getStaticHtml", array(0 => (isset($context["value"]) ? $context["value"] : null)), "method");
                // line 17
                echo "\t";
            }
        } else {
            // line 19
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array())))) . "</p>");
        }
        // line 21
        echo "
";
        // line 22
        if (((isset($context["instructions"]) ? $context["instructions"] : null) || (isset($context["input"]) ? $context["input"] : null))) {
            // line 23
            echo "\t";
            $this->env->loadTemplate("_includes/forms/field")->display(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "locale" => (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "translatable", array())) ? (((array_key_exists("locale", $context)) ? ((isset($context["locale"]) ? $context["locale"] : null)) : ((((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "locale", array())) : ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale", array())))))) : ("")), "required" => (((!(isset($context["static"]) ? $context["static"] : null))) ? ((isset($context["required"]) ? $context["required"] : null)) : (false)), "instructions" => twig_escape_filter($this->env, (isset($context["instructions"]) ? $context["instructions"] : null)), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array()), "errors" => (isset($context["errors"]) ? $context["errors"] : null), "input" => (isset($context["input"]) ? $context["input"] : null)));
        }
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
        return array (  73 => 23,  71 => 22,  68 => 21,  64 => 19,  60 => 17,  57 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
