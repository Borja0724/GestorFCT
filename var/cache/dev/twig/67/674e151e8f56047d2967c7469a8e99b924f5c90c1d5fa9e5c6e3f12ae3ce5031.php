<?php

/* GestorFCTBundle:Default:admin.html.twig */
class __TwigTemplate_5cd5a0f4dc7d9de4a250f88fa748e779131d8d63deafc50605e8e8281c10b5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:admin.html.twig", 1);
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
        $__internal_f8c2720793534f99a4908629fe3c2f641c00d80bde8882aed4eca4c9314c1ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c2720793534f99a4908629fe3c2f641c00d80bde8882aed4eca4c9314c1ec6->enter($__internal_f8c2720793534f99a4908629fe3c2f641c00d80bde8882aed4eca4c9314c1ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c2720793534f99a4908629fe3c2f641c00d80bde8882aed4eca4c9314c1ec6->leave($__internal_f8c2720793534f99a4908629fe3c2f641c00d80bde8882aed4eca4c9314c1ec6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2c34d985e489ecba8a52a884a5859be32e1ad5ef662d8ef9e364fc2e11386a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c34d985e489ecba8a52a884a5859be32e1ad5ef662d8ef9e364fc2e11386a34->enter($__internal_2c34d985e489ecba8a52a884a5859be32e1ad5ef662d8ef9e364fc2e11386a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:admin.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">ERES ADMIN</h1>
        </div>
    </div>
  </div>

";
        
        $__internal_2c34d985e489ecba8a52a884a5859be32e1ad5ef662d8ef9e364fc2e11386a34->leave($__internal_2c34d985e489ecba8a52a884a5859be32e1ad5ef662d8ef9e364fc2e11386a34_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">ERES ADMIN</h1>
        </div>
    </div>
  </div>

{% endblock %}
", "GestorFCTBundle:Default:admin.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/admin.html.twig");
    }
}
