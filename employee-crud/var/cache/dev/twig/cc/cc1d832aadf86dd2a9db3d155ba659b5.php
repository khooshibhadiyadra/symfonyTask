<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* employee/list.html.twig */
class __TwigTemplate_919c010544916d05ae54441dfaa40276 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/list.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "
<style>
.page-link{
            background-color: #28a745;
            color: white;
            border: 1px solid #28a745;
           padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            list-style-type: none;
}
</style>
<div class=\"container\">
    <h2 class=\"text-center mt-5 mb-3\">Employee List</h2>
    <div class=\"card\">
        <div class=\"card-header\">
            <a class=\"btn btn-outline-primary\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_new");
        yield "\"> 
                Create New Employee 
            </a>
            <a class=\"btn btn-outline-primary\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"> 
               Logout
            </a>
        </div>
        <div class=\"card-body\">

        <form id=\"salary-filter-form\" method=\"get\" action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
        yield "\">
            <label for=\"salary\">Filter by Salary:</label>
            <input type=\"number\" min=\"0\" name=\"salaryInput\" id=\"salaryInput\" class=\"salaryInput\" oninput=\"this.value = 
            !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null\">
            <select name=\"salaryOperator\" id=\"salaryOperator\">
                <option value=\"\">Select Salary</option>
                <option value=\"=\"> == </option>
                <option value=\">=\"> >= </option>
                <option value=\"<=\"> <= </option>
                <option value=\">\"> > </option>
                <option value=\"<\"> < </option>
            </select>
            <button type=\"submit\" id=\"submitButton\" class=\"btn btn-outline-secondary\">Search</button>
            <button type=\"submit\" id=\"resetButton\" class=\"btn btn-outline-secondary\">Reset Filters</button>
        </form>

        <div id=\"employee-list\">
            ";
        // line 46
        yield from $this->loadTemplate("employee/_employee_list.html.twig", "employee/list.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["employees" => (isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 46, $this->source); })())]));
        // line 47
        yield "        </div>

        <nav aria-label=\"Page navigation\">
        ";
        // line 50
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 50, $this->source); })()) > 1)) {
            // line 51
            yield "        <a class=\"page-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 51, $this->source); })()) - 1), "salaryOperator" => (isset($context["salaryFilter"]) || array_key_exists("salaryFilter", $context) ? $context["salaryFilter"] : (function () { throw new RuntimeError('Variable "salaryFilter" does not exist.', 51, $this->source); })()), "salaryInput" => (isset($context["salaryInput"]) || array_key_exists("salaryInput", $context) ? $context["salaryInput"] : (function () { throw new RuntimeError('Variable "salaryInput" does not exist.', 51, $this->source); })())]), "html", null, true);
            yield "\" aria-label=\"Previous\">
            <span aria-hidden=\"true\">&laquo;</span>
        </a>
        ";
        }
        // line 55
        yield "     
       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 56, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 57
            yield "       ";
            if (($context["i"] >= 1.0)) {
                // line 58
                yield "       
        <a class=\"page-link\" href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list", ["page" => $context["i"], "salaryOperator" => (isset($context["salaryFilter"]) || array_key_exists("salaryFilter", $context) ? $context["salaryFilter"] : (function () { throw new RuntimeError('Variable "salaryFilter" does not exist.', 59, $this->source); })()), "salaryInput" => (isset($context["salaryInput"]) || array_key_exists("salaryInput", $context) ? $context["salaryInput"] : (function () { throw new RuntimeError('Variable "salaryInput" does not exist.', 59, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
       ";
            }
            // line 61
            yield "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "
       ";
        // line 63
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 63, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 63, $this->source); })()))) {
            // line 64
            yield "        <a class=\"page-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 64, $this->source); })()) + 1), "salaryOperator" => (isset($context["salaryFilter"]) || array_key_exists("salaryFilter", $context) ? $context["salaryFilter"] : (function () { throw new RuntimeError('Variable "salaryFilter" does not exist.', 64, $this->source); })()), "salaryInput" => (isset($context["salaryInput"]) || array_key_exists("salaryInput", $context) ? $context["salaryInput"] : (function () { throw new RuntimeError('Variable "salaryInput" does not exist.', 64, $this->source); })())]), "html", null, true);
            yield "\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
        </a>
       ";
        }
        // line 68
        yield "</nav>
        </div>
    </div>
