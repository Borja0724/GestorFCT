<?php

/* GestorFCTBundle:Default:Empresa_form.html.twig */
class __TwigTemplate_079e4974bdd8e24d8c4183066dd19303cd5956e02991d57f19a72dd478d50c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Empresa_form.html.twig", 1);
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
        $__internal_23d2237e0d0c435735d3a7310e1d30d7326fafa17e81dbbf609d252fb1632382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d2237e0d0c435735d3a7310e1d30d7326fafa17e81dbbf609d252fb1632382->enter($__internal_23d2237e0d0c435735d3a7310e1d30d7326fafa17e81dbbf609d252fb1632382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Empresa_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d2237e0d0c435735d3a7310e1d30d7326fafa17e81dbbf609d252fb1632382->leave($__internal_23d2237e0d0c435735d3a7310e1d30d7326fafa17e81dbbf609d252fb1632382_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_0add7229c042e5cb28f97c5b4f74c1bde170e53c5f38d920428f686b216761ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0add7229c042e5cb28f97c5b4f74c1bde170e53c5f38d920428f686b216761ca->enter($__internal_0add7229c042e5cb28f97c5b4f74c1bde170e53c5f38d920428f686b216761ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Empresa_form.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "direccion", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cp", array()), 'label');
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono1", array()), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono2", array()), 'label');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaCreacion", array()), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaCreacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Borrar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "

                  </div>

                ";
        // line 58
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
        
        $__internal_0add7229c042e5cb28f97c5b4f74c1bde170e53c5f38d920428f686b216761ca->leave($__internal_0add7229c042e5cb28f97c5b4f74c1bde170e53c5f38d920428f686b216761ca_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Empresa_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  134 => 54,  130 => 53,  123 => 49,  119 => 48,  112 => 44,  108 => 43,  101 => 39,  97 => 38,  90 => 34,  86 => 33,  79 => 29,  75 => 28,  68 => 24,  64 => 23,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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

                    {{form_label(formulario.direccion)}}
                    {{ form_widget(formulario.direccion, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.cp)}}
                    {{ form_widget(formulario.cp, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.telefono1)}}
                    {{ form_widget(formulario.telefono1, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.telefono2)}}
                    {{ form_widget(formulario.telefono2, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{form_label(formulario.fechaCreacion)}}
                    {{ form_widget(formulario.fechaCreacion, {'attr': {'class': 'form-control'} }) }}

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
", "GestorFCTBundle:Default:Empresa_form.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Empresa_form.html.twig");
    }
}
