<?php

/* GestorFCTBundle:Default:empresa.html.twig */
class __TwigTemplate_5d84cf05434d9e7831c2bec706f098bcc205ed4f759958a8a43813331feb2e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:empresa.html.twig", 1);
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
        $__internal_fbe15473e6ca103c75020e24288924d22b20c6dd110e48b1793c2e5247458c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe15473e6ca103c75020e24288924d22b20c6dd110e48b1793c2e5247458c20->enter($__internal_fbe15473e6ca103c75020e24288924d22b20c6dd110e48b1793c2e5247458c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:empresa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe15473e6ca103c75020e24288924d22b20c6dd110e48b1793c2e5247458c20->leave($__internal_fbe15473e6ca103c75020e24288924d22b20c6dd110e48b1793c2e5247458c20_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e1f980dbd65dc19bbe0826038e15edc85ede0c3a87591bbcc229d0dd7492a786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f980dbd65dc19bbe0826038e15edc85ede0c3a87591bbcc229d0dd7492a786->enter($__internal_e1f980dbd65dc19bbe0826038e15edc85ede0c3a87591bbcc229d0dd7492a786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:empresa.html.twig"));

        // line 4
        echo "

<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Empresa</h1>
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
                              <th> DIRECCION </th>
                              <th> CP </th>
                              <th> TELF 1</th>
                              <th> TELF 2</th>
                              <th> FECHA CREACION </th>

                            </tr>
                          </thead>
                          <tbody>

                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 37
            echo "
                              <tr>
                                  <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "fechaCreacion", array()), "html", null, true);
            echo "</td>
                              </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        
        $__internal_e1f980dbd65dc19bbe0826038e15edc85ede0c3a87591bbcc229d0dd7492a786->leave($__internal_e1f980dbd65dc19bbe0826038e15edc85ede0c3a87591bbcc229d0dd7492a786_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:empresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  106 => 45,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  82 => 39,  78 => 37,  74 => 36,  40 => 4,  34 => 3,  11 => 1,);
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
            <h1 class=\"page-header\">Empresa</h1>
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
                              <th> DIRECCION </th>
                              <th> CP </th>
                              <th> TELF 1</th>
                              <th> TELF 2</th>
                              <th> FECHA CREACION </th>

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
", "GestorFCTBundle:Default:empresa.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/empresa.html.twig");
    }
}
