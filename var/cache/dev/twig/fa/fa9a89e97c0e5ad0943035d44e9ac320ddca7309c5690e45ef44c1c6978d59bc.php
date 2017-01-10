<?php

/* GestorFCTBundle:Default:empresa.html.twig */
class __TwigTemplate_d4bb6340a2f5e614a8a74c1594441342d93c0df8404b1f20c89ff7d48d13d9ad extends Twig_Template
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
        $__internal_0a402ec9abe348bf0fc70fe80a510f7adf8d55b630c723ce22164c6c70de461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a402ec9abe348bf0fc70fe80a510f7adf8d55b630c723ce22164c6c70de461a->enter($__internal_0a402ec9abe348bf0fc70fe80a510f7adf8d55b630c723ce22164c6c70de461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:empresa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a402ec9abe348bf0fc70fe80a510f7adf8d55b630c723ce22164c6c70de461a->leave($__internal_0a402ec9abe348bf0fc70fe80a510f7adf8d55b630c723ce22164c6c70de461a_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2066036dbf045ecb509815af8f06897954d625811ad46b0832ffb3283dbbe44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2066036dbf045ecb509815af8f06897954d625811ad46b0832ffb3283dbbe44c->enter($__internal_2066036dbf045ecb509815af8f06897954d625811ad46b0832ffb3283dbbe44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:empresa.html.twig"));

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
        
        $__internal_2066036dbf045ecb509815af8f06897954d625811ad46b0832ffb3283dbbe44c->leave($__internal_2066036dbf045ecb509815af8f06897954d625811ad46b0832ffb3283dbbe44c_prof);

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
", "GestorFCTBundle:Default:empresa.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/src/GestorFCTBundle/Resources/views/Default/empresa.html.twig");
    }
}
