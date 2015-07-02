<?php

/* _components/fieldtypes/PlainText/settings */
class __TwigTemplate_0d46e76e215ae8d2656afcec95046c517dce5078082575406945db69f91a5542 extends Craft\BaseTemplate
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
        // line 4
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Placeholder Text"), "instructions" => \Craft\Craft::t("The text that will be shown if the field doesn’t have a value."), "id" => "placeholder", "name" => "placeholder", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder", array()), "translatable" => true, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "placeholder"), "method")));
        // line 12
        echo "

";
        // line 14
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Length"), "instructions" => \Craft\Craft::t("The maximum length of characters the field is allowed to have."), "id" => "maxLength", "name" => "maxLength", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "maxLength", array()), "size" => 3, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "maxLength"), "method")));
        // line 22
        echo "

";
        // line 24
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Allow line breaks"), "name" => "multiline", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline", array()), "toggle" => "initialRowsContainer"));
        // line 29
        echo "


<div id=\"initialRowsContainer\" class=\"nested-fields";
        // line 32
        if ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline", array()))) {
            echo " hidden";
        }
        echo "\">
\t";
        // line 33
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Initial Rows"), "id" => "initialRows", "name" => "initialRows", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows", array()), "size" => 3, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "initialRows"), "method")));
        // line 40
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 40,  50 => 33,  44 => 32,  39 => 29,  37 => 24,  33 => 22,  31 => 14,  27 => 12,  25 => 4,  21 => 2,  19 => 1,);
    }
}
