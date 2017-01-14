<?php

/* GestorFCTBundle:Default:profesor.html.twig */
class __TwigTemplate_2563f13e22ad98374a721edbca6afbb89d55a87aceb8f20adf1d008f9774cd7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:profesor.html.twig", 1);
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
        $__internal_bb331d3c84f6ba6c60bd2c281947ae66b0547299afd6951889b13d25dddb4086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb331d3c84f6ba6c60bd2c281947ae66b0547299afd6951889b13d25dddb4086->enter($__internal_bb331d3c84f6ba6c60bd2c281947ae66b0547299afd6951889b13d25dddb4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:profesor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb331d3c84f6ba6c60bd2c281947ae66b0547299afd6951889b13d25dddb4086->leave($__internal_bb331d3c84f6ba6c60bd2c281947ae66b0547299afd6951889b13d25dddb4086_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e78710b18598a9f44894aab35441e2a0328378ee82cae73c9f4d256a99490e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78710b18598a9f44894aab35441e2a0328378ee82cae73c9f4d256a99490e4c->enter($__internal_e78710b18598a9f44894aab35441e2a0328378ee82cae73c9f4d256a99490e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:profesor.html.twig"));

        // line 4
        echo "
<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Profesor</h1>
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
                              <th> APELLIDOS </th>
                              <th> DEPARTAMENTOS</th>

                            </tr>
                          </thead>
                          <tbody>

                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["profesor"]);
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 33
            echo "
                              <tr>
                                  <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellidos", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "departamento", array()), "html", null, true);
            echo "</td>
                              </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        
        $__internal_e78710b18598a9f44894aab35441e2a0328378ee82cae73c9f4d256a99490e4c->leave($__internal_e78710b18598a9f44894aab35441e2a0328378ee82cae73c9f4d256a99490e4c_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:profesor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  74 => 33,  70 => 32,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Profesor</h1>
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
                              <th> APELLIDOS </th>
                              <th> DEPARTAMENTOS</th>

                            </tr>
                          </thead>
                          <tbody>

                            {% for profesor in profesor %}

                              <tr>
                                  <td>{{ profesor.id }}</td>
                                  <td>{{ profesor.nombre }}</td>
                                  <td>{{ profesor.apellidos }}</td>
                                  <td>{{ profesor.departamento }}</td>
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
", "GestorFCTBundle:Default:profesor.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/profesor.html.twig");
    }
}
