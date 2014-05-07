<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_e392f654c47910f3a972dc5ba44fed3130c3585a2e6101b2e08b47a125cc0a00 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        if ((isset($context["sources"]) ? $context["sources"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) {
                // line 5
                echo "\t\t";
                echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" => (isset($context["sources"]) ? $context["sources"] : null), "values" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sources")));
                // line 12
                echo "
\t";
            } else {
                // line 14
                echo "\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Source"), "instructions" => \Craft\Craft::t("Which source do you want to select {type} from?", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "source", "name" => "source", "options" => (isset($context["sources"]) ? $context["sources"] : null), "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "source")));
                // line 21
                echo "
\t";
            }
        } else {
            // line 24
            echo "\t";
            echo $context["forms"]->getfield(array("label" => (((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) ? (\Craft\Craft::t("Sources")) : (\Craft\Craft::t("Source")))), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 26
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["targetLocaleField"]) ? $context["targetLocaleField"] : null), "html", null, true);
        echo "

";
        // line 31
        if ((isset($context["allowLimit"]) ? $context["allowLimit"] : null)) {
            // line 32
            echo "\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "limit"), "size" => 2, "errors" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
            // line 40
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 32,  59 => 31,  36 => 14,  156 => 22,  147 => 8,  142 => 5,  126 => 3,  121 => 105,  119 => 97,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 65,  66 => 62,  64 => 40,  56 => 54,  46 => 43,  44 => 24,  29 => 5,  27 => 28,  53 => 52,  39 => 21,  33 => 12,  25 => 11,  23 => 9,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 129,  158 => 126,  154 => 16,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 96,  133 => 94,  131 => 84,  127 => 82,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 69,  99 => 67,  97 => 66,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 41,  63 => 35,  60 => 56,  58 => 30,  54 => 29,  51 => 28,  49 => 50,  47 => 26,  45 => 14,  42 => 17,  40 => 16,  38 => 41,  34 => 39,  32 => 12,  30 => 8,  28 => 7,  26 => 4,  24 => 3,);
    }
}
