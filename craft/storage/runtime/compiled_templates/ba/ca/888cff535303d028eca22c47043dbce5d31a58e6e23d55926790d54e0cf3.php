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

\t
\t<section id=\"work-info\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<section id=\"video-player\">
\t\t\t\t<div class=\"thumbnail-overlay\">
\t\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" class=\"thumbnail_fullwidth\">
\t\t\t\t\t<button class=\"play\">Play</button>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</div>

\t\t\t\t<video id=\"video_fullwidth\" preload=\"auto\" volume=\"7\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videomp4"));
        foreach ($context['_seq'] as $context["_key"] => $context["mp4"]) {
            // line 23
            echo "\t\t\t\t\t\t<source src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp4"]) ? $context["mp4"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" type=\"video/mp4\">
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp4'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videowebm"));
        foreach ($context['_seq'] as $context["_key"] => $context["webm"]) {
            // line 26
            echo "\t\t\t\t\t\t<source src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webm"]) ? $context["webm"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" type=\"video/webm\">
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoogg"));
        foreach ($context['_seq'] as $context["_key"] => $context["ogg"]) {
            // line 29
            echo "\t\t\t\t\t\t<source src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ogg"]) ? $context["ogg"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" type=\"video/ogg\">
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ogg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\tVideo not supported
\t\t\t\t</video>

\t\t\t\t<button class=\"pause hide\">Pause</button>
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"workMeta\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t<h4>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "workType"), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<h1>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "</h1>
\t\t\t\t\t
\t\t\t\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body")) {
            // line 44
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body"), "html", null, true);
            echo "
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t
\t\t\t\t\t\t";
        // line 47
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"))) {
            // line 48
            echo "\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t<li><h5>Creatives:</h5></li>
\t\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "title"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t\t<section class=\"clientLogo\">
\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 60
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "logo"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 61
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"button\" value=\"Go Back\" class=\"btn\" onclick=\"history.back(-1)\" />
\t\t\t</section>
\t\t</div>
\t\t
\t</section>
\t
\t<script>
\t\t\$(\".play\").click(function() {
\t\t\t\$(\".thumbnail-overlay\").addClass(\"hide\");
\t\t\t\$('video').trigger(\"play\");
\t\t\t\$('.pause').removeClass(\"hide\");
\t\t});
\t
\t\t\$(\".pause\").click(function() {
\t\t\tif(\$(\"video\").get(0).paused) {
\t\t\t\t\$('video').trigger(\"play\");
\t\t\t}else{
\t\t\t\t\$('video').trigger(\"pause\");
\t\t\t}
\t\t});
\t
\t\t\$(\"video\").bind(\"ended\", function() {
\t\t   \$(\".thumbnail-overlay\").removeClass(\"hide\");
\t\t});
\t\t
\t\t
\t\t\$(function() {
\t\t\tvar vheight = \$(\".thumbnail_fullwidth\").height();
\t\t  \tvar video = document.getElementsByTagName(\"video\")[0];
\t\t\tvideo.setAttribute('height', vheight);
\t\t\tvideo.setAttribute('width ', '700');
\t\t});
\t\t
\t\t\$(\".thumbnail_fullwidth\").width();
\t</script>
\t
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
        return array (  190 => 66,  184 => 65,  175 => 62,  170 => 61,  165 => 60,  161 => 59,  155 => 55,  151 => 53,  142 => 51,  138 => 50,  134 => 48,  132 => 47,  129 => 46,  123 => 44,  121 => 43,  116 => 41,  112 => 40,  101 => 31,  92 => 29,  87 => 28,  78 => 26,  73 => 25,  64 => 23,  60 => 22,  55 => 19,  45 => 16,  41 => 15,  31 => 7,  28 => 6,);
    }
}
