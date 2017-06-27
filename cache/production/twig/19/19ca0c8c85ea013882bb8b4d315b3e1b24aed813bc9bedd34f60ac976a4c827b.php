<?php

/* @pico_reputation/event/overall_footer_after.html */
class __TwigTemplate_d53e15b8cf66508fd608f0c63fec6636d4985e8b93540570526611bd6bc398ba extends Twig_Template
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
        if ((isset($context["S_REPUTATION"]) ? $context["S_REPUTATION"] : null)) {
            // line 2
            echo "<div id=\"reputation-popup\"></div>
";
            // line 3
            $asset_file = "@pico_reputation/reputation.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('119');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);        }
    }

    public function getTemplateName()
    {
        return "@pico_reputation/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_REPUTATION -->*/
/* <div id="reputation-popup"></div>*/
/* <!-- INCLUDEJS @pico_reputation/reputation.js -->*/
/* <!-- ENDIF -->*/
