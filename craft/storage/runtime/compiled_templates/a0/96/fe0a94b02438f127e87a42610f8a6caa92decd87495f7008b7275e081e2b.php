<?php

/* _layouts/cp */
class __TwigTemplate_a096fe0a94b02438f127e87a42610f8a6caa92decd87495f7008b7275e081e2b extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        \Craft\craft()->templates->includeCssResource("css/cp.css", true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"Pending",
        	"Failed",
        	"Failed task",
        	"Options",
        	"Try again",
        	"Show sidebar",
        	"Hide sidebar",
        	"1 update available",
        	"{num} updates available",
        	"More",
        	"Attempted to get the height of a modal whose container has not been set.",
        	"Attempted to get the width of a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Are you sure you want to transfer your license to this domain?",
        	"License transferred.",
        	"An unknown error occurred.",
        	"Cancel",
        	"Close",
        	"Create",
        	"Done",
        	"Delete",
        	"Handle",
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"New order saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"View file",
        	"Edit properties",
        	"Rename file",
        	"Copy reference tag",
        	"Delete file",
        	"{ctrl}C to copy.",
        	"Are you sure you want to delete these {number} files?",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Please enter your current password.",
        	"Continue",
        	"Cancel"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin") && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config"), "devMode"))) {
            // line 65
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "areAlertsCached", array(), "method")) {
            // line 69
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method");
            // line 70
            echo "\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 71
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 73
                    echo "\t\t\t\t\t<li>";
                    echo (isset($context["alert"]) ? $context["alert"] : null);
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t</ul>
\t\t";
            }
            // line 77
            echo "\t";
        } else {
            // line 78
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 79
            echo "\t";
        }
        // line 80
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\" class=\"right\">
\t\t\t\t";
        // line 84
        $context["task"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "getRunningTask", array(), "method");
        // line 85
        echo "\t\t\t\t";
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 86
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs((("Craft.cp.setRunningTaskInfo(" . twig_jsonencode_filter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "getInfo", array(), "method"))) . ");"));
            // line 87
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.trackTaskProgress();");
            // line 88
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "areTasksPending", array(), "method")) {
            // line 89
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.runPendingTasks();");
            // line 90
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks"), "haveTasksFailed", array(), "method")) {
            // line 91
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.setRunningTaskInfo({ status: \"error\" });");
            // line 92
            echo "\t\t\t\t";
        }
        // line 93
        echo "
\t\t\t\t";
        // line 94
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 95
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method")) {
                // line 96
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getTotalAvailableUpdates", array(), "method");
                // line 97
                echo "\t\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 100
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 102
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 105
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t";
            } else {
                // line 110
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 111
                echo "\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t";
        }
        // line 113
        echo "
\t\t\t\t";
        // line 114
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin")) {
            // line 115
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 119
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . (isset($context["handle"]) ? $context["handle"] : null))), "html", null, true);
                    echo "\" data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 131
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 133
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 137
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin"))) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t((isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp"), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 151
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, (isset($context["handle"]) ? $context["handle"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 152
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "sel")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
            echo "\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            // line 154
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge", array(), "any", true, true) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"))) {
                // line 155
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "badge"), "html", null, true);
                echo "</span>";
            }
            // line 157
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 169
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session"), "getFlash", array(0 => (isset($context["type"]) ? $context["type"] : null)), "method");
            // line 170
            echo "\t\t\t\t\t";
            if ((isset($context["message"]) ? $context["message"] : null)) {
                // line 171
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 178
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 201
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 204
        $this->displayBlock('main', $context, $blocks);
        // line 235
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 240
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "releaseDate"), "localeDate"), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 241
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 242
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year"), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 247
        if (((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null)) || ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request"), "getPath") == "settings")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "canUpgradeEdition", array(), "method"))) {
            // line 248
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 250
        echo "\t\t</div>
\t</div>

\t";
        // line 253
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "hasWrongEdition", array(), "method")) {
            // line 254
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 256
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 257
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 260
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 261
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app"), "getLicensedEdition", array(), "method"))) {
                // line 262
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 264
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 178
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 179
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 180
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 182
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 183
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : null), "label"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 188
        echo "
\t\t\t\t";
        // line 189
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 190
            echo "\t\t\t\t\t<h1>";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "</h1>
\t\t\t\t";
        }
        // line 192
        echo "
\t\t\t\t";
        // line 193
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 194
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 198
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 204
    public function block_main($context, array $blocks = array())
    {
        // line 205
        echo "\t\t\t\t";
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ((isset($context["sidebar"]) ? $context["sidebar"] : null)) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 206
        echo "\t\t\t\t";
        $context["hasSidebar"] = (!twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null)));
        // line 207
        echo "\t\t\t\t";
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null))));
        // line 208
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 212
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 213
            echo "\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("_includes/tabs")->display($context);
            // line 214
            echo "\t\t\t\t\t\t\t";
        }
        // line 215
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 216
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            echo " has-sidebar";
        }
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 217
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 219
            echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 222
        echo "
\t\t\t\t\t\t\t\t";
        // line 223
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "
\t\t\t\t\t\t\t\t";
        // line 227
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 223
    public function block_content($context, array $blocks = array())
    {
        // line 224
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) ? $context["content"] : null)) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  236 => 113,  233 => 112,  230 => 111,  227 => 110,  224 => 109,  217 => 105,  211 => 104,  204 => 103,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 98,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 91,  166 => 90,  163 => 89,  160 => 88,  157 => 87,  154 => 86,  151 => 85,  149 => 84,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  130 => 75,  121 => 73,  117 => 72,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  91 => 63,  30 => 4,  28 => 3,  114 => 71,  108 => 69,  105 => 34,  98 => 30,  94 => 64,  85 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  64 => 21,  61 => 20,  54 => 16,  50 => 14,  48 => 13,  45 => 12,  42 => 11,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
