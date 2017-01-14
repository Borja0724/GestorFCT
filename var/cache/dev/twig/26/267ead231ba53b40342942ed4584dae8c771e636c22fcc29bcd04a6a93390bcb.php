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
        $__internal_b18dda86b327485eb9225693c5c504ecd8367bc95fe4fb29a9dc09f00bc27f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18dda86b327485eb9225693c5c504ecd8367bc95fe4fb29a9dc09f00bc27f3f->enter($__internal_b18dda86b327485eb9225693c5c504ecd8367bc95fe4fb29a9dc09f00bc27f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18dda86b327485eb9225693c5c504ecd8367bc95fe4fb29a9dc09f00bc27f3f->leave($__internal_b18dda86b327485eb9225693c5c504ecd8367bc95fe4fb29a9dc09f00bc27f3f_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c2963d3fa6eeff9ebc1f9c64317c07a807f80ad3a0bc72e95fc02015ce2b1cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2963d3fa6eeff9ebc1f9c64317c07a807f80ad3a0bc72e95fc02015ce2b1cf6->enter($__internal_c2963d3fa6eeff9ebc1f9c64317c07a807f80ad3a0bc72e95fc02015ce2b1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:alumno.html.twig"));

        // line 4
        echo "
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Alumnos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class=\"row\">
        <div>
            <div class=\"panel panel-default\">
                <!-- /.panel-heading -->
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                          <thead>
                            <tr>

                              <th> # </th>
                              <th> NOMBRE </th>
                              <th> APELLIDO 1 </th>
                              <th> APELLIDO 2 </th>
                              <th> CILCLO </th>
                              <th> EMPRESA </th>
                              <th> PROFESOR </th>

                            </tr>
                          </thead>
                          <tbody>
                            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["alumno"]);
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 35
            echo "
                              <tr>
                                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "profesor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                              </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                          </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->






";
        
        $__internal_c2963d3fa6eeff9ebc1f9c64317c07a807f80ad3a0bc72e95fc02015ce2b1cf6->leave($__internal_c2963d3fa6eeff9ebc1f9c64317c07a807f80ad3a0bc72e95fc02015ce2b1cf6_prof);

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
        return array (  114 => 47,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  80 => 37,  76 => 35,  72 => 34,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Alumnos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class=\"row\">
        <div>
            <div class=\"panel panel-default\">
                <!-- /.panel-heading -->
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                          <thead>
                            <tr>

                              <th> # </th>
                              <th> NOMBRE </th>
                              <th> APELLIDO 1 </th>
                              <th> APELLIDO 2 </th>
                              <th> CILCLO </th>
                              <th> EMPRESA </th>
                              <th> PROFESOR </th>

                            </tr>
                          </thead>
                          <tbody>
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

                          </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->






{% endblock %}
", "GestorFCTBundle:Default:alumno.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/alumno.html.twig");
    }
}
