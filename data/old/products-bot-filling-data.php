<?php
// 內容管理
// 瓶裝定量充填機 → BF
return [
// Products.php
  'bot-filling' => [
    // --- 新增：分類識別標籤，這不會影響原有顯示邏輯 ---
    'category_tags' => ['liquid'],

    'new_patent' => ['enabled' => false,],
    // series-name
    'title' => [
          'zh' => '瓶裝充填封口機',
          'en' => 'Bottling Filling & Sealing Machine',
        ],
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'bf/bf.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],
    // products-series.php
    'series' => [
      'slug' => 'bot-filling',
      // series-intro
      'intro' => [
        'zh' => '
          瓶裝充填機專為瓶裝產品生產線設計定量充填設備，廣泛應用於食品、飲料、醫藥、化妝品及日用化工等行業。無論是液體、粘稠液體還是粉末產品，瓶裝充填機能精確、高效地完成充填可配合鎖蓋，提高生產效率，降低人力成本。瓶裝充填機優勢在於其高效、精準、靈活和衛生，成為各行各業提高生產力、確保產品品質和降低成本重要設備，為現代化生產設備，提升生產效率，實現規模化生產和企業升級的關鍵設備。
        ',
        'en' => ''
      ],
      // products-series.php + products-detail.php
      'bf' => [
        'slug' => 'bf',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],
        
        'title' => [
          'zh' => 'BF 瓶裝充填封口機',
          'en' => 'BF Bottling Filling & Sealing Machine',
        ],

        'type' => 'BF-6 / BF-12', 

        'image' => [
          'bf.webp',
          'bf-1.webp',
          'bf-2.webp',
          'bf-3.webp'
        ],

        'image_class' => [
          'h-style',
          'h-style',
          'combin-style',
          'box-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              瓶裝充填機專為瓶裝產品生產線設計定量充填設備，廣泛應用於食品、飲料、醫藥、化妝品及日用化工等行業。無論是液體、粘稠液體還是粉末產品，瓶裝充填機能精確、高效地完成充填可配合鎖蓋，提高生產效率，降低人力成本。瓶裝充填機優勢在於其高效、精準、靈活和衛生，成為各行各業提高生產力、確保產品品質和降低成本重要設備，為現代化生產設備，提升生產效率，實現規模化生產和企業升級的關鍵設備。<p><strong>瓶裝充填機成為您的生產利器，提升產能，穩定品質，讓產品在市場競爭中占據優勢！</strong></p>
            ',
            'en'=>'
              Specifically designed for automated production lines, these bottling filling machines offer versatile quantitative solutions for industries ranging from food and beverage to chemical and cosmetic sectors. Capable of processing liquids, viscous pastes, and powders with extreme accuracy, the BF series seamlessly integrates with capping units to optimize efficiency. Their robust, hygienic design and flexible configuration make them a cornerstone for enterprises looking to stabilize quality and gain a competitive edge in the market. <p><strong>Empower your production with our bottling solutions—boosting capacity and ensuring quality for market leadership!</strong></p>
            '
          ],

          'option' => [
            'zh'=>'栓蓋機、貼標機、封膜機…等週邊整線設備。',
            'en'=>'Capping Machine, Labeling Machine, Induction Foil Sealer, and other Turnkey Production Line Equipment.'
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
                <li>
                  <h4>高精度充填：</h4>先進的自動化系統，能夠精確控制每瓶的充填量，確保產品的一致性與質量。
                </li>
                <li>
                  <h4>多功能適配：</h4>根據不同瓶型及產品類型，靈活調整充填規格，適應多樣化市場需求。
                </li>
                <li>
                  <h4>簡單操作：</h4>配備智能觸控面板，簡便操作，無需專業培訓可快速上手。
                </li>
                <li>
                  <h4>快速更換瓶型：</h4>設計簡單，無需工具可快速更換瓶型，滿足不同生產需求。
                </li>
                <li>
                  <h4>衛生標準高：</h4>全不鏽鋼材質，符合食品和藥品行業的衛生要求，易於清潔維護。
                </li>
                <li>
                  <h4>節能高效：</h4>先進節能技術，降低能源消耗，提升生產效益。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>High-Precision Filling:</h4> Advanced automated systems precisely control the volume of each bottle, ensuring absolute product consistency and quality.
                </li>
                <li>
                  <h4>Versatile Adaptation:</h4> Easily adjustable specifications to accommodate various bottle shapes and product types, meeting diverse market demands.
                </li>
                <li>
                  <h4>User-Friendly Operation:</h4> Equipped with an intelligent touch panel for intuitive control, allowing operators to master the system without extensive technical training.
                </li>
                <li>
                  <h4>Rapid Changeover:</h4> Engineered for quick bottle size changeovers without the need for specialized tools, maximizing production uptime.
                </li>
                <li>
                  <h4>Strict Hygiene Standards:</h4> Full stainless steel construction meets the high sanitary requirements of food and pharmaceutical industries, facilitating easy cleaning.
                </li>
                <li>
                  <h4>Energy Efficient:</h4> Integrates advanced energy-saving technology to reduce operational costs while enhancing overall output.
                </li>
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
            'zh'=>'
              <ul><li>食品：果醬、巧克力醬、調料醬、油、醬料、食品液態、生機食品、健康食品 。</li><li>日用品：洗髮乳、洗髮精、潤絲精、洗碗精、洗潔精、機油。</li><li>飲料：水、果汁、茶飲。</li><li>醫藥：口服液、眼藥水。</li><li>化妝品：洗面乳、乳液。</li><li>化工品：機油、農藥。</li></ul>
            ',
            'en'=>'
              <ul>
                <li>Food Industry: Jams, chocolate spreads, seasonings, edible oils, sauces, liquid food, organic and health supplements.</li>
                <li>Daily Use: Shampoo, hair conditioners, dish soaps, detergents, lubricants.</li>
                <li>Beverages: Mineral water, fruit juices, bottled teas.</li>
                <li>Pharmaceuticals: Oral liquids, eye drops.</li>
                <li>Cosmetics: Facial cleansers, lotions, creams.</li>
                <li>Chemicals: Motor oils, pesticides, liquid fertilizers.</li>
              </ul>
            '
          ],

          'items' => [
            [
              'img' => [
                'bf-app-1.webp', 
                'bf-app-2.webp',
                'bf-app-3.webp'
              ],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
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
            // 'en'=>'',
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => '',
            //   'combin_type'  => '整線設備',
            //   'image' => [
            //     'bf-combin-1.webp'
            //   ]
            // ],
          ]
        ],

        // 產品影片
        'video' => '',
      ],
    ]
  ]
]
?>