<?php

/* _includes/forms/file */
class __TwigTemplate_1c9664ae2ae30329c668fdeff8cdf4110d647bbc45fd92c186dc2737c86caf12 extends Craft\BaseTemplate
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
        echo "<input type=\"file\"";
        // line 2
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 3
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        // line 4
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 5
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 6
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  66 => 20,  62 => 19,  56 => 18,  52 => 17,  46 => 16,  26 => 8,  49 => 15,  37 => 6,  28 => 9,  40 => 7,  86 => 24,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  165 => 1,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 24,  79 => 23,  67 => 20,  55 => 47,  43 => 6,  23 => 7,  92 => 25,  90 => 22,  83 => 82,  75 => 22,  69 => 42,  65 => 14,  63 => 19,  57 => 18,  51 => 17,  47 => 10,  41 => 15,  39 => 5,  36 => 8,  33 => 4,  30 => 6,  21 => 2,  78 => 19,  72 => 21,  59 => 11,  53 => 16,  44 => 10,  35 => 22,  24 => 3,  22 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 20,  80 => 23,  77 => 53,  74 => 22,  71 => 21,  68 => 15,  64 => 21,  61 => 20,  54 => 16,  50 => 12,  48 => 13,  45 => 14,  42 => 8,  31 => 10,  29 => 6,  27 => 3,  25 => 11,);
    }
}
