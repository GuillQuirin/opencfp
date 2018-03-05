<?php

/* security/signup.twig */
class __TwigTemplate_a9d7b8accdfe1b399fb2c2d664441e8be2e89f6929045ab73bcc5d427fde004c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/splash.twig", "security/signup.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/splash.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"opencfp-signup\">
        <a class=\"font-serif flex items-center justify-center mb-4\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
        echo "\">
            <img class=\"w-11 mr-2\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('assets')->getCallable(), array("img/logo.svg")), "html", null, true);
        echo "\" alt=\"OpenCFP\">
        </a>

        ";
        // line 8
        $this->loadTemplate("_flash.twig", "security/signup.twig", 8)->display($context);
        // line 9
        echo "
        <form method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_create");
        echo "\">
            <label class=\"text-white text-sm\">Email</label>
            <input type=\"email\" name=\"email\" placeholder=\"you@example.com\">
            <label class=\"text-white text-sm\">Password</label>
            <input type=\"password\" name=\"password\" placeholder=\"•••••••\">
            <div class=\"text-sm my-4 flex items-center\">
                <input id=\"coc\" class=\"mr-2\" name=\"coc\" type=\"checkbox\">
                <label for=\"coc\" class=\"text-white\">I agree to abide by the <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "coc_link", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"text-brand text-bold text-underline\" rel=\"noopener noreferrer\">Code of Conduct</a></label>
            </div>
            <button type=\"submit\" class=\"btn btn-brand w-full\">Signup</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  49 => 10,  46 => 9,  44 => 8,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/signup.twig", "/application/resources/views/security/signup.twig");
    }
}
