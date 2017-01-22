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
        $__internal_2f62d92107d9149d876bcfe8e9054dd1073e784d764d5e70e8b79b99895710c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f62d92107d9149d876bcfe8e9054dd1073e784d764d5e70e8b79b99895710c5->enter($__internal_2f62d92107d9149d876bcfe8e9054dd1073e784d764d5e70e8b79b99895710c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f62d92107d9149d876bcfe8e9054dd1073e784d764d5e70e8b79b99895710c5->leave($__internal_2f62d92107d9149d876bcfe8e9054dd1073e784d764d5e70e8b79b99895710c5_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f952ff857326b905fa47d2774be99f31af84a2fa4b3fdf272650a8924c29cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f952ff857326b905fa47d2774be99f31af84a2fa4b3fdf272650a8924c29cb7->enter($__internal_8f952ff857326b905fa47d2774be99f31af84a2fa4b3fdf272650a8924c29cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:register.html.twig"));

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

                    <div class=\"form-group\">

                      ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                      ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                      ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                      ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                      ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                      <br />

                      ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Registrarse", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-success btn-block")));
        echo "

                    </div>

                  ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_8f952ff857326b905fa47d2774be99f31af84a2fa4b3fdf272650a8924c29cb7->leave($__internal_8f952ff857326b905fa47d2774be99f31af84a2fa4b3fdf272650a8924c29cb7_prof);

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
        return array (  110 => 42,  103 => 38,  96 => 34,  92 => 33,  85 => 29,  81 => 28,  74 => 24,  70 => 23,  63 => 19,  59 => 18,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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

                    <div class=\"form-group\">

                      {{form_label(form.username)}}
                      {{ form_widget(form.username, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{form_label(form.email)}}
                      {{ form_widget(form.email, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{form_label(form.plainPassword.first)}}
                      {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{form_label(form.plainPassword.second)}}
                      {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'} }) }}

                      <br />

                      {{ form_widget(form.Registrarse, {'attr': {'class': 'btn btn-lg btn-success btn-block'} }) }}

                    </div>

                  {{ form_end(form) }}

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "GestorFCTBundle:Default:register.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/register.html.twig");
    }
}
