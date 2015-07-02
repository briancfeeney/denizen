<?php

/* settings/sections/_edit */
class __TwigTemplate_04c28321cc99f18a18abb5cea211faa647648214917f8e47b567281e3407a97a extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 89
        $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 97
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 98
        echo "
\t\t";
        // line 99
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "name", array()), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 110
        echo "

\t\t";
        // line 112
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle", array()), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 121
        echo "

\t\t";
        // line 123
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 124
            echo "\t\t\t";
            ob_start();
            // line 125
            echo "\t\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 129
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 130
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 135
                echo "\t\t\t\t\t\t\t";
                $context["localeSelected"] = ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true));
                // line 136
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 138
                echo $context["forms"]->getcheckbox(array("id" => ("locale-" . $this->getAttribute($context["locale"], "id", array())), "name" => "locales[]", "value" => $this->getAttribute($context["locale"], "id", array()), "checked" => (isset($context["localeSelected"]) ? $context["localeSelected"] : null), "toggle" => (".for-locale-" . $this->getAttribute($context["locale"], "id", array()))));
                // line 144
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                if ((!(isset($context["localeSelected"]) ? $context["localeSelected"] : null))) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 149
                echo $context["forms"]->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute($context["locale"], "id", array())) . "]"), "on" => (((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "enabledByDefault", array())), "small" => true));
                // line 153
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 161
            echo "
\t\t\t";
            // line 162
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?"), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "localeErrors"), "method")), (isset($context["localesInput"]) ? $context["localesInput"] : null));
            // line 165
            echo "
\t\t";
        }
        // line 167
        echo "
\t\t";
        // line 168
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => (isset($context["typeOptions"]) ? $context["typeOptions"] : null), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "type"), "method")));
        // line 178
        echo "

\t\t<hr>

