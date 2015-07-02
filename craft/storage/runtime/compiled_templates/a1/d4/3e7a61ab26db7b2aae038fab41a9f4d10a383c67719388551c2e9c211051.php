<?php

/* _includes/forms/time */
class __TwigTemplate_a1d43e7a61ab26db7b2aae038fab41a9f4d10a383c67719388551c2e9c211051 extends Craft\BaseTemplate
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
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "useCompressedJs", array())) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => ((((isset($context["value"]) ? $context["value"] : null) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "any", true, true))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "method")) : ((isset($context["value"]) ? $context["value"] : null))))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "
\tvar \$timePicker = \$('#";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "timepickerJsFormat", array()), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\t";
        // line 30
        if (array_key_exists("minuteIncrement", $context)) {
            echo "step: '";
            echo twig_escape_filter($this->env, (isset($context["minuteIncrement"]) ? $context["minuteIncrement"] : null), "html", null, true);
            echo "',";
        }
        // line 31
        echo "\t\tlang: {
\t\t\tam: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  71 => 31,  65 => 30,  61 => 29,  56 => 27,  51 => 25,  48 => 24,  46 => 23,  44 => 21,  42 => 19,  40 => 18,  38 => 17,  35 => 14,  33 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
