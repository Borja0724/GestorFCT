<?php

/* GestorFCTBundle:Default:formulario.html.twig */
class __TwigTemplate_25044c95ea0b4b2f9764265ff765ee3b9bff7fa334a18c6ee32778a3a44d65db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:formulario.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccbef7a157e41a4d79909128d53e6ce2db7d998ad62aab302b1dece3fb0a0782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbef7a157e41a4d79909128d53e6ce2db7d998ad62aab302b1dece3fb0a0782->enter($__internal_ccbef7a157e41a4d79909128d53e6ce2db7d998ad62aab302b1dece3fb0a0782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccbef7a157e41a4d79909128d53e6ce2db7d998ad62aab302b1dece3fb0a0782->leave($__internal_ccbef7a157e41a4d79909128d53e6ce2db7d998ad62aab302b1dece3fb0a0782_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_dadfc6dce60452d55ae16d42e700abaa0f8375d4b0ae40e9abef8ad31777dac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadfc6dce60452d55ae16d42e700abaa0f8375d4b0ae40e9abef8ad31777dac8->enter($__internal_dadfc6dce60452d55ae16d42e700abaa0f8375d4b0ae40e9abef8ad31777dac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formulario.html.twig"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

";
        
        $__internal_dadfc6dce60452d55ae16d42e700abaa0f8375d4b0ae40e9abef8ad31777dac8->leave($__internal_dadfc6dce60452d55ae16d42e700abaa0f8375d4b0ae40e9abef8ad31777dac8_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block contenido %}

{{form(formulario)}}

{% endblock %}
", "GestorFCTBundle:Default:formulario.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/formulario.html.twig");
    }
}