<?php

/* GestorFCTBundle:Default:admin.html.twig */
class __TwigTemplate_5cd5a0f4dc7d9de4a250f88fa748e779131d8d63deafc50605e8e8281c10b5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:admin.html.twig", 1);
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
        $__internal_9779f25b60665154e5800ebe9f42c9dbb1f85e764bc78685524c5bb5e0a4db4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9779f25b60665154e5800ebe9f42c9dbb1f85e764bc78685524c5bb5e0a4db4e->enter($__internal_9779f25b60665154e5800ebe9f42c9dbb1f85e764bc78685524c5bb5e0a4db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9779f25b60665154e5800ebe9f42c9dbb1f85e764bc78685524c5bb5e0a4db4e->leave($__internal_9779f25b60665154e5800ebe9f42c9dbb1f85e764bc78685524c5bb5e0a4db4e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_74d5d2e4fc1160651b5c8c20e7942d1b8f1a0c0b8e5b8fdadb19d3b7c82ce06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d5d2e4fc1160651b5c8c20e7942d1b8f1a0c0b8e5b8fdadb19d3b7c82ce06d->enter($__internal_74d5d2e4fc1160651b5c8c20e7942d1b8f1a0c0b8e5b8fdadb19d3b7c82ce06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:admin.html.twig"));

        // line 4
        echo "
  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">USUARIOS</h1>
        </div>
    </div>

    <div class=\"row\">
        <div>
          <div class=\"panel panel-default\">
              <div class=\"panel-body\">
                  <div class=\"table-responsive\">
                      <table class=\"table table-hover\">
                        <thead>
                          <tr>
                            <th>Nombre usuario</th>
                            <th>Email</th>
                          </tr>
                        </thead>

                        <tbody>

                          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "
                           <tr>
                             <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                           </tr>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

";
        
        $__internal_74d5d2e4fc1160651b5c8c20e7942d1b8f1a0c0b8e5b8fdadb19d3b7c82ce06d->leave($__internal_74d5d2e4fc1160651b5c8c20e7942d1b8f1a0c0b8e5b8fdadb19d3b7c82ce06d_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  77 => 31,  73 => 30,  69 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
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

  <div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">USUARIOS</h1>
        </div>
    </div>

    <div class=\"row\">
        <div>
          <div class=\"panel panel-default\">
              <div class=\"panel-body\">
                  <div class=\"table-responsive\">
                      <table class=\"table table-hover\">
                        <thead>
                          <tr>
                            <th>Nombre usuario</th>
                            <th>Email</th>
                          </tr>
                        </thead>

                        <tbody>

                          {% for user in user %}

                           <tr>
                             <td>{{ user.username }}</td>
                             <td>{{ user.email }}</td>
                           </tr>

                          {% endfor %}

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

{% endblock %}
", "GestorFCTBundle:Default:admin.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/admin.html.twig");
    }
}