</div>
<script>
    document.getElementById('salaryOperator').addEventListener('change', function() {
    var salaryOperator = this.value;
    var salaryInput = document.getElementById('salaryInput').value;
    var url = '";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
        yield "' + 
              (salaryOperator ? '?salaryOperator=' + salaryOperator : '') + 
              (salaryInput ? '&salaryInput=' + salaryInput : '');
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('employee_list').innerHTML = data;
        })
        .catch(error => console.error('Error fetching filtered employees:', error));
});

    document.getElementById('resetButton').addEventListener('click', function() {
    document.getElementById('salaryInput').value = '';
    document.getElementById('salaryOperator').value = '';
    var url = '";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
        yield "'; 
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('employee-list').innerHTML = data;
        })
        .catch(error => console.error('Error fetching filtered employees:', error));
});

</script> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  210 => 90,  193 => 76,  183 => 68,  175 => 64,  173 => 63,  170 => 62,  164 => 61,  157 => 59,  154 => 58,  151 => 57,  147 => 56,  144 => 55,  136 => 51,  134 => 50,  129 => 47,  127 => 46,  107 => 29,  98 => 23,  92 => 20,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}

<style>
.page-link{
            background-color: #28a745;
            color: white;
            border: 1px solid #28a745;
           padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            list-style-type: none;
}
</style>
<div class=\"container\">
    <h2 class=\"text-center mt-5 mb-3\">Employee List</h2>
    <div class=\"card\">
        <div class=\"card-header\">
            <a class=\"btn btn-outline-primary\" href=\"{{ path('employee_new') }}\"> 
                Create New Employee 
            </a>
            <a class=\"btn btn-outline-primary\" href=\"{{ path('app_logout') }}\"> 
               Logout
            </a>
        </div>
        <div class=\"card-body\">

        <form id=\"salary-filter-form\" method=\"get\" action=\"{{ path('employee_list') }}\">
            <label for=\"salary\">Filter by Salary:</label>
            <input type=\"number\" min=\"0\" name=\"salaryInput\" id=\"salaryInput\" class=\"salaryInput\" oninput=\"this.value = 
            !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null\">
            <select name=\"salaryOperator\" id=\"salaryOperator\">
                <option value=\"\">Select Salary</option>
                <option value=\"=\"> == </option>
                <option value=\">=\"> >= </option>
                <option value=\"<=\"> <= </option>
                <option value=\">\"> > </option>
                <option value=\"<\"> < </option>
            </select>
            <button type=\"submit\" id=\"submitButton\" class=\"btn btn-outline-secondary\">Search</button>
            <button type=\"submit\" id=\"resetButton\" class=\"btn btn-outline-secondary\">Reset Filters</button>
        </form>

        <div id=\"employee-list\">
            {% include 'employee/_employee_list.html.twig' with {'employees': employees} %}
        </div>

        <nav aria-label=\"Page navigation\">
        {% if currentPage > 1 %}
        <a class=\"page-link\" href=\"{{ path('employee_list', {'page': currentPage - 1, 'salaryOperator': salaryFilter, 'salaryInput': salaryInput}) }}\" aria-label=\"Previous\">
            <span aria-hidden=\"true\">&laquo;</span>
        </a>
        {% endif %}
     
       {% for i in 1..totalPages %}
       {% if i >= 1.0 %}
       
        <a class=\"page-link\" href=\"{{ path('employee_list', {'page': i, 'salaryOperator': salaryFilter, 'salaryInput': salaryInput}) }}\">{{ i }}</a>
       {% endif %}
       {% endfor %}

       {% if currentPage < totalPages %}
        <a class=\"page-link\" href=\"{{ path('employee_list', {'page': currentPage + 1, 'salaryOperator': salaryFilter, 'salaryInput': salaryInput}) }}\" aria-label=\"Next\">
            <span aria-hidden=\"true\">&raquo;</span>
        </a>
       {% endif %}
</nav>
        </div>
    </div>
</div>
<script>
    document.getElementById('salaryOperator').addEventListener('change', function() {
    var salaryOperator = this.value;
    var salaryInput = document.getElementById('salaryInput').value;
    var url = '{{ path('employee_list') }}' + 
              (salaryOperator ? '?salaryOperator=' + salaryOperator : '') + 
              (salaryInput ? '&salaryInput=' + salaryInput : '');
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('employee_list').innerHTML = data;
        })
        .catch(error => console.error('Error fetching filtered employees:', error));
});

    document.getElementById('resetButton').addEventListener('click', function() {
    document.getElementById('salaryInput').value = '';
    document.getElementById('salaryOperator').value = '';
    var url = '{{ path('employee_list') }}'; 
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById('employee-list').innerHTML = data;
        })
        .catch(error => console.error('Error fetching filtered employees:', error));
});

</script> 
{% endblock %}", "employee/list.html.twig", "/var/www/html/symfonyTask/employee-crud/templates/employee/list.html.twig");
    }
}
