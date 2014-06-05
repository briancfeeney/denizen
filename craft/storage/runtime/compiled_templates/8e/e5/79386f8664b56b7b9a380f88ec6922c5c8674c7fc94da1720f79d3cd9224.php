<?php

/* _elements/sources */
class __TwigTemplate_8ee579386f8664b56b7b9a380f88ec6922c5c8674c7fc94da1720f79d3cd9224 extends Craft\BaseTemplate
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
        $context["sourceLevel"] = ((array_key_exists("sourceLevel", $context)) ? ((isset($context["sourceLevel"]) ? $context["sourceLevel"] : null)) : (1));
        // line 3
        echo "<ul data-level=\"";
        echo twig_escape_filter($this->env, (isset($context["sourceLevel"]) ? $context["sourceLevel"] : null), "html", null, true);
        echo "\">
\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 5
            echo "\t\t";
            if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading", array(), "any", true, true)) {
                // line 6
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 8
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
                // line 10
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 11
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId", array(), "any", true, true) && $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId"))) {
                    echo " data-has-structure=\"1\" data-structure-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "structureId"), "html", null, true);
                    echo "\"";
                }
                // line 12
                if ($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data", array(), "any", true, true)) {
                    // line 13
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, (isset($context["dataKey"]) ? $context["dataKey"] : null), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, (isset($context["dataVal"]) ? $context["dataVal"] : null), "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 15
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 16
                if (($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"))))) {
                    // line 17
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 18
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute((isset($context["source"]) ? $context["source"] : null), "nested"), "sourceLevel" => ((isset($context["sourceLevel"]) ? $context["sourceLevel"] : null) + 1))));
                    // line 22
                    echo "\t\t\t\t";
                }
                // line 23
                echo "\t\t\t</li>
\t\t";
            }
            // line 25
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  94 => 18,  91 => 17,  89 => 16,  70 => 13,  68 => 12,  52 => 8,  151 => 55,  148 => 54,  146 => 52,  142 => 50,  136 => 46,  121 => 44,  117 => 26,  111 => 40,  108 => 39,  105 => 38,  102 => 37,  99 => 23,  96 => 22,  93 => 34,  90 => 33,  81 => 30,  62 => 11,  45 => 18,  43 => 5,  36 => 12,  21 => 3,  19 => 1,  88 => 34,  84 => 15,  80 => 32,  75 => 26,  66 => 18,  64 => 17,  61 => 16,  58 => 10,  55 => 9,  50 => 40,  44 => 25,  41 => 24,  34 => 11,  32 => 10,  30 => 9,  28 => 4,  26 => 4,  107 => 34,  104 => 33,  100 => 31,  92 => 35,  87 => 32,  76 => 24,  72 => 30,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 22,  48 => 19,  46 => 6,  39 => 23,  37 => 11,  33 => 9,  31 => 7,  29 => 6,  27 => 8,  25 => 2,);
    }
}
