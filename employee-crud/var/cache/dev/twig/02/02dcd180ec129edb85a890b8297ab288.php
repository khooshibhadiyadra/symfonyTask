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
class __TwigTemplate_283810152279ce1c84f3cd9947fe00d2 extends Template
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

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Employee List</title>
    <style>
       table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
   
        tr:hover {
            background-color: #f1f1f1;
        }
   
        .btn {
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        .btn-outline-success {
            background-color: #28a745;
            color: white;
            border: 1px solid #28a745;
        }
        .btn-outline-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: 1px solid #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .position-absolute {
            position: absolute;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h2>Employee List</h2>
    <table>
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
                <th>Updated At</th>
                <th colspan=\"3\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 83, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            yield "   
            <tr>
                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>  
                <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "firstName", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "lastName", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "age", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                <td colspan=\"3\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "hobby", [], "any", false, false, false, 89), ", "), "html", null, true);
            yield "</td>
                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "gender", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "aboutMe", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "salary", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                <td colspan=\"2\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "roles", [], "any", false, false, false, 93), ", "), "html", null, true);
            yield "</td>
                <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "city", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "createdAt", [], "any", false, false, false, 95), "F j Y  \\a\\t g:ia", "Asia/Calcutta"), "html", null, true);
            yield "</td>
                <td>";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "updatedAt", [], "any", false, false, false, 96), "F j \\a\\t g:ia", "Asia/Calcutta"), "html", null, true);
            yield "</td>
                <td class=\"table-actions\">
                    <form method=\"post\" action=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            yield "\">
                        <a><button class=\"btn btn-outline-success\" href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\">Edit</button></a>
                    </form>
                    <form method=\"post\" action=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 102))), "html", null, true);
            yield "\">
                        <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                    </form>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 107
        if (!$context['_iterated']) {
            // line 108
            yield "            <tr>
                <td colspan=\"16\" style=\"text-align: center;\">No employees found.</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['employee'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "        </tbody>
    </table>
</body>
</html>
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
        return array (  244 => 112,  235 => 108,  233 => 107,  215 => 102,  211 => 101,  206 => 99,  202 => 98,  197 => 96,  193 => 95,  189 => 94,  185 => 93,  181 => 92,  177 => 91,  173 => 90,  169 => 89,  165 => 88,  161 => 87,  157 => 86,  153 => 85,  132 => 83,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Employee List</title>
    <style>
       table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
   
        tr:hover {
            background-color: #f1f1f1;
        }
   
        .btn {
            padding: 8px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }
        .btn-outline-success {
            background-color: #28a745;
            color: white;
            border: 1px solid #28a745;
        }
        .btn-outline-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: 1px solid #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .position-absolute {
            position: absolute;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h2>Employee List</h2>
    <table>
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
                <th>Updated At</th>
                <th colspan=\"3\">Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for employee in employees %}   
            <tr>
                <td>{{ loop.index}}</td>  
                <td>{{ employee.firstName }}</td>
                <td>{{ employee.lastName }}</td>
                <td>{{ employee.age }}</td>
                <td colspan=\"3\">{{ employee.hobby|join(', ') }}</td>
                <td>{{ employee.gender }}</td>
                <td>{{ employee.aboutMe }}</td>
                <td>{{ employee.salary }}</td>
                <td colspan=\"2\">{{ employee.roles|join(', ') }}</td>
                <td>{{ employee.city }}</td>
                <td>{{ employee.createdAt|date(\"F j Y  \\\\a\\\\t g:ia\", \"Asia/Calcutta\") }}</td>
                <td>{{ employee.updatedAt|date(\"F j \\\\a\\\\t g:ia\",\"Asia/Calcutta\")}}</td>
                <td class=\"table-actions\">
                    <form method=\"post\" action=\"{{ path('employee_edit', {'id': employee.id}) }}\">
                        <a><button class=\"btn btn-outline-success\" href=\"{{ path('employee_edit', {'id': employee.id}) }}\">Edit</button></a>
                    </form>
                    <form method=\"post\" action=\"{{ path('employee_delete', {'id': employee.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ employee.id) }}\">
                        <button class=\"btn btn-danger\" type=\"submit\">Delete</button>
                    </form>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"16\" style=\"text-align: center;\">No employees found.</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</body>
</html>
", "employee/_employee_list.html.twig", "/var/www/html/symfonyTask/employee-crud/templates/employee/_employee_list.html.twig");
    }
}
