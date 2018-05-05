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
        $__internal_a4d1aacde0bcec4772a974ce751fa08c34273c99ea948073309317a71024df9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d1aacde0bcec4772a974ce751fa08c34273c99ea948073309317a71024df9b->enter($__internal_a4d1aacde0bcec4772a974ce751fa08c34273c99ea948073309317a71024df9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_511f094b0a989dfe1fb40907b5f4734a0f03e13c475c078a47f351938b6bbe87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511f094b0a989dfe1fb40907b5f4734a0f03e13c475c078a47f351938b6bbe87->enter($__internal_511f094b0a989dfe1fb40907b5f4734a0f03e13c475c078a47f351938b6bbe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d1aacde0bcec4772a974ce751fa08c34273c99ea948073309317a71024df9b->leave($__internal_a4d1aacde0bcec4772a974ce751fa08c34273c99ea948073309317a71024df9b_prof);

        
        $__internal_511f094b0a989dfe1fb40907b5f4734a0f03e13c475c078a47f351938b6bbe87->leave($__internal_511f094b0a989dfe1fb40907b5f4734a0f03e13c475c078a47f351938b6bbe87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00e9c696a1b1f34ae67c21c579b6f7ef55fac3b629167f25e86914005eb7dc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e9c696a1b1f34ae67c21c579b6f7ef55fac3b629167f25e86914005eb7dc3e->enter($__internal_00e9c696a1b1f34ae67c21c579b6f7ef55fac3b629167f25e86914005eb7dc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51f1ae3c505e31cdee3d4a6ed2f3d1322d17b7b16e2f1229f11f7a2a6ba59eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f1ae3c505e31cdee3d4a6ed2f3d1322d17b7b16e2f1229f11f7a2a6ba59eff->enter($__internal_51f1ae3c505e31cdee3d4a6ed2f3d1322d17b7b16e2f1229f11f7a2a6ba59eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51f1ae3c505e31cdee3d4a6ed2f3d1322d17b7b16e2f1229f11f7a2a6ba59eff->leave($__internal_51f1ae3c505e31cdee3d4a6ed2f3d1322d17b7b16e2f1229f11f7a2a6ba59eff_prof);

        
        $__internal_00e9c696a1b1f34ae67c21c579b6f7ef55fac3b629167f25e86914005eb7dc3e->leave($__internal_00e9c696a1b1f34ae67c21c579b6f7ef55fac3b629167f25e86914005eb7dc3e_prof);

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
", "clients/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Project_02_02/start/app/Resources/views/clients/index.html.twig");
    }
}