\t\t";
        // line 182
        if ((isset($context["canBeSingle"]) ? $context["canBeSingle"] : null)) {
            // line 183
            echo "\t\t\t<div id=\"type-single\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 185
            if ((isset($context["canBeHomepage"]) ? $context["canBeHomepage"] : null)) {
                // line 186
                echo "\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
                // line 192
                echo "
\t\t\t\t";
            }
            // line 194
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 195
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 196
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->geturlFormatInput("single", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            // line 201
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 204
            echo $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->gettemplateField("single", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t</div>
\t\t";
        }
        // line 208
        echo "
\t\t";
        // line 209
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method"));
        // line 215
        echo "
\t\t";
        // line 216
        if ((isset($context["canBeChannel"]) ? $context["canBeChannel"] : null)) {
            // line 217
            echo "\t\t\t<div id=\"type-channel\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 219
            echo $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->gethasUrlsField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 221
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls", array()))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 222
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->geturlFormatInput("channel", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 224
            echo $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->gettemplateField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 229
        echo "
\t\t";
        // line 230
        if ((isset($context["canBeStructure"]) ? $context["canBeStructure"] : null)) {
            // line 231
            echo "\t\t\t<div id=\"type-structure\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 233
            echo $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->gethasUrlsField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 235
            if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls", array()))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 236
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->geturlFormatInput("structure", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 238
            echo $context["__internal_0aea028f3c61808639e357da05a931eb1842609e302805ad5d415a03221eb011"]->gettemplateField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 241
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "maxLevels", array()), "size" => 5, "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "maxLevels"), "method")));
            // line 249
            echo "

\t\t\t</div>
\t\t";
        }
        // line 253
        echo "
\t\t<hr>

\t\t";
        // line 256
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 257
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Enable versioning for entries in this section?"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning", array())));
            // line 262
            echo "
\t\t";
        }
        // line 264
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 272
        ob_start();
        // line 273
        echo "\t";
        if ((!$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle", array()))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 274
        echo "
\t";
        // line 275
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 276
            echo "\t\t";
            if (((!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true)) || (!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array())))) {
                // line 277
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 281
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "
\t";
        // line 283
        if ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null)) {
            // line 284
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 289
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function geturlFormatText($__sectionType__ = null, $__locale__ = null, $__section__ = null, $__name__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "locale" => $__locale__,
            "section" => $__section__,
            "name" => $__name__,
            "value" => $__value__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            $context["__internal_75e27d08923763ad889e6f1d166585c0530a4a8943f204261600791abb20ad71"] = $this->env->loadTemplate("_includes/forms");
            // line 9
            echo "\t";
            $context["errors"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => (((isset($context["name"]) ? $context["name"] : null) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()))), "method");
            // line 10
            echo "
\t<div class=\"input";
            // line 11
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 12
            echo $context["__internal_75e27d08923763ad889e6f1d166585c0530a4a8943f204261600791abb20ad71"]->gettext(array("id" => (((((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-") . (isset($context["name"]) ? $context["name"] : null)) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array())), "class" => "code ltr", "name" => (((((("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][") . (isset($context["name"]) ? $context["name"] : null)) . "][") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array())) . "]"), "value" => ((((isset($context["value"]) ? $context["value"] : null) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : null)) : (null)), "errors" => (isset($context["errors"]) ? $context["errors"] : null)));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            echo $context["__internal_75e27d08923763ad889e6f1d166585c0530a4a8943f204261600791abb20ad71"]->geterrorList((isset($context["errors"]) ? $context["errors"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function geturlFormatInput($__sectionType__ = null, $__brandNewSection__ = null, $__section__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "brandNewSection" => $__brandNewSection__,
            "section" => $__section__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") || ((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 27
                if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 30
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 36
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 38
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                    if ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (!(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null))) && (!$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true)))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t";
                    // line 43
                    $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array())) : (null));
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => $context["locale"], 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 46
                    if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["value"] = (((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "structure") && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "nestedUrlFormat", array())) : ("{parent.uri}/{slug}"));
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => $context["locale"], 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "nestedUrlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 57
                echo "\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getPrimarySiteLocale", array(), "method");
                // line 58
                echo "\t\t";
                $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()), array(), "array"), "urlFormat", array())) : (null));
                // line 59
                echo "\t\t";
                echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => (isset($context["locale"]) ? $context["locale"] : null), 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function gethasUrlsField($__sectionType__ = null, $__section__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "\t";
            $context["__internal_70e5a4700a1b236cf2c1c39f61a2aba381621985cb1e4ebef346141dceff0879"] = $this->env->loadTemplate("_includes/forms");
            // line 65
            echo "
\t";
            // line 66
            echo $context["__internal_70e5a4700a1b236cf2c1c39f61a2aba381621985cb1e4ebef346141dceff0879"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-hasUrls"), "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][hasUrls]"), "checked" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls", array()), "toggle" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-url-settings")));
            // line 72
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function gettemplateField($__sectionType__ = null, $__section__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "\t";
            $context["__internal_9bb05a9dd997ee3df53c90ae087fba0cc0eee2910761c7b54d1b1b4473df09b3"] = $this->env->loadTemplate("_includes/forms");
            // line 77
            echo "
\t";
            // line 78
            echo $context["__internal_9bb05a9dd997ee3df53c90ae087fba0cc0eee2910761c7b54d1b1b4473df09b3"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => ((((isset($context["sectionType"]) ? $context["sectionType"] : null) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => ((isset($context["sectionType"]) ? $context["sectionType"] : null) . "-template"), "class" => "ltr", "name" => (("types[" . (isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][template]"), "value" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "template", array()), "errors" => $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "template"), "method")));
            // line 86
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 86,  583 => 78,  580 => 77,  577 => 76,  565 => 75,  553 => 72,  551 => 66,  548 => 65,  545 => 64,  533 => 63,  518 => 59,  515 => 58,  512 => 57,  507 => 54,  500 => 52,  493 => 49,  491 => 48,  488 => 47,  486 => 46,  480 => 44,  478 => 43,  475 => 42,  469 => 40,  467 => 39,  459 => 38,  455 => 37,  452 => 36,  446 => 33,  441 => 32,  437 => 30,  435 => 29,  432 => 28,  430 => 27,  427 => 26,  424 => 25,  411 => 24,  398 => 21,  393 => 18,  391 => 12,  385 => 11,  382 => 10,  379 => 9,  376 => 8,  361 => 7,  356 => 289,  349 => 284,  347 => 283,  344 => 282,  338 => 281,  333 => 279,  329 => 278,  324 => 277,  321 => 276,  317 => 275,  314 => 274,  309 => 273,  307 => 272,  300 => 266,  296 => 264,  292 => 262,  289 => 257,  287 => 256,  282 => 253,  276 => 249,  274 => 241,  268 => 238,  263 => 236,  257 => 235,  252 => 233,  244 => 231,  242 => 230,  239 => 229,  231 => 224,  226 => 222,  220 => 221,  215 => 219,  207 => 217,  205 => 216,  202 => 215,  200 => 209,  197 => 208,  190 => 204,  185 => 201,  183 => 196,  177 => 195,  174 => 194,  170 => 192,  167 => 186,  165 => 185,  157 => 183,  155 => 182,  149 => 178,  147 => 168,  144 => 167,  140 => 165,  138 => 162,  135 => 161,  130 => 158,  120 => 153,  118 => 149,  111 => 148,  102 => 146,  98 => 144,  96 => 138,  92 => 136,  89 => 135,  85 => 134,  78 => 130,  74 => 129,  68 => 125,  65 => 124,  63 => 123,  59 => 121,  57 => 112,  53 => 110,  51 => 99,  48 => 98,  42 => 97,  37 => 95,  32 => 92,  30 => 91,  28 => 89,  26 => 5,  24 => 3,);
    }
}
