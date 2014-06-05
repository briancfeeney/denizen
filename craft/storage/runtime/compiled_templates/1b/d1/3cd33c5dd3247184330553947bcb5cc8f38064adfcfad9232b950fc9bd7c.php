<?php

/* about */
class __TwigTemplate_1bd13cd33c5dd3247184330553947bcb5cc8f38064adfcfad9232b950fc9bd7c extends Craft\BaseTemplate
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


<section id=\"aboutUs\" class=\"fullscreen\">
\t<div class=\"container\">
\t\t<div class=\"heading\">
\t\t\t<h4>About Us</h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "aboutText"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<script type='text/javascript'>
\t\$(document).ready(sizeContent);

\t\t//Every resize of window
\t\t\$(window).resize(sizeContent);

\t\t//Dynamically assign height
\t\tfunction sizeContent() {
\t\t    var newHeight = \$(window).height();
\t\t    \$(\".fullscreen\").css(\"min-height\", newHeight);
\t}
</script>

";
    }

    public function getTemplateName()
    {
        return "about";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 19,  31 => 9,  28 => 8,);
    }
}
