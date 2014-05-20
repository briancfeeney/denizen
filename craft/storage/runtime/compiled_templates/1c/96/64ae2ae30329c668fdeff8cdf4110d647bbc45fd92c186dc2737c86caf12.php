<?php

/* _includes/forms/file */
class __TwigTemplate_1c9664ae2ae30329c668fdeff8cdf4110d647bbc45fd92c186dc2737c86caf12 extends Craft\BaseTemplate
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
        echo "<input type=\"file\"";
        // line 2
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 3
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
        }
        // line 4
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 5
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && (!$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 6
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled";
        }
        echo ">
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/file";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  49 => 15,  23 => 9,  92 => 62,  90 => 61,  83 => 57,  75 => 49,  69 => 42,  65 => 40,  63 => 35,  57 => 28,  51 => 25,  47 => 23,  41 => 15,  39 => 5,  36 => 8,  33 => 4,  30 => 6,  21 => 2,  78 => 23,  72 => 21,  59 => 33,  53 => 16,  44 => 10,  35 => 7,  24 => 3,  22 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 21,  61 => 20,  54 => 16,  50 => 12,  48 => 13,  45 => 14,  42 => 9,  31 => 5,  29 => 6,  27 => 3,  25 => 11,);
    }
}
