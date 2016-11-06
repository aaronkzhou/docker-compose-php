<?php

/* /Applications/MAMP/htdocs/projects/october/themes/demo/layouts/fallback.htm */
class __TwigTemplate_8b9fd0f9a56b630702e06e2762addc36ee44f283e301061090f73849b507c413 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/projects/october/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/
