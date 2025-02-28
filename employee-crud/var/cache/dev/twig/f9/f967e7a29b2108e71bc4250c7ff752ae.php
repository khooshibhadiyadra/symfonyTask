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
class __TwigTemplate_52716c8009ddfad0cfb46cb268b35d96 extends Template
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
        yield "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Employee List</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_new");
        yield "\"> 
                    Create New Employee 
                </a>
            </div>
            <div class=\"card-body\">
<form id=\"salary-filter-form\" method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_filter_ajax");
        yield "\">
    <label for=\"salary\">Filter by Salary:</label>
    <input type=\"text\" name=\"salaryInput\" id=\"salaryInput\" class=\"salaryInput\">
        <select name=\"salaryOperator\" id=\"salaryOperator\">
        <option value=\"\">Select Salary</option>
            <option value=\"=\"> == </option>
            <option value=\">=\"> >= </option>
            <option value= \"<=\"> <= </option>
            <option value=\">\"> > </option>
            <option value=\"<\"> < </option>
        </select>

</form>

<div id=\"employee-list\">
    ";
        // line 26
        yield from $this->loadTemplate("employee/_employee_list.html.twig", "employee/list.html.twig", 26)->unwrap()->yield(CoreExtension::merge($context, ["employees" => (isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 26, $this->source); })())]));
        // line 27
        yield "</div>

<script>
document.getElementById('salaryOperator').addEventListener('change', function() {
var salaryOperator = this.value;
var get= document.getElementById('salaryInput').value;
var url = '";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_filter_ajax");
        yield "' + (salaryOperator ? '?salaryOperator' + salaryOperator : '')+ (salaryInput ?+  get : '');
    .then(response => response.text())
    .then(data => {
    document.getElementById('employee-list').innerHTML = data;
      })
      .catch(error => console.error('Error fetching filtered employees:', error));
    });
</script>

            </div>
        </div>
    </div>
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
        return array (  114 => 33,  106 => 27,  104 => 26,  86 => 11,  78 => 6,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Employee List</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('employee_new') }}\"> 
                    Create New Employee 
                </a>
            </div>
            <div class=\"card-body\">
<form id=\"salary-filter-form\" method=\"get\" action=\"{{ path('employee_filter_ajax') }}\">
    <label for=\"salary\">Filter by Salary:</label>
    <input type=\"text\" name=\"salaryInput\" id=\"salaryInput\" class=\"salaryInput\">
        <select name=\"salaryOperator\" id=\"salaryOperator\">
        <option value=\"\">Select Salary</option>
            <option value=\"=\"> == </option>
            <option value=\">=\"> >= </option>
            <option value= \"<=\"> <= </option>
            <option value=\">\"> > </option>
            <option value=\"<\"> < </option>
        </select>

</form>

<div id=\"employee-list\">
    {% include 'employee/_employee_list.html.twig' with {'employees': employees} %}
</div>

<script>
document.getElementById('salaryOperator').addEventListener('change', function() {
var salaryOperator = this.value;
var get= document.getElementById('salaryInput').value;
var url = '{{ path('employee_filter_ajax') }}' + (salaryOperator ? '?salaryOperator' + salaryOperator : '')+ (salaryInput ?+  get : '');
    .then(response => response.text())
    .then(data => {
    document.getElementById('employee-list').innerHTML = data;
      })
      .catch(error => console.error('Error fetching filtered employees:', error));
    });
</script>

            </div>
        </div>
    </div>
{% endblock %}
", "employee/list.html.twig", "/home/pcg/employee-crud/templates/employee/list.html.twig");
    }
}
