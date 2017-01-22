<?php

/* GestorFCTBundle:Default:Profesor_tabla.html.twig */
class __TwigTemplate_d0859547dbb5460ba719e73b668473dcb876442a2710c0d7670cd28e5662d552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Profesor_tabla.html.twig", 1);
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
        $__internal_e48e9a57a4afcbc96eb7827c87f1c12b2dbf01d35085ed0764a9be86d3ebf377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48e9a57a4afcbc96eb7827c87f1c12b2dbf01d35085ed0764a9be86d3ebf377->enter($__internal_e48e9a57a4afcbc96eb7827c87f1c12b2dbf01d35085ed0764a9be86d3ebf377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Profesor_tabla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48e9a57a4afcbc96eb7827c87f1c12b2dbf01d35085ed0764a9be86d3ebf377->leave($__internal_e48e9a57a4afcbc96eb7827c87f1c12b2dbf01d35085ed0764a9be86d3ebf377_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_db8b3da6d5a8110b735b36b9f757b314aa7856b8fad6bb97d2f6b175a0fdacb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8b3da6d5a8110b735b36b9f757b314aa7856b8fad6bb97d2f6b175a0fdacb3->enter($__internal_db8b3da6d5a8110b735b36b9f757b314aa7856b8fad6bb97d2f6b175a0fdacb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Profesor_tabla.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Profesores</h1>
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
                            <th>APELLIDOS</th>
                            <th>DEPARTAMENTOS</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["profesor"]);
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 30
            echo "
                            <tr>
                              <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellidos", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "departamento", array()), "html", null, true);
            echo "</td>
                            </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        
        $__internal_db8b3da6d5a8110b735b36b9f757b314aa7856b8fad6bb97d2f6b175a0fdacb3->leave($__internal_db8b3da6d5a8110b735b36b9f757b314aa7856b8fad6bb97d2f6b175a0fdacb3_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Profesor_tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Profesores</h1>
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
                            <th>APELLIDOS</th>
                            <th>DEPARTAMENTOS</th>
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
                  </div>
                </div>
              </div>
            </div>
          </div>

{% endblock %}
", "GestorFCTBundle:Default:Profesor_tabla.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Profesor_tabla.html.twig");
    }
}
