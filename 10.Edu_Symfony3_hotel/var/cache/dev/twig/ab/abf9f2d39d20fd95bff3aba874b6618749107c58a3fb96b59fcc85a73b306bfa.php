<?php

/* :home:available_room_list.html.twig */
class __TwigTemplate_092269ead4899e9119a758f53010467bea7596664aac4a31c9eef9913a6ad4f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:available_room_list.html.twig", 1);
        $this->blocks = [
            'top_bar' => [$this, 'block_top_bar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:available_room_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:available_room_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_top_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_bar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/progresbar.css"), "html", null, true);
        echo "\">

        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li class=\"is-active\">Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

    <form method=\"post\">
        <div align=\"center\" class=\"medium-12  columns\">
            <h2>Check your arrival dates and reservation details</h2>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"medium-12 large-12 columns\">
                <div align=\"center\" class=\"medium-6  columns\" >
                    <label for=\"dt1\">CHECK-IN:</label>
                    <input id=\"dt1\"  name=\"form[from]\"  type=\"date\" class=\"datepicker\" onchange=\"myFunction1('dt1')\" style=\"border-color: #00ace6;\"  required/>
                    <label for=\"dt2\">CHECK-OUT:</label>
                    <input id=\"dt2\"  name=\"form[to]\" type=\"date\" class=\"datepicker\" onchange=\"myFunction1('dt2')\" style=\"border-color: #00ace6;\" required/>
                </div>
                <div align=\"center\" style=\"padding-top: 10%\">
                    <input class=\"button\" id=\"search_offer\"  onchange=\"myFunction1('search_offer')\" type=\"submit\" value=\"SEARCH OFFER\" disabled=\"disabled\"/>
                    <input class=\"button\" onClick=\"window.location.reload()\" type=\"reset\" value=\"REFRESH\" />
                </div>
            </div>



            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Room Type</label>
                <div>
                    <select id=\"room_type\"  onchange=\"myFunction1('room_type')\" name=\"form[room_type]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"room_type1\" onchange=\"myFunction1('room_type1')\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" >Single</option>
                        <option id=\"room_type2\" onchange=\"myFunction1('room_type2')\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" >Double</option>
                        <option id=\"room_type3\" onchange=\"myFunction1('room_type3')\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" >Triple</option>
                    </select>
                </div>
            </div>

            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Adult</label>
                <div>

                    <select id=\"adult\" onchange=\"myFunction1('adult')\" name=\"form[adult]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"adult1\" onchange=\"myFunction1('adult1')\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 person</option>
                        <option id=\"adult2\" onchange=\"myFunction1('adult2')\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 persons</option>
                        <option id=\"adult3\" onchange=\"myFunction1('adult3')\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 persons</option>
                    </select>

                </div>

            </div>
            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Child</label>
                <div>
                    <select id=\"child\" onchange=\"myFunction1('child')\" name=\"form[child]\" style=\"border-color: #00ace6\" >
                        <option selected=\"selected\" value=\"0\">Choose</option>
                        <option id=\"child1\" onchange=\"myFunction1('child1')\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 child</option>
                        <option id=\"child2\" onchange=\"myFunction1('child2')\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 childs</option>
                        <option id=\"child3\" onchange=\"myFunction1('adult3')\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label style=\"text-align: center\">Baby</label>
                <div>
                    <select id=\"baby\" onchange=\"myFunction1('baby')\" name=\"form[baby]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\" value=\"0\">Choose</option>
                        <option id=\"baby1\" onchange=\"myFunction1('baby1')\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 1), "html", null, true);
        echo "\" disabled=\"disabled\">1 baby</option>
                        <option id=\"baby2\" onchange=\"myFunction1('baby2')\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 2), "html", null, true);
        echo "\" disabled=\"disabled\">2 babies</option>
                        <option id=\"baby3\" onchange=\"myFunction1('baby3')\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 3), "html", null, true);
        echo "\" disabled=\"disabled\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>


    </form>
    <hr>
    <h4 align=\"center\">AVAILABLE ROOMS</h4>
    <div>
        <table>
            <thead>
            <tr >
                <th width=\"200\" style=\"text-align: center\">Description</th>
                <th width=\"200\" style=\"text-align: center\">Type</th>
                <th width=\"200\" style=\"text-align: center\">Price</th>
                <th width=\"200\" style=\"text-align: center\">Your choice</th>
            </tr>
            </thead>
            <tbody >
            <div class=\"row\" id=\"offer_table\">
                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new Twig_Error_Runtime('Variable "rooms" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 114
            echo "                    <tr >
                        <td style=\"text-align: center\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "description", []), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center\">";
            // line 116
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "roomtype", []) . " ROOM"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center\">";
            // line 117
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["room"], "price", []) . " EUR"), "html", null, true);
            echo "</td>
                        <td style=\"text-align: center\"><a class=\"button\"  href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking", ["id_room" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "id", []))]), "html", null, true);
            echo "\">CHOOSE</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </div>
            </tbody>
        </table>
    </div>



    <script>
        function myFunction1() {
            var room_type = document.getElementById(\"room_type\");//room_type 1 2 3
            var adult = document.getElementById(\"adult\"); //child 1 2 3
            // var search_offer = document.getElementById(\"search_offer\");
            var child = document.getElementById(\"child\"); // baby for 1 2 3
            // var adult1 = document.getElementById(\"adult1\");
            // var adult2 = document.getElementById(\"adult2\");
            //var adult3 = document.getElementById(\"adult3\");
            //var offer_table = document.getElementById(\"offer_table\");



            var dt1 = document.getElementById(\"dt1\");
            var dt2 = document.getElementById(\"dt2\");



            // to trigger search_offer button just after dates , room_type and  adult selection
            if ( dt1.value !==\"\" && dt2.value !==\"\" && adult.value ===\"1\" || adult.value ===\"2\" || adult.value ===\"3\")
            {
                document.getElementById(\"search_offer\").disabled=false;
            }
            if(room_type.value === \"1\" ){
                // document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            else if(room_type.value === \"2\" ){
                //document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"adult2\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            else if (room_type.value === \"3\" ){
                //   document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"adult2\").disabled=false;
                document.getElementById(\"adult3\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            if(adult.value === \"1\" ){
                // document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
            }
            else if(adult.value === \"2\" ){
                //  document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
                document.getElementById(\"child2\").disabled=false;
            }
            else if(adult.value === \"3\" ){
                // document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
                document.getElementById(\"child2\").disabled=false;
                document.getElementById(\"child3\").disabled=false;
            }
            if(child.value === \"1\" ){
                // document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
            }
            else if(child.value === \"2\" ){
                //  document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
                document.getElementById(\"baby2\").disabled=false;
            }
            else if(child.value === \"3\" ){
                //   document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
                document.getElementById(\"baby2\").disabled=false;
                document.getElementById(\"baby3\").disabled=false;
            }
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":home:available_room_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 121,  239 => 118,  235 => 117,  231 => 116,  227 => 115,  224 => 114,  220 => 113,  194 => 90,  190 => 89,  186 => 88,  172 => 77,  168 => 76,  164 => 75,  150 => 64,  146 => 63,  142 => 62,  128 => 51,  124 => 50,  120 => 49,  80 => 12,  74 => 9,  71 => 8,  62 => 7,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block top_bar %}{% endblock %}


{% block body %}

    {{ dump() }}

    <div class=\"container-fluid\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/progresbar.css') }}\">

        <br /><br />
        <ul class=\"list-unstyled multi-steps\">
            <li class=\"is-active\">Your choice</li>
            <li>Booking information</li>
            <li>Booking validation or payment</li>
            <li>Booking confirmation</li>
        </ul>
    </div>

    <form method=\"post\">
        <div align=\"center\" class=\"medium-12  columns\">
            <h2>Check your arrival dates and reservation details</h2>
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"medium-12 large-12 columns\">
                <div align=\"center\" class=\"medium-6  columns\" >
                    <label for=\"dt1\">CHECK-IN:</label>
                    <input id=\"dt1\"  name=\"form[from]\"  type=\"date\" class=\"datepicker\" onchange=\"myFunction1('dt1')\" style=\"border-color: #00ace6;\"  required/>
                    <label for=\"dt2\">CHECK-OUT:</label>
                    <input id=\"dt2\"  name=\"form[to]\" type=\"date\" class=\"datepicker\" onchange=\"myFunction1('dt2')\" style=\"border-color: #00ace6;\" required/>
                </div>
                <div align=\"center\" style=\"padding-top: 10%\">
                    <input class=\"button\" id=\"search_offer\"  onchange=\"myFunction1('search_offer')\" type=\"submit\" value=\"SEARCH OFFER\" disabled=\"disabled\"/>
                    <input class=\"button\" onClick=\"window.location.reload()\" type=\"reset\" value=\"REFRESH\" />
                </div>
            </div>



            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Room Type</label>
                <div>
                    <select id=\"room_type\"  onchange=\"myFunction1('room_type')\" name=\"form[room_type]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"room_type1\" onchange=\"myFunction1('room_type1')\" value=\"{{ 1|number_format }}\" >Single</option>
                        <option id=\"room_type2\" onchange=\"myFunction1('room_type2')\" value=\"{{ 2|number_format }}\" >Double</option>
                        <option id=\"room_type3\" onchange=\"myFunction1('room_type3')\" value=\"{{ 3|number_format }}\" >Triple</option>
                    </select>
                </div>
            </div>

            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Adult</label>
                <div>

                    <select id=\"adult\" onchange=\"myFunction1('adult')\" name=\"form[adult]\" style=\"border-color: #00ace6\"  required>
                        <option selected=\"selected\" >Choose</option>
                        <option id=\"adult1\" onchange=\"myFunction1('adult1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 person</option>
                        <option id=\"adult2\" onchange=\"myFunction1('adult2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 persons</option>
                        <option id=\"adult3\" onchange=\"myFunction1('adult3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 persons</option>
                    </select>

                </div>

            </div>
            <div class=\"medium-3  columns\">
                <label style=\"text-align: center\">Child</label>
                <div>
                    <select id=\"child\" onchange=\"myFunction1('child')\" name=\"form[child]\" style=\"border-color: #00ace6\" >
                        <option selected=\"selected\" value=\"0\">Choose</option>
                        <option id=\"child1\" onchange=\"myFunction1('child1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 child</option>
                        <option id=\"child2\" onchange=\"myFunction1('child2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 childs</option>
                        <option id=\"child3\" onchange=\"myFunction1('adult3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 childs</option>

                    </select>

                </div>
            </div>
            <div class=\"medium-3 columns\">
                <label style=\"text-align: center\">Baby</label>
                <div>
                    <select id=\"baby\" onchange=\"myFunction1('baby')\" name=\"form[baby]\" style=\"border-color: #00ace6\">
                        <option selected=\"selected\" value=\"0\">Choose</option>
                        <option id=\"baby1\" onchange=\"myFunction1('baby1')\" value=\"{{ 1|number_format }}\" disabled=\"disabled\">1 baby</option>
                        <option id=\"baby2\" onchange=\"myFunction1('baby2')\" value=\"{{ 2|number_format }}\" disabled=\"disabled\">2 babies</option>
                        <option id=\"baby3\" onchange=\"myFunction1('baby3')\" value=\"{{ 3|number_format }}\" disabled=\"disabled\">3 babies</option>

                    </select>
                </div>
            </div>
        </div>


    </form>
    <hr>
    <h4 align=\"center\">AVAILABLE ROOMS</h4>
    <div>
        <table>
            <thead>
            <tr >
                <th width=\"200\" style=\"text-align: center\">Description</th>
                <th width=\"200\" style=\"text-align: center\">Type</th>
                <th width=\"200\" style=\"text-align: center\">Price</th>
                <th width=\"200\" style=\"text-align: center\">Your choice</th>
            </tr>
            </thead>
            <tbody >
            <div class=\"row\" id=\"offer_table\">
                {% for room in rooms %}
                    <tr >
                        <td style=\"text-align: center\">{{ room.description}}</td>
                        <td style=\"text-align: center\">{{ room.roomtype ~ \" ROOM\"  }}</td>
                        <td style=\"text-align: center\">{{ room.price ~ \" EUR\"}}</td>
                        <td style=\"text-align: center\"><a class=\"button\"  href=\"{{ path(\"booking\",{'id_room' : room.id|number_format })}}\">CHOOSE</a></td>
                    </tr>
                {% endfor %}
            </div>
            </tbody>
        </table>
    </div>



    <script>
        function myFunction1() {
            var room_type = document.getElementById(\"room_type\");//room_type 1 2 3
            var adult = document.getElementById(\"adult\"); //child 1 2 3
            // var search_offer = document.getElementById(\"search_offer\");
            var child = document.getElementById(\"child\"); // baby for 1 2 3
            // var adult1 = document.getElementById(\"adult1\");
            // var adult2 = document.getElementById(\"adult2\");
            //var adult3 = document.getElementById(\"adult3\");
            //var offer_table = document.getElementById(\"offer_table\");



            var dt1 = document.getElementById(\"dt1\");
            var dt2 = document.getElementById(\"dt2\");



            // to trigger search_offer button just after dates , room_type and  adult selection
            if ( dt1.value !==\"\" && dt2.value !==\"\" && adult.value ===\"1\" || adult.value ===\"2\" || adult.value ===\"3\")
            {
                document.getElementById(\"search_offer\").disabled=false;
            }
            if(room_type.value === \"1\" ){
                // document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            else if(room_type.value === \"2\" ){
                //document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"adult2\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            else if (room_type.value === \"3\" ){
                //   document.getElementById(\"adult\").disabled=false;
                document.getElementById(\"adult1\").disabled=false;
                document.getElementById(\"adult2\").disabled=false;
                document.getElementById(\"adult3\").disabled=false;
                document.getElementById(\"room_type\").style=\"pointer-events: none\";
            }
            if(adult.value === \"1\" ){
                // document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
            }
            else if(adult.value === \"2\" ){
                //  document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
                document.getElementById(\"child2\").disabled=false;
            }
            else if(adult.value === \"3\" ){
                // document.getElementById(\"child\").disabled=false;
                document.getElementById(\"child1\").disabled=false;
                document.getElementById(\"child2\").disabled=false;
                document.getElementById(\"child3\").disabled=false;
            }
            if(child.value === \"1\" ){
                // document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
            }
            else if(child.value === \"2\" ){
                //  document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
                document.getElementById(\"baby2\").disabled=false;
            }
            else if(child.value === \"3\" ){
                //   document.getElementById(\"baby\").disabled=false;
                document.getElementById(\"baby1\").disabled=false;
                document.getElementById(\"baby2\").disabled=false;
                document.getElementById(\"baby3\").disabled=false;
            }
        }
    </script>


{% endblock %}", ":home:available_room_list.html.twig", "/var/www/10.Edu_Symfony3_hotel/app/Resources/views/home/available_room_list.html.twig");
    }
}
