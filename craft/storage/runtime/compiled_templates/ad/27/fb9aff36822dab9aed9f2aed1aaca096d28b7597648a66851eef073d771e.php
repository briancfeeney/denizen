<?php

/* settings/_index */
class __TwigTemplate_ad27fb9aff36822dab9aed9f2aed1aaca096d28b7597648a66851eef073d771e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Settings");
        // line 4
        \Craft\craft()->templates->includeCssResource("css/settings.css");
        // line 5
        \Craft\craft()->templates->includeJsResource("js/settings.js");
        // line 7
        ob_start();
        // line 8
        echo "
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "settings", array(), "method"));
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 10
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>

\t\t<ul class=\"icons\">
\t\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 14
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $context["handle"])), "html", null, true);
                echo "\" data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>

\t\t<hr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tools"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) ? $context["tools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 25
            echo "\t\t\t<li><a id=\"tool-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getClassHandle", array(), "method"), "html", null, true);
            echo "\" data-icon=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getIconValue", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 26
            \Craft\craft()->templates->includeJs((((((("new Craft.Tool(\"" . $this->getAttribute($context["tool"], "getClassHandle", array(), "method")) . "\", ") . $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute($context["tool"], "getOptionsHtml", array(), "method"))) . ", \"") . $this->getAttribute($context["tool"], "getButtonLabel", array(), "method")) . "\");"));
            // line 27
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</ul>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  96 => 27,  94 => 26,  85 => 25,  81 => 24,  75 => 21,  72 => 20,  63 => 16,  50 => 14,  46 => 13,  39 => 10,  35 => 9,  32 => 8,  30 => 7,  28 => 5,  26 => 4,  24 => 2,);
    }
}
