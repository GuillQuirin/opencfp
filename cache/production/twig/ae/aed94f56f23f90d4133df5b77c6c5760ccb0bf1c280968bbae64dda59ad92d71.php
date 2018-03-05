<?php

/* security/login.twig */
class __TwigTemplate_730183a39ea26263d8daf3d352dd57ae793304a4be965fb3f20bb1b00d95257c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/splash.twig", "security/login.twig", 1);
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
        echo "  <div class=\"opencfp-login\">
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
        $this->loadTemplate("_flash.twig", "security/login.twig", 8)->display($context);
        // line 9
        echo "
    <form method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login_check");
        echo "\">
      <label for=\"email\" class=\"text-sm text-white\">Email</label>
      <input id=\"email\" type=\"email\" name=\"email\" value=\"";
        // line 12
        if (($context["email"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["email"] ?? null));
        }
        echo "\" class=\"w-full\" placeholder=\"you@example.com\">
      <label for=\"password\" class=\"text-sm text-white\">Password</label>
      <input id=\"password\" type=\"password\" name=\"password\" class=\"w-full\" placeholder=\"•••••••\">
      <p class=\"text-right my-4\"><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("forgot_password");
        echo "\" class=\"text-white text-sm\">Forgot password?</a></p>
      <button type=\"submit\" class=\"btn btn-brand w-full\">Login</button>
    </form>

    <p class=\"text-light text-center text-sm my-4\">New user? <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_new");
        echo "\" class=\"text-brand text-bold\">Signup Now</a></p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "security/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  62 => 15,  54 => 12,  49 => 10,  46 => 9,  44 => 8,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "security/login.twig", "/application/resources/views/security/login.twig");
    }
}
