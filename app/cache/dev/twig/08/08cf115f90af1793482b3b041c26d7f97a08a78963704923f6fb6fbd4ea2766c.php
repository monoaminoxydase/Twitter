<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bdeb1428812e070368b4d528a19d8bdd5f7782eac80911918f846027a071ee6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91821eebe88ffafe25de5e92c74558e95b63a441482e50026a73bf128a45e179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91821eebe88ffafe25de5e92c74558e95b63a441482e50026a73bf128a45e179->enter($__internal_91821eebe88ffafe25de5e92c74558e95b63a441482e50026a73bf128a45e179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91821eebe88ffafe25de5e92c74558e95b63a441482e50026a73bf128a45e179->leave($__internal_91821eebe88ffafe25de5e92c74558e95b63a441482e50026a73bf128a45e179_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b08b033cb0b3813ab073a09c3110bd0827984e3cf785d0b7f93573633c1ef75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b08b033cb0b3813ab073a09c3110bd0827984e3cf785d0b7f93573633c1ef75->enter($__internal_3b08b033cb0b3813ab073a09c3110bd0827984e3cf785d0b7f93573633c1ef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_3b08b033cb0b3813ab073a09c3110bd0827984e3cf785d0b7f93573633c1ef75->leave($__internal_3b08b033cb0b3813ab073a09c3110bd0827984e3cf785d0b7f93573633c1ef75_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54450db0e35ae57e56a50f2fd4a21e18b83c518e7645f8997ad8cef4534ce806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54450db0e35ae57e56a50f2fd4a21e18b83c518e7645f8997ad8cef4534ce806->enter($__internal_54450db0e35ae57e56a50f2fd4a21e18b83c518e7645f8997ad8cef4534ce806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54450db0e35ae57e56a50f2fd4a21e18b83c518e7645f8997ad8cef4534ce806->leave($__internal_54450db0e35ae57e56a50f2fd4a21e18b83c518e7645f8997ad8cef4534ce806_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70495440795207110ef8a3359e0d409602da5b2c6c42f2fd66aff5d3329607de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70495440795207110ef8a3359e0d409602da5b2c6c42f2fd66aff5d3329607de->enter($__internal_70495440795207110ef8a3359e0d409602da5b2c6c42f2fd66aff5d3329607de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70495440795207110ef8a3359e0d409602da5b2c6c42f2fd66aff5d3329607de->leave($__internal_70495440795207110ef8a3359e0d409602da5b2c6c42f2fd66aff5d3329607de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/tuyetlinh/Workspace/projekt_form/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
