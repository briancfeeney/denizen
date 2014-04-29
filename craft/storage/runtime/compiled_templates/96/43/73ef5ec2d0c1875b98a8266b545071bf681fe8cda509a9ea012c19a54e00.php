<?php

/* _special/install/account */
class __TwigTemplate_964373ef5ec2d0c1875b98a8266b545071bf681fe8cda509a9ea012c19a54e00 extends Craft\BaseTemplate
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

<div id=\"account\" class=\"modal\">
\t<h1>";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Create your account"), "html", null, true);
        echo "</h1>

\t<form id=\"accountform\" accept-charset=\"UTF-8\">
\t\t";
        // line 8
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "maxlength" => 255));
        echo "
\t\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Email"), "id" => "email", "maxlength" => 255));
        echo "
\t\t";
        // line 10
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "password"));
        echo "

\t\t<div class=\"buttons\">
\t\t\t<div id=\"accountsubmit\" class=\"btn big submit\">";
        // line 13
        echo twig_escape_filter($this->env, \Craft\Craft::t("Next"), "html", null, true);
        echo "
\t\t\t\t<input type=\"submit\" tabindex=\"-1\">
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 19
        $this->env->loadTemplate("_special/install/dots")->display(array_merge($context, array("dot" => 1)));
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_special/install/account";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,  80 => 20,  75 => 19,  64 => 10,  56 => 9,  49 => 6,  40 => 10,  38 => 19,  34 => 18,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  141 => 57,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  55 => 19,  50 => 18,  45 => 12,  43 => 21,  41 => 10,  35 => 8,  57 => 20,  54 => 18,  52 => 7,  46 => 13,  42 => 12,  39 => 11,  31 => 17,  29 => 6,  27 => 3,  25 => 4,);
    }
}
