<?php

/* _includes/forms/checkbox */
class __TwigTemplate_2893c48dea13c90097038972de096868bef1d4233daad7ff1eb06c979cd70d7e extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : null)))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (1));
        // line 9
        echo "<label>
\t";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), (-2)) != "[]")))) {
            // line 11
            echo "\t\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
\t";
        }
        // line 14
        echo "<input type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"";
        // line 15
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 16
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\"";
        // line 17
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 18
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo " checked";
        }
        // line 19
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 20
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 21
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 22
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 23
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : null);
        }
        // line 24
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  58 => 19,  38 => 15,  34 => 14,  26 => 10,  49 => 15,  92 => 62,  83 => 57,  75 => 49,  69 => 42,  65 => 40,  63 => 35,  47 => 23,  41 => 15,  36 => 8,  78 => 23,  72 => 22,  59 => 33,  44 => 16,  22 => 2,  55 => 22,  53 => 16,  40 => 9,  37 => 8,  24 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 61,  87 => 24,  84 => 24,  81 => 18,  76 => 17,  66 => 21,  60 => 25,  57 => 28,  51 => 25,  46 => 12,  39 => 13,  35 => 7,  33 => 12,  23 => 9,  21 => 7,  19 => 1,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 111,  227 => 110,  224 => 109,  217 => 105,  211 => 104,  204 => 103,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 98,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 91,  166 => 90,  163 => 89,  160 => 88,  157 => 87,  154 => 86,  151 => 85,  149 => 84,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  130 => 75,  121 => 73,  117 => 72,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 63,  30 => 6,  28 => 11,  114 => 71,  108 => 69,  105 => 34,  98 => 30,  94 => 64,  85 => 27,  80 => 23,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 21,  61 => 20,  54 => 18,  50 => 12,  48 => 17,  45 => 14,  42 => 9,  31 => 5,  29 => 6,  27 => 5,  25 => 11,);
    }
}
