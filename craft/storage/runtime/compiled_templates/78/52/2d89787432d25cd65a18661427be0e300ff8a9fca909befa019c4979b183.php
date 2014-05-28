<?php

/* settings/general/index */
class __TwigTemplate_78522d89787432d25cd65a18661427be0e300ff8a9fca909befa019c4979b183 extends Craft\BaseTemplate
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
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        $context["title"] = \Craft\Craft::t("General Settings");
        // line 5
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        ob_start();
        // line 11
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveGeneralSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 15
        echo $context["forms"]->getlightswitchField(array("first" => true, "label" => \Craft\Craft::t("System Status"), "id" => "on", "name" => "on", "on" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "on"), "onLabel" => \Craft\Craft::t("On"), "offLabel" => \Craft\Craft::t("Off")));
        // line 23
        echo "

\t\t";
        // line 25
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site Name"), "id" => "siteName", "name" => "siteName", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "siteName"), "autofocus" => true, "required" => true, "errors" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteName"), "method")));
        // line 33
        echo "

\t\t";
        // line 35
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "id" => "siteUrl", "class" => "ltr", "name" => "siteUrl", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "siteUrl"), "required" => true, "errors" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteUrl"), "method")));
        // line 43
        echo "

\t\t";
        // line 45
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Timezone"), "id" => "timezone", "name" => "timezone", "value" => $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "timezone"), "options" => (isset($context["timezoneOptions"]) ? $context["timezoneOptions"] : null)));
        // line 51
        echo "

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>

\t";
        // line 58
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 59
            echo "\t\t<hr>

\t\t";
            // line 61
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete the logo?"
            );
            // line 64
            echo "
\t\t";
            // line 65
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js");
            // line 66
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js");
            // line 67
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("lib/imgareaselect/jquery.imgareaselect.pack.js");
            // line 68
            echo "\t\t";
            \Craft\craft()->templates->includeJsResource("js/rebrand.js");
            // line 69
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("lib/imgareaselect/imgareaselect-animated.css");
            // line 70
            echo "\t\t";
            \Craft\craft()->templates->includeCssResource("css/rebrand.css");
            // line 71
            echo "
\t\t";
            // line 72
            ob_start();
            // line 73
            echo "\t\t\t";
            $this->env->loadTemplate("settings/general/_logo")->display($context);
            // line 74
            echo "\t\t";
            $context["logoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 75
            echo "
\t\t";
            // line 76
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Logo")), (isset($context["logoInput"]) ? $context["logoInput"] : null));
            // line 78
            echo "

\t\t<div class=\"clear\"></div>
\t";
        }
        // line 82
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/general/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 82,  116 => 78,  114 => 76,  111 => 75,  108 => 74,  105 => 73,  103 => 72,  100 => 71,  97 => 70,  94 => 69,  91 => 68,  88 => 67,  85 => 66,  83 => 65,  80 => 64,  76 => 61,  72 => 59,  70 => 58,  63 => 54,  58 => 51,  56 => 45,  52 => 43,  50 => 35,  46 => 33,  44 => 25,  40 => 23,  38 => 15,  32 => 11,  30 => 10,  28 => 5,  26 => 3,  24 => 2,);
    }
}
