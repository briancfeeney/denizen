<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_e392f654c47910f3a972dc5ba44fed3130c3585a2e6101b2e08b47a125cc0a00 extends Craft\BaseTemplate
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
        if ((isset($context["sources"]) ? $context["sources"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) {
                // line 5
                echo "\t\t";
                echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" => (isset($context["sources"]) ? $context["sources"] : null), "values" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sources", array())));
                // line 12
                echo "
\t";
            } else {
                // line 14
                echo "\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Source"), "instructions" => \Craft\Craft::t("Which source do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "source", "name" => "source", "options" => (isset($context["sources"]) ? $context["sources"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "source", array())));
                // line 21
                echo "
\t";
            }
        } else {
            // line 24
            echo "\t";
            echo $context["forms"]->getfield(array("label" => (((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) ? (\Craft\Craft::t("Sources")) : (\Craft\Craft::t("Source")))), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 26
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["targetLocaleField"]) ? $context["targetLocaleField"] : null), "html", null, true);
        echo "

";
        // line 31
        if ((isset($context["allowLimit"]) ? $context["allowLimit"] : null)) {
            // line 32
            echo "\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "limit", array()), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
            // line 40
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 40,  61 => 32,  59 => 31,  54 => 29,  51 => 28,  47 => 26,  44 => 24,  39 => 21,  36 => 14,  32 => 12,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
