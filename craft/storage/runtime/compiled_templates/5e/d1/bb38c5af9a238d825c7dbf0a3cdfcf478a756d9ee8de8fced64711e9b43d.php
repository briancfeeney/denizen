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
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 4
        $context["title"] = \Craft\Craft::t("Globals");
        // line 6
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 10
        $context["docsUrl"] = "http://buildwithcraft.com/docs/globals";
        // line 13
        $context["globalSets"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "globals", array()), "getAllSets", array(), "method");
        // line 16
        ob_start();
        // line 17
        echo "\t<div class=\"field\">
\t\t<p id=\"nosets\"";
        // line 18
        if ((isset($context["globalSets"]) ? $context["globalSets"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, \Craft\Craft::t("No global sets exist yet."), "html", null, true);
        echo "
\t\t</p>

\t\t";
        // line 22
        if ((isset($context["globalSets"]) ? $context["globalSets"] : null)) {
            // line 23
            echo "\t\t\t<table id=\"sets\" class=\"data fullwidth collapsible\">
\t\t\t\t<thead>
\t\t\t\t\t<th scope=\"col\">";
            // line 25
            echo twig_escape_filter($this->env, \Craft\Craft::t("Global Set Name"), "html", null, true);
            echo "</th>
\t\t\t\t\t<th scope=\"col\">";
            // line 26
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t\t<td class=\"thin\"></td>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) ? $context["globalSets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["globalSet"]) {
                // line 31
                echo "\t\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["globalSet"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["globalSet"], "name", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Global Set Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/globals/" . $this->getAttribute($context["globalSet"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["globalSet"], "name", array())), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t\t<td class=\"code\" data-title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["globalSet"], "handle", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\"></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['globalSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 40
        echo "
\t\t<div class=\"buttons\">
\t\t\t<a href=\"";
        // line 42
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/globals/new"), "html", null, true);
        echo "\" class=\"btn submit add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Global Set"), "html", null, true);
        echo "</a>
\t\t</div>
\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
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
        // line 63
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
        return array (  135 => 63,  120 => 48,  111 => 42,  107 => 40,  102 => 37,  93 => 34,  87 => 33,  79 => 32,  72 => 31,  68 => 30,  61 => 26,  57 => 25,  53 => 23,  51 => 22,  45 => 19,  39 => 18,  36 => 17,  34 => 16,  32 => 13,  30 => 10,  28 => 6,  26 => 4,  24 => 1,);
    }
}
