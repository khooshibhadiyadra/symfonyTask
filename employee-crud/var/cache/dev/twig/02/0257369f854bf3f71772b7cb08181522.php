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

/* employee/_employee_list.html.twig */
class __TwigTemplate_c621dfa9dda25cf4ec6834d476b92c79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/_employee_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/_employee_list.html.twig"));

        // line 2
        yield "<table border=\"1\">
    <thead>
        <tr>
  <th>Id</th>     
 <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
             <th colspan=\"3\">Hobby</th>
             <th>Gender</th>
              <th>About Me</th>
              <th>Salary</th>
              <th colspan=\"2\">Roles</th>
              <th>City</th>
              <th>Created At</th>
              <th>Updated at</th>
              <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 22, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 23
            yield "        <tr>
            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "firstName", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "lastName", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "age", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
            <td colspan=\"3\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "hobby", [], "any", false, false, false, 28), ", "), "html", null, true);
            yield "</td>
            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "gender", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "aboutMe", [], "any", false, false, false, 30), "html", null, true);
            yield " </td>
            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "salary", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
            <td colspan=\"2\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "roles", [], "any", false, false, false, 32), ", "), "html", null, true);
            yield "</td>
            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "city", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
           <td> ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "createdAt", [], "any", false, false, false, 34), "F jS \\a\\t g:ia"), "html", null, true);
            yield "</td>
            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "updatedAt", [], "any", false, false, false, 35), "F jS \\a\\t g:ia"), "html", null, true);
            yield "</td>
          
            <td>
             <form method=\"post\" action=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\">
             <a><button class=\"btn btn-outline-success\" href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield " \">Update</button></a>
             </form>

            <form method=\"post\" class=\"position-absolute  ms-5\" action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 43))), "html", null, true);
            yield "\">
            <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
            </form>
            </td>
       </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "        <tr>
        <td colspan=\"13\" style=\"text-align: center;\">No employees found.</td>
        </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employee'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "    
     
  </tbody>
</table>
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
        return "employee/_employee_list.html.twig";
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
        return array (  163 => 53,  154 => 49,  152 => 48,  142 => 43,  138 => 42,  132 => 39,  128 => 38,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  75 => 23,  70 => 22,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/employee/_employee_list.html.twig #}
<table border=\"1\">
    <thead>
        <tr>
  <th>Id</th>     
 <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
             <th colspan=\"3\">Hobby</th>
             <th>Gender</th>
              <th>About Me</th>
              <th>Salary</th>
              <th colspan=\"2\">Roles</th>
              <th>City</th>
              <th>Created At</th>
              <th>Updated at</th>
              <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        {% for employee in employees|sort %}
        <tr>
            <td>{{employee.id}}</td>
            <td>{{employee.firstName}}</td>
            <td>{{employee.lastName}}</td>
            <td>{{ employee.age }}</td>
            <td colspan=\"3\">{{ employee.hobby|join(', ') }}</td>
            <td>{{employee.gender}}</td>
            <td>{{employee.aboutMe}} </td>
            <td>{{employee.salary}}</td>
            <td colspan=\"2\">{{employee.roles|join(', ')}}</td>
            <td>{{employee.city}}</td>
           <td> {{ employee.createdAt|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
            <td>{{employee.updatedAt|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
          
            <td>
             <form method=\"post\" action=\"{{ path('employee_edit', {'id': employee.id}) }}\">
             <a><button class=\"btn btn-outline-success\" href=\"{{ path('employee_edit', {'id': employee.id}) }} \">Update</button></a>
             </form>

            <form method=\"post\" class=\"position-absolute  ms-5\" action=\"{{ path('employee_delete', {'id': employee.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ employee.id) }}\">
            <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
            </form>
            </td>
       </tr>
        {% else %}
        <tr>
        <td colspan=\"13\" style=\"text-align: center;\">No employees found.</td>
        </tr>
     {% endfor %}
    
     
  </tbody>
</table>
", "employee/_employee_list.html.twig", "/home/pcg/employee-crud/templates/employee/_employee_list.html.twig");
    }
}
