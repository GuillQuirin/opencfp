<?php

/* _marketing.twig */
class __TwigTemplate_22d1f26ba7a56c56525561d44c8ef61f72b0ee50b2cc280e29e49e784c8cca6f extends Twig_Template
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
        echo "<div class=\"flex justify-between mb-4\">
    <div class=\"w-1/2 px-4\">
        <h2>Got a talk idea? We want to see it!</h2>
        <p>
            We’re pleased to announce our conference, ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
        echo " should be
            one of the best PHP conferences where community members from around
            the world come together to learn and share information about the latest
            trends and technologies in professional PHP development.
        </p>
    </div>

    <div class=\"w-1/2 px-4\">
        <h2>Speaker Package</h2>
        <p>
            We know speakers are key to the success of a conference and hope you will submit a talk.  In appreciation of your efforts, we include a <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("speaker_package");
        echo "\" class=\"text-brand text-bold\">speaker compensation package</a>.
        </p>
    </div>
</div>

<div class=\"mt-8 px-4\">
    <h2>Diversity Matters!</h2>
    <p>
        ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["site"] ?? null), "title", array()), "html", null, true);
        echo " is committed to creating a conference that is as inclusive as possible.
        We want to showcase talent available around Brazil and welcome international submissions as well.
    </p>
    <p>
        We are also committed to ensuring the conference is a place
        where ideas are exchanged, old friends get together, new friends meet and <strong>harassment
        is not tolerated</strong>. We expect speakers, attendees and sponsor representatives to be
        professional and courteous to each other. We reserve the right to remove, without refund,
        ANY attendee (speaker or otherwise) who is unable to adhere to this policy.
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "_marketing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  38 => 15,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_marketing.twig", "/application/resources/views/_marketing.twig");
    }
}
