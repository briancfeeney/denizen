<?php

/* sp/{{object.slug|raw}} */
class __TwigTemplate_c2c62526231e97cd90640e0f81158cf0a33b32f80e638536cb9b370a64c27778 extends Craft\BaseTemplate
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
        echo "sp/";
        echo $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug", array());
    }

    public function getTemplateName()
    {
        return "sp/{{object.slug|raw}}";
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
