<?php

/* GestorFCTBundle:Default:index.html.twig */
class __TwigTemplate_090ad88f3508388f2e5a61b699bbb8ff66c407ce4f98ef502ee4db66caaed424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:index.html.twig", 1);
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
        $__internal_07ee3260b7698457fc47d196c204b95a70496a388097881026fcbdba1e16d2f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ee3260b7698457fc47d196c204b95a70496a388097881026fcbdba1e16d2f5->enter($__internal_07ee3260b7698457fc47d196c204b95a70496a388097881026fcbdba1e16d2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07ee3260b7698457fc47d196c204b95a70496a388097881026fcbdba1e16d2f5->leave($__internal_07ee3260b7698457fc47d196c204b95a70496a388097881026fcbdba1e16d2f5_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_32bf5a6c8b31ea0eac259fb818dfcd85f70c675e8a705ef638aa2e2da18b133b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bf5a6c8b31ea0eac259fb818dfcd85f70c675e8a705ef638aa2e2da18b133b->enter($__internal_32bf5a6c8b31ea0eac259fb818dfcd85f70c675e8a705ef638aa2e2da18b133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:index.html.twig"));

        // line 4
        echo "
  <a href=\"/gestor/logout\">logout</a>
  
";
        
        $__internal_32bf5a6c8b31ea0eac259fb818dfcd85f70c675e8a705ef638aa2e2da18b133b->leave($__internal_32bf5a6c8b31ea0eac259fb818dfcd85f70c675e8a705ef638aa2e2da18b133b_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:index.html.twig";
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

  <a href=\"/gestor/logout\">logout</a>
  
{% endblock %}
", "GestorFCTBundle:Default:index.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/index.html.twig");
    }
}
