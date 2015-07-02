<?php

/* entries/_titlefield */
class __TwigTemplate_5d3ab6755b021a577512c5cf3d65449389a011793ac9e85fe8f4cd7513f2c1c8 extends Craft\BaseTemplate
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
        $context["__internal_1addfcd642da7b2d5b3199ea64221746262c65ed54f924b53a030b3bf6d179f0"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        $context["static"] = ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (false));
        // line 3
        echo "
";
        // line 4
        echo $context["__internal_1addfcd642da7b2d5b3199ea64221746262c65ed54f924b53a030b3bf6d179f0"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getType", array(), "method"), "titleLabel", array())), "locale" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "errors" => (((!(isset($context["static"]) ? $context["static"] : null))) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "title"), "method")) : ("")), "first" => true, "autofocus" => true, "required" => (!(isset($context["static"]) ? $context["static"] : null)), "disabled" => (isset($context["static"]) ? $context["static"] : null), "maxlength" => 255));
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 16,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
