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

\t<style type=\"text/css\">
\t\tbody { margin: 50px; font-family: sans-serif; background: #fff; }
\t\t#container { margin: 0 auto; width: 700px;
\t\t\t-webkit-box-shadow: 0 2px 10px rgba(0,0,0,0.1);
\t\t\t        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
\t\t}

\t\t#header, #footer { display: block; color: #fff; background: #da5a47; }
\t\t#header a, #footer a { color: #fff; }
\t\t#header { border-radius: 7px 7px 0 0; padding: 25px; }
\t\t#header:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }
\t\t#header a { text-decoration: none; }
\t\t#header h1 { float: left; margin: 0; font-weight: normal; font-size: 30px; line-height: 1; }
\t\t#header nav { display: block; float: right; }
\t\t#header nav ul { margin: 0; list-style-type: none; }
\t\t#header nav ul li { float: left; margin-left: 20px; }
\t\t#header nav ul li a { display: block; margin-top: 4px; line-height: 22px; }
\t\t#header nav ul li a:hover,
\t\t#header nav ul li a.active { border-bottom: 2px solid #fff; }
\t\t#header nav ul li a.active { cursor: default; }

\t\t#content { display: block; padding: 25px; background: #fff; }
\t\t#content h1 { margin-top: 0; font-size: 35px; font-weight: bold; }
\t\t#content a { color: #da5a47; text-decoration: none; }
\t\t#content a:hover { text-decoration: underline; }

\t\t#footer { border-radius: 0 0 7px 7px; padding: 15px; font-size: 12px; text-align: center; }
\t</style>
</head>

<body>
\t<div id=\"container\">
\t\t<header id=\"header\">
\t\t\t<h1><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a></h1>

\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("news"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "firstSegment") == "news")) {
            echo "class=\"active\"";
        }
        echo ">News</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>

\t\t<main id=\"content\" role=\"main\">
\t\t\t";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "\t\t</main>

\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ucfirst($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "serverName")), "html", null, true);
        echo ". All rights reserved  •  Built with <a href=\"http://buildwithcraft.com\">Craft</a>
\t\t</footer>
\t</div>
</body>
</html>
";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "\t\t\t\t<p>If you see me, you haven’t set your <code>";
        echo "{% block content %}…{% endblock %}";
        echo "</code> yet.</p>
\t\t\t\t<p>See Twig’s <a href=\"http://twig.sensiolabs.org/doc/templates.html#template-inheritance\">Template Inheritance</a> documentation for an explanation.</p>
\t\t\t";
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
        return array (  117 => 63,  114 => 62,  102 => 69,  97 => 66,  95 => 62,  82 => 56,  73 => 52,  35 => 17,  27 => 16,  20 => 11,  59 => 32,  48 => 30,  44 => 29,  37 => 25,  31 => 23,  28 => 22,);
    }
}
