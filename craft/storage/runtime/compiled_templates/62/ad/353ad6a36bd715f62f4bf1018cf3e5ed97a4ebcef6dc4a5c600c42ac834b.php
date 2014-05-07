<?php

/* work/{{object.slug}} */
class __TwigTemplate_62ad353ad6a36bd715f62f4bf1018cf3e5ed97a4ebcef6dc4a5c600c42ac834b extends Craft\BaseTemplate
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
        echo "work/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "work/{{object.slug}}";
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
