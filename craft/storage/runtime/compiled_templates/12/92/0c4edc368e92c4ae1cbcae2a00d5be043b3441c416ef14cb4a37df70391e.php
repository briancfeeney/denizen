<?php

/* _components/fieldtypes/Assets/input */
class __TwigTemplate_12920c4edc368e92c4ae1cbcae2a00d5be043b3441c416ef14cb4a37df70391e extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) ? $context["jsClass"] : null))) ? ((isset($context["jsClass"]) ? $context["jsClass"] : null)) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) ? $context["sources"] : null))) ? ((isset($context["sources"]) ? $context["sources"] : null)) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 9
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) ? $context["storageKey"] : null))) ? ((isset($context["storageKey"]) ? $context["storageKey"] : null)) : (null));
        // line 11
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 15
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["addButtonLabel"]) ? $context["addButtonLabel"] : null), "html", null, true);
        echo "</div>
</div>

";
        // line 21
        ob_start();
        // line 22
        echo "\tnew ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) ? $context["jsClass"] : null), "html", null, true);
        echo "(
\t\t\"";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 26
        echo twig_jsonencode_filter((isset($context["sources"]) ? $context["sources"] : null));
        echo ",
\t\t";
        // line 27
        echo twig_jsonencode_filter((isset($context["criteria"]) ? $context["criteria"] : null));
        echo ",
\t\t";
        // line 28
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["limit"]) ? $context["limit"] : null)) ? ((isset($context["limit"]) ? $context["limit"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) ? $context["storageKey"] : null), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fieldId"]) ? $context["fieldId"] : null), "html", null, true);
        echo "
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs((isset($context["js"]) ? $context["js"] : null));
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 34,  122 => 30,  118 => 29,  110 => 27,  102 => 25,  98 => 24,  81 => 18,  77 => 16,  60 => 14,  53 => 15,  37 => 11,  90 => 22,  68 => 15,  42 => 10,  72 => 14,  89 => 22,  54 => 11,  46 => 12,  26 => 12,  21 => 2,  126 => 31,  100 => 29,  96 => 27,  36 => 7,  33 => 8,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  625 => 107,  613 => 103,  601 => 102,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  371 => 49,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  290 => 30,  279 => 29,  256 => 24,  210 => 14,  199 => 10,  176 => 2,  155 => 175,  147 => 165,  139 => 150,  135 => 35,  123 => 130,  115 => 120,  99 => 100,  95 => 97,  87 => 21,  79 => 23,  51 => 17,  47 => 10,  23 => 2,  19 => 1,  75 => 22,  64 => 6,  56 => 9,  40 => 9,  38 => 19,  34 => 18,  31 => 7,  24 => 3,  22 => 1,  193 => 70,  181 => 67,  173 => 65,  153 => 60,  133 => 55,  129 => 54,  113 => 31,  105 => 48,  101 => 47,  86 => 24,  83 => 82,  78 => 19,  73 => 32,  71 => 21,  69 => 29,  65 => 14,  63 => 15,  59 => 5,  55 => 22,  50 => 14,  45 => 11,  655 => 224,  652 => 223,  644 => 230,  636 => 108,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 95,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 70,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  414 => 178,  408 => 174,  402 => 173,  394 => 54,  391 => 170,  384 => 168,  374 => 160,  366 => 157,  359 => 45,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  310 => 138,  308 => 137,  296 => 133,  286 => 127,  280 => 126,  262 => 123,  258 => 122,  252 => 119,  244 => 20,  239 => 114,  236 => 113,  233 => 19,  230 => 80,  227 => 110,  217 => 105,  211 => 104,  201 => 102,  198 => 101,  189 => 69,  186 => 97,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 170,  149 => 59,  143 => 160,  140 => 79,  137 => 56,  130 => 37,  121 => 52,  117 => 32,  114 => 28,  111 => 115,  108 => 69,  106 => 26,  103 => 105,  91 => 25,  30 => 4,  28 => 4,  427 => 196,  422 => 193,  419 => 192,  416 => 201,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 169,  382 => 50,  369 => 176,  367 => 175,  364 => 174,  361 => 155,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 140,  315 => 154,  311 => 152,  306 => 150,  302 => 34,  297 => 148,  295 => 147,  292 => 131,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 25,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 115,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 79,  221 => 15,  219 => 114,  215 => 112,  213 => 77,  209 => 76,  207 => 98,  204 => 75,  200 => 74,  197 => 89,  195 => 100,  192 => 99,  188 => 9,  185 => 68,  183 => 96,  179 => 76,  177 => 66,  174 => 68,  170 => 66,  167 => 60,  165 => 1,  161 => 62,  159 => 180,  156 => 55,  152 => 53,  145 => 58,  141 => 57,  134 => 77,  131 => 140,  127 => 135,  125 => 53,  119 => 125,  116 => 39,  112 => 38,  109 => 49,  107 => 110,  104 => 30,  97 => 65,  94 => 23,  92 => 23,  85 => 20,  82 => 23,  80 => 20,  74 => 17,  67 => 11,  61 => 17,  57 => 18,  52 => 7,  49 => 9,  43 => 13,  41 => 10,  39 => 15,  35 => 9,  32 => 6,  29 => 6,  27 => 5,  25 => 4,);
    }
}
