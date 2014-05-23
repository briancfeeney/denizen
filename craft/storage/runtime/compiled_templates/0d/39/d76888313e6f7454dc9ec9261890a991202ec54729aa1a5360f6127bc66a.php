<?php

/* dashboard/settings */
class __TwigTemplate_0d39d76888313e6f7454dc9ec9261890a991202ec54729aa1a5360f6127bc66a extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Dashboard Settings");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Dashboard"), "url" => \Craft\UrlHelper::getUrl("dashboard")));
        // line 9
        $context["widgets"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard"), "getUserWidgets");
        // line 10
        $context["sortable"] = (twig_length_filter($this->env, (isset($context["widgets"]) ? $context["widgets"] : null)) > 1);
        // line 13
        ob_start();
        // line 14
        echo "\t<h2>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Widgets"), "html", null, true);
        echo "</h2>

\t<p id=\"nowidgets\"";
        // line 16
        if (twig_length_filter($this->env, (isset($context["widgets"]) ? $context["widgets"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 17
        echo twig_escape_filter($this->env, \Craft\Craft::t("You don’t have any widgets yet."), "html", null, true);
        echo "
\t</p>

\t";
        // line 20
        if (twig_length_filter($this->env, (isset($context["widgets"]) ? $context["widgets"] : null))) {
            // line 21
            echo "\t\t<table id=\"widgets\" class=\"data fullwidth collapsible\">
\t\t\t<tbody>
\t\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 24
                echo "\t\t\t\t\t";
                $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard"), "populateWidgetType", array(0 => (isset($context["widget"]) ? $context["widget"] : null)), "method");
                // line 25
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, (((isset($context["widgetType"]) ? $context["widgetType"] : null)) ? ($this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "title")) : ($this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "type"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("dashboard/settings/" . $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((isset($context["widgetType"]) ? $context["widgetType"] : null)) ? ($this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "title")) : (\Craft\Craft::t("Unknown"))), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t";
                // line 28
                if ((isset($context["widgetType"]) ? $context["widgetType"] : null)) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "name") != $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "title"))) {
                        echo "<span class=\"light\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "name"), "html", null, true);
                        echo ")</span>";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<span class=\"light error\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget"]) ? $context["widget"] : null), "type"), "html", null, true);
                    echo ")</span>
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
                // line 34
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                    echo "\" role=\"button\"></a></td>";
                }
                // line 35
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 41
        echo "
\t<div class=\"buttons\">
\t\t<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard/settings/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Widget"), "html", null, true);
        echo "</a>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#widgets',
\t\tnoObjectsSelector: '#nowidgets',
\t\tsortable: true,
\t\treorderAction: 'dashboard/reorderUserWidgets',
\t\tdeleteAction: 'dashboard/deleteUserWidget'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 57
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "dashboard/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  136 => 48,  128 => 43,  124 => 41,  119 => 38,  109 => 35,  103 => 34,  100 => 33,  94 => 31,  91 => 30,  84 => 29,  82 => 28,  76 => 27,  72 => 26,  65 => 25,  62 => 24,  58 => 23,  54 => 21,  52 => 20,  46 => 17,  40 => 16,  34 => 14,  32 => 13,  30 => 10,  28 => 9,  26 => 4,  24 => 2,);
    }
}
