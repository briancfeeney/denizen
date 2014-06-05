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
        $context["title"] = "What’s new in Craft 2.1";
        // line 3
        \Craft\craft()->templates->includeCssResource("css/whats-new.css");
        // line 7
        $context["url"] = "http://buildwithcraft.com/updates/2.1";
        // line 9
        ob_start();
        // line 10
        echo "\t<h1>Work wonders on your workflow.</h1>
\t<p>Craft 2.1 packs <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" target=\"_blank\"><strong>90</strong> new features and improvements</a>, with an emphasis on improving the workflow surrounding entries and users.</p>

\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/draft-notes.png"), "html", null, true);
        echo "\" alt=\"Draft name and notes modal\">
\t<h1>Remember what you’re working on.</h1>
\t<p>It’s now possible to give your drafts custom names, and even save some notes about them.</p>

\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/share-button.png"), "html", null, true);
        echo "\" alt=\"Share Entry button\">
\t<h1>Share what you’re working on.</h1>
\t<p>The new Share button lets you share unpublished drafts and prior versions of an entry with others, using a tokenized URL that bypasses user permissions.</p>

\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/version-notes.png"), "html", null, true);
        echo "\" alt=\"Entry version notes textbox\">
\t<h1>Remember what you changed.</h1>
\t<p>You can now enter some notes about the changes you’ve made when saving an entry.</p>

\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl("images/whats-new/entry-revision.png"), "html", null, true);
        echo "\" alt=\"“Revert entry to this version” button\">
\t<h1>Take back what you’ve changed.</h1>
\t<p>Make a change by mistake? No big deal with past versions’ new “Revert entry to this version” button.</p>

\t<h1>Lots more!</h1>
\t<p>Craft 2.1 also brings improvements to the user management workflow, adds some new templating features, and introduces new plugin APIs. See the <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">release notes</a> for the complete list.</p>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  78 => 5,  70 => 30,  62 => 25,  55 => 21,  48 => 17,  41 => 13,  36 => 11,  33 => 10,  31 => 9,  29 => 7,  27 => 3,  25 => 2,);
    }
}
