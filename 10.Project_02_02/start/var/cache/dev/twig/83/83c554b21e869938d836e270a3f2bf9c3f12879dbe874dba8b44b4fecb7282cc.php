<?php

/* clients/index.html.twig */
class __TwigTemplate_714dbe811080fcec9f940c669b742dd6cc126b7d96ff9e9d51e53ad98f30981b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_03fb586cf9a10b043d68eb0a33e1cffe2ac7b937905d48880a9f1b7093917aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fb586cf9a10b043d68eb0a33e1cffe2ac7b937905d48880a9f1b7093917aa3->enter($__internal_03fb586cf9a10b043d68eb0a33e1cffe2ac7b937905d48880a9f1b7093917aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_30ee59256750fd2c238b39ddc6030b91c2b8b7e3ee4a01027fed2fedb2127a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ee59256750fd2c238b39ddc6030b91c2b8b7e3ee4a01027fed2fedb2127a1e->enter($__internal_30ee59256750fd2c238b39ddc6030b91c2b8b7e3ee4a01027fed2fedb2127a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03fb586cf9a10b043d68eb0a33e1cffe2ac7b937905d48880a9f1b7093917aa3->leave($__internal_03fb586cf9a10b043d68eb0a33e1cffe2ac7b937905d48880a9f1b7093917aa3_prof);

        
        $__internal_30ee59256750fd2c238b39ddc6030b91c2b8b7e3ee4a01027fed2fedb2127a1e->leave($__internal_30ee59256750fd2c238b39ddc6030b91c2b8b7e3ee4a01027fed2fedb2127a1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc36bf4967523f3bdaf84fed6a7e53af641b1cf54066e2479e1933330defb3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc36bf4967523f3bdaf84fed6a7e53af641b1cf54066e2479e1933330defb3dd->enter($__internal_fc36bf4967523f3bdaf84fed6a7e53af641b1cf54066e2479e1933330defb3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5944b7e5e6977b4cf79cb07fe615e6ddd75111e5afb6030f94ce68ff7bc2dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5944b7e5e6977b4cf79cb07fe615e6ddd75111e5afb6030f94ce68ff7bc2dd9->enter($__internal_e5944b7e5e6977b4cf79cb07fe615e6ddd75111e5afb6030f94ce68ff7bc2dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_client", array("id_client" => 1));
        echo "\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>


                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 21
            echo "                <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["client"], "title", array())), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "last_name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "Email", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"hollow button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_client", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">EDIT</a>
                    <a class=\"hollow button warning\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "              <tr>

              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_e5944b7e5e6977b4cf79cb07fe615e6ddd75111e5afb6030f94ce68ff7bc2dd9->leave($__internal_e5944b7e5e6977b4cf79cb07fe615e6ddd75111e5afb6030f94ce68ff7bc2dd9_prof);

        
        $__internal_fc36bf4967523f3bdaf84fed6a7e53af641b1cf54066e2479e1933330defb3dd->leave($__internal_fc36bf4967523f3bdaf84fed6a7e53af641b1cf54066e2479e1933330defb3dd_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  94 => 26,  90 => 25,  85 => 23,  77 => 22,  74 => 21,  70 => 20,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"{{ path(\"new_client\",{'id_client' :1}) }}\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>


                {%  for client in clients %}
                <tr>
                <td>{{ client.title | upper }}. {{ client.name }} {{ client.last_name }}</td>
                <td>{{ client.Email }}</td>
                <td>
                    <a class=\"hollow button\" href=\"{{ path(\"modify_client\", { 'id_client': client.id }) }}\">EDIT</a>
                    <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': client.id }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
              {%  endfor %}
              <tr>

              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/clients/index.html.twig");
    }
}
