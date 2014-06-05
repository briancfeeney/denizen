<?php

/* _layout */
class __TwigTemplate_ed9828a305972340c53d0d40de6bc3549ef5af4912c3259926e586669341fcee extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
\t<title>";
        // line 16
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t<link rel=\"home\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/denizen.css\" />
\t
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"/public/js/modernizr.custom.99139.js\"></script>\t
\t
\t<script type=\"text/javascript\" src=\"//use.typekit.net/zzt4jrb.js\"></script>
\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
\t
</head>

<body ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
            echo "id=\"home\"";
        }
        echo ">
\t<header id=\"header\">
\t\t<div class=\"logo-container\">
\t\t\t<a href=\"/home\"><img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\"></a>
\t\t</div>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/#ourWork\" ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "work")) {
            echo "class=\"active\"";
        }
        echo ">Our Work</a></li>
\t\t\t\t<li><a href=\"/about\" ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "about")) {
            echo "class=\"active\"";
        }
        echo ">About Us</a></li>
\t\t\t\t<!-- <li><a href=\"/#aboutUs\" ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "news")) {
            echo "class=\"active\"";
        }
        echo ">News</a></li> -->
\t\t\t</ul>
\t\t</nav>
\t</header>

\t<main id=\"content\" role=\"main\">
\t\t";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "\t</main>

\t<footer id=\"footer\">
\t\t<span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address"), "html", null, true);
        echo "</span> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "phone"), "html", null, true);
        echo "</span>
\t</footer>

</body>
</html>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "\t\t\t<p>If you see me, you haven’t set your <code>";
        echo "{% block content %}…{% endblock %}";
        echo "</code> yet.</p>
\t\t\t<p>See Twig’s <a href=\"http://twig.sensiolabs.org/doc/templates.html#template-inheritance\">Template Inheritance</a> documentation for an explanation.</p>
\t\t";
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  104 => 44,  92 => 51,  87 => 48,  85 => 44,  74 => 38,  68 => 37,  62 => 36,  50 => 29,  35 => 17,  27 => 16,  20 => 11,);
    }
}
