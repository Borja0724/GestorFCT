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
        $__internal_89d4b26dc6134ac952c72e332eedadd0dbf6876a8b2f6dfebcfe716ef8193c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d4b26dc6134ac952c72e332eedadd0dbf6876a8b2f6dfebcfe716ef8193c95->enter($__internal_89d4b26dc6134ac952c72e332eedadd0dbf6876a8b2f6dfebcfe716ef8193c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

      <title> GESTOR FCT</title>
    </head>

    <body>

      ";
        // line 21
        $this->displayBlock('menu', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
  </body>
</html>
";
        
        $__internal_89d4b26dc6134ac952c72e332eedadd0dbf6876a8b2f6dfebcfe716ef8193c95->leave($__internal_89d4b26dc6134ac952c72e332eedadd0dbf6876a8b2f6dfebcfe716ef8193c95_prof);

    }

    // line 21
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c658e85fe27f389b5376a47aa81a5cad37c9d70ec00ea084e00de93f530efc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c658e85fe27f389b5376a47aa81a5cad37c9d70ec00ea084e00de93f530efc6->enter($__internal_5c658e85fe27f389b5376a47aa81a5cad37c9d70ec00ea084e00de93f530efc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 22
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
        // line 96
        $this->displayBlock('contenido', $context, $blocks);
        // line 97
        echo "
        </div>

    ";
        
        $__internal_5c658e85fe27f389b5376a47aa81a5cad37c9d70ec00ea084e00de93f530efc6->leave($__internal_5c658e85fe27f389b5376a47aa81a5cad37c9d70ec00ea084e00de93f530efc6_prof);

    }

    // line 96
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_070d63dfe45f97e97b6d30bdb6fb1dc7b24bf7e8202e8de1e4ee18da44cdb6a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070d63dfe45f97e97b6d30bdb6fb1dc7b24bf7e8202e8de1e4ee18da44cdb6a0->enter($__internal_070d63dfe45f97e97b6d30bdb6fb1dc7b24bf7e8202e8de1e4ee18da44cdb6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_070d63dfe45f97e97b6d30bdb6fb1dc7b24bf7e8202e8de1e4ee18da44cdb6a0->leave($__internal_070d63dfe45f97e97b6d30bdb6fb1dc7b24bf7e8202e8de1e4ee18da44cdb6a0_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_546b8b4107bccefc8a4a87a200f2fe89388036a7fc3a8abaedb08727e1c06632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546b8b4107bccefc8a4a87a200f2fe89388036a7fc3a8abaedb08727e1c06632->enter($__internal_546b8b4107bccefc8a4a87a200f2fe89388036a7fc3a8abaedb08727e1c06632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 103
        echo "
      <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/raphael.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/morris-data.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_546b8b4107bccefc8a4a87a200f2fe89388036a7fc3a8abaedb08727e1c06632->leave($__internal_546b8b4107bccefc8a4a87a200f2fe89388036a7fc3a8abaedb08727e1c06632_prof);

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
        return array (  217 => 110,  213 => 109,  209 => 108,  205 => 107,  201 => 106,  197 => 105,  193 => 104,  190 => 103,  184 => 102,  173 => 96,  163 => 97,  161 => 96,  85 => 22,  79 => 21,  69 => 113,  67 => 102,  64 => 101,  62 => 21,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  25 => 1,);
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
