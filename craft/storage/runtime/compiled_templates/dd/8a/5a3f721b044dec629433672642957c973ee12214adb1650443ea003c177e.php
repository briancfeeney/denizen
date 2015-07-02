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
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()) && ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)))) {
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        $context["sectionHandle"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle", array());
        // line 11
        $context["isSingle"] = ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "single");
        // line 12
        $context["isVersion"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryVersion");
        // line 13
        $context["isDraft"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()) && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft"));
        // line 15
        $context["canPublish"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method");
        // line 308
        if ((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug", array()))) {
            // line 309
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
        echo "\" data-confirm-unload>
\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 22
        if ((!(isset($context["isVersion"]) ? $context["isVersion"] : null))) {
            // line 23
            echo "\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t";
            // line 24
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array())) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()), "html", null, true);
                echo "\">";
            }
            // line 25
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                echo "<input type=\"hidden\" name=\"locale\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()), "html", null, true);
                echo "\">";
            }
            // line 26
            echo "\t\t";
        } else {
            // line 27
            echo "\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId", array()), "html", null, true);
            echo "\">
\t\t";
        }
        // line 29
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 33
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 34
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("entries/_fields")->display(array_merge($context, array("static" => (isset($context["isVersion"]) ? $context["isVersion"] : null))));
        // line 37
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 42
        if ((isset($context["showPreviewBtn"]) ? $context["showPreviewBtn"] : null)) {
            // line 43
            echo "\t\t\t\t\t";
            $this->env->loadTemplate("_includes/previewbtns")->display($context);
            // line 44
            echo "\t\t\t\t";
        }
        // line 45
        echo "
\t\t\t\t";
        // line 46
        if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getLocales", array(), "method")) > 1))) {
            // line 47
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 48
            $context["parentIdParam"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getParam", array(0 => "parentId"), "method");
            // line 49
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeIds"]) ? $context["localeIds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 50
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleById", array(0 => $context["localeId"]), "method"), "name", array());
                // line 51
                echo "\t\t\t\t\t\t\t<li";
                if (($context["localeId"] == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 52
                if (($context["localeId"] == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()))) {
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 54
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "localeEnabled", array()), "small" => true, "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                } else {
                    // line 61
                    $context["localeUrl"] = \Craft\UrlHelper::getUrl(((((("entries/" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "/") . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getSegment", array(0 => 3), "method")) . "/") . $context["localeId"]), (((isset($context["parentIdParam"]) ? $context["parentIdParam"] : null)) ? (array("parentId" => (isset($context["parentIdParam"]) ? $context["parentIdParam"] : null))) : ("")));
                    // line 65
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["localeUrl"]) ? $context["localeUrl"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 66
                    echo ((twig_in_filter($context["localeId"], (isset($context["enabledLocales"]) ? $context["enabledLocales"] : null))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 68
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 72
        echo "
\t\t\t\t";
        // line 73
        if (((!(isset($context["isSingle"]) ? $context["isSingle"] : null)) || (isset($context["canPublish"]) ? $context["canPublish"] : null))) {
            // line 74
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 76
            if ((!(isset($context["isSingle"]) ? $context["isSingle"] : null))) {
                // line 77
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute((isset($context["entryType"]) ? $context["entryType"] : null), "id", array()), "options" => (isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : null)));
                    // line 84
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "
\t\t\t\t\t\t\t";
                // line 87
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "locale" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()), "id" => "slug", "name" => "slug", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug", array()), "errors" => (((!(isset($context["isVersion"]) ? $context["isVersion"] : null))) ? (twig_array_merge($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "slug"), "method"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 95
                echo "

\t\t\t\t\t\t\t";
                // line 97
                if (array_key_exists("parentOptionCriteria", $context)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "elementType" => (isset($context["elementType"]) ? $context["elementType"] : null), "addButtonLabel" => \Craft\Craft::t("Choose"), "sources" => array(0 => ("section:" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()))), "criteria" => (isset($context["parentOptionCriteria"]) ? $context["parentOptionCriteria"] : null), "limit" => 1, "elements" => (((array_key_exists("parent", $context) && (isset($context["parent"]) ? $context["parent"] : null))) ? (array(0 => (isset($context["parent"]) ? $context["parent"] : null))) : (""))));
                    // line 108
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 110
                echo "
\t\t\t\t\t\t\t";
                // line 111
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("editPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "elementType" => (isset($context["userElementType"]) ? $context["userElementType"] : null), "addButtonLabel" => \Craft\Craft::t("Choose"), "criteria" => (isset($context["authorOptionCriteria"]) ? $context["authorOptionCriteria"] : null), "limit" => 1, "elements" => (((array_key_exists("author", $context) && (isset($context["author"]) ? $context["author"] : null))) ? (array(0 => (isset($context["author"]) ? $context["author"] : null))) : (""))));
                    // line 121
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 123
                echo "
\t\t\t\t\t\t\t";
                // line 124
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate", array())) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate", array())) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "postDate"), "method"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 131
                echo "

\t\t\t\t\t\t\t";
                // line 133
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate", array())) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate", array())) : (null)), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "expiryDate"), "method"), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 140
                echo "
