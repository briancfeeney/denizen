<?php

/* _special/install */
class __TwigTemplate_c34b13d0394771908ebc8bffd3f11925177b2e9680e6ecc06e875539462b301e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Install Craft");
        // line 3
        \Craft\craft()->templates->includeCssResource("css/install.css");
        // line 4
        \Craft\craft()->templates->includeJsResource("js/install.js");
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"All done!",
        	"Go to {app}"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t<div id=\"bg\"></div>
\t<div class=\"beginbtncontainer\">
\t\t<div id=\"beginbtn\" class=\"btn big submit\">";
        // line 14
        echo twig_escape_filter($this->env, \Craft\Craft::t("Begin"), "html", null, true);
        echo "</div>
\t</div>

\t";
        // line 17
        $this->env->loadTemplate("_special/install/account")->display($context);
        // line 18
        echo "\t";
        $this->env->loadTemplate("_special/install/site")->display($context);
        // line 19
        echo "\t";
        $this->env->loadTemplate("_special/install/installing")->display($context);
    }

    public function getTemplateName()
    {
        return "_special/install";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  54 => 18,  52 => 17,  46 => 14,  42 => 12,  39 => 11,  31 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
