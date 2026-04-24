<?php
// 內容管理 // 杯/碗麵封口包裝機
return [
// Products.php
  'cup-bowl-instant-noodle-sealing-and-packaging-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'others'],
    // 'slug' => 'cup-bowl-instant-noodle-sealing-and-packaging-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '杯碗麵封口包裝機',
      'en' => 'Cup Bowl Instant Noodle Sealing & Packaging Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'ns/ns.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php // 杯碗麵封口包裝機 Cup Bowl Instant Noodle Sealing & Packaging Machine
    'series' => [
      'slug' => 'cup-bowl-instant-noodle-sealing-and-packaging-machine',
      // series-intro
      'intro' => [
        'zh' => '
          
        ',
        'en' => '
          
        '
      ],

      // products-series.php + products-detail.php
      'ns' => [
        'slug' => 'ns',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        
        'title' => [
          'zh' => 'NS 杯麵碗麵封口包裝機',
          'en' => 'NS Cup Bowl Instant Noodle Sealing & Packaging Machine',
        ],

        'type' => 'NS-2 / NS-4 / NS-6 / NS-8', 

        'image' => [
          'ns.webp',
          'ns-1.webp',
        ],
        'image_class' => [
          'h-style',
          'h-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh' => '
              杯麵/碗麵充填封口包裝機是食品行業包裝產品不可或缺的重要設備，廣泛應用於方便麵食品行業。從自動落杯、檢測、調味料充填、下紙、封口、排出，將產品封口，確保食物、產品品質、延長保存期限、防止外界污染。高密封性、靈活多樣包裝選擇和簡單操作設計等優勢，已經成為現代生產線中不可或缺的設備。提升生產效率，確保產品安全性和新鮮度，滿足現代化生產線需求，為企業降低成本、提高市場競爭力、提升品牌強有力的支持，從市場中脫穎而出，讓包裝過程更簡單，讓產品更完美！
            ',
            'en' => '
              The cup and bowl noodle filling and sealing machine is an indispensable piece of equipment in the food packaging industry, particularly widely used in the instant noodle sector. The process—ranging from automatic cup dropping, detection, and seasoning filling to film placement, sealing, and discharging—ensures every product is securely sealed to maintain food quality, extend shelf life, and prevent external contamination. With its superior airtightness, flexible packaging options, and user-friendly design, it has become a cornerstone of modern production lines. By boosting efficiency, ensuring freshness, and meeting modernized production demands, this equipment helps enterprises reduce costs and strengthen market competitiveness. It provides powerful support for brand elevation, helping products stand out in the market by making the packaging process simpler and the results more perfect!
            '
          ],

          'option' => [
            'zh'=>'',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh' => '
              <ul>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">高效自動化生產</span>
                  <ol>
                    <li>減少人工成本，提高生產速度，實現全自動運行。</li>
                    <li>提供穩定的生產流程，減少生產中斷時間。</li>
                  </ol>
                </li>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">精確充填，保持標準化</span>
                  <ol>
                    <li>準確控制每次充填量，避免過量或不足，保證產品一致性。</li>
                    <li>減少原料浪費，提高物料使用效率。</li>
                  </ol>
                </li>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">完美封口，保證產品質量</span>
                  <ol>
                    <li>高效封口，避免封口不良，提升產品安全性。</li>
                    <li>增強產品保鮮效果，延長產品保存期限。</li>
                    <li>防止包裝破損和泄漏，避免物流過程中產生不良品。</li>
                  </ol>
                </li>

                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">提高生產穩定性</span>
                  <ol>
                    <li>減少機器故障率，保持穩定運行。</li>
                    <li>設備精密設計，減少維護需求，降低停機時間。</li>
                  </ol>
                </li>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">智能化操作，簡單易用</span>
                  <ol>
                    <li>人機觸控式及自動化系統，簡單操作，減少操作錯誤。</li>
                    <li>智能監控系統，實時追蹤生產狀況，避免錯誤發生。</li>
                    <li>快速學習和操作，提升員工工作效率。</li>
                  </ol>
                </li>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">高效節能，降低運營成本</span>
                  <ol>
                    <li>節能設計，減少電力和其他能源的浪費，降低生產成本。</li>
                    <li>符合環保標準，提升企業的社會責任形象。</li>
                  </ol>
                </li>
                <li>
                  <span style="display: block; margin-bottom: 1rem; font-weight: 600;">提高產品的市場競爭力</span>
                  <ol>
                    <li>高標準的封口品質，吸引消費者注意，增強品牌形象。</li>
                    <li>確保產品運輸過程中安全性，避免損壞和污染，提升消費者信任。</li>
                    <li>提升包裝的外觀和設計，在市場上更具吸引力。</li>
                    <li>合適各種材料，如塑料、紙、鋁箔等，適應不同市場需求。</li>
                    <li>可使用可回收或生物降解材料，符合環保要求。</li>
                    <li>可以進行不同形式的包裝設計，滿足消費者對創新包裝的需求。</li>
                  </ol>
                </li>
              </ul>
            ',
            'en' => '
            '
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

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              杯、碗裝即食麵（泡麵）等，充填裝置: 可依不同產品選購下料裝置。
            ',
            'en'=>'
              Suitable for cup and bowl instant noodles. Filling system: Optional dosing/feeding devices are available based on specific product requirements.
            '
          ],

          'items' => [
            [
              'img' => [
                'ns-sample-1.webp',
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
            'zh'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th style="width: 20%;">NS-2</th>
                    <th style="width: 20%;">NS-4</th>
                    <th style="width: 20%;">NS-6</th>
                    <th style="width: 20%;">NS-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度（杯∕分）</td>
                    <td>35~40</td>
                    <td>70~80</td>
                    <td>100~120</td>
                    <td>150~160</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                    <td>7HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HO</td>
                    <td colspan="2">AC 220V 2HP</td>
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
                    <th>NS-2</th>
                    <th>NS-4</th>
                    <th>NS-6</th>
                    <th>NS-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity (Cup/Min)</td>
                    <td>35~40</td>
                    <td>70~80</td>
                    <td>100~120</td>
                    <td>150~160</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td>AC 220V<br/>1/2HP</td>
                    <td>AC 220V<br/>1HP</td>
                    <td>AC 220V<br/>2HP</td>
                    <td>AC 220V<br/>2HP</td>
                  </tr>
                </tbody>
              </table>
            '
          ],

          'table_note' => [
            'zh'=>'* 本機器所需之空壓機須由客戶自行準備。',
            'en'=>'* Air compressor is not included.'
          ],

          'machine-line' => [
            // [
            //   'image' => 'img-agm-4a.webp',
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

        // 產品影片
        'video' => '',

        // 自由命名區塊
        // 'custom-blocks' => [
          // [
          //   'key' => 'operation-flow',
          //   'title' => ['zh'=>'','en'=>''],
          //   'content' => ['zh'=>'','en'=>''],
          //   'images' => ['image' => '','text' => ['zh'=>'','en'=>'']],
          // ],
        // ],
      ],
    ],

  ], // 杯/碗麵封口包裝機 END
]
?>