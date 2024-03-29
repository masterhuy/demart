<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig */
class __TwigTemplate_a405e56741893d9c6098f66e3b3fa2752a7c7321232663e14010456e5d2c4ae8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'backup_creation_form' => [$this, 'block_backup_creation_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_creation_form', $context, $blocks);
    }

    public function block_backup_creation_form($context, array $blocks = [])
    {
        // line 27
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_backups_create");
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("backup"), "html", null, true);
        echo "\">

  <button type=\"submit\" class=\"btn btn-outline-primary\">
    <i class=\"material-icons\">save</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I have read the disclaimer. Please create a new backup.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
  </button>
</form>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 32,  45 => 28,  40 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "D:\\xamppp\\htdocs\\jms_demart\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\Backup\\Blocks\\backup_form.html.twig");
    }
}
