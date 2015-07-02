<?php

/* _includes/forms/field */
class __TwigTemplate_84b1af6246ef8a0a6492bae242a08857b9d4d020c5ed975743bf14c2cfa5ab8b extends Craft\BaseTemplate
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
        $context["id"] = ((array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : null)) : (null));
        // line 2
        $context["label"] = (((array_key_exists("label", $context) && ((isset($context["label"]) ? $context["label"] : null) != "__blank__"))) ? ((isset($context["label"]) ? $context["label"] : null)) : (null));
        // line 3
        $context["locale"] = ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && array_key_exists("locale", $context))) ? ((isset($context["locale"]) ? $context["locale"] : null)) : (null));
        // line 4
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ((isset($context["instructions"]) ? $context["instructions"] : null)) : (null));
        // line 5
        $context["warning"] = ((array_key_exists("warning", $context)) ? ((isset($context["warning"]) ? $context["warning"] : null)) : (null));
        // line 6
        $context["errors"] = ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) ? $context["errors"] : null)) : (null));
        // line 8
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && (isset($context["first"]) ? $context["first"] : null))) {
            echo " first";
        }
        echo "\"";
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 9
        if (((isset($context["label"]) ? $context["label"] : null) || (isset($context["instructions"]) ? $context["instructions"] : null))) {
            // line 10
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 11
            if ((isset($context["label"]) ? $context["label"] : null)) {
                // line 12
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && (isset($context["required"]) ? $context["required"] : null))) {
                    echo " class=\"required\"";
                }
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 13
                echo (isset($context["label"]) ? $context["label"] : null);
                // line 14
                echo "</label>
\t\t\t\t";
                // line 15
                if ((isset($context["locale"]) ? $context["locale"] : null)) {
                    // line 16
                    echo "\t\t\t\t\t<span class=\"locale\">";
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t";
            }
            // line 19
            echo "\t\t\t";
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                // line 20
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 22
            echo "\t\t</div>
\t";
        }
        // line 24
        echo "\t<div class=\"input";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 25
        echo (isset($context["input"]) ? $context["input"] : null);
        echo "
\t</div>
\t";
        // line 27
        if ((isset($context["warning"]) ? $context["warning"] : null)) {
            // line 28
            echo "\t\t<p class=\"warning\">";
            echo twig_escape_filter($this->env, (isset($context["warning"]) ? $context["warning"] : null), "html", null, true);
            echo "</p>
\t";
        }
        // line 30
        echo "\t";
        $this->env->loadTemplate("_includes/forms/errorList")->display(array_merge($context, array("errors" => (isset($context["errors"]) ? $context["errors"] : null))));
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  111 => 30,  105 => 28,  103 => 27,  98 => 25,  91 => 24,  87 => 22,  81 => 20,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  64 => 14,  62 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  31 => 8,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
