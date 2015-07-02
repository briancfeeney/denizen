<?php

/* settings/globals/_edit */
class __TwigTemplate_7a4c73848d484350e43beab2480a5d89927830f9aa37d434064935f88b702396 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/globals";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 8
        ob_start();
        // line 9
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"globals/saveSet\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/globals\">
\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 14
        if ($this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "id", array())) {
            echo "<input type=\"hidden\" name=\"setId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 15
        echo "
\t\t<div id=\"set-settings\">
\t\t\t";
        // line 17
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this global set will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "name", array()), "errors" => $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 28
        echo "

\t\t\t";
        // line 30
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this global set in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "handle", array()), "errors" => $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 39
        echo "

\t\t</div>

\t\t<div id=\"set-fieldlayout\" class=\"hidden\">
\t\t\t";
        // line 44
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "getFieldLayout", array(), "method"), "customizableTabs" => false, "tab" => "fieldlayout"));
        // line 49
        echo "\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        if ((!$this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "handle", array()))) {
            // line 61
            $context["js"] = ('' === $tmp = "\t\tnew Craft.HandleGenerator('#name', '#handle');
\t") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 64,  83 => 61,  81 => 60,  74 => 54,  67 => 49,  65 => 44,  58 => 39,  56 => 30,  52 => 28,  50 => 17,  46 => 15,  40 => 14,  35 => 12,  30 => 9,  28 => 8,  26 => 5,  24 => 3,);
    }
}
