<?php

/* comingsoon.html */
class __TwigTemplate_7792468032be05875895a8fd381a7548ac43b81d7228d99526a90bafecb91d44 extends Craft\BaseTemplate
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
<div id=\"comingSoon\">
\t<video id=\"video_background\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\">
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainBackgroundVideo"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 13
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundMp4"));
            foreach ($context['_seq'] as $context["_key"] => $context["mp4"]) {
                // line 14
                echo "\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp4"]) ? $context["mp4"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/mp4\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundWebm"));
            foreach ($context['_seq'] as $context["_key"] => $context["webm"]) {
                // line 17
                echo "\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webm"]) ? $context["webm"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/webm\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundOgg"));
            foreach ($context['_seq'] as $context["_key"] => $context["ogg"]) {
                // line 20
                echo "\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ogg"]) ? $context["ogg"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/ogg\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ogg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</video>

\t<section id=\"home-top\" class=\"fullscreen\">
\t\t<div class=\"logo-container\">
\t\t\t<img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\">
\t\t\t<h1>Coming Soon</h1>
\t\t</div>
\t</section>
</div>
\t
\t<script src=\"/public/js/classie.js\"></script>
\t<script src=\"/public/js/application.js\"></script>
\t
\t<script type='text/javascript'>
\t\$(document).ready(sizeContent);

\t\t//Every resize of window
\t\t\$(window).resize(sizeContent);

\t\t//Dynamically assign height
\t\tfunction sizeContent() {
\t\t    var newHeight = \$(window).height();
\t\t    \$(\".fullscreen\").css(\"min-height\", newHeight);
\t}
\t
\t\$( document ).ready(function() {
\t\t\$(\"header\").addClass(\"hide\");
\t\t\$(\"#footer\").addClass(\"hide\");
\t});
\t</script>

";
    }

    public function getTemplateName()
    {
        return "comingsoon.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 22,  73 => 20,  68 => 19,  59 => 17,  54 => 16,  45 => 14,  40 => 13,  36 => 12,  31 => 9,  28 => 8,);
    }
}
