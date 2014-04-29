<?php

/* _components/widgets/RecentEntries/body */
class __TwigTemplate_c81dbbd618ca3f34f1d9a09803cf255fb52a0928a9b2f3221272aeb0fba8a72a extends Craft\BaseTemplate
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
        echo "<div class=\"recententries-container\">
\t";
        // line 2
        if (twig_length_filter($this->env, (isset($context["entries"]) ? $context["entries"] : null))) {
            // line 3
            echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 5
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<span class=\"light\">
\t\t\t\t\t\t\t";
                // line 9
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate")) {
                    // line 10
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate"), "localeDate", array(), "method"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 13
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "author")) ? (\Craft\Craft::t("by {author}", array("author" => $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "author"), "username")))) : ("")), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 15
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</table>
\t";
        } else {
            // line 21
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No entries exist yet."), "html", null, true);
            echo "</p>
\t";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/RecentEntries/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 21,  59 => 15,  44 => 10,  22 => 2,  55 => 22,  53 => 13,  40 => 9,  37 => 8,  24 => 3,  104 => 29,  100 => 27,  96 => 26,  90 => 25,  87 => 24,  84 => 19,  81 => 18,  76 => 17,  66 => 26,  60 => 25,  57 => 24,  51 => 18,  46 => 12,  39 => 16,  35 => 7,  33 => 6,  23 => 3,  21 => 2,  19 => 1,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 111,  227 => 110,  224 => 109,  217 => 105,  211 => 104,  204 => 103,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 98,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 91,  166 => 90,  163 => 89,  160 => 88,  157 => 87,  154 => 86,  151 => 85,  149 => 84,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  130 => 75,  121 => 73,  117 => 72,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 63,  30 => 4,  28 => 4,  114 => 71,  108 => 69,  105 => 34,  98 => 30,  94 => 64,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 19,  64 => 21,  61 => 20,  54 => 19,  50 => 12,  48 => 13,  45 => 12,  42 => 9,  31 => 5,  29 => 6,  27 => 4,  25 => 2,);
    }
}
