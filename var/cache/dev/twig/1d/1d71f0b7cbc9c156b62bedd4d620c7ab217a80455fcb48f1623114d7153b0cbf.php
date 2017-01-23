<?php

/* GestorFCTBundle:Default:register.html.twig */
class __TwigTemplate_84b63101a0e77bc1b9915840d9fe2036a5946e13d2e7bb2d667b67ee9ba5c972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:register.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c039cd8ff61932882c30b4f1fb84d87f9be4ed0c0d51b9e534b708a2847417c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c039cd8ff61932882c30b4f1fb84d87f9be4ed0c0d51b9e534b708a2847417c7->enter($__internal_c039cd8ff61932882c30b4f1fb84d87f9be4ed0c0d51b9e534b708a2847417c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c039cd8ff61932882c30b4f1fb84d87f9be4ed0c0d51b9e534b708a2847417c7->leave($__internal_c039cd8ff61932882c30b4f1fb84d87f9be4ed0c0d51b9e534b708a2847417c7_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ee893ddb8fbb8cc92edc838f75e9b54039f52f2077ff0e5933f1779a1be8f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee893ddb8fbb8cc92edc838f75e9b54039f52f2077ff0e5933f1779a1be8f23->enter($__internal_6ee893ddb8fbb8cc92edc838f75e9b54039f52f2077ff0e5933f1779a1be8f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:register.html.twig"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Registrate</h3>
                </div>
                <div class=\"panel-body\">

                  ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "


                      ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrarse", array()), 'row', array("attr" => array("class" => "btn btn-lg btn-success btn-block")));
        echo "

                  ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6ee893ddb8fbb8cc92edc838f75e9b54039f52f2077ff0e5933f1779a1be8f23->leave($__internal_6ee893ddb8fbb8cc92edc838f75e9b54039f52f2077ff0e5933f1779a1be8f23_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  86 => 33,  79 => 29,  72 => 25,  65 => 21,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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

{% block menu %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Registrate</h3>
                </div>
                <div class=\"panel-body\">

                  {{ form_start(form) }}


                      {{ form_row(form.username, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{ form_row(form.email, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{ form_row(form.Registrarse, {'attr': {'class': 'btn btn-lg btn-success btn-block'} }) }}

                  {{ form_end(form) }}

                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "GestorFCTBundle:Default:register.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/register.html.twig");
    }
}
