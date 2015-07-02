<?php

/* _components/fieldtypes/Date/settings */
class __TwigTemplate_19f0812f2e545abf3c980516d2aff03a135e3ee37c329ae5dc985408ff25b0f6 extends Craft\BaseTemplate
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
        echo $context["forms"]->getradioGroupField(array("id" => "dateTime", "name" => "dateTime", "options" => (isset($context["options"]) ? $context["options"] : null), "value" => (isset($context["value"]) ? $context["value"] : null)));
        // line 8
        echo "

";
        // line 10
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Minute Increment"), "id" => "minuteIncrement", "name" => "minuteIncrement", "options" => (isset($context["incrementOptions"]) ? $context["incrementOptions"] : null), "value" => (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "minuteIncrement", array())) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "minuteIncrement", array())) : (30))));
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Date/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 16,  30 => 10,  26 => 8,  24 => 3,  21 => 2,  19 => 1,);
    }
}
