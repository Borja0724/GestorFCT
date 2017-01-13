<?php

/* base.html.twig */
class __TwigTemplate_f7a6ab47ef6d94aac3ad9ef24ba3d161ab3f63aae953bccc48d53cad827b33b7 extends Twig_Template
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
        $__internal_6064bfdb5949d701420e30ecb8cdc3332c302a58e60b6af3e7b0c1a1a5633988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6064bfdb5949d701420e30ecb8cdc3332c302a58e60b6af3e7b0c1a1a5633988->enter($__internal_6064bfdb5949d701420e30ecb8cdc3332c302a58e60b6af3e7b0c1a1a5633988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6064bfdb5949d701420e30ecb8cdc3332c302a58e60b6af3e7b0c1a1a5633988->leave($__internal_6064bfdb5949d701420e30ecb8cdc3332c302a58e60b6af3e7b0c1a1a5633988_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_42c0cca66e42dc30cf74ddb1b287cba2d2b8d2d110e1c4150047d53506852efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c0cca66e42dc30cf74ddb1b287cba2d2b8d2d110e1c4150047d53506852efb->enter($__internal_42c0cca66e42dc30cf74ddb1b287cba2d2b8d2d110e1c4150047d53506852efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_42c0cca66e42dc30cf74ddb1b287cba2d2b8d2d110e1c4150047d53506852efb->leave($__internal_42c0cca66e42dc30cf74ddb1b287cba2d2b8d2d110e1c4150047d53506852efb_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a78ed82c99da73b38668a420bf3f15a4853c5c26cc649d5968d78d8ae7455c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78ed82c99da73b38668a420bf3f15a4853c5c26cc649d5968d78d8ae7455c58->enter($__internal_a78ed82c99da73b38668a420bf3f15a4853c5c26cc649d5968d78d8ae7455c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 25
        echo "
      <div id=\"wrapper\" class=\"md-3\">

          <!-- Sidebar -->
          <div id=\"sidebar-wrapper\">
              <ul class=\"sidebar-nav\">
                  <li class=\"sidebar-brand\">
                      <a href=\"/gestor/\">
                          Gestor FCT
                      </a>
                  </li>
                  <li>
                      <a href=\"/gestor/empresa\">Listado Empresas</a>
                  </li>
                  <li>
                      <a href=\"/gestor/empresa/new\">Nueva Empresa</a>
                  </li>
                  <li>
                      <a href=\"/gestor/alumno/all\">Listado Alumnos </a>
                  </li>
                  <li>
                      <a href=\"/gestor/profesor/all\"> Listado Profesores </a>
                  </li>
                  <li>
                      <a href=\"/gestor/profesor/new\"> Nuevos Profesores </a>
                  </li>

              </ul>
          </div>
          <!-- /#sidebar-wrapper -->
      ";
        
        $__internal_a78ed82c99da73b38668a420bf3f15a4853c5c26cc649d5968d78d8ae7455c58->leave($__internal_a78ed82c99da73b38668a420bf3f15a4853c5c26cc649d5968d78d8ae7455c58_prof);

    }

    // line 57
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f5c80434c9749f962156fdcb635bea5910b168566d98f758a1488fe8aec0793c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c80434c9749f962156fdcb635bea5910b168566d98f758a1488fe8aec0793c->enter($__internal_f5c80434c9749f962156fdcb635bea5910b168566d98f758a1488fe8aec0793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f5c80434c9749f962156fdcb635bea5910b168566d98f758a1488fe8aec0793c->leave($__internal_f5c80434c9749f962156fdcb635bea5910b168566d98f758a1488fe8aec0793c_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15a117b30986fd220a2a59b71450998464e1251c73c6be7e17ddc75c4ac0f902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a117b30986fd220a2a59b71450998464e1251c73c6be7e17ddc75c4ac0f902->enter($__internal_15a117b30986fd220a2a59b71450998464e1251c73c6be7e17ddc75c4ac0f902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_15a117b30986fd220a2a59b71450998464e1251c73c6be7e17ddc75c4ac0f902->leave($__internal_15a117b30986fd220a2a59b71450998464e1251c73c6be7e17ddc75c4ac0f902_prof);

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
                      <a href=\"/gestor/\">
                          Gestor FCT
                      </a>
                  </li>
                  <li>
                      <a href=\"/gestor/empresa\">Listado Empresas</a>
                  </li>
                  <li>
                      <a href=\"/gestor/empresa/new\">Nueva Empresa</a>
                  </li>
                  <li>
                      <a href=\"/gestor/alumno/all\">Listado Alumnos </a>
                  </li>
                  <li>
                      <a href=\"/gestor/profesor/all\"> Listado Profesores </a>
                  </li>
                  <li>
                      <a href=\"/gestor/profesor/new\"> Nuevos Profesores </a>
                  </li>

              </ul>
          </div>
          <!-- /#sidebar-wrapper -->
      {% endblock %}

      {% block contenido %}{% endblock%}

      {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/app/Resources/views/base.html.twig");
    }
}
