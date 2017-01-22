<?php

/* GestorFCTBundle:Default:Empresa_tabla.html.twig */
class __TwigTemplate_4ac942bf75fbdc09e64457ac8bd46a75f6559ab0086dffbdcc4e9adfd2b83ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:Empresa_tabla.html.twig", 1);
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
        $__internal_f8e343cbea1c422ca233286908a090281e0257f486146a95bfd131822f980bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e343cbea1c422ca233286908a090281e0257f486146a95bfd131822f980bfd->enter($__internal_f8e343cbea1c422ca233286908a090281e0257f486146a95bfd131822f980bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:Empresa_tabla.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e343cbea1c422ca233286908a090281e0257f486146a95bfd131822f980bfd->leave($__internal_f8e343cbea1c422ca233286908a090281e0257f486146a95bfd131822f980bfd_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_9689c2e08671ef760d792300d7677aeb76368b1c337c0687f145a501373f1fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9689c2e08671ef760d792300d7677aeb76368b1c337c0687f145a501373f1fec->enter($__internal_9689c2e08671ef760d792300d7677aeb76368b1c337c0687f145a501373f1fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:Empresa_tabla.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Empresas</h1>
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
                            <th>DIRECCION</th>
                            <th>CP</th>
                            <th>TELF 1</th>
                            <th>TELF 2</th>
                            <th>FECHA CREACION</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 33
            echo "
                            <tr>
                              <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "fechaCreacion", array()), "html", null, true);
            echo "</td>
                            </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
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
        
        $__internal_9689c2e08671ef760d792300d7677aeb76368b1c337c0687f145a501373f1fec->leave($__internal_9689c2e08671ef760d792300d7677aeb76368b1c337c0687f145a501373f1fec_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:Empresa_tabla.html.twig";
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
            <h1 class=\"page-header\">Empresas</h1>
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
                            <th>DIRECCION</th>
                            <th>CP</th>
                            <th>TELF 1</th>
                            <th>TELF 2</th>
                            <th>FECHA CREACION</th>
                          </tr>
                        </thead>

                        <tbody>

                          {% for empresa in empresas %}

                            <tr>
                              <td>{{ empresa.id }}</td>
                              <td>{{ empresa.nombre }}</td>
                              <td>{{ empresa.direccion }}</td>
                              <td>{{ empresa.cp }}</td>
                              <td>{{ empresa.telefono1 }}</td>
                              <td>{{ empresa.telefono2 }}</td>
                              <td>{{ empresa.fechaCreacion }}</td>
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
", "GestorFCTBundle:Default:Empresa_tabla.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/Empresa_tabla.html.twig");
    }
}
