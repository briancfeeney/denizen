<?php

/* _includes/tabs */
class __TwigTemplate_77380180099a8a9b8363e3951ac5060381accea4a5732f7ff739d420e3e06605 extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if ((isset($context["tab"]) ? $context["tab"] : null)) {
                // line 7
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) || (array_key_exists("selectedTab", $context) && ((isset($context["selectedTab"]) ? $context["selectedTab"] : null) == (isset($context["tabId"]) ? $context["tabId"] : null))));
                // line 9
                if (((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null) && ((isset($context["title"]) ? $context["title"] : null) != $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["title"] = (((isset($context["title"]) ? $context["title"] : null) . " - ") . $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, (isset($context["tabId"]) ? $context["tabId"] : null), "html", null, true);
                echo "\" class=\"tab";
                if ((isset($context["tabIsSelected"]) ? $context["tabIsSelected"] : null)) {
                    echo " sel";
                }
                if ($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class"), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  75 => 15,  54 => 11,  51 => 10,  46 => 7,  26 => 5,  21 => 2,  19 => 1,  434 => 208,  429 => 205,  426 => 204,  423 => 203,  418 => 201,  414 => 200,  411 => 199,  408 => 198,  405 => 197,  397 => 195,  395 => 194,  389 => 190,  376 => 188,  374 => 187,  371 => 186,  368 => 185,  365 => 184,  362 => 183,  359 => 182,  356 => 181,  353 => 180,  351 => 179,  344 => 177,  336 => 172,  330 => 169,  327 => 168,  324 => 163,  321 => 161,  317 => 159,  312 => 157,  308 => 156,  303 => 155,  300 => 154,  297 => 152,  289 => 150,  286 => 145,  281 => 142,  277 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 135,  259 => 134,  255 => 132,  252 => 131,  246 => 128,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 17,  61 => 16,  57 => 13,  52 => 14,  49 => 9,  43 => 6,  41 => 213,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
