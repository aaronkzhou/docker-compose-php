<?php

/* /Applications/MAMP/htdocs/projects/october/themes/demo/layouts/default.htm */
class __TwigTemplate_8b01f4a4f9a571722fdbaeca1e1da13ae4a2e728d482c5ddcaa00c1dd05dbe47 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>OctoberCMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.css"));
        echo "\" rel=\"stylesheet\">
         <link href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.css.map"));
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">

            .intro-header {
                            padding-top: 210px;
                            padding-bottom: 225px;
                            text-align: center;
                            color: #f8f8f8;
                            background: url(";
        // line 21
        echo $this->env->getExtension('CMS')->themeFilter("assets/banner-bg.jpg");
        echo ") no-repeat center center;
                            background-size: cover;
                          }

        </style>
        <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    <body>
        <!--navbar-->
        <nav class=\"navbar navbar-default\" style=\"margin-bottom:0px\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\" >Aaron Zhou</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav navbar-right\">
              ";
        // line 45
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 46
            echo "                  <li><a>Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</a></li>
                  <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">Sign out</a></li>
                  <li><a href=\"./updatestatus\">Update info</a></li>
              ";
        } else {
            // line 50
            echo "                  <li><a href=\"./login\">Login</a></li>
                  <li><a href=\"./register\">Register</a></li>
              ";
        }
        // line 53
        echo "              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>


        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 61
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 62
        echo "        </section>
        <div class=\"col-md-8 col-md-offset-2\" ng-app=\"comment\" ng-controller=\"commentcontroller\">
            <div class=\"page-header\">
                <h4>your comment about this page</h4>
            </div>
           <form ng-submit=\"submitcomment()\">
              <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control input-sm\" name=\"author\" ng-model=\"commentdata.author\" placeholder=\"Name\">
              </div>
              <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control input-lg\" name=\"text\" ng-model=\"commentdata.text\" placeholder=\"Say what you have to say\">
              </div>
              <div class=\"form-group text-right\">
                  <button type=\"submit\" class=\"btn btn-primary btn-lg\">Submit</button>
              </div>
          </form>
          <p class=\"text-center\" ng-show=\"loading\"><span class=\"fa fa-meh-o fa-5x fa-spin\"></span></p>

          <div class=\"comment\" ng-hide=\"loading\" ng-repeat=\"comment in comments\">
              <h3>Comment #@";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id", array()), "html", null, true);
        echo " <small>by @";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "author", array()), "html", null, true);
        echo "</h3>
              <p>@";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "text", array()), "html", null, true);
        echo "</p>
              <p><a href=\"#\" ng-click=\"deletecomment(comment.id)\" class=\"text-muted\">Delete</a></p>
          </div>
          <footer id=\"layout-footer\">
              ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "          </footer>
        </div>
        <!-- Footer -->


        <!-- Scripts -->
        <script src=\"";
        // line 93
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js"));
        echo "\"></script>
        <script src=\"";
        // line 94
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/angular.js"));
        echo "\"></script>
        <script src=\"";
        // line 95
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/main.js"));
        echo "\"></script>
        ";
        // line 96
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 97
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 98
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/projects/october/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 98,  183 => 97,  176 => 96,  172 => 95,  168 => 94,  164 => 93,  156 => 87,  152 => 86,  145 => 82,  139 => 81,  118 => 62,  116 => 61,  106 => 53,  101 => 50,  91 => 46,  89 => 45,  81 => 40,  59 => 21,  48 => 13,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>OctoberCMS - {{ this.page.title }}</title>*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="OctoberCMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ ['assets/css/bootstrap.css']|theme }}" rel="stylesheet">*/
/*          <link href="{{ ['assets/css/bootstrap.css.map']|theme }}" rel="stylesheet">*/
/*         <style type="text/css">*/
/* */
/*             .intro-header {*/
/*                             padding-top: 210px;*/
/*                             padding-bottom: 225px;*/
/*                             text-align: center;*/
/*                             color: #f8f8f8;*/
/*                             background: url({{ 'assets/banner-bg.jpg'|theme }}) no-repeat center center;*/
/*                             background-size: cover;*/
/*                           }*/
/* */
/*         </style>*/
/*         <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     </head>*/
/*     <body>*/
/*         <!--navbar-->*/
/*         <nav class="navbar navbar-default" style="margin-bottom:0px">*/
/*           <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*               </button>*/
/*               <a class="navbar-brand" href="{{ 'home'|page }}" >Aaron Zhou</a>*/
/*             </div>*/
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*               {% if user %}*/
/*                   <li><a>Hello {{ user.firstname }} {{ user.name }}</a></li>*/
/*                   <li><a data-request="onLogout" data-request-data="redirect: '/login'">Sign out</a></li>*/
/*                   <li><a href="./updatestatus">Update info</a></li>*/
/*               {% else %}*/
/*                   <li><a href="./login">Login</a></li>*/
/*                   <li><a href="./register">Register</a></li>*/
/*               {% endif %}*/
/*               </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*           </div><!-- /.container-fluid -->*/
/*         </nav>*/
/* */
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             {% page %}*/
/*         </section>*/
/*         <div class="col-md-8 col-md-offset-2" ng-app="comment" ng-controller="commentcontroller">*/
/*             <div class="page-header">*/
/*                 <h4>your comment about this page</h4>*/
/*             </div>*/
/*            <form ng-submit="submitcomment()">*/
/*               <div class="form-group">*/
/*                   <input type="text" class="form-control input-sm" name="author" ng-model="commentdata.author" placeholder="Name">*/
/*               </div>*/
/*               <div class="form-group">*/
/*                   <input type="text" class="form-control input-lg" name="text" ng-model="commentdata.text" placeholder="Say what you have to say">*/
/*               </div>*/
/*               <div class="form-group text-right">*/
/*                   <button type="submit" class="btn btn-primary btn-lg">Submit</button>*/
/*               </div>*/
/*           </form>*/
/*           <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>*/
/* */
/*           <div class="comment" ng-hide="loading" ng-repeat="comment in comments">*/
/*               <h3>Comment #@{{ comment.id }} <small>by @{{ comment.author }}</h3>*/
/*               <p>@{{ comment.text }}</p>*/
/*               <p><a href="#" ng-click="deletecomment(comment.id)" class="text-muted">Delete</a></p>*/
/*           </div>*/
/*           <footer id="layout-footer">*/
/*               {% partial "footer" %}*/
/*           </footer>*/
/*         </div>*/
/*         <!-- Footer -->*/
/* */
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ ['assets/javascript/jquery.js']|theme }}"></script>*/
/*         <script src="{{ ['assets/javascript/angular.js']|theme }}"></script>*/
/*         <script src="{{ ['assets/javascript/main.js']|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/
