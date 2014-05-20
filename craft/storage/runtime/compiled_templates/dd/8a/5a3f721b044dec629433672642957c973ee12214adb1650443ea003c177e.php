<?php

/* entries/_edit */
class __TwigTemplate_dd8a5a3f721b044dec629433672642957c973ee12214adb1650443ea003c177e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        // line 4
        ob_start();
        // line 5
        echo "\t";
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)))) {
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        $context["sectionHandle"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle");
        // line 213
        if ((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"))) {
            // line 214
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\" data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id"), "html", null, true);
        echo "\">
\t\t";
        // line 16
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) {
            echo "<input type=\"hidden\" name=\"entryId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), "html", null, true);
            echo "\">";
        }
        // line 17
        echo "\t\t";
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            echo "<input type=\"hidden\" name=\"locale\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"), "html", null, true);
            echo "\">";
        }
        // line 18
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 22
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 23
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("entries/_fields")->display($context);
        // line 24
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 29
        if ((isset($context["showPreviewBtn"]) ? $context["showPreviewBtn"] : null)) {
            // line 30
            echo "\t\t\t\t\t<div id=\"livepreview-btn\" class=\"btn big\" data-icon=\"view\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
            echo "
\t\t\t\t\t\t<div id=\"livepreview-spinner\" class=\"spinner hidden\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "
\t\t\t\t";
        // line 36
        if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getLocales", array(), "method")) > 1))) {
            // line 37
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeIds"]) ? $context["localeIds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 39
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleById", array(0 => (isset($context["localeId"]) ? $context["localeId"] : null)), "method"), "name");
                // line 40
                echo "\t\t\t\t\t\t\t<li";
                if (((isset($context["localeId"]) ? $context["localeId"] : null) == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 41
                if (((isset($context["localeId"]) ? $context["localeId"] : null) == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"))) {
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 43
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "localeEnabled")));
                } else {
                    // line 48
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ((\Craft\UrlHelper::getUrl(((("entries/" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "/") . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getSegment", array(0 => 3), "method"))) . "/") . (isset($context["localeId"]) ? $context["localeId"] : null)), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 49
                    echo ((twig_in_filter((isset($context["localeId"]) ? $context["localeId"] : null), (isset($context["enabledLocales"]) ? $context["enabledLocales"] : null))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 51
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t";
        // line 56
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
            // line 57
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 59
            if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                // line 60
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id"), "options" => (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : null)));
                // line 66
                echo "
\t\t\t\t\t\t";
            }
            // line 68
            echo "
\t\t\t\t\t\t";
            // line 69
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "id" => "slug", "name" => "slug", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug"), "errors" => twig_array_merge($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "slug"), "method"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "uri"), "method")), "required" => true));
            // line 76
            echo "

\t\t\t\t\t\t";
            // line 78
            if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                // line 79
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "options" => (isset($context["parentOptions"]) ? $context["parentOptions"] : null), "value" => (isset($context["parentId"]) ? $context["parentId"] : null)));
                // line 85
                echo "
\t\t\t\t\t\t";
            }
            // line 87
            echo "
\t\t\t\t\t\t";
            // line 88
            if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "options" => (isset($context["authorOptions"]) ? $context["authorOptions"] : null), "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId")));
                // line 95
                echo "
\t\t\t\t\t\t";
            }
            // line 97
            echo "
\t\t\t\t\t\t";
            // line 98
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "postDate"), "method")));
            // line 104
            echo "

\t\t\t\t\t\t";
            // line 106
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate")) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "expiryDate"), "method")));
            // line 112
            echo "

\t\t\t\t\t\t";
            // line 114
            if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) {
                // line 115
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Status"), "name" => "enabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled")));
                // line 119
                echo "
\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 123
            if ((isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null)) {
                // line 124
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                // line 125
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\tdata-confirm=\"";
                // line 126
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"localeId\" value=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale"), "html", null, true);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t";
        }
        // line 132
        echo "\t\t\t</div><!--/item-->

\t\t\t";
        // line 134
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") != "EntryVersion")) {
            // line 135
            echo "\t\t\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"1\">
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t";
            // line 137
            if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryDraft"))) {
                // line 138
                echo "
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 140
                echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                echo "/drafts/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                // line 142
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t";
                // line 145
                echo "\t\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method") && ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                    echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 152
                echo "
\t\t\t\t\t\t\t";
                // line 154
                echo "\t\t\t\t\t\t\t";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id")) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                    echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t\t   data-confirm=\"";
                    // line 156
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t   data-redirect=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t";
                }
                // line 159
                echo "
\t\t\t\t\t\t";
            } else {
                // line 161
                echo "
\t\t\t\t\t\t\t";
                // line 163
                echo "\t\t\t\t\t\t\t";
                if (((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) && (((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) || (!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "single") || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId") == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id"))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                    // line 169
                    echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                    // line 172
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                    // line 177
                    echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                    echo "</a></li>

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 179
                    $context["nextEntryParams"] = array();
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "typeId={type.id}"));
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") == "structure") && (twig_length_filter($this->env, (isset($context["parentOptions"]) ? $context["parentOptions"] : null)) > 1))) {
                        // line 184
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "parentId={parent.id}"));
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 186
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 187
                    if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type") != "single")) {
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                        echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                        echo "/new";
                        if ((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null)) {
                            echo "?";
                            echo twig_escape_filter($this->env, twig_join_filter((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), "&"), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 190
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                    // line 194
                    if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id") && ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)))) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                        echo "\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                        echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                        echo "/drafts/{draftId}\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 197
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 198
                    echo "\t\t\t\t\t\t\t\t";
                    if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                        // line 199
                        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                        // line 200
                        echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                        echo "/drafts/{draftId}\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                        // line 201
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 203
                    echo "\t\t\t\t\t\t\t";
                }
                // line 204
                echo "\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t</div>
\t\t\t\t</div><!--/item-->
\t\t\t";
        }
        // line 208
        echo "\t\t</div><!--/grid-->
\t</form>
";
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 208,  429 => 205,  426 => 204,  423 => 203,  418 => 201,  414 => 200,  411 => 199,  408 => 198,  405 => 197,  397 => 195,  395 => 194,  389 => 190,  376 => 188,  374 => 187,  371 => 186,  368 => 185,  365 => 184,  362 => 183,  359 => 182,  356 => 181,  353 => 180,  351 => 179,  344 => 177,  336 => 172,  330 => 169,  327 => 168,  324 => 163,  321 => 161,  317 => 159,  312 => 157,  308 => 156,  303 => 155,  300 => 154,  297 => 152,  289 => 150,  286 => 145,  281 => 142,  277 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 135,  259 => 134,  255 => 132,  252 => 131,  246 => 128,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 17,  61 => 16,  57 => 15,  52 => 14,  49 => 13,  43 => 214,  41 => 213,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
