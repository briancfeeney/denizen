<?php

/* settings/fields/_edit */
class __TwigTemplate_f263b8c0f48a8807177a1d1fcbc5a1d010612fde1bb6169b7de9ef52b89aa185 extends Craft\BaseTemplate
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
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 5
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields#field-layouts";
        // line 7
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 9
        if (((!array_key_exists("field", $context)) && array_key_exists("fieldId", $context))) {
            // line 10
            $context["field"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getFieldById", array(0 => (isset($context["fieldId"]) ? $context["fieldId"] : null)), "method");
            // line 11
            if ((!(isset($context["field"]) ? $context["field"] : null))) {
                // line 12
                throw new \Craft\HttpException(404);
            }
        }
        // line 17
        $context["groups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 18
        if ((!(isset($context["groups"]) ? $context["groups"] : null))) {
            // line 19
            throw new \Craft\HttpException(404);
        }
        // line 22
        $context["groupId"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getQuery", array(0 => "groupId"), "method");
        // line 24
        if ((!(isset($context["groupId"]) ? $context["groupId"] : null))) {
            // line 25
            if (array_key_exists("field", $context)) {
                // line 26
                $context["groupId"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "groupId", array());
            } else {
                // line 28
                $context["groupId"] = $this->getAttribute(twig_get_array_keys_filter((isset($context["groups"]) ? $context["groups"] : null)), 0, array(), "array");
            }
        }
        // line 32
        if ((!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array", true, true))) {
            // line 33
            throw new \Craft\HttpException(404);
        }
        // line 37
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Fields"), "url" => \Craft\UrlHelper::getUrl("settings/fields")), 2 => array("label" => $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array"), "name", array()), "url" => \Craft\UrlHelper::getUrl(("settings/fields/" . (isset($context["groupId"]) ? $context["groupId"] : null)))));
        // line 43
        if (array_key_exists("fieldId", $context)) {
            // line 44
            $context["title"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
        } else {
            // line 46
            $context["title"] = \Craft\Craft::t("Create a new field");
        }
        // line 50
        $context["fieldTypes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllFieldTypes", array(), "method");
        // line 52
        if (array_key_exists("field", $context)) {
            // line 53
            $context["fieldType"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getFieldType", array(), "method");
            // line 54
            $context["isFieldTypeMissing"] = (!(isset($context["fieldType"]) ? $context["fieldType"] : null));
        } else {
            // line 56
            $context["isFieldTypeMissing"] = false;
        }
        // line 59
        if (((!array_key_exists("fieldType", $context)) || (isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : null))) {
            // line 60
            $context["fieldType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getFieldType", array(0 => "PlainText"), "method");
        }
        // line 64
        ob_start();
        // line 65
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"fields/saveField\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/fields/{groupId}\">
\t\t";
        // line 68
        if (array_key_exists("fieldId", $context)) {
            // line 69
            echo "\t\t\t<input type=\"hidden\" name=\"fieldId\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
            echo "\">
\t\t";
        }
        // line 71
        echo "
\t\t";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 74
        $context["groupOptions"] = array();
        // line 75
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 76
            echo "\t\t\t";
            $context["groupOptions"] = twig_array_merge((isset($context["groupOptions"]) ? $context["groupOptions"] : null), array(0 => array("label" => $this->getAttribute($context["group"], "name", array()), "value" => $this->getAttribute($context["group"], "id", array()))));
            // line 77
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t";
        echo $context["forms"]->getselectField(array("first" => true, "label" => \Craft\Craft::t("Group"), "instructions" => \Craft\Craft::t("Which group should this field be displayed in?"), "id" => "group", "name" => "group", "options" => (isset($context["groupOptions"]) ? $context["groupOptions"] : null), "value" => (isset($context["groupId"]) ? $context["groupId"] : null)));
        // line 86
        echo "

\t\t";
        // line 88
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this field will be called in the CP."), "id" => "name", "name" => "name", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getErrors", array(0 => "name"), "method")) : (null)), "required" => true, "translatable" => true, "autofocus" => true));
        // line 98
        echo "

\t\t";
        // line 100
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this field in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array())) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 110
        echo "

\t\t";
        // line 112
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Instructions"), "instructions" => \Craft\Craft::t("Helper text to guide the author."), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions", array())) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getErrors", array(0 => "instructions"), "method")) : (null)), "translatable" => true));
        // line 121
        echo "

\t\t";
        // line 123
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 124
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => "translatable", "checked" => ((array_key_exists("field", $context)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "translatable", array())) : (false))));
            // line 128
            echo "
\t\t";
        }
        // line 130
        echo "
\t\t<hr>

\t\t";
        // line 133
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Field Type"), "instructions" => \Craft\Craft::t("What type of field is this?"), "warning" => ((array_key_exists("fieldId", $context)) ? (\Craft\Craft::t("Changing this may result in data loss.")) : ("")), "id" => "type", "name" => "type", "options" => (isset($context["fieldTypes"]) ? $context["fieldTypes"] : null), "value" => $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getClassHandle", array(), "method"), "errors" => (((isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : null)) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()))))) : (null)), "toggle" => true));
        // line 143
        echo "

\t\t";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldTypes"]) ? $context["fieldTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["_fieldType"]) {
            // line 146
            echo "\t\t\t";
            $context["isCurrent"] = ($this->getAttribute($context["_fieldType"], "getClassHandle", array(), "method") == $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getClassHandle", array(), "method"));
            // line 147
            echo "\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["_fieldType"], "getClassHandle", array(), "method"), "html", null, true);
            echo "\"";
            if ((!(isset($context["isCurrent"]) ? $context["isCurrent"] : null))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 148
            $_namespace = (("types[" . $this->getAttribute($context["_fieldType"], "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 149
                    echo "\t\t\t\t\t";
                    if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                        // line 150
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 152
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute($context["_fieldType"], "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 149
                echo "\t\t\t\t\t";
                if ((isset($context["isCurrent"]) ? $context["isCurrent"] : null)) {
                    // line 150
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 152
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["_fieldType"], "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 155
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_fieldType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 167
        if (((!array_key_exists("field", $context)) || (!$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle", array())))) {
            // line 168
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 168,  263 => 167,  256 => 161,  250 => 157,  243 => 155,  239 => 154,  233 => 152,  227 => 150,  224 => 149,  214 => 154,  208 => 152,  202 => 150,  199 => 149,  192 => 148,  183 => 147,  180 => 146,  176 => 145,  172 => 143,  170 => 133,  165 => 130,  161 => 128,  158 => 124,  156 => 123,  152 => 121,  150 => 112,  146 => 110,  144 => 100,  140 => 98,  138 => 88,  134 => 86,  131 => 78,  125 => 77,  122 => 76,  117 => 75,  115 => 74,  110 => 72,  107 => 71,  101 => 69,  99 => 68,  94 => 65,  92 => 64,  89 => 60,  87 => 59,  84 => 56,  81 => 54,  79 => 53,  77 => 52,  75 => 50,  72 => 46,  69 => 44,  67 => 43,  65 => 37,  62 => 33,  60 => 32,  56 => 28,  53 => 26,  51 => 25,  49 => 24,  47 => 22,  44 => 19,  42 => 18,  40 => 17,  36 => 12,  34 => 11,  32 => 10,  30 => 9,  28 => 7,  26 => 5,  24 => 1,);
    }
}
