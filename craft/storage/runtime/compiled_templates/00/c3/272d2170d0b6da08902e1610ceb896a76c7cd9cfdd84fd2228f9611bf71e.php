<?php

/* _components/widgets/Feed/body */
class __TwigTemplate_00c3272d2170d0b6da08902e1610ceb896a76c7cd9cfdd84fd2228f9611bf71e extends Craft\BaseTemplate
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
        echo "<table class=\"data fullwidth\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["limit"]) ? $context["limit"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "\t\t<tr>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/Feed/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  38 => 8,  32 => 6,  26 => 3,  43 => 6,  92 => 62,  83 => 57,  75 => 49,  69 => 42,  65 => 40,  63 => 35,  47 => 11,  41 => 15,  36 => 8,  30 => 6,  78 => 23,  72 => 21,  59 => 33,  53 => 13,  44 => 10,  24 => 3,  22 => 2,  104 => 29,  100 => 27,  96 => 26,  90 => 61,  87 => 24,  84 => 19,  81 => 18,  76 => 17,  66 => 26,  60 => 25,  57 => 28,  51 => 25,  46 => 17,  39 => 5,  35 => 7,  33 => 4,  28 => 6,  23 => 3,  21 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 21,  61 => 20,  54 => 19,  50 => 12,  48 => 13,  45 => 17,  42 => 9,  31 => 5,  29 => 6,  27 => 3,  25 => 4,);
    }
}
