<?php

/* GestorFCTBundle:Default:Conf_tabla.html.twig */
class __TwigTemplate_c214dbc9b50bd621a23b00dc9b72d304164693d80cb7b31a9745cc9355e6ce2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Conf_tabla.html.twig", 1);
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
        $__internal_b2b450e4ced552c63be8de06c2f0b1b60d831b22392ef0b493f92a76907081f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b450e4ced552c63be8de06c2f0b1b60d831b22392ef0b493f92a76907081f4->enter($__internal_b2b450e4ced552c63be8de06c2f0b1b60d831b22392ef0b493f92a76907081f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Conf_tabla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b450e4ced552c63be8de06c2f0b1b60d831b22392ef0b493f92a76907081f4->leave($__internal_b2b450e4ced552c63be8de06c2f0b1b60d831b22392ef0b493f92a76907081f4_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c81079a5785ba5d2e521735359d7784df1c3d3d6428f137216e8a407e676c8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81079a5785ba5d2e521735359d7784df1c3d3d6428f137216e8a407e676c8ba->enter($__internal_c81079a5785ba5d2e521735359d7784df1c3d3d6428f137216e8a407e676c8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Conf_tabla.html.twig"));

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
                            <th>PARAMETROS</th>
                            <th>CONFIGURACION</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["conf"]);
        foreach ($context['_seq'] as $context["_key"] => $context["conf"]) {
            // line 28
            echo "
                            <tr>
                              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "param", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["conf"], "configuracion", array()), "html", null, true);
            echo "</td>
                            </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conf'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
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
        
        $__internal_c81079a5785ba5d2e521735359d7784df1c3d3d6428f137216e8a407e676c8ba->leave($__internal_c81079a5785ba5d2e521735359d7784df1c3d3d6428f137216e8a407e676c8ba_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Conf_tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  77 => 31,  73 => 30,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
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
                            <th>PARAMETROS</th>
                            <th>CONFIGURACION</th>
                          </tr>
                        </thead>

                        <tbody>

                          {% for conf in conf %}

                            <tr>
                              <td>{{ conf.param }}</td>
                              <td>{{ conf.configuracion }}</td>
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
", "GestorFCTBundle:Default:Conf_tabla.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Conf_tabla.html.twig");
    }
}
