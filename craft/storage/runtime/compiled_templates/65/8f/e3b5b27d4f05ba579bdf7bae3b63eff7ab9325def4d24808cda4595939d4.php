<?php

/* _components/fieldtypes/RichText/settings */
class __TwigTemplate_658fe3b5b27d4f05ba579bdf7bae3b63eff7ab9325def4d24808cda4595939d4 extends Craft\BaseTemplate
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
        if ((twig_length_filter($this->env, (isset($context["configOptions"]) ? $context["configOptions"] : null)) > 1)) {
            // line 4
            echo "\t";
            ob_start();
            // line 5
            echo "\t\t";
            echo $context["forms"]->getselect(array("id" => "configFle", "name" => "configFile", "options" => (isset($context["configOptions"]) ? $context["configOptions"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "configFile", array())));
            // line 10
            echo "
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 13
            echo "\t";
            ob_start();
            // line 14
            echo "\t\t<p>";
            echo \Craft\Craft::t("You don’t have any <a href=\"http://buildwithcraft.com/docs/rich-text-fields#redactor-configs\" target=\"_blank\">Redactor configs</a> yet.");
            echo "</p>
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 17
        echo "
";
        // line 18
        ob_start();
        // line 19
        echo "\t";
        echo $context["forms"]->getselect(array("id" => "columnType", "name" => "columnType", "options" => (isset($context["columns"]) ? $context["columns"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "columnType", array())));
        // line 24
        echo "
";
        $context["columnType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 26
        echo "
";
        // line 27
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Config"), "instructions" => (((\Craft\Craft::t("You can save custom Redactor configs as .json files in craft/config/redactor/.") . " <a href=\"http://imperavi.com/redactor/docs/settings/\" target=\"_blank\">") . \Craft\Craft::t("View available settings")) . "</a>."), "id" => "configFile"), (isset($context["configInput"]) ? $context["configInput"] : null));
        // line 31
        echo "

";
        // line 33
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Clean up HTML?"), "instructions" => \Craft\Craft::t("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save."), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cleanupHtml", array())));
        // line 39
        echo "

";
        // line 41
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Purify HTML?"), "instructions" => \Craft\Craft::t("Removes any potentially-malicious code on save, by running the submitted data through <a href=\"http://htmlpurifier.org/\" target=\"_blank\">HTML Purifier</a>."), "id" => "purifyHtml", "name" => "purifyHtml", "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "purifyHtml", array())));
        // line 47
        echo "

";
        // line 49
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Column Type"), "instructions" => \Craft\Craft::t("The underlying database column type to use when saving content."), "id" => "columnType", "warning" => (((isset($context["existing"]) ? $context["existing"] : null)) ? (\Craft\Craft::t("Changing this may result in data loss.")) : (""))), (isset($context["columnType"]) ? $context["columnType"] : null));
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/RichText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 54,  80 => 49,  76 => 47,  74 => 41,  70 => 39,  68 => 33,  64 => 31,  62 => 27,  59 => 26,  55 => 24,  52 => 19,  50 => 18,  47 => 17,  40 => 14,  37 => 13,  32 => 10,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
