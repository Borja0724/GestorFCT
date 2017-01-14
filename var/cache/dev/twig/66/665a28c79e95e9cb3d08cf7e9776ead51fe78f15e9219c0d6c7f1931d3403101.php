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
        $__internal_5975819dc86ac71e83e236c6bdef39dba8d9c58d7d797ae56eec356fed4ec571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5975819dc86ac71e83e236c6bdef39dba8d9c58d7d797ae56eec356fed4ec571->enter($__internal_5975819dc86ac71e83e236c6bdef39dba8d9c58d7d797ae56eec356fed4ec571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5975819dc86ac71e83e236c6bdef39dba8d9c58d7d797ae56eec356fed4ec571->leave($__internal_5975819dc86ac71e83e236c6bdef39dba8d9c58d7d797ae56eec356fed4ec571_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_244c49ee958271fd60769bccac938d288166d443597ee00095e8f9fbb5dc9c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244c49ee958271fd60769bccac938d288166d443597ee00095e8f9fbb5dc9c49->enter($__internal_244c49ee958271fd60769bccac938d288166d443597ee00095e8f9fbb5dc9c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formularioProfesor.html.twig"));

        // line 4
        echo "
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Forms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">

                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                      
                                    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_start');
        echo "

                                      <div class=\"form-group\">
                                        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'label');
        echo "
                                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        <br />
                                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'label');
        echo "
                                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                          <br />
                                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "departamento", array()), 'label');
        echo "
                                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "departamento", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                          <br />

                                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "

                                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Borrar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
                                      </div>

                                      ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_end');
        echo "


                        </div>

                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


";
        
        $__internal_244c49ee958271fd60769bccac938d288166d443597ee00095e8f9fbb5dc9c49->leave($__internal_244c49ee958271fd60769bccac938d288166d443597ee00095e8f9fbb5dc9c49_prof);

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
        return array (  104 => 39,  98 => 36,  93 => 34,  87 => 31,  83 => 30,  78 => 28,  74 => 27,  69 => 25,  65 => 24,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Forms</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


{% endblock %}
", "GestorFCTBundle:Default:formularioProfesor.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/formularioProfesor.html.twig");
    }
}
