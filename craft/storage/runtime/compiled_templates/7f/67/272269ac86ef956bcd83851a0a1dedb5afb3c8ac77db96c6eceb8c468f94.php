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
        // line 161
        echo "

";
        // line 166
        echo "

";
        // line 171
        echo "

";
        // line 176
        echo "

";
        // line 181
        echo "

";
        // line 187
        echo "

";
    }

    // line 1
    public function geterrorList($__errors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
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
    public function gethidden($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function gettext($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getpassword($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getdate($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function gettime($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcolor($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function gettextarea($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getselect($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getmultiselect($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcheckbox($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcheckboxGroup($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcheckboxSelect($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getradio($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getradioGroup($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getfile($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getlightswitch($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function geteditableTable($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getelementSelect($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getfield($__config__ = null, $__input__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "input" => $__input__,
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
    public function gettextField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getpasswordField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getdateField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function gettimeField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcolorField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getdateTimeField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function gettextareaField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getselectField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getmultiselectField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
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
    public function getcheckboxField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 153
            echo "\t";
            $context["instructions"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions", array(), "any", true, true)) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions", array())) : (""));
            // line 154
            echo "<div class=\"field checkboxfield";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first", array()))) {
                echo " first";
            }
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                echo " has-instructions";
            }
            echo "\"";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array()))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array()), "html", null, true);
                echo "-field\"";
            }
            echo ">
\t\t";
            // line 155
            echo $this->getAttribute($this, "checkbox", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method");
            echo "
\t\t";
            // line 156
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                // line 157
                echo "\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 159
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 163
    public function getcheckboxSelectField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
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

    // line 168
    public function getradioGroupField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 169
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

    // line 173
    public function getfileField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 174
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

    // line 178
    public function getlightswitchField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 179
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

    // line 183
    public function geteditableTableField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 184
            echo "\t";
            ob_start();
            $this->env->loadTemplate("_includes/forms/editableTable")->display((isset($context["config"]) ? $context["config"] : null));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 185
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

    // line 189
    public function getelementSelectField($__config__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 190
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "elementSelect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
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
        return array (  1049 => 190,  1038 => 189,  1024 => 185,  1019 => 184,  1008 => 183,  994 => 179,  983 => 178,  969 => 174,  958 => 173,  944 => 169,  933 => 168,  919 => 164,  908 => 163,  896 => 159,  890 => 157,  888 => 156,  884 => 155,  868 => 154,  865 => 153,  854 => 152,  840 => 148,  829 => 147,  815 => 143,  804 => 142,  790 => 138,  779 => 137,  765 => 133,  754 => 132,  740 => 128,  729 => 127,  715 => 123,  704 => 122,  690 => 118,  679 => 117,  665 => 113,  654 => 112,  640 => 108,  629 => 107,  617 => 103,  605 => 102,  593 => 95,  582 => 94,  570 => 90,  559 => 89,  547 => 85,  536 => 84,  524 => 80,  513 => 79,  501 => 75,  490 => 74,  478 => 70,  467 => 69,  455 => 65,  444 => 64,  432 => 60,  421 => 59,  409 => 55,  398 => 54,  386 => 50,  375 => 49,  363 => 45,  352 => 44,  340 => 40,  329 => 39,  317 => 35,  306 => 34,  294 => 30,  283 => 29,  271 => 25,  260 => 24,  248 => 20,  237 => 19,  225 => 15,  214 => 14,  203 => 10,  192 => 9,  180 => 2,  169 => 1,  163 => 187,  159 => 181,  155 => 176,  151 => 171,  147 => 166,  143 => 161,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 77,  75 => 72,  71 => 67,  67 => 62,  63 => 57,  59 => 52,  55 => 47,  51 => 42,  47 => 37,  43 => 32,  39 => 27,  35 => 22,  31 => 17,  27 => 12,  23 => 7,  19 => 4,);
    }
}
