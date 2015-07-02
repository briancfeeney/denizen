<?php

/* _components/fieldtypes/Matrix/settings */
class __TwigTemplate_f5e11fb2e12b73c79e295d446d43f508cfafa334078b4ee6526dd3bfb75d8365 extends Craft\BaseTemplate
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
        // line 4
        ob_start();
        // line 5
        echo "\t<div class=\"mc-sidebar block-types\">
\t\t<div class=\"col-inner-container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 8
        echo twig_escape_filter($this->env, \Craft\Craft::t("Block Types"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t<div class=\"blocktypes\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"matrixconfigitem mci-blocktype";
            if ($this->getAttribute($context["blockType"], "hasFieldErrors", array())) {
                echo " error";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "id", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["blockType"], "hasErrors", array(), "method")) {
                echo " data-errors=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute($context["blockType"], "getErrors", array(), "method")), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t\t\t\t<div class=\"name\">";
            // line 14
            if ($this->getAttribute($context["blockType"], "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "name", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t\t<div class=\"handle code\">";
            // line 15
            if ($this->getAttribute($context["blockType"], "handle", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "handle", array()), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t\t<a class=\"settings icon";
            // line 18
            if ($this->getAttribute($context["blockType"], "hasErrors", array(), "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "id", array()), "html", null, true);
            echo "][name]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "id", array()), "html", null, true);
            echo "][handle]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "handle", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"btn add icon\">";
        // line 25
        echo twig_escape_filter($this->env, \Craft\Craft::t("New block type"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mc-sidebar fields\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 32
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fields"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 36
            echo "\t\t\t\t\t<div data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "id", array()), "html", null, true);
            echo "\" class=\"hidden\">
\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["blockType"], "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 38
                echo "\t\t\t\t\t\t\t<div class=\"matrixconfigitem mci-field";
                if ($this->getAttribute($context["field"], "hasErrors", array(), "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"name";
                // line 39
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " required";
                }
                echo "\">";
                // line 40
                if (($this->getAttribute($context["field"], "name", array()) && ($this->getAttribute($context["field"], "name", array()) != "__blank__"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
                } else {
                    echo "<em class=\"light\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("(blank)"), "html", null, true);
                    echo "</em>";
                }
                // line 41
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"handle code\">";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "handle", array()), "html", null, true);
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                // line 44
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t<div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New field"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"field-settings\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Field Settings"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 61
            echo "\t\t\t\t\t<div data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockType"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["blockType"], "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 63
                echo "\t\t\t\t\t\t\t";
                $context["fieldId"] = $this->getAttribute($context["field"], "id", array());
                // line 64
                echo "\t\t\t\t\t\t\t<div data-id=\"";
                echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
                echo "\" class=\"hidden\">
\t\t\t\t\t\t\t\t";
                // line 65
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name"), "id" => ((isset($context["fieldId"]) ? $context["fieldId"] : null) . "-name"), "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][name]"), "value" => ((($this->getAttribute($context["field"], "name", array()) != "__blank__")) ? ($this->getAttribute($context["field"], "name", array())) : ("")), "errors" => $this->getAttribute($context["field"], "getErrors", array(0 => "name"), "method"), "autofocus" => true));
                // line 72
                echo "

\t\t\t\t\t\t\t\t";
                // line 74
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => ((isset($context["fieldId"]) ? $context["fieldId"] : null) . "-handle"), "class" => "code", "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][handle]"), "maxlength" => 64, "value" => $this->getAttribute($context["field"], "handle", array()), "errors" => $this->getAttribute($context["field"], "getErrors", array(0 => "handle"), "method"), "required" => true));
                // line 83
                echo "

\t\t\t\t\t\t\t\t";
                // line 85
                echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Instructions"), "id" => ((isset($context["fieldId"]) ? $context["fieldId"] : null) . "-instructions"), "class" => "nicetext", "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][instructions]"), "value" => $this->getAttribute($context["field"], "instructions", array()), "errors" => $this->getAttribute($context["field"], "getErrors", array(0 => "instructions"), "method")));
                // line 92
                echo "

\t\t\t\t\t\t\t\t";
                // line 94
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is required"), "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][required]"), "checked" => $this->getAttribute($context["field"], "required", array())));
                // line 98
                echo "

\t\t\t\t\t\t\t\t";
                // line 100
                if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][translatable]"), "checked" => $this->getAttribute($context["field"], "translatable", array())));
                    // line 105
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t";
                // line 110
                $context["fieldType"] = $this->getAttribute($context["field"], "getFieldType", array(), "method");
                // line 111
                echo "\t\t\t\t\t\t\t\t";
                $context["isFieldTypeMissing"] = (!(isset($context["fieldType"]) ? $context["fieldType"] : null));
                // line 112
                echo "
\t\t\t\t\t\t\t\t";
                // line 113
                if ((isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : null)) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["fieldType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getFieldType", array(0 => "PlainText"), "method");
                    // line 115
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 116
                echo "
\t\t\t\t\t\t\t\t";
                // line 117
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Field Type"), "warning" => (((!$this->getAttribute($context["field"], "isNew", array(), "method"))) ? (\Craft\Craft::t("Changing this may result in data loss.")) : ("")), "id" => ((isset($context["fieldId"]) ? $context["fieldId"] : null) . "-type"), "name" => (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][type]"), "options" => (isset($context["fieldTypes"]) ? $context["fieldTypes"] : null), "value" => $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getClassHandle", array(), "method"), "errors" => (((isset($context["isFieldTypeMissing"]) ? $context["isFieldTypeMissing"] : null)) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($context["field"], "type", array()))))) : (null))));
                // line 125
                echo "

\t\t\t\t\t\t\t\t<div class=\"fieldtype-settings\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                $_namespace = (((("blockTypes[" . $this->getAttribute($context["blockType"], "id", array())) . "][fields][") . (isset($context["fieldId"]) ? $context["fieldId"] : null)) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 132
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<a class=\"error delete\">";
                // line 137
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 146
        echo "
<div class=\"matrix-configurator\">
\t";
        // line 148
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Configuration"), "instructions" => \Craft\Craft::t("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of."), "name" => "config"), (isset($context["blockTypeInput"]) ? $context["blockTypeInput"] : null));
        // line 152
        echo "
</div>

";
        // line 155
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Blocks"), "instructions" => \Craft\Craft::t("The maximum number of blocks the field is allowed to have."), "id" => "maxBlocks", "name" => "maxBlocks", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "maxBlocks", array()), "size" => 3, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "maxBlocks"), "method")));
        // line 163
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 163,  353 => 155,  348 => 152,  346 => 148,  342 => 146,  336 => 142,  329 => 140,  320 => 137,  313 => 132,  294 => 130,  287 => 129,  281 => 125,  279 => 117,  276 => 116,  273 => 115,  270 => 114,  268 => 113,  265 => 112,  262 => 111,  260 => 110,  255 => 107,  251 => 105,  248 => 101,  246 => 100,  242 => 98,  240 => 94,  236 => 92,  234 => 85,  230 => 83,  228 => 74,  224 => 72,  222 => 65,  217 => 64,  214 => 63,  210 => 62,  205 => 61,  201 => 60,  195 => 57,  184 => 50,  177 => 48,  167 => 44,  162 => 42,  159 => 41,  151 => 40,  146 => 39,  137 => 38,  133 => 37,  128 => 36,  124 => 35,  118 => 32,  108 => 25,  105 => 24,  94 => 21,  88 => 20,  79 => 18,  75 => 17,  66 => 15,  58 => 14,  43 => 13,  39 => 12,  32 => 8,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
