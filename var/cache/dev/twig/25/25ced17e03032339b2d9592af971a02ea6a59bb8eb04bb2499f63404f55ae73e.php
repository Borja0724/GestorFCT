<?php

/* base.html.twig */
class __TwigTemplate_f7a6ab47ef6d94aac3ad9ef24ba3d161ab3f63aae953bccc48d53cad827b33b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c25309ed44350c60b73dd63ee254e3e3aa2e816f0ff6a10fd38af47c86e10de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c25309ed44350c60b73dd63ee254e3e3aa2e816f0ff6a10fd38af47c86e10de->enter($__internal_8c25309ed44350c60b73dd63ee254e3e3aa2e816f0ff6a10fd38af47c86e10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>

      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">

      <title> GESTOR FCT</title>

      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
    <body>

      ";
        // line 23
        $this->displayBlock('menu', $context, $blocks);
        // line 120
        echo "


      ";
        // line 123
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "    </body>
</html>
";
        
        $__internal_8c25309ed44350c60b73dd63ee254e3e3aa2e816f0ff6a10fd38af47c86e10de->leave($__internal_8c25309ed44350c60b73dd63ee254e3e3aa2e816f0ff6a10fd38af47c86e10de_prof);

    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c539a1175e4f47e363cd6cb1e72a41c1b5c23d89ae53d145c1ac3ce766eda95c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c539a1175e4f47e363cd6cb1e72a41c1b5c23d89ae53d145c1ac3ce766eda95c->enter($__internal_c539a1175e4f47e363cd6cb1e72a41c1b5c23d89ae53d145c1ac3ce766eda95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 24
        echo "
      <div id=\"wrapper\">

          <!-- Navigation -->
          <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
              <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand\" href=\"index.html\">GESTOR FCT</a>
              </div>
              <!-- /.navbar-header -->

              <ul class=\"nav navbar-top-links navbar-right\">


                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                          <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                      </a>
                      <ul class=\"dropdown-menu dropdown-messages\">
                          <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                          </li>
                          <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                          </li>
                          <li class=\"divider\"></li>
                          <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                          </li>
                      </ul>
                      <!-- /.dropdown-user -->
                  </li>
                  <!-- /.dropdown -->
              </ul>
              <!-- /.navbar-top-links -->

              <div class=\"navbar-default sidebar\" role=\"navigation\">
                  <div class=\"sidebar-nav navbar-collapse\">
                      <ul class=\"nav\" id=\"side-menu\">


                          <li>
                              <a href=\"#\">Alumnos<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/alumno/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla alumno</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>

                          <li>
                              <a href=\"#\">Profesores<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/profesor/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario profesores</a>
                                  </li>
                                  <li>
                                      <a href=\"/gestor/profesor/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla profesores</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>

                          <li>
                              <a href=\"#\">Empresas<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/empresa/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario empresas</a>
                                  </li>
                                  <li>
                                      <a href=\"/gestor/empresa\"><i class=\"fa fa-table fa-fw\"></i>Tabla empresas</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>





                      </ul>
                  </div>
                  <!-- /.sidebar-collapse -->
              </div>
              <!-- /.navbar-static-side -->
          </nav>


        ";
        // line 115
        $this->displayBlock('contenido', $context, $blocks);
        // line 116
        echo "
    </div>

    ";
        
        $__internal_c539a1175e4f47e363cd6cb1e72a41c1b5c23d89ae53d145c1ac3ce766eda95c->leave($__internal_c539a1175e4f47e363cd6cb1e72a41c1b5c23d89ae53d145c1ac3ce766eda95c_prof);

    }

    // line 115
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7ce4afc3f0109ee42acf108c36b3b5cf2c03226bba94ea4e34fe948802b0c8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce4afc3f0109ee42acf108c36b3b5cf2c03226bba94ea4e34fe948802b0c8a3->enter($__internal_7ce4afc3f0109ee42acf108c36b3b5cf2c03226bba94ea4e34fe948802b0c8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7ce4afc3f0109ee42acf108c36b3b5cf2c03226bba94ea4e34fe948802b0c8a3->leave($__internal_7ce4afc3f0109ee42acf108c36b3b5cf2c03226bba94ea4e34fe948802b0c8a3_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd68ecc3179101ae94df46c47816e54125f1c18b7ccada0b4ce4cf9728c8600f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd68ecc3179101ae94df46c47816e54125f1c18b7ccada0b4ce4cf9728c8600f->enter($__internal_fd68ecc3179101ae94df46c47816e54125f1c18b7ccada0b4ce4cf9728c8600f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 124
        echo "
        <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

      ";
        
        $__internal_fd68ecc3179101ae94df46c47816e54125f1c18b7ccada0b4ce4cf9728c8600f->leave($__internal_fd68ecc3179101ae94df46c47816e54125f1c18b7ccada0b4ce4cf9728c8600f_prof);

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
        return array (  237 => 131,  233 => 130,  229 => 129,  225 => 128,  221 => 127,  217 => 126,  213 => 125,  210 => 124,  204 => 123,  193 => 115,  183 => 116,  181 => 115,  88 => 24,  82 => 23,  73 => 134,  71 => 123,  66 => 120,  64 => 23,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
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

      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">

      <title> GESTOR FCT</title>

      <link href=\"{{ asset('css/bootstrap.min.css') }}\"rel=\"stylesheet\">
      <link href=\"{{ asset('css/metisMenu.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/morris.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/font/css/font-awesome.min.css') }}\" rel=\"stylesheet\">

    </head>
    <body>

      {% block menu %}

      <div id=\"wrapper\">

          <!-- Navigation -->
          <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
              <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                  </button>
                  <a class=\"navbar-brand\" href=\"index.html\">GESTOR FCT</a>
              </div>
              <!-- /.navbar-header -->

              <ul class=\"nav navbar-top-links navbar-right\">


                  <li class=\"dropdown\">
                      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                          <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                      </a>
                      <ul class=\"dropdown-menu dropdown-messages\">
                          <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                          </li>
                          <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                          </li>
                          <li class=\"divider\"></li>
                          <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                          </li>
                      </ul>
                      <!-- /.dropdown-user -->
                  </li>
                  <!-- /.dropdown -->
              </ul>
              <!-- /.navbar-top-links -->

              <div class=\"navbar-default sidebar\" role=\"navigation\">
                  <div class=\"sidebar-nav navbar-collapse\">
                      <ul class=\"nav\" id=\"side-menu\">


                          <li>
                              <a href=\"#\">Alumnos<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/alumno/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla alumno</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>

                          <li>
                              <a href=\"#\">Profesores<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/profesor/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario profesores</a>
                                  </li>
                                  <li>
                                      <a href=\"/gestor/profesor/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla profesores</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>

                          <li>
                              <a href=\"#\">Empresas<span class=\"fa arrow\"></span></a>
                              <ul class=\"nav nav-second-level\">
                                  <li>
                                      <a href=\"/gestor/empresa/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario empresas</a>
                                  </li>
                                  <li>
                                      <a href=\"/gestor/empresa\"><i class=\"fa fa-table fa-fw\"></i>Tabla empresas</a>
                                  </li>
                              </ul>
                              <!-- /.nav-second-level -->
                          </li>





                      </ul>
                  </div>
                  <!-- /.sidebar-collapse -->
              </div>
              <!-- /.navbar-static-side -->
          </nav>


        {% block contenido %}{% endblock %}

    </div>

    {% endblock %}



      {% block javascripts %}

        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/metisMenu.min.js') }}\"></script>
        <script src=\"{{ asset('js/raphael.min.js') }}\"></script>
        <script src=\"{{ asset('js/morris.min.js') }}\"></script>
        <script src=\"{{ asset('js/morris-data.js') }}\"></script>
        <script src=\"{{ asset('js/sb-admin-2.js') }}\"></script>

      {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/app/Resources/views/base.html.twig");
    }
}
