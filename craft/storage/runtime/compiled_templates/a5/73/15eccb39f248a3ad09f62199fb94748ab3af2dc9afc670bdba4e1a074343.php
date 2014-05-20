<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_a57315eccb39f248a3ad09f62199fb94748ab3af2dc9afc670bdba4e1a074343 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            $context["blockId"] = $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id");
            // line 8
            echo "\t\t\t";
            if ((!(isset($context["blockId"]) ? $context["blockId"] : null))) {
                // line 9
                echo "\t\t\t\t";
                $context["totalNewBlocks"] = ((isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null) + 1);
                // line 10
                echo "\t\t\t\t";
                $context["blockId"] = ("new" . (isset($context["totalNewBlocks"]) ? $context["totalNewBlocks"] : null));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "collapsed")) {
                echo " data-collapsed=\"1\"";
            }
            echo ">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "][type]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : null), "html", null, true);
            echo "][enabled]\" value=\"";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                echo "1";
            }
            echo "\">
\t\t\t\t<div class=\"actions\">
\t\t\t\t\t<div class=\"status off\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
            echo "\"></div>
\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 23
            if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled"))) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"disabled\" data-action=\"disable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 24
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "enabled")) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"enabled\" data-action=\"enable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")))), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
            // line 34
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 40
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((((isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["blockId"]) ? $context["blockId"] : null)) . "][fields]"), "element" => (isset($context["block"]) ? $context["block"] : null), "fields" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"))));
            // line 45
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
\t<div class=\"buttons\">
\t\t<div class=\"btngroup\">
\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 52
            echo "\t\t\t\t<div class=\"btn";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " add icon";
            }
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
            echo "</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>

\t\t<div class=\"btn add icon menubtn first hidden\">";
        // line 56
        echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
        echo "</div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockTypes"]) ? $context["blockTypes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 60
            echo "\t\t\t\t\t<li><a data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute((isset($context["blockType"]) ? $context["blockType"] : null), "name")), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 59,  235 => 56,  208 => 52,  191 => 51,  186 => 48,  168 => 40,  162 => 37,  156 => 34,  140 => 29,  136 => 28,  88 => 15,  32 => 6,  90 => 22,  85 => 20,  74 => 17,  132 => 34,  126 => 31,  114 => 28,  106 => 26,  89 => 22,  81 => 18,  77 => 16,  60 => 14,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  589 => 95,  555 => 89,  543 => 85,  532 => 84,  509 => 79,  497 => 75,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 62,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  188 => 9,  159 => 180,  151 => 31,  147 => 165,  143 => 160,  139 => 150,  127 => 135,  123 => 130,  119 => 125,  111 => 115,  103 => 18,  99 => 17,  79 => 77,  51 => 42,  47 => 10,  39 => 27,  53 => 8,  46 => 12,  21 => 2,  42 => 8,  27 => 6,  23 => 3,  19 => 1,  80 => 14,  75 => 72,  49 => 6,  40 => 7,  38 => 19,  34 => 18,  31 => 7,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  189 => 69,  185 => 68,  177 => 66,  169 => 64,  165 => 1,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  137 => 56,  133 => 55,  129 => 54,  125 => 24,  121 => 52,  117 => 23,  113 => 22,  105 => 48,  101 => 47,  91 => 92,  86 => 37,  83 => 82,  78 => 19,  73 => 32,  71 => 67,  69 => 29,  67 => 62,  65 => 12,  63 => 15,  61 => 25,  59 => 10,  57 => 23,  55 => 47,  52 => 7,  50 => 7,  45 => 9,  43 => 13,  35 => 9,  29 => 6,  25 => 3,  656 => 225,  653 => 224,  645 => 231,  637 => 229,  635 => 228,  632 => 227,  630 => 224,  627 => 223,  621 => 220,  618 => 219,  616 => 218,  607 => 217,  604 => 216,  601 => 102,  598 => 214,  596 => 213,  590 => 209,  587 => 208,  584 => 207,  581 => 206,  578 => 94,  572 => 199,  566 => 90,  563 => 195,  561 => 194,  558 => 193,  552 => 191,  550 => 190,  547 => 189,  542 => 186,  531 => 184,  527 => 183,  523 => 181,  520 => 80,  517 => 179,  508 => 265,  502 => 263,  500 => 262,  496 => 261,  490 => 258,  486 => 74,  482 => 255,  480 => 254,  475 => 251,  467 => 249,  465 => 248,  454 => 245,  446 => 243,  444 => 242,  438 => 241,  430 => 240,  424 => 236,  422 => 205,  417 => 59,  415 => 179,  409 => 175,  403 => 174,  395 => 172,  392 => 171,  389 => 170,  385 => 169,  375 => 161,  367 => 158,  362 => 156,  360 => 155,  358 => 154,  351 => 153,  346 => 152,  342 => 151,  331 => 147,  319 => 141,  311 => 139,  309 => 138,  303 => 137,  297 => 134,  293 => 132,  287 => 128,  281 => 127,  268 => 125,  263 => 124,  259 => 123,  253 => 120,  245 => 60,  242 => 116,  240 => 115,  237 => 114,  234 => 113,  231 => 54,  228 => 111,  225 => 110,  218 => 106,  212 => 105,  205 => 104,  202 => 103,  199 => 10,  196 => 101,  193 => 70,  190 => 99,  187 => 98,  184 => 97,  181 => 67,  179 => 95,  176 => 2,  173 => 65,  170 => 45,  167 => 91,  164 => 90,  161 => 62,  158 => 88,  155 => 175,  152 => 86,  150 => 85,  144 => 81,  141 => 57,  138 => 79,  135 => 35,  131 => 140,  122 => 30,  118 => 29,  112 => 71,  109 => 21,  107 => 110,  104 => 68,  95 => 97,  115 => 120,  110 => 27,  108 => 36,  102 => 25,  98 => 24,  94 => 23,  92 => 23,  87 => 21,  72 => 22,  68 => 13,  64 => 6,  62 => 11,  56 => 9,  41 => 10,  37 => 6,  33 => 8,  30 => 5,  28 => 4,  26 => 5,  24 => 3,);
    }
}
