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
        $__internal_92a019cbda4459ec5bf3b1fca266f3281cfb34882b1308aa3b9c9b809ce4fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a019cbda4459ec5bf3b1fca266f3281cfb34882b1308aa3b9c9b809ce4fc7e->enter($__internal_92a019cbda4459ec5bf3b1fca266f3281cfb34882b1308aa3b9c9b809ce4fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "
  </body>
</html>
";
        
        $__internal_92a019cbda4459ec5bf3b1fca266f3281cfb34882b1308aa3b9c9b809ce4fc7e->leave($__internal_92a019cbda4459ec5bf3b1fca266f3281cfb34882b1308aa3b9c9b809ce4fc7e_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        $__internal_377e6a24f76388714521c6d13766d6b294614c8f9c43070ebaa327aa07c71668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377e6a24f76388714521c6d13766d6b294614c8f9c43070ebaa327aa07c71668->enter($__internal_377e6a24f76388714521c6d13766d6b294614c8f9c43070ebaa327aa07c71668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

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
                  <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a></li>
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
                </ul>
              </div>
            </div>
          </nav>

        ";
        // line 97
        $this->displayBlock('contenido', $context, $blocks);
        // line 98
        echo "
        </div>

    ";
        
        $__internal_377e6a24f76388714521c6d13766d6b294614c8f9c43070ebaa327aa07c71668->leave($__internal_377e6a24f76388714521c6d13766d6b294614c8f9c43070ebaa327aa07c71668_prof);

    }

    // line 97
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_3b6228947dc19881e8bac1bbe84d4237aad830dab3d9f521c502575484863be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6228947dc19881e8bac1bbe84d4237aad830dab3d9f521c502575484863be1->enter($__internal_3b6228947dc19881e8bac1bbe84d4237aad830dab3d9f521c502575484863be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3b6228947dc19881e8bac1bbe84d4237aad830dab3d9f521c502575484863be1->leave($__internal_3b6228947dc19881e8bac1bbe84d4237aad830dab3d9f521c502575484863be1_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a372ae57f800474655eb8b4c5ecbe6b89057d9395d86328006bfc471b7fca4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a372ae57f800474655eb8b4c5ecbe6b89057d9395d86328006bfc471b7fca4f->enter($__internal_9a372ae57f800474655eb8b4c5ecbe6b89057d9395d86328006bfc471b7fca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 104
        echo "
      <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/raphael.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_9a372ae57f800474655eb8b4c5ecbe6b89057d9395d86328006bfc471b7fca4f->leave($__internal_9a372ae57f800474655eb8b4c5ecbe6b89057d9395d86328006bfc471b7fca4f_prof);

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
        return array (  221 => 111,  217 => 110,  213 => 109,  209 => 108,  205 => 107,  201 => 106,  197 => 105,  194 => 104,  188 => 103,  177 => 97,  167 => 98,  165 => 97,  89 => 23,  83 => 22,  73 => 114,  71 => 103,  68 => 102,  66 => 22,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
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
                  <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a></li>
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
