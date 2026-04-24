<?php
// 內容管理
return [
// Products.php
  'bag-weighing-filling-packing-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder', 'liquid'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '給袋式計量充填包裝機',
      'en' => 'Bag / Weighing / Filling Packing Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'agm/agm.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'bag-weighing-filling-packing-machine',
      // series-intro
      'intro' => [
        'zh' => '
          給袋式充填包裝機 自動取袋、充填、封口是一款，靈活性、精確性、高效率、多樣化、高品質優勢於一身的包裝設備，已經成為現代包裝行業中不可或缺的設備之一，廣泛應用於各種不同複合積層袋、預製平面袋、夾鏈袋、鎖嘴袋等產品包裝需求。
        ',
        'en' => '
          Bag Weighing Filling Packing Machine integrates automatic bag feeding, filling, and sealing into a single, high-performance unit. Combining flexibility, precision, high efficiency, versatility, and superior quality, it has become an indispensable asset in the modern packaging industry. It is widely utilized to meet the diverse packaging needs of various laminated pouches, premade flat bags, zipper bags, and spout pouches.
        '
      ],

      // products-series.php + products-detail.php
      'agm' => [
        'slug' => 'agm',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => true,], 

        'new_patent_title' => [
          'zh' => '榮獲開夾鏈袋裝置新專利',
          'en' => 'New Patent for Zipper Opening Device'
        ],
        
        'title' => [
          'zh' => 'AGM 自動給袋包裝機',
          'en' => 'AGM Automatic Bag Packing Machine',
        ],

        'type' => 'AGM-A1 / AGM-A3', 

        'image' => [
          'agm.webp',
          'agm-1.webp',
          'agm-2.webp'
        ],

        'image_class' => [
          'box-style',
          'h-style',
          'box-style'
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              給袋式充填包裝機 自動取袋、充填、封口是一款，靈活性、精確性、高效率、多樣化、高品質優勢於一身的包裝設備，已經成為現代包裝行業中不可或缺的設備之一，廣泛應用於各種不同複合積層袋、預製平面袋、夾鏈袋、鎖嘴袋等產品包裝需求。<br/>無論是大規模生產還是中小規模企業，自動取袋、充填、封口能夠有效提高生產效率，降低人員包裝成本，並確保產品包裝品質。<br/>此款設備能幫助您輕鬆應對各種包裝需求，提升市場競爭力，成為企業生產線上不可或缺的高效助手。
            ',
            'en'=>'
              The Premade Pouch Filling and Sealing Machine integrates automatic bag feeding, filling, and sealing into one high-performance system. Characterized by flexibility, precision, and efficiency, it has become an essential asset in the modern packaging industry. It is widely compatible with various bag types, including laminated pouches, premade flat bags, zipper bags, and spout pouches.<br/>Whether for large-scale production or small-to-medium enterprises, this automation significantly boosts productivity, reduces labor costs, and ensures consistent packaging quality. This equipment empowers your production line to meet diverse market demands and enhances your overall competitive edge.
            '
          ],

          'option' => [
            'zh'=>'依照不同產品搭配: 液體充填機、計量機、多頭秤、投料輸送帶、噴墨日期機。',
            'en'=>'Configurable based on product type: Liquid Filling Machine, Dosing System, Multi-head Weigher, Feeding Conveyor, Inkjet Date Coder.'
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
                  <h4>機身外觀與填充功能：</h4>
                  <p>機身外部結構採用 SUS304 不鏽鋼材質，易於清潔與保養。本機可根據產品需求搭配充填裝置，適用於固體、顆粒及液體產品：</p>
                  <ol>
                    <li>固體/顆粒：可搭配 CWM 電腦秤重計量機 / MW 多頭秤計量機。</li>
                    <li>液體：可搭配 PF 液體、漿體定量充填機。</li>
                    <li>最大載重：每袋最高可達 2000 公克。</li>
                  </ol>
                </li>
                <li>
                  <h4>自動化流程：</h4>本機整合了自動進袋、填充、第一道封口、第二道封口及出料等功能，全程自動化作業。
                </li>
                <li>
                  <h4>選配項目：</h4>日期機為選配裝置。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>Machine Structure & Filling Functions:</h4>
                  <p>The exterior frame is constructed from SUS304 stainless steel, ensuring easy cleaning and maintenance. The machine can be equipped with various dosing systems based on product characteristics, suitable for solids, granules, and liquids:</p>
                  <ol>
                    <li>Solids/Granules: Can be paired with CWM Computerized Weighing Machine or MW Multi-head Weigher.</li>
                    <li>Liquids: Can be paired with PF Liquid and Paste Quantitative Filling Machine.</li>
                    <li>Maximum Load: Supports up to 2000g per bag.</li>
                  </ol>
                </li>
                <li>
                  <h4>Automated Workflow:</h4>
                  Integrates automatic bag feeding, filling, primary sealing, secondary sealing, and discharging into a fully automated process.
                </li>
                <li>
                  <h4>Optional Equipment:</h4>
                  Date coding machines are available as optional modules.
                </li>
              </ul>
            ',
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
              <ul><li><strong>食品行業：</strong>穀物、零食、咖啡、調味料、速食麵、糖果、醬料、奶粉、滷汁、湯品、義大利肉醬、滴雞精、雞湯等</li><li><strong>日用化學品：</strong>洗衣粉、肥料、化妝品、洗手液等</li><li><strong>農產品：</strong>顆粒、乾果、茶葉等</li><li><strong>醫藥行業：</strong>藥品、保健品包裝等</li><li><strong>冰凍食品：</strong>調理包、即食包、冷凍食品、新鮮蔬果、肉品等</li><li><strong>固體+液混合產品：</strong>粉圓、羊肉爐、麻油雞、小菜、年菜等</li></ul>
            ',
            'en'=>'
              <ul><li><strong>Food Industry:</strong> Grains, snacks, coffee, seasonings, instant noodles, candy, sauces, milk powder, marinades, soups, Bolognese sauce, essence of chicken, chicken soup, etc.</li><li><strong>Daily Chemicals:</strong> Detergent powder, fertilizers, cosmetics, hand sanitizer, etc.</li><li><strong>Agricultural Products:</strong> Granules, dried fruits, tea leaves, etc.</li><li><strong>Pharmaceuticals:</strong> Medicines, healthcare products packaging, etc.</li><li><strong>Frozen Foods:</strong> Ready-to-eat pouches, frozen meals, fresh produce, meats, etc.</li><li><strong>Solid-Liquid Mixtures:</strong> Tapioca pearls, lamb stew, sesame oil chicken, side dishes, Lunar New Year specialty dishes, etc.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => ['agm-app-1.webp', 'agm-app-2.webp'],
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
                    <th style="width:40%">AGM-A1</th>
                    <th style="width:40%">AGM-A3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝袋尺寸</td>
                    <td>袋寬: 100–220 mm<br>袋長: 100–350 mm</td>
                    <td>袋寬: 200–320 mm<br>袋長: 150–450 mm</td>
                  </tr>
                  <tr>
                    <td class="label">適用袋型</td>
                    <td colspan="2">站立袋、積層袋、鋁箔袋、PE袋、夾鏈袋、鎖嘴袋…等。</td>
                  </tr>
                  <tr>
                    <td class="label">包裝產能</td>
                    <td colspan="2">每分鐘 10–30 袋（依不同產品流動性而定）</td>
                  </tr>
                  <tr>
                    <td class="label">電源供應</td>
                    <td colspan="2">AC 220V–440V, 三相（可依不同國家客製）</td>
                  </tr>
                  <tr>
                    <td class="label">空壓機需求</td>
                    <td colspan="2">7.5 HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>(長 × 寬 × 高)</td>
                    <td>1700 × 1750 × 1650 mm</td>
                    <td>2400 × 1800 × 1750 mm</td>
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
                    <th style="width:40%">AGM-A1</th>
                    <th style="width:40%">AGM-A3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Bag Dimensions</td>
                    <td>Bag Width: 100–220 mm<br>Bag Length: 100–350 mm</td>
                    <td>Bag Width: 200–320 mm<br>Bag Length: 150–450 mm</td>
                  </tr>
                  <tr>
                    <td class="label">Bag Types</td>
                    <td colspan="3">Stand-up pouches, laminated bags, foil bags, PE bags, zipper bags, spout pouches, etc.</td>
                  </tr>
                  <tr>
                    <td class="label">Capacity</td>
                    <td colspan="3">10–30 bags/min (Depending on product fluidity)</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="3">AC 220V–440V, 3-Phase (Customizable by country)</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="3">7.5 HP</td>
                  </tr>
                  <tr>
                    <td class="label">Dimensions<br>(L × W × H)</td>
                    <td>1700 × 1750 × 1650 mm</td>
                    <td>2400 × 1800 × 1750 mm</td>
                  </tr>
                </tbody>
              </table>
            '
          ],

          'table_note' => [
            'zh'=>'本機器所需之空壓機須由客戶自行準備。',
            'en'=>'The air compressor required for this machine must be provided by the customer.'
          ],

          'machine-line' => [
              [
                  'image' => 'img-agm-4a.webp',
                  'text'  => ['zh' => '給袋機連接輸送側視圖', 'en' => 'A lateral view of AGM-A1 & PF & CY'],
              ],
              [
                  'image' => 'img-agm-4b.webp', // 這裡可以換成流程圖
                  'text'  => ['zh' => '給袋機連接輸送俯視圖', 'en' => 'A vertical view of AGM-A1 & PF & CY'],
              ]
          ],

          'machine-combin' => [
              [
                  'combin_name' => [
                      'zh' => '自動給袋式充填包裝機', 
                      'en' => 'Automatic Bag / Filling Packing Machine'
                  ],
                  'combin_type'  => 'AGM-A1 + PF',
                  'image' => ['agm.webp', 'img-pf-filling-machine.webp']
              ],
              [
                  'combin_name' => [
                      'zh' => '自動給袋式計量包裝機', 
                      'en' => 'Automatic Bag / Weighing Packing Machine'
                  ],
                  'combin_type'  => 'AGM-A1 + CWM',
                  'image' => ['agm.webp', 'img-cwm-computer-weigher.webp']
              ],
              [
                  'combin_name' => [
                      'zh' => '自動給袋式充填包裝機 (搭配輸送帶)', 
                      'en' => 'Automatic Bag / Filling Packing Machine (with Conveyor)'
                  ],
                  'combin_type'  => 'AGM-A1 + PF + CY',
                  'image' => ['agm.webp', 'img-pf-filling-machine.webp', 'img-cy.webp']
              ],
              [
                  'combin_name' => [
                      'zh' => '自動給袋式計量包裝機 (搭配輸送帶)', 
                      'en' => 'Automatic Bag / Weighing Packing Machine (with Conveyor)'
                  ],
                  'combin_type'  => 'AGM-A1 + MW + CY',
                  'image' => ['agm.webp', 'img-mw-computer-weigher.webp', 'img-cy.webp']
              ]
          ]
        ],

        // 'spec' => [
        //   'table' => 
        //   [
        //     'zh'=>'
        //       <table class="spec-table">
        //         <thead>
        //           <tr>
        //             <th class="split-cell">
        //               <div class="split-container">
        //                 <span class="top-right">型號</span>
        //                 <span class="bottom-left">規格</span>
        //               </div>
        //             </th>
        //             <th>AGM-A1</th>
        //             <th>AGM-A2</th>
        //             <th>AGM-A3</th>
        //           </tr>
        //         </thead>
        //         <tbody>
        //           <tr>
        //             <td class="label">包裝袋尺寸</td>
        //             <td>寬度: 80–220 mm<br>長度: 100–350 mm</td>
        //             <td>寬度: 150–260 mm<br>長度: 150–450 mm</td>
        //             <td>寬度: 200–320 mm<br>長度: 150–450 mm</td>
        //           </tr>
        //           <tr>
        //             <td class="label">適用袋型</td>
        //             <td colspan="3">站立袋、積層袋、鋁箔袋、PE袋、夾鏈袋、鎖嘴袋…等。</td>
        //           </tr>
        //           <tr>
        //             <td class="label">包裝產能</td>
        //             <td colspan="3">每分鐘 10–30 袋（依不同產品流動性而定）</td>
        //           </tr>
        //           <tr>
        //             <td class="label">電源供應</td>
        //             <td colspan="3">AC 220V–440V, 三相（可依不同國家客製）</td>
        //           </tr>
        //           <tr>
        //             <td class="label">空壓機需求</td>
        //             <td colspan="3">7.5 HP</td>
        //           </tr>
        //           <tr>
        //             <td class="label">機械尺寸<br>(長 × 寬 × 高)</td>
        //             <td>1700 × 1750 × 1650 mm</td>
        //             <td>2350 × 1700 × 1750 mm</td>
        //             <td>2400 × 1800 × 1750 mm</td>
        //           </tr>
        //         </tbody>
        //       </table>
        //     ',
        //     'en'=>'
        //       <table class="spec-table">
        //         <thead>
        //           <tr>
        //             <th class="split-cell">
        //               <div class="split-container">
        //                 <span class="top-right">Model</span>
        //                 <span class="bottom-left">Spec.</span>
        //               </div>
        //             </th>
        //             <th>AGM-A1</th>
        //             <th>AGM-A2</th>
        //             <th>AGM-A3</th>
        //           </tr>
        //         </thead>
        //         <tbody>
        //           <tr>
        //             <td class="label">Bag Dimensions</td>
        //             <td>Width: 80–220 mm<br>Length: 100–350 mm</td>
        //             <td>Width: 150–260 mm<br>Length: 150–450 mm</td>
        //             <td>Width: 200–320 mm<br>Length: 150–450 mm</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Bag Types</td>
        //             <td colspan="3">Stand-up pouches, laminated bags, foil bags, PE bags, zipper bags, spout pouches, etc.</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Capacity</td>
        //             <td colspan="3">10–30 bags/min (Depending on product fluidity)</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Power Supply</td>
        //             <td colspan="3">AC 220V–440V, 3-Phase (Customizable by country)</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Air Compressor</td>
        //             <td colspan="3">7.5 HP</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Dimensions<br>(L × W × H)</td>
        //             <td>1700 × 1750 × 1650 mm</td>
        //             <td>2350 × 1700 × 1750 mm</td>
        //             <td>2400 × 1800 × 1750 mm</td>
        //           </tr>
        //         </tbody>
        //       </table>
        //     '
        //   ],

        //   'table_note' => [
        //     'zh'=>'本機器所需之空壓機須由客戶自行準備。',
        //     'en'=>'The air compressor required for this machine must be provided by the customer.'
        //   ],

        //   'machine-line' => [
        //       [
        //           'image' => 'img-agm-4a.webp',
        //           'text'  => ['zh' => '給袋機連接輸送側視圖', 'en' => 'A lateral view of AGM-A1 & PF & CY'],
        //       ],
        //       [
        //           'image' => 'img-agm-4b.webp', // 這裡可以換成流程圖
        //           'text'  => ['zh' => '給袋機連接輸送俯視圖', 'en' => 'A vertical view of AGM-A1 & PF & CY'],
        //       ]
        //   ],

        //   'machine-combin' => [
        //       [
        //           'combin_name' => [
        //               'zh' => '自動給袋式充填包裝機', 
        //               'en' => 'Automatic Bag / Filling Packing Machine'
        //           ],
        //           'combin_type'  => 'AGM-A1 + PF',
        //           'image' => ['agm.webp', 'img-pf-filling-machine.webp']
        //       ],
        //       [
        //           'combin_name' => [
        //               'zh' => '自動給袋式計量包裝機', 
        //               'en' => 'Automatic Bag / Weighing Packing Machine'
        //           ],
        //           'combin_type'  => 'AGM-A1 + CWM',
        //           'image' => ['agm.webp', 'img-cwm-computer-weigher.webp']
        //       ],
        //       [
        //           'combin_name' => [
        //               'zh' => '自動給袋式充填包裝機 (搭配輸送帶)', 
        //               'en' => 'Automatic Bag / Filling Packing Machine (with Conveyor)'
        //           ],
        //           'combin_type'  => 'AGM-A1 + PF + CY',
        //           'image' => ['agm.webp', 'img-pf-filling-machine.webp', 'img-cy.webp']
        //       ],
        //       [
        //           'combin_name' => [
        //               'zh' => '自動給袋式計量包裝機 (搭配輸送帶)', 
        //               'en' => 'Automatic Bag / Weighing Packing Machine (with Conveyor)'
        //           ],
        //           'combin_type'  => 'AGM-A1 + MW + CY',
        //           'image' => ['agm.webp', 'img-mw-computer-weigher.webp', 'img-cy.webp']
        //       ]
        //   ]
        // ],

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

      'agp' => [
        'slug' => 'agp',
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],
        'title' => [
          'zh' => 'AGP 水平給袋充填包裝機',
          'en' => 'AGP Horizontal Bag Filling & Sealing Machine',
        ],

        'type' => 'AGP-1 / AGP-2', 

        'image' => [
          'agp.webp',
        ],

        'image_class' => [
          'h-style'
        ],

        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>專為極致多樣化的包裝應用而設計。</li>
                <li>機身外構採用 SUS304 不鏽鋼包覆，確保清潔與維護之便利性。</li>
                <li>可整合自動秤重機、充填機、噴墨日期機及輸送帶（選配），以適應各類物料包裝需求。</li>
                <li>額定秤重範圍為每袋 2000 公克以內。</li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Design for the most versatile packing applications.</li>
                <li>The outer structure of machine is shielded with SUS304 stainless steel for ease of cleaning and maintenance.</li>
                <li>Fitted with automatic weighing, filling machines, date corder, and conveyor (optional) to suit various materials.</li>
                <li>Rated weigh within 2000 Grams per bag.</li>
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
            'zh'=>'果汁、果凍、梅子凍、羊羹、紅豆沙、茶包、咖啡包、粉末、顆粒、瓜子、豆類、糖果、洗滌劑、口罩等。',
            'en'=>'Juice, Jelly, Plum Jelly, Yugum, Red bean paste, Tea bag, Coffee bag, Powder, Granule, Melon seeds, Beans, Candy, Detergents, Mask, etc.'
          ],

          'items' => [
            [
              'img' => ['agp-cwn-app-1.webp', 'agp-cwn-app-2.webp'],
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
                    <th>AGP-1</th>
                    <th>AGP-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產能力</td>
                    <td>Max. 15~30</td>
                    <td>Max. 25~50</td>
                  </tr>
                  <tr>
                    <td class="label">包裝袋尺寸</td>
                    <td colspan="2">W40~150 L60~200 m/m</td>
                  </tr>
                  <tr>
                    <td class="label">充填量</td>
                    <td colspan="2">Max. 2Kg</td>
                  </tr>
                  <tr>
                    <td class="label">電力規格</td>
                    <td colspan="2">AC 220V 1HP</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">真空幫浦</td>
                    <td>3HP</td>
                    <td>5HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械外型尺寸<br>L x W x H (m/m)</td>
                    <td>3500 x 600 x 1700</td>
                    <td>5000 x 600 x 1700</td>
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
                    <th>AGP-1</th>
                    <th>AGP-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity</td>
                    <td>Max. 15~30</td>
                    <td>Max. 25~50</td>
                  </tr>
                  <tr>
                    <td class="label">Bag Size</td>
                    <td colspan="2">W40~150 L60~200 m/m</td>
                  </tr>
                  <tr>
                    <td class="label">Filling Quantity</td>
                    <td colspan="2">Max. 2Kg</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td colspan="2">AC 220V 1HP</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Vacuum Pump</td>
                    <td>3HP</td>
                    <td>5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Dimensions<br>L x W x H (m/m)</td>
                    <td>3500 x 600 x 1700</td>
                    <td>5000 x 600 x 1700</td>
                  </tr>
                </tbody>
              </table>
            '
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
            //   'combin_name' => '',
            //   'combin_type'  => '',
            //   'image' => [
            //     '',
            //     ''
            //   ]
            // ],
          ]
        ],

      ],
    ],

  ], // 給袋式計量充填包裝機 END
]
?>