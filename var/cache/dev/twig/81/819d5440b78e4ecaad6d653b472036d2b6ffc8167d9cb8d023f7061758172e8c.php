<?php

/* GestorFCTBundle:Default:Conf_form.html.twig */
class __TwigTemplate_a871cbea069b4b4da6b37029da98b1403bcf1098289f2024f6271bd2a51aec7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Conf_form.html.twig", 1);
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
        $__internal_3c06b664418a0b95277c49975753298aa03e590a32d267b71890e451ca38dfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c06b664418a0b95277c49975753298aa03e590a32d267b71890e451ca38dfec->enter($__internal_3c06b664418a0b95277c49975753298aa03e590a32d267b71890e451ca38dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Conf_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c06b664418a0b95277c49975753298aa03e590a32d267b71890e451ca38dfec->leave($__internal_3c06b664418a0b95277c49975753298aa03e590a32d267b71890e451ca38dfec_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_ed1426516df4bbb471ab48129be7495bd7a3b2d5cf6475667aef8a6cc1d3dd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1426516df4bbb471ab48129be7495bd7a3b2d5cf6475667aef8a6cc1d3dd2a->enter($__internal_ed1426516df4bbb471ab48129be7495bd7a3b2d5cf6475667aef8a6cc1d3dd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Conf_form.html.twig"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


                    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "param", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "configuracion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                    <br />

                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "

                    <br />
                    
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Borrar", array()), 'row', array("attr" => array("class" => "btn btn-default")));
        echo "

                ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

";
        
        $__internal_ed1426516df4bbb471ab48129be7495bd7a3b2d5cf6475667aef8a6cc1d3dd2a->leave($__internal_ed1426516df4bbb471ab48129be7495bd7a3b2d5cf6475667aef8a6cc1d3dd2a_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Conf_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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

                {{ form_start(form) }}


                    {{ form_row(form.param, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{ form_row(form.configuracion, {'attr': {'class': 'form-control'} }) }}

                    <br />

                    {{ form_row(form.Guardar, {'attr': {'class': 'btn btn-default'} }) }}

                    <br />
                    
                    {{ form_row(form.Borrar, {'attr': {'class': 'btn btn-default'} }) }}

                {{ form_end(form) }}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{% endblock %}
", "GestorFCTBundle:Default:Conf_form.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Conf_form.html.twig");
    }
}
