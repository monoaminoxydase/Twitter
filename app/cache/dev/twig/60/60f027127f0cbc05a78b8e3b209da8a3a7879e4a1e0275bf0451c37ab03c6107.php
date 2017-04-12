<?php

/* CodersLabBundle::tweet.html.twig */
class __TwigTemplate_58b0fb8f0c19d1219efc93b5daa89f06712f77d067b3f55ecb79105167c6bcb3 extends Twig_Template
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
        $__internal_7e405752785d5c0683c3da762fb82b62f2ea934d76187b761d95034cd57166ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e405752785d5c0683c3da762fb82b62f2ea934d76187b761d95034cd57166ab->enter($__internal_7e405752785d5c0683c3da762fb82b62f2ea934d76187b761d95034cd57166ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::tweet.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        if ((null === (isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")))) {
            // line 7
            echo "    Taki Tweet nie istnieje.
";
        } else {
            // line 9
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "name", array()), "html", null, true);
            echo "</h1>
    <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "id", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "text", array()), "html", null, true);
            echo "</p>

";
        }
        // line 14
        echo "</body>
</html>";
        
        $__internal_7e405752785d5c0683c3da762fb82b62f2ea934d76187b761d95034cd57166ab->leave($__internal_7e405752785d5c0683c3da762fb82b62f2ea934d76187b761d95034cd57166ab_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::tweet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  44 => 11,  40 => 10,  35 => 9,  31 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>

</head>
<body>
{% if tweet is null %}
    Taki Tweet nie istnieje.
{% else %}
    <h1>{{ tweet.name }}</h1>
    <p>{{ tweet.id }}</p>
    <p>{{ tweet.text }}</p>

{% endif %}
</body>
</html>", "CodersLabBundle::tweet.html.twig", "/home/tuyetlinh/Workspace/projekt_form/src/CodersLabBundle/Resources/views/tweet.html.twig");
    }
}
