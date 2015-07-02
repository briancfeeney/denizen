<?php

/* globals/_edit */
class __TwigTemplate_f9c46be052d1c7789374c60045819d09e6fbef78ec6d7c85359b0675416df708 extends Craft\BaseTemplate
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
        $context["title"] = \Craft\Craft::t("Globals");
        // line 5
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 6
            ob_start();
            // line 7
            echo "\t\t<div class=\"select\">
\t\t\t<select onchange=\"document.location.href='";
            // line 8
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("globals/{locale}/" . (isset($context["globalSetHandle"]) ? $context["globalSetHandle"] : null))), "html", null, true);
            echo "'.replace('{locale}', this.value);\">
\t\t\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getEditableLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 10
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["locale"], "id", array()) == (isset($context["localeId"]) ? $context["localeId"] : null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t</select>
\t\t</div>
\t";
            $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        ob_start();
        // line 19
        echo "\t<nav>
\t\t<ul>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["globalSets"]) ? $context["globalSets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theGlobalSet"]) {
            // line 22
            echo "\t\t\t\t<li><a";
            if (($this->getAttribute($context["theGlobalSet"], "handle", array()) == (isset($context["globalSetHandle"]) ? $context["globalSetHandle"] : null))) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theGlobalSet"], "getCpEditUrl", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["theGlobalSet"], "name", array())), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theGlobalSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</ul>
\t</nav>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        ob_start();
        // line 30
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut data-confirm-unload>
\t\t<input type=\"hidden\" name=\"action\" value=\"globals/saveContent\">
\t\t<input type=\"hidden\" name=\"setId\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"locale\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["localeId"]) ? $context["localeId"] : null), "html", null, true);
        echo "\">
\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 36
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"))) {
            // line 37
            echo "\t\t\t<div>
\t\t\t\t";
            // line 38
            $this->env->loadTemplate("_includes/fields")->display(array("fields" => $this->getAttribute($this->getAttribute((isset($context["globalSet"]) ? $context["globalSet"] : null), "getFieldLayout", array(), "method"), "getFields", array(), "method"), "element" => (isset($context["globalSet"]) ? $context["globalSet"] : null)));
            // line 42
            echo "\t\t\t</div>

\t\t\t<div class=\"buttons\">
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } else {
            // line 48
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This global set doesn’t have any fields assigned to it in its field layout."), "html", null, true);
            echo "
\t\t";
        }
        // line 50
        echo "\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "globals/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  129 => 48,  123 => 45,  118 => 42,  116 => 38,  113 => 37,  111 => 36,  106 => 34,  102 => 33,  98 => 32,  94 => 30,  92 => 29,  87 => 24,  72 => 22,  68 => 21,  64 => 19,  62 => 18,  56 => 12,  41 => 10,  37 => 9,  33 => 8,  30 => 7,  28 => 6,  26 => 5,  24 => 2,);
    }
}
