<?php

/* /Applications/MAMP/htdocs/projects/october/themes/demo/partials/footer.htm */
class __TwigTemplate_18a92dc1caea146db0831d02cafccde68d308057146f55701a9cdeda2152be56 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Aaron Zhou</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/projects/october/themes/demo/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div id="footer">*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="muted credit">&copy; 2013 - {{ "now"|date("Y") }} Aaron Zhou</p>*/
/*     </div>*/
/* </div>*/
