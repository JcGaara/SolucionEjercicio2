<?php

/* info.php */
class __TwigTemplate_15c17ba664c23c01b7eeec2628de6493808e6bbb1eb52a006a3ec10e854db50e extends Twig_Template
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
        echo "<?php

// Show all information, defaults to INFO_ALL
phpinfo();

?>";
    }

    public function getTemplateName()
    {
        return "info.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

// Show all information, defaults to INFO_ALL
phpinfo();

?>", "info.php", "F:\\proyectos_php\\solucion\\templates\\info.php");
    }
}
