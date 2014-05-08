<?php

/* index */
class __TwigTemplate_230dd438914c2843dc4d8f00217d6140a28bfdca98928d829e36c85d5e4f3e03 extends Craft\BaseTemplate
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
\t<video id=\"video_background\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\">
\t\t<source src=\"/public/mp4/Discovery_FastNLoud_Kraft.mp4\" type=\"video/mp4\">
\t\t<source src=\"/public/flash/landing.webm\" type=\"video/webm\">
\t</video>

\t<section id=\"home-top\" class=\"fullscreen\">
\t\t<div class=\"logo-container\">
\t\t\t<img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\">
\t\t</div>
\t</section>
\t
\t<section id=\"video-gallery\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "work"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 25
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"videoThumbnail\">
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<h6>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t<img src=\"";
                // line 30
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
            // line 35
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<section id=\"aboutUs\" class=\"fullscreen\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>About Us</h4>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"ourClients\" class=\"fullscreen\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Clients</h4>
\t\t\t</div>
\t\t</div>
\t</section>
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
\t</script>

";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  80 => 35,  69 => 30,  65 => 29,  61 => 28,  57 => 26,  52 => 25,  48 => 24,  31 => 9,  28 => 8,);
    }
}
