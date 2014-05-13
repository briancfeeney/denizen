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
        ob_start();
        // line 2
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty((isset($context["toggle"]) ? $context["toggle"] : null)))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty((isset($context["reverseToggle"]) ? $context["reverseToggle"] : null)))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        echo "
";
        // line 8
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (1));
        // line 9
        echo "
";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) < 3) || (twig_slice($this->env, (isset($context["name"]) ? $context["name"] : null), (-2)) != "[]")))) {
            // line 11
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 13
        echo "
<label>
\t<input type=\"checkbox\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"";
        // line 16
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 17
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 19
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) ? $context["checked"] : null))) {
            echo " checked";
        }
        // line 20
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 21
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        // line 22
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        // line 23
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, (isset($context["reverseToggle"]) ? $context["reverseToggle"] : null), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 24
        if (array_key_exists("label", $context)) {
            echo (isset($context["label"]) ? $context["label"] : null);
        }
        // line 25
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return array (  88 => 24,  70 => 21,  66 => 20,  62 => 19,  46 => 16,  26 => 8,  37 => 6,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  625 => 107,  613 => 103,  601 => 102,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  382 => 50,  371 => 49,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  290 => 30,  279 => 29,  256 => 24,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  147 => 165,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  107 => 110,  99 => 100,  95 => 97,  87 => 87,  79 => 23,  23 => 7,  92 => 25,  90 => 22,  51 => 17,  47 => 10,  39 => 13,  36 => 8,  33 => 11,  21 => 2,  72 => 21,  53 => 16,  44 => 10,  19 => 1,  75 => 22,  56 => 18,  49 => 15,  40 => 7,  38 => 19,  34 => 18,  24 => 3,  22 => 2,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 1,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 54,  125 => 53,  113 => 50,  109 => 49,  101 => 47,  86 => 24,  83 => 82,  78 => 19,  73 => 32,  69 => 42,  67 => 20,  65 => 14,  63 => 19,  59 => 11,  57 => 18,  55 => 47,  52 => 17,  43 => 15,  41 => 15,  35 => 22,  655 => 224,  652 => 223,  644 => 230,  636 => 108,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 95,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 70,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 54,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 45,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 34,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 25,  262 => 123,  258 => 122,  252 => 119,  244 => 20,  241 => 115,  239 => 114,  236 => 113,  233 => 19,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 170,  149 => 59,  143 => 160,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 51,  111 => 115,  106 => 68,  103 => 105,  97 => 65,  91 => 92,  30 => 6,  28 => 9,  114 => 71,  108 => 69,  105 => 48,  98 => 30,  94 => 64,  85 => 20,  80 => 23,  77 => 53,  74 => 22,  71 => 21,  68 => 15,  64 => 10,  61 => 25,  54 => 16,  50 => 12,  48 => 13,  45 => 14,  42 => 8,  31 => 10,  29 => 6,  27 => 6,  25 => 11,);
    }
}
