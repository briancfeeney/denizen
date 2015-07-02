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
        	"week",
        	"weeks",
        	"day",
        	"days",
        	"hour",
        	"hours",
        	"minute",
        	"minutes",
        	"second",
        	"seconds",
        	"Log out now",
        	"Keep me logged in",
        	"Your session will expire in {time}.",
        	"Your session has ended.",
        	"Enter your password to log back in.",
        	"Password",
        	"Login",
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
        	"Instructions",
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"Select",
        	"New order saved.",
        	"New position saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"{ctrl}C to copy.",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Actions",
        	"Continue",
        	"Cancel",
        	"Any changes will be lost if you leave this page.",
        	"What do you want to do with their content?",
        	"Transfer it to:",
        	"Choose a user",
        	"Delete it",
        	"Delete user",
        	"Delete users",
        	"(blank)",
        	"Are you sure you want to delete the selected blocks?"
        );
        // line 85
        $context["forceConfirmUnload"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "hasFlash", array(0 => "error"), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        // line 89
        echo "\t";
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "devMode", array()))) {
            // line 90
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 92
        echo "
\t";
        // line 93
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "areAlertsCached", array(), "method")) {
            // line 94
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method");
            // line 95
            echo "\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 96
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 97
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 98
                    echo "\t\t\t\t\t<li>";
                    echo $context["alert"];
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "\t\t\t</ul>
\t\t";
            }
            // line 102
            echo "\t";
        } else {
            // line 103
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 104
            echo "\t";
        }
        // line 105
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\">
\t\t\t\t";
        // line 109
        $context["task"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "getRunningTask", array(), "method");
        // line 110
        echo "\t\t\t\t";
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 111
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs((("Craft.cp.setRunningTaskInfo(" . $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "getInfo", array(), "method"))) . ");"));
            // line 112
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.trackTaskProgress();");
            // line 113
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "areTasksPending", array(), "method")) {
            // line 114
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.runPendingTasks();");
            // line 115
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "haveTasksFailed", array(), "method")) {
            // line 116
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.setRunningTaskInfo({ status: \"error\" });");
            // line 117
            echo "\t\t\t\t";
        }
        // line 118
        echo "
\t\t\t\t";
        // line 119
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 120
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method")) {
                // line 121
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getTotalAvailableUpdates", array(), "method");
                // line 122
                echo "\t\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 123
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 125
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 126
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 127
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 130
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 136
                echo "\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t";
        }
        // line 138
        echo "
\t\t\t\t";
        // line 139
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array())) {
            // line 140
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 141
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 144
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t";
            // line 146
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 147
                echo "\t\t\t\t\t\t\t\t<h6>";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t";
                // line 149
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $context["handle"])), "html", null, true);
                    echo "\" data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 157
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 159
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 162
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 163
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()))) {
            // line 164
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 166
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
        // line 172
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t((isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 177
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 178
            if ($this->getAttribute($context["item"], "sel", array())) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            // line 180
            if (($this->getAttribute($context["item"], "badge", array(), "any", true, true) && $this->getAttribute($context["item"], "badge", array()))) {
                // line 181
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "badge", array()), "html", null, true);
                echo "</span>";
            }
            // line 183
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 195
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "getFlash", array(0 => $context["type"]), "method");
            // line 196
            echo "\t\t\t\t\t";
            if ((isset($context["message"]) ? $context["message"] : null)) {
                // line 197
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 199
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 204
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 227
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 230
        $this->displayBlock('main', $context, $blocks);
        // line 263
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 268
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "releaseDate", array()), "localeDate", array()), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 269
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 270
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 272
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year", array()), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 275
        if (((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null)) || ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getPath", array()) == "settings")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "canUpgradeEdition", array(), "method"))) {
            // line 276
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go nowrap\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 278
        echo "\t\t</div>
\t</div>

\t";
        // line 281
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "hasWrongEdition", array(), "method")) {
            // line 282
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 284
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 285
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 288
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 289
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEdition", array(), "method"))) {
                // line 290
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 204
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 205
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 206
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 208
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 209
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 214
        echo "
\t\t\t\t";
        // line 215
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 216
            echo "\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
\t\t\t\t";
        }
        // line 218
        echo "
\t\t\t\t";
        // line 219
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 220
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 224
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 230
    public function block_main($context, array $blocks = array())
    {
        // line 231
        echo "\t\t\t\t";
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ((isset($context["sidebar"]) ? $context["sidebar"] : null)) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 232
        echo "\t\t\t\t";
        $context["hasSidebar"] = (!twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null)));
        // line 233
        echo "\t\t\t\t";
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null))));
        // line 234
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 238
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 239
            echo "\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("_includes/tabs")->display($context);
            // line 240
            echo "\t\t\t\t\t\t\t";
        }
        // line 241
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 242
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            echo " has-sidebar";
        }
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 243
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            // line 244
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 245
            echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 248
        echo "
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t";
        // line 250
        $this->displayBlock('content', $context, $blocks);
        // line 253
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 255
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            // line 256
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 250
    public function block_content($context, array $blocks = array())
    {
        // line 251
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) ? $context["content"] : null)) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
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
        return array (  686 => 251,  683 => 250,  675 => 258,  667 => 256,  665 => 255,  661 => 253,  659 => 250,  655 => 248,  649 => 245,  646 => 244,  644 => 243,  635 => 242,  632 => 241,  629 => 240,  626 => 239,  624 => 238,  618 => 234,  615 => 233,  612 => 232,  609 => 231,  606 => 230,  600 => 224,  594 => 221,  591 => 220,  589 => 219,  586 => 218,  580 => 216,  578 => 215,  575 => 214,  570 => 211,  559 => 209,  555 => 208,  551 => 206,  548 => 205,  545 => 204,  536 => 292,  530 => 290,  528 => 289,  524 => 288,  518 => 285,  514 => 284,  510 => 282,  508 => 281,  503 => 278,  495 => 276,  493 => 275,  482 => 272,  474 => 270,  472 => 269,  466 => 268,  458 => 267,  452 => 263,  450 => 230,  445 => 227,  443 => 204,  437 => 200,  431 => 199,  423 => 197,  420 => 196,  417 => 195,  413 => 194,  403 => 186,  395 => 183,  390 => 181,  388 => 180,  386 => 179,  379 => 178,  374 => 177,  370 => 176,  359 => 172,  347 => 166,  339 => 164,  337 => 163,  331 => 162,  325 => 159,  321 => 157,  316 => 154,  309 => 152,  296 => 150,  292 => 149,  286 => 147,  282 => 146,  277 => 144,  269 => 141,  266 => 140,  264 => 139,  261 => 138,  258 => 137,  255 => 136,  252 => 135,  249 => 134,  242 => 130,  236 => 129,  229 => 128,  226 => 127,  223 => 126,  220 => 125,  217 => 124,  214 => 123,  211 => 122,  208 => 121,  205 => 120,  203 => 119,  200 => 118,  197 => 117,  194 => 116,  191 => 115,  188 => 114,  185 => 113,  182 => 112,  179 => 111,  176 => 110,  174 => 109,  168 => 105,  165 => 104,  162 => 103,  159 => 102,  155 => 100,  146 => 98,  142 => 97,  139 => 96,  136 => 95,  133 => 94,  131 => 93,  128 => 92,  122 => 90,  119 => 89,  116 => 88,  111 => 85,  30 => 4,  28 => 3,);
    }
}
