<?php

/* work/_entry */
class __TwigTemplate_baca888cff535303d028eca22c47043dbce5d31a58e6e23d55926790d54e0cf3 extends Craft\BaseTemplate
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
\t<div class=\"thumbnail-overlay\">
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 10
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" class=\"thumbnail_fullwidth\">
\t\t<button class=\"play\">Play</button>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t</div>
\t
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp4Video"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 16
            echo "\t<video id=\"video_fullwidth\" preload=\"auto\"  loop=\"loop\" muted=\"muted\" volume=\"0\">
\t\t<source src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" type=\"video/mp4\">
\t\tVideo not supported
\t</video>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t
\t<section id=\"work-info\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-9 offset-sm-1\">
\t\t\t\t\t<h4>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "workType"), "html", null, true);
        echo "</h4>
\t\t\t\t\t<h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "</h1>
\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body"), "html", null, true);
        echo "
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li><h5>Creatives:</h5></li>
\t\t\t\t\t\t";
        // line 31
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"))) {
            // line 32
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "title"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<section class=\"clientLogo\">
\t\t\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 41
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "logo"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 42
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "work/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  134 => 44,  125 => 42,  120 => 41,  116 => 40,  110 => 36,  107 => 35,  98 => 33,  93 => 32,  91 => 31,  85 => 28,  81 => 27,  77 => 26,  70 => 21,  60 => 17,  57 => 16,  53 => 15,  49 => 13,  39 => 10,  35 => 9,  31 => 7,  28 => 6,);
    }
}
