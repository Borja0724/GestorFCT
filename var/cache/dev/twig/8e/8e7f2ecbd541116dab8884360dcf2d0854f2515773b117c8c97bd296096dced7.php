<?php

/* base.html.twig */
class __TwigTemplate_7574f74e5dc9ea462b9a0ccd254f472a3079a3c009ae4d1ca2f3841c48bc82ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc0084dc31a182c08459f8661995f4697018b3837b6edb9d3f18f637fffde5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0084dc31a182c08459f8661995f4697018b3837b6edb9d3f18f637fffde5c7->enter($__internal_cc0084dc31a182c08459f8661995f4697018b3837b6edb9d3f18f637fffde5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>

        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=no, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    </head>
    <body>

      ";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 56
        echo "
      ";
        // line 57
        $this->displayBlock('contenido', $context, $blocks);
        // line 58
        echo "
      ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>
";
        
        $__internal_cc0084dc31a182c08459f8661995f4697018b3837b6edb9d3f18f637fffde5c7->leave($__internal_cc0084dc31a182c08459f8661995f4697018b3837b6edb9d3f18f637fffde5c7_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c6f1dd1b4ee7d666a89274c2cf4b1529354be405d6542cfec6494ea1a96da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c6f1dd1b4ee7d666a89274c2cf4b1529354be405d6542cfec6494ea1a96da7->enter($__internal_57c6f1dd1b4ee7d666a89274c2cf4b1529354be405d6542cfec6494ea1a96da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_57c6f1dd1b4ee7d666a89274c2cf4b1529354be405d6542cfec6494ea1a96da7->leave($__internal_57c6f1dd1b4ee7d666a89274c2cf4b1529354be405d6542cfec6494ea1a96da7_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c102923942d4e77a86a399e9afd02cb183b7306b6c8d31a81166499ac3e7707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c102923942d4e77a86a399e9afd02cb183b7306b6c8d31a81166499ac3e7707->enter($__internal_1c102923942d4e77a86a399e9afd02cb183b7306b6c8d31a81166499ac3e7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 25
        echo "
      <div id=\"wrapper\" class=\"md-3\">

          <!-- Sidebar -->
          <div id=\"sidebar-wrapper\">
              <ul class=\"sidebar-nav\">
                  <li class=\"sidebar-brand\">
                      <a href=\"/\">
                          Gestor FCT
                      </a>
                  </li>
                  <li>
                      <a href=\"/empresa\">Listado Empresas</a>
                  </li>
                  <li>
                      <a href=\"/empresa/new\">Nueva Empresa</a>
                  </li>
                  <li>
                      <a href=\"/alumno/all\">Listado Alumnos </a>
                  </li>
                  <li>
                      <a href=\"/profesor/all\"> Listado Profesores </a>
                  </li>
                  <li>
                      <a href=\"/profesor/new\"> Nuevos Profesores </a>
                  </li>

              </ul>
          </div>
          <!-- /#sidebar-wrapper -->
      ";
        
        $__internal_1c102923942d4e77a86a399e9afd02cb183b7306b6c8d31a81166499ac3e7707->leave($__internal_1c102923942d4e77a86a399e9afd02cb183b7306b6c8d31a81166499ac3e7707_prof);

    }

    // line 57
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_95e4ed688324e267aedc40d993f95e3724c7e9c11667690116e00c0a019dcd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e4ed688324e267aedc40d993f95e3724c7e9c11667690116e00c0a019dcd80->enter($__internal_95e4ed688324e267aedc40d993f95e3724c7e9c11667690116e00c0a019dcd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_95e4ed688324e267aedc40d993f95e3724c7e9c11667690116e00c0a019dcd80->leave($__internal_95e4ed688324e267aedc40d993f95e3724c7e9c11667690116e00c0a019dcd80_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b40aba630e539f6ec98f1c622040d1c3605c7ae7473ea10d3ae5d5ccc49ee57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b40aba630e539f6ec98f1c622040d1c3605c7ae7473ea10d3ae5d5ccc49ee57->enter($__internal_3b40aba630e539f6ec98f1c622040d1c3605c7ae7473ea10d3ae5d5ccc49ee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3b40aba630e539f6ec98f1c622040d1c3605c7ae7473ea10d3ae5d5ccc49ee57->leave($__internal_3b40aba630e539f6ec98f1c622040d1c3605c7ae7473ea10d3ae5d5ccc49ee57_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  139 => 57,  102 => 25,  96 => 24,  84 => 12,  75 => 60,  73 => 59,  70 => 58,  68 => 57,  65 => 56,  63 => 24,  55 => 19,  50 => 17,  44 => 14,  39 => 12,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

    <head>

        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, shrink-to-fit=no, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>{% block title %}Welcome!{% endblock %}</title>

        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"{{ asset('css/simple-sidebar.css') }}\" rel=\"stylesheet\">

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    </head>
    <body>

      {% block menu %}

      <div id=\"wrapper\" class=\"md-3\">

          <!-- Sidebar -->
          <div id=\"sidebar-wrapper\">
              <ul class=\"sidebar-nav\">
                  <li class=\"sidebar-brand\">
                      <a href=\"/\">
                          Gestor FCT
                      </a>
                  </li>
                  <li>
                      <a href=\"/empresa\">Listado Empresas</a>
                  </li>
                  <li>
                      <a href=\"/empresa/new\">Nueva Empresa</a>
                  </li>
                  <li>
                      <a href=\"/alumno/all\">Listado Alumnos </a>
                  </li>
                  <li>
                      <a href=\"/profesor/all\"> Listado Profesores </a>
                  </li>
                  <li>
                      <a href=\"/profesor/new\"> Nuevos Profesores </a>
                  </li>

              </ul>
          </div>
          <!-- /#sidebar-wrapper -->
      {% endblock %}

      {% block contenido %}{% endblock%}

      {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/BorjaSalomDAW/app/Resources/views/base.html.twig");
    }
}
