<?php

/* /Applications/MAMP/htdocs/projects/october/themes/demo/pages/getall.htm */
class __TwigTemplate_96a8f38cc449a2e8c762793fd0242f9eec5c0b7affbdd194cd7c592c7dda2d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account:signin"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/projects/october/themes/demo/pages/getall.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'account:signin' %}*/
