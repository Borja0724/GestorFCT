<?php

/* GestorFCTBundle:Default:alumno.html.twig */
class __TwigTemplate_5d7e7164b7a26b204ffe93cc808a3232085464ba31e7a3ed9a32e52662630095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:alumno.html.twig", 1);
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
        $__internal_93b6801b9dace1f440137f15b8ee711beccc6b95db85f346b3ff75f6f72facd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b6801b9dace1f440137f15b8ee711beccc6b95db85f346b3ff75f6f72facd6->enter($__internal_93b6801b9dace1f440137f15b8ee711beccc6b95db85f346b3ff75f6f72facd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b6801b9dace1f440137f15b8ee711beccc6b95db85f346b3ff75f6f72facd6->leave($__internal_93b6801b9dace1f440137f15b8ee711beccc6b95db85f346b3ff75f6f72facd6_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_751d59ac7bb231c8fa8953275e4f8ee455a575c555b086e57c2a22ec3752a976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751d59ac7bb231c8fa8953275e4f8ee455a575c555b086e57c2a22ec3752a976->enter($__internal_751d59ac7bb231c8fa8953275e4f8ee455a575c555b086e57c2a22ec3752a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:alumno.html.twig"));

        // line 4
        echo "<div id=\"page-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
              <table class=\"table table-hover\">

                <tr>

                  <th> # </th>
                  <th> NOMBRE </th>
                  <th> APELLIDO 1 </th>
                  <th> APELLIDO 2 </th>
                  <th> CILCLO </th>
                  <th> EMPRESA </th>
                  <th> PROFESOR </th>

                </tr>

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["alumno"]);
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 23
            echo "
                  <tr>
                      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "profesor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                  </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
              </table>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_751d59ac7bb231c8fa8953275e4f8ee455a575c555b086e57c2a22ec3752a976->leave($__internal_751d59ac7bb231c8fa8953275e4f8ee455a575c555b086e57c2a22ec3752a976_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  68 => 25,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"page-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
              <table class=\"table table-hover\">

                <tr>

                  <th> # </th>
                  <th> NOMBRE </th>
                  <th> APELLIDO 1 </th>
                  <th> APELLIDO 2 </th>
                  <th> CILCLO </th>
                  <th> EMPRESA </th>
                  <th> PROFESOR </th>

                </tr>

                {% for alumno in alumno %}

                  <tr>
                      <td>{{ alumno.id }}</td>
                      <td>{{ alumno.nombre }}</td>
                      <td>{{ alumno.apellido1 }}</td>
                      <td>{{ alumno.apellido2 }}</td>
                      <td>{{ alumno.ciclo }}</td>
                      <td>{{ alumno.empresa.nombre}}</td>
                      <td>{{ alumno.profesor.nombre}}</td>
                  </tr>

                {% endfor %}

              </table>
            </div>
        </div>
    </div>
</div>



{% endblock %}
", "GestorFCTBundle:Default:alumno.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/alumno.html.twig");
    }
}
