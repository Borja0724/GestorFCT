<?php

/* GestorFCTBundle:Default:Profesor_form.html.twig */
class __TwigTemplate_859b9f70b69290dae976694810c138f6bf547dad4d76ece9f40fc72528da2fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Profesor_form.html.twig", 1);
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
        $__internal_5f706bc52d92f098bbb428de5e78ebccbef25792d9aee3a58ddcdb84c2b812ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f706bc52d92f098bbb428de5e78ebccbef25792d9aee3a58ddcdb84c2b812ea->enter($__internal_5f706bc52d92f098bbb428de5e78ebccbef25792d9aee3a58ddcdb84c2b812ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Profesor_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f706bc52d92f098bbb428de5e78ebccbef25792d9aee3a58ddcdb84c2b812ea->leave($__internal_5f706bc52d92f098bbb428de5e78ebccbef25792d9aee3a58ddcdb84c2b812ea_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2f28beb89f548dc2ac5deb0f17ee0c94f18134a925cda18701981b908b3d08b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f28beb89f548dc2ac5deb0f17ee0c94f18134a925cda18701981b908b3d08b2->enter($__internal_2f28beb89f548dc2ac5deb0f17ee0c94f18134a925cda18701981b908b3d08b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Profesor_form.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Profesores</h1>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-6\">

                ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_start');
        echo "

                  <div class=\"form-group\">

                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'label');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "departamento", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "departamento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "

                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Borrar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "

                  </div>

                ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_end');
        echo "

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_2f28beb89f548dc2ac5deb0f17ee0c94f18134a925cda18701981b908b3d08b2->leave($__internal_2f28beb89f548dc2ac5deb0f17ee0c94f18134a925cda18701981b908b3d08b2_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Profesor_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  102 => 40,  97 => 38,  90 => 34,  86 => 33,  79 => 29,  75 => 28,  68 => 24,  64 => 23,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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

  <div id=\"page-wrapper\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Profesores</h1>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-body\">
            <div class=\"row\">
              <div class=\"col-lg-6\">

                {{ form_start(formulario) }}

                  <div class=\"form-group\">

                    {{form_label(formulario.nombre)}}
                    {{ form_widget(formulario.nombre, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.apellidos)}}
                    {{ form_widget(formulario.apellidos, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.departamento)}}
                    {{ form_widget(formulario.departamento, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{ form_widget(formulario.Guardar, {'attr': {'class': 'btn btn-default'} }) }}

                    {{ form_widget(formulario.Borrar, {'attr': {'class': 'btn btn-default'} }) }}

                  </div>

                {{ form_end(formulario) }}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{% endblock %}
", "GestorFCTBundle:Default:Profesor_form.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Profesor_form.html.twig");
    }
}
