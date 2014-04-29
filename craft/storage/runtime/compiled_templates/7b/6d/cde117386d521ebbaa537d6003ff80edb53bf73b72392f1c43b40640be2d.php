<?php

/* _includes/forms/text */
class __TwigTemplate_7b6dcde117386d521ebbaa537d6003ff80edb53bf73b72392f1c43b40640be2d extends Craft\BaseTemplate
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : (null)), 2 => (((array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) ? ("nicetext") : (null)), 3 => (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password"))) ? ("password") : (null)), 4 => (((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) ? ("disabled") : (null)), 5 => (((array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 13
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\"";
        // line 14
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 15
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
            echo "\"";
        }
        // line 16
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
        }
        // line 17
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        // line 18
        if (array_key_exists("maxlength", $context)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : $this->getContext($context, "maxlength")), "html", null, true);
            echo "\"";
        }
        // line 19
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : $this->getContext($context, "autofocus"))) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : $this->getContext($context, "craft")), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 20
        if (((!array_key_exists("autocomplete", $context)) || (!(isset($context["autocomplete"]) ? $context["autocomplete"] : $this->getContext($context, "autocomplete"))))) {
            echo " autocomplete=\"off\"";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            echo " disabled ";
        }
        // line 22
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) ? $context["readonly"] : $this->getContext($context, "readonly")))) {
            echo " readonly ";
        }
        // line 23
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 24
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  87 => 87,  79 => 23,  51 => 17,  47 => 37,  23 => 12,  36 => 9,  32 => 8,  26 => 5,  21 => 3,  19 => 1,  80 => 20,  75 => 22,  64 => 10,  56 => 9,  49 => 6,  40 => 10,  38 => 19,  34 => 18,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 1,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  91 => 92,  86 => 24,  83 => 82,  78 => 34,  73 => 32,  71 => 21,  69 => 29,  67 => 20,  65 => 27,  63 => 19,  61 => 25,  59 => 52,  55 => 47,  50 => 18,  45 => 16,  43 => 32,  41 => 10,  35 => 22,  57 => 18,  54 => 18,  52 => 7,  46 => 13,  42 => 12,  39 => 15,  31 => 17,  29 => 6,  27 => 13,  25 => 4,);
    }
}
