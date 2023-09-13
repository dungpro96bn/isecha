<?php

namespace Elementor;

if ( !defined( 'ABSPATH' ) )
    exit;

class Tw_Product_Filter_Widget extends Widget_Base{
    
    public function get_name() {
        return 'tw-product-filter';
    }
    
    public function get_title() {
        return esc_html__( 'Product Filter', 'themewar' );
    }

    public function get_icon() {
        return 'eicon-product-tabs';
    }

    public function get_categories() {
        return [ 'organia-elements' ];
    }
    
    protected function register_controls(){
        $this->start_controls_section(
            'section_tab_content', [
                'label' => esc_html__('Product Tab', 'themewar')
            ]
        );      
                $this->add_control( 'enable_title', [
                        'label' => esc_html__( 'Show Title', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no',
                    ]
                );
                $this->add_control('pr_area_subtitle', [
                            'label' => esc_html__( 'Area Sub Title', 'plugin-domain' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                            'label_block' => true,
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'enable_title',
                                            'operator'  => '==',
                                            'value'     => 'yes',
                                    ]
                                ],
                            ],
                        ]
                );
                $this->add_control('pr_area_title', [
                            'label' => esc_html__( 'Area Title', 'plugin-domain' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                            'label_block' => true,
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'enable_title',
                                            'operator'  => '==',
                                            'value'     => 'yes',
                                    ]
                                ],
                            ],
                        ]
                );
                $this->add_control( 'tw_view', [
                        'label' => esc_html__('View Type', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product view style.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Grid View', 'themewar'),
                            2 => esc_html__('Slider View', 'themewar')
                        ],
                    ]
                );
                $this->add_control( 'tw_tab_style', [
                        'label' => esc_html__('Filter Style', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product filter menu style.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Creative', 'themewar'),
                            2 => esc_html__('Standard', 'themewar')
                        ],
                    ]
                );
                $this->add_control( 'tw_filter_type', [
                        'label' => esc_html__('Filter Type', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product filter type.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Category Filter', 'themewar'),
                            2 => esc_html__('Tag Filter', 'themewar')
                        ],
                    ]
                );
                $this->add_control( 'tw_style', [
                        'label' => esc_html__('Product Style', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product view style.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Style 01', 'themewar'),
                            2 => esc_html__('Style 02', 'themewar'),
                            3 => esc_html__('Style 03', 'themewar'),
                            4 => esc_html__('Style 04', 'themewar'),
                            5 => esc_html__('Style 05', 'themewar'),
                            6 => esc_html__('Style 06', 'themewar'),
                            7 => esc_html__('Style 07', 'themewar'),
                        ],
                    ]
                );
                $this->add_control('tw_thumb_width', [
        				'label' => esc_html__( 'Thumbnail Width', 'plugin-domain' ),
        				'type' => \Elementor\Controls_Manager::NUMBER,
        				'min' => 0,
        				'max' => 1000,
        				'step' => 1,
        				'default' => '',
        			]
        		);
                $this->add_control('tw_thumb_height', [
        				'label' => esc_html__( 'Thumbnail Height', 'plugin-domain' ),
        				'type' => \Elementor\Controls_Manager::NUMBER,
        				'min' => 0,
        				'max' => 1000,
        				'step' => 1,
        				'default' => '',
        			]
        		);
                $this->add_control( 'enable_round_corner', [
                        'label' => esc_html__( 'Enable Round Corner', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'yes',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'tw_hover_img_style', [
                        'label' => esc_html__('Hover Image Size Style', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product hover image size style.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Default Size', 'themewar'),
                            2 => esc_html__('Full Size', 'themewar'),
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control('tw_hover_thumb_width', [
                        'label' => esc_html__( 'Hover Thumbnail Width', 'themewar' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                        'default' => 280,
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_hover_img_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ],
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control('tw_hover_thumb_height', [
                        'label' => esc_html__( 'Hover Thumbnail Height', 'themewar' ),
                        'type' => \Elementor\Controls_Manager::NUMBER,
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                        'default' => 260,
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_hover_img_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ],
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control('pro_filter_all_label', [
                        'label' => esc_html__( 'All BTN Label', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'All Products', 'plugin-domain' )
                    ]
                );
                $repeater = new \Elementor\Repeater();
                        $repeater->add_control('pro_tab_title', [
                                'label' => esc_html__( 'Filter Item Title', 'plugin-domain' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => __( 'Filter Title', 'plugin-domain' ),
                                'placeholder' => __( 'Type your filter item title here', 'plugin-domain' ),
                            ]
                        );
                        $repeater->add_control( 'tw_category', [
                                'label' => esc_html__('Product Category', 'themewar'),
                                'type' => 'tw_autocomplete',
                                'description' => esc_html__('Select specific category product.', 'themewar'),
                                'action' => 'tw_get_taxonomy',
                                'taxonomy' => 'product_cat',
                                'multiple' => false
                            ]
                        );
                $this->add_control('pr_tab_list', [
				'label' => esc_html__( 'Tab List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'pro_tab_title' => esc_html__( 'Title #1', 'plugin-domain' ),
						'tw_category' => ''
					]
				],
				'title_field' => '{{{ pro_tab_title }}}',
                                'conditions'    => [
                                    'terms'     => [
                                        [
                                                'name'      => 'tw_filter_type',
                                                'operator'  => '==',
                                                'value'     => '1',
                                        ]
                                    ],
                                ]
			]
		);
                $repeater = new \Elementor\Repeater();
                        $repeater->add_control('pro_tab_title_2', [
                                'label' => esc_html__( 'Filter Item Title', 'plugin-domain' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => __( 'Filter Title', 'plugin-domain' ),
                                'placeholder' => __( 'Type your filter item title here', 'plugin-domain' ),
                            ]
                        );
                        $repeater->add_control( 'tw_tag', [
                                'label' => esc_html__('Tag', 'themewar'),
                                'type' => 'tw_autocomplete',
                                'description' => esc_html__('Select specific tag product.', 'themewar'),
                                'action' => 'tw_get_taxonomy',
                                'taxonomy' => 'product_tag',
                                'multiple' => false,
                            ]
                        );
                $this->add_control('pr_tab_list_2', [
				'label' => esc_html__( 'Tab List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'pro_tab_title_2' => esc_html__( 'Title #1', 'plugin-domain' ),
						'tw_tag' => ''
					]
				],
				'title_field' => '{{{ pro_tab_title_2 }}}',
                                'conditions'    => [
                                    'terms'     => [
                                        [
                                                'name'      => 'tw_filter_type',
                                                'operator'  => '==',
                                                'value'     => '2',
                                        ]
                                    ],
                                ]
			]
		);
                $this->add_control( 'tw_per_item', [
                        'label' => esc_html__('Number Of Item', 'themewar'),
                        'type' => Controls_Manager::NUMBER,
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                        'default' => 8,
                        'description' => esc_html__('How many product item you want to show?.', 'themewar'),
                    ]
                );
                $this->add_control( 'tw_order_by', [
                        'label' => esc_html__('Order By', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'default' => 'date',
                        'options' => [
                            'date' => esc_html__('Date', 'themewar'),
                            'title' => esc_html__('Title', 'themewar'),
                            'rand' => esc_html__('Random', 'themewar'),
                            'comment_count' => esc_html__('Comment', 'themewar'),
                            'post__in' => esc_html__('Post in', 'themewar'),
                        ],
                    ]
                );
                $this->add_control( 'tw_order', [
                        'label' => esc_html__('Order', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'default' => 'desc',
                        'options' => [
                            'asc' => esc_html__('Ascending', 'themewar'),
                            'desc' => esc_html__('Descending', 'themewar'),
                        ],
                    ]
                );
                $this->add_control( 'tw_col_per_row', [
                        'label' => esc_html__('Column Per Row', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('How many item you want to show per row? 6 Column only work for Product Style 6.', 'themewar'),
                        'default' => '4',
                        'multiple' => false,
                        'options' => [
                            2 => esc_html__('2 Columns', 'themewar'),
                            3 => esc_html__('3 Columns', 'themewar'),
                            4 => esc_html__('4 Columns', 'themewar'),
                            6 => esc_html__('6 Columns', 'themewar'),
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'show_empty_rating', [
                        'label' => esc_html__( 'Show Empty Ratings?', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '!in',
                                        'value'     => ['5', '6', '7'],
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'show_wishlist', [
                        'label' => esc_html__( 'Show Wishlist BTN', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no'
                    ]
                );
                $this->add_control( 'show_compare', [
                        'label' => esc_html__( 'Show Compare BTN', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no'
                    ]
                );
                $this->add_control( 'show_quickview', [
                        'label' => esc_html__( 'Show Quickview BTN', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no'
                    ]
                );
                $this->add_control( 'show_cart', [
                        'label' => esc_html__( 'Show Cart BTN', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => __( 'Show', 'your-plugin' ),
                        'label_off' => __( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => 'in',
                                        'value'     => ['6', '7'],
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'show_flashlabels', [
                        'label' => esc_html__( 'Show Flash Labels', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '!in',
                                        'value'     => ['6'],
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'price_format', [
                        'label' => esc_html__('Pricing Format', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select product price format.', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                            1 => esc_html__('Only Sale Price', 'themewar'),
                            2 => esc_html__('Both Price', 'themewar')
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => 'in',
                                        'value'     => ['6'],
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'show_pricing_unit', [
                        'label' => esc_html__( 'Show Pricing Unit', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no'
                    ]
                );

                $this->add_control( 'tw_item_per_row_1', [
                        'label' => esc_html__('Items XL Device', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('How many item you want to show per row on Extra Large Screen? 6 Items only work for Product Style 6.', 'themewar'),
                        'default' => '4',
                        'multiple' => false,
                        'options' => [
                            2 => esc_html__('2 Items', 'themewar'),
                            3 => esc_html__('3 Items', 'themewar'),
                            4 => esc_html__('4 Items', 'themewar'),
                            6 => esc_html__('6 Items', 'themewar'),
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'tw_item_per_row_2', [
                        'label' => esc_html__('Items LG Device', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('How many item you want to show per row on Large Screen?', 'themewar'),
                        'default' => '4',
                        'multiple' => false,
                        'options' => [
                            2 => esc_html__('2 Items', 'themewar'),
                            3 => esc_html__('3 Items', 'themewar'),
                            4 => esc_html__('4 Items', 'themewar')
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'tw_item_per_row_3', [
                        'label' => esc_html__('Items MD Device', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('How many item you want to show per row on Medium Screen?', 'themewar'),
                        'default' => '3',
                        'multiple' => false,
                        'options' => [
                            2 => esc_html__('2 Items', 'themewar'),
                            3 => esc_html__('3 Items', 'themewar'),
                            4 => esc_html__('4 Items', 'themewar')
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'tw_item_per_row_4', [
                        'label' => esc_html__('Items SM Device', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('How many item you want to show per row on Small Screen?', 'themewar'),
                        'default' => '2',
                        'multiple' => false,
                        'options' => [
                            2 => esc_html__('2 Items', 'themewar'),
                            3 => esc_html__('3 Items', 'themewar')
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control('tw_gapping', [
                                'label' => esc_html__( 'Item Gapping', 'plugin-domain' ),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                                'default' => 30,
                                'conditions'    => [
                                    'terms'     => [
                                        [
                                                'name'      => 'tw_view',
                                                'operator'  => '==',
                                                'value'     => '2',
                                        ]
                                    ],
                                ],
                        ]
                );
                $this->add_control( 'is_autopaly', [
                        'label' => esc_html__( 'Is Autoplay?', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'yes',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'is_loop', [
                        'label' => esc_html__( 'Is Loop?', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'yes',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'is_arrow', [
                        'label' => esc_html__( 'Is Arrow?', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'yes',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'tw_arrow_position', [
                        'label' => esc_html__('Arrow Position', 'themewar'),
                        'type' => Controls_Manager::SELECT,
                        'description' => esc_html__('Select your slider arrow position?', 'themewar'),
                        'default' => '1',
                        'multiple' => false,
                        'options' => [
                                1 => esc_html__('Default', 'themewar'),
                                2 => esc_html__('Top Left', 'themewar'),
                                3 => esc_html__('Top Right', 'themewar'),
                                4 => esc_html__('Bottom Left', 'themewar'),
                                5 => esc_html__('Bottom Center', 'themewar'),
                                6 => esc_html__('Bottom Right', 'themewar'),
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ],
                                [
                                        'name'      => 'is_arrow',
                                        'operator'  => '==',
                                        'value'     => 'yes'
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_control( 'is_dots', [
                        'label' => esc_html__( 'Is Dots?', 'plugin-domain' ),
                        'type' => \Elementor\Controls_Manager::SWITCHER,
                        'label_on' => esc_html__( 'Show', 'your-plugin' ),
                        'label_off' => esc_html__( 'Hide', 'your-plugin' ),
                        'return_value' => 'yes',
                        'default' => 'no',
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_view',
                                        'operator'  => '==',
                                        'value'     => '2',
                                ]
                            ],
                        ],
                    ]
                );
                $this->add_responsive_control('pr_tab_item_alignment', [
                                'label'                     =>esc_html__( 'Tab Item Alignment', 'themewar' ),
                                'type'                      => Controls_Manager::CHOOSE,
                                'options'                   => [
                                        'left'       => [
                                                'title'  => esc_html__( 'Left', 'themewar' ),
                                                'icon'   => 'eicon-text-align-left',
                                        ],
                                        'center'     => [
                                                'title'  => esc_html__( 'Center', 'themewar' ),
                                                'icon'   => 'eicon-text-align-center',
                                        ],
                                        'right'      => [
                                                'title'  => esc_html__( 'Right', 'themewar' ),
                                                'icon'   => 'eicon-text-align-right',
                                        ]
                                ],
                                'default'                   => 'center',
                                'prefix_class'              => 'pr_tab_holder ',
                        ]
                );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_1', [
                    'label'         => esc_html__('Area Style', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                ]
        );
            $this->start_controls_tabs( 'pr_box_tab_1', 
                    ['conditions' => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ]
                            ],
                    ]]);
                $this->start_controls_tab('pr_box_tab_normal', [ 'label' => esc_html__( 'Normal', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_box_bg',
                                    'label' => esc_html__( 'Box BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem01',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_box_border',
                                    'label' => esc_html__( 'Box Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem01',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_box_shadow',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem01',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_box_tab_hover', [ 'label' => esc_html__( 'Hover', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_box_bgh',
                                    'label' => esc_html__( 'Box BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem01:hover',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_box_borderh',
                                    'label' => esc_html__( 'Box Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem01:hover',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_box_shadowh',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem01:hover',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->add_control( 'pr_radius_odd', [
                        'label' => esc_html__( 'Odd Item Radius', 'themewar' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01.odd' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01.odd .hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ],
                                [
                                        'name'      => 'enable_round_corner',
                                        'operator'  => '==',
                                        'value'     => 'yes',
                                ],
                            ],
                        ],
                ]
            );
            $this->add_control( 'pr_radius_even', [
                        'label' => esc_html__( 'Even Item Radius', 'themewar' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01.even' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01.even .hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ],
                                [
                                        'name'      => 'enable_round_corner',
                                        'operator'  => '==',
                                        'value'     => 'yes',
                                ],
                            ],
                        ],
                ]
            );
            $this->add_control( 'pr_radius', [
                        'label' => esc_html__( 'Item Radius', 'themewar' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .org_product_carousel_wrap.hasRoundedEnabled .productItem01 .hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                        'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '==',
                                        'value'     => '1',
                                ],
                                [
                                        'name'      => 'enable_round_corner',
                                        'operator'  => '!=',
                                        'value'     => 'yes',
                                ],
                            ],
                        ],
                ]
            );
            $this->add_responsive_control('pr_box_margin', [
                            'label' => esc_html__( 'Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .productItem01' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem04' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem06' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem07' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem03' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem08' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem05' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_8', [
                    'label'         => esc_html__('Content Area Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_style',
                                    'operator'  => 'in',
                                    'value'     => ['2', '3', '4'],
                            ]
                        ],
                    ],
                ]
        );
            $this->start_controls_tabs( 'pr_box_tab_8' );
                $this->start_controls_tab('pr_content_normal', [ 'label' => esc_html__( 'Normal', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_con_bg',
                                    'label' => esc_html__( 'Content BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem04, {{WRAPPER}} .productItem06, {{WRAPPER}} .product_content07',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_con_border',
                                    'label' => esc_html__( 'Box Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem04, {{WRAPPER}} .productItem06, {{WRAPPER}} .product_content07',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_con_shadow',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem04, {{WRAPPER}} .productItem06, {{WRAPPER}} .product_content07',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_content_hover', [ 'label' => esc_html__( 'Hover', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_con_hover_bg',
                                    'label' => esc_html__( 'Content BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem04:hover, {{WRAPPER}} .productItem06:hover, {{WRAPPER}} .productItem07:hover .product_content07',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_con_hover_border',
                                    'label' => esc_html__( 'Box Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem04:hover, {{WRAPPER}} .productItem06:hover, {{WRAPPER}} .productItem07:hover .product_content07',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_con_hover_shadow',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .productItem04:hover, {{WRAPPER}} .productItem06:hover, {{WRAPPER}} .productItem07:hover .product_content07',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            $this->add_control('pr_con_radius', [
                            'label' => esc_html__( 'Border Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .productItem04' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .productItem06' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content07' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_9', [
                    'label'         => esc_html__('Thumb Area Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_style',
                                    'operator'  => 'in',
                                    'value'     => ['4', '5', '6', '7'],
                            ]
                        ],
                    ],
                ]
        );
            $this->add_group_control(
                    Group_Control_Background::get_type(), [
                            'name' => 'pr_thumb_bg',
                            'label' => esc_html__( 'Thumb BG', 'themewar' ),
                            'types' => [ 'classic', 'gradient'],
                            'selector' => '{{WRAPPER}} .proThumb07, {{WRAPPER}} .proThumb03, {{WRAPPER}} .proThumb08, {{WRAPPER}} .proThumb05',
                    ]
            );
            $this->add_control( 'pr_thumb_shape_BG',[
                            'label'     => esc_html__( 'Thumb Shape Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .proThumb03:after' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .proThumb03:before' => 'background: {{VALUE}}',
                            ],
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'tw_style',
                                            'operator'  => '==',
                                            'value'     => '5',
                                    ]
                                ],
                            ],
                    ]
            );
            $this->add_control('pr_thumb_radius', [
                            'label' => esc_html__( 'Border Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .proThumb07' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .proThumb08' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} ..proThumb05' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'tw_style',
                                            'operator'  => '!=',
                                            'value'     => '5',
                                    ]
                                ],
                            ],
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_2', [
                    'label'         => esc_html__('Flash Labels Style', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                            'terms'     => [
                                [
                                        'name'      => 'tw_style',
                                        'operator'  => '!=',
                                        'value'     => '6',
                                ]
                            ],
                    ],
                ]
        );
            $this->add_control( 'pr_fresh_label_bg',[
                            'label'     => esc_html__( 'Fresh BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.justin' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.justin' => 'background: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_fresh_label_color',[
                            'label'     => esc_html__( 'Fresh Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.justin' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.justin' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_fresh_label_off',[
                            'label'     => esc_html__( 'Sale BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.off' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.off' => 'background: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_off_label_color',[
                            'label'     => esc_html__( 'Sale Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.off' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.off' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_featured_label_bg',[
                            'label'     => esc_html__( 'Featured BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.featured' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.featured' => 'background: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_featured_label_color',[
                            'label'     => esc_html__( 'Featured Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.featured' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.featured' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_outofstock_label_bg',[
                            'label'     => esc_html__( 'Out of Stock BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.outofstock' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.outofstock' => 'background: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_outofstock_label_color',[
                            'label'     => esc_html__( 'Out Of Stock Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.outofstock' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.outofstock' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_limitedstock_label_bg',[
                            'label'     => esc_html__( 'Limited Stock BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.limitedstock' => 'background: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.limitedstock' => 'background: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control( 'pr_limitedstock_label_color',[
                            'label'     => esc_html__( 'Limited Stock Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .prLabels p.limitedstock' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .product_content04 .prLabels p.limitedstock' => 'color: {{VALUE}}',
                            ],
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_3', [
                    'label'         => esc_html__('Rating Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_style',
                                    'operator'  => 'in',
                                    'value'     => ['1', '2', '3', '4'],
                            ]
                        ],
                    ],
                ]
        );
            $this->add_control( 'pr_empty_star_color',[
                            'label'     => esc_html__( 'Empty Star Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .ratings .star-rating::before' => 'color: {{VALUE}} !important',
                            ],
                    ]
            );
            $this->add_control( 'pr_rating_star_color',[
                            'label'     => esc_html__( 'Rating Star Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .ratings .star-rating span::before' => 'color: {{VALUE}} !important',
                            ],
                    ]
            );
            $this->add_control( 'pr_rating_count_color',[
                            'label'     => esc_html__( 'Rating Count Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} span.rating-count' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control('pr_rating_margin', [
                            'label' => esc_html__( 'Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .product_content .ratings' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content04 .ratings' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content07 .ratings' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_4', [
                    'label'         => esc_html__('Category Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_style',
                                    'operator'  => 'in',
                                    'value'     => ['1', '7'],
                            ]
                        ],
                    ]
                ]
        );
            $this->add_group_control(Group_Control_Typography::get_type(), [
                            'name'      => 'pr_category_typo',
                            'label'     => esc_html__('Typography', 'themewar' ),
                            'selector'  => '{{WRAPPER}} .pitem, {{WRAPPER}} .proThumb05 .prname',
                    ]
            );
            $this->add_control('pr_category_BG_color', [
                            'label'     => esc_html__('BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .proThumb05 .prname' => 'background: {{VALUE}}',
                            ],
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'tw_style',
                                            'operator'  => '==',
                                            'value'     => '7'
                                    ]
                                ],
                            ]
                    ]
            );
            $this->add_control('pr_category_BG_hover_color', [
                            'label'     => esc_html__('Hover BG Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .proThumb05 .prname:hover' => 'background: {{VALUE}}',
                            ],
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'tw_style',
                                            'operator'  => '==',
                                            'value'     => '7'
                                    ]
                                ],
                            ]
                    ]
            );
            $this->add_control('pr_category_color', [
                            'label'     => esc_html__('Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .pitem' => 'color: {{VALUE}}',
                                    '{{WRAPPER}} .proThumb05 .prname' => 'color: {{VALUE}}',
                            ],
                    ]
            );
            $this->add_control('pr_category_hover_color', [
                            'label'     => esc_html__('Hover Color', 'themewar' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                    '{{WRAPPER}} .proThumb05 .prname:hover' => 'color: {{VALUE}}',
                            ],
                            'conditions'    => [
                                'terms'     => [
                                    [
                                            'name'      => 'tw_style',
                                            'operator'  => '==',
                                            'value'     => '7'
                                    ]
                                ],
                            ]
                    ]
            );
            $this->add_control('pr_category_margin', [
                            'label' => esc_html__( 'Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .pitem' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .proThumb05 .prname' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_5', [
                    'label'         => esc_html__('Title Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                ]
        );
            $this->add_group_control(Group_Control_Typography::get_type(), [
                            'name'      => 'pr_title_typo',
                            'label'     => esc_html__('Typography', 'themewar' ),
                            'selector'  => '{{WRAPPER}} .product_content h3, {{WRAPPER}} .product_content04 h3, {{WRAPPER}} .product_content07 h3, {{WRAPPER}} .product_content03 h3, {{WRAPPER}} .product_content05 h3',
                    ]
            );
            
            $this->start_controls_tabs( 'pr_box_tab_2' );
                $this->start_controls_tab('pr_title_tab_normal', [ 'label' => esc_html__( 'Normal', 'themewar' )]); 
                    $this->add_control('pr_title_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .product_content h3' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content04 h3' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content07 h3' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content03 h3' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content08 h3' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content05 h3' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_title_tab_hover', [ 'label' => esc_html__( 'Hover', 'themewar' )]); 
                    $this->add_control('pr_title_color_hover', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .product_content h3 a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content04 h3 a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content07 h3 a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content03 h3 a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content08 h3 a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content05 h3 a:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->add_control('pr_title_margin', [
                            'label' => esc_html__( 'Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .product_content h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content04 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content07 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content03 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content08 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content05 h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_6', [
                    'label'         => esc_html__('Price Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                ]
        );
            $this->start_controls_tabs( 'pr_box_tab_3' );
                $this->start_controls_tab('pr_price_tab_reg', [ 'label' => esc_html__( 'Sale Price', 'themewar' )]); 
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_sprice_typo',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .pi01Price, {{WRAPPER}} .product_content03 .pi01Price, {{WRAPPER}} .product_content08 .pi01Price',
                            ]
                    );
                    $this->add_control('pr_sprice_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .pi01Price' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content03 .pi01Price' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content08 .pi01Price' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_title_tab_sale', [ 'label' => esc_html__( 'Regular Price', 'themewar' )]); 
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_del_price_typo',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .pi01Price del, {{WRAPPER}} .product_content03 .pi01Price del, {{WRAPPER}} .product_content08 .pi01Price',
                            ]
                    );
                    $this->add_control('pr_del_price_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .pi01Price del' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content03 .pi01Price del' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .product_content08 .pi01Price del' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_del_price_margin', [
                                    'label' => esc_html__( 'Margin', 'themewar' ),
                                    'type'  => Controls_Manager::DIMENSIONS,
                                    'size_units' => [ 'px', '%', 'em' ],
                                    'selectors'  => [
                                        '{{WRAPPER}} .pi01Price del' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                        '{{WRAPPER}} .product_content07 .pi01Price del' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                        '{{WRAPPER}} .product_content03 .pi01Price del' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                        '{{WRAPPER}} .product_content08 .pi01Price del' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                    ]
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->add_control('pr_price_area_margin', [
                            'label' => esc_html__( 'Area Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .pi01Price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content03 .pi01Price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .product_content08 .pi01Price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_786', [
                    'label'         => esc_html__('Product Unit Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'show_pricing_unit',
                                    'operator'  => '==',
                                    'value'     => 'yes'
                            ]
                        ],
                    ]
                ]
        );
                $this->add_group_control(Group_Control_Typography::get_type(), [
                                'name'      => 'pr_pricing_unit_typo',
                                'label'     => esc_html__('Typography', 'themewar' ),
                                'selector'  => '{{WRAPPER}} .pi01Price span.priceSuffix',
                        ]
                );
                $this->add_control('pr_pricing_unit_color', [
                                'label'     => esc_html__('Color', 'themewar' ),
                                'type'      => Controls_Manager::COLOR,
                                'selectors' => [
                                        '{{WRAPPER}} .pi01Price span.priceSuffix' => 'color: {{VALUE}}'
                                ],
                        ]
                );
                $this->add_control('pr_pricing_unit_margin', [
                                'label' => esc_html__( 'Unit Margin', 'themewar' ),
                                'type'  => Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px', '%', 'em' ],
                                'selectors'  => [
                                    '{{WRAPPER}} .pi01Price span.priceSuffix' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                                ]
                        ]
                );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_7', [
                    'label'         => esc_html__('Button Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                ]
        );
            $this->start_controls_tabs('pr_box_tab_4');
                $this->start_controls_tab('pr_wsl_btn_normal', [ 'label' => esc_html__( 'Wishlist Normal', 'themewar' )]); 
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_wsl_btn_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem01 .wishlist, {{WRAPPER}} .productItem04 .piActionBtns .wishlist a, {{WRAPPER}} .productItem06 .piActionBtns .wishlist a, {{ WRAPPER}} .productItem07 .piActionBtns .wishlist a, {{WRAPPER}} .productItem08 .piActionBtns .wishlist a, {{WRAPPER}} .productItem05 .piActionBtns .wishlist a',
                            ]
                    );
                    $this->add_control('pr_wsl_btn_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .productItem01 .wishlist' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem01 .wishlist a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem04 .piActionBtns .wishlist a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem06 .piActionBtns .wishlist a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem07 .piActionBtns .wishlist a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem08 .piActionBtns .wishlist a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem05 .piActionBtns .wishlist a' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_wsl_btn_hover', [ 'label' => esc_html__( 'Wishlist Hover', 'themewar' )]); 
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_wsl_btn_hover_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .productItem01 .wishlist:hover, {{WRAPPER}} .productItem04 .piActionBtns .wishlist a:hover, {{WRAPPER}} .productItem06 .piActionBtns .wishlist a:hover, {{WRAPPER}} .productItem07 .piActionBtns .wishlist a:hover, {{WRAPPER}} .productItem08 .piActionBtns .wishlist a:hover, {{WRAPPER}} .productItem05 .piActionBtns .wishlist a:hover',
                            ]
                    );
                    $this->add_control('pr_wsl_btn_hover_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .productItem01 .wishlist:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem01 .wishlist:hover a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .yith-wcwl-wishlistexistsbrowse a' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem04 .piActionBtns .wishlist a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem06 .piActionBtns .wishlist a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem07 .piActionBtns .wishlist a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem08 .piActionBtns .wishlist a:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .productItem05 .piActionBtns .wishlist a:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->start_controls_tabs( 'pr_box_tab_5' );
                $this->start_controls_tab('pr_quc_btn_normal', [ 'label' => esc_html__( 'Quickview Normal', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_quc_btn_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .piActionBtns a.quickview',
                            ]
                    );
                    $this->add_control('pr_quc_btn_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .piActionBtns a.quickview' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_quc_btn_hover', [ 'label' => esc_html__( 'Quickview Hover', 'themewar' )]); 
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_quc_btn_hover_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .piActionBtns a.quickview:hover',
                            ]
                    );
                    $this->add_control('pr_quc_btn_hover_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .piActionBtns a.quickview:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->start_controls_tabs( 'pr_box_tab_6' );
                $this->start_controls_tab('pr_cart_btn_normal', [ 'label' => esc_html__( 'Cart Normal', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_cart_btn_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .piActionBtns a.add_to_cart_button, {{WRAPPER}} .piActionBtns a.added_to_cart',
                            ]
                    );
                    $this->add_control('pr_cart_btn_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .piActionBtns a.add_to_cart_button' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .piActionBtns a.added_to_cart' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_cart_btn_hover', [ 'label' => esc_html__( 'Cart Hover', 'themewar' )]); 
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_cart_btn_hover_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .piActionBtns a.add_to_cart_button:hover, {{WRAPPER}} .piActionBtns a.added_to_cart:hover',
                            ]
                    );
                    $this->add_control('pr_cart_btn_hover_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .piActionBtns a.add_to_cart_button:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .piActionBtns a.added_to_cart:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->start_controls_tabs( 'pr_box_tab_7' );
                $this->start_controls_tab('pr_cmp_btn_normal', [ 'label' => esc_html__( 'Compare Normal', 'themewar' )]);
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_cmp_btn_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .piActionBtns a.compare',
                            ]
                    );
                    $this->add_control('pr_cmp_btn_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .woocommerce .piActionBtns a.compare' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_cmp_btn_hover', [ 'label' => esc_html__( 'Compare Hover', 'themewar' )]); 
                    $this->add_group_control(
                            Group_Control_Background::get_type(), [
                                    'name' => 'pr_cmp_btn_hover_bg',
                                    'label' => esc_html__( 'BTN BG', 'themewar' ),
                                    'types' => [ 'classic', 'gradient'],
                                    'selector' => '{{WRAPPER}} .woocommerce .piActionBtns a.compare:hover',
                            ]
                    );
                    $this->add_control('pr_cmp_btn_hover_color', [
                                    'label'     => esc_html__('BTN Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .woocommerce .piActionBtns a.compare:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_10', [
                    'label'         => esc_html__('Arrow Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_view',
                                    'operator'  => '==',
                                    'value'     => '2',
                            ],
                            [
                                    'name'      => 'is_arrow',
                                    'operator'  => '==',
                                    'value'     => 'yes',
                            ]
                        ],
                    ],
                ]
        );
            $this->add_responsive_control( 'pr_arrow_width', [
                            'label' => esc_html__( 'Arrow Width', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 1000,
                                            'step' => 1,
                                    ],
                                    '%' => [
                                            'min' => 0,
                                            'max' => 100,
                                    ],
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->add_responsive_control( 'pr_arrow_height', [
                            'label' => esc_html__( 'Arrow Height', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 150,
                                            'step' => 1,
                                    ],
                                    '%' => [
                                            'min' => 0,
                                            'max' => 100,
                                    ],
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->add_group_control(Group_Control_Typography::get_type(), [
                            'name'      => 'pr_arrow_typo',
                            'label'     => esc_html__('Arrow Typography', 'themewar' ),
                            'selector'  => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button',
                    ]
            );
            
            $this->start_controls_tabs( 'pr_box_tab_9' );
                $this->start_controls_tab('pr_prev_arrow_normal', [ 'label' => esc_html__( 'Prev Arrow Normal', 'themewar' )]);
                    $this->add_control('pr_prev_arrow_bg', [
                                    'label'     => esc_html__('BG Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_prev_arrow_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_prev_arrow_border',
                                    'label' => esc_html__( 'Arrow Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_prev_arrow_shadow',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_prev_arrow_hover', [ 'label' => esc_html__( 'Prev Arrow Hover', 'themewar' )]);
                    $this->add_control('pr_prev_arrow_bg_hover', [
                                    'label'     => esc_html__('BG Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev:hover' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_prev_arrow_color_hover', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_prev_arrow_border_hover',
                                    'label' => esc_html__( 'Arrow Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev:hover',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_prev_arrow_shadow_hover',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev:hover',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->start_controls_tabs( 'pr_box_tab_10' );
                $this->start_controls_tab('pr_next_arrow_normal', [ 'label' => esc_html__( 'Next Arrow Normal', 'themewar' )]);
                    $this->add_control('pr_next_arrow_bg', [
                                    'label'     => esc_html__('BG Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_next_arrow_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_next_arrow_border',
                                    'label' => esc_html__( 'Arrow Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_next_arrow_shadow',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_next_arrow_hover', [ 'label' => esc_html__( 'Next Arrow Hover', 'themewar' )]);
                    $this->add_control('pr_next_arrow_bg_hover', [
                                    'label'     => esc_html__('BG Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next:hover' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_next_arrow_color_hover', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next:hover' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_next_arrow_border_hover',
                                    'label' => esc_html__( 'Arrow Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next:hover',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_next_arrow_shadow_hover',
                                    'label' => esc_html__( 'Box Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next:hover',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->add_control('pr_arrow_radius', [
                            'label' => esc_html__( 'Arrow Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_prev_arrow_margin', [
                            'label' => esc_html__( 'Prev Arrow Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_next_arrow_margin', [
                            'label' => esc_html__( 'Next Arrow Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav button.owl-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_arrow_margin', [
                            'label' => esc_html__( 'Arrow Area Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_11', [
                    'label'         => esc_html__('Dots Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                        'terms'     => [
                            [
                                    'name'      => 'tw_view',
                                    'operator'  => '==',
                                    'value'     => '2',
                            ],
                            [
                                    'name'      => 'is_dots',
                                    'operator'  => '==',
                                    'value'     => 'yes',
                            ]
                        ],
                    ],
                ]
        );
            $this->add_responsive_control( 'pr_dots_width', [
                            'label' => esc_html__( 'Dots Width', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 50,
                                            'step' => 1,
                                    ]
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->add_responsive_control( 'pr_dots_inner_width', [
                            'label' => esc_html__( 'Dots Inner Width', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 50,
                                            'step' => 1,
                                    ]
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->add_responsive_control( 'pr_dots_height', [
                            'label' => esc_html__( 'Dots Height', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 50,
                                            'step' => 1,
                                    ]
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->add_responsive_control( 'pr_dots_inner_height', [
                            'label' => esc_html__( 'Dots Inner Height', 'themewar' ),
                            'type' => Controls_Manager::SLIDER,
                            'size_units' => [ 'px' ],
                            'range' => [
                                    'px' => [
                                            'min' => 0,
                                            'max' => 50,
                                            'step' => 1,
                                    ]
                            ],
                            'default' => [],
                            'selectors' => [
                                    '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                    ]
            );
            $this->start_controls_tabs( 'pr_box_tab_11' );
                $this->start_controls_tab('pr_dots_normal', [ 'label' => esc_html__( 'Dots Normal', 'themewar' )]);
                    $this->add_control('pr_dots_outer_bg', [
                                    'label'     => esc_html__('Outer BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_dots_outer_border',
                                    'label' => esc_html__( 'Outer Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_dots_outer_shadow',
                                    'label' => esc_html__( 'Outer Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button',
                            ]
                    );
                    $this->add_control('pr_dots_inner_bg', [
                                    'label'     => esc_html__('Inner BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_dots_inner_border',
                                    'label' => esc_html__( 'Inner Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_dots_inner_shadow',
                                    'label' => esc_html__( 'Outer Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_dots_hover', [ 'label' => esc_html__( 'Dots Hover', 'themewar' )]);
                    $this->add_control('pr_dots_outer_bg_hover', [
                                    'label'     => esc_html__('Outer BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_dots_outer_border_hover',
                                    'label' => esc_html__( 'Outer Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_dots_outer_shadow_hover',
                                    'label' => esc_html__( 'Outer Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover',
                            ]
                    );
                    $this->add_control('pr_dots_inner_bg_hover', [
                                    'label'     => esc_html__('Inner BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover span' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_dots_inner_border_hover',
                                    'label' => esc_html__( 'Inner Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover span',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_dots_inner_shadow_hover',
                                    'label' => esc_html__( 'Outer Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button:hover span',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->add_responsive_control('pr_outer_radius', [
                            'label' => esc_html__( 'Outer Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_inner_radius', [
                            'label' => esc_html__( 'Inner Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_dots_margin', [
                            'label' => esc_html__( 'Dots Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
            $this->add_responsive_control('pr_dots_area_margin', [
                            'label' => esc_html__( 'Dots Area Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filters_sliders.owl-carousel .owl-dots' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_12', [
                    'label'         => esc_html__('Filter Nav Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                ]
        );
            $this->start_controls_tabs( 'pr_box_tab_12' );
                $this->start_controls_tab('pr_tab_normal', [ 'label' => esc_html__( 'Tab Normal', 'themewar' )]);
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_tab_typo',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .filter_menu03 li, {{WRAPPER}} .filter_menu02 li',
                            ]
                    );
                    $this->add_control('pr_tab_color', [
                                    'label'     => esc_html__('Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_tab_bg', [
                                    'label'     => esc_html__('BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li' => 'background: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_tab_border',
                                    'label' => esc_html__( 'Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filter_menu03 li, {{WRAPPER}} .filter_menu02 li',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_tab_shaodw',
                                    'label' => esc_html__( 'Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filter_menu03 li, {{WRAPPER}} .filter_menu02 li',
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_tab_hover', [ 'label' => esc_html__( 'Tab Hover/Active', 'themewar' )]);
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_tab_typo_active',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .filter_menu03 li span:last-child',
                                    'conditions'    => [
                                        'terms'     => [
                                                [
                                                        'name'      => 'tw_tab_style',
                                                        'operator'  => '==',
                                                        'value'     => '1',
                                                ]
                                        ]
                                    ]
                            ]
                    );
                    $this->add_control('pr_tab_color_hover', [
                                    'label'     => esc_html__('Hover Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li:hover' => 'color: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li.active' => 'color: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_tab_color_active', [
                                    'label'     => esc_html__('Active Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li.active' => 'color: {{VALUE}}',
                                    ],
                                    'conditions'    => [
                                        'terms'     => [
                                                [
                                                        'name'      => 'tw_tab_style',
                                                        'operator'  => '==',
                                                        'value'     => '1',
                                                ]
                                        ]
                                    ]
                            ]
                    );
                    $this->add_control('pr_tab_bg_hover', [
                                    'label'     => esc_html__('Hover BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li:hover' => 'background: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li:hover' => 'background: {{VALUE}}',
                                            '{{WRAPPER}} .filter_menu02 li.active' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_tab_bg_active', [
                                    'label'     => esc_html__('Active BG', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .filter_menu03 li.active' => 'background: {{VALUE}}',
                                    ],
                                    'conditions'    => [
                                        'terms'     => [
                                                [
                                                        'name'      => 'tw_tab_style',
                                                        'operator'  => '==',
                                                        'value'     => '1',
                                                ]
                                        ]
                                    ]
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Border::get_type(), [
                                    'name' => 'pr_tab_border_active',
                                    'label' => esc_html__( 'Border', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filter_menu03 li.active, {{WRAPPER}} .filter_menu02 li',
                            ]
                    );
                    $this->add_group_control(
                            Group_Control_Box_Shadow::get_type(), [
                                    'name' => 'pr_tab_shaodw_active',
                                    'label' => esc_html__( 'Shadow', 'themewar' ),
                                    'selector' => '{{WRAPPER}} .filter_menu03 li.active, {{WRAPPER}} .filter_menu02 li',
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
            
            $this->add_responsive_control('pr_tab_radius', [
                            'label' => esc_html__( 'Radius', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filter_menu03 li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .filter_menu02 li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
            $this->add_responsive_control('pr_tab_item_padding', [
                            'label' => esc_html__( 'Item Padding', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filter_menu03 li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .filter_menu02 li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
            $this->add_responsive_control('pr_tab_item_margin', [
                            'label' => esc_html__( 'Item Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filter_menu03 li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .filter_menu02 li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
            $this->add_responsive_control('pr_tab_area_margin', [
                            'label' => esc_html__( 'Area Margin', 'themewar' ),
                            'type'  => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .filter_menu03' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .filter_menu02' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ]
                    ]
            );
        $this->end_controls_section();
        
        $this->start_controls_section(
                'section_tab_13', [
                    'label'         => esc_html__('Title Styling', 'themewar'),
                    'tab'           => Controls_Manager::TAB_STYLE,
                    'conditions'    => [
                            'terms'     => [
                                    [
                                            'name'      => 'enable_title',
                                            'operator'  => '==',
                                            'value'     => 'yes',
                                    ]
                            ]
                    ]
                ]
        );
            $this->start_controls_tabs( 'pr_box_tab_13' );
                $this->start_controls_tab('pr_subtitle_tab', [ 'label' => esc_html__( 'Sub Title', 'themewar' )]);
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_suttitle_typo',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .subTitle',
                            ]
                    );
                    $this->add_control('pr_stubtitle_color', [
                                    'label'     => esc_html__('Subtitle Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .subTitle' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_subtitle_margin', [
                                    'label' => esc_html__( 'Subtitle Margin', 'themewar' ),
                                    'type'  => Controls_Manager::DIMENSIONS,
                                    'size_units' => [ 'px', '%', 'em' ],
                                    'selectors'  => [
                                        '{{WRAPPER}} .subTitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                                    ]
                            ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab('pr_areatitle_tab', [ 'label' => esc_html__( 'Title', 'themewar' )]);
                    $this->add_group_control(Group_Control_Typography::get_type(), [
                                    'name'      => 'pr_areatitle_typo',
                                    'label'     => esc_html__('Typography', 'themewar' ),
                                    'selector'  => '{{WRAPPER}} .secTitle',
                            ]
                    );
                    $this->add_control('pr_areatitle_color', [
                                    'label'     => esc_html__('Title Color', 'themewar' ),
                                    'type'      => Controls_Manager::COLOR,
                                    'selectors' => [
                                            '{{WRAPPER}} .secTitle' => 'background: {{VALUE}}',
                                    ],
                            ]
                    );
                    $this->add_control('pr_areatitle_margin', [
                                    'label' => esc_html__( 'Title Margin', 'themewar' ),
                                    'type'  => Controls_Manager::DIMENSIONS,
                                    'size_units' => [ 'px', '%', 'em' ],
                                    'selectors'  => [
                                        '{{WRAPPER}} .secTitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
                                    ]
                            ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();

    }

    protected function render(){
        $settings = $this->get_settings_for_display();
        
        $enable_title = (isset($settings['enable_title']) && !empty($settings['enable_title']) ? $settings['enable_title'] : 'no');
        $pr_area_subtitle = (isset($settings['pr_area_subtitle']) && !empty($settings['pr_area_subtitle']) ? $settings['pr_area_subtitle'] : '');
        $pr_area_title = (isset($settings['pr_area_title']) && !empty($settings['pr_area_title']) ? $settings['pr_area_title'] : '');
        
        $tw_view = (isset($settings['tw_view']) && $settings['tw_view'] > 0 ? $settings['tw_view'] : 1);
        $tw_style = (isset($settings['tw_style']) && $settings['tw_style'] > 0 ? $settings['tw_style'] : 1);
        $tw_filter_type = (isset($settings['tw_filter_type']) && $settings['tw_filter_type'] > 0 ? $settings['tw_filter_type'] : 1);
        $tw_tab_style = (isset($settings['tw_tab_style']) && !empty($settings['tw_tab_style']) ? $settings['tw_tab_style'] : 1);
        
        $enable_round_corner = ($tw_style == 1 && isset($settings['enable_round_corner']) && !empty($settings['enable_round_corner']) ? $settings['enable_round_corner'] : 'no');
        
        $pro_filter_all_label = (isset($settings['pro_filter_all_label']) && !empty($settings['pro_filter_all_label']) ? $settings['pro_filter_all_label'] : esc_html__('All Products', 'themewar'));
        
        $pr_tab_list = (isset($settings['pr_tab_list']) && !empty($settings['pr_tab_list']) ? $settings['pr_tab_list'] : []);
        $pr_tab_list_2 = (isset($settings['pr_tab_list_2']) && !empty($settings['pr_tab_list_2']) ? $settings['pr_tab_list_2'] : []);
        
        
        $tw_per_item = (isset($settings['tw_per_item']) && !empty($settings['tw_per_item']) ? $settings['tw_per_item'] : 8);
        $tw_order_by = (isset($settings['tw_order_by']) && !empty($settings['tw_order_by']) ? $settings['tw_order_by'] : 'date');
        $tw_order = (isset($settings['tw_order']) && !empty($settings['tw_order']) ? $settings['tw_order'] : 'DESC');
        
        $tw_col_per_row = (isset($settings['tw_col_per_row']) && !empty($settings['tw_col_per_row']) ? $settings['tw_col_per_row'] : 4);
        
        $show_empty_rating = (isset($settings['show_empty_rating']) && !empty($settings['show_empty_rating']) ? $settings['show_empty_rating'] : 'no');
        $show_wishlist = (isset($settings['show_wishlist']) && !empty($settings['show_wishlist']) ? $settings['show_wishlist'] : 'no');
        $show_compare = (isset($settings['show_compare']) && !empty($settings['show_compare']) ? $settings['show_compare'] : 'no');
        $show_quickview = (isset($settings['show_quickview']) && !empty($settings['show_quickview']) ? $settings['show_quickview'] : 'no');
        $show_flashlabels = (isset($settings['show_flashlabels']) && !empty($settings['show_flashlabels']) ? $settings['show_flashlabels'] : 'no');
        $show_cart = (isset($settings['show_cart']) && !empty($settings['show_cart']) ? $settings['show_cart'] : 'no');
        $price_format = (isset($settings['price_format']) && !empty($settings['price_format']) ? $settings['price_format'] : 1);
        $show_pricing_unit = (isset($settings['show_pricing_unit']) && !empty($settings['show_pricing_unit']) && $settings['show_pricing_unit'] == 'yes' ? TRUE : FALSE);
        
        $tw_item_per_row_1 = (isset($settings['tw_item_per_row_1']) && $settings['tw_item_per_row_1'] > 0 ? $settings['tw_item_per_row_1'] : 4);
        $tw_item_per_row_2 = (isset($settings['tw_item_per_row_2']) && $settings['tw_item_per_row_2'] > 0 ? $settings['tw_item_per_row_2'] : 4);
        $tw_item_per_row_3 = (isset($settings['tw_item_per_row_3']) && $settings['tw_item_per_row_3'] > 0 ? $settings['tw_item_per_row_3'] : 3);
        $tw_item_per_row_4 = (isset($settings['tw_item_per_row_4']) && $settings['tw_item_per_row_4'] > 0 ? $settings['tw_item_per_row_4'] : 2);
        $tw_gapping = (isset($settings['tw_gapping']) && $settings['tw_gapping'] > 0 ? $settings['tw_gapping'] : 30);    
        $is_autopaly = (isset($settings['is_autopaly']) && !empty($settings['is_autopaly']) ? $settings['is_autopaly'] : 'no');
        $is_loop = (isset($settings['is_loop']) && !empty($settings['is_loop']) ? $settings['is_loop'] : 'no');
        $is_arrow = (isset($settings['is_arrow']) && !empty($settings['is_arrow']) ? $settings['is_arrow'] : 'no');
        $is_dots = (isset($settings['is_dots']) && !empty($settings['is_dots']) ? $settings['is_dots'] : 'no');
        
        $pr_tab_item_alignment = (isset($settings['pr_tab_item_alignment']) && !empty($settings['pr_tab_item_alignment']) ? $settings['pr_tab_item_alignment'] : 'center');
        
        $tw_arrow_position = ($is_arrow == 'yes' && isset($settings['tw_arrow_position']) && $settings['tw_arrow_position'] > 0 ? $settings['tw_arrow_position'] : 0);
        $arrow_position = ($tw_arrow_position > 1 ? 'arrowPosition_'.$tw_arrow_position : '');
        
        $tw_thumb_width = (isset($settings['tw_thumb_width']) && $settings['tw_thumb_width'] > 0 ? $settings['tw_thumb_width'] : 0);
        $tw_thumb_height = (isset($settings['tw_thumb_height']) && $settings['tw_thumb_height'] > 0 ? $settings['tw_thumb_height'] : 0);

        $tw_hover_img_style = (isset($settings['tw_hover_img_style']) && $settings['tw_hover_img_style'] > 0 ? $settings['tw_hover_img_style'] : 1);
        $tw_hover_thumb_width = (isset($settings['tw_hover_thumb_width']) && $settings['tw_hover_thumb_width'] > 0 ? $settings['tw_hover_thumb_width'] : 280);
        $tw_hover_thumb_height    = (isset($settings['tw_hover_thumb_height']) && $settings['tw_hover_thumb_height'] > 0 ? $settings['tw_hover_thumb_height'] : 260);
        
        if($tw_style != 6){
            $tw_col_per_row = ($tw_col_per_row > 4 ? 4 : $tw_col_per_row);
            $tw_item_per_row_1 = ($tw_item_per_row_1 > 4 ? 4 : $tw_item_per_row_1);
        }
        
        
        $folder = ($tw_view == 2 ? 'slide' : 'grid');
        include dirname(__FILE__) . '/style/product-filter/'.$folder.'/style'.$tw_style.'.php';
    }
    
    protected function content_template() {
        
    }
}