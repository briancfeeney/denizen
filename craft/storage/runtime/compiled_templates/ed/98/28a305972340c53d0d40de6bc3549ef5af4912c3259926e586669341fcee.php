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
\t<meta name=\"viewport\" content=\"width=device-width\" />
\t<meta name=\"keywords\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["about"]) ? $context["about"] : null), "keywords", array()), "html", null, true);
        echo "\">
\t
\t<title>";
        // line 19
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t
\t<link rel=\"home\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/css/denizen.css\" />
\t
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t<script src=\"/public/js/modernizr.custom.99139.js\"></script>\t
\t<script src=\"/public/js/videocontrols.js\"></script>\t
\t
\t<script type=\"text/javascript\" src=\"//use.typekit.net/zzt4jrb.js\"></script>
\t<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>
\t
</head>

<body ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "")) {
            echo "id=\"home\"";
        }
        echo ">
\t<header id=\"header\">
\t\t<div class=\"logo-container\">
\t\t\t<a href=\"/\"><img class=\"logo-splash\" src=\"/public/images/denizen-logo_white-outline.png\"></a>
\t\t</div>
\t\t<nav>
\t\t\t<ul>
\t\t\t\t<li><a href=\"/#ourWork\" ";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "work")) {
            echo "class=\"active\"";
        }
        echo ">Work</a></li>
\t\t\t\t<li><a href=\"/#ourClients\" ";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "Clients")) {
            echo "class=\"active\"";
        }
        echo ">Clients</a></li>
\t\t\t\t<li><a href=\"/#aboutUs\" ";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">About Us</a></li>
\t\t\t\t<li><a href=\"/#footer\" ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">Contact</a></li>
\t\t\t\t<!-- <li><a href=\"/#aboutUs\" ";
        // line 45
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "news")) {
            echo "class=\"active\"";
        }
        echo ">News</a></li> -->
\t\t\t</ul>
\t\t</nav>
\t</header>

\t<main id=\"content\" role=\"main\">
\t\t";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "\t</main>

\t<footer id=\"footer\">
\t\t<span>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "address", array()), "html", null, true);
        echo "</span> <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contactInfo"]) ? $context["contactInfo"] : null), "phone", array()), "html", null, true);
        echo "</span> <span><a href=\"mailto:info@denizen.tv\">info@denizen.tv</a></span>
\t</footer>

</body>
</html>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
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
        return array (  127 => 52,  124 => 51,  112 => 58,  107 => 55,  105 => 51,  94 => 45,  88 => 44,  82 => 43,  76 => 42,  70 => 41,  58 => 34,  42 => 21,  33 => 19,  28 => 17,  20 => 11,);
    }
}
