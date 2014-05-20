<?php

/* _includes/forms/field */
class __TwigTemplate_84b1af6246ef8a0a6492bae242a08857b9d4d020c5ed975743bf14c2cfa5ab8b extends Craft\BaseTemplate
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
        $context["id"] = ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : null)) : (null));
        // line 2
        $context["label"] = ((array_key_exists("label", $context)) ? ((isset($context["label"]) ? $context["label"] : null)) : (null));
        // line 3
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) ? $context["instructions"] : null)) : (null));
        // line 4
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : null)) : (null));
        // line 6
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && (isset($context["first"]) ? $context["first"] : null))) {
            echo " first";
        }
        echo "\"";
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 7
        if (((isset($context["label"]) ? $context["label"] : null) || (isset($context["instructions"]) ? $context["instructions"] : null))) {
            // line 8
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 9
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 10
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && (isset($context["required"]) ? $context["required"] : null))) {
                    echo " class=\"required\"";
                }
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t";
                // line 11
                echo (isset($context["label"]) ? $context["label"] : null);
                echo "
\t\t\t\t</label>
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                // line 15
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t";
        }
        // line 19
        echo "\t<div class=\"input";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 20
        echo (isset($context["input"]) ? $context["input"] : null);
        echo "
\t</div>
\t";
        // line 22
        $this->env->loadTemplate("_includes/forms/errorList")->display(array_merge($context, array("errors" => (isset($context["errors"]) ? $context["errors"] : null))));
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 20,  74 => 17,  132 => 34,  126 => 31,  114 => 28,  106 => 26,  89 => 22,  81 => 18,  77 => 16,  60 => 14,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  589 => 95,  555 => 89,  543 => 85,  532 => 84,  509 => 79,  497 => 75,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  188 => 9,  159 => 180,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  127 => 135,  123 => 130,  119 => 125,  111 => 115,  103 => 105,  99 => 100,  79 => 77,  51 => 42,  47 => 10,  39 => 27,  53 => 15,  46 => 12,  21 => 2,  42 => 8,  27 => 6,  23 => 3,  19 => 1,  80 => 20,  75 => 72,  49 => 6,  40 => 7,  38 => 19,  34 => 18,  31 => 7,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  189 => 69,  185 => 68,  177 => 66,  169 => 64,  165 => 1,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  105 => 48,  101 => 47,  91 => 92,  86 => 37,  83 => 82,  78 => 19,  73 => 32,  71 => 67,  69 => 29,  67 => 62,  65 => 14,  63 => 15,  61 => 25,  59 => 11,  57 => 23,  55 => 47,  52 => 7,  50 => 14,  45 => 9,  43 => 13,  35 => 9,  29 => 6,  25 => 4,  656 => 225,  653 => 224,  645 => 231,  637 => 229,  635 => 228,  632 => 227,  630 => 224,  627 => 223,  621 => 220,  618 => 219,  616 => 218,  607 => 217,  604 => 216,  601 => 102,  598 => 214,  596 => 213,  590 => 209,  587 => 208,  584 => 207,  581 => 206,  578 => 94,  572 => 199,  566 => 90,  563 => 195,  561 => 194,  558 => 193,  552 => 191,  550 => 190,  547 => 189,  542 => 186,  531 => 184,  527 => 183,  523 => 181,  520 => 80,  517 => 179,  508 => 265,  502 => 263,  500 => 262,  496 => 261,  490 => 258,  486 => 74,  482 => 255,  480 => 254,  475 => 251,  467 => 249,  465 => 248,  454 => 245,  446 => 243,  444 => 242,  438 => 241,  430 => 240,  424 => 236,  422 => 205,  417 => 59,  415 => 179,  409 => 175,  403 => 174,  395 => 172,  392 => 171,  389 => 170,  385 => 169,  375 => 161,  367 => 158,  362 => 156,  360 => 155,  358 => 154,  351 => 153,  346 => 152,  342 => 151,  331 => 147,  319 => 141,  311 => 139,  309 => 138,  303 => 137,  297 => 134,  293 => 132,  287 => 128,  281 => 127,  268 => 125,  263 => 124,  259 => 123,  253 => 120,  245 => 117,  242 => 116,  240 => 115,  237 => 114,  234 => 113,  231 => 112,  228 => 111,  225 => 110,  218 => 106,  212 => 105,  205 => 104,  202 => 103,  199 => 10,  196 => 101,  193 => 70,  190 => 99,  187 => 98,  184 => 97,  181 => 67,  179 => 95,  176 => 2,  173 => 65,  170 => 92,  167 => 91,  164 => 90,  161 => 62,  158 => 88,  155 => 175,  152 => 86,  150 => 85,  144 => 81,  141 => 57,  138 => 79,  135 => 35,  131 => 140,  122 => 30,  118 => 29,  112 => 71,  109 => 49,  107 => 110,  104 => 68,  95 => 97,  115 => 120,  110 => 27,  108 => 36,  102 => 25,  98 => 24,  94 => 23,  92 => 23,  87 => 21,  72 => 22,  68 => 15,  64 => 6,  62 => 18,  56 => 9,  41 => 10,  37 => 11,  33 => 8,  30 => 4,  28 => 4,  26 => 5,  24 => 3,);
    }
}
