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

/* employee/employee_list.html.twig */
class __TwigTemplate_481a6245cbd6d6896a08252c846cdc96 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        // line 2
        yield "
<h1>Employee List</h1>

<form id=\"salary-filter-form\" method=\"get\" action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee/list.html.twig");
        yield "\">
    <label for=\"salary\">Filter by Salary:</label>
    <select name=\"salary\" id=\"salary\">
        <option value=\"\">Select Salary</option>
        <option value=\"100\">100</option>
        <option value=\"200\">200</option>
        <option value=\"300\">300</option>
    </select>
</form>

<div id=\"employee-list\">
    ";
        // line 16
        yield from $this->loadTemplate("employee/_employee_list.html.twig", "employee/employee_list.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["employees" => (isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 16, $this->source); })())]));
        // line 17
        yield "</div>

<script>
document.getElementById('salary').addEventListener('change', function() {
var salary = this.value;
var url = '";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_filter_ajax");
        yield "' + (salary ? '?salary=' + salary : '');
fetch(url)
    .then(response => response.text())
    .then(data => {
    document.getElementById('employee-list').innerHTML = data;
      })
      .catch(error => console.error('Error fetching filtered employees:', error));
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/employee_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 22,  69 => 17,  67 => 16,  53 => 5,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/employee/list.html.twig #}

<h1>Employee List</h1>

<form id=\"salary-filter-form\" method=\"get\" action=\"{{ path('employee/list.html.twig') }}\">
    <label for=\"salary\">Filter by Salary:</label>
    <select name=\"salary\" id=\"salary\">
        <option value=\"\">Select Salary</option>
        <option value=\"100\">100</option>
        <option value=\"200\">200</option>
        <option value=\"300\">300</option>
    </select>
</form>

<div id=\"employee-list\">
    {% include 'employee/_employee_list.html.twig' with {'employees': employees} %}
</div>

<script>
document.getElementById('salary').addEventListener('change', function() {
var salary = this.value;
var url = '{{ path('employee_filter_ajax') }}' + (salary ? '?salary=' + salary : '');
fetch(url)
    .then(response => response.text())
    .then(data => {
    document.getElementById('employee-list').innerHTML = data;
      })
      .catch(error => console.error('Error fetching filtered employees:', error));
    });
</script>
", "employee/employee_list.html.twig", "/var/www/html/symfonyTask/employee-crud/templates/employee/employee_list.html.twig");
    }
}
