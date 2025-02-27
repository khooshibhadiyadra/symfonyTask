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
class __TwigTemplate_ef18fe8c48d4cb5b4cc39e21df626980 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/employee_list.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 39
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        yield " 
   <h2>Books database application!</h2> 
   <div> 
      <a href = \"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_new");
        yield "\">Add</a> 
   </div> 
   <table class = \"table\">  
      <tr>  
         <th>Name</th>  
         <th>last Name</th>  
         <th>age</th> 
         <th>hobby</th> 
         <th>gender</th> 
          <th>about_me</th> 
           <th>salary</th> 
           <th>roles</th> 
           <th>city</th> 
           <th>created at</th> 
           <th>updated at</th> 
        
      </tr>  
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["emp"]) {
            yield " 
      <tr>  
         <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "firstName", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>   
         <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "lastName", [], "any", false, false, false, 24), "html", null, true);
            yield "</td> 
           <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "lastName", [], "any", false, false, false, 25), "html", null, true);
            yield "</td> 
           <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "hobby", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
           <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "gender", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
           <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "about_me", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
           <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "salary", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
           <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "roles", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
           <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "city", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
           <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "created_at", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
           <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp"], "updated_at", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>   
         <td><a href = \"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 34, $this->source); })()), "Id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">Edit</a></td>
         <td><a href = \"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["x"]) || array_key_exists("x", $context) ? $context["x"] : (function () { throw new RuntimeError('Variable "x" does not exist.', 35, $this->source); })()), "Id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\">Delete</a></td>
      </tr>  
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield " 
   </table>  
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
        return "employee/employee_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 37,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  99 => 21,  79 => 4,  62 => 1,  51 => 39,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %} 
   <h2>Books database application!</h2> 
   <div> 
      <a href = \"{{ path('app_book_new') }}\">Add</a> 
   </div> 
   <table class = \"table\">  
      <tr>  
         <th>Name</th>  
         <th>last Name</th>  
         <th>age</th> 
         <th>hobby</th> 
         <th>gender</th> 
          <th>about_me</th> 
           <th>salary</th> 
           <th>roles</th> 
           <th>city</th> 
           <th>created at</th> 
           <th>updated at</th> 
        
      </tr>  
      {% for emp in data %} 
      <tr>  
         <td>{{ emp.firstName }}</td>   
         <td>{{ emp.lastName }}</td> 
           <td>{{ emp.lastName }}</td> 
           <td>{{ emp.hobby }}</td>
           <td>{{ emp.gender }}</td>
           <td>{{ emp.about_me }}</td>
           <td>{{ emp.salary }}</td>
           <td>{{ emp.roles }}</td>
           <td>{{ emp.city }}</td>
           <td>{{ emp.created_at }}</td>
           <td>{{ emp.updated_at }}</td>   
         <td><a href = \"{{ path('app_book_update', { 'id' : x.Id }) }}\">Edit</a></td>
         <td><a href = \"{{ path('app_book_delete', { 'id' : x.Id }) }}\">Delete</a></td>
      </tr>  
      {% endfor %} 
   </table>  
{% endblock %} ", "employee/employee_list.html.twig", "/home/pcg/employee-crud/templates/employee/employee_list.html.twig");
    }
}
