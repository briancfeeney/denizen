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
        return array (  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  625 => 107,  613 => 103,  601 => 102,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  382 => 50,  371 => 49,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  290 => 30,  279 => 29,  256 => 24,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  147 => 165,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  107 => 110,  99 => 100,  95 => 97,  87 => 87,  79 => 77,  23 => 7,  92 => 62,  90 => 61,  51 => 42,  47 => 37,  39 => 27,  36 => 8,  33 => 7,  21 => 2,  72 => 21,  53 => 13,  44 => 10,  19 => 4,  75 => 72,  56 => 9,  49 => 6,  40 => 20,  38 => 19,  34 => 18,  24 => 3,  22 => 2,  213 => 77,  209 => 76,  200 => 74,  193 => 70,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  165 => 1,  161 => 62,  153 => 60,  145 => 58,  141 => 57,  133 => 55,  129 => 54,  125 => 53,  113 => 50,  109 => 49,  101 => 47,  86 => 37,  83 => 82,  78 => 23,  73 => 32,  69 => 42,  67 => 62,  65 => 40,  63 => 57,  59 => 52,  57 => 28,  55 => 47,  52 => 7,  43 => 32,  41 => 15,  35 => 22,  655 => 224,  652 => 223,  644 => 230,  636 => 108,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 95,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 70,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 54,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 45,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 34,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 25,  262 => 123,  258 => 122,  252 => 119,  244 => 20,  241 => 115,  239 => 114,  236 => 113,  233 => 19,  230 => 80,  227 => 110,  224 => 79,  217 => 105,  211 => 104,  204 => 75,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 69,  186 => 97,  183 => 96,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 64,  166 => 90,  163 => 89,  160 => 88,  157 => 61,  154 => 86,  151 => 170,  149 => 59,  143 => 160,  140 => 79,  137 => 56,  134 => 77,  130 => 75,  121 => 52,  117 => 51,  111 => 115,  106 => 68,  103 => 105,  97 => 65,  91 => 92,  30 => 6,  28 => 3,  114 => 71,  108 => 69,  105 => 48,  98 => 30,  94 => 64,  85 => 27,  80 => 20,  77 => 53,  74 => 24,  71 => 67,  68 => 19,  64 => 10,  61 => 25,  54 => 16,  50 => 12,  48 => 13,  45 => 17,  42 => 9,  31 => 17,  29 => 6,  27 => 12,  25 => 4,);
    }
}
