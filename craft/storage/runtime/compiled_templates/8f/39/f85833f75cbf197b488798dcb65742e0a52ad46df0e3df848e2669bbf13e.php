<?php

/* clients/_entry */
class __TwigTemplate_8f39f85833f75cbf197b488798dcb65742e0a52ad46df0e3df848e2669bbf13e extends Craft\BaseTemplate
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<section id=\"ourWork\" class=\"singleClient\">
\t
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3\">
\t\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "logo"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 17
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" class=\"logo\">
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 24
        $context["posts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "find", array(0 => array("section" => "work", "parentOf" => (isset($context["entry"]) ? $context["entry"] : null))), "method");
        // line 25
        echo "\t\t\t\t";
        if (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null))) {
            // line 26
            echo "
\t\t\t\t        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 28
                echo "\t\t\t\t            <div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"videoThumbnail\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"videoInfo\">
\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<h6>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>

";
    }

    public function getTemplateName()
    {
        return "clients/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  112 => 42,  103 => 38,  94 => 36,  90 => 35,  85 => 33,  81 => 32,  76 => 30,  72 => 28,  68 => 27,  65 => 26,  62 => 25,  60 => 24,  53 => 19,  44 => 17,  40 => 16,  31 => 9,  28 => 8,);
    }
}
