<?php

/* _components/widgets/GetHelp/body */
class __TwigTemplate_79cf8b7506021b863fda3085f707c84909093a173849534737318f85504453bb extends Craft\BaseTemplate
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
<form method=\"post\" accept-charset=\"UTF-8\" enctype=\"multipart/form-data\">
\t";
        // line 4
        $context["fromEmail"] = ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "fromEmail")) : ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "email")));
        // line 5
        echo "\t";
        if ((((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@pixelandtonic.com") || ((isset($context["fromEmail"]) ? $context["fromEmail"] : null) == "support@buildwithcraft.com"))) {
            // line 6
            echo "\t\t";
            $context["fromEmail"] = "";
            // line 7
            echo "\t";
        }
        // line 8
        echo "
\t";
        // line 9
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Your Email"), "class" => "fromEmail", "name" => "fromEmail", "value" => (isset($context["fromEmail"]) ? $context["fromEmail"] : null), "errors" => ((array_key_exists("getHelp", $context)) ? ($this->getAttribute((isset($context["getHelp"]) ? $context["getHelp"] : null), "getErrors", array(0 => "fromEmail"), "method")) : (""))));
        // line 15
        echo "

\t";
        // line 17
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Message"), "class" => "message", "name" => "message", "placeholder" => \Craft\Craft::t("Tell us about your problems."), "rows" => 4));
        // line 23
        echo "

\t<a class=\"fieldtoggle\" data-target=\"gethelp-more\">";
        // line 25
        echo twig_escape_filter($this->env, \Craft\Craft::t("More"), "html", null, true);
        echo "</a>

\t<div id=\"gethelp-more\" class=\"hidden\">
\t\t";
        // line 28
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach error logs?"), "class" => "attachLogs", "name" => "attachLogs", "checked" => true));
        // line 33
        echo "

\t\t";
        // line 35
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Attach a database backup?"), "class" => "attachDbBackup", "name" => "attachDbBackup", "checked" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "backupDbOnUpdate")));
        // line 40
        echo "

\t\t";
        // line 42
        echo $context["forms"]->getcheckboxField(array("name" => "attachTemplates", "checked" => true, "class" => "attachTemplates", "label" => \Craft\Craft::t("Include your template files?")));
        // line 47
        echo "

\t\t";
        // line 49
        echo $context["forms"]->getfileField(array("label" => \Craft\Craft::t("Attach an additional file?"), "class" => "attachAdditionalFile", "name" => "attachAdditionalFile"));
        // line 53
        echo "
\t</div>

\t<div class=\"buttons last\">
\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, \Craft\Craft::t("Send"), "html", null, true);
        echo "\">
\t\t<div class=\"spinner hidden\"></div>
\t</div>

\t";
        // line 61
        $context["email"] = ('' === $tmp = "<a href=\"mailto:support@buildwithcraft.com\">support@buildwithcraft.com</a>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        echo "\t<p class=\"error hidden\">";
        echo \Craft\Craft::t("Couldn’t send your message. Please email it to {email} instead.", array("email" => (isset($context["email"]) ? $context["email"] : null)));
        echo "</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "_components/widgets/GetHelp/body";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 62,  90 => 61,  51 => 25,  47 => 23,  39 => 9,  36 => 8,  33 => 7,  21 => 2,  72 => 21,  53 => 13,  44 => 10,  19 => 1,  75 => 49,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  34 => 18,  24 => 3,  22 => 2,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 63,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 54,  125 => 53,  113 => 50,  109 => 49,  101 => 47,  86 => 37,  83 => 57,  78 => 23,  73 => 32,  69 => 42,  67 => 28,  65 => 40,  63 => 35,  59 => 33,  57 => 28,  55 => 22,  52 => 7,  43 => 21,  41 => 15,  35 => 7,  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 85,  149 => 59,  143 => 80,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 51,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 40,  30 => 6,  28 => 3,  114 => 71,  108 => 69,  105 => 48,  98 => 30,  94 => 64,  85 => 27,  80 => 20,  77 => 53,  74 => 24,  71 => 47,  68 => 19,  64 => 10,  61 => 25,  54 => 16,  50 => 12,  48 => 13,  45 => 17,  42 => 9,  31 => 5,  29 => 6,  27 => 5,  25 => 4,);
    }
}
