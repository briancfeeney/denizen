<?php

/* _layouts/basecp */
class __TwigTemplate_30e9f1e6d0067ac308c50c7fc0c07cbc6cbccde313afd7bd4435837c5bab29a0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        switch ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")) {
            case "en_gb":
            {
                // line 6
                $context["datepickerLocale"] = "en-GB";
                break;
            }
            case "fr_ca":
            {
                // line 8
                $context["datepickerLocale"] = "fr-CA";
                break;
            }
            default:
            {
                // line 10
                $context["language"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getLanguageID", array(0 => $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale")), "method");
                // line 11
                if (twig_in_filter((isset($context["language"]) ? $context["language"] : null), array(0 => "ar", 1 => "de", 2 => "fr", 3 => "it", 4 => "ja", 5 => "nb", 6 => "nl"))) {
                    // line 12
                    $context["datepickerLocale"] = (isset($context["language"]) ? $context["language"] : null);
                }
            }
        }
        // line 18
        if (array_key_exists("datepickerLocale", $context)) {
            // line 19
            \Craft\craft()->templates->includeJsResource((("lib/datepicker-i18n/datepicker-" . (isset($context["datepickerLocale"]) ? $context["datepickerLocale"] : null)) . ".js"), true);
        }
        // line 22
        \Craft\craft()->templates->includeJsResource("js/cp.js", true);
        // line 23
        \Craft\craft()->templates->includeJsResource("js/craft.js", true);
        // line 24
        \Craft\craft()->templates->includeJsResource((("lib/garnish-0.1" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 25
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js", true);
        // line 26
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js", true);
        // line 27
        \Craft\craft()->templates->includeJsResource((("lib/jquery.placeholder" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 28
        \Craft\craft()->templates->includeJsResource((("lib/jquery-ui-1.10.4.custom" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 29
        \Craft\craft()->templates->includeJsResource((("lib/jquery-2.1.0" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 30
        \Craft\craft()->templates->includeJsResource((("lib/xregexp-all" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "useCompressedJs")) ? ("-min") : (""))) . ".js"), true);
        // line 32
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        // line 34
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_foot($context, array $blocks = array())
    {
        // line 37
        echo "\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:              \"";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:              \"";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:            \"";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:          \"";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:            \"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:          \"";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:           \"";
        // line 53
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls: ";
        // line 54
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:          ";
        // line 55
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:      \"";
        // line 56
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "getResourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:        \"";
        // line 57
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "actionTrigger"), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                 \"";
        // line 58
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlocale:               \"";
        // line 59
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale"), "js"), "html", null, true);
        echo "\",
\t\t\torientation:          \"";
        // line 60
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["orientation"]) ? $context["orientation"] : null), "js"), "html", null, true);
        echo "\",
\t\t\tleft:                 \"";
        // line 61
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("left") : ("right"));
        echo "\",
\t\t\tright:                \"";
        // line 62
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("right") : ("left"));
        echo "\",
\t\t\tPersonal:             ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null), "html", null, true);
        echo ",
\t\t\tClient:               ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["CraftClient"]) ? $context["CraftClient"] : null), "html", null, true);
        echo ",
\t\t\tPro:                  ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["CraftPro"]) ? $context["CraftPro"] : null), "html", null, true);
        echo ",
\t\t\tedition:              ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["CraftEdition"]) ? $context["CraftEdition"] : null), "html", null, true);
        echo ",
\t\t\tisLocalized:          ";
        // line 67
        echo (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\ttranslations:         ";
        // line 68
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
\t\t\tslugWordSeparator:    \"";
        // line 70
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "slugWordSeparator"), "js"), "html", null, true);
        echo "\"
\t\t};

\t\twindow.Craft.fileKinds = {};
\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getFileKinds", array(), "method"));
        foreach ($context['_seq'] as $context["kind"] => $context["info"]) {
            // line 75
            echo "\t\t\twindow.Craft.fileKinds.";
            echo twig_escape_filter($this->env, (isset($context["kind"]) ? $context["kind"] : null), "html", null, true);
            echo " = [];
\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "extensions"));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 77
                echo "\t\t\t\twindow.Craft.fileKinds.";
                echo twig_escape_filter($this->env, (isset($context["kind"]) ? $context["kind"] : null), "html", null, true);
                echo ".push(\"";
                echo twig_escape_filter($this->env, (isset($context["extension"]) ? $context["extension"] : null), "html", null, true);
                echo "\");
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kind'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  189 => 69,  185 => 68,  177 => 66,  169 => 64,  165 => 63,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  105 => 48,  101 => 47,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  55 => 22,  52 => 19,  50 => 18,  45 => 12,  43 => 11,  35 => 8,  29 => 6,  25 => 4,  656 => 225,  653 => 224,  645 => 231,  637 => 229,  635 => 228,  632 => 227,  630 => 224,  627 => 223,  621 => 220,  618 => 219,  616 => 218,  607 => 217,  604 => 216,  601 => 215,  598 => 214,  596 => 213,  590 => 209,  587 => 208,  584 => 207,  581 => 206,  578 => 205,  572 => 199,  566 => 196,  563 => 195,  561 => 194,  558 => 193,  552 => 191,  550 => 190,  547 => 189,  542 => 186,  531 => 184,  527 => 183,  523 => 181,  520 => 180,  517 => 179,  508 => 265,  502 => 263,  500 => 262,  496 => 261,  490 => 258,  486 => 257,  482 => 255,  480 => 254,  475 => 251,  467 => 249,  465 => 248,  454 => 245,  446 => 243,  444 => 242,  438 => 241,  430 => 240,  424 => 236,  422 => 205,  417 => 202,  415 => 179,  409 => 175,  403 => 174,  395 => 172,  392 => 171,  389 => 170,  385 => 169,  375 => 161,  367 => 158,  362 => 156,  360 => 155,  358 => 154,  351 => 153,  346 => 152,  342 => 151,  331 => 147,  319 => 141,  311 => 139,  309 => 138,  303 => 137,  297 => 134,  293 => 132,  287 => 128,  281 => 127,  268 => 125,  263 => 124,  259 => 123,  253 => 120,  245 => 117,  242 => 116,  240 => 115,  237 => 114,  234 => 113,  231 => 112,  228 => 111,  225 => 110,  218 => 106,  212 => 105,  205 => 104,  202 => 103,  199 => 102,  196 => 101,  193 => 70,  190 => 99,  187 => 98,  184 => 97,  181 => 67,  179 => 95,  176 => 94,  173 => 65,  170 => 92,  167 => 91,  164 => 90,  161 => 62,  158 => 88,  155 => 87,  152 => 86,  150 => 85,  144 => 81,  141 => 57,  138 => 79,  135 => 78,  131 => 76,  122 => 74,  118 => 73,  112 => 71,  109 => 49,  107 => 69,  104 => 68,  95 => 65,  115 => 72,  110 => 40,  108 => 36,  102 => 33,  98 => 66,  94 => 30,  92 => 64,  87 => 24,  72 => 22,  68 => 21,  64 => 19,  62 => 18,  56 => 12,  41 => 10,  37 => 9,  33 => 8,  30 => 4,  28 => 3,  26 => 5,  24 => 2,);
    }
}
