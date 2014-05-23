<?php

/* 500 */
class __TwigTemplate_abb6d50d68df2e4d7c87563a479ddfc43c7a94df17dc44e3fc83ca13da288c90 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/message");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Internal Server Error");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
\t<p>
\t\t";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
            echo "
\t\t";
        }
        // line 12
        echo "\t</p>
";
    }

    public function getTemplateName()
    {
        return "500";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  41 => 8,  33 => 5,  30 => 4,  25 => 2,  86 => 35,  82 => 33,  71 => 28,  67 => 27,  63 => 26,  59 => 24,  55 => 23,  52 => 22,  49 => 21,  47 => 10,  39 => 7,  31 => 9,  28 => 8,);
    }
}
