<?php

/*  */
class __TwigTemplate_1c4511845e13c88ffc201889f20c7ac43635dbd47a2739ddc6c8ece508b956d1 extends Craft\BaseTemplate
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
        \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "postCpLoginRedirect", array())) ? ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "postCpLoginRedirect", array())) : ("dashboard"))), true, 302);
    }

    public function getTemplateName()
    {
        return "";
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
