<?php

/* GestorFCTBundle:Default:login.html.twig */
class __TwigTemplate_441907a94567d277d719d5395443c9d8c8d77431ca1cfeda1d87a4a33efbbf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GestorFCTBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e4dc336e7864e4fd9aacd547f3ad2650c51557028516f1137aa789bd6575e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4dc336e7864e4fd9aacd547f3ad2650c51557028516f1137aa789bd6575e44->enter($__internal_4e4dc336e7864e4fd9aacd547f3ad2650c51557028516f1137aa789bd6575e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestorFCTBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e4dc336e7864e4fd9aacd547f3ad2650c51557028516f1137aa789bd6575e44->leave($__internal_4e4dc336e7864e4fd9aacd547f3ad2650c51557028516f1137aa789bd6575e44_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71c0af88c22dd83777271719fdce8d9f8692bd17108efc9c487ab25b29ef4950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c0af88c22dd83777271719fdce8d9f8692bd17108efc9c487ab25b29ef4950->enter($__internal_71c0af88c22dd83777271719fdce8d9f8692bd17108efc9c487ab25b29ef4950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "GestorFCTBundle:Default:login.html.twig"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Sign In</h3>
                </div>
                <div class=\"panel-body\">

                  ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "
                    <div>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>

                  ";
        }
        // line 19
        echo "
                  <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus>
                    </div>

                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" autofocus>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked>Remember Me
                        </label>
                    </div>

                    <a href=\"/gestor/registrarse\"> Registrate </a>

                    <br />
                    <br />

                    <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Login</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_71c0af88c22dd83777271719fdce8d9f8692bd17108efc9c487ab25b29ef4950->leave($__internal_71c0af88c22dd83777271719fdce8d9f8692bd17108efc9c487ab25b29ef4950_prof);

    }

    public function getTemplateName()
    {
        return "GestorFCTBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 20,  63 => 19,  57 => 16,  54 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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

{% block menu %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Sign In</h3>
                </div>
                <div class=\"panel-body\">

                  {% if error %}

                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>

                  {% endif %}

                  <form action=\"{{ path('login') }}\" method=\"post\">

                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" autofocus>
                    </div>

                    <div class=\"form-group\">
                        <input class=\"form-control\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" autofocus>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked>Remember Me
                        </label>
                    </div>

                    <a href=\"/gestor/registrarse\"> Registrate </a>

                    <br />
                    <br />

                    <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Login</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "GestorFCTBundle:Default:login.html.twig", "/Users/Borja/Documents/Informatica/2DAW/DWES/Actividades/GestorFCT/src/GestorFCTBundle/Resources/views/Default/login.html.twig");
    }
}
