<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
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
        $__internal_03de361dc0b5023179072013cc76568267a160d6a033330ba87dd163935787bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03de361dc0b5023179072013cc76568267a160d6a033330ba87dd163935787bf->enter($__internal_03de361dc0b5023179072013cc76568267a160d6a033330ba87dd163935787bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_38c6838dc2b356ab6f3fff7d373b20055eb4063e260b63bdbfff10e2e4c93bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c6838dc2b356ab6f3fff7d373b20055eb4063e260b63bdbfff10e2e4c93bfe->enter($__internal_38c6838dc2b356ab6f3fff7d373b20055eb4063e260b63bdbfff10e2e4c93bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03de361dc0b5023179072013cc76568267a160d6a033330ba87dd163935787bf->leave($__internal_03de361dc0b5023179072013cc76568267a160d6a033330ba87dd163935787bf_prof);

        
        $__internal_38c6838dc2b356ab6f3fff7d373b20055eb4063e260b63bdbfff10e2e4c93bfe->leave($__internal_38c6838dc2b356ab6f3fff7d373b20055eb4063e260b63bdbfff10e2e4c93bfe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c6e8d237e73c2336d4a3e526197c5cf39e7ac69ef723beea1aab0cfe4a9e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c6e8d237e73c2336d4a3e526197c5cf39e7ac69ef723beea1aab0cfe4a9e7a->enter($__internal_90c6e8d237e73c2336d4a3e526197c5cf39e7ac69ef723beea1aab0cfe4a9e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be0f00f4ed650a12049d8e4286e6e9269d02a4cef75bc7840e5261cd4a4e1e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0f00f4ed650a12049d8e4286e6e9269d02a4cef75bc7840e5261cd4a4e1e27->enter($__internal_be0f00f4ed650a12049d8e4286e6e9269d02a4cef75bc7840e5261cd4a4e1e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_be0f00f4ed650a12049d8e4286e6e9269d02a4cef75bc7840e5261cd4a4e1e27->leave($__internal_be0f00f4ed650a12049d8e4286e6e9269d02a4cef75bc7840e5261cd4a4e1e27_prof);

        
        $__internal_90c6e8d237e73c2336d4a3e526197c5cf39e7ac69ef723beea1aab0cfe4a9e7a->leave($__internal_90c6e8d237e73c2336d4a3e526197c5cf39e7ac69ef723beea1aab0cfe4a9e7a_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/bernardpineda/Desktop/Exercise Files/CH02/02_02/start/app/Resources/views/clients/index.html.twig");
    }
}
