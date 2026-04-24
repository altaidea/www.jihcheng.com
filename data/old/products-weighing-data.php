<?php
// 內容管理
// 計量機 → CWM電腦式計量機 EWM粉劑計量機 MW多頭秤計量機
return [
// Products.php
  'weighing-dosing-mc' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder'],
    'new_patent' => ['enabled' => false,], 
    // series-name
    'title' => [
      'zh' => '計量機',
      'en' => 'Weighing & Dosing Machine'
    ],
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'cwm/cwm.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],
    // products-series.php
    'series' => [
      'slug' => 'weighing-dosing-mc',
      'intro' => [
        'zh' => '
          自動計量包裝機是提升小型半自動生產效率、降低減少人力成本，確保產品計量精度設計計重設備。本機廣泛應用於食品、生機、醫藥、化工、五金零件產品計量與包裝，能自動完成稱重、計量到袋子、容器裡並封口整個流程，大大提升生產效率和包裝品質，提高計量精度具備優勢，是現代化生產線不可或缺的設備。無論是提升品質還是增加企業競爭力，都是企業發展重要助力。
        ',
        'en' => ''
      ],

      // products-series.php + products-detail.php
      'cwm' => [
        'slug' => 'cwm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'CWM 自動計量包裝機',
          'en' => 'CWM Automatic Weighing & Dosing Machine',
        ],
        'type' => 'CWM-50 / CWM-100 / CWM-500 / CWM-M / CWM-L',
        'image' => [
          'cwm.webp',
          'cwm-1.webp',
        ],
        'image_class' => [
          'v-style',
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              自動計量包裝機是提升小型半自動生產效率、降低減少人力成本，確保產品計量精度設計計重設備。本機廣泛應用於食品、生機、醫藥、化工、五金零件產品計量與包裝，能自動完成稱重、計量到袋子、容器裡並封口整個流程，大大提升生產效率和包裝品質，提高計量精度具備優勢，是現代化生產線不可或缺的設備。無論是提升品質還是增加企業競爭力，都是企業發展重要助力。
            ',
            'en'=>'
              Our automatic weighing machines are precision-engineered to enhance semi-automatic production efficiency, reduce labor costs, and ensure exceptional dosing accuracy. Widely applied in the food, organic products, pharmaceutical, chemical, and hardware industries, this equipment automates the weighing and dispensing process into bags or containers. By significantly improving packaging quality and precision, it serves as an indispensable asset for modern production lines, driving enterprise growth and market competitiveness.
            '
          ],

          'option' => [
            'zh'=>'半自動封口機、連續式封口機、瞬熱式封口機。',
            'en'=>'Semi-Auto Sealing Machine, Continuous Band Sealer, Impulse Sealer.'
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
            // 'zh'=>'
            //   <ul>
            //     <li>
            //       <h4>高精度計量：</h4>使用先進電子秤技術，確保每個包裝重量都能達到標準。
            //     </li>
            //     <li>
            //       <h4>高效自動化：</h4>全自動運行，無需多人秤料，可節省大量勞力。
            //     </li>
            //     <li>
            //       <h4>穩定性強：</h4>精心設計和測試，設備運行穩定，故障率低，長時間穩定工作。
            //     </li>
            //     <li>
            //       <h4>簡單操作：</h4>人性化操作界面，設置簡單，無需專業技術即可操作。
            //     </li>
            //     <li>
            //       <h4>適用範圍廣：</h4>適用於顆粒、粉末等產品計量與包裝。
            //     </li>
            //     <li>
            //       <h4>精確度高：</h4>計量機提供高度計量精度，對於要求準確稱重產品，確保包裝準確性，減少誤差，符合產品標準要求。
            //     </li>
            //     <li>
            //       <h4>效率提升：</h4>自動化計量機能短時間完成大量包裝，與人工包裝相比，速度和效率顯著提升，降低生產成本。
            //     </li>
            //     <li>
            //       <h4>減少人工成本：</h4>自動化操作大大減少勞力依賴，降低工人數量需求，從長遠來看，能有效減少人力成本。
            //     </li>
            //     <li>
            //       <h4>穩定性與可靠性：</h4>計量機設計精良，耐用性強，長時間運行情況下，能保持穩定性能，減少機械故障。
            //     </li>
            //     <li>
            //       <h4>多樣化應用：</h4>計量機根據不同產品進行調整，適用範圍廣泛，無論小顆粒、粉末都使用。
            //     </li>
            //     <li>
            //       <h4>提高產品質量：</h4>精確計量可以確保每個內容物一致性，提升產品品質控制，提高品牌形象。
            //     </li>
            //     <li>
            //       <h4>簡便維護：</h4>計量機維護簡單，清潔簡易與維護可確保設備長時間運行，減少維修成本和停機時間。
            //     </li>
            //   </ul>
            // ',
            // 'en'=>'
            //   <ul>
            //     <li><h4>High Precision Dosing:</h4> Utilizes advanced electronic weighing technology to ensure every package meets strict weight standards.</li>
            //     <li><h4>High-Efficiency Automation:</h4> Fully automated operation eliminates manual weighing, significantly reducing labor dependency.</li>
            //     <li><h4>Robust Stability:</h4> Meticulously engineered and tested for low failure rates and stable performance during long-term operation.</li>
            //     <li><h4>User-Friendly Operation:</h4> Intuitive interface allows for easy setup and operation without specialized technical training.</li>
            //     <li><h4>Wide Versatility:</h4> Ideal for the weighing and packaging of various granules and powders.</li>
            //     <li><h4>Precision & Accuracy:</h4> Delivers superior weighing precision, minimizing errors and ensuring compliance with product quality standards.</li>
            //     <li><h4>Productivity Boost:</h4> Capable of high-volume packaging in short timeframes, significantly outpacing manual processes and lowering production costs.</li>
            //     <li><h4>Long-term Cost Savings:</h4> Effectively reduces operational expenses by decreasing the need for a large manual workforce.</li>
            //     <li><h4>Reliable Performance:</h4> Superior build quality ensures durability and consistent output, reducing downtime.</li>
            //     <li><h4>Broad Application Range:</h4> Easily adjustable for different product types, from fine powders to small granules.</li>
            //     <li><h4>Enhanced Product Quality:</h4> Ensures contents consistency, improving quality control and brand image.</li>
            //     <li><h4>Easy Maintenance:</h4> Simple structure facilitates quick cleaning and routine maintenance, maximizing equipment uptime.</li>
            //   </ul>
            // '
          ],

          'items' => [
            // ['img' => [''], 'text' => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li>食品：生機飲食、五穀雜量、堅果、農產品、糖、爆米花、紅棗、中藥材 調味料、果乾、乾燥蔬菜、薯片、膨化食品、茶葉、咖啡豆、糖果、軟糖等。</li><li>醫藥：藥品粉、藥粒。</li><li>日用化工：芳香劑、除濕劑、洗衣粉、香香豆等。</li><li>生鮮食物: 冷凍水餃、冷凍小龍包。</li><li>五金材料: 五金零件、鈕扣、塑膠粒、連接器、螺絲等。</li></ul>
            ',
            'en'=>'
              <ul><li>Food: Organic diet foods, grains, nuts, agricultural products, sugar, popcorn, red dates, Chinese herbal medicine, seasonings, dried fruits, dehydrated vegetables, potato chips, puffed foods, tea, coffee beans, candies, gummies, etc.</li><li>Pharmaceuticals: Medicinal powders and pills.</li><li>Daily Chemicals: Air fresheners, dehumidifiers, laundry powders, scent beads, etc.</li><li>Fresh & Frozen Food: Frozen dumplings, frozen buns (Xiaolongbao).</li><li>Hardware: Components, buttons, plastic pellets, connectors, screws, etc.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => [
                'cwm-app-1.webp', 'agp-cwn-app-1.webp', 'agp-cwn-app-2.webp', 'agp-cwn-app-3.webp'
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
                    <th>機型</th>
                    <th>CWM-50</th>
                    <th>CWM-100</th>
                    <th>CWM-500</th>
                    <th>CWM-M</th>
                    <th>CWM-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度</td>
                    <td colspan="5">5~15包/分</td>
                  </tr>
                  <tr>
                    <td class="label">精度</td>
                    <td colspan="5">±1/100 ~ ±1/200</td>
                  </tr>
                  <tr>
                    <td class="label">計量範圍</td>
                    <td>30-100克</td>
                    <td>100-500克</td>
                    <td>500克-2公斤</td>
                    <td>2-10公斤</td>
                    <td>10-50公斤</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="5">AC 110/220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸</td>
                    <td colspan="5">L1000xW550xH1875mm</td>
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
                    <th>CWM-50</th>
                    <th>CWM-100</th>
                    <th>CWM-500</th>
                    <th>CWM-M</th>
                    <th>CWM-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed</td>
                    <td colspan="5">5 ~ 15 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Accuracy</td>
                    <td colspan="5">±1/100 ~ ±1/200</td>
                  </tr>
                  <tr>
                    <td class="label">Weighing Range</td>
                    <td>30-100g</td>
                    <td>100-500g</td>
                    <td>500g-2kg</td>
                    <td>2-10kg</td>
                    <td>10-50kg</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="5">AC 110/220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions</td>
                    <td colspan="5">L1000 x W550 x H1875 mm</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          'table_note' => [
            'zh'=>'本機器所需之空壓機須由客戶自行準備。',
            'en'=>'The air compressor required for this machine must be provided by the customer.'
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

      'ewm' => [
        'slug' => 'ewm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'EWM 自動粉末計量充填機',
          'en' => 'EWM Automatic Powder Dosing & Filling Machine',
        ],
        'type' => 'EWM-S50 / EWM-S100 / EWM-S500 / EWM-M / EWM-L',
        'image' => [
          'ewm.webp'
        ],
        'image_class' => [
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              粉末計量充填機專為計量充填粉末狀物質的設備，廣泛應用於食品、化工、製藥等行業。能精確將粉末原料按設定重量、體積充填到袋子或容器中。讓生產更有高效、更準確，降低人工錯誤，確保產品品質一致性、穩定性，提高生產線運行效率，無論是微細粉末還是顆粒狀物料，本機能輕鬆應用，為生產線提供無與倫比性能，粉末計量充填機是生產線上最佳選擇，讓產品在競爭激烈市場中脫穎而出。
            ',
            'en'=>'
              Engineered specifically for powdered substances, our dosing and filling machines are indispensable for the food, chemical, and pharmaceutical sectors. This equipment precisely dispenses powdered raw materials into bags or containers based on set weight or volume. By enhancing efficiency and minimizing human error, it guarantees product consistency and stability across the production line. Whether handling ultra-fine powders or granular materials, the EWM series provides unparalleled performance, helping your products stand out in a highly competitive market.
            '
          ],

          'option' => [
            'zh'=>'半自動封口機、連續式封口機、瞬熱式封口機',
            'en'=>'Semi-Auto Sealing Machine, Continuous Band Sealer, Impulse Sealer'
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
                <li><h4>高精度計量：</h4><span>準確計量粉末重量或體積，保證每一份充填量一致性。</span></li>
                <li><h4>自動化控制：</h4><span>根據粉末特性（如粒度、流動性等）選擇搭配生產需求合適設備。</span></li>
                <li><h4>調節靈活：</h4><span>適應不同粉末物料調節充填量。</span></li>
                <li><h4>多樣化適用：</h4><span>適用於各類粉末物料，如藥品粉末、奶粉、咖啡粉、化學粉末等，能根據不同粉末特性調整設備設置，實現最佳充填效果。</span></li>
                <li><h4>智能化控制：</h4><span>配備智能控制系統，操作簡便，自動調整充填量、充填速度等參數，可與生產線其他設備無縫對接，實現全自動化生產。</span></li>
                <li><h4>低維護成本：</h4><span>機器結構簡單、耐用，易於清潔與保養，長時間運行穩定並降低維護成本。</span></li>
                <li><h4>節能高效：</h4><span>採用先進節能技術，機器運行過程減少能耗，降低企業運營成本。</span></li>
                <li><h4>適用性強：</h4><span>無論是細粉、顆粒物料，能輕鬆處理。可根據不同物料流動性、顆粒等特性調整充填模式，適用多樣化生產需求。</span></li>
                <li><h4>提高產品質量：</h4><span>精準計量與充填確保產品達到相同標準，提升品牌形象，增強市場競爭力。</span></li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li><h4>High Precision Dosing:</h4><span>Accurately measures powder weight or volume, ensuring absolute consistency for every filling cycle.</span></li>
                <li><h4>Automated Control:</h4><span>Optimized configurations tailored to specific powder characteristics such as particle size and fluidity.</span></li>
                <li><h4>Flexible Adjustment:</h4><span>Easily adaptable filling volumes to suit a wide variety of powdered materials.</span></li>
                <li><h4>Diverse Applications:</h4><span>Ideal for medicinal powders, milk powder, coffee, and chemical powders, with adjustable settings for optimal results.</span></li>
                <li><h4>Intelligent Control System:</h4><span>Equipped with smart interfaces for easy parameter adjustments; integrates seamlessly with other production line equipment.</span></li>
                <li><h4>Low Maintenance:</h4><span>Durable, simple structure designed for rapid cleaning and long-term stable operation with minimal costs.</span></li>
                <li><h4>Energy Efficiency:</h4><span>Incorporates advanced energy-saving technology to reduce operational expenses and environmental impact.</span></li>
                <li><h4>High Adaptability:</h4><span>Effortlessly handles everything from ultra-fine powders to larger granules by adjusting the filling mode based on material flow.</span></li>
                <li><h4>Quality Assurance:</h4><span>Precise dosing ensures all products meet the same quality standards, enhancing brand reputation and market competitiveness.</span></li>
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
              <ul><li>食品: 生機飲食、五穀雜糧、農產品、糖粉、中藥材、調味粉、茶葉粉、咖啡粉、奶粉等。</li><li>醫藥: 藥品粉。</li><li>日用化工：洗衣粉、香香粉等。</li></ul>
            ',
            'en'=>'
              <ul><li>Food: Organic diet foods, grains, agricultural products, powdered sugar, herbal medicine, seasonings, tea powder, coffee powder, milk powder, etc.</li><li>Pharmaceuticals: Medicinal powders and pharmaceutical ingredients.</li><li>Daily Chemicals: Laundry powders, scented powders, and chemical additives.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => [
                'ewm-app-1.webp'
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
                    <th>EWM-S50</th>
                    <th>EWM-S100</th>
                    <th>EWM-S500</th>
                    <th>EWM-M</th>
                    <th>EWM-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度</td>
                    <td colspan="5">8～20包/分</td>
                  </tr>
                  <tr>
                    <td class="label">精度</td>
                    <td colspan="5">±1/100 ～ ±1/200</td>
                  </tr>
                  <tr>
                    <td class="label">計量範圍</td>
                    <td>30-100克</td>
                    <td>100-500克</td>
                    <td>500克-2公斤</td>
                    <td>2-10公斤</td>
                    <td>10-50公斤</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="5">AC 220V 2HP（可依不同國家客製）</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸</td>
                    <td colspan="5">L1000 x W550 x H1875 mm</td>
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
                    <th>EWM-S50</th>
                    <th>EWM-S100</th>
                    <th>EWM-S500</th>
                    <th>EWM-M</th>
                    <th>EWM-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed</td>
                    <td colspan="5">8 ~ 20 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Accuracy</td>
                    <td colspan="5">±1/100 ~ ±1/200</td>
                  </tr>
                  <tr>
                    <td class="label">Weighing Range</td>
                    <td>30-100g</td>
                    <td>100-500g</td>
                    <td>500g-2kg</td>
                    <td>2-10kg</td>
                    <td>10-50kg</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="5">AC 220V 2HP (Customizable per country)</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions</td>
                    <td colspan="5">L1000 x W550 x H1875 mm</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          'table_note' => [
            'zh'=>'本機器所需之空壓機須由客戶自行準備。',
            'en'=>'The air compressor required for this machine must be provided by the customer.'
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

      'mw' => [
        'slug' => 'mw',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'MW 多磅秤計量機',
          'en' => 'MW Multi-Weighing machine',
        ],
        'type' => 'MW-S10 / MW-S12 / MW-S14',
        'image' => [
          'mw.webp',
          // 'mw-1.webp'
        ],
        'image_class' => [
          'v-style',
          // 'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'',
            'en'=>''
          ],

          'option' => [
            'zh'=>'',
            'en'=>''
          ],

          'items' => [
            // ['img' => [''], 'text'  => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'',
            'en'=>''
          ],

          'items' => [
            // ['img' => [''], 'text' => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              適用於計量顆粒狀、切片狀、捲筒狀或不規則形狀的產品，如糖果、果醬、油炸品、咖啡粒、花生、泡芙、餅乾、巧克力、堅果、寵物食品、冷凍食品等。
            ',
            'en'=>'
              Suitable for weighing of granule, slice, roll or irregular shape materials such as candy, seed, jelly, fries, coffee granule, peanut, puffy food, biscuit, chocolate, nut, pet food, frozen foods, etc.
            '
          ],

          'items' => [
            // [
            //   'img' => [
            //     'ewm-app-1.webp'
            //   ],
            //   'text' => ['zh'=>'', 'en'=>'']
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
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>MW-S10</th>
                    <th>MW-S12</th>
                    <th>MW-S14</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝能力</td>
                    <td>70 包/分</td>
                    <td>100 包/分</td>
                    <td>120 包/分</td>
                  </tr>
                  <tr>
                    <td class="label">計重範圍</td>
                    <td colspan="3">10~2000公克</td>
                  </tr>
                  <tr>
                    <td class="label">誤差值</td>
                    <td colspan="3">±0.1~2公克</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V 50HZ/60HZ 1KW</td>
                  </tr>
                  <tr>
                    <td class="label">料斗容積</td>
                    <td colspan="3">1.6~2.5公升</td>
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
                    <th>MW-S10</th>
                    <th>MW-S12</th>
                    <th>MW-S14</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Capacity</td>
                    <td>70 bags/min</td>
                    <td>100 bags/min</td>
                    <td>120 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Weighing Range</td>
                    <td colspan="3">10~2000g</td>
                  </tr>
                  <tr>
                    <td class="label">Accuracy (Error Range)</td>
                    <td colspan="3">±0.1~2g</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="3">AC 220V 50HZ/60HZ 1KW</td>
                  </tr>
                  <tr>
                    <td class="label">Hopper Volume</td>
                    <td colspan="3">1.6~2.5L</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],

      'swm' => [
        'slug' => 'swm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'SWM 天秤式自動計量機',
          'en' => 'SWM Automatic Scale Type Weighing Machine',
        ],
        'type' => 'SWM-M / SWM-H',
        'image' => [
          'swm.webp'
        ],
        'image_class' => [
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'',
            'en'=>''
          ],

          'option' => [
            'zh'=>'',
            'en'=>''
          ],

          'items' => [
            // ['img' => [''], 'text'  => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>本機以計量機及封口機合併包裝之高效率包裝機。</li>
                <li>本機計量準確，操作簡單，故障率少，保護完善。</li>
                <li>天秤式計量精度高，可減少人為差錯及浪費。</li>
                <li>可配合雙機使用及連續式封口機使用。</li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>A high-efficiency packaging system that integrates dosing and sealing machines into a single streamlined operation.</li>
                <li>Features high dosing accuracy, user-friendly operation, low failure rates, and comprehensive safety protection.</li>
                <li>Equipped with high-precision scale-type weighing to minimize human error and material waste.</li>
                <li>Compatible with dual-machine configurations and continuous sealing machine systems.</li>
              </ul>
            '
          ],

          'items' => [
            // ['img' => [''], 'text' => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              米、糖、鹽、茶、咖啡、粉末、瓜子、豆、糖果、清潔劑等。
            ',
            'en'=>''
          ],

          'items' => [
            ['img' => ['swm-app-1.webp'], 'text' => ['zh'=>'', 'en'=>''] ],
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
                    <th>SWM-M</th>
                    <th>SWM-H</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (包/分)</td>
                    <td>5~20</td>
                    <td>3~10</td>
                  </tr>
                  <tr>
                    <td class="label">精度</td>
                    <td>±3~5g</td>
                    <td>±5~25g</td>
                  </tr>
                  <tr>
                    <td class="label">計量範圍</td>
                    <td>1~15公斤</td>
                    <td>20~80公斤</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 110/220V</td>
                    <td>AC 110/220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>800 x 650 x 1850</td>
                    <td>900 x 800 x 2000</td>
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
                    <th>SWM-M</th>
                    <th>SWM-H</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (bags/min)</td>
                    <td>5~20</td>
                    <td>3~10</td>
                  </tr>
                  <tr>
                    <td class="label">Accuracy</td>
                    <td>±3~5g</td>
                    <td>±5~25g</td>
                  </tr>
                  <tr>
                    <td class="label">Weighing Range</td>
                    <td>1~15kg</td>
                    <td>20~80kg</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td>AC 110/220V</td>
                    <td>AC 110/220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>800 x 650 x 1850</td>
                    <td>900 x 800 x 2000</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ]
    ]
  ]
]
?>