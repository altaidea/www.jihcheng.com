<?php
// 內容管理
// 封口機 → SM
return [
// Products.php
    'sealing-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder'],
    'new_patent' => ['enabled' => false,],
    // series-name
    'title' => [
      'zh' => '封口機',
      'en' => 'Sealing Machine'
    ],
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'sm/sm-h.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'sealing-machine',
      // series-intro
      'intro' => [
        'zh' => '',
        'en' => ''
      ],

      // products-series.php + products-detail.php
      'sm' => [
        'slug' => 'sm',
        'new_patent' => ['enabled' => false,],
        'title' => [
          'zh' => 'SM 連續式封口機',
          'en' => 'SM Continuous Heat Sealing Machine',
        ],
        'type' => 'SM-H (Horizontal Type) / SM-V (Vertical Type)', 
        'image' => [
          'sm-h.webp',
          'sm-v.webp',
          // 'sm-h-1.webp',
          // 'sm-v.webp',
        ],
        'image_class' => [
          'v-style',
          'v-style',
          // 'box-style',
          // 'box-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              連續式半自動封口機專為小至中型生產需求設計，具備穩定連續封口功能，廣泛用於食品、醫藥、日用化工等各類產品包裝封口。適用各種包裝材料的密封，如塑料袋、鋁箔袋、複合材料袋等。無論是食品、醫藥產品、日用化工品，簡單易操作設計，成為中小型企業或需要少量多樣包裝的理想選擇，提供穩定、高品質封口效果，實現小產能包裝產品封口，延長產品保存期限，減少人工成本，提升生產線效能。
            ',
            'en'=>'
            '
          ],

          'option' => [
            'zh'=>'墨球式日期機、色帶式日期機、耐熱布皮帶、鋼帶',
            'en'=>'Ink roller coder, Ribbon coder, Heat-resistant cloth belt, Steel belt'
          ],

          'items' => [
            [
              'img' => ['sm-1.webp'],
              'text'  => [
                'zh'=>'色帶式日期機',
                'en'=>'Ribbon coder'
              ]
            ],
            [
              'img' => ['sm-2.webp'],
              'text' => [
                  'zh' => '墨球式日期機',
                  'en' => 'Ink roller coder'
              ]
            ]
          ]
        ],

        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>穩定連續封口：</h4>
                  設備能持續運行，適合小產能生產線。封口速度可根據需要調整，每分鐘可達數十個封口，最大限度提高產能。
                </li>
                <li>
                  <h4>優質封口效果：</h4>採用加熱技術，保證每一個封口都牢固且均勻，防止漏氣、漏水，確保包裝密封性和產品品質。
                </li>
                <li>
                  <h4>適用廣泛包裝材料：</h4>可適用多種包裝材料如PE、PVC、PP、PET等，適用於不同厚度和類型的袋子，廣泛應用於食品、藥品、電子產品等包裝領域。
                </li>
                <li>
                  <h4>簡單易操作：</h4>設備配備簡易操作介面，調整封口溫度、速度、壓力等參數調整簡單，即使是沒有專業經驗操作人員也能輕鬆上手。
                </li>
                <li>
                  <h4>穩定可靠的性能：</h4>採用高品質材料，確保機器運行穩定，長時間運作也能保持良好的封口效果，減少停機時間。
                </li>
                <li>
                  <h4>節能設計：</h4>設備採用先進的節能技術，運行過程中能有效控制能源消耗，達到環保節能的效果，幫助您節省運行成本。
                </li>
                <li>
                  <h4>模組化維護設計：</h4>設備結構模組化設計，簡單便捷的維護和清潔過程，降低停機時間，減少生產過程中維護成本。
                </li>
                <li>
                  <h4>適應各種生產環境：</h4>可根據需求選擇不同的材質和設計，適應各種環境的生產需求。
                </li>
                <li>
                  <h4>靈活移動，節省空間：</h4>半自動設計不佔用過多空間，機器本身設計輕便，可輕鬆在生產車間內移動，靈活應對不同的生產需求。
                </li>
                <li>
                  <h4>簡易清潔與維護：</h4>設備結構簡單，便於日常清潔與維護，延長設備使用壽命，確保生產流程不會受到中斷。
                </li>
              </ul>
            ',
            'en'=>'
            '
          ],

          'items' => [
            [
              'img' => [''],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
          ]
        ],

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li>食品包裝：糖果、膨化食品、乾果、冷凍食品。</li><li>醫藥產品：藥品、保健品、化妝品包裝。</li><li>日用化工：清潔劑、洗衣粉、護膚品。</li><li>其他行業：電子產品包裝、五金配件等。</li></ul>
            ',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [
            //     'img-agm-application-bean-package.webp', 'img-agm-application-pasta-package.webp'
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
            'zh'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th>機型</th>
                    <th>SM-V 立式</th>
                    <th>SM-H 橫式</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封口能力 / 米</td>
                    <td>每分鐘8米</td>
                    <td>每分鐘8米</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力 / 千瓦</td>
                    <td>AC 110/220V 1千瓦</td>
                    <td>AC 110/220V 1千瓦</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 × 寬 × 高 (m/m)</td>
                    <td>1600x550x1500</td>
                    <td>1410x580x1120</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>SM-V (Vertical)</th>
                    <th>SM-H (Horizontal)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Capacity / Meter</td>
                    <td>8 m/min</td>
                    <td>8 m/min</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply / kW</td>
                    <td>AC 110/220V 1kW</td>
                    <td>AC 110/220V 1kW</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>1600 x 550 x 1500</td>
                    <td>1410 x 580 x 1120</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          'table_note' => [
            // 'zh'=>'本機器所需之空壓機須由客戶自行準備。',
            // 'en'=>'The air compressor required for this machine must be provided by the customer.'
          ],

          'machine-line' => [
            // [
            //   'image' => 'img-agm-4a.webp',
            //   'text'  => ['zh'=>'','en'=>''],
            // ],
            // [
            //   'image' => 'img-agm-4a.webp',
            //   'text'  => ['zh'=>'','en'=>''],
            // ]
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => 'Automatic Bag / Filling Packing Machine',
            //   'combin_type'  => 'AGM-A1 + PF',
            //   'image' => [
            //     'agm.webp',
            //     'img-pf-filling-machine.webp'
            //   ]
            // ]
          ]
        ],

         // 產品影片
        'video' => '',
      ]
    ]
  ]
]
?>