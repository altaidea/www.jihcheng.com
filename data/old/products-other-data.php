<?php
// 內容管理
// 其他相關機械 → CY、 Auger 、客製化機
return [
// Products.php
  'others' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder', 'customized'],
    'new_patent' => ['enabled' => false,], 
    // series-name
    'title' => [
      'zh' => '其他相關機械',
      'en' => 'Other Related Equipment'
    ],
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'cy/cy.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],
    // products-series.php
    'series' => [
      'slug' => 'others',
      'intro' => [
        'zh' => '',
        'en' => ''
      ],

      // products-series.php + products-detail.php
      'cy' => [
        'slug' => 'cy',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'CY 型 投入機（供給輸送帶）',
          'en' => 'CY Supply Conveyor',
        ],
        'type' => '',
        'image' => [
          'cy.webp',
          'cy-1.webp',
        ],
        'image_class' => [
          'box-style',
          'box-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>能力：20~30次 / 分</li>
                <li>使用電力：AC 220 VOLT 1 HP</li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Capacity: 20–30 cycles/min</li>
                <li>Power Supply: AC 220V 1HP</li>
              </ul>
            '
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'用途：各種固形物投入裝置',
            'en'=>'Application: Feeding device for various solid materials.'
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'dcy' => [
        'slug' => 'dcy',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => '排出輸送帶',
          'en' => 'Discharge Conveyor',
        ],
        'type' => '',
        'image' => [
          'dcy.webp',
        ],
        'image_class' => [
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            // 'zh'=>'
            //   <ul>
            //     <li>能力：20~30次 / 分</li>
            //     <li>使用電力：AC 220 VOLT 1 HP</li>
            //   </ul>
            // ',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            // 'zh'=>'用途：各種固形物投入裝置',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'auger' => [
        'slug' => 'auger',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => '粉末計量充填機',
          'en' => 'SERVO AUGER FILLER FOR POWER',
        ],
        'type' => '',
        'image' => [
          'auger.webp',
        ],
        'image_class' => [
          'box-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            // 'zh'=>'
            //   <ul>
            //     <li>能力：20~30次 / 分</li>
            //     <li>使用電力：AC 220 VOLT 1 HP</li>
            //   </ul>
            // ',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            // 'zh'=>'用途：各種固形物投入裝置',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'zber' => [
        'slug' => 'zber',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'Z 型補料機',
          'en' => 'Z-Type Bucket Elevator',
        ],
        'type' => '',
        'image' => [
          'zber.webp',
        ],
        'image_class' => [
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>能力：20~30次 / 分</li>
                <li>使用電力：AC 220 VOLT 1 HP</li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Capacity: 20–30 cycles/min</li>
                <li>Power Supply: AC 220V 1HP</li>
              </ul>
            '
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'用途：各種固形物、粉劑 補料。',
            'en'=>'Application: Material replenishment for various solids and powders.'
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'work-platform' => [
        'slug' => 'work-platform',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => '操作平台',
          'en' => 'Work Platform',
        ],
        'type' => '',
        'image' => [
          'work-platform.webp',
        ],
        'image_class' => [
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            // 'zh'=>'
            //   <ul>
            //     <li>能力：20~30次 / 分</li>
            //     <li>使用電力：AC 220 VOLT 1 HP</li>
            //   </ul>
            // ',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            // 'zh'=>'用途：各種固形物投入裝置',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'cmd' => [
        'slug' => 'cmd',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => '檢重機、金屬檢測機',
          'en' => 'Checkweigher & Metal Detector',
        ],
        'type' => '',
        'image' => [
          'cmd.webp',
        ],
        'image_class' => [
          'h-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            // 'zh'=>'
            //   <ul>
            //     <li>能力：20~30次 / 分</li>
            //     <li>使用電力：AC 220 VOLT 1 HP</li>
            //   </ul>
            // ',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            // 'zh'=>'用途：各種固形物投入裝置',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ],
      'h-flow-wm' => [
        'slug' => 'h-flow-wm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => '臥式包裝機',
          'en' => 'Horizontal Flow Wrap Machine',
        ],
        'type' => '',
        'image' => [
          'h-flow-wm.webp',
        ],
        'image_class' => [
          'h-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            // 'zh'=>'
            //   <ul>
            //     <li>能力：20~30次 / 分</li>
            //     <li>使用電力：AC 220 VOLT 1 HP</li>
            //   </ul>
            // ',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            // 'zh'=>'用途：各種固形物投入裝置',
            // 'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     ''
            //   ],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            // 'zh'=>'',
            // 'en'=>'',
          ],

          'table_note' => [
            // 'zh'=>'',
            // 'en'=>''
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'img-product-demo.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ],
          ]
        ],
      ]
    ]
  ]
]
?>