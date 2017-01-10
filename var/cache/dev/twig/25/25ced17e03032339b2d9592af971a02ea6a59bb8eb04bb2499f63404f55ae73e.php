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
        $__internal_95902dc569f289e531eb59a8f1b7ca8d2f96f29a06ad10f689a263223062d829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95902dc569f289e531eb59a8f1b7ca8d2f96f29a06ad10f689a263223062d829->enter($__internal_95902dc569f289e531eb59a8f1b7ca8d2f96f29a06ad10f689a263223062d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_95902dc569f289e531eb59a8f1b7ca8d2f96f29a06ad10f689a263223062d829->leave($__internal_95902dc569f289e531eb59a8f1b7ca8d2f96f29a06ad10f689a263223062d829_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_50c48e4fff2c05c4e0d874ae0414e9bcb9ea5ebbae4a00746ac3ee6ad69b6b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c48e4fff2c05c4e0d874ae0414e9bcb9ea5ebbae4a00746ac3ee6ad69b6b90->enter($__internal_50c48e4fff2c05c4e0d874ae0414e9bcb9ea5ebbae4a00746ac3ee6ad69b6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_50c48e4fff2c05c4e0d874ae0414e9bcb9ea5ebbae4a00746ac3ee6ad69b6b90->leave($__internal_50c48e4fff2c05c4e0d874ae0414e9bcb9ea5ebbae4a00746ac3ee6ad69b6b90_prof);

    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aeaa1dfc2745992e00b91d93f66e17267029662d5990276b05b4d4dfff1e1b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeaa1dfc2745992e00b91d93f66e17267029662d5990276b05b4d4dfff1e1b9f->enter($__internal_aeaa1dfc2745992e00b91d93f66e17267029662d5990276b05b4d4dfff1e1b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

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
        
        $__internal_aeaa1dfc2745992e00b91d93f66e17267029662d5990276b05b4d4dfff1e1b9f->leave($__internal_aeaa1dfc2745992e00b91d93f66e17267029662d5990276b05b4d4dfff1e1b9f_prof);

    }

    // line 57
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e8065324c11a27e233d4b55e2c0bec3b93608a9cb1e9fa75b73c651b62b67718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8065324c11a27e233d4b55e2c0bec3b93608a9cb1e9fa75b73c651b62b67718->enter($__internal_e8065324c11a27e233d4b55e2c0bec3b93608a9cb1e9fa75b73c651b62b67718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e8065324c11a27e233d4b55e2c0bec3b93608a9cb1e9fa75b73c651b62b67718->leave($__internal_e8065324c11a27e233d4b55e2c0bec3b93608a9cb1e9fa75b73c651b62b67718_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c943b5d06dd4b3919f43ecb640918c71ffa97de7791ca67b9c7470445c958188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c943b5d06dd4b3919f43ecb640918c71ffa97de7791ca67b9c7470445c958188->enter($__internal_c943b5d06dd4b3919f43ecb640918c71ffa97de7791ca67b9c7470445c958188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c943b5d06dd4b3919f43ecb640918c71ffa97de7791ca67b9c7470445c958188->leave($__internal_c943b5d06dd4b3919f43ecb640918c71ffa97de7791ca67b9c7470445c958188_prof);

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
