<?php

/* CodersLabBundle::zadanieA3.html.twig */
class __TwigTemplate_a8f8a6436abfa717f75abe8dfd008bc1727b936649dd63da5be004ffd871722b extends Twig_Template
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
        $__internal_ff476aca3dcd96be635f8b532a1edb2c6a0c97415aa17f3712348b37404acf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff476aca3dcd96be635f8b532a1edb2c6a0c97415aa17f3712348b37404acf27->enter($__internal_ff476aca3dcd96be635f8b532a1edb2c6a0c97415aa17f3712348b37404acf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CodersLabBundle::zadanieA3.html.twig"));

        // line 1
        echo "<html>
<head>

</head>
<body>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 7
            echo "
    <p><a href=\"/showTweet/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "id", array()), "html", null, true);
            echo "\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tweet"], "text", array()), "html", null, true);
            echo "</h1></a></p>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 10
            echo "    Brak Tweetów
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</body>
</html>";
        
        $__internal_ff476aca3dcd96be635f8b532a1edb2c6a0c97415aa17f3712348b37404acf27->leave($__internal_ff476aca3dcd96be635f8b532a1edb2c6a0c97415aa17f3712348b37404acf27_prof);

    }

    public function getTemplateName()
    {
        return "CodersLabBundle::zadanieA3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  46 => 10,  37 => 8,  34 => 7,  29 => 6,  22 => 1,);
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
{% for tweet in tweets %}

    <p><a href=\"/showTweet/{{ tweet.id }}\"><h1>{{ tweet.text }}</h1></a></p>
{% else %}
    Brak Tweetów
{% endfor %}
</body>
</html>", "CodersLabBundle::zadanieA3.html.twig", "/home/tuyetlinh/Workspace/projekt_form/src/CodersLabBundle/Resources/views/zadanieA3.html.twig");
    }
}
