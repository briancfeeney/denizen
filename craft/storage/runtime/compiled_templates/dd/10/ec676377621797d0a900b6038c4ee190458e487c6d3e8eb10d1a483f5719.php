<?php

/* whats-new */
class __TwigTemplate_dd10ec676377621797d0a900b6038c4ee190458e487c6d3e8eb10d1a483f5719 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = "What’s new in Craft 2.3";
        // line 3
        \Craft\craft()->templates->includeCssResource("css/whats-new.css");
        // line 7
        $context["url"] = "http://buildwithcraft.com/updates/2.3";
        // line 9
        ob_start();
        // line 10
        echo "\t<header>
\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
\t\t<p>Craft 2.3 packs <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">over <strong>230</strong> new features and improvements</a>, aimed to make working with content an even better experience than ever before.</p>
\t</header>

\t<div id=\"video-wrapper\">
\t\t<iframe id=\"video\" class=\"video\" data-vimeo-id=\"113308175\" src=\"//player.vimeo.com/video/113308175\" width=\"870\" height=\"489\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
\t</div>

\t<h1>Editing on the Index Pages</h1>
\t<p>It’s now possible to make changes to your entries, categories, assets, or users right from their index pages. You can edit a user from a modal window, update the status on a batch of entries, replace a file with a new one, bulk-delete a few unneeded categories, and more.</p>
\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/entry-index-editor.png"), "html", null, true);
        echo "\" alt=\"An entry being edited on the Entries index page.\">

\t<h1>Matrix, Revamped</h1>
\t<p>Matrix fields have a new look, and it’s now possible to reorder, expand/collapse, enable/disable, and delete multiple blocks at once. Matrix block type fields can now have instruction text, and they’re no longer required to have names.</p>
\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/matrix-field-batch-menu.png"), "html", null, true);
        echo "\" alt=\"A Matrix field with multiple blocks selected and a context menu open.\">

\t<h1>Five New Languages</h1>
\t<p>The Control Panel has been translated into five new languages: Simplified Chinese, Hebrew, Korean, Spanish, and Swedish. That brings the grand total up to <a href=\"http://buildwithcraft.com/help/cp-languages\">15 supported languages!</a></p>
\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/assets-index-in-hebrew.png"), "html", null, true);
        echo "\" alt=\"The Assets index page translated into Hebrew\">

\t<h1>More Scalable</h1>
\t<p>Several areas of the Control Panel have been updated to do a better job handling sites with hundreds (or even thousands) of entries, categories, users, and assets.</p>

\t<h1>More Extensible</h1>
\t<p>Plugins can add their own tools to element index pages using the new <a href=\"http://buildwithcraft.com/docs/plugins/element-actions\">Element Actions</a> APIs, and there are some <a href=\"http://buildwithcraft.com/docs/plugins/hooks-reference#modifyEntryTableAttributes\">new hooks</a> that make it possible to customize the index pages’ table columns.</p>

\t<h1>The List Goes On</h1>
\t<p>Check out the <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">release notes</a> for a complete list of all that’s changed!</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        \Craft\craft()->templates->includeJsResource("lib/jquery.fitvids.js");
        // line 42
        \Craft\craft()->templates->includeJs("\$(\"#content\").fitVids();");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "whats-new";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 5,  85 => 42,  83 => 41,  78 => 38,  66 => 29,  59 => 25,  52 => 21,  40 => 12,  36 => 11,  33 => 10,  31 => 9,  29 => 7,  27 => 3,  25 => 2,);
    }
}
