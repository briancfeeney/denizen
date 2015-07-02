<?php

/* entries */
class __TwigTemplate_06d10675502043de2443b44ff57aab90fd2727e7aaf3c80e9213656aaa0b87a9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/elementindex");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        $context["sections"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "sections", array()), "getEditableSections", array(), "method");
        // line 7
        $context["newEntrySections"] = array();
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 10
            if ((($this->getAttribute($context["section"], "type", array()) != "single") && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries:" . $this->getAttribute($context["section"], "id", array()))), "method"))) {
                // line 11
                $context["newEntrySections"] = twig_array_merge((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null), array(0 => $context["section"]));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        if (array_key_exists("sectionHandle", $context)) {
            // line 41
            \Craft\craft()->templates->includeJs((("window.defaultSectionHandle = \"" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "\";"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : null))) {
            // line 18
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 19
            if ((twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : null)) > 1)) {
                // line 20
                echo "\t\t\t\t<div class=\"btngroup submit\">
\t\t\t\t\t<div class=\"btn submit menubtn add icon\">";
                // line 21
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($context["section"], "handle", array())) . "/new")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["section"], "name", array())), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t<a class=\"btn submit add icon\" href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($this->getAttribute((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null), 0, array(), "array"), "handle", array())) . "/new")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 33
            echo "\t\t</div>
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  107 => 35,  103 => 33,  95 => 31,  89 => 27,  78 => 25,  74 => 24,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  48 => 41,  46 => 40,  39 => 11,  37 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
