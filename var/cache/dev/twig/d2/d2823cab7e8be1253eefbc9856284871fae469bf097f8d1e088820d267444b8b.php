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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3825b30194adbe7eabbb6f0e15b7ae0df4b6cb88305ce76007ead0a678526b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3825b30194adbe7eabbb6f0e15b7ae0df4b6cb88305ce76007ead0a678526b35->enter($__internal_3825b30194adbe7eabbb6f0e15b7ae0df4b6cb88305ce76007ead0a678526b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3825b30194adbe7eabbb6f0e15b7ae0df4b6cb88305ce76007ead0a678526b35->leave($__internal_3825b30194adbe7eabbb6f0e15b7ae0df4b6cb88305ce76007ead0a678526b35_prof);

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
        return array (  11 => 1,);
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
", "GestorFCTBundle:Default:index.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/index.html.twig");
    }
}
