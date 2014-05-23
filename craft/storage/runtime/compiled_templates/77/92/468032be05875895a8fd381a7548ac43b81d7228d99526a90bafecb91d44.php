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
\t<video id=\"bg-image\" style=\"background-image:url('/public/images/denizen-cave.png');left:0;\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" volume=\"0\">

\t</video>

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
        return array (  31 => 9,  28 => 8,);
    }
}
