<?php

/* GestorFCTBundle:Default:formulario.html.twig */
class __TwigTemplate_07d651212a00591d65c90902f9576c6a096695f3e9e84e6545c7f9331e725959 extends Twig_Template
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
        $__internal_6908f406e71f3459dfb2fbc1c1c92478d247e0718aae1fdc1c341f02f15a46bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6908f406e71f3459dfb2fbc1c1c92478d247e0718aae1fdc1c341f02f15a46bf->enter($__internal_6908f406e71f3459dfb2fbc1c1c92478d247e0718aae1fdc1c341f02f15a46bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6908f406e71f3459dfb2fbc1c1c92478d247e0718aae1fdc1c341f02f15a46bf->leave($__internal_6908f406e71f3459dfb2fbc1c1c92478d247e0718aae1fdc1c341f02f15a46bf_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3161b599d4ea11ee4b32743a6618141ce4cbbd1432c8c9c48e093ffc9bb83064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3161b599d4ea11ee4b32743a6618141ce4cbbd1432c8c9c48e093ffc9bb83064->enter($__internal_3161b599d4ea11ee4b32743a6618141ce4cbbd1432c8c9c48e093ffc9bb83064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formulario.html.twig"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

";
        
        $__internal_3161b599d4ea11ee4b32743a6618141ce4cbbd1432c8c9c48e093ffc9bb83064->leave($__internal_3161b599d4ea11ee4b32743a6618141ce4cbbd1432c8c9c48e093ffc9bb83064_prof);

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
", "GestorFCTBundle:Default:formulario.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/src/GestorFCTBundle/Resources/views/Default/formulario.html.twig");
    }
}
