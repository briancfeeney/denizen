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
\t<section id=\"home-top\">
\t\t<div class=\"logo-container\">
\t\t\t<a href=\"/#home\"><img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\"></a>
\t\t</div>
\t\t<video id=\"bg_video\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\" class=\"hidden-xs\">
\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainBackgroundVideo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 16
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "backgroundMp4", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mp4"]) {
                // line 17
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mp4"], "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/mp4\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mp4'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "backgroundWebm", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["webm"]) {
                // line 20
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["webm"], "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/webm\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "backgroundOgg", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ogg"]) {
                // line 23
                echo "\t\t\t\t\t<source src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ogg"], "getUrl", array(), "method"), "html", null, true);
                echo "\" type=\"video/ogg\">
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ogg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</video>
\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "mainBackgroundVideo", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 28
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["block"], "backgroundImage", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                echo "\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrl", array(), "method"), "html", null, true);
                echo "\" class=\"visible-xs\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t</section>
\t
\t<section id=\"ourWork\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Work</h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["home"]) ? $context["home"] : null), "videoGrid", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 42
            echo "\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-6\">
\t\t\t\t\t\t<div class=\"videoThumbnail\">
\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "url", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"videoInfo\">
\t\t\t\t\t\t\t\t\t";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["video"], "client", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "title", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t\t\t\t\t\t<h6>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", array()), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["video"], "videoThumbnail", array()), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t</div>
\t\t\t
\t\t</div>
\t</section>
\t
\t<section id=\"ourClients\" class=\"fullscreen\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h4>Our Clients</h4>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "entries", array()), "section", array(0 => "clients"), "method"), "find", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 70
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["entry"], "logo", array()), "limit", array(0 => 1), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 71
                echo "\t\t\t\t\t<div class=\"col-md-2 col-sm-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"clientLogo\">
\t\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "url", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t</div>
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
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "aboutText", array()), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
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
\t
\t<script>
\t\t\$(function() {
\t\t  \$('a[href*=#]:not([href=#])').click(function() {
\t\t    if (location.pathname.replace(/^\\//,'') == this.pathname.replace(/^\\//,'') && location.hostname == this.hostname) {
\t\t      var target = \$(this.hash);
\t\t      target = target.length ? target : \$('[name=' + this.hash.slice(1) +']');
\t\t      if (target.length) {
\t\t        \$('html,body').animate({
\t\t          scrollTop: target.offset().top
\t\t        }, 1000);
\t\t        return false;
\t\t      }
\t\t    }
\t\t  });
\t\t});
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
        return array (  243 => 91,  230 => 80,  224 => 79,  213 => 74,  209 => 73,  205 => 71,  200 => 70,  196 => 69,  183 => 58,  174 => 54,  165 => 52,  161 => 51,  155 => 49,  146 => 47,  142 => 46,  137 => 44,  133 => 42,  129 => 41,  118 => 32,  112 => 31,  103 => 29,  98 => 28,  94 => 27,  91 => 26,  85 => 25,  76 => 23,  71 => 22,  62 => 20,  57 => 19,  48 => 17,  43 => 16,  39 => 15,  31 => 9,  28 => 8,);
    }
}
