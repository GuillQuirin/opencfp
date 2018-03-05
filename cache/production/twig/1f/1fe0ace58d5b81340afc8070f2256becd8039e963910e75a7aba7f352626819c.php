<?php

/* home.twig */
class __TwigTemplate_85bf4aad520744474db7e45a0830a224a4ae1711d20c02dc49aef1396c4801db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/default.twig", "home.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <header id=\"hero\" class=\"bg-cover p-24\" style=\"background:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "venue_image_path", array()), "html", null, true);
        echo ") no-repeat center -300px / cover fixed;\">
        <div class=\"container mx-auto flex\">
            <div class=\"p-8 bg-brand text-white\">
                ";
        // line 7
        if (($context["cfp_open"] ?? null)) {
            // line 8
            echo "                    <h1>Call For Papers Now Open!</h1>
                    <p>Submissions accepted until ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "enddate", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "date_format", array())), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 11
            echo "                    <h1>
                        ";
            // line 12
            if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "show_submission_count", array())) {
                // line 13
                echo "                            Call for Papers ended with ";
                echo twig_escape_filter($this->env, ($context["number_of_talks"] ?? null), "html", null, true);
                echo " submissions!
                        ";
            } else {
                // line 15
                echo "                            Call for Papers has ended!
                        ";
            }
            // line 17
            echo "                    </h1>
                    <p>Submissions were accepted until ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "enddate", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 20
        echo "
                <div class=\"mt-8\">
                    ";
        // line 22
        if (($context["cfp_open"] ?? null)) {
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_new");
            echo "\" class=\"btn btn-white-o\">Register Now</a>";
        }
        // line 23
        echo "                </div>
            </div>

        </div>
    </header>

    <div class=\"container mx-auto\">
        <div class=\"flex justify-between items-center px-4 py-6\">
            ";
        // line 31
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "event_location", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "date_format", array(), "any", true, true))) {
            // line 32
            echo "                <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
            echo " is from <span class=\"text-bold\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "arrival", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "date_format", array()), false), "html", null, true);
            echo "</span> to <span class=\"text-bold\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "departure", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "date_format", array()), false), "html", null, true);
            echo "</span> in ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "event_location", array()), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 34
            echo "                <p>For More Information About The Conference</p>
            ";
        }
        // line 36
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "eventurl", array()), "html", null, true);
        echo "\" class=\"btn btn-brand-o\">Visit Conference Site</a>
        </div>
    </div>
";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->loadTemplate("_marketing.twig", "home.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 41,  119 => 40,  110 => 36,  106 => 34,  94 => 32,  92 => 31,  82 => 23,  76 => 22,  72 => 20,  67 => 18,  64 => 17,  60 => 15,  54 => 13,  52 => 12,  49 => 11,  44 => 9,  41 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "/application/resources/views/home.twig");
    }
}
