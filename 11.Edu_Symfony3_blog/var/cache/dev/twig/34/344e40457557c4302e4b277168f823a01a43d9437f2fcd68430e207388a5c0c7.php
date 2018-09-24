<?php

/* security/login.html.twig */
class __TwigTemplate_fab284af0b8f0649006b3140b40f59c496452668893b1b66162c97f3b72f9a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        if ($this->env->isDebug()) {
            $__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801vars = array();
            foreach ($context as $__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801key => $__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801val) {
                if (!$__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801val instanceof \Twig_Template) {
                    $__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801vars[$__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801key] = $__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801val;
                }
            }
            // line 4
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_a69b277d347b4eca92e122750fe3c13dc0e3c875841e4189df73024b64fbc801vars);
        }
        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-xs-12\">
               <h1>Login</h1>

               ";
        // line 10
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "                   <div class=\"alert alert-danger\">
                       ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>

               ";
        }
        // line 15
        echo "
              ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

               ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
               ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_password", array()), 'row');
        echo "

               <button type=\"submit\" class=\"btn btn-success\">Login<span class=\"fa fa-lock\"></span></button>

               ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

           </div>

        </div>

    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  80 => 19,  76 => 18,  71 => 16,  68 => 15,  62 => 12,  59 => 11,  57 => 10,  50 => 5,  47 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
{% dump %}
    <div class=\"container\">
        <div class=\"row\">
           <div class=\"col-xs-12\">
               <h1>Login</h1>

               {% if error %}
                   <div class=\"alert alert-danger\">
                       {{ error.messageKey|trans(error.messageData,'security') }}</div>

               {% endif %}

              {{ form_start(form) }}

               {{ form_row(form._username) }}
               {{ form_row(form._password) }}

               <button type=\"submit\" class=\"btn btn-success\">Login<span class=\"fa fa-lock\"></span></button>

               {{ form_end(form) }}

           </div>

        </div>

    </div>


{% endblock %}", "security/login.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/11.Edu_Symfony3_blog/app/Resources/views/security/login.html.twig");
    }
}
