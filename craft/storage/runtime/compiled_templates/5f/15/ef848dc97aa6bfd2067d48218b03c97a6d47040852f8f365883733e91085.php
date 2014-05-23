<?php

/* clients */
class __TwigTemplate_5f15ef848dc97aa6bfd2067d48218b03c97a6d47040852f8f365883733e91085 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layout");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["title"] = "Clients";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "\t<section id=\"ourClients\">
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Clients</h4>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "clients"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 25
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "logo"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "\t\t\t\t\t<div class=\"col-sm-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"clientLogo\">
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</div>
\t\t</div>
\t
\t</section>
";
    }

    public function getTemplateName()
    {
        return "clients";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  70 => 34,  59 => 29,  55 => 28,  51 => 26,  46 => 25,  42 => 24,  33 => 17,  30 => 16,  25 => 14,);
    }
}
