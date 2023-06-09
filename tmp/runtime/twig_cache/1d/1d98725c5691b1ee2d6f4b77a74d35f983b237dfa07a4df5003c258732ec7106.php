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

/* __string_template__0bc8e4c0b5b5d70124520dfddbfaab7244dae88cd1d1b052f8d05b97c9a65af1 */
class __TwigTemplate_192ac31dfdba74e3af6d4485f57d802093e8feea90b63392e88d4390a784df63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'nav_bar' => [$this, 'block_nav_bar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'themescripts' => [$this, 'block_themescripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 15
        echo "


";
        // line 86
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 88
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "dir", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "html", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "html", []));
        echo ">

    ";
        // line 91
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/header/head.twig");
        echo "

    <body class=\" ";
        // line 93
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "body", []));
        echo " font-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "font", []));
        echo " lang-";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "languagecode", []));
        echo " ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "surveyformat", []));
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "options", []), "brandlogo", []) == "on")) {
            echo "brand-logo";
        }
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "body", []));
        echo " >

        ";
        // line 96
        echo "        <div id=\"beginScripts\">
            <###begin###>
        </div>

        ";
        // line 101
        echo "        <article>

            <div id=\"";
        // line 103
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "dynamicreload", []));
        echo "\">
            ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "            </div>
        </article>
        ";
        // line 192
        $this->displayBlock('footer', $context, $blocks);
        // line 195
        echo "        <div id=\"bottomScripts\">
            <###end###>
        </div>
        ";
        // line 198
        $this->displayBlock('themescripts', $context, $blocks);
        // line 203
        echo "    </body>
