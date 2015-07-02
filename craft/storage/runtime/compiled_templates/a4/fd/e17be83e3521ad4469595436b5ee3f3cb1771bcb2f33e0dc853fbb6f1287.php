<?php

/* _includes/forms/elementSelect */
class __TwigTemplate_a4fde17be83e3521ad4469595436b5ee3f3cb1771bcb2f33e0dc853fbb6f1287 extends Craft\BaseTemplate
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
        $context["elements"] = (((array_key_exists("elements", $context) && (isset($context["elements"]) ? $context["elements"] : null))) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && (isset($context["jsClass"]) ? $context["jsClass"] : null))) ? ((isset($context["jsClass"]) ? $context["jsClass"] : null)) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && (isset($context["sources"]) ? $context["sources"] : null))) ? ((isset($context["sources"]) ? $context["sources"] : null)) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 9
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && (isset($context["sourceElementId"]) ? $context["sourceElementId"] : null))) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : (null));
        // line 10
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && (isset($context["storageKey"]) ? $context["storageKey"] : null))) ? ((isset($context["storageKey"]) ? $context["storageKey"] : null)) : (null));
        // line 12
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 16
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
        // line 17
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["addButtonLabel"]) ? $context["addButtonLabel"] : null), "html", null, true);
        echo "</div>
</div>

";
        // line 22
        ob_start();
        // line 23
        echo "\tnew ";
        echo twig_escape_filter($this->env, (isset($context["jsClass"]) ? $context["jsClass"] : null), "html", null, true);
        echo "(
\t\t\"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 26
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 27
        echo $this->env->getExtension('craft')->jsonEncodeFilter((isset($context["sources"]) ? $context["sources"] : null));
        echo ",
\t\t";
        // line 28
        echo $this->env->getExtension('craft')->jsonEncodeFilter((isset($context["criteria"]) ? $context["criteria"] : null));
        echo ",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 30
        echo twig_escape_filter($this->env, (((isset($context["limit"]) ? $context["limit"] : null)) ? ((isset($context["limit"]) ? $context["limit"] : null)) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["storageKey"]) ? $context["storageKey"] : null), "js"), "html", null, true);
        echo "\"
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
        return "_includes/forms/elementSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  130 => 34,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  91 => 23,  89 => 22,  83 => 19,  79 => 17,  65 => 16,  62 => 15,  45 => 14,  39 => 12,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
