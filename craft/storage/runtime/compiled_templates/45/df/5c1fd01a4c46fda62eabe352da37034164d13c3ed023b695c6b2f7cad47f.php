<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_45df5c1fd01a4c46fda62eabe352da37034164d13c3ed023b695c6b2f7cad47f extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ((isset($context["on"]) ? $context["on"] : null)) : (false));
        // line 2
        echo "
<div class=\"lightswitch";
        // line 3
        if ((isset($context["on"]) ? $context["on"] : null)) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, (isset($context["toggle"]) ? $context["toggle"] : null), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 9
        if (array_key_exists("name", $context)) {
            // line 10
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo (((isset($context["on"]) ? $context["on"] : null)) ? ("1") : (""));
            echo "\">";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  70 => 32,  44 => 21,  40 => 18,  66 => 31,  62 => 22,  37 => 15,  33 => 13,  31 => 11,  28 => 8,  123 => 34,  120 => 33,  114 => 32,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 39,  81 => 24,  78 => 34,  71 => 27,  68 => 19,  64 => 18,  56 => 27,  48 => 24,  42 => 19,  38 => 17,  23 => 7,  24 => 3,  72 => 14,  55 => 8,  89 => 16,  75 => 15,  54 => 11,  51 => 25,  46 => 23,  26 => 7,  21 => 2,  19 => 1,  434 => 208,  429 => 205,  426 => 204,  423 => 203,  418 => 201,  414 => 200,  411 => 199,  408 => 198,  405 => 197,  397 => 195,  395 => 194,  389 => 190,  376 => 188,  374 => 187,  371 => 186,  368 => 185,  365 => 184,  362 => 183,  359 => 182,  356 => 181,  353 => 180,  351 => 179,  344 => 177,  336 => 172,  330 => 169,  327 => 168,  324 => 163,  321 => 161,  317 => 159,  312 => 157,  308 => 156,  303 => 155,  300 => 154,  297 => 152,  289 => 150,  286 => 145,  281 => 142,  277 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 135,  259 => 134,  255 => 132,  252 => 131,  246 => 128,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 36,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 33,  67 => 17,  61 => 29,  57 => 12,  52 => 21,  49 => 9,  43 => 10,  41 => 9,  39 => 16,  35 => 14,  32 => 12,  29 => 6,  27 => 10,  25 => 8,);
    }
}
