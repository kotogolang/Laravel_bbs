<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* javascript/display.twig */
class __TwigTemplate_b65d84b9f00fa1e587392c2b302c38760b75edcfab7e61cfb3339e6291d50c05 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script type=\"text/javascript\">
if (typeof configInlineParams === \"undefined\" || !Array.isArray(configInlineParams)) configInlineParams = [];
configInlineParams.push(function() {
";
        // line 4
        echo twig_join_filter(($context["js_array"] ?? null), ";
");
        echo ";
});
if (typeof configScriptLoaded !== \"undefined\" && configInlineParams) loadInlineConfig();
</script>
";
    }

    public function getTemplateName()
    {
        return "javascript/display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "javascript/display.twig", "/home/ec2-user/environment/bbs/public/phpMyAdmin/templates/javascript/display.twig");
    }
}
