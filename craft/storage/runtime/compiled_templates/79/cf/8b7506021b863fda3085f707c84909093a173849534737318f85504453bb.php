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
        $context["fromEmail"] = ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "fromEmail")) : ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "email")));
        // line 5
        echo "\t";
        if ((((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@pixelandtonic.com") || ((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@buildwithcraft.com"))) {
            // line 6
            echo "\t\t";
            $context["fromEmail"] = "";
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Your Email"), "class" => "fromEmail", "name" => "fromEmail", "value" => (isset($context["fromEmail"]) ? $context["fromEmail"] : null), "errors" => ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "getErrors", array(0 => "fromEmail"), "method")) : (""))));
        // line 15
        echo "

\t";
        // line 17
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Message"), "class" => "message", "name" => "message", "placeholder" => \Craft\Craft::t("Tell us about your problems."), "rows" => 4));
        // line 23
        echo "

\t<a class=\"fieldtoggle\" data-target=\"gethelp-more\">";
        // line 25
        echo twig_escape_filter($this->env, \Craft\Craft::t("More"), "html", null, true);
        echo "</a>

\t<div id=\"gethelp-more\" class=\"hidden\">
\t\t";
        // line 28
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach error logs?"), "class" => "attachLogs", "name" => "attachLogs", "checked" => true));
        // line 33
        echo "

\t\t";
        // line 35
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach a database backup?"), "class" => "attachDbBackup", "name" => "attachDbBackup", "checked" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "backupDbOnUpdate")));
        // line 40
        echo "

\t\t";
        // line 42
        echo $context["forms"]->getcheckboxField(array("name" => "attachTemplates", "checked" => true, "class" => "attachTemplates", "label" => \Craft\Craft::t("Include your template files?")));
        // line 47
        echo "

\t\t";
        // line 49
        echo $context["forms"]->getfileField(array("label" => \Craft\Craft::t("Attach an additional file?"), "class" => "attachAdditionalFile", "name" => "attachAdditionalFile"));
        // line 53
        echo "
\t</div>

\t<div class=\"buttons last\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t";
        // line 61
        $context["email"] = ('' === $tmp = "<a href=\"mailto:support@buildwithcraft.com\">support@buildwithcraft.com</a>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
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
        return array (  92 => 62,  90 => 61,  83 => 57,  75 => 49,  69 => 42,  65 => 40,  63 => 35,  57 => 28,  51 => 25,  47 => 23,  41 => 15,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  21 => 2,  78 => 23,  72 => 21,  59 => 33,  53 => 13,  44 => 10,  35 => 7,  24 => 3,  22 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 21,  61 => 20,  54 => 16,  50 => 12,  48 => 13,  45 => 17,  42 => 9,  31 => 5,  29 => 6,  27 => 5,  25 => 4,);
    }
}
