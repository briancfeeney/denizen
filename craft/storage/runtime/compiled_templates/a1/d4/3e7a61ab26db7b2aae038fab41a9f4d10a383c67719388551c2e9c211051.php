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
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (((isset($context["value"]) ? $context["value"] : null)) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method");
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\tlang: {
\t\t\tam: '";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
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
        return array (  70 => 32,  44 => 21,  40 => 18,  66 => 31,  62 => 22,  37 => 15,  33 => 13,  31 => 11,  28 => 8,  123 => 34,  120 => 33,  114 => 32,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 39,  81 => 24,  78 => 34,  71 => 27,  68 => 19,  64 => 18,  56 => 27,  48 => 24,  42 => 19,  38 => 17,  23 => 7,  24 => 5,  72 => 14,  55 => 8,  89 => 16,  75 => 15,  54 => 11,  51 => 25,  46 => 23,  26 => 7,  21 => 2,  19 => 1,  434 => 208,  429 => 205,  426 => 204,  423 => 203,  418 => 201,  414 => 200,  411 => 199,  408 => 198,  405 => 197,  397 => 195,  395 => 194,  389 => 190,  376 => 188,  374 => 187,  371 => 186,  368 => 185,  365 => 184,  362 => 183,  359 => 182,  356 => 181,  353 => 180,  351 => 179,  344 => 177,  336 => 172,  330 => 169,  327 => 168,  324 => 163,  321 => 161,  317 => 159,  312 => 157,  308 => 156,  303 => 155,  300 => 154,  297 => 152,  289 => 150,  286 => 145,  281 => 142,  277 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 135,  259 => 134,  255 => 132,  252 => 131,  246 => 128,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 36,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 33,  67 => 17,  61 => 29,  57 => 12,  52 => 21,  49 => 9,  43 => 6,  41 => 213,  39 => 16,  35 => 14,  32 => 12,  29 => 6,  27 => 10,  25 => 8,);
    }
}
