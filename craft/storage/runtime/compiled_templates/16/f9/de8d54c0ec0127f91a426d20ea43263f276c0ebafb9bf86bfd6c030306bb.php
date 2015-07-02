<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_16f9de8d54c0ec0127f91a426d20ea43263f276c0ebafb9bf86bfd6c030306bb extends Craft\BaseTemplate
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
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Min Value"), "id" => "min", "name" => "min", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "min", array()), "size" => 5, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Value"), "id" => "max", "name" => "max", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "max", array()), "size" => 5, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Decimal Points"), "id" => "decimals", "name" => "decimals", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "decimals", array()), "size" => 1, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 28,  36 => 21,  32 => 19,  30 => 12,  26 => 10,  24 => 3,  21 => 2,  19 => 1,);
    }
}
