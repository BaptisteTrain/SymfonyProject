<?php

/* portportfolioBundle:portfolio:projets.html.twig */
class __TwigTemplate_49471470f0d141e59f954593fcf8e0151ee623d6b65cbceb39d0f4e595c09693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("portportfolioBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'information' => array($this, 'block_information'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portportfolioBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Projets
";
    }

    // line 9
    public function block_information($context, array $blocks = array())
    {
        // line 10
        echo "\t<div id=\"projets\">
\t\t<div id=\"fac\" class=\"projetsBlock\">
\t\t\t<h3>
\t\t\t\tMes projets réalisé dans le cadre de l'universitée:
\t\t\t</h3>
\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fac"]) ? $context["fac"] : $this->getContext($context, "fac")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "       \t\t\t<div>
       \t\t\t\t<p class=\"projetsTitre\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "titre"), "html", null, true);
            echo ": </p>
       \t\t\t\t<i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "date"), "html", null, true);
            echo " </i>
       \t\t\t\t<p class=\"well\">  ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "contenu"), "html", null, true);
            echo " </p>
       \t\t\t</div>
       \t\t\t<hr />
       \t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t\t<p class=\"well\"> ";
            echo twig_escape_filter($this->env, (isset($context["tailleFac"]) ? $context["tailleFac"] : $this->getContext($context, "tailleFac")), "html", null, true);
            echo " </p>
      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t\t<div id=\"personel\" class=\"projetsBlock\">
\t\t\t<h3>
\t\t\t\tMes projets réalisé dans le cadre personel:
\t\t\t</h3>
\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "       \t\t\t<div>
       \t\t\t\t<p class=\"projetsTitre\"> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "titre"), "html", null, true);
            echo ": </p>
       \t\t\t\t<i> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "date"), "html", null, true);
            echo " </i>
       \t\t\t\t<p class=\"well\">  ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "contenu"), "html", null, true);
            echo " </p>
       \t\t\t</div>
       \t\t\t<hr />
       \t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t<p class=\"well\"> ";
            echo twig_escape_filter($this->env, (isset($context["taillePerso"]) ? $context["taillePerso"] : $this->getContext($context, "taillePerso")), "html", null, true);
            echo " </p>
      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "portportfolioBundle:portfolio:projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  115 => 38,  106 => 34,  102 => 33,  98 => 32,  95 => 31,  90 => 30,  83 => 25,  74 => 23,  65 => 19,  61 => 18,  57 => 17,  54 => 16,  49 => 15,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
