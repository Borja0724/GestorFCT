<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_365d5152e55d0263ded2c6721d3f2f4c2f89555b26e831194a689adbc254e06f extends Twig_Template
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
        $__internal_6cbf9aaf1b751e98967b61b1576030db09167232735e69c3b944f3e3cf6c1fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbf9aaf1b751e98967b61b1576030db09167232735e69c3b944f3e3cf6c1fa6->enter($__internal_6cbf9aaf1b751e98967b61b1576030db09167232735e69c3b944f3e3cf6c1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cbf9aaf1b751e98967b61b1576030db09167232735e69c3b944f3e3cf6c1fa6->leave($__internal_6cbf9aaf1b751e98967b61b1576030db09167232735e69c3b944f3e3cf6c1fa6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a404f84895cf477d2958d9dfb0085188cbfb6a2ec293ae14bc7fc67dc8798cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a404f84895cf477d2958d9dfb0085188cbfb6a2ec293ae14bc7fc67dc8798cdb->enter($__internal_a404f84895cf477d2958d9dfb0085188cbfb6a2ec293ae14bc7fc67dc8798cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a404f84895cf477d2958d9dfb0085188cbfb6a2ec293ae14bc7fc67dc8798cdb->leave($__internal_a404f84895cf477d2958d9dfb0085188cbfb6a2ec293ae14bc7fc67dc8798cdb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a23286159af75933f0c3fd1376ae1c05d0978fa01e4cc1835cbdb3c35c1df9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a23286159af75933f0c3fd1376ae1c05d0978fa01e4cc1835cbdb3c35c1df9d->enter($__internal_1a23286159af75933f0c3fd1376ae1c05d0978fa01e4cc1835cbdb3c35c1df9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1a23286159af75933f0c3fd1376ae1c05d0978fa01e4cc1835cbdb3c35c1df9d->leave($__internal_1a23286159af75933f0c3fd1376ae1c05d0978fa01e4cc1835cbdb3c35c1df9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_27376b3c9aae2055edeea1344bee213ecd5567edaef9a630e8c66b7aff3658fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27376b3c9aae2055edeea1344bee213ecd5567edaef9a630e8c66b7aff3658fa->enter($__internal_27376b3c9aae2055edeea1344bee213ecd5567edaef9a630e8c66b7aff3658fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_27376b3c9aae2055edeea1344bee213ecd5567edaef9a630e8c66b7aff3658fa->leave($__internal_27376b3c9aae2055edeea1344bee213ecd5567edaef9a630e8c66b7aff3658fa_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
