<?php

/* _includes/fields */
class __TwigTemplate_1c1911b6e085c461e15c44edd3ce73bd98360f850d361141e611d95c880e8c03 extends Craft\BaseTemplate
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
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 2
        if ((!array_key_exists("namespace", $context))) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) ? $context["namespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null)));
                    // line 11
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "getField", array(), "method"), "required" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required"), "element" => (isset($context["element"]) ? $context["element"] : null)));
                // line 11
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  27 => 3,  23 => 2,  19 => 1,  80 => 20,  75 => 19,  49 => 6,  40 => 20,  38 => 19,  34 => 18,  31 => 17,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  189 => 69,  185 => 68,  177 => 66,  169 => 64,  165 => 63,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  105 => 48,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 11,  65 => 27,  63 => 26,  61 => 25,  59 => 5,  57 => 23,  55 => 22,  52 => 7,  50 => 18,  45 => 11,  43 => 21,  35 => 8,  29 => 6,  25 => 4,  656 => 225,  653 => 224,  645 => 231,  637 => 229,  635 => 228,  632 => 227,  630 => 224,  627 => 223,  621 => 220,  618 => 219,  616 => 218,  607 => 217,  604 => 216,  601 => 215,  598 => 214,  596 => 213,  590 => 209,  587 => 208,  584 => 207,  581 => 206,  578 => 205,  572 => 199,  566 => 196,  563 => 195,  561 => 194,  558 => 193,  552 => 191,  550 => 190,  547 => 189,  542 => 186,  531 => 184,  527 => 183,  523 => 181,  520 => 180,  517 => 179,  508 => 265,  502 => 263,  500 => 262,  496 => 261,  490 => 258,  486 => 257,  482 => 255,  480 => 254,  475 => 251,  467 => 249,  465 => 248,  454 => 245,  446 => 243,  444 => 242,  438 => 241,  430 => 240,  424 => 236,  422 => 205,  417 => 202,  415 => 179,  409 => 175,  403 => 174,  395 => 172,  392 => 171,  389 => 170,  385 => 169,  375 => 161,  367 => 158,  362 => 156,  360 => 155,  358 => 154,  351 => 153,  346 => 152,  342 => 151,  331 => 147,  319 => 141,  311 => 139,  309 => 138,  303 => 137,  297 => 134,  293 => 132,  287 => 128,  281 => 127,  268 => 125,  263 => 124,  259 => 123,  253 => 120,  245 => 117,  242 => 116,  240 => 115,  237 => 114,  234 => 113,  231 => 112,  228 => 111,  225 => 110,  218 => 106,  212 => 105,  205 => 104,  202 => 103,  199 => 102,  196 => 101,  193 => 70,  190 => 99,  187 => 98,  184 => 97,  181 => 67,  179 => 95,  176 => 94,  173 => 65,  170 => 92,  167 => 91,  164 => 90,  161 => 62,  158 => 88,  155 => 87,  152 => 86,  150 => 85,  144 => 81,  141 => 57,  138 => 79,  135 => 78,  131 => 76,  122 => 74,  118 => 73,  112 => 71,  109 => 49,  107 => 69,  104 => 68,  95 => 65,  115 => 72,  110 => 40,  108 => 36,  102 => 33,  98 => 66,  94 => 30,  92 => 64,  87 => 24,  72 => 22,  68 => 21,  64 => 6,  62 => 18,  56 => 9,  41 => 10,  37 => 5,  33 => 8,  30 => 4,  28 => 3,  26 => 5,  24 => 3,);
    }
}