\t\t\t\t\t\t";
            }
            // line 142
            echo "
\t\t\t\t\t\t";
            // line 143
            if (((isset($context["canPublish"]) ? $context["canPublish"] : null) || ((!(isset($context["isVersion"]) ? $context["isVersion"] : null)) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null)))) {
                // line 144
                echo "
\t\t\t\t\t\t\t";
                // line 145
                ob_start();
                // line 146
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["canPublish"]) ? $context["canPublish"] : null)) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    echo $context["forms"]->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled", array()), "disabled" => (isset($context["isVersion"]) ? $context["isVersion"] : null)));
                    // line 153
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "
\t\t\t\t\t\t\t\t";
                // line 157
                if ((((!(isset($context["isSingle"]) ? $context["isSingle"] : null)) && (!(isset($context["isVersion"]) ? $context["isVersion"] : null))) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null))) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    // line 159
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"";
                    // line 160
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 165
                echo "
\t\t\t\t\t\t\t";
                // line 166
                echo $context["forms"]->getfield(array("label" => (((isset($context["canPublish"]) ? $context["canPublish"] : null)) ? (\Craft\Craft::t("Status")) : ("")), "id" => "enabled"), (isset($context["statusInput"]) ? $context["statusInput"] : null));
                // line 169
                echo "
\t\t\t\t\t\t";
            }
            // line 171
            echo "
