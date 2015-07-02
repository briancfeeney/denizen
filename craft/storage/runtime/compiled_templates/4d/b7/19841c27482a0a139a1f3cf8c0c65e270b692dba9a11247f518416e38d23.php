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
            $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
            // line 6
            $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
            // line 7
            echo "<div>
\t\t";
            // line 8
            $this->env->loadTemplate("_includes/forms/radio")->display(array("label" => (isset($context["optionLabel"]) ? $context["optionLabel"] : null), "id" => (((array_key_exists("id", $context) && $this->getAttribute($context["loop"], "first", array()))) ? ((isset($context["id"]) ? $context["id"] : null)) : (null)), "name" => ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : null)) : (null)), "value" => (isset($context["optionValue"]) ? $context["optionValue"] : null), "checked" => ((isset($context["optionValue"]) ? $context["optionValue"] : null) == (isset($context["value"]) ? $context["value"] : null)), "autofocus" => (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && $this->getAttribute($context["loop"], "first", array())) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method")))));
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
        return array (  49 => 16,  47 => 8,  44 => 7,  42 => 6,  40 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }
}
