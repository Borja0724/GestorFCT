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
        $__internal_27189f936c5417f64ac0914e7d327cb8b17c7959c4d946d2f18b294779e84841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27189f936c5417f64ac0914e7d327cb8b17c7959c4d946d2f18b294779e84841->enter($__internal_27189f936c5417f64ac0914e7d327cb8b17c7959c4d946d2f18b294779e84841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27189f936c5417f64ac0914e7d327cb8b17c7959c4d946d2f18b294779e84841->leave($__internal_27189f936c5417f64ac0914e7d327cb8b17c7959c4d946d2f18b294779e84841_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_4712694dab7e745e3941676bc85332a0acf6f0938da5ae9eedea75b0a7c8f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4712694dab7e745e3941676bc85332a0acf6f0938da5ae9eedea75b0a7c8f0d0->enter($__internal_4712694dab7e745e3941676bc85332a0acf6f0938da5ae9eedea75b0a7c8f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formulario.html.twig"));

        // line 3
        echo "
";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

";
        
        $__internal_4712694dab7e745e3941676bc85332a0acf6f0938da5ae9eedea75b0a7c8f0d0->leave($__internal_4712694dab7e745e3941676bc85332a0acf6f0938da5ae9eedea75b0a7c8f0d0_prof);

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
