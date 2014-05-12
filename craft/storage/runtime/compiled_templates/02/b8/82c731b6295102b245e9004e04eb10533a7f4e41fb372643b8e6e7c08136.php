<?php

/* _components/widgets/GetHelp/response */
class __TwigTemplate_02b882c731b6295102b245e9004e04eb10533a7f4e41fb372643b8e6e7c08136 extends Craft\BaseTemplate
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
        echo "<script type=\"text/javascript\">
\tvar widget = parent.Craft.widgets[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["widgetId"]) ? $context["widgetId"] : null), "html", null, true);
        echo "];
\tvar response = {
\t\tsuccess: ";
        // line 4
        echo ((((isset($context["success"]) ? $context["success"] : null) == true)) ? (1) : (0));
        echo ",
\t\terrors: ";
        // line 5
        echo (isset($context["errors"]) ? $context["errors"] : null);
        echo "
\t};
\twidget.parseResponse(response);
</script>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/GetHelp/response";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
