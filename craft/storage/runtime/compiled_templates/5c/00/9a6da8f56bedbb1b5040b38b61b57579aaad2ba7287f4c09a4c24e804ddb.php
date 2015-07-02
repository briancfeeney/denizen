<?php

/* _layouts/base */
class __TwigTemplate_5c009a6da8f56bedbb1b5040b38b61b57579aaad2ba7287f4c09a4c24e804ddb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->templates->includeCssResource("css/craft.css", true);
        // line 3
        $context["siteName"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getSiteName", array(), "method");
        // line 4
        $context["docTitle"] = ((array_key_exists("docTitle", $context)) ? ((isset($context["docTitle"]) ? $context["docTitle"] : null)) : (strip_tags((isset($context["title"]) ? $context["title"] : null))));
        // line 6
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "</head>
<body class=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method"), "html", null, true);
        echo "\">
\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t";
        $this->displayBlock('foot', $context, $blocks);
        // line 24
        echo "</body>
</html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta charset=\"utf-8\">
\t<title>";
        // line 12
        echo twig_escape_filter($this->env, (((isset($context["docTitle"]) ? $context["docTitle"] : null) . ((((isset($context["docTitle"]) ? $context["docTitle"] : null) && (isset($context["siteName"]) ? $context["siteName"] : null))) ? (" - ") : (""))) . (isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</title>
\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getHeadHtmlFunction(), "html", null, true);
        echo "
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<script type=\"text/javascript\">
\t\t// Fix for Firefox autofocus CSS bug
\t\t// See: http://stackoverflow.com/questions/18943276/html-5-autofocus-messes-up-css-loading/18945951#18945951
\t</script>
\t";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    // line 23
    public function block_foot($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layouts/base";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  75 => 22,  64 => 13,  60 => 12,  56 => 10,  53 => 9,  47 => 24,  44 => 23,  42 => 22,  38 => 21,  35 => 20,  33 => 9,  28 => 6,  26 => 4,  24 => 3,  22 => 1,);
    }
}
