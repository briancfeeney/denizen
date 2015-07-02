<?php

/* entries/_revisions */
class __TwigTemplate_7e42f1004533884dec07f027d362e69a0013237550d8cb0f98d57361afe71229 extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < (isset($context["CraftClient"]) ? $context["CraftClient"] : null))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions", array()), "getEditableDraftsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array())), "method");
        // line 4
        $context["baseUrl"] = ((((("entries/" . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getSection", array(), "method"), "handle", array())) . "/") . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array())) . (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug", array())) ? (("-" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug", array()))) : (""))) . "/");
        // line 5
        echo "
<div id=\"revision-btn\" class=\"btn menubtn\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "html", null, true);
        echo "</div>

<div class=\"menu\">
\t<ul class=\"padded\">
\t\t<li><a";
        // line 10
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 13
        if ((isset($context["drafts"]) ? $context["drafts"] : null)) {
            // line 14
            echo "\t\t<h6>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Drafts"), "html", null, true);
            echo "</h6>
\t\t<ul class=\"padded\">
\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) ? $context["drafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 17
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft") && ($this->getAttribute($context["draft"], "draftId", array()) == (isset($context["draftId"]) ? $context["draftId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "drafts/") . $this->getAttribute($context["draft"], "draftId", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["draft"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("by {creator}", array("creator" => $this->getAttribute($context["draft"], "creator", array()))), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</ul>
\t";
        }
        // line 24
        echo "
\t";
        // line 25
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning", array())) {
            // line 26
            echo "\t\t";
            $context["versions"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions", array()), "getVersionsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array())), "method");
            // line 27
            echo "\t\t";
            if ((isset($context["versions"]) ? $context["versions"] : null)) {
                // line 28
                echo "\t\t\t<h6>";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Recent Versions"), "html", null, true);
                echo "</h6>
\t\t\t<ul class=\"padded\">
\t\t\t\t";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                    // line 31
                    echo "\t\t\t\t\t<li><a";
                    if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryVersion") && ($this->getAttribute($context["version"], "versionId", array()) == (isset($context["versionId"]) ? $context["versionId"] : null)))) {
                        echo " class=\"sel\"";
                    }
                    echo " href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "versions/") . $this->getAttribute($context["version"], "versionId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 32
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Version {num}", array("num" => $this->getAttribute($context["version"], "num", array()))), "html", null, true);
                    echo "
\t\t\t\t\t\t<span class=\"light\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["version"], "dateCreated", array()), "uiTimestamp", array(), "method"), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "creator", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t</a></li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t</ul>
\t\t";
            }
            // line 38
            echo "\t";
        }
        // line 39
        echo "</div>

";
        // line 41
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft")) {
            // line 42
            echo "\t<a id=\"editdraft-btn\" class=\"btn edit icon\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Edit Draft Settings"), "html", null, true);
            echo "\"></a>
\t";
            // line 43
            \Craft\craft()->templates->includeJsResource("js/EntryDraftEditor.js");
            // line 44
            echo "\t";
            \Craft\craft()->templates->includeJs((((((("new Craft.EntryDraftEditor(" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId", array())) . ", \"") . twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "js")) . "\", \"") . twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes", array()), "js")) . "\");"));
            // line 45
            echo "\t";
            \Craft\craft()->templates->includeTranslations(
            	"Draft Name",
            	"Notes"
            );
        }
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 45,  156 => 44,  154 => 43,  149 => 42,  147 => 41,  143 => 39,  140 => 38,  136 => 36,  125 => 33,  121 => 32,  112 => 31,  108 => 30,  102 => 28,  99 => 27,  96 => 26,  94 => 25,  91 => 24,  87 => 22,  78 => 19,  74 => 18,  65 => 17,  61 => 16,  55 => 14,  53 => 13,  41 => 10,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
