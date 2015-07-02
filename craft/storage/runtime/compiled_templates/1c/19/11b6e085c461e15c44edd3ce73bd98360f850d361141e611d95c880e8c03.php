<?php

/* _includes/fields */
class __TwigTemplate_1c1911b6e085c461e15c44edd3ce73bd98360f850d361141e611d95c880e8c03 extends Craft\BaseTemplate
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
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 2
        if ((!array_key_exists("namespace", $context))) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) ? $context["namespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute($context["field"], "getField", array(), "method"), "required" => $this->getAttribute($context["field"], "required", array()), "element" => (isset($context["element"]) ? $context["element"] : null), "static" => ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                    // line 12
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->env->loadTemplate("_includes/field")->display(array("field" => $this->getAttribute($context["field"], "getField", array(), "method"), "required" => $this->getAttribute($context["field"], "required", array()), "element" => (isset($context["element"]) ? $context["element"] : null), "static" => ((array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                // line 12
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  64 => 6,  59 => 5,  45 => 12,  42 => 6,  37 => 5,  30 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
