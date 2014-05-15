<?php

/* settings/globals */
class __TwigTemplate_5ed1bb38c5af9a238d825c7dbf0a3cdfcf478a756d9ee8de8fced64711e9b43d extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Globals");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["docsUrl"] = "http://buildwithcraft.com/docs/globals";
        // line 11
        $context["globalSets"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "globals"), "getAllSets", array(), "method");
        // line 14
        ob_start();
        // line 15
        echo "\t<div class=\"field\">
\t\t<p id=\"nosets\"";
        // line 16
        if ((isset($context["globalSets"]) ? $context["globalSets"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, \Craft\Craft::t("No global sets exist yet."), "html", null, true);
        echo "
\t\t</p>

\t\t";
        // line 20
        if ((isset($context["globalSets"]) ? $context["globalSets"] : null)) {
            // line 21
            echo "\t\t\t<table id=\"sets\" class=\"data fullwidth collapsible\">
\t\t\t\t<thead>
\t\t\t\t\t<th scope=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, \Craft\Craft::t("Global Set Name"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th scope=\"col\">";
            // line 24
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<td class=\"thin\"></td>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) ? $context["globalSets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["globalSet"]) {
                // line 29
                echo "\t\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "name"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, \Craft\Craft::t("Global Set Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/globals/" . $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "name")), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t\t<td class=\"code\" data-title=\"";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "handle"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['globalSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 38
        echo "
\t\t<div class=\"buttons\">
\t\t\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/globals/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Global Set"), "html", null, true);
        echo "</a>
\t\t</div>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 46
        $context["js"] = ('' === $tmp = "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sets',
\t\tnoObjectsSelector: '#nosets',
\t\tdeleteAction: 'globals/deleteSet',
\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Globals tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-globals').remove();
\t\t\t}
\t\t}
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/globals";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  118 => 46,  109 => 40,  105 => 38,  100 => 35,  91 => 32,  85 => 31,  77 => 30,  70 => 29,  66 => 28,  59 => 24,  55 => 23,  51 => 21,  49 => 20,  43 => 17,  37 => 16,  34 => 15,  32 => 14,  30 => 11,  28 => 8,  26 => 4,  24 => 2,);
    }
}
