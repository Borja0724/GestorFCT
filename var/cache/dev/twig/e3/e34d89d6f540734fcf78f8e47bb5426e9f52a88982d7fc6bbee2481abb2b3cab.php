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
        $__internal_ff1ffab7b6a230899a9c095ced9bab5b7e14cdd2c324dee1d434b237e10e445c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1ffab7b6a230899a9c095ced9bab5b7e14cdd2c324dee1d434b237e10e445c->enter($__internal_ff1ffab7b6a230899a9c095ced9bab5b7e14cdd2c324dee1d434b237e10e445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff1ffab7b6a230899a9c095ced9bab5b7e14cdd2c324dee1d434b237e10e445c->leave($__internal_ff1ffab7b6a230899a9c095ced9bab5b7e14cdd2c324dee1d434b237e10e445c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2ac813dd1cdda81c1444643988c8a352dbe5512eb6530d58b08ad4705b678d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ac813dd1cdda81c1444643988c8a352dbe5512eb6530d58b08ad4705b678d9->enter($__internal_d2ac813dd1cdda81c1444643988c8a352dbe5512eb6530d58b08ad4705b678d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d2ac813dd1cdda81c1444643988c8a352dbe5512eb6530d58b08ad4705b678d9->leave($__internal_d2ac813dd1cdda81c1444643988c8a352dbe5512eb6530d58b08ad4705b678d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ea98b55e3806fcc4c4f523809ec08e7b151d00981d1271a0522a91f74dc5d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea98b55e3806fcc4c4f523809ec08e7b151d00981d1271a0522a91f74dc5d51->enter($__internal_9ea98b55e3806fcc4c4f523809ec08e7b151d00981d1271a0522a91f74dc5d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ea98b55e3806fcc4c4f523809ec08e7b151d00981d1271a0522a91f74dc5d51->leave($__internal_9ea98b55e3806fcc4c4f523809ec08e7b151d00981d1271a0522a91f74dc5d51_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f524a29cc86a42ac1ca8869508b46ac3bb77fa5aa3733e511a65508995ef2d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f524a29cc86a42ac1ca8869508b46ac3bb77fa5aa3733e511a65508995ef2d57->enter($__internal_f524a29cc86a42ac1ca8869508b46ac3bb77fa5aa3733e511a65508995ef2d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f524a29cc86a42ac1ca8869508b46ac3bb77fa5aa3733e511a65508995ef2d57->leave($__internal_f524a29cc86a42ac1ca8869508b46ac3bb77fa5aa3733e511a65508995ef2d57_prof);

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
