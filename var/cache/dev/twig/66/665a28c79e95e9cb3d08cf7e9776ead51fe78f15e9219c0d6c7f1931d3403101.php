<?php

/* GestorFCTBundle:Default:formularioProfesor.html.twig */
class __TwigTemplate_ca00c486f3919e2610d99f5a8a0c3c0acf8af2f2583657242cf765ad2f46af99 extends Twig_Template
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
        $__internal_e2c11c0b679bbe60be16060165cf930fd6d2e230d6be626005b596f77801d42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c11c0b679bbe60be16060165cf930fd6d2e230d6be626005b596f77801d42e->enter($__internal_e2c11c0b679bbe60be16060165cf930fd6d2e230d6be626005b596f77801d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c11c0b679bbe60be16060165cf930fd6d2e230d6be626005b596f77801d42e->leave($__internal_e2c11c0b679bbe60be16060165cf930fd6d2e230d6be626005b596f77801d42e_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_a32fcdf9d863cb9c6dae2b93266dc2f5bf8ed16c3bd96d19027a2fa44e098ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32fcdf9d863cb9c6dae2b93266dc2f5bf8ed16c3bd96d19027a2fa44e098ca2->enter($__internal_a32fcdf9d863cb9c6dae2b93266dc2f5bf8ed16c3bd96d19027a2fa44e098ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

";
        
        $__internal_a32fcdf9d863cb9c6dae2b93266dc2f5bf8ed16c3bd96d19027a2fa44e098ca2->leave($__internal_a32fcdf9d863cb9c6dae2b93266dc2f5bf8ed16c3bd96d19027a2fa44e098ca2_prof);

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
", "GestorFCTBundle:Default:formularioProfesor.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/formularioProfesor.html.twig");
    }
}
