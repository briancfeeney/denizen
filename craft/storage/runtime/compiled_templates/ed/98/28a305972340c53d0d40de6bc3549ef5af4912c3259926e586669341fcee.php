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
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>\t
\t
</head>

<body ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "")) {
            echo "class=\"home\"";
        }
        echo ">
\t<header id=\"header\">
\t\t<!-- <h1><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a></h1> -->
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("work"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "work")) {
            echo "class=\"active\"";
        }
        echo ">Work</a></li>
\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("about"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "about")) {
            echo "class=\"active\"";
        }
        echo ">About</a></li>
\t\t\t\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("news"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "news")) {
            echo "class=\"active\"";
        }
        echo ">News</a></li>
\t\t\t</ul>
\t\t</nav>
\t</header>

\t<main id=\"content\" role=\"main\">
\t\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t</main>

\t<footer id=\"footer\">
\t\t<span>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address"), "html", null, true);
        echo "</span> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "phone"), "html", null, true);
        echo "</span>
\t</footer>

</body>
</html>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
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
        return array (  112 => 39,  109 => 38,  97 => 45,  92 => 42,  90 => 38,  77 => 32,  69 => 31,  61 => 30,  53 => 27,  46 => 25,  35 => 17,  27 => 16,  20 => 11,);
    }
}
