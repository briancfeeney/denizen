<?php

/* _components/fieldtypes/PlainText/input */
class __TwigTemplate_02ec558a8236b2de13054422399fbea6efe8289de2a2c64f5561aa9030f099c0 extends Craft\BaseTemplate
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
        $context["config"] = array("id" => (isset($context["name"]) ? $context["name"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "value" => (isset($context["value"]) ? $context["value"] : null), "class" => "nicetext", "maxlength" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "maxLength", array()), "showCharsLeft" => true, "placeholder" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "placeholder", array()), "rows" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "initialRows", array()));
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "multiline", array())) {
            // line 15
            echo "\t";
            echo $context["forms"]->gettextarea((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        } else {
            // line 17
            echo "\t";
            echo $context["forms"]->gettext((isset($context["config"]) ? $context["config"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PlainText/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  31 => 15,  29 => 14,  26 => 13,  24 => 3,  21 => 2,  19 => 1,);
    }
}
