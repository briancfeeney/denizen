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
        return array (  75 => 19,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  34 => 18,  24 => 3,  22 => 1,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 63,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 54,  125 => 53,  113 => 50,  109 => 49,  101 => 47,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  59 => 24,  57 => 23,  55 => 22,  52 => 7,  43 => 21,  41 => 10,  35 => 8,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 85,  149 => 59,  143 => 80,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 51,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 40,  30 => 4,  28 => 3,  114 => 71,  108 => 69,  105 => 48,  98 => 30,  94 => 64,  85 => 27,  80 => 20,  77 => 25,  74 => 24,  71 => 30,  68 => 22,  64 => 10,  61 => 25,  54 => 16,  50 => 18,  48 => 13,  45 => 12,  42 => 11,  31 => 17,  29 => 6,  27 => 3,  25 => 4,);
    }
}
