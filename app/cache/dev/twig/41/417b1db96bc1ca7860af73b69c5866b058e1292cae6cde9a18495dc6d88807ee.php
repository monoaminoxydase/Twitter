<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0b00c101e1a0b8c15fdf677655c7ad693f24deb88511460c58ef0ff3e6054bb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ff6a06e67a25c8a6ff6c361ad766771d1888d5d4b402160d1dbd11ef486d3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff6a06e67a25c8a6ff6c361ad766771d1888d5d4b402160d1dbd11ef486d3b7->enter($__internal_5ff6a06e67a25c8a6ff6c361ad766771d1888d5d4b402160d1dbd11ef486d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ff6a06e67a25c8a6ff6c361ad766771d1888d5d4b402160d1dbd11ef486d3b7->leave($__internal_5ff6a06e67a25c8a6ff6c361ad766771d1888d5d4b402160d1dbd11ef486d3b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6fef5946fbfa45d81e8ef547eeb194a91517e128fb7b26109a942647637becd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fef5946fbfa45d81e8ef547eeb194a91517e128fb7b26109a942647637becd->enter($__internal_c6fef5946fbfa45d81e8ef547eeb194a91517e128fb7b26109a942647637becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6fef5946fbfa45d81e8ef547eeb194a91517e128fb7b26109a942647637becd->leave($__internal_c6fef5946fbfa45d81e8ef547eeb194a91517e128fb7b26109a942647637becd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b59b1cd84c79642341bfdb6c753dd0f289f5fc360460765587c2897583819d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b59b1cd84c79642341bfdb6c753dd0f289f5fc360460765587c2897583819d6->enter($__internal_1b59b1cd84c79642341bfdb6c753dd0f289f5fc360460765587c2897583819d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b59b1cd84c79642341bfdb6c753dd0f289f5fc360460765587c2897583819d6->leave($__internal_1b59b1cd84c79642341bfdb6c753dd0f289f5fc360460765587c2897583819d6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_003061b1a55f36b8cc5d067e073333194ef3548c4d9ac48981258486eb8ae07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003061b1a55f36b8cc5d067e073333194ef3548c4d9ac48981258486eb8ae07d->enter($__internal_003061b1a55f36b8cc5d067e073333194ef3548c4d9ac48981258486eb8ae07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_003061b1a55f36b8cc5d067e073333194ef3548c4d9ac48981258486eb8ae07d->leave($__internal_003061b1a55f36b8cc5d067e073333194ef3548c4d9ac48981258486eb8ae07d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/tuyetlinh/Workspace/projekt_form/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
