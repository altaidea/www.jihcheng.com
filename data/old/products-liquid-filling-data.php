<?php
// 內容管理
// 半自動液體醬體充填機 → PF
// sa-lp-filler
return [
// Products.php
    'semi-auto-liquid-paste-filling' => [
      // --- 新增：分類識別標籤
    'category_tags' => ['liquid'],
    'new_patent' => ['enabled' => false,],
    // series-name
    'title' => [
      'zh' => '半自動液體醬體充填機',
      'en' => 'Semi-automatic Liquid & Paste Filling Machine'
    ],
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'pf/pf.webp',
        'caption' => ['zh' => '', 'en' => '',],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'semi-auto-liquid-paste-filling',
      // series-intro
      'intro' => [
        'zh' => '
          <ul><li><strong>節省設備與人力成本</strong>無需自行投資高額設備與聘請專業人員，即可快速啟動產品生產。</li><li><strong>多元化產能調整</strong>根據市場需求靈活調整產量，避免過度庫存與資源浪費。</li><li><strong>專業品質把關</strong>依產品性質選用合適充填技術（冷充、熱充、氮氣填充等），確保品質穩定。</li><li><strong>多樣容器變化</strong>不限特殊容器設計與充填（例如試用包、鋁袋、瓶裝等），滿足市場多變需求。</li></ul>
        ',
        'en' => ''
      ],

      // products-series.php + products-detail.php
      'pf' => [
        'slug' => 'pf',
        'new_patent' => ['enabled' => false,],
        'title' => [
          'zh' => 'PF 液體充填機',
          'en' => 'PF Liquid Filling Machine',
        ],
        'type' => 'PF-1 / PF-2 / PF-3', 
        'image' => [
          'pf.webp'
        ],
        'image_class' => [
          'v-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              液體充填機系列，專為小型產線與客製化充填需求配合不同品牌／工廠需求，提供客製化、現場安裝、後續維修，提高效率、穩定性產線設計。不論是流動性高水狀產品，還是黏稠、含顆粒的特殊液體，都能透過Piston 或伺服控制系統多功能完成充填。適用於食品、化妝品、清潔劑、生技產品及化工類液體，滿足多產業的充填需求，靈活實用解決方案。適合創業品牌、小型工廠、試驗線、客製化產品等應用，搭配精密計量系統與易於操作的人機介面，讓每一次充填穩定又安心。
            ',
            'en'=>'
            '
          ],

          'option' => [
            'zh'=>'加熱夾套（適用於油類、蜂蜜等）、防滴漏充填頭、雙頭切換裝置（提升效率）、液面感應自動停灌（選配）',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => ['sm-1.webp'],
            //   'text'  => [
            //     'zh'=>'色帶式日期機',
            //     'en'=>'Ribbon coder'
            //   ]
            // ],
            // [
            //   'img' => ['sm-2.webp'],
            //   'text' => [
            //       'zh' => '墨球式日期機',
            //       'en' => 'Ink roller coder'
            //   ]
            // ]
          ]
        ],

        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>準確充填系統：</h4>
                  穩定定量充填，確保每個容量一致性，減少誤差與浪費。
                </li>
                <li>
                  <h4>容器多元性：</h4>不限袋子、瓶裝、鋁袋、軟管等多樣容器形式。
                </li>
                <li>
                  <h4>模組化設計：</h4>充填頭可擴充，操作介面可客製，靈活應對不同產線。
                </li>
                <li>
                  <h4>易清洗設計：</h4>符合食品級要求，充填零件快速拆洗，防止交叉污染。
                </li>
                <li>
                  <h4>簡易操作：</h4>操作簡便，自動校正與異常提醒功能。
                </li>
                <li><h4>可選配其他配備：</h4>加熱系統、CIP清洗系統等，滿足不同專業需求。</li>
                <li><h4>操作簡單，快速上手：</h4>只需一人即可操作，具備腳踏啟動、單鍵灌裝等直覺設計。</li>
                <li><h4>多種液體對應力強：</h4>適用於水狀液體、酒精、消毒液、精華液、乳液、黏稠液體等。</li>
                <li><h4>灌注精度高，誤差低：</h4>採用高品質氣動／電控系統，搭配不鏽鋼精密閥門，控制精度±1%。</li>
                <li><h4>體積輕巧，安裝方便：</h4>適合空間有限的生產現場，不需大規模建置，即裝即用。</li>
                <li><h4>清潔保養便利：</h4>採用食品級不鏽鋼材質，拆裝簡易，日常清洗快速完成。</li>
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
              <ul><li>美妝／保養品：乳液、精華、洗面乳、卸妝水。</li><li>食品飲品：果汁、果醋、醬汁、乳飲品、濃縮液、飲料、豆漿、果凍。</li><li>清潔用品：消毒液、洗手液、消毒水、柔軟精、酒精、染髮劑。</li><li>其化工與工業：潤滑油、溶劑、酸鹼性液體、防鏽液。</li></ul>
            ',
            'en'=>'
              <ul><li><strong>Cosmetics & Personal Care:</strong> Lotion, essence, facial cleanser, makeup remover.</li><li><strong>Food & Beverages:</strong> Fruit juice, fruit vinegar, sauces, dairy drinks, concentrates, beverages, soy milk, jelly.</li><li><strong>Cleaning Products:</strong> Disinfectant, hand sanitizer, antiseptic solution, fabric softener, alcohol, hair dye.</li><li><strong>Chemical & Industrial:</strong> Lubricants, solvents, acidic or alkaline liquids, anti-rust fluids.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => [
                'pf-app-1.webp', 'pf-app-2.webp', 'pf-app-3.webp'
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
                    <th>PF-1</th>
                    <th>PF-2</th>
                    <th>PF-3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容量</td>
                    <td>100g~500g</td>
                    <td>500g~1000g</td>
                    <td>1000g~2000g</td>
                  </tr>
                  <tr>
                    <td class="label">包裝速度（包∕分）</td>
                    <td>25~30</td>
                    <td>15~20</td>
                    <td>5~15</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td colspan="2">2HP</td>
                    <td>3HP</td>
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
                    <th>PF-1</th>
                    <th>PF-2</th>
                    <th>PF-3</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Range</td>
                    <td>100g~500g</td>
                    <td>500g~1000g</td>
                    <td>1000g~2000g</td>
                  </tr>
                  <tr>
                    <td class="label">Capacity (Bag/Min)</td>
                    <td>25~30</td>
                    <td>15~20</td>
                    <td>5~15</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td colspan="3">AC 220V</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="2">2HP</td>
                    <td>3HP</td>
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