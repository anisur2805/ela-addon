<?php

class InfoBox extends \Elementor\Widget_Base {
    public function get_name() {
        return 'ela_infobox';
    }

    public function get_title() {
        return esc_html__('Infobox', 'el-addon');
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return ['basic'];
    }

    public function get_keywords() {
        return ['infobox', 'box'];
    }

    protected function register_controls() {
        // Content Tab Start
        $this->start_controls_section(
            'ela_infobox_content',
            [
                'label' => esc_html__('Infobox', 'el-addon'),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'ela_title',
            [
                'label'       => esc_html__('Infobox Title', 'el-addon'),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__('Hello world', 'el-addon'),
                'label_block' => true,
                'dynamic'     => [
                    'active' => true,
                ],
            ]
        );

        $this->add_control('ela_icon_type', [
            'label'   => esc_html__('Icon Type', 'el-addon'),
            'type'    => \Elementor\Controls_Manager::SELECT,
            'default' => 'icon',
            'options' => [
                'none'       => __('None', 'el-addon'),
                'icon'       => __('Icon', 'el-addon'),
                'icon_image' => __('Image', 'el-addon'),
            ],
        ]);

        $this->add_control('ela_icon', [
            'label'       => esc_html__('Infobox Icon', 'el-addon'),
            'type'        => \Elementor\Controls_Manager::ICONS,
            'label_block' => true,
            // 'default'     => 'fa fa-bell-o',
            'default'     => [
                'value'   => 'fas fa-star',
                'library' => 'solid',
            ],
            'condition'   => [
                'ela_icon_type' => 'icon',
            ],
        ]);

        $this->end_controls_section();
        // Content Tab End

        // Style Tab Start
        $this->start_controls_section(
            'ela_infobox_section',
            [
                'label' => esc_html__('Style', 'el-addon'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        // $this->add_control(
        //     'title_color',
        //     [
        //         'label'     => esc_html__('Text Color', 'el-addon'),
        //         'type'      => \Elementor\Controls_Manager::COLOR,
        //         'selectors' => [
        //             '{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
        //         ],
        //     ]
        // );

        $this->end_controls_section();

        // Style Tab End
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $icon     = $settings['ela_icon'];
        //   echo "<pre>";
        //   var_dump( $settings );
?>
        <div class="ela-infobox">
            <div class="ela-infobox__topbar">
                <!-- <i class="fa <? //php echo $settings['ela_icon']['library']; 
                                    ?>"  aria-hidden="true"></i> -->
                <?php \Elementor\Icons_Manager::render_icon($settings['ela_icon'], ['aria-hidden' => 'true']); ?>
            </div>
            <div class="ela-infobox__bottom">
                <h4><?php echo $settings['ela_title'] ?></h4>
                <!-- <p><? //php echo $settings['ela_icon'] 
                        ?></p> -->
            </div>
        </div>
        <!-- <p class="hello-world">
            <? //php echo $settings['title']; 
            ?>
        </p> -->
<?php
    }
}
