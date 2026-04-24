<?php
// 內容管理 // 立式計量充填包裝
return [
// Products.php
  'v-w-filling-and-packaging' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder', 'liquid'],
    // 'slug' => 'vertical-weighing-filling-and-packaging-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '立式計量充填包裝機',
      'en' => 'Vertical Weighing Filling & Packaging Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'erl/erl.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'v-w-filling-and-packaging',
      // series-intro
      'intro' => [
        'zh' => '
          自動計量充填封口包裝機專為各類產品自動化包裝設計，廣泛應用於食品、飲料、醫藥、化工、五金零件等行業。無論是液體、粉末、顆粒還是固體物料，本包裝機能提供卓越性能，滿足不同生產需求。簡單方便操作設計和高效生產流程，提高您的生產效率，降低人工成本，讓產品品質提升。
        ',
        'en' => '
          Our automatic weighing, filling, and sealing packaging machines are specifically engineered for comprehensive automation across a variety of product sectors. Widely utilized in industries such as food and beverage, pharmaceuticals, chemicals, and hardware, these machines deliver exceptional performance for liquids, powders, granules, and solid materials alike. Designed for intuitive operation and high-efficiency workflows, they significantly enhance your production throughput, minimize labor costs, and ensure superior, consistent product quality.
        '
      ],

      // products-series.php + products-detail.php
      'erl' => [
        'slug' => 'erl',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        
        'title' => [
          'zh' => 'ERL 立式計量充填封口包裝機',
          'en' => 'ERL Vertical Weighing Filling & Packaging Machine',
        ],

        'type' => 'ERL-S / ERL-M / ERL-L', 

        'image' => [
          'erl.webp',
        ],
        'image_class' => [
          'v-style'
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              計量充填封口機專為各種行業包裝需求設計定量充填包裝機，特別適合液體、粉末、顆粒、固體物料、五金零件等多樣化物料自動化包裝。可結合定量、數粒、投料等充填方式與封口技術，確保每袋產品重量和包裝大小精確無誤，滿足不同產品包裝要求。無論是食品、化工、醫藥、日用產品、五金材料，本包裝機能提升生產效率、降低浪費，確保產品品質。
            ',
            'en'=>'
              Designed for diverse industrial needs, our vertical filling and sealing machines provide precise quantitative packaging solutions. They are ideal for liquids, powders, granules, solids, and hardware components. By integrating various dosing methods—such as volumetric filling, piece counting, and material feeding—with advanced sealing technology, we ensure consistent weight and dimensions for every package. Whether for food, chemicals, pharmaceuticals, or hardware, this machine boosts production efficiency, reduces waste, and guarantees superior product quality.
            '
          ],

          'option' => [
            'zh'=>'日期機、熱轉印機、充氮裝置(氮氣製造機需客人自備)',
            'en'=>'Date Coder, Thermal Transfer Overprinter (TTO), Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
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
                  <h4>精準充填：</h4>準確充填系統，確保每袋產品重量一致，減少浪費。
                </li>
                <li>
                  <h4>多功能設計：</h4>適用多樣化包裝材料，可搭配液體、粉末、顆粒等多種物料的包裝。
                </li>
                <li>
                  <h4>節省空間：</h4>立式設計節省生產空間，適合各種生產環境。
                </li>
                <li>
                  <h4>自動化高效：</h4>全自動操作，自動完成制袋、充填、封口、切袋等連貫性作動流程，減少人工。
                </li>
                <li>
                  <h4>高密封密性：</h4>成熟先進熱封技術，確保包裝密封，防止洩漏，延長產品保存期限。
                </li>
                <li>
                  <h4>操作簡單：</h4>簡便操作面板和設置功能，輕鬆掌握，減少培訓時間。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>Precise Filling:</h4> Accurate dosing system ensures consistent bag weight and minimizes material waste.
                </li>
                <li>
                  <h4>Versatile Design:</h4> Compatible with a wide range of packaging materials and suitable for liquids, powders, and granules.
                </li>
                <li>
                  <h4>Space-Saving:</h4> The vertical configuration optimizes floor space, making it ideal for various production environments.
                </li>
                <li>
                  <h4>High Automation:</h4> Fully automatic operation—from bag forming and filling to sealing and cutting—streamlining the workflow and reducing labor costs.
                </li>
                <li>
                  <h4>Superior Sealing:</h4> Advanced thermal sealing technology ensures airtight packaging, prevents leakage, and extends product shelf life.
                </li>
                <li>
                  <h4>User-Friendly:</h4> Intuitive control panel and settings allow for easy operation and reduced training time.
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
              <ul><li>食品行業：堅果、糖果、粉末、飲料、調味粉、醬料包等。</li><li>醫藥行業：藥粉、顆粒、藥品包裝等。</li><li>化工行業：化學原料、肥料等。</li><li>其日用產品：洗衣粉、洗潔劑等。</li></ul>
            ',
            'en'=>'
              <ul><li>Food Industry: Nuts, candies, powders, beverages, seasoning, sauce packets, etc.</li><li>Pharmaceuticals: Medicinal powders, granules, pill packaging, etc.</li><li>Chemical Industry: Chemical raw materials, fertilizers, etc.</li><li>Daily Products: Laundry powder, detergents, household cleaners, etc.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => [
                'erl-app1.webp', 
                'erl-app2.webp'
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
                    <th>ERL-S</th>
                    <th>ERL-M</th>
                    <th>ERL-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容量</td>
                    <td>5-50g</td>
                    <td>50-100g</td>
                    <td>100-200g</td>
                  </tr>
                  <tr>
                    <td class="label">充填速度<br/>依產品流動性而定</td>
                    <td>25-45 bag/min</td>
                    <td>15-25 bag/min</td>
                    <td>10-20 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 × 寬 × 高 (m/m)</td>
                    <td>700x1000x1700</td>
                    <td>900x1000x1900</td>
                    <td>1000x1200x2000</td>
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
                    <th>ERL-S</th>
                    <th>ERL-M</th>
                    <th>ERL-L</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity</td>
                    <td>5-50g</td>
                    <td>50-100g</td>
                    <td>100-200g</td>
                  </tr>
                  <tr>
                    <td class="label">Filling Speed<br/>(Varies by product fluidity)</td>
                    <td>25-45 bags/min</td>
                    <td>15-25 bags/min</td>
                    <td>10-20 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>700 x 1000 x 1700</td>
                    <td>900 x 1000 x 1900</td>
                    <td>1000 x 1200 x 2000</td>
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

        // 產品影片
        'video' => '',
      ],

      'arf' => [
        'slug' => 'arf',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'ARF 液體醬體計量封口包裝機',
          'en' => 'ARF Liquid & Paste Filling and Sealing Machine',
        ],

        'type' => 'ARF-1 / ARF-2', 

        'image' => [
          'arf.webp',
        ],
        'image_class' => [
          'v-style'
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              計量充填封口機專為各種行業包裝需求設計定量充填包裝機，特別適合液體、醬料、美容用品、清潔用品等多樣化物料自動化包裝。可結合液體定量充填方式與封口技術，確保每袋產品重量和包裝大小精確無誤，滿足不同產品包裝要求。無論是食品、醫藥、美容、化工、日用產品、本包裝機能提升生產效率、降低浪費，確保產品品質。
            ',
            'en'=>'
              Our filling and sealing machines are specifically designed to meet the quantitative packaging requirements of various industries, particularly for liquids, sauces, beauty products, and cleaning supplies. By integrating liquid dosing systems with advanced sealing technology, we ensure precise weight and dimensions for every pouch. Whether for food, pharmaceuticals, cosmetics, or chemicals, this machine enhances production efficiency, minimizes waste, and guarantees premium product quality.
            '
          ],

          'option' => [
            'zh'=>'日期機、熱轉印機、充氮裝置(氮氣製造機需客人自備)',
            'en'=>'Date Coder, Thermal Transfer Overprinter (TTO), Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
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

        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>精準充填：</h4>準確充填系統，確保每袋產品重量一致，減少浪費。
                </li>
                <li>
                  <h4>多功能設計：</h4>適用多樣化包裝材料。
                </li>
                <li>
                  <h4>節省空間：</h4>立式設計節省生產空間，適合各種生產環境。
                </li>
                <li>
                  <h4>自動化高效：</h4>全自動操作，自動完成制袋、液體充填、封口、切袋等連貫性作動流程，減少人工。
                </li>
                <li>
                  <h4>高密封密性：</h4>成熟先進熱封技術，確保包裝密封，防止洩漏，延長產品保存期限。
                </li>
                <li>
                  <h4>操作簡單：</h4>簡便操作面板和設置功能，輕鬆掌握，減少培訓時間。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>Precise Filling:</h4> Accurate dosing system ensures consistent pouch weight and minimizes material waste.
                </li>
                <li>
                  <h4>Versatile Design:</h4> Compatible with a wide variety of packaging materials.
                </li>
                <li>
                  <h4>Space-Saving:</h4> The compact vertical configuration optimizes floor space in any production environment.
                </li>
                <li>
                  <h4>Automated Efficiency:</h4> Fully automatic operation—from bag forming and liquid filling to sealing and cutting—streamlining the workflow and reducing labor requirements.
                </li>
                <li>
                  <h4>Superior Airtight Sealing:</h4> Advanced thermal sealing technology ensures leak-proof packaging and extends product shelf life.
                </li>
                <li>
                  <h4>Simple Operation:</h4> User-friendly control panel and settings allow for easy mastery and minimal training time.
                </li>
              </ul>
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

        'applications' => [
          'intro' => [
            'zh'=>'<ul><li>食品行業：調味包、醬料包、飲料等。</li><li>生技醫藥行業：膠原凍、美顏飲、乾洗手。</li><li>美容用品：化妝水、乳液、精華液。</li><li>化工行業：化學原料、肥料等。</li><li>日用產品：洗衣劑、洗潔劑等。</li></ul>',
            'en'=>'<ul><li>Food Industry: Seasoning packets, sauce sachets, beverages, etc.</li><li>Biotech & Medical: Collagen jelly, beauty drinks, hand sanitizers.</li><li>Cosmetics & Beauty: Toners, lotions, serums, and essences.</li><li>Chemical Industry: Chemical raw materials, liquid fertilizers, etc.</li><li>Daily Products: Laundry detergents, dish soaps, and household cleaners.</li></ul>'
          ],

          'items' => [
            [
              'img' => ['arf-app-1.webp'],
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
                    <th>ARF-1</th>
                    <th>ARF-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容量<br/>依包裝尺寸而定</td>
                    <td>10-100g </td>
                    <td>100-150g</td>
                  </tr>
                  <tr>
                    <td class="label">充填速度<br/>依產品流動性而定</td>
                    <td>25-45 bag/min</td>
                    <td>15-25 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 × 寬 × 高 (m/m)</td>
                    <td>900x700x1900</td>
                    <td>1000x800x1900</td>
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
                    <th>ARF-1</th>
                    <th>ARF-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity<br/>(Varies by pouch size)</td>
                    <td>10-100g </td>
                    <td>100-150g</td>
                  </tr>
                  <tr>
                    <td class="label">Filling Speed<br/>(Varies by product fluidity)</td>
                    <td>25-45 bags/min</td>
                    <td>15-25 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="2">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>900 x 700 x 1900</td>
                    <td>1000 x 800 x 1900</td>
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

      'crl' => [
        'slug' => 'crl',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'CRL 自動計量封口包裝機',
          'en' => 'CRL Automatic Weighing & Packaging Machine',
        ],
        'type' => 'CRL-1 / CRL-2 / CRL-4', 
        'image' => [
          'crl.webp',
        ],
        'image_class' => [
          'v-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              計量充填封口機專為各種行業包裝需求設計定量充填包裝機，特別適合液體、粉末、顆粒、固體物料、五金零件等多樣化物料自動化包裝。可結合定量、數粒、投料等充填方式與封口技術，確保每袋產品重量和包裝大小精確無誤，滿足不同產品包裝要求。無論是食品、化工、醫藥、日用產品、五金材料，本包裝機能提升生產效率、降低浪費，確保產品品質。
            ',
            'en'=>'
              Designed to meet the diverse packaging needs of various industries, our automatic weighing and filling machines are ideal for liquids, powders, granules, solids, and hardware components. By integrating precision dosing, counting, and feeding methods with advanced sealing technology, we ensure that every package meets exact weight and size specifications. Whether in the food, chemical, pharmaceutical, or hardware sector, this machine enhances production efficiency, minimizes waste, and guarantees superior product consistency.
            '
          ],

          'option' => [
            'zh'=>'日期機、熱轉印機、充氮裝置(氮氣製造機需客人自備)',
            'en'=>'Date Coder, Thermal Transfer Overprinter (TTO), Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ]
          ]
        ],
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>精準充填：準確充填系統，確保每袋產品重量一致，減少浪費。</li>
                <li>多功能設計：適用多樣化包裝材料，可搭配液體、粉末、顆粒等多種物料的包裝。</li><li>節省空間：立式設計節省生產空間，適合各種生產環境。</li>
                <li>自動化高效：全自動操作，自動完成制袋、充填、封口、切袋等連貫性作動流程，減少人工。</li>
                <li>高密封密性：成熟先進熱封技術，確保包裝密封，防止洩漏，延長產品保存期限。</li>
                <li>操作簡單：簡便操作面板和設置功能，輕鬆掌握，減少培訓時間。</li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Precise Filling: High-accuracy dosing system ensures consistent bag weight and minimizes material loss.</li>
                <li>Versatile Design: Compatible with various packaging materials and suitable for liquids, powders, and granules.</li>
                <li>Space Optimization: Compact vertical design saves valuable production floor space.</li>
                <li>High Automation: Fully automatic workflow—from bag forming and filling to sealing and cutting—minimizing labor costs.</li>
                <li>Superior Sealing Quality: Advanced thermal sealing technology prevents leakage and extends product shelf life.</li>
                <li>Easy Operation: User-friendly control panel and simple settings allow for quick mastery and reduced training time.</li>
              </ul>
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

        'applications' => [
          'intro' => [
            'zh'=>'<ul><li>食品行業：堅果、糖果、粉末、飲料、調味粉、醬料包等。</li><li>醫藥行業：藥粉、顆粒、藥品包等。</li><li>化工行業：化學原料、肥料等。</li><li>日用產品：洗衣粉、洗潔劑等。</li></ul>',
            'en'=>'<ul><li>Food Industry: Nuts, candies, powders, beverages, seasonings, sauce packets, etc.</li><li>Pharmaceuticals: Medicinal powders, granules, medical supplies, etc.</li><li>Chemicals: Chemical raw materials, fertilizers, etc.</li><li>Daily Products: Detergents, laundry powders, household liquids, etc.</li></ul>'
          ],

          'items' => [
            [
              'img' => ['crl-app-1.webp'],
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
                    <th>CRL-1</th>
                    <th>CRL-2</th>
                    <th>CRL-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填速度<br/>依產品流動性而定</td>
                    <td>25-45 bag/min</td>
                    <td>10-25 bag/min</td>
                    <td>10-20 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 × 寬 × 高 (m/m)</td>
                    <td>700x1000x1700</td>
                    <td>900x1000x1900</td>
                    <td>1000x1200x2000</td>
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
                    <th>CRL-1</th>
                    <th>CRL-2</th>
                    <th>CRL-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Speed<br/>(Varies by product fluidity)</td>
                    <td>25-45 bags/min</td>
                    <td>10-25 bags/min</td>
                    <td>10-20 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>700 x 1000 x 1700</td>
                    <td>900 x 1000 x 1900</td>
                    <td>1000 x 1200 x 2000</td>
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
      ],

      'crlg' => [
        'slug' => 'crlg',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'CRL-G 直立式插角包裝機',
          'en' => 'CRL-G Vertical Gusset Packing Machine',
        ],
        'type' => 'CRL-G1 / CRL-G2 / CRL-A', 
        'image' => [
          'crlv.webp',
          'crlvs.webp',
        ],
        'image_class' => [
          'v-style',
          'v-style',
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              計量充填封口機專為各種行業包裝需求設計定量充填包裝機，特別適合液體、粉末、顆粒、固體物料、五金零件等多樣化物料自動化包裝。可結合定量、數粒、投料等充填方式與封口技術，確保每袋產品重量和包裝大小精確無誤，滿足不同產品包裝要求。無論是食品、化工、醫藥、日用產品、五金材料，本包裝機能提升生產效率、降低浪費，確保產品品質。
            ',
            'en'=>'
              Designed to meet the diverse packaging needs of various industries, our automatic weighing and filling machines are ideal for liquids, powders, granules, solids, and hardware components. By integrating precision dosing, counting, and feeding methods with advanced sealing technology, we ensure that every package meets exact weight and size specifications. Whether in the food, chemical, pharmaceutical, or hardware sector, this machine enhances production efficiency, minimizes waste, and guarantees superior product consistency.
            '
          ],

          'option' => [
            'zh'=>'日期機、熱轉印機、充氮裝置(氮氣製造機需客人自備)',
            'en'=>'Date Coder, Thermal Transfer Overprinter (TTO), Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => [
            //     'zh'=>'',
            //     'en'=>''
            //   ]
            // ]
          ]
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>本機適合多元化的產品自動計量及包裝，操作容易且包裝速度快，尺寸也可自行調整。</li>
                <li>本機可全自動計量、包裝及裁切，附有電眼追踪系統，可使包裝紙印刷精準，進而提昇產品的價值。</li>
              </ul>
            ',
            'en'=>''
          ],

          'option' => [
            'zh'=>'螺旋式充填設備、容量式充填設備及多磅秤計量機。',
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
          // 'intro' => [
          //   'zh'=>'
          //     <ul>
          //       <li>精準充填：準確充填系統，確保每袋產品重量一致，減少浪費。</li>
          //       <li>多功能設計：適用多樣化包裝材料，可搭配液體、粉末、顆粒等多種物料的包裝。</li><li>節省空間：立式設計節省生產空間，適合各種生產環境。</li>
          //       <li>自動化高效：全自動操作，自動完成制袋、充填、封口、切袋等連貫性作動流程，減少人工。</li>
          //       <li>高密封密性：成熟先進熱封技術，確保包裝密封，防止洩漏，延長產品保存期限。</li>
          //       <li>操作簡單：簡便操作面板和設置功能，輕鬆掌握，減少培訓時間。</li>
          //     </ul>
          //   ',
          //   'en'=>'
          //     <ul>
          //       <li>Precise Filling: High-accuracy dosing system ensures consistent bag weight and minimizes material loss.</li>
          //       <li>Versatile Design: Compatible with various packaging materials and suitable for liquids, powders, and granules.</li>
          //       <li>Space Optimization: Compact vertical design saves valuable production floor space.</li>
          //       <li>High Automation: Fully automatic workflow—from bag forming and filling to sealing and cutting—minimizing labor costs.</li>
          //       <li>Superior Sealing Quality: Advanced thermal sealing technology prevents leakage and extends product shelf life.</li>
          //       <li>Easy Operation: User-friendly control panel and simple settings allow for quick mastery and reduced training time.</li>
          //     </ul>
          //   '
          // ],

          'items' => [
            // ['img' => [''], 'text' => ['zh'=>'', 'en'=>''] ],
          ]
        ],
        'applications' => [
          'intro' => [
            'zh'=>'適用於包裝糖、鹽、茶、調味品、咖啡、藥粉、種子、堅果、糖果、花生、洗滌劑、乾燥劑等。',
            'en'=>''
          ],

          'items' => [
            [
              'img' => ['crl-g-app-2.webp', 'crl-g-app-1.webp', 'crl-g-app-3.webp'],
              'text' => ['zh'=>'', 'en'=>'']
            ],
          ]
        ],
        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            'zh'=>'
              <table class="spec-table" style="margin-top: 2rem">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>CRL-G1</th>
                    <th>CRL-G2</th>
                    <th>CRL-A</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填速度<br/>依產品流動性而定</td>
                    <td>25-45 bag/min</td>
                    <td>10-25 bag/min</td>
                    <td>10-20 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 × 寬 × 高 (m/m)</td>
                    <td>700x1000x1700</td>
                    <td>900x1000x1900</td>
                    <td>1000x1200x2000</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table" style="margin-top: 2rem">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>CRL-G1</th>
                    <th>CRL-G2</th>
                    <th>CRL-A</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Speed<br/>(Varies by product fluidity)</td>
                    <td>25-45 bags/min</td>
                    <td>10-25 bags/min</td>
                    <td>10-20 bags/min</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L × W × H (mm)</td>
                    <td>700 x 1000 x 1700</td>
                    <td>900 x 1000 x 1900</td>
                    <td>1000 x 1200 x 2000</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ]

      // 'crlv' => [
      //   'slug' => 'crlv',
      //   'new_patent' => ['enabled' => false,], 
      //   'title' => [
      //     'zh' => 'CRL-V / CRL-VS 直立式插角包裝機',
      //     'en' => 'CRL-V / CRL-VS Vertical Gusset Packing Machine',
      //   ],
      //   'type' => 'CRL-V / CRL-VS', 
      //   'image' => [
      //     'crlv.webp',
      //     'crlvs.webp',
      //   ],
      //   'image_class' => [
      //     'v-style',
      //     'v-style',
      //   ],
      //   // ADVANTAGES
      //   'advantages' => [
      //     'intro' => [
      //       'zh'=>'
      //         計量充填封口機專為各種行業包裝需求設計定量充填包裝機，特別適合液體、粉末、顆粒、固體物料、五金零件等多樣化物料自動化包裝。可結合定量、數粒、投料等充填方式與封口技術，確保每袋產品重量和包裝大小精確無誤，滿足不同產品包裝要求。無論是食品、化工、醫藥、日用產品、五金材料，本包裝機能提升生產效率、降低浪費，確保產品品質。
      //       ',
      //       'en'=>'
      //         Designed to meet the diverse packaging needs of various industries, our automatic weighing and filling machines are ideal for liquids, powders, granules, solids, and hardware components. By integrating precision dosing, counting, and feeding methods with advanced sealing technology, we ensure that every package meets exact weight and size specifications. Whether in the food, chemical, pharmaceutical, or hardware sector, this machine enhances production efficiency, minimizes waste, and guarantees superior product consistency.
      //       '
      //     ],

      //     'option' => [
      //       'zh'=>'日期機、熱轉印機、充氮裝置(氮氣製造機需客人自備)',
      //       'en'=>'Date Coder, Thermal Transfer Overprinter (TTO), Nitrogen Flushing Device (Nitrogen generator must be provided by the customer)'
      //     ],

      //     'items' => [
      //       // [
      //       //   'img' => [''],
      //       //   'text'  => [
      //       //     'zh'=>'',
      //       //     'en'=>''
      //       //   ]
      //       // ]
      //     ]
      //   ],
      //   // ADVANTAGES
      //   'advantages' => [
      //     'intro' => [
      //       'zh'=>'
      //         <ul>
      //           <li>本機適合多元化的產品自動計量及包裝，操作容易且包裝速度快，尺寸也可自行調整。</li>
      //           <li>本機可全自動計量、包裝及裁切，附有電眼追踪系統，可使包裝紙印刷精準，進而提昇產品的價值。</li>
      //         </ul>
      //       ',
      //       'en'=>''
      //     ],

      //     'option' => [
      //       'zh'=>'螺旋式充填設備、容量式充填設備及多磅秤計量機。',
      //       'en'=>''
      //     ],

      //     'items' => [
      //       // [
      //       //   'img' => [''],
      //       //   'text'  => ['zh'=>'','en'=>'']
      //       // ],
      //     ]
      //   ],
      //   // FEATURES
      //   'features' => [
      //     // 'intro' => [
      //     //   'zh'=>'
      //     //     <ul>
      //     //       <li>精準充填：準確充填系統，確保每袋產品重量一致，減少浪費。</li>
      //     //       <li>多功能設計：適用多樣化包裝材料，可搭配液體、粉末、顆粒等多種物料的包裝。</li><li>節省空間：立式設計節省生產空間，適合各種生產環境。</li>
      //     //       <li>自動化高效：全自動操作，自動完成制袋、充填、封口、切袋等連貫性作動流程，減少人工。</li>
      //     //       <li>高密封密性：成熟先進熱封技術，確保包裝密封，防止洩漏，延長產品保存期限。</li>
      //     //       <li>操作簡單：簡便操作面板和設置功能，輕鬆掌握，減少培訓時間。</li>
      //     //     </ul>
      //     //   ',
      //     //   'en'=>'
      //     //     <ul>
      //     //       <li>Precise Filling: High-accuracy dosing system ensures consistent bag weight and minimizes material loss.</li>
      //     //       <li>Versatile Design: Compatible with various packaging materials and suitable for liquids, powders, and granules.</li>
      //     //       <li>Space Optimization: Compact vertical design saves valuable production floor space.</li>
      //     //       <li>High Automation: Fully automatic workflow—from bag forming and filling to sealing and cutting—minimizing labor costs.</li>
      //     //       <li>Superior Sealing Quality: Advanced thermal sealing technology prevents leakage and extends product shelf life.</li>
      //     //       <li>Easy Operation: User-friendly control panel and simple settings allow for quick mastery and reduced training time.</li>
      //     //     </ul>
      //     //   '
      //     // ],

      //     'items' => [
      //       // ['img' => [''], 'text' => ['zh'=>'', 'en'=>''] ],
      //     ]
      //   ],
      //   'applications' => [
      //     'intro' => [
      //       'zh'=>'適用於包裝糖、鹽、茶、調味品、咖啡、藥粉、種子、堅果、糖果、花生、洗滌劑、乾燥劑等。',
      //       'en'=>''
      //     ],

      //     'items' => [
      //       [
      //         'img' => ['crl-app-1.webp'],
      //         'text' => ['zh'=>'', 'en'=>'']
      //       ],
      //       [
      //         'img' => ['crl-g-app-1.webp'],
      //         'text' => ['zh'=>'', 'en'=>'']
      //       ],
      //     ]
      //   ],
      //   // SPECIFICATIONS
      //   'spec' => [
      //     'table' => 
      //     [
      //       'zh'=>'
      //         <table class="spec-table">
      //           <thead>
      //             <tr>
      //               <th>型號</th>
      //               <th>CRL-V (插角)</th>
      //               <th>CRL-VS (4邊插角)</th>
      //             </tr>
      //           </thead>
      //           <tbody>
      //             <tr>
      //               <td class="label">包裝能力</td>
      //               <td colspan="2">最大 10~50 包/分</td>
      //             </tr>
      //             <tr>
      //               <td class="label">包裝袋尺寸 (mm)</td>
      //               <td colspan="2">寬 100~350 / 長 100~400</td>
      //             </tr>
      //             <tr>
      //               <td class="label">充填容量</td>
      //               <td colspan="2">最小 400公克 至 最大 2公斤</td>
      //             </tr>
      //             <tr>
      //               <td class="label">使用電力</td>
      //               <td colspan="2">AC 220V 1HP</td>
      //             </tr>
      //             <tr>
      //               <td class="label">空氣壓縮機</td>
      //               <td colspan="2">5HP (選配件)</td>
      //             </tr>
      //           </tbody>
      //         </table>
      //       ',
      //       'en'=>'
      //         <table class="spec-table">
      //           <thead>
      //             <tr>
      //               <th>Model</th>
      //               <th>CRL-V (Gusset Bag)</th>
      //               <th>CRL-VS (4-Side Gusset Bag)</th>
      //             </tr>
      //           </thead>
      //           <tbody>
      //             <tr>
      //               <td class="label">Packaging Capacity</td>
      //               <td colspan="2">Max. 10~50 bags/min</td>
      //             </tr>
      //             <tr>
      //               <td class="label">Bag Size (mm)</td>
      //               <td colspan="2">W 100~350 / L 100~400</td>
      //             </tr>
      //             <tr>
      //               <td class="label">Filling Volume</td>
      //               <td colspan="2">400g to 2kg</td>
      //             </tr>
      //             <tr>
      //               <td class="label">Power Consumption</td>
      //               <td colspan="2">AC 220V 1HP</td>
      //             </tr>
      //             <tr>
      //               <td class="label">Air Compressor</td>
      //               <td colspan="2">5HP (Optional)</td>
      //             </tr>
      //           </tbody>
      //         </table>
      //       ',
      //     ],
      //   ],
      // ]
    ],
  ], // 立式計量充填包裝 END
]
?>