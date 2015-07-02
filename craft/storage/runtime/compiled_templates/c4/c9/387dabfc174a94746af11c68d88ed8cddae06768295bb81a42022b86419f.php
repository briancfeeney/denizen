<?php

/* settings/sections/_entrytypes/edit */
class __TwigTemplate_c4c9387dabfc174a94746af11c68d88ed8cddae06768295bb81a42022b86419f extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 6
        ob_start();
        // line 7
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveEntryType\">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 11
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "single")) {
            // line 12
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        } else {
            // line 14
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
            echo "/entrytypes\">
\t\t";
        }
        // line 16
        echo "\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t";
        // line 17
        if ($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id", array())) {
            echo "<input type=\"hidden\" name=\"entryTypeId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 18
        echo "
\t\t";
        // line 19
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "single")) {
            // line 20
            echo "\t\t\t";
            echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this entry type will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "name", array()), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
            // line 30
            echo "

\t\t\t";
            // line 32
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this entry type in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "handle", array()), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
            // line 41
            echo "

\t\t\t<hr>

\t\t";
        }
        // line 46
        echo "
\t\t";
        // line 47
        echo $context["forms"]->getcheckboxField(array("first" => ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "single"), "label" => \Craft\Craft::t("Show the Title field?"), "name" => "hasTitleField", "toggle" => "titleLabel-container", "reverseToggle" => "titleFormat-container", "checked" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "hasTitleField", array())));
        // line 54
        echo "

\t\t<div id=\"titleLabel-container\"";
        // line 56
        if ((!$this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "hasTitleField", array()))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 57
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title Field Label"), "instructions" => \Craft\Craft::t("What do you want the Title field to be called?"), "id" => "titleLabel", "name" => "titleLabel", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleLabel", array()), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "titleLabel"), "method"), "required" => true));
        // line 65
        echo "
\t\t</div>

\t\t<div id=\"titleFormat-container\"";
        // line 68
        if ($this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "hasTitleField", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 69
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title Format"), "instructions" => \Craft\Craft::t("What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.", array("ex" => "<code>{myCustomField}</code>")), "id" => "titleFormat", "name" => "titleFormat", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "titleFormat", array()), "errors" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getErrors", array(0 => "titleFormat"), "method"), "required" => true));
        // line 77
        echo "
\t\t</div>

\t\t<hr>

\t\t";
        // line 82
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "getFieldLayout", array(), "method")));
        // line 85
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 95
        if ((!$this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "handle", array()))) {
            // line 96
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 96,  133 => 95,  126 => 89,  120 => 85,  118 => 82,  111 => 77,  109 => 69,  103 => 68,  98 => 65,  96 => 57,  90 => 56,  86 => 54,  84 => 47,  81 => 46,  74 => 41,  72 => 32,  68 => 30,  65 => 20,  63 => 19,  60 => 18,  54 => 17,  49 => 16,  43 => 14,  39 => 12,  37 => 11,  32 => 9,  28 => 7,  26 => 6,  24 => 3,);
    }
}
