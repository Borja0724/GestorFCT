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
        $__internal_c83b952e075064d9954a35ef50a2ea9f775e2b07276904b93441acb8968ba4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83b952e075064d9954a35ef50a2ea9f775e2b07276904b93441acb8968ba4a0->enter($__internal_c83b952e075064d9954a35ef50a2ea9f775e2b07276904b93441acb8968ba4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:profesor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c83b952e075064d9954a35ef50a2ea9f775e2b07276904b93441acb8968ba4a0->leave($__internal_c83b952e075064d9954a35ef50a2ea9f775e2b07276904b93441acb8968ba4a0_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_5bf5abbf8815aacb369b4b25213afc54d74b69873df4e94581d2da14e1391056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf5abbf8815aacb369b4b25213afc54d74b69873df4e94581d2da14e1391056->enter($__internal_5bf5abbf8815aacb369b4b25213afc54d74b69873df4e94581d2da14e1391056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:profesor.html.twig"));

        // line 4
        echo "<div id=\"page-content-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
              <table class=\"table table-hover\">

                <tr>

                  <th> # </th>
                  <th> NOMBRE </th>
                  <th> APELLIDOS </th>
                  <th> DEPARTAMENTOS</th>

                </tr>

                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["profesor"]);
        foreach ($context['_seq'] as $context["_key"] => $context["profesor"]) {
            // line 20
            echo "
                  <tr>
                      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "nombre", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "apellidos", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesor"], "departamento", array()), "html", null, true);
            echo "</td>
                  </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
              </table>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_5bf5abbf8815aacb369b4b25213afc54d74b69873df4e94581d2da14e1391056->leave($__internal_5bf5abbf8815aacb369b4b25213afc54d74b69873df4e94581d2da14e1391056_prof);

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
        return array (  87 => 29,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
                  <th> APELLIDOS </th>
                  <th> DEPARTAMENTOS</th>

                </tr>

                {% for profesor in profesor %}

                  <tr>
                      <td>{{ profesor.id }}</td>
                      <td>{{ profesor.nombre }}</td>
                      <td>{{ profesor.apellidos }}</td>
                      <td>{{ profesor.departamento }}</td>
                  </tr>

                {% endfor %}

              </table>
            </div>
        </div>
    </div>
</div>



{% endblock %}
", "GestorFCTBundle:Default:profesor.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/profesor.html.twig");
    }
}
