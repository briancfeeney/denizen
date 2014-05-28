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
<!-- \t
\t<div id=\"video_background\">
\t\t<video id=\"bg_video\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\">
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainBackgroundVideo"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 14
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundMp4"));
            foreach ($context['_seq'] as $context["_key"] => $context["mp4"]) {
                // line 15
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp4"]) ? $context["mp4"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/mp4\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundWebm"));
            foreach ($context['_seq'] as $context["_key"] => $context["webm"]) {
                // line 18
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webm"]) ? $context["webm"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/webm\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundOgg"));
            foreach ($context['_seq'] as $context["_key"] => $context["ogg"]) {
                // line 21
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ogg"]) ? $context["ogg"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/ogg\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ogg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</video>
\t</div>
-->

\t<section id=\"home-top\">
\t\t<div class=\"logo-container\">
\t\t\t<a href=\"/#home\"><img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\"></a>
\t\t</div>
\t\t<video id=\"bg_video\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\" class=\"hidden-xs\">
\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainBackgroundVideo"));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundMp4"));
            foreach ($context['_seq'] as $context["_key"] => $context["mp4"]) {
                // line 35
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mp4"]) ? $context["mp4"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/mp4\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundWebm"));
            foreach ($context['_seq'] as $context["_key"] => $context["webm"]) {
                // line 38
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webm"]) ? $context["webm"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/webm\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "backgroundOgg"));
            foreach ($context['_seq'] as $context["_key"] => $context["ogg"]) {
                // line 41
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ogg"]) ? $context["ogg"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/ogg\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ogg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</video>
\t\t<img src=\"/public/images/denizen-cave.png\" class=\"visible-xs\">
\t</section>
\t
\t<section id=\"ourWork\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Work</h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "videoGrid"));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 56
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<div class=\"videoThumbnail\">
\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<h6>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "title"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "videoThumbnail"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 61
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
\t
\t<section id=\"aboutUs\" class=\"fullscreen\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>About Us</h4>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "aboutText"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"ourClients\" class=\"fullscreen\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Clients</h4>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries"), "section", array(0 => "clients"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 91
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "logo"), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 92
                echo "\t\t\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"clientLogo\">
\t\t\t\t\t\t\t<a href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "url"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 95
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
            // line 100
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t
\t<script src=\"/public/js/classie.js\"></script>
\t<script src=\"/public/js/application.js\"></script>
\t
\t<script type='text/javascript'>
\t\t\$(document).ready(sizeContent);

\t\t\t//Every resize of window
\t\t\t\$(window).resize(sizeContent);

\t\t\t//Dynamically assign height
\t\t\tfunction sizeContent() {
\t\t\t    var newHeight = \$(window).height();
\t\t\t    \$(\".fullscreen\").css(\"min-height\", newHeight);
\t\t}
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
        return array (  265 => 101,  259 => 100,  248 => 95,  244 => 94,  240 => 92,  235 => 91,  231 => 90,  217 => 79,  203 => 67,  194 => 63,  185 => 61,  181 => 60,  177 => 59,  173 => 58,  169 => 56,  165 => 55,  152 => 44,  146 => 43,  137 => 41,  132 => 40,  123 => 38,  118 => 37,  109 => 35,  104 => 34,  100 => 33,  89 => 24,  83 => 23,  74 => 21,  69 => 20,  60 => 18,  55 => 17,  46 => 15,  41 => 14,  37 => 13,  31 => 9,  28 => 8,);
    }
}
