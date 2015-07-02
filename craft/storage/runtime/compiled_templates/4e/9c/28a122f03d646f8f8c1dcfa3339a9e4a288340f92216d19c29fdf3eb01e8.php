<?php

/* _components/fieldtypes/PositionSelect/settings */
class __TwigTemplate_4e9c28a122f03d646f8f8c1dcfa3339a9e4a288340f92216d19c29fdf3eb01e8 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "\t<table class=\"data\">
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allOptions"]) ? $context["allOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 6
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 8
            echo $context["forms"]->getlightswitch(array("on" => twig_in_filter($context["option"], $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "options", array())), "small" => true, "name" => (("options[" . $context["option"]) . "]")));
            // line 12
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<span data-icon=\"pos";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->replaceFilter($context["option"], "-", ""), "html", null, true);
            echo "\"></span>
\t\t\t\t</td>
\t\t\t\t<td class=\"code\">
\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t</table>
";
        $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "
";
        // line 25
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Options"), "instructions" => \Craft\Craft::t("Choose which position options should be available to your field.")), (isset($context["input"]) ? $context["input"] : null));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/PositionSelect/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  67 => 25,  64 => 24,  60 => 22,  50 => 18,  44 => 15,  39 => 12,  37 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
