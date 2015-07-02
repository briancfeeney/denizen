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
            '__internal_96bf4047f2d207d912f6a4e1a6f6ee19e456bab58b035d58633b0ca5f7750d6e' => array($this, 'block___internal_96bf4047f2d207d912f6a4e1a6f6ee19e456bab58b035d58633b0ca5f7750d6e'),
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

\t";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((string) $this->renderBlock("__internal_96bf4047f2d207d912f6a4e1a6f6ee19e456bab58b035d58633b0ca5f7750d6e", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_96bf4047f2d207d912f6a4e1a6f6ee19e456bab58b035d58633b0ca5f7750d6e($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
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
        return array (  56 => 8,  48 => 10,  45 => 9,  42 => 8,  40 => 7,  34 => 5,  31 => 4,  26 => 2,);
    }
}
