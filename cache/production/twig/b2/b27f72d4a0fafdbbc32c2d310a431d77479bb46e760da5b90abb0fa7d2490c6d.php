<?php

/* _flash.twig */
class __TwigTemplate_3731c71bcf8e38fbd0e36fb25cd298d6dddfa7fd9e7338b6cbb7531eae79ec47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash' => array($this, 'block_flash'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('flash', $context, $blocks);
    }

    public function block_flash($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ((array_key_exists("flash", $context) &&  !twig_test_empty(($context["flash"] ?? null)))) {
            // line 3
            echo "        ";
            $context["style"] = (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "type", array()) == "error")) ? ("border-brand bg-red-lightest text-brand") : ("border-green-dark bg-green-lightest text-green-dark"));
            // line 4
            echo "
        <div class=\"rounded-sm border-t-8 text-sm p-4 my-4 ";
            // line 5
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 6
            if (!twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "short", array()))) {
                echo "<div class=\"font-bold text-lg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "short", array()), "html", null, true);
                echo "</div>";
            }
            // line 7
            echo "            ";
            // line 8
            echo "                ";
            if (twig_test_iterable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "ext", array()))) {
                // line 9
                echo "                    <ul>
                        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "ext", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 11
                    echo "                            <li>";
                    echo $context["error"];
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                    </ul>
                ";
            } else {
                // line 15
                echo "                    <p>";
                echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "ext", array());
                echo "</p>
                ";
            }
            // line 17
            echo "            ";
            // line 18
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "_flash.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  76 => 17,  70 => 15,  66 => 13,  57 => 11,  53 => 10,  50 => 9,  47 => 8,  45 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_flash.twig", "/application/resources/views/_flash.twig");
    }
}
