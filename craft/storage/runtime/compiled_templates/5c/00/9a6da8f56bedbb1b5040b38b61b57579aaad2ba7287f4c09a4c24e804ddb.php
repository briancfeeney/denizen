<?php

/* _layouts/base */
class __TwigTemplate_5c009a6da8f56bedbb1b5040b38b61b57579aaad2ba7287f4c09a4c24e804ddb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body class=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 21
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 9
        echo twig_escape_filter($this->env, strip_tags((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        if (((isset($context["title"]) ? $context["title"] : null) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "siteName"))) {
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "siteName"), "html", null, true);
        echo "</title>
\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  64 => 10,  56 => 9,  40 => 20,  38 => 19,  34 => 18,  31 => 17,  24 => 3,  22 => 1,  193 => 70,  181 => 67,  173 => 65,  153 => 60,  133 => 55,  129 => 54,  113 => 50,  105 => 48,  101 => 47,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  65 => 27,  63 => 26,  59 => 24,  55 => 22,  50 => 18,  45 => 12,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  384 => 168,  374 => 160,  366 => 157,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  310 => 138,  308 => 137,  296 => 133,  286 => 127,  280 => 126,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  239 => 114,  236 => 113,  233 => 112,  230 => 80,  227 => 110,  217 => 105,  211 => 104,  201 => 102,  198 => 101,  189 => 69,  186 => 97,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 85,  149 => 59,  143 => 80,  140 => 79,  137 => 56,  130 => 75,  121 => 52,  117 => 51,  114 => 71,  111 => 70,  108 => 69,  106 => 68,  103 => 67,  91 => 40,  30 => 4,  28 => 3,  427 => 196,  422 => 193,  419 => 192,  416 => 201,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 169,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 155,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 140,  315 => 154,  311 => 152,  306 => 150,  302 => 136,  297 => 148,  295 => 147,  292 => 131,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 124,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 115,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 79,  221 => 115,  219 => 114,  215 => 112,  213 => 77,  209 => 76,  207 => 98,  204 => 75,  200 => 74,  197 => 89,  195 => 100,  192 => 99,  188 => 85,  185 => 68,  183 => 96,  179 => 76,  177 => 66,  174 => 68,  170 => 66,  167 => 60,  165 => 63,  161 => 62,  159 => 56,  156 => 55,  152 => 53,  145 => 58,  141 => 57,  134 => 77,  131 => 43,  127 => 42,  125 => 53,  119 => 40,  116 => 39,  112 => 38,  109 => 49,  107 => 36,  104 => 35,  97 => 65,  94 => 64,  92 => 29,  85 => 24,  82 => 23,  80 => 20,  74 => 18,  67 => 28,  61 => 25,  57 => 23,  52 => 7,  49 => 6,  43 => 21,  41 => 10,  39 => 10,  35 => 8,  32 => 6,  29 => 6,  27 => 4,  25 => 4,);
    }
}
