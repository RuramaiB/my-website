<?php
/**
 * @author  Rainbow-Themes
 * @since   1.0
 * @version 1.0
 */

namespace rainbow\Rainbow_Elements;

use Elementor\Plugin;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Custom_Widget_Init
{

    public function __construct()
    {
        add_action('elementor/widgets/register', array($this, 'elementor_widgets_control'));
        add_action('elementor/elements/categories_registered', array($this, 'widget_categoty'));
        add_action('elementor/editor/after_enqueue_styles', array($this, 'editor_style'));
        add_action('wp_enqueue_scripts', [$this,'inbio_element_enqueue']);


    }

    public function editor_style()
    {
        $img = plugins_url('icon.png', __FILE__);
        wp_add_inline_style('elementor-editor', '.elementor-element .icon .rainbow-el-custom{content: url(' . $img . ');width: 28px;}');
        wp_add_inline_style('elementor-editor', '.select2-container--default .select2-selection--single {min-width: 126px !important; min-height: 30px !important;}');
    }


    public function elementor_widgets_control()
    {
        if (did_action('elementor/loaded')) {
            require_once 'base.php';
        }
    }
 
    public function widget_categoty($class)
    {
        $id = RAINBOW_ELEMENTS_THEME_PREFIX . '-widgets'; // Category /@dev
        $properties = array(
            'title' => __('Rainbow Elements', 'rainbow-elements'),
        );

        Plugin::$instance->elements_manager->add_category($id, $properties);
    }

    public function inbio_element_enqueue() {
       
        wp_enqueue_script('doob-element-scripts', RAINBOW_ELEMENTS_BASE_URL . 'assets/js/element-scripts.js', array('jquery'), '1.0', true);
    }

}

new Custom_Widget_Init();