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

/* employee/new.html.twig */
class __TwigTemplate_e7af60787958c9071aa9040e08af696d extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employee/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Create Employee";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

    <div class=\"card-header\">
        <a class=\"btn btn-outline-primary\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_list");
        yield "\"> 
            List of Employees
        </a>
    </div>
    <h1 align=\"center\">Create a New Employee</h1>
    
    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["class" => "employee-form"]]);
        yield "
<div class=\"container\">
   <div class=\"row\">
     <div class=\"col\">
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "firstName", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
     </div>
    
     <div class=\"col\">
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "lastName", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
     </div>
   </div>

    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "age", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
      <div class=\"col\">
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "hobby", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "gender", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
      <div class=\"col\">
        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "about_me", [], "any", false, false, false, 75), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "salary", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
    
      <div class=\"col\">
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "roles", [], "any", false, false, false, 84), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
      </div>
    <div>
    
    <div class=\"row col-sm-6\">
        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "city", [], "any", false, false, false, 89), 'row', ["attr" => ["class" => "col-sm-6"]]);
        yield "
    </div>
    <br>
     <div>
    <button type=\"submit\" class=\"btn btn-primary\" >Submit</button>
    </div>
</div>
</div>
<script>
\$('input').on('employee_age', function (event) {
    var regex = new RegExp(\"^[a-zA-Z0-9]+\$\");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});
</script>
";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        yield "
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
        return "employee/new.html.twig";
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
        return array (  236 => 107,  215 => 89,  207 => 84,  200 => 80,  192 => 75,  186 => 72,  177 => 66,  171 => 63,  162 => 57,  155 => 53,  148 => 49,  139 => 43,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Employee{% endblock %}

{% block body %}

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 3px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

    <div class=\"card-header\">
        <a class=\"btn btn-outline-primary\" href=\"{{ path('employee_list') }}\"> 
            List of Employees
        </a>
    </div>
    <h1 align=\"center\">Create a New Employee</h1>
    
    {{ form_start(form, {'attr': {'class': 'employee-form'}}) }}
<div class=\"container\">
   <div class=\"row\">
     <div class=\"col\">
        {{ form_row(form.firstName, {'attr': {'class': 'form-control'}}) }}
     </div>
    
     <div class=\"col\">
        {{ form_row(form.lastName, {'attr': {'class': 'form-control'}}) }}
     </div>
   </div>

    <div class=\"row\">
      <div class=\"col\">
        {{ form_row(form.age, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"col\">
        {{ form_row(form.hobby, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col\">
        {{ form_row(form.gender, {'attr': {'class': 'form-control'}}) }}
      </div>
      <div class=\"col\">
        {{ form_row(form.about_me, {'attr': {'class': 'form-control'}}) }}
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col\">
        {{ form_row(form.salary, {'attr': {'class': 'form-control'}}) }}
      </div>
    
      <div class=\"col\">
        {{ form_row(form.roles, {'attr': {'class': 'form-control'}}) }}
      </div>
    <div>
    
    <div class=\"row col-sm-6\">
        {{ form_row(form.city, {'attr': {'class': 'col-sm-6'}}) }}
    </div>
    <br>
     <div>
    <button type=\"submit\" class=\"btn btn-primary\" >Submit</button>
    </div>
</div>
</div>
<script>
\$('input').on('employee_age', function (event) {
    var regex = new RegExp(\"^[a-zA-Z0-9]+\$\");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});
</script>
{{ form_end(form) }}
{% endblock %}
", "employee/new.html.twig", "/var/www/html/symfonyTask/employee-crud/templates/employee/new.html.twig");
    }
}
