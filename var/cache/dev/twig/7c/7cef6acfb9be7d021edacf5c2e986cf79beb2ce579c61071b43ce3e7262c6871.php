<?php

/* GestorFCTBundle:Default:formularioProfesor.html.twig */
class __TwigTemplate_9993b3eddbeabec62e0ae3a4653dbababe42b3b8c613ea42cd1c31402abc5a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:formularioProfesor.html.twig", 1);
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
        $__internal_16cb934deff4009d5841ded83b24e8378d6b3e0d3203909808c7df6072faf75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cb934deff4009d5841ded83b24e8378d6b3e0d3203909808c7df6072faf75e->enter($__internal_16cb934deff4009d5841ded83b24e8378d6b3e0d3203909808c7df6072faf75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16cb934deff4009d5841ded83b24e8378d6b3e0d3203909808c7df6072faf75e->leave($__internal_16cb934deff4009d5841ded83b24e8378d6b3e0d3203909808c7df6072faf75e_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_07033b43a8020fec71aac454c2484c191a4889b2e42dd3effefa4c87066045d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07033b43a8020fec71aac454c2484c191a4889b2e42dd3effefa4c87066045d2->enter($__internal_07033b43a8020fec71aac454c2484c191a4889b2e42dd3effefa4c87066045d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

";
        
        $__internal_07033b43a8020fec71aac454c2484c191a4889b2e42dd3effefa4c87066045d2->leave($__internal_07033b43a8020fec71aac454c2484c191a4889b2e42dd3effefa4c87066045d2_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:formularioProfesor.html.twig";
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
", "GestorFCTBundle:Default:formularioProfesor.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/src/GestorFCTBundle/Resources/views/Default/formularioProfesor.html.twig");
    }
}
