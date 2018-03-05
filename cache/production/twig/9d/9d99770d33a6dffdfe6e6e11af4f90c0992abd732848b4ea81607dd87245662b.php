<?php

/* layouts/default.twig */
class __TwigTemplate_6c9a08976a7eab1a93b2cddcd402cadb68868be717de2f4688d7ea2e8945c5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assets')->getCallable(), array("css/app.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assets')->getCallable(), array("css/site.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    </head>
    <body class=\"border-t-4 border-brand\">
        <nav class=\"";
        // line 10
        if (!call_user_func_array($this->env->getFunction('active')->getCallable(), array("homepage"))) {
            echo "border-b border-white";
        }
        echo "\">
            <div class=\"container mx-auto flex justify-between\">
                <a class=\"font-serif flex items-center\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\">
                    <img class=\"w-11 mr-2\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assets')->getCallable(), array("img/logo.svg")), "html", null, true);
        echo "\" alt=\"Darkmira Tour PHP 2018\">
                </a>
                <div class=\"flex\">
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\" class=\"mr-8 py-6 ";
        if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("homepage"))) {
            echo "border-b-4 border-brand";
        } else {
            echo "text-soft";
        }
        echo "\">Home</a>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("speaker_package");
        echo "\" class=\"mr-8 py-6 ";
        if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("speaker_package"))) {
            echo "border-b-4 border-brand";
        } else {
            echo "text-soft";
        }
        echo "\">Speaker Package</a>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("talk_ideas");
        echo "\" class=\"mr-8 py-6 ";
        if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("talk_ideas"))) {
            echo "border-b-4 border-brand";
        } else {
            echo "text-soft";
        }
        echo "\">Talk Ideas</a>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("coc");
        echo "\" class=\"mr-8 py-6 ";
        if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("coc"))) {
            echo "border-b-4 border-brand";
        } else {
            echo "text-soft";
        }
        echo "\">Code of Conduct</a>
                    ";
        // line 20
        if ((array_key_exists("user", $context) &&  !twig_test_empty(($context["user"] ?? null)))) {
            // line 21
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("dashboard");
            echo "\" class=\"mr-8 py-6 ";
            if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("dashboard"))) {
                echo "border-b-4 border-brand";
            } else {
                echo "text-soft";
            }
            echo "\">Dashboard</a>
                        ";
            // line 22
            if (($context["user_is_admin"] ?? null)) {
                // line 23
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin");
                echo "\" class=\"mr-8 py-6 ";
                if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("admin"))) {
                    echo "border-b-4 border-brand";
                } else {
                    echo "text-soft";
                }
                echo "\">Admin</a>
                        ";
            }
            // line 25
            echo "                        ";
            if ((array_key_exists("user_is_reviewer", $context) && ($context["user_is_reviewer"] ?? null))) {
                // line 26
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("reviewer");
                echo "\" class=\"mr-8 py-6 ";
                if (call_user_func_array($this->env->getFunction('active')->getCallable(), array("reviewer"))) {
                    echo "border-b-4 border-brand";
                } else {
                    echo "text-soft";
                }
                echo "\">Reviewer</a>
                        ";
            }
            // line 28
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
            echo "\" class=\"py-6 text-soft\">Logout</a>
                    ";
        } else {
            // line 30
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login");
            echo "\" class=\"mr-8 py-6 text-soft hover:text-dark\">Login</a>
                        <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_new");
            echo "\" class=\"py-6 text-soft @text-dark\">Signup</a>
                    ";
        }
        // line 33
        echo "                </div>
            </div>
        </nav>

        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
        <main class=\"container mx-auto mt-8 flex\">
            <div class=\"flex-1 mr-16\">";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        echo "</div>
            <div class=\"flex-3 w-margin\">
                ";
        // line 43
        $this->loadTemplate("_flash.twig", "layouts/default.twig", 43)->display($context);
        // line 44
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "            </div>
        </main>

        ";
        // line 48
        $this->displayBlock('scripts', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "show_contrib_banner", array())) {
            // line 55
            echo "        ";
            $this->loadTemplate("_forkme.twig", "layouts/default.twig", 55)->display($context);
            // line 56
            echo "        ";
        }
        // line 57
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "        ";
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 48
    public function block_scripts($context, array $blocks = array())
    {
        // line 49
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
                    integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
                    crossorigin=\"anonymous\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "layouts/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 49,  228 => 48,  223 => 44,  218 => 41,  214 => 38,  211 => 37,  205 => 4,  199 => 57,  196 => 56,  193 => 55,  191 => 54,  188 => 53,  186 => 48,  181 => 45,  178 => 44,  176 => 43,  171 => 41,  167 => 39,  165 => 37,  159 => 33,  154 => 31,  149 => 30,  143 => 28,  131 => 26,  128 => 25,  116 => 23,  114 => 22,  103 => 21,  101 => 20,  91 => 19,  81 => 18,  71 => 17,  61 => 16,  55 => 13,  51 => 12,  44 => 10,  38 => 7,  34 => 6,  29 => 4,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/default.twig", "/application/resources/views/layouts/default.twig");
    }
}
