<?php

/* _components/widgets/GetHelp/body */
class __TwigTemplate_79cf8b7506021b863fda3085f707c84909093a173849534737318f85504453bb extends Craft\BaseTemplate
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
<form method=\"post\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
\t";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t";
        // line 6
        $context["fromEmail"] = ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "fromEmail", array())) : ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "email", array())));
        // line 7
        echo "
\t";
        // line 8
        if ((((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@pixelandtonic.com") || ((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@buildwithcraft.com"))) {
            // line 9
            echo "\t\t";
            $context["fromEmail"] = "";
            // line 10
            echo "\t";
        }
        // line 11
        echo "
\t";
        // line 12
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Your Email"), "class" => "fromEmail", "name" => "fromEmail", "value" => (isset($context["fromEmail"]) ? $context["fromEmail"] : null), "errors" => ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "getErrors", array(0 => "fromEmail"), "method")) : (""))));
        // line 18
        echo "

\t";
        // line 20
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Message"), "class" => "message", "name" => "message", "placeholder" => \Craft\Craft::t("Tell us about your problems."), "rows" => 4));
        // line 26
        echo "

\t<a class=\"fieldtoggle\" data-target=\"gethelp-more\">";
        // line 28
        echo twig_escape_filter($this->env, \Craft\Craft::t("More"), "html", null, true);
        echo "</a>

\t<div id=\"gethelp-more\" class=\"hidden\">
\t\t";
        // line 31
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach error logs?"), "class" => "attachLogs", "name" => "attachLogs", "checked" => true));
        // line 36
        echo "

\t\t";
        // line 38
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach a database backup?"), "class" => "attachDbBackup", "name" => "attachDbBackup", "checked" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "backupDbOnUpdate", array())));
        // line 43
        echo "

\t\t";
        // line 45
        echo $context["forms"]->getcheckboxField(array("name" => "attachTemplates", "checked" => true, "class" => "attachTemplates", "label" => \Craft\Craft::t("Include your template files?")));
        // line 50
        echo "

\t\t";
        // line 52
        echo $context["forms"]->getfileField(array("label" => \Craft\Craft::t("Attach an additional file?"), "class" => "attachAdditionalFile", "name" => "attachAdditionalFile"));
        // line 56
        echo "
\t</div>

\t<div class=\"buttons last\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t";
        // line 64
        $context["email"] = ('' === $tmp = "<a href=\"mailto:support@buildwithcraft.com\">support@buildwithcraft.com</a>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "\t<p class=\"error hidden\">";
        echo \Craft\Craft::t("Couldn’t send your message. Please email it to {email} instead.", array("email" => (isset($context["email"]) ? $context["email"] : null)));
        echo "</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/GetHelp/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 65,  97 => 64,  90 => 60,  84 => 56,  82 => 52,  78 => 50,  76 => 45,  72 => 43,  70 => 38,  66 => 36,  64 => 31,  58 => 28,  54 => 26,  52 => 20,  48 => 18,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
