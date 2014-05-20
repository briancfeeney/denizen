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
        $context["drafts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 4
        $context["versions"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"), 1 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale")), "method");
        // line 5
        $context["baseUrl"] = (((("entries/" . $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getSection", array(), "method"), "handle")) . "/") . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id")) . "/");
        // line 6
        echo "
<div class=\"btn menubtn\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["revisionLabel"]) ? $context["revisionLabel"] : null), "html", null, true);
        echo "</div>

<div class=\"menu padded\">
\t<ul>
\t\t<li><a";
        // line 11
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "cpEditUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 14
        if ((isset($context["drafts"]) ? $context["drafts"] : null)) {
            // line 15
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drafts"]) ? $context["drafts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 18
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryDraft") && ($this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId") == (isset($context["draftId"]) ? $context["draftId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "drafts/") . $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("Draft {id}", array("id" => $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "draftId"))), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["draft"]) ? $context["draft"] : null), "creator"), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</ul>
\t";
        }
        // line 25
        echo "
\t";
        // line 26
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 27
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 30
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "classHandle") == "EntryVersion") && ($this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId") == (isset($context["versionId"]) ? $context["versionId"] : null)))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((((isset($context["baseUrl"]) ? $context["baseUrl"] : null) . "versions/") . $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version {id}", array("id" => $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "versionId"))), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["version"]) ? $context["version"] : null), "creator"), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</ul>
\t";
        }
        // line 37
        echo "</div>
";
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
        return array (  130 => 37,  126 => 35,  117 => 32,  113 => 31,  104 => 30,  100 => 29,  96 => 27,  94 => 26,  91 => 25,  87 => 23,  78 => 20,  74 => 19,  65 => 18,  61 => 17,  57 => 15,  55 => 14,  43 => 11,  36 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  24 => 2,  19 => 1,);
    }
}
