<?php

/* ideas.twig */
class __TwigTemplate_e808e1878157306008f3258bba5fe0f76249f200364085c6687eb541a357c2fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/default.twig", "ideas.twig", 1);
        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <h2>Call for Papers Talk Ideas</h2>
    <p>
        ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
        echo " is an event about Security and Quality in PHP ecosystems. So it's not limited to just PHP language talks. There have been sessions covering a wide range of topics supporting PHP developers and DevOps as well, and we encourage you to \"think outside the box\" to come up with your own unique topics.
    </p>
    <p>
        <strong>It is advisable to submit a few talk ideas, not just one.</strong>
        By submitting a single talk you may lessen your chances of being selected.
    </p>
    <p>
        To get the ideas flowing, here's a few suggestions:
    </p>
    <ul>
        <li>Development best practices</li>
        <li>Web / PHP Security</li>
        <li>Security best practices</li>
        <li>Security tools</li>
        <li>Design patterns</li>
        <li>Testing (unit, functional, etc.)</li>
        <li>User Cases / Experiences</li>
        <li>Software development methodologies</li>
        <li>Version control</li>
        <li>Devops</li>
        <li>Building APIs</li>
        <li>Continuous Integration / Deployment</li>
        <li>Framework-related topics</li>
        <li>Quality tools</li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "ideas.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ideas.twig", "/application/resources/views/ideas.twig");
    }
}
