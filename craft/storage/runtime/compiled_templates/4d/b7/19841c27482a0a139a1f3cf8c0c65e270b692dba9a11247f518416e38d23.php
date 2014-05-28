<?php

/* _includes/forms/radioGroup */
class __TwigTemplate_4db719841c27482a0a139a1f3cf8c0c65e270b692dba9a11247f518416e38d23 extends Craft\BaseTemplate
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
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 2
        $context["value"] = ((array_key_exists("value", $context)) ? ((isset($context["value"]) ? $context["value"] : null)) : (null));
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 5
            $context["optionLabel"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "label")) : ((isset($context["option"]) ? $context["option"] : null)));
            // line 6
            $context["optionValue"] = (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value", array(), "any", true, true)) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "value")) : ((isset($context["key"]) ? $context["key"] : null)));
            // line 7
            echo "<div>
\t\t";
            // line 8
            $this->env->loadTemplate("_includes/forms/radio")->display(array("label" => (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "id" => (((array_key_exists("id", $context) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) ? ((isset($context["id"]) ? $context["id"] : null)) : (null)), "name" => ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : null)) : (null)), "value" => (isset($context["optionValue"]) ? $context["optionValue"] : null), "checked" => ((isset($context["optionValue"]) ? $context["optionValue"] : null) == (isset($context["value"]) ? $context["value"] : null)), "autofocus" => (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))));
            // line 16
            echo "\t</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/forms/radioGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  150 => 47,  144 => 45,  112 => 34,  89 => 22,  68 => 19,  62 => 17,  43 => 10,  23 => 4,  61 => 32,  59 => 31,  39 => 21,  36 => 14,  156 => 22,  147 => 46,  142 => 44,  126 => 3,  121 => 105,  119 => 36,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 20,  66 => 62,  64 => 40,  56 => 54,  53 => 15,  46 => 43,  44 => 7,  29 => 5,  27 => 28,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 83,  87 => 21,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 35,  60 => 56,  58 => 16,  54 => 29,  51 => 28,  49 => 16,  47 => 8,  45 => 20,  42 => 6,  40 => 5,  38 => 41,  34 => 8,  32 => 12,  30 => 7,  28 => 7,  26 => 4,  24 => 3,);
    }
}
