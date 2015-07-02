<?php

/* sp/_entry */
class __TwigTemplate_10940e1188d2d21e2e0930a438e3921d152bdb302b98885701aba6288e58a461 extends Craft\BaseTemplate
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
<section id=\"ourWork\" class=\"singleClient sp\">
\t
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t";
        // line 15
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "client", array()))) {
            // line 16
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "client", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 17
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["company"], "logo", array()), "limit", array(0 => 1), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 18
                    echo "\t\t\t\t\t\t<div class=\"col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrl", array(), "method"), "html", null, true);
                    echo "\" class=\"logo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t<h4 class=\"SP-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "spTitle", array()), "html", null, true);
            echo "</h4>
\t\t\t";
        }
        // line 26
        echo "\t\t</div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoGrid", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 31
            echo "\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"videoThumbnail\">
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"videoInfo\">
\t\t\t\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["video"], "client", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "title", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t\t\t\t<h6>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["video"], "videoThumbnail", array()), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t\t<div class=\"container sp-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body", array()), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t</div>

</section>

";
    }

    public function getTemplateName()
    {
        return "sp/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  138 => 47,  129 => 43,  120 => 41,  116 => 40,  110 => 38,  101 => 36,  97 => 35,  92 => 33,  88 => 31,  84 => 30,  78 => 26,  72 => 24,  69 => 23,  63 => 22,  54 => 19,  51 => 18,  46 => 17,  41 => 16,  39 => 15,  31 => 9,  28 => 8,);
    }
}
