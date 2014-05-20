<?php

/* entries/_titlefield */
class __TwigTemplate_5d3ab6755b021a577512c5cf3d65449389a011793ac9e85fe8f4cd7513f2c1c8 extends Craft\BaseTemplate
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
        // line 1
        $context["__internal_11645b7f4193ba772ac8c99363ca7d5c0b2f674805e76816857e62dc1cfed6b5"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_11645b7f4193ba772ac8c99363ca7d5c0b2f674805e76816857e62dc1cfed6b5"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getType", array(), "method"), "titleLabel")), "id" => "title", "name" => "title", "value" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), "errors" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  72 => 14,  55 => 8,  89 => 16,  75 => 15,  54 => 11,  51 => 10,  46 => 7,  26 => 12,  21 => 2,  19 => 1,  434 => 208,  429 => 205,  426 => 204,  423 => 203,  418 => 201,  414 => 200,  411 => 199,  408 => 198,  405 => 197,  397 => 195,  395 => 194,  389 => 190,  376 => 188,  374 => 187,  371 => 186,  368 => 185,  365 => 184,  362 => 183,  359 => 182,  356 => 181,  353 => 180,  351 => 179,  344 => 177,  336 => 172,  330 => 169,  327 => 168,  324 => 163,  321 => 161,  317 => 159,  312 => 157,  308 => 156,  303 => 155,  300 => 154,  297 => 152,  289 => 150,  286 => 145,  281 => 142,  277 => 141,  271 => 140,  267 => 138,  265 => 137,  261 => 135,  259 => 134,  255 => 132,  252 => 131,  246 => 128,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 17,  61 => 16,  57 => 12,  52 => 14,  49 => 9,  43 => 6,  41 => 213,  39 => 10,  35 => 7,  32 => 6,  29 => 6,  27 => 4,  25 => 4,);
    }
}
