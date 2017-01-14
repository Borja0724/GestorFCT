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
        $__internal_fcc76303f30a1bd4750bc8b19688b07689f351baaa75200459a634f8f746b8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc76303f30a1bd4750bc8b19688b07689f351baaa75200459a634f8f746b8a8->enter($__internal_fcc76303f30a1bd4750bc8b19688b07689f351baaa75200459a634f8f746b8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc76303f30a1bd4750bc8b19688b07689f351baaa75200459a634f8f746b8a8->leave($__internal_fcc76303f30a1bd4750bc8b19688b07689f351baaa75200459a634f8f746b8a8_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1b688c31692b11931b56db2fd903ae9f79abe17be668c1c6bcbad29b47590b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b688c31692b11931b56db2fd903ae9f79abe17be668c1c6bcbad29b47590b83->enter($__internal_1b688c31692b11931b56db2fd903ae9f79abe17be668c1c6bcbad29b47590b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:formulario.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "direccion", array()), 'label');
        echo "
                                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                          <br />
                                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cp", array()), 'label');
        echo "
                                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "cp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        <br />
                                      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono1", array()), 'label');
        echo "
                                      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                      <br />
                                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono2", array()), 'label');
        echo "
                                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "telefono2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                                    <br />
                                  ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaCreacion", array()), 'label');
        echo "
                                  ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaCreacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                          <br />


                                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Guardar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "

                                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "Borrar", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
                                      </div>

                                      ";
        // line 50
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
        
        $__internal_1b688c31692b11931b56db2fd903ae9f79abe17be668c1c6bcbad29b47590b83->leave($__internal_1b688c31692b11931b56db2fd903ae9f79abe17be668c1c6bcbad29b47590b83_prof);

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
        return array (  133 => 50,  127 => 47,  122 => 45,  115 => 41,  111 => 40,  105 => 37,  101 => 36,  96 => 34,  92 => 33,  87 => 31,  83 => 30,  78 => 28,  74 => 27,  69 => 25,  65 => 24,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
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
", "GestorFCTBundle:Default:formulario.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/formulario.html.twig");
    }
}
