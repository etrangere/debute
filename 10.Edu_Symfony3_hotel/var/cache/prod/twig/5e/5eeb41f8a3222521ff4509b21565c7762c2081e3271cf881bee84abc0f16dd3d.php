<?php

/* :admin:index.html.twig */
class __TwigTemplate_24a7649f98f0b011bd0469fc31ec6ce66cd543358ea20a7107813a07461cd800 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":admin:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/debute/10.Edu_Symfony3_hotel/app/Resources/views/admin/index.html.twig");
    }
}
