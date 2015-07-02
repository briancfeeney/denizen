<?php

/* _elements/element */
class __TwigTemplate_670e7ae68cf63753287b32a241c29cb1c1b37a0e14c664198d964f2b4b445046 extends Craft\BaseTemplate
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
        echo \Craft\craft()->templates->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
