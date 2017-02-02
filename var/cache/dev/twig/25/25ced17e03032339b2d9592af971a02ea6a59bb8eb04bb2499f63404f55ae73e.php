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
        $__internal_2c397609ea439eafdfaf9c2e8baaaba2fbec55151f92ce6f3a065ac4216d5811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c397609ea439eafdfaf9c2e8baaaba2fbec55151f92ce6f3a065ac4216d5811->enter($__internal_2c397609ea439eafdfaf9c2e8baaaba2fbec55151f92ce6f3a065ac4216d5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">

      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"rel=\"stylesheet\">
      <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

      <title> GESTOR FCT</title>
    </head>

    <body>

      ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 128
        echo "
    ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 140
        echo "
  </body>
</html>
";
        
        $__internal_2c397609ea439eafdfaf9c2e8baaaba2fbec55151f92ce6f3a065ac4216d5811->leave($__internal_2c397609ea439eafdfaf9c2e8baaaba2fbec55151f92ce6f3a065ac4216d5811_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80f2d85c26064806a843d584016e7790b7de1caf99080ad01da503ac75b70f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f2d85c26064806a843d584016e7790b7de1caf99080ad01da503ac75b70f07->enter($__internal_80f2d85c26064806a843d584016e7790b7de1caf99080ad01da503ac75b70f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 23
        echo "
        <div id=\"wrapper\">
          <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

              <a class=\"navbar-brand\" href=\"#\">GESTOR FCT</a>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                  <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-messages\">

                  ";
        // line 45
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "
                      <li><a href=\"/gestor/admin\"><i class=\"fa fa-user fa-fw\"></i> Admin </a></li>

                  ";
        }
        // line 50
        echo "

                  <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"/gestor/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a></li>
                </ul>
              </li>
            </ul>

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
                  </li>

                  <li>
                    <a href=\"#\">Profesores<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/profesor/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla profesores</a>
                      </li>

                      <li>
                        <a href=\"/gestor/profesor/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario profesores</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href=\"#\">Empresas<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/empresa/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla empresas</a>
                      </li>

                      <li>
                        <a href=\"/gestor/empresa/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario empresas</a>
                      </li>
                    </ul>
                  </li>

                  ";
        // line 100
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 101
            echo "
                  <li>
                    <a href=\"#\">Configuracion<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/conf/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla configuracion</a>
                      </li>

                      <li>
                        <a href=\"/gestor/conf/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario configuracion</a>
                      </li>
                    </ul>
                  </li>

                  ";
        }
        // line 117
        echo "
                </ul>
              </div>
            </div>
          </nav>

        ";
        // line 123
        $this->displayBlock('contenido', $context, $blocks);
        // line 124
        echo "
        </div>

    ";
        
        $__internal_80f2d85c26064806a843d584016e7790b7de1caf99080ad01da503ac75b70f07->leave($__internal_80f2d85c26064806a843d584016e7790b7de1caf99080ad01da503ac75b70f07_prof);

    }

    // line 123
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_7529d7cef8e24e88e8604e9f3493d12233db5d91311b99357980aa3a5fabdd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7529d7cef8e24e88e8604e9f3493d12233db5d91311b99357980aa3a5fabdd4b->enter($__internal_7529d7cef8e24e88e8604e9f3493d12233db5d91311b99357980aa3a5fabdd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7529d7cef8e24e88e8604e9f3493d12233db5d91311b99357980aa3a5fabdd4b->leave($__internal_7529d7cef8e24e88e8604e9f3493d12233db5d91311b99357980aa3a5fabdd4b_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d1a9d2901f6d64eed3c7a10b6628ba2821c3aa29a0a9066f14f339d3353c60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1a9d2901f6d64eed3c7a10b6628ba2821c3aa29a0a9066f14f339d3353c60f->enter($__internal_2d1a9d2901f6d64eed3c7a10b6628ba2821c3aa29a0a9066f14f339d3353c60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 130
        echo "
      <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/raphael.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_2d1a9d2901f6d64eed3c7a10b6628ba2821c3aa29a0a9066f14f339d3353c60f->leave($__internal_2d1a9d2901f6d64eed3c7a10b6628ba2821c3aa29a0a9066f14f339d3353c60f_prof);

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
        return array (  257 => 137,  253 => 136,  249 => 135,  245 => 134,  241 => 133,  237 => 132,  233 => 131,  230 => 130,  224 => 129,  213 => 123,  203 => 124,  201 => 123,  193 => 117,  175 => 101,  173 => 100,  121 => 50,  115 => 46,  113 => 45,  89 => 23,  83 => 22,  73 => 140,  71 => 129,  68 => 128,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
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

      <link href=\"{{ asset('css/bootstrap.min.css') }}\"rel=\"stylesheet\">
      <link href=\"{{ asset('css/metisMenu.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/morris.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/font/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
      <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

      <title> GESTOR FCT</title>
    </head>

    <body>

      {% block menu %}

        <div id=\"wrapper\">
          <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>

              <a class=\"navbar-brand\" href=\"#\">GESTOR FCT</a>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
              <li class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                  <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-messages\">

                  {% if is_granted('ROLE_ADMIN') %}

                      <li><a href=\"/gestor/admin\"><i class=\"fa fa-user fa-fw\"></i> Admin </a></li>

                  {% endif %}


                  <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a></li>
                  <li class=\"divider\"></li>
                  <li><a href=\"/gestor/logout\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a></li>
                </ul>
              </li>
            </ul>

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
                  </li>

                  <li>
                    <a href=\"#\">Profesores<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/profesor/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla profesores</a>
                      </li>

                      <li>
                        <a href=\"/gestor/profesor/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario profesores</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href=\"#\">Empresas<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/empresa/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla empresas</a>
                      </li>

                      <li>
                        <a href=\"/gestor/empresa/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario empresas</a>
                      </li>
                    </ul>
                  </li>

                  {% if is_granted('ROLE_SUPER_ADMIN') %}

                  <li>
                    <a href=\"#\">Configuracion<span class=\"fa arrow\"></span></a>

                    <ul class=\"nav nav-second-level\">
                      <li>
                        <a href=\"/gestor/conf/all\"><i class=\"fa fa-table fa-fw\"></i>Tabla configuracion</a>
                      </li>

                      <li>
                        <a href=\"/gestor/conf/new\"><i class=\"fa fa-edit fa-fw\"></i> Formulario configuracion</a>
                      </li>
                    </ul>
                  </li>

                  {% endif %}

                </ul>
              </div>
            </div>
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
