<?php
// 內容管理 
// 口栓袋/吸嘴袋鎖蓋充填機 → AGC
return [
// Products.php
  'spout-pouch-filling-and-packaging-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['liquid'],
    // 'slug' => 'spout-pouch-filling-and-packaging-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '口栓袋 / 吸嘴袋鎖蓋充填機',
      'en' => 'Spout Pouch Filling & Capping Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'agc/agc.webp',
        'caption' => ['zh' => '','en' => '',],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'spout-pouch-filling-and-packaging-machine',
      // series-intro
      'intro' => [
        'zh' => '',
        'en' => ''
      ],

      // products-series.php + products-detail.php
      'agc' => [
        'slug' => 'agc',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],
        
        'title' => [
          'zh' => 'AGC 口栓袋 / 吸嘴袋 鎖蓋充填機',
          'en' => 'AGC Spout Pouch Filling & Capping Machine',
        ],

        'type' => 'AGC-1 / AGC-2 / AGC-3 / AGC-4 / AGC-6 / AGC-H', 

        'image' => [
          'agc.webp',
          'agc-1.webp',
          'agc-2.webp',
        ],

        'image_class' => [
          'v-style',
          'v-style',
          'v-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh' => '
              鎖嘴口栓袋充填鎖蓋機，專為食品、化妝品、日用清潔用品、生技醫藥、補充包等充填鎖蓋設計，讓產品在外出或收納時方便攜帶，收納產品時節省空間堆放，不需要瓶瓶罐罐，符合垃圾減量環保概念，本機從自動上袋、充填、下蓋、鎖蓋、配有CIP自動清洗裝置，整個生產流程更快速、更穩定，具備自動化技術，提高生產效率、減少人工成本。無論是中小型企業還是大型生產線，鎖嘴口栓袋充填鎖蓋機具有效、精確、穩定、節省成本、操作簡便等優勢，提高生產速度並確保包裝品質，提升生產線帶來顯著效益。讓產品在市場上更有競爭力，請立即聯繫我們，了解更多技術細節！
            ',
            'en' => '
              The Spout Pouch Filling and Capping Machine is specifically engineered for high-precision filling and capping of food, cosmetics, daily cleaning products, biotechnology, and refill pouches. This packaging solution offers exceptional portability and space-saving storage, eliminating the need for bulky bottles while aligning with eco-friendly waste reduction concepts. Fully automated from bag loading and filling to cap feeding and torque capping, the machine also features a built-in CIP (Clean-In-Place) automatic cleaning system to ensure a faster, more stable, and hygienic production process. Whether for SMEs or large-scale production lines, this equipment delivers efficiency, precision, and significant cost savings. Enhance your production speed and guarantee packaging quality with our user-friendly technology. Boost your market competitiveness today—contact us now for more technical details!
            '
          ],

          'option' => [
            'zh' => '噴墨日期機、殺菌設備、充氮裝置(氮氣製造機需客人自備)',
            'en' => 'Inkjet Date Coder, Sterilization Equipment, Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
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
            'zh'=>'
              <ul>
                <li>
                  <strong>高效充填： </strong>
                  精準定量，確保包裝內容物的準確性，提高產能。
                </li>
                <li>
                  <strong>穩定鎖蓋：</strong>
                  穩定鎖蓋系統，確保鎖蓋密封性，不漏液。
                </li>
                <li>
                  <strong>自動化操作：</strong>
                  全自動設計，簡單操作介面，降低操作難度，縮短操作人員教育訓練學習時間。
                </li>
                <li>
                  <strong>多功能相容：</strong>
                  支援市面上通用鎖嘴口栓袋規格，靈活適應不同包裝需求。
                </li>
                <li>
                  <strong>簡單方便保養：</strong>
                  採用SUS304材質，配有CIP清洗裝置，機器清洗容易、穩定運行減少停機時間。
                </li>
                <li>
                  <strong>節省空間：</strong>
                  可客製化設計，減少佔用空間，適合各種生產環境。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <strong>High-Efficiency Filling:</strong> 
                  Precise dosing ensures the accuracy of packaging contents while significantly increasing production output.
                </li>
                <li>
                  <strong>Secure Capping:</strong> 
                  A high-stability capping system ensures perfect sealing integrity to prevent any liquid leakage.
                </li>
                <li>
                  <strong>Automated Operation:</strong> 
                  Fully automated design with an intuitive interface reduces operational complexity and shortens training time for staff.
                </li>
                <li>
                  <strong>Multi-Functional Compatibility:</strong> 
                  Supports standard spout pouch specifications available on the market, providing flexibility for diverse packaging needs.
                </li>
                <li>
                  <strong>Easy Maintenance & Hygiene:</strong> 
                  Constructed from SUS304 stainless steel and equipped with a CIP cleaning system, ensuring easy sanitation and stable operation with reduced downtime.
                </li>
                <li>
                  <strong>Space-Saving Design:</strong> 
                  Customizable configurations to minimize footprint, making it suitable for various production environments.
                </li>
              </ul>
            ',
          ],

          // 'items' => [
          //   [
          //     'img' => [''],
          //     'text'  => [
          //       'zh'=>'',
          //       'en'=>''
          //     ]
          //   ],
          // ]
        ],

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'<ul><li><strong>食品：</strong>果汁、豆奶、果凍、健康飲品、寵物食品、果醬、蜂蜜、醬油、油醋、糖漿、優格、機能性飲料、礦泉水、調味醬、油品、美奶滋、豆餡、味噌、醋、吸果凍、佐料汁、酒。</li><li><strong>日用美容用品：</strong>洗髮用品、清潔用品、化妝水、乳液、洗面乳、美容產品等。</li><li><strong>生技醫藥：</strong>膠原蛋白飲、液體補充液、營養液補充包等。</li><li><strong>其他液體包裝需求等</strong></li></ul>',
            'en'=>'<ul><li><strong>Food & Beverages:</strong> Fruit juice, soy milk, jelly, health drinks, pet food, jam, honey, soy sauce, vinaigrette, syrup, yogurt, functional drinks, mineral water, seasoning sauces, oils, mayonnaise, bean paste, miso, vinegar, squeezable jelly, dressings, alcohol.</li><li><strong>Daily & Beauty Products:</strong> Shampoo, cleaning supplies, toner, lotion, facial cleanser, beauty products, etc.</li><li><strong>Biotechnology & Pharmaceuticals:</strong> Collagen drinks, liquid supplements, nutritional supplement pouches, etc.</li><li><strong>Other liquid packaging requirements, etc.</strong></li></ul>',
          ],

          'items' => [
            [
              'img' => ['agc-app-1.webp'],
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
                    <th>AGC-1</th>
                    <th>AGC-2</th>
                    <th>AGC-4</th>
                    <th>AGC-H</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容量</td>
                    <td colspan="3">100-500 c.c.</td>
                    <td>1000-2000 c.c.</td>
                  </tr>
                  <tr>
                    <td class="label">充填能力</td>
                    <td>10-15 Bag/Min</td>
                    <td>30-40 Bag/Min</td>
                    <td>70-80 Bag/Min</td>
                    <td>10-15 Bag/Min</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="4">AC 220V ～ AC380V 3相</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>(長 × 寬 × 高)(mm)</td>
                    <td>1510x1220x1980</td>
                    <td>2500x2000x2200</td>
                    <td>3800x2600x2500</td>
                    <td>2500x2000x2200</td>
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
                    <th>AGC-1</th>
                    <th>AGC-2</th>
                    <th>AGC-4</th>
                    <th>AGC-H</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Quantity</td>
                    <td colspan="3">100-500 c.c.</td>
                    <td>1000-2000 c.c.</td>
                  </tr>
                  <tr>
                    <td class="label">Capacity</td>
                    <td>10-15 Bag/Min</td>
                    <td>30-40 Bag/Min</td>
                    <td>70-80 Bag/Min</td>
                    <td>10-15 Bag/Min</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td colspan="4">AC 220V ～ AC380V 3phase</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>1510x1220x1980</td>
                    <td>2500x2000x2200</td>
                    <td>3800x2600x2500</td>
                    <td>2500x2000x2200</td>
                  </tr>
                </tbody>
              </table>
            '
          ],

          'table_note' => [
            // 'zh'=>'本機器所需之空壓機須由客戶自行準備。',
            // 'en'=>'The air compressor required for this machine must be provided by the customer.'
          ],

          'table_others' => [
            'zh'=>'
              <ul>
                <li>
                  <strong>高效生產</strong>
                  <ol>
                    <li><strong>快速充填與鎖蓋：</strong>本機能夠快速完成充填與鎖蓋動作，提高生產線工作效率。</li>
                    <li><strong>自動化操作：</strong>全自動化流程，減少人工，提高生產穩定度，降低勞動成本。</li>
                  </ol>
                </li>
                <li>
                  <strong>精準計量</strong>
                  <ol>
                    <li><strong>準確充填： </strong>精確定量液體系統，確保包裝內部物保持一致，避免過多或過少充填，提升產品品質與產品品牌客戶滿意度。</li>
                  </ol>
                </li>
                <li>
                  <strong>穩定下蓋鎖蓋</strong>
                  <ol>
                    <li><strong>強力鎖蓋：</strong>鎖蓋系統確保口栓袋的封口牢固，防止漏液或損壞，避免產品耗損與包裝缺陷。</li>
                    <li><strong>良好的密封效果：</strong>確保包裝物不外漏或外部污染，保證內容物安全性與長期儲存。</li>
                  </ol>
                </li>
                <li>
                  <strong>多樣化應用</strong>
                  <ol>
                    <li><strong>適應各種包裝規格：</strong>可靈活調整，適用於市面上尺寸和形狀的口栓袋，可充填液體、膏狀產品包裝需求。</li>
                    <li><strong>廣泛應用：</strong>可用於食品、化妝品、生技醫藥、化學品等多個行業，滿足不同客戶產業包裝需求。</li>
                  </ol>
                </li>
                <li>
                  <strong>簡單操作</strong>
                  <ol>
                    <li><strong>人性化設計：</strong>易於操作人機畫面和簡單設定步驟，沒有經驗的操作員也能快速上手，減少操作錯誤。</li>
                    <li><strong>低維護成本：</strong>可本機結構堅固耐用，維護起來方便，降低維護成本。</li>
                  </ol>
                </li>
                <li>
                  <strong>節省空間</strong>
                  <ol>
                    <li><strong>客製化設計：</strong>可客製化設計，適合各種不同規模的生產環境，不浪費空間，提高生產效率。</li>
                  </ol>
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <strong>High-Efficiency Production</strong>
                  <ol>
                    <li><strong>Rapid Filling & Capping:</strong> This machine quickly completes filling and capping cycles, significantly boosting production line throughput.</li>
                    <li><strong>Automated Operation:</strong> The fully automated workflow reduces manual labor, enhances production stability, and lowers labor costs.</li>
                  </ol>
                </li>
                <li>
                  <strong>Precision Dosing</strong>
                  <ol>
                    <li><strong>Accurate Filling:</strong> The precise liquid dosing system ensures consistent packaging contents, preventing overfilling or underfilling to enhance product quality and customer satisfaction.</li>
                  </ol>
                </li>
                <li>
                  <strong>Stable Cap Feeding & Capping</strong>
                  <ol>
                    <li><strong>Secure Sealing:</strong> The capping system ensures spout pouches are firmly sealed to prevent leakage or damage, avoiding product waste and packaging defects.</li>
                    <li><strong>Superior Airtightness:</strong> Ensures no leakage or external contamination, guaranteeing the safety of the contents and suitability for long-term storage.</li>
                  </ol>
                </li>
                <li>
                  <strong>Versatile Applications</strong>
                  <ol>
                    <li><strong>Adaptable to Various Spec.:</strong> Flexible adjustments allow compatibility with various spout pouch sizes and shapes available on the market, meeting the needs for liquid and paste products.</li>
                    <li><strong>Broad Industry Use:</strong> Suitable for food, cosmetics, biotechnology, chemicals, and more, satisfying the diverse packaging requirements of different industrial sectors.</li>
                  </ol>
                </li>
                <li>
                  <strong>Simple Operation</strong>
                  <ol>
                    <li><strong>User-Friendly Design:</strong> Features an intuitive HMI (Human-Machine Interface) and simple setup steps, allowing even inexperienced operators to get started quickly and reducing operational errors.</li>
                    <li><strong>Low Maintenance Costs:</strong> The machine features a robust and durable structure that is easy to service, effectively lowering overall maintenance costs.</li>
                  </ol>
                </li>
                <li>
                  <strong>Space-Saving</strong>
                  <ol>
                    <li><strong>Customizable Design:</strong> Tailored configurations are available to suit production environments of various scales, eliminating wasted space and enhancing overall production efficiency.</li>
                  </ol>
                </li>
              </ul>
            ',
          ],

          // 'machine-line' => [
          //   [
          //     'image' => 'img-agm-4a.webp',
          //     'text'  => ['zh'=>'','en'=>''],
          //   ],
          //   [
          //     'image' => 'img-agm-4a.webp',
          //     'text'  => ['zh'=>'','en'=>''],
          //   ]
          // ],

          // 'machine-combin' => [
          //   [
          //     'combin_name' => 'Automatic Bag / Filling Packing Machine',
          //     'combin_type'  => 'AGM-A1 + PF',
          //     'image' => [
          //       'img-product-demo.webp',
          //       'img-pf-filling-machine.webp'
          //     ]
          //   ],
          //   [
          //     'combin_name' => 'Automatic Bag / Weighing Packing Machine',
          //     'combin_type'  => 'AGM-A1 + CWM',
          //     'image' => [
          //       'img-product-demo.webp',
          //       'img-cwm-computer-weigher.webp'
          //     ]
          //   ],
          //   [
          //     'combin_name' => 'Automatic Bag / Filling Packing Machine (with Conveyor)',
          //     'combin_type'  => 'AGM-A1 + PF + CY',
          //     'image' => [
          //       'img-product-demo.webp',
          //       'img-pf-filling-machine.webp',
          //       'img-cy.webp'
          //     ]
          //   ],
          //   [
          //     'combin_name' => 'Automatic Bag / Weighing Packing Machine (with Conveyor)',
          //     'combin_type'  => 'AGM-A1 + CWM + CY',
          //     'image' => [
          //       'img-product-demo.webp',
          //       'img-cwm-computer-weigher.webp',
          //       'img-cy.webp'
          //     ]
          //   ]
          // ]
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
    ], // products-series.php END

  ], // 口栓袋/吸嘴袋鎖蓋充填機 END
]
?>