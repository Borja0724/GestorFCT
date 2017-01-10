<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_adb59da258f69f09393f592dfd040b4354f1c8be170feedc10c16c69a64fa3d5 extends Twig_Template
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
        $__internal_c54c507d4dbc7ab4afd5230426e5409019ce1cfc8e2d6d8c20660b170861691d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54c507d4dbc7ab4afd5230426e5409019ce1cfc8e2d6d8c20660b170861691d->enter($__internal_c54c507d4dbc7ab4afd5230426e5409019ce1cfc8e2d6d8c20660b170861691d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54c507d4dbc7ab4afd5230426e5409019ce1cfc8e2d6d8c20660b170861691d->leave($__internal_c54c507d4dbc7ab4afd5230426e5409019ce1cfc8e2d6d8c20660b170861691d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89762089d3217f1a1f4b409035a93b2d618aa56b6c89802cf65de8aed28b780f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89762089d3217f1a1f4b409035a93b2d618aa56b6c89802cf65de8aed28b780f->enter($__internal_89762089d3217f1a1f4b409035a93b2d618aa56b6c89802cf65de8aed28b780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_89762089d3217f1a1f4b409035a93b2d618aa56b6c89802cf65de8aed28b780f->leave($__internal_89762089d3217f1a1f4b409035a93b2d618aa56b6c89802cf65de8aed28b780f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8cd2b5457feb815e33f59b336d2955c4bc5437c94e73e21557dfa2bf3caa73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cd2b5457feb815e33f59b336d2955c4bc5437c94e73e21557dfa2bf3caa73d->enter($__internal_a8cd2b5457feb815e33f59b336d2955c4bc5437c94e73e21557dfa2bf3caa73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8cd2b5457feb815e33f59b336d2955c4bc5437c94e73e21557dfa2bf3caa73d->leave($__internal_a8cd2b5457feb815e33f59b336d2955c4bc5437c94e73e21557dfa2bf3caa73d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f5b7dfda4b60ff72f2ebb08ab1185028f00f35356174343e94d1a68a9196e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5b7dfda4b60ff72f2ebb08ab1185028f00f35356174343e94d1a68a9196e65->enter($__internal_5f5b7dfda4b60ff72f2ebb08ab1185028f00f35356174343e94d1a68a9196e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5f5b7dfda4b60ff72f2ebb08ab1185028f00f35356174343e94d1a68a9196e65->leave($__internal_5f5b7dfda4b60ff72f2ebb08ab1185028f00f35356174343e94d1a68a9196e65_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
