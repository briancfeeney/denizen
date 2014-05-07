<?php

/* _components/widgets/Updates/body */
class __TwigTemplate_20223f1ce66590381e6257311ed227cebd9ee32f7290fb5eecdc8e3e54a5f916 extends Craft\BaseTemplate
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
        if ((isset($context["total"]) ? $context["total"] : null)) {
            // line 2
            echo "\t<p class=\"centeralign\">
\t\t";
            // line 3
            if (((isset($context["total"]) ? $context["total"] : null) == 1)) {
                // line 4
                echo "\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("One update available!"), "html", null, true);
                echo "
\t\t";
            } else {
                // line 6
                echo "\t\t\t";
                echo twig_escape_filter($this->env, \Craft\Craft::t("{total} updates available!", array("total" => (isset($context["total"]) ? $context["total"] : null))), "html", null, true);
                echo "
\t\t";
            }
            // line 8
            echo "\t\t<a class=\"go\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Go to Updates"), "html", null, true);
            echo "</a>
\t</p>
";
        } else {
            // line 11
            echo "\t<p class=\"centeralign\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Congrats! You’re up-to-date."), "html", null, true);
            echo "</p>
\t<p class=\"centeralign\"><a class=\"btn\" data-icon=\"refresh\">";
            // line 12
            echo twig_escape_filter($this->env, \Craft\Craft::t("Check again"), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "_components/widgets/Updates/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  38 => 8,  32 => 6,  26 => 4,  43 => 6,  92 => 62,  83 => 57,  75 => 49,  69 => 42,  65 => 40,  63 => 35,  47 => 11,  41 => 15,  36 => 8,  30 => 6,  78 => 23,  72 => 21,  59 => 33,  53 => 13,  44 => 10,  24 => 3,  22 => 2,  104 => 29,  100 => 27,  96 => 26,  90 => 61,  87 => 24,  84 => 19,  81 => 18,  76 => 17,  66 => 26,  60 => 25,  57 => 28,  51 => 25,  46 => 17,  39 => 5,  35 => 7,  33 => 4,  28 => 6,  23 => 3,  21 => 2,  19 => 1,  114 => 36,  108 => 35,  105 => 34,  98 => 30,  94 => 29,  85 => 27,  80 => 26,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 21,  61 => 20,  54 => 19,  50 => 12,  48 => 13,  45 => 17,  42 => 9,  31 => 5,  29 => 6,  27 => 3,  25 => 4,);
    }
}