\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 174
            if (((isset($context["isVersion"]) ? $context["isVersion"] : null) && $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes", array()))) {
                // line 175
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<h6>";
                // line 176
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version Notes"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t<p class=\"light\">";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 180
            echo "
\t\t\t\t";
        }
        // line 182
        echo "
\t\t\t\t";
        // line 184
        echo "
\t\t\t\t";
        // line 185
        if ((isset($context["isDraft"]) ? $context["isDraft"] : null)) {
            // line 186
            echo "
\t\t\t\t\t<hr>

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
            echo "/drafts/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId", array()), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
            echo "\">

\t\t\t\t\t\t";
            // line 197
            echo "\t\t\t\t\t\t";
            if ((((isset($context["canPublish"]) ? $context["canPublish"] : null) && (((isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array())) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 202
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 204
            echo "
\t\t\t\t\t\t";
            // line 206
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array())) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                // line 207
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t   data-confirm=\"";
                // line 208
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   data-redirect=\"";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t</div>

\t\t\t\t";
        } elseif ((isset($context["isVersion"]) ? $context["isVersion"] : null)) {
            // line 214
            echo "
\t\t\t\t\t";
            // line 216
            echo "\t\t\t\t\t";
            if (((isset($context["canPublish"]) ? $context["canPublish"] : null) && (((isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 220
                echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId", array()), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                // line 228
                echo twig_escape_filter($this->env, \Craft\Craft::t("Revert entry to this version"), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 231
            echo "
\t\t\t\t";
        } else {
            // line 233
            echo "
\t\t\t\t\t";
            // line 235
            echo "\t\t\t\t\t";
            if (((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) && (((!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array())) || (!$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled", array()))) || (isset($context["canPublish"]) ? $context["canPublish"] : null))) && (((isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 240
                echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                // line 243
                echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                echo "\">

\t\t\t\t\t\t<table class=\"inputs fullwidth\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                // line 249
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                // line 254
                echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                echo "</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 256
                $context["nextEntryParams"] = array();
                // line 257
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "typeId={type.id}"));
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 260
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "structure")) {
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "parentId={parent.id}"));
                    // line 262
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 264
                if ((!(isset($context["isSingle"]) ? $context["isSingle"] : null))) {
                    // line 265
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                    echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                    echo "/new";
                    if ((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null)) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_join_filter((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), "&"), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 267
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 268
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 269
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 271
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 272
                if (((!(isset($context["isSingle"]) ? $context["isSingle"] : null)) && $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"entryId\" data-value=\"\" data-redirect=\"";
                    echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a new entry"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 279
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning", array()))) {
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"";
                    // line 281
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Notes about your changes"), "html", null, true);
                    echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                // line 284
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
            } else {
                // line 287
                echo "\t\t\t\t\t\t";
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 288
                    echo "
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 292
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">

\t\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                    // line 295
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 298
                echo "\t\t\t\t\t";
            }
            // line 299
            echo "
\t\t\t\t";
        }
        // line 301
        echo "
\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
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
        return array (  574 => 301,  570 => 299,  567 => 298,  561 => 295,  555 => 292,  549 => 288,  546 => 287,  541 => 284,  535 => 281,  532 => 280,  530 => 279,  524 => 275,  516 => 273,  514 => 272,  511 => 271,  503 => 269,  501 => 268,  498 => 267,  485 => 265,  483 => 264,  480 => 263,  477 => 262,  474 => 261,  471 => 260,  468 => 259,  465 => 258,  462 => 257,  460 => 256,  453 => 254,  445 => 249,  436 => 243,  431 => 240,  428 => 235,  425 => 233,  421 => 231,  415 => 228,  409 => 225,  405 => 224,  399 => 220,  396 => 216,  393 => 214,  388 => 211,  383 => 209,  379 => 208,  374 => 207,  371 => 206,  368 => 204,  360 => 202,  357 => 197,  352 => 194,  346 => 191,  340 => 190,  334 => 186,  332 => 185,  329 => 184,  326 => 182,  322 => 180,  316 => 177,  312 => 176,  309 => 175,  307 => 174,  302 => 171,  298 => 169,  296 => 166,  293 => 165,  290 => 164,  283 => 160,  279 => 159,  276 => 158,  274 => 157,  271 => 156,  266 => 153,  264 => 148,  261 => 147,  258 => 146,  256 => 145,  253 => 144,  251 => 143,  248 => 142,  244 => 140,  242 => 133,  238 => 131,  236 => 124,  233 => 123,  229 => 121,  226 => 112,  224 => 111,  221 => 110,  217 => 108,  214 => 98,  212 => 97,  208 => 95,  206 => 87,  203 => 86,  199 => 84,  196 => 78,  193 => 77,  191 => 76,  187 => 74,  185 => 73,  182 => 72,  178 => 70,  171 => 68,  167 => 66,  160 => 65,  158 => 61,  155 => 54,  151 => 53,  149 => 52,  143 => 51,  140 => 50,  135 => 49,  133 => 48,  130 => 47,  128 => 46,  125 => 45,  122 => 44,  119 => 43,  117 => 42,  110 => 37,  107 => 34,  105 => 33,  99 => 29,  93 => 27,  90 => 26,  83 => 25,  77 => 24,  72 => 23,  70 => 22,  65 => 20,  60 => 19,  57 => 18,  51 => 309,  49 => 308,  47 => 15,  45 => 13,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
