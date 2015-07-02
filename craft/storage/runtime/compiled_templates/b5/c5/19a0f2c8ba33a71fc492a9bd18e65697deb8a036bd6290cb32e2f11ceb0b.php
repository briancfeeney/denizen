<?php

/* settings/fields */
class __TwigTemplate_b5c519a0f2c8ba33a71fc492a9bd18e65697deb8a036bd6290cb32e2f11ceb0b extends Craft\BaseTemplate
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
        // line 4
        $context["title"] = \Craft\Craft::t("Fields");
        // line 6
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields";
        // line 8
        \Craft\craft()->templates->includeJsResource("js/fields.js");
        // line 10
        \Craft\craft()->templates->includeTranslations(
        	"What do you want to name your group?",
        	"Could not create the group:",
        	"Could not create the group:",
        	"Are you sure you want to delete this group and all its fields?",
        	"Could not delete the group.",
        	"Group renamed."
        );
        // line 19
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 24
        $context["groups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 26
        if (array_key_exists("groupId", $context)) {
            // line 27
            if ((!$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array", true, true))) {
                // line 28
                throw new \Craft\HttpException(404);
            }
            // line 31
            $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array"), "getFields", array(), "method");
        } else {
            // line 33
            $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllFields", array(), "method");
        }
        // line 37
        ob_start();
        // line 38
        echo "
\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\"";
        if ((!array_key_exists("groupId", $context))) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All Fields"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 43
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\"";
            if ((array_key_exists("groupId", $context) && ($this->getAttribute($context["group"], "id", array()) == (isset($context["groupId"]) ? $context["groupId"] : null)))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 49
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Group"), "html", null, true);
        echo "</div>

\t\t";
        // line 51
        if (array_key_exists("groupId", $context)) {
            // line 52
            echo "\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">";
            // line 55
            echo twig_escape_filter($this->env, \Craft\Craft::t("Rename selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">";
            // line 56
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 60
        echo "\t</div>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start();
        // line 65
        echo "
\t<p id=\"nofields\"";
        // line 66
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 67
        if (array_key_exists("groupId", $context)) {
            // line 68
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This group doesn’t have any fields yet."), "html", null, true);
            echo "
\t\t";
        } else {
            // line 70
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No fields exist yet."), "html", null, true);
            echo "
\t\t";
        }
        // line 72
        echo "\t</p>

\t";
        // line 74
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 75
            echo "\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 77
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 78
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 79
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 80
            if ((!array_key_exists("groupId", $context))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                echo "</th>";
            }
            // line 81
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 85
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 86
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "</a>";
                // line 87
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " <span class=\"required\"></span>";
                }
                // line 88
                echo "</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 89
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "handle", array()), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 90
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 91
                $context["fieldType"] = $this->getAttribute($context["field"], "getFieldType", array(), "method");
                // line 92
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["fieldType"]) ? $context["fieldType"] : null)) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<span class=\"error\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 98
                if ((!array_key_exists("groupId", $context))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "group", array()), "name", array()), "html", null, true);
                    echo "</td>";
                }
                // line 99
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 105
        echo "
\t";
        // line 106
        if ((isset($context["groups"]) ? $context["groups"] : null)) {
            // line 107
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 108
            $context["newFieldUrl"] = \Craft\UrlHelper::getUrl("settings/fields/new", ((array_key_exists("groupId", $context)) ? (array("groupId" => (isset($context["groupId"]) ? $context["groupId"] : null))) : (null)));
            // line 109
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["newFieldUrl"]) ? $context["newFieldUrl"] : null), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Field"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        // line 112
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 116
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 123,  290 => 116,  286 => 112,  277 => 109,  275 => 108,  272 => 107,  270 => 106,  267 => 105,  262 => 102,  252 => 99,  244 => 98,  241 => 97,  235 => 95,  229 => 93,  226 => 92,  224 => 91,  220 => 90,  214 => 89,  211 => 88,  207 => 87,  200 => 86,  193 => 85,  189 => 84,  184 => 81,  178 => 80,  174 => 79,  170 => 78,  166 => 77,  162 => 75,  160 => 74,  156 => 72,  150 => 70,  144 => 68,  142 => 67,  136 => 66,  133 => 65,  131 => 64,  127 => 60,  120 => 56,  116 => 55,  109 => 52,  107 => 51,  102 => 49,  96 => 45,  79 => 43,  75 => 42,  65 => 41,  60 => 38,  58 => 37,  55 => 33,  52 => 31,  49 => 28,  47 => 27,  45 => 26,  43 => 24,  41 => 19,  32 => 10,  30 => 8,  28 => 6,  26 => 4,  24 => 1,);
    }
}