</html>
";
    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        // line 105
        echo "                ";
        // line 106
        echo "                ";
        $this->displayBlock('nav_bar', $context, $blocks);
        // line 109
        echo "

                ";
        // line 112
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 184
        echo "

            ";
        // line 187
        echo "            ";
        echo LS_Twig_Extension::registerScript("BasicThemeScripts", " if(window.basicThemeScripts === undefined){ window.basicThemeScripts = new ThemeScripts(); } basicThemeScripts.initGlobal(); ", "POS_END");
        echo "

            ";
    }

    // line 106
    public function block_nav_bar($context, array $blocks = [])
    {
        // line 107
        echo "                    ";
        echo twig_include($this->env, $context, "./subviews/header/nav_bar.twig");
        echo "
                ";
    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        // line 113
        echo "                    <div class=\"container-fluid\">
                    ";
        // line 114
        echo LS_Twig_Extension::registerTemplateCssFile("./css/survey-list.css");
        echo "
                
                    <div class=\"";
        // line 116
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrow", []));
        echo " row\" id=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "surveylistrow", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrow", []));
        echo ">

                        ";
        // line 119
        echo "                        ";
        echo twig_include($this->env, $context, "./subviews/messages/no_js_alert.twig");
        echo "

                        <div id=\"";
        // line 121
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "surveylistrowjumbotron", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowjumbotron", []));
        echo ">
                            ";
        // line 122
        echo LS_Twig_Extension::image("./files/survey_list_header.png", $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "name", [])), ["class" => "img-responsive center-block"]);
        echo "
                            ";
        // line 123
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteName", []));
        echo "
                            <div class=\"ls-js-hidden\">
                                ";
        // line 125
        echo twig_include($this->env, $context, "./subviews/navigation/language_changer_form.twig");
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 129
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdiva", []));
        echo " col-xs-12\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdiva", []));
        echo ">
                            <div class='";
        // line 130
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivadiv", []));
        echo " h3' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivadiv", []));
        echo ">
                                ";
        // line 131
        echo gT("The following surveys are available:");
        echo "
                            </div>
                        </div>

                        <div class=\"";
        // line 135
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivb", []));
        echo " col-xs-12\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivb", []));
        echo ">
                            <div class='";
        // line 136
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivbdiv", []));
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivbdiv", []));
        echo ">
                                <ul class='";
        // line 137
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivbdivul", []));
        echo " list-unstyled ' ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivbdivul", []));
        echo ">

                                    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["aSurveyInfo"] ?? null), "publicSurveys", []));
        foreach ($context['_seq'] as $context["key"] => $context["oSurvey"]) {
            // line 140
            echo "                                    <li class=\"";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivbdivulli", []));
            echo " btn-group col-sm-6 col-xs-12\" ";
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivbdivulli", []));
            echo ">
                                        <a
                                        href=\"";
            // line 142
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "sSurveyUrl", []));
            echo "\"
                                        title=\"";
            // line 143
            echo gT("Start survey");
            echo "\"
                                        lang=\"";
            // line 144
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "language", []));
            echo "\"
                                        class=\"";
            // line 145
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivbdivullia", []));
            echo " btn btn-primary col-xs-12\"  >
                                        ";
            // line 146
            echo $this->sandbox->ensureToStringAllowed($this->getAttribute($context["oSurvey"], "localizedTitle", []));
            echo "
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['oSurvey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                            </ul>
                            </div>
                        </div>

                        <div class=\"";
        // line 154
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistrowdivc", []));
        echo " col-xs-12 \" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistrowdivc", []));
        echo ">
                            ";
        // line 155
        echo sprintf(gT("Please contact %s ( %s ) for further assistance."), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminName", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["aSurveyInfo"] ?? null), "sSiteAdminEmail", [])));
        echo "
                        </div>

                    </div>

                    <div id=\"";
        // line 160
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "id", []), "surveylistfooter", []));
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistfooter", []));
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfooter", []));
        echo ">
                        <div class=\"";
        // line 161
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "class", []), "surveylistfootercont", []));
        echo " container\" ";
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfootercont", []));
        echo ">
                            <div ";
        // line 162
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfootercontp", []));
        echo " class=\"row\">
                                <div class=\"col-xs-6 col-sm-12 text-center\">
                                    <a ";
        // line 164
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfootercontpaa", []));
        echo " class=\"center-block text-center\">
                                        ";
        // line 165
        echo LS_Twig_Extension::image("./files/poweredby.png", "LimeSurvey Survey Software", ["class" => "img-responsive center-block "]);
        echo "
                                    </a>
                                </div>
                                <div class=\"col-sm-12 hidden-xs text-center\">
                                    <a ";
        // line 169
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfootercontpab", []));
        echo ">
                                        The Online Survey Tool
                                    </a>
                                    - Free & Open Source
                                </div>
                                <div class=\"col-xs-6 visible-xs text-center\">
                                    <a ";
        // line 175
        echo $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["aSurveyInfo"] ?? null), "attr", []), "surveylistfootercontpab", []));
        echo ">
                                        Online Surveytool
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
    }

    // line 192
    public function block_footer($context, array $blocks = [])
    {
        // line 193
        echo "            ";
        echo twig_include($this->env, $context, "./subviews/footer/footer.twig");
        echo "
        ";
    }

    // line 198
    public function block_themescripts($context, array $blocks = [])
    {
        // line 199
        echo "        <script>
            window.basicThemeScripts.init();
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "__string_template__0bc8e4c0b5b5d70124520dfddbfaab7244dae88cd1d1b052f8d05b97c9a65af1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 199,  362 => 198,  355 => 193,  352 => 192,  339 => 175,  330 => 169,  323 => 165,  319 => 164,  314 => 162,  308 => 161,  300 => 160,  292 => 155,  286 => 154,  280 => 150,  270 => 146,  266 => 145,  262 => 144,  258 => 143,  254 => 142,  246 => 140,  242 => 139,  235 => 137,  229 => 136,  223 => 135,  216 => 131,  210 => 130,  204 => 129,  197 => 125,  192 => 123,  188 => 122,  182 => 121,  176 => 119,  167 => 116,  162 => 114,  159 => 113,  156 => 112,  149 => 107,  146 => 106,  138 => 187,  134 => 184,  131 => 112,  127 => 109,  124 => 106,  122 => 105,  119 => 104,  113 => 203,  111 => 198,  106 => 195,  104 => 192,  100 => 190,  98 => 104,  94 => 103,  90 => 101,  84 => 96,  67 => 93,  61 => 91,  46 => 88,  42 => 86,  37 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0bc8e4c0b5b5d70124520dfddbfaab7244dae88cd1d1b052f8d05b97c9a65af1", "");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 93, "block" => 104, "for" => 139];
        static $filters = [];
        static $functions = ["include" => 91, "registerScript" => 187, "registerTemplateCssFile" => 114, "image" => 122, "gT" => 131, "sprintf" => 155];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for'],
                [],
                ['include', 'registerScript', 'registerTemplateCssFile', 'image', 'gT', 'sprintf']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
