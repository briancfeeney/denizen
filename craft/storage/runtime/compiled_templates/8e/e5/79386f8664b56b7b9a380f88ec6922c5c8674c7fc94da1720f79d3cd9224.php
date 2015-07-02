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
        echo "<ul>
\t";
        // line 2
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
            // line 3
            echo "\t\t";
            if ($this->getAttribute($context["source"], "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "heading", array()), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute($context["source"], "hasThumbs", array(), "any", true, true) && $this->getAttribute($context["source"], "hasThumbs", array()))) {
                    echo " data-has-thumbs";
                }
                // line 9
                if (($this->getAttribute($context["source"], "structureId", array(), "any", true, true) && $this->getAttribute($context["source"], "structureId", array()))) {
                    echo " data-has-structure";
                }
                // line 10
                if ($this->getAttribute($context["source"], "data", array(), "any", true, true)) {
                    // line 11
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["source"], "data", array()));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, $context["dataKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataVal"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 13
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "label", array()), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 14
                if (($this->getAttribute($context["source"], "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($context["source"], "nested", array()))))) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 16
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute($context["source"], "nested", array()))));
                    // line 19
                    echo "\t\t\t\t";
                }
                // line 20
                echo "\t\t\t</li>
\t\t";
            }
            // line 22
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
        // line 23
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
        return array (  111 => 23,  97 => 22,  93 => 20,  90 => 19,  88 => 16,  85 => 15,  83 => 14,  78 => 13,  64 => 11,  62 => 10,  58 => 9,  54 => 8,  51 => 7,  48 => 6,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
