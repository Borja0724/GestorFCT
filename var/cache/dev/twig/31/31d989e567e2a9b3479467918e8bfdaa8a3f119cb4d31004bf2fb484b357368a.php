<?php

/* GestorFCTBundle:Default:alumno_tabla.html.twig */
class __TwigTemplate_960422a4a7dd45557a9565b79996b56654ba96090393ab74077fe7fbbbff62a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:alumno_tabla.html.twig", 1);
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
        $__internal_c8284b16ba0337f8d2d9848acc7db66288b2e6349889dd5609bfa0359ad3e8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8284b16ba0337f8d2d9848acc7db66288b2e6349889dd5609bfa0359ad3e8fd->enter($__internal_c8284b16ba0337f8d2d9848acc7db66288b2e6349889dd5609bfa0359ad3e8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:alumno_tabla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8284b16ba0337f8d2d9848acc7db66288b2e6349889dd5609bfa0359ad3e8fd->leave($__internal_c8284b16ba0337f8d2d9848acc7db66288b2e6349889dd5609bfa0359ad3e8fd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_b7d06427e0e08180c8a3903fc97603bcf7163dcf489cdd21a7bda1b9ef2587e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d06427e0e08180c8a3903fc97603bcf7163dcf489cdd21a7bda1b9ef2587e7->enter($__internal_b7d06427e0e08180c8a3903fc97603bcf7163dcf489cdd21a7bda1b9ef2587e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:alumno_tabla.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Alumnos</h1>
        </div>
    </div>

    <div class=\"row\">
        <div>
          <div class=\"panel panel-default\">
              <div class=\"panel-body\">
                  <div class=\"table-responsive\">
                      <table class=\"table table-hover\">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO 1</th>
                            <th>APELLIDO 2</th>
                            <th>CILCLO</th>
                            <th>EMPRESA</th>
                            <th>PROFESOR</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["alumno"]);
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 33
            echo "
                           <tr>
                             <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "id", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "nombre", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido1", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "apellido2", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno"], "ciclo", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "empresa", array()), "nombre", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno"], "profesor", array()), "nombre", array()), "html", null, true);
            echo "</td>
                           </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

";
        
        $__internal_b7d06427e0e08180c8a3903fc97603bcf7163dcf489cdd21a7bda1b9ef2587e7->leave($__internal_b7d06427e0e08180c8a3903fc97603bcf7163dcf489cdd21a7bda1b9ef2587e7_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:alumno_tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  102 => 41,  98 => 40,  94 => 39,  90 => 38,  86 => 37,  82 => 36,  78 => 35,  74 => 33,  70 => 32,  40 => 4,  34 => 3,  11 => 1,);
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
    </div>

    <div class=\"row\">
        <div>
          <div class=\"panel panel-default\">
              <div class=\"panel-body\">
                  <div class=\"table-responsive\">
                      <table class=\"table table-hover\">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO 1</th>
                            <th>APELLIDO 2</th>
                            <th>CILCLO</th>
                            <th>EMPRESA</th>
                            <th>PROFESOR</th>
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
                  </div>
                </div>
              </div>
            </div>
          </div>

{% endblock %}
", "GestorFCTBundle:Default:alumno_tabla.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/alumno_tabla.html.twig");
    }
}
