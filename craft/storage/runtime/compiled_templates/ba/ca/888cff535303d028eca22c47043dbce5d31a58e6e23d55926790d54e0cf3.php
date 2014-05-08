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
\t<section id=\"video-player\">
\t\t<div class=\"thumbnail-overlay\">
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 11
            echo "\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" class=\"thumbnail_fullwidth\">
\t\t\t<button class=\"play\">Play</button>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</div>
\t
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mp4Video"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 17
            echo "\t\t<video id=\"video_fullwidth\" preload=\"auto\" volume=\"3\">
\t\t\t<source src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getUrl", array(), "method"), "html", null, true);
            echo "\" type=\"video/mp4\">
\t\t\tVideo not supported
\t\t</video>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t
\t\t<button class=\"pause hide\">Pause</button>
\t</section>
\t
\t<section id=\"work-info\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-9 offset-sm-1\">
\t\t\t\t\t<h4>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "workType"), "html", null, true);
        echo "</h4>
\t\t\t\t\t<h1>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
        echo "</h1>
\t\t\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body"), "html", null, true);
        echo "
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li><h5>Creatives:</h5></li>
\t\t\t\t\t\t";
        // line 35
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"))) {
            // line 36
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatives"));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : null), "title"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<section class=\"clientLogo\">
\t\t\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "client"));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 45
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "logo"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
        return array (  144 => 49,  138 => 48,  129 => 46,  124 => 45,  120 => 44,  114 => 40,  111 => 39,  102 => 37,  97 => 36,  95 => 35,  89 => 32,  85 => 31,  81 => 30,  71 => 22,  61 => 18,  58 => 17,  54 => 16,  50 => 14,  40 => 11,  36 => 10,  31 => 7,  28 => 6,);
    }
}
