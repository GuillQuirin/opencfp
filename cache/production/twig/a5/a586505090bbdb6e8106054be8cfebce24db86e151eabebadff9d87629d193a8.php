<?php

/* layouts/splash.twig */
class __TwigTemplate_f37f8fa4d3b7fba848da7238b2efe46ea623c590f07e4ee7fde80125a20d241b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"h-full\">
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
    <body class=\"h-full border-t-4 border-brand bg-cover flex items-center justify-center\" style=\"background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "venue_image_path", array()), "html", null, true);
        echo ") no-repeat center center / cover fixed;\">

        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('scripts', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->loadTemplate("_forkme.twig", "layouts/splash.twig", 17)->display($context);
        // line 18
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    // line 14
    public function block_scripts($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layouts/splash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  77 => 14,  73 => 12,  70 => 11,  64 => 4,  58 => 18,  56 => 17,  53 => 16,  51 => 14,  48 => 13,  46 => 11,  41 => 9,  36 => 7,  32 => 6,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/splash.twig", "/application/resources/views/layouts/splash.twig");
    }
}
