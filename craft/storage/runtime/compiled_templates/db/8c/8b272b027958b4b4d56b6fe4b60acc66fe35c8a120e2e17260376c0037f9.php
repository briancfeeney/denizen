<?php

/* _components/fieldtypes/Assets/settings */
class __TwigTemplate_db8c8b272b027958b4b4d56b6fe4b60acc66fe35c8a120e2e17260376c0037f9 extends Craft\BaseTemplate
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
        // line 27
        echo "
";
        // line 28
        $context["__internal_e0a2c6d955e5d1aa1909f0df92c6a6e2421b02c2299a4694562ce0ba53541716"] = $this;
        // line 29
        echo "
";
        // line 30
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict uploads to a single folder?"), "id" => "useSingleFolder-toggle", "name" => "useSingleFolder", "class" => "use-single-folder-cb", "value" => 1, "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array()), "toggle" => "single-folder-settings", "reverseToggle" => "multi-folder-settings"));
        // line 39
        echo "

";
        // line 41
        $context["uploadLocationNote"] = \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.");
        // line 42
        if ((isset($context["isMatrix"]) ? $context["isMatrix"] : null)) {
            // line 43
            echo "\t";
            $context["uploadLocationNote"] = $this->env->getExtension('craft')->replaceFilter((isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null), array("{slug}" => "{owner.slug}", "{author.username}" => "{owner.author.username}"));
        }
        // line 48
        echo "
<div id=\"multi-folder-settings\"";
        // line 49
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 50
        if ((isset($context["folderOptions"]) ? $context["folderOptions"] : null)) {
            // line 51
            echo "\t\t";
            echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" => (isset($context["folderOptions"]) ? $context["folderOptions"] : null), "values" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sources", array())));
            // line 58
            echo "
\t";
        } else {
            // line 60
            echo "\t\t";
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Sources")), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 62
            echo "
\t";
        }
        // line 64
        echo "

\t";
        // line 66
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Default Upload Location"), "instructions" => ((\Craft\Craft::t("Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?") . " ") . (isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null)), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "defaultUploadLocationSubpath"), "method")), $context["__internal_e0a2c6d955e5d1aa1909f0df92c6a6e2421b02c2299a4694562ce0ba53541716"]->getuploadLocationInput("defaultUploadLocation", (isset($context["settings"]) ? $context["settings"] : null), (isset($context["sourceOptions"]) ? $context["sourceOptions"] : null)));
        // line 70
        echo "
</div>

<div id=\"single-folder-settings\"";
        // line 73
        if ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array()))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 74
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Upload Location"), "instructions" => (isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null), "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "singleUploadLocationSubpath"), "method")), $context["__internal_e0a2c6d955e5d1aa1909f0df92c6a6e2421b02c2299a4694562ce0ba53541716"]->getuploadLocationInput("singleUploadLocation", (isset($context["settings"]) ? $context["settings"] : null), (isset($context["sourceOptions"]) ? $context["sourceOptions"] : null)));
        // line 78
        echo "
</div>

";
        // line 81
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict allowed file types?"), "class" => "restrictFiles", "id" => "restrictFiles", "name" => "restrictFiles", "value" => 1, "checked" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "restrictFiles", array()), "toggle" => "restrict-allowed-types"));
        // line 89
        echo "

<div id=\"restrict-allowed-types\"";
        // line 91
        if ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "restrictFiles", array()))) {
            echo " class=\"hidden indent\"";
        }
        echo ">
\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fileKindOptions"]) ? $context["fileKindOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 93
            echo "\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => $this->getAttribute($context["option"], "label", array()), "id" => ("allowedKinds-" . $this->getAttribute($context["option"], "value", array())), "name" => "allowedKinds[]", "value" => $this->getAttribute($context["option"], "value", array()), "checked" => twig_in_filter($this->getAttribute($context["option"], "value", array()), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "allowedKinds", array()))));
            // line 99
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</div>

";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["targetLocaleField"]) ? $context["targetLocaleField"] : null), "html", null, true);
        echo "

";
        // line 105
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "limit", array()), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
        // line 113
        echo "
";
    }

    // line 3
    public function getuploadLocationInput($__name__ = null, $__settings__ = null, $__sourceOptions__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "settings" => $__settings__,
            "sourceOptions" => $__sourceOptions__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "\t";
            $context["__internal_c11dabe0f421fbed7fe742089378f6e31098080915f8a5e1fbaf53e1b57e2134"] = $this->env->loadTemplate("_includes/forms");
            // line 5
            echo "\t<table class=\"inputs fullwidth\">
\t\t<tr>
\t\t\t<td class=\"thin\">
\t\t\t\t";
            // line 8
            echo $context["__internal_c11dabe0f421fbed7fe742089378f6e31098080915f8a5e1fbaf53e1b57e2134"]->getselect(array("id" => ((isset($context["name"]) ? $context["name"] : null) . "Source"), "name" => ((isset($context["name"]) ? $context["name"] : null) . "Source"), "options" => (isset($context["sourceOptions"]) ? $context["sourceOptions"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ((isset($context["name"]) ? $context["name"] : null) . "Source"), array(), "array")));
            // line 13
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 16
            echo $context["__internal_c11dabe0f421fbed7fe742089378f6e31098080915f8a5e1fbaf53e1b57e2134"]->gettext(array("id" => ((isset($context["name"]) ? $context["name"] : null) . "Subpath"), "class" => "ltr", "name" => ((isset($context["name"]) ? $context["name"] : null) . "Subpath"), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ((isset($context["name"]) ? $context["name"] : null) . "Subpath"), array(), "array"), "placeholder" => \Craft\Craft::t("path/to/subfolder")));
            // line 22
            echo "
\t\t\t</td>
\t\t</tr>
\t</table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 22,  165 => 16,  160 => 13,  158 => 8,  153 => 5,  150 => 4,  137 => 3,  132 => 113,  130 => 105,  125 => 103,  121 => 101,  114 => 99,  111 => 93,  107 => 92,  101 => 91,  97 => 89,  95 => 81,  90 => 78,  88 => 74,  82 => 73,  77 => 70,  75 => 66,  71 => 64,  67 => 62,  64 => 60,  60 => 58,  57 => 51,  55 => 50,  49 => 49,  46 => 48,  42 => 43,  40 => 42,  38 => 41,  34 => 39,  32 => 30,  29 => 29,  27 => 28,  24 => 27,  21 => 2,  19 => 1,);
    }
}
