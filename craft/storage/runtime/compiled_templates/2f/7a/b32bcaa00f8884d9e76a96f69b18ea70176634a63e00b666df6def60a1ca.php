<?php

/* clients/{{object.slug}} */
class __TwigTemplate_2f7ab32bcaa00f8884d9e76a96f69b18ea70176634a63e00b666df6def60a1ca extends Craft\BaseTemplate
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
        echo "clients/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "clients/{{object.slug}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
