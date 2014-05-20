<?php

/* _includes/forms */
class __TwigTemplate_7f67272269ac86ef956bcd83851a0a1dedb5afb3c8ac77db96c6eceb8c468f94 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 17
        echo "

";
        // line 22
        echo "

";
        // line 27
        echo "

";
        // line 32
        echo "

";
        // line 37
        echo "

";
        // line 42
        echo "

";
        // line 47
        echo "

";
        // line 52
        echo "

";
        // line 57
        echo "

";
        // line 62
        echo "

";
        // line 67
        echo "

";
        // line 72
        echo "

";
        // line 77
        echo "

";
        // line 82
        echo "

";
        // line 87
        echo "

";
        // line 92
        echo "

";
        // line 97
        echo "

";
        // line 100
        echo "

";
        // line 105
        echo "

";
        // line 110
        echo "

";
        // line 115
        echo "

";
        // line 120
        echo "

";
        // line 125
        echo "

";
        // line 130
        echo "

";
        // line 135
        echo "

";
        // line 140
        echo "

";
        // line 145
        echo "

";
        // line 150
        echo "

";
        // line 160
        echo "

";
        // line 165
        echo "

";
        // line 170
        echo "

";
        // line 175
        echo "

";
        // line 180
        echo "

";
    }

    // line 1
    public function geterrorList($_errors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $_errors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $this->env->loadTemplate("_includes/forms/errorList")->display($context);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function gethidden($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            $this->env->loadTemplate("_includes/forms/hidden")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gettext($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "\t";
            $this->env->loadTemplate("_includes/forms/text")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getpassword($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "\t";
            $this->env->loadTemplate("_includes/forms/text")->display(twig_array_merge((isset($context["config"]) ? $context["config"] : null), array("type" => "password")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getdate($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            $this->env->loadTemplate("_includes/forms/date")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function gettime($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "\t";
            $this->env->loadTemplate("_includes/forms/time")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getcolor($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "\t";
            $this->env->loadTemplate("_includes/forms/color")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gettextarea($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "\t";
            $this->env->loadTemplate("_includes/forms/textarea")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getselect($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "\t";
            $this->env->loadTemplate("_includes/forms/select")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getmultiselect($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "\t";
            $this->env->loadTemplate("_includes/forms/multiselect")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function getcheckbox($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "\t";
            $this->env->loadTemplate("_includes/forms/checkbox")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getcheckboxGroup($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "\t";
            $this->env->loadTemplate("_includes/forms/checkboxGroup")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getcheckboxSelect($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "\t";
            $this->env->loadTemplate("_includes/forms/checkboxSelect")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getradio($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "\t";
            $this->env->loadTemplate("_includes/forms/radio")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getradioGroup($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "\t";
            $this->env->loadTemplate("_includes/forms/radioGroup")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getfile($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "\t";
            $this->env->loadTemplate("_includes/forms/file")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getlightswitch($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "\t";
            $this->env->loadTemplate("_includes/forms/lightswitch")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function geteditableTable($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "\t";
            $this->env->loadTemplate("_includes/forms/editableTable")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function getelementSelect($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "\t";
            $this->env->loadTemplate("_includes/forms/elementSelect")->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getfield($_config = null, $_input = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
            "input" => $_input,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "\t";
            $this->env->loadTemplate("_includes/forms/field")->display(twig_array_merge((isset($context["config"]) ? $context["config"] : null), array("input" => (isset($context["input"]) ? $context["input"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function gettextField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "text", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getpasswordField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "password", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function getdateField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "date", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 122
    public function gettimeField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 123
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "time", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getcolorField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "color", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function getdateTimeField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => ($this->getAttribute($this, "date", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method") . $this->getAttribute($this, "time", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 137
    public function gettextareaField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 138
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "textarea", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 142
    public function getselectField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 143
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "select", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 147
    public function getmultiselectField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 148
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "multiselect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 152
    public function getcheckboxField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 153
            echo "\t<div class=\"field checkbox";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first"))) {
                echo " first";
            }
            echo "\"";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id"))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id"), "html", null, true);
                echo "-field\"";
            }
            echo ">
\t\t";
            // line 154
            echo $this->getAttribute($this, "checkbox", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method");
            echo "
\t\t";
            // line 155
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions"))) {
                // line 156
                echo "\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions")), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 158
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 162
    public function getcheckboxSelectField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 163
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "checkboxSelect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 167
    public function getradioGroupField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 168
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "radioGroup", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 172
    public function getfileField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 173
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "file", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 177
    public function getlightswitchField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 178
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "lightswitch", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 182
    public function geteditableTableField($_config = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $_config,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 183
            echo "\t";
            ob_start();
            $this->env->loadTemplate("_includes/forms/editableTable")->display((isset($context["config"]) ? $context["config"] : null));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 184
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => (isset($context["input"]) ? $context["input"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  589 => 95,  555 => 89,  543 => 85,  532 => 84,  509 => 79,  497 => 75,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  188 => 9,  159 => 180,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  127 => 135,  123 => 130,  119 => 125,  111 => 115,  103 => 105,  99 => 100,  79 => 77,  51 => 42,  47 => 37,  39 => 27,  53 => 15,  46 => 12,  21 => 2,  42 => 10,  27 => 12,  23 => 7,  19 => 4,  80 => 20,  75 => 72,  49 => 6,  40 => 9,  38 => 19,  34 => 18,  31 => 17,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  189 => 69,  185 => 68,  177 => 66,  169 => 64,  165 => 1,  157 => 61,  153 => 60,  149 => 59,  145 => 58,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  105 => 48,  101 => 47,  91 => 92,  86 => 37,  83 => 82,  78 => 34,  73 => 32,  71 => 67,  69 => 29,  67 => 62,  65 => 27,  63 => 57,  61 => 25,  59 => 52,  57 => 23,  55 => 47,  52 => 7,  50 => 14,  45 => 11,  43 => 32,  35 => 22,  29 => 6,  25 => 4,  656 => 225,  653 => 224,  645 => 231,  637 => 229,  635 => 228,  632 => 227,  630 => 224,  627 => 223,  621 => 220,  618 => 219,  616 => 218,  607 => 217,  604 => 216,  601 => 102,  598 => 214,  596 => 213,  590 => 209,  587 => 208,  584 => 207,  581 => 206,  578 => 94,  572 => 199,  566 => 90,  563 => 195,  561 => 194,  558 => 193,  552 => 191,  550 => 190,  547 => 189,  542 => 186,  531 => 184,  527 => 183,  523 => 181,  520 => 80,  517 => 179,  508 => 265,  502 => 263,  500 => 262,  496 => 261,  490 => 258,  486 => 74,  482 => 255,  480 => 254,  475 => 251,  467 => 249,  465 => 248,  454 => 245,  446 => 243,  444 => 242,  438 => 241,  430 => 240,  424 => 236,  422 => 205,  417 => 59,  415 => 179,  409 => 175,  403 => 174,  395 => 172,  392 => 171,  389 => 170,  385 => 169,  375 => 161,  367 => 158,  362 => 156,  360 => 155,  358 => 154,  351 => 153,  346 => 152,  342 => 151,  331 => 147,  319 => 141,  311 => 139,  309 => 138,  303 => 137,  297 => 134,  293 => 132,  287 => 128,  281 => 127,  268 => 125,  263 => 124,  259 => 123,  253 => 120,  245 => 117,  242 => 116,  240 => 115,  237 => 114,  234 => 113,  231 => 112,  228 => 111,  225 => 110,  218 => 106,  212 => 105,  205 => 104,  202 => 103,  199 => 10,  196 => 101,  193 => 70,  190 => 99,  187 => 98,  184 => 97,  181 => 67,  179 => 95,  176 => 2,  173 => 65,  170 => 92,  167 => 91,  164 => 90,  161 => 62,  158 => 88,  155 => 175,  152 => 86,  150 => 85,  144 => 81,  141 => 57,  138 => 79,  135 => 145,  131 => 140,  122 => 74,  118 => 73,  112 => 71,  109 => 49,  107 => 110,  104 => 68,  95 => 97,  115 => 120,  110 => 40,  108 => 36,  102 => 33,  98 => 66,  94 => 30,  92 => 64,  87 => 87,  72 => 22,  68 => 21,  64 => 6,  62 => 18,  56 => 9,  41 => 10,  37 => 8,  33 => 6,  30 => 4,  28 => 4,  26 => 5,  24 => 3,);
    }
}
