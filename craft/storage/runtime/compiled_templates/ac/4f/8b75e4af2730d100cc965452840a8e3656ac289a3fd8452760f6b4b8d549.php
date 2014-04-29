<?php

/* _includes/field */
class __TwigTemplate_ac4f8b75e4af2730d100cc965452840a8e3656ac289a3fd8452760f6b4b8d549 extends Craft\BaseTemplate
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
        // line 3
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 4
        echo "
";
        // line 5
        $context["value"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"))) : (null));
        // line 6
        $context["errors"] = (((isset($context["element"]) ? $context["element"] : null)) ? ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "getErrors", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle")), "method")) : (null));
        // line 7
        $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields"), "populateFieldType", array(0 => (isset($context["field"]) ? $context["field"] : null), 1 => (isset($context["element"]) ? $context["element"] : null)), "method");
        // line 8
        echo "
";
        // line 9
        if ((isset($context["fieldtype"]) ? $context["fieldtype"] : null)) {
            // line 10
            echo "\t";
            $context["input"] = $this->getAttribute((isset($context["fieldtype"]) ? $context["fieldtype"] : null), "getInputHtml", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), 1 => (isset($context["value"]) ? $context["value"] : null)), "method");
        } else {
            // line 12
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type")))) . "</p>");
        }
        // line 14
        echo "
";
        // line 15
        echo $context["forms"]->getfield(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name"))), "required" => (isset($context["required"]) ? $context["required"] : null), "translatable" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "translatable"), "instructions" => \Craft\Craft::t($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "instructions")), "id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "handle"), "errors" => (isset($context["errors"]) ? $context["errors"] : null)), (isset($context["input"]) ? $context["input"] : null));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 22,  53 => 15,  40 => 9,  37 => 8,  24 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  76 => 17,  66 => 26,  60 => 25,  57 => 24,  51 => 18,  46 => 12,  39 => 16,  35 => 7,  33 => 6,  23 => 3,  21 => 2,  19 => 1,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 111,  227 => 110,  224 => 109,  217 => 105,  211 => 104,  204 => 103,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 98,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 91,  166 => 90,  163 => 89,  160 => 88,  157 => 87,  154 => 86,  151 => 85,  149 => 84,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  130 => 75,  121 => 73,  117 => 72,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 63,  30 => 4,  28 => 4,  114 => 71,  108 => 69,  105 => 34,  98 => 30,  94 => 64,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 19,  50 => 14,  48 => 13,  45 => 12,  42 => 10,  31 => 5,  29 => 6,  27 => 3,  25 => 2,);
    }
}
