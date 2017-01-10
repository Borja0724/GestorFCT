<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bacae7bb57f15cb21f0611c5f4e819a9a452b6f0ba8475c970d40b81f08eff66 extends Twig_Template
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
        $__internal_68a779332e5304ba86db69252e9d2e7163421b91329f2f57cf662bdc04eb0103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a779332e5304ba86db69252e9d2e7163421b91329f2f57cf662bdc04eb0103->enter($__internal_68a779332e5304ba86db69252e9d2e7163421b91329f2f57cf662bdc04eb0103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a779332e5304ba86db69252e9d2e7163421b91329f2f57cf662bdc04eb0103->leave($__internal_68a779332e5304ba86db69252e9d2e7163421b91329f2f57cf662bdc04eb0103_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de054d9d94dc9d3da70c4aeab6b152cc7bbf2f90a33a812e083e14ea840fc68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de054d9d94dc9d3da70c4aeab6b152cc7bbf2f90a33a812e083e14ea840fc68d->enter($__internal_de054d9d94dc9d3da70c4aeab6b152cc7bbf2f90a33a812e083e14ea840fc68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_de054d9d94dc9d3da70c4aeab6b152cc7bbf2f90a33a812e083e14ea840fc68d->leave($__internal_de054d9d94dc9d3da70c4aeab6b152cc7bbf2f90a33a812e083e14ea840fc68d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a42b972ad6ba93d5df513d833e49e9c038b97850731ba381bcbaca2eaadb278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a42b972ad6ba93d5df513d833e49e9c038b97850731ba381bcbaca2eaadb278->enter($__internal_7a42b972ad6ba93d5df513d833e49e9c038b97850731ba381bcbaca2eaadb278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7a42b972ad6ba93d5df513d833e49e9c038b97850731ba381bcbaca2eaadb278->leave($__internal_7a42b972ad6ba93d5df513d833e49e9c038b97850731ba381bcbaca2eaadb278_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5246bcdce8f9715b94cfe74329bd1de46843657a472631a1e39b17a567fac526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5246bcdce8f9715b94cfe74329bd1de46843657a472631a1e39b17a567fac526->enter($__internal_5246bcdce8f9715b94cfe74329bd1de46843657a472631a1e39b17a567fac526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5246bcdce8f9715b94cfe74329bd1de46843657a472631a1e39b17a567fac526->leave($__internal_5246bcdce8f9715b94cfe74329bd1de46843657a472631a1e39b17a567fac526_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
