<?php

/* SdzBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_8646317f9abc57c70294835c90922ca43a82e6a56298b4e729c65445260fb77b extends Twig_Template
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
        // line 2
        echo "
<h3>Les derniers billets</h3>

<ul>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  30 => 8,  26 => 7,  19 => 2,  72 => 16,  65 => 11,  62 => 10,  56 => 8,  50 => 20,  45 => 17,  38 => 12,  31 => 8,  23 => 2,  121 => 49,  118 => 48,  115 => 47,  111 => 40,  108 => 39,  100 => 41,  97 => 39,  89 => 34,  79 => 19,  76 => 18,  63 => 16,  60 => 15,  53 => 11,  46 => 10,  43 => 15,  36 => 10,  33 => 5,  124 => 33,  113 => 30,  106 => 29,  102 => 28,  98 => 26,  94 => 23,  86 => 20,  83 => 30,  69 => 15,  66 => 15,  48 => 18,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
