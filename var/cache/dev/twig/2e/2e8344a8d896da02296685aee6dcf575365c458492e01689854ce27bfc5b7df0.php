<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f190976a62b51cbb852586be8ab14e3cd038072943d4e6ac782744346727c3a5 extends Twig_Template
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
        $__internal_02a9f0ac024d454cead7694723bbebd1a564d38b666e29e3fc2973f48b6191ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a9f0ac024d454cead7694723bbebd1a564d38b666e29e3fc2973f48b6191ee->enter($__internal_02a9f0ac024d454cead7694723bbebd1a564d38b666e29e3fc2973f48b6191ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02a9f0ac024d454cead7694723bbebd1a564d38b666e29e3fc2973f48b6191ee->leave($__internal_02a9f0ac024d454cead7694723bbebd1a564d38b666e29e3fc2973f48b6191ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14ee13b7812924001f0ecc3c132787e77578c16a0edc324e7d8a5454e4a9abaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ee13b7812924001f0ecc3c132787e77578c16a0edc324e7d8a5454e4a9abaa->enter($__internal_14ee13b7812924001f0ecc3c132787e77578c16a0edc324e7d8a5454e4a9abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_14ee13b7812924001f0ecc3c132787e77578c16a0edc324e7d8a5454e4a9abaa->leave($__internal_14ee13b7812924001f0ecc3c132787e77578c16a0edc324e7d8a5454e4a9abaa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3be59fa40ab1cdea6f92ad2a0df1b702d7536c99a67f525858003a79815c297f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be59fa40ab1cdea6f92ad2a0df1b702d7536c99a67f525858003a79815c297f->enter($__internal_3be59fa40ab1cdea6f92ad2a0df1b702d7536c99a67f525858003a79815c297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3be59fa40ab1cdea6f92ad2a0df1b702d7536c99a67f525858003a79815c297f->leave($__internal_3be59fa40ab1cdea6f92ad2a0df1b702d7536c99a67f525858003a79815c297f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62b0e2ccedbeeaadad231116a77f59ce86787f12f1921fc1ccfa10b717883b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b0e2ccedbeeaadad231116a77f59ce86787f12f1921fc1ccfa10b717883b45->enter($__internal_62b0e2ccedbeeaadad231116a77f59ce86787f12f1921fc1ccfa10b717883b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_62b0e2ccedbeeaadad231116a77f59ce86787f12f1921fc1ccfa10b717883b45->leave($__internal_62b0e2ccedbeeaadad231116a77f59ce86787f12f1921fc1ccfa10b717883b45_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
