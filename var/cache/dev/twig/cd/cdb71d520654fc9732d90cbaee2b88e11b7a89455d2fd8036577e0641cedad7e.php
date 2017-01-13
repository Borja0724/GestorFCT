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
        $__internal_9e63ef2a9db5505c8dea6feaaae3e4d210cca8ec2686455c95d485c1d1e6d381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e63ef2a9db5505c8dea6feaaae3e4d210cca8ec2686455c95d485c1d1e6d381->enter($__internal_9e63ef2a9db5505c8dea6feaaae3e4d210cca8ec2686455c95d485c1d1e6d381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:empresa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e63ef2a9db5505c8dea6feaaae3e4d210cca8ec2686455c95d485c1d1e6d381->leave($__internal_9e63ef2a9db5505c8dea6feaaae3e4d210cca8ec2686455c95d485c1d1e6d381_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_adf967a375402e0dba02e8ddb6a69413458e5797b5e830ecc8cd1ceb63dcb3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf967a375402e0dba02e8ddb6a69413458e5797b5e830ecc8cd1ceb63dcb3f6->enter($__internal_adf967a375402e0dba02e8ddb6a69413458e5797b5e830ecc8cd1ceb63dcb3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:empresa.html.twig"));

        // line 4
        echo "<div id=\"page-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
              <table class=\"table table-hover\">

                <tr>

                  <th> # </th>
                  <th> NOMBRE </th>
                  <th> DIRECCION </th>
                  <th> CP </th>
                  <th> TELF 1</th>
                  <th> TELF 2</th>
                  <th> FECHA CREACION </th>

                </tr>

                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 23
            echo "
                  <tr>
                      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombre", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "direccion", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "cp", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono1", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "telefono2", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "fechaCreacion", array()), "html", null, true);
            echo "</td>
                  </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
              </table>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_adf967a375402e0dba02e8ddb6a69413458e5797b5e830ecc8cd1ceb63dcb3f6->leave($__internal_adf967a375402e0dba02e8ddb6a69413458e5797b5e830ecc8cd1ceb63dcb3f6_prof);

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
                  <th> DIRECCION </th>
                  <th> CP </th>
                  <th> TELF 1</th>
                  <th> TELF 2</th>
                  <th> FECHA CREACION </th>

                </tr>

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

              </table>
            </div>
        </div>
    </div>
</div>



{% endblock %}
", "GestorFCTBundle:Default:empresa.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/empresa.html.twig");
    }
}
