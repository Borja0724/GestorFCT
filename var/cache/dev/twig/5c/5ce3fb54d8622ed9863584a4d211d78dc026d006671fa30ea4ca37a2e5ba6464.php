<?php

/* GestorFCTBundle:Default:index.html.twig */
class __TwigTemplate_8289b832edbdf8e546c8d91a4f069c01c4bc006af908c7ff49783996d7f387b0 extends Twig_Template
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
        $__internal_29a2600bdf603271b894605843e48232e932ac61dfc2e1ce9610cf22a66fcfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a2600bdf603271b894605843e48232e932ac61dfc2e1ce9610cf22a66fcfa2->enter($__internal_29a2600bdf603271b894605843e48232e932ac61dfc2e1ce9610cf22a66fcfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a2600bdf603271b894605843e48232e932ac61dfc2e1ce9610cf22a66fcfa2->leave($__internal_29a2600bdf603271b894605843e48232e932ac61dfc2e1ce9610cf22a66fcfa2_prof);

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
", "GestorFCTBundle:Default:index.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/src/GestorFCTBundle/Resources/views/Default/index.html.twig");
    }
}
