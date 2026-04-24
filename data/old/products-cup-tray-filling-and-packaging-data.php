<?php
// 內容管理 // 杯裝/盒裝充填封口機
return [
// Products.php
  'cup-tray-filling-and-packaging-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder', 'liquid'],
    // 'slug' => 'cup-tray-filling-and-packaging-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '杯裝/盒裝充填封口機',
      'en' => 'Cup Tray Filling & Packaging Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'st/st.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'cup-tray-filling-and-packaging-machine',
      // series-intro
      'intro' => [
        'zh' => '
          在食品及飲品包裝行業，精確、高效、衛生的包裝設備是企業提升競爭力的關鍵。「杯裝/盒裝充填封口機」應運而生，提供您一個完美解決方案。結合了全自動化生產、精密計量與極致密封技術，不僅能完美適配各式尺寸與形狀的杯盒容器，更透過智慧型觸控介面與符合食品衛生標準的堅固不鏽鋼架構，為企業提供高效、精確且易於維護的包裝解決方案，是穩定產品質量並極大化生產效益的理想利器。
        ',
        'en' => '
          
        '
      ],

      // products-series.php + products-detail.php
      'ast' => [
        'slug' => 'ast',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'AST 杯裝/盒裝充填封口機',
          'en' => 'AST Cup / tray Filling & Sealing Machine',
        ],
        
        'type' => 'AST-1 / AST-2 / AST-3 / AST-4 / AST-6 / AST-8 / AST-10 / AST-12', 

        'image' => [
          'ast.webp',
          'ast-1.webp',
          'ast-2.webp',
          'ast-3.webp',
          'ast-4.webp',
          'ast-5.webp',
          'ast-6.webp',
        ],

        'image_class' => [
          'h-style',
          'box-style',
          'box-style',
          'box-style',
          'box-style',
          'box-style',
          'box-style'
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              在食品及飲品包裝行業，精確、高效、衛生的包裝設備是企業提升競爭力的關鍵。「杯裝/盒裝充填封口機」應運而生，提供您一個完美解決方案。選擇「杯裝/盒裝充填封口機」，為您的生產線引入先進的包裝技術，助力您在競爭激烈的市場中脫穎而出，提升品牌形象，增強市場競爭力。
            ',
            'en'=>'
              In the food and beverage packaging industry, precision, efficiency, and hygiene are the keys to enhancing corporate competitiveness. Our "Cup/Tray Filling and Sealing Machine" is designed to provide you with the perfect packaging solution. By introducing advanced packaging technology to your production line, it helps you stand out in competitive markets, elevates your brand image, and strengthens your market position.
            '
          ],

          'option' => [
            'zh'=>'粉劑充填機、計量機、多頭秤、洗杯裝置、殺菌設備、噴墨日期機、日期機、排出輸送帶等。',
            'en'=>'
              Powder Filling Machine, Dosing System, Multi-head Weigher, Cup Washing Device, Sterilization Equipment, Inkjet Coder, Date Coder, Discharge Conveyor, etc.
            '
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>高效自動化，提升生產效率</h4>
                  <ol>
                    <li><strong>全自動操作：</strong>杯裝/盒裝充填封口機結合自動落杯、充填、封口、檢測、切刀到包裝自動化生產，提高生產效率。相較人工充填，自動化設計提高生產速度，減少人工錯誤，提高生產穩定性。</li>
                    <li><strong>高速生產能力：</strong>封口機設計具有高速運行能力，能短時間內完成大量包裝，滿足大規模生產的需求，大幅提升產能。</li>
                  </ol>
                </li>

                <li>
                  <h4>精確充填，減少浪費</h4>
                  <ol>
                    <li><strong>準確計量系統：</strong>充填封口機配有先進的定量裝置，確保每個容器充填量達到預定標準，避免過度充填或不足。有助減少原料浪費，提高產品的成本效益。</li>
                    <li><strong>適應不同產品：</strong>可依液體、膏狀、顆粒、粉末或混合物料，充填設備能根據不同的物料特性進行搭配選購與準確填充包裝產品。</li>
                  </ol>
                </li>

                <li>
                  <h4>高密封性，保證產品品質</h4>
                  <ol>
                    <li><strong>先進封口技術：</strong>杯裝和盒裝充填封口機使用先進的熱封封口技術，確保包裝容器的密封性。封口效果避免包裝漏液或空氣進入，有效保護產品品質與新鮮度。</li>
                    <li><strong>防潮、防氧化：</strong>對於液體產品（如飲料、湯品等），良好的封口能防止產品與外界的空氣與濕氣接觸，有效延長保存期，避免氧化或腐敗。</li>
                  </ol>
                </li>

                <li>
                  <h4>多功能設計，靈活適應不同需求</h4>
                  <ol>
                    <li><strong>適應多種容器：</strong>適用塑料杯、紙杯、塑料盒、紙盒等不同容器，靈活搭配，滿足不同包裝需求。能夠適應各種行業的產品包裝。</li>
                    <li><strong>可調整包裝容量：</strong>可調整包裝充填容量，能依產品不同需求選購充填裝置，為多樣化的市場需求提供靈活的包裝選擇。</li>
                  </ol>
                </li>

                <li>
                  <h4>操作簡單，維護便捷</h4>
                  <ol>
                    <li><strong>易於操作：</strong>杯裝/盒裝充填封口機配有觸控式人機畫面，操作人員能輕鬆選擇和設定包裝參數。能迅速掌握操作流程，減少培訓時間。</li>
                    <li><strong>減少維護時間：</strong>設計結構簡單使用，容易維護清潔與保養方便。定期維護可確保設備穩定運行，降低設備維護成本和生產停機時間。</li>
                  </ol>
                </li>

                <li>
                  <h4>食品安全與衛生保障</h4>
                  <ol>
                    <li><strong>符合食品安全標準：</strong>杯裝/盒裝充填封口機所接觸食品的零件採用SUS304材料，符合國際食品安全標準，確保包裝過程中的衛生安全。</li>
                    <li><strong>易清潔設計：</strong>本機結構設計簡單、方便清潔，避免交叉污染，符合食品工業的衛生要求。</li>
                  </ol>
                </li>

                <li>
                  <h4>靈活應對不同市場需求</h4>
                  <ol>
                    <li><strong>多元產品應用：</strong>無論是液體、半液體、粉末還是顆粒狀物料，能有效解決包裝方案，能根據市場需求進行調整。</li>
                    <li><strong>應用範圍廣泛：</strong>本機廣泛應用於各種行業，如飲料、乳製品、果汁、湯品、調味品、化妝品、日用化學品、五金材料等，滿足不同產品的包裝需求。</li>
                  </ol>
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>High Efficiency Automation & Enhanced Productivity</h4>
                  <ol>
                    <li><strong>Fully Automatic Operation:</strong> Integrates cup dropping, filling, sealing, testing, and cutting into a seamless automated line. Compared to manual processes, this boosts speed, minimizes human error, and ensures stable production.</li>
                    <li><strong>High-Speed Production:</strong> Engineered for rapid operation, the machine can process large volumes in short timeframes to meet large-scale industrial demands and significantly increase output.</li>
                  </ol>
                </li>

                <li>
                  <h4>Precise Filling & Waste Reduction</h4>
                  <ol>
                    <li><strong>Accurate Dosing System:</strong> Equipped with advanced quantitative units to ensure every container reaches the exact pre-set volume, preventing overfilling or shortfalls and reducing material waste.</li>
                    <li><strong>Material Adaptability:</strong> Dosing systems can be customized to handle liquids, pastes, granules, or powders, ensuring precise packaging tailored to specific material properties.</li>
                  </ol>
                </li>

                <li>
                  <h4>Superior Sealing & Quality Assurance</h4>
                  <ol>
                    <li><strong>Advanced Sealing Technology:</strong> Utilizes state-of-the-art heat-sealing methods to ensure perfect container integrity, preventing leaks or air ingress to protect product freshness.</li>
                    <li><strong>Moisture & Oxidation Resistance:</strong> For liquid products like beverages or soups, the airtight seal prevents contact with external air and moisture, extending shelf life and preventing spoilage.</li>
                  </ol>
                </li>

                <li>
                  <h4>Multifunctional Design & Versatility</h4>
                  <ol>
                    <li><strong>Vessel Compatibility:</strong> Works perfectly with plastic cups, paper cups, plastic tray, or paper tray, offering the flexibility to meet diverse industry requirements.</li>
                    <li><strong>Adjustable Packaging Capacity:</strong> Filling volumes are easily adjustable with various dosing options, providing flexible choices for diverse market needs.</li>
                  </ol>
                </li>

                <li>
                  <h4>Simple Operation & Easy Maintenance</h4>
                  <ol>
                    <li><strong>Intuitive Control:</strong> Features a touch-screen HMI (Human-Machine Interface), allowing operators to easily set parameters and master the workflow with minimal training.</li>
                    <li><strong>Simplified Maintenance:</strong> The streamlined mechanical structure is designed for easy cleaning and routine upkeep, reducing operational costs and minimizing downtime.</li>
                  </ol>
                </li>

                <li>
                  <h4>Food Safety & Hygiene Standards</h4>
                  <ol>
                    <li><strong>Food-Grade Materials:</strong> All components in contact with food are made of SUS304 stainless steel, complying with international safety standards for maximum hygiene.</li>
                    <li><strong>Sanitary Design:</strong> The easy-to-clean structure prevents cross-contamination, meeting the rigorous hygiene demands of the food industry.</li>
                  </ol>
                </li>

                <li>
                  <h4>Flexible Market Response</h4>
                  <ol>
                    <li><strong>Multi-Product Application:</strong> Effectively provides packaging solutions for liquids, semi-liquids, powders, or granules, adjustable to any market requirement.</li>
                    <li><strong>Wide Industry Reach:</strong> Ideal for beverages, dairy, juices, soups, seasonings, cosmetics, household chemicals, and hardware.</li>
                  </ol>
                </li>
              </ul>
            '
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li>食品：果汁、果凍、寵物食品、果醬、蜂蜜、醬油、油醋、沾醬、糖漿、豆腐、豆花、優格、布丁、冷凍食品、調理食品、礦泉水等。</li><li>日用美容用品：芳香劑、除濕劑、凡士林、洗髮用品、清潔用品、化妝水、乳液、洗面乳、面膜、美容產品、去光水等。</li><li>生鮮食物：水海產、水果、蔬菜、肉片等。</li><li>五金材料：五金零件、醫療器材等。</li><li>固體+液混合產品：粉圓、羊肉爐、麻油雞、小菜、年菜等。</li></ul>
            ',
            'en'=>'
              <ul><li><strong>Food:</strong> Fruit juices, jellies, pet food, jams, honey, soy sauce, vinaigrettes, dipping sauces, syrups, tofu, soybean pudding, yogurt, pudding, frozen foods, ready-to-eat meals, mineral water, etc.</li><li><strong>Daily Use & Beauty:</strong> Air fresheners, dehumidifiers, Vaseline, shampoos, cleaning supplies, toners, lotions, facial cleansers, facial masks, beauty products, nail polish remover, etc.</li><li><strong>Fresh Food:</strong> Seafood, fruits, vegetables, sliced meats, etc.</li><li>Hardware: Components, medical devices, etc.</li><li><strong>Solid-Liquid Mixtures:</strong> Tapioca pearls (Boba), lamb stew, sesame oil chicken, side dishes, Lunar New Year specialty dishes, etc.</li></ul>
            '
          ],

          'items' => [
            [
              'img' => ['ast-app-1.webp'],
              'text'  => ['zh'=>'','en'=>'']
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
                    <th>AST-1</th>
                    <th>AST-2</th>
                    <th>AST-3</th>
                    <th>AST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度(杯/分)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>2HP</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 5HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3500 x 700 x 1700</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table" style="margin-top: 2rem">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>AST-6</th>
                    <th>AST-8</th>
                    <th>AST-10</th>
                    <th>AST-12</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>4000 x 800 x 2000</td>
                    <td>4000 x 1000 x 2000</td>
                    <td>4000 x 1200 x 2000</td>
                    <td>4000 x 1500 x 2000</td>
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
                    <th>AST-1</th>
                    <th>AST-2</th>
                    <th>AST-3</th>
                    <th>AST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>2HP</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3500 x 700 x 1700</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table" style="margin-top: 2rem">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>AST-6</th>
                    <th>AST-8</th>
                    <th>AST-10</th>
                    <th>AST-12</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC 220V 5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>4000 x 800 x 2000</td>
                    <td>4000 x 1000 x 2000</td>
                    <td>4000 x 1200 x 2000</td>
                    <td>4000 x 1500 x 2000</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],

      'bst' => [
        'slug' => 'bst',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'BST 連續式盒裝充填封口機',
          'en' => 'BST Continuous Tray Bean Curd Filling & Sealing Machine',
        ],
        'type' => 'BST-1 / BST-2 / BST-3 / BST-4', 
        'image' => [
          'bst.webp',
        ],
        'image_class' => [
          'h-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              連續式盒裝充填封口機是豆腐業界不可或缺的重要包裝設備，專為豆類製品設計的充填封口機，連續式機械動作、速度快不起泡，從自動落杯、檢測、充填、封口、切刀、排出，將液體產品準確地充填到容器中，進行封盒封口確保食物、產品品質、延長保存期限、防止外界污染。高密封性、靈活多樣包裝選擇和簡單操作設計等優勢，成為豆腐生產線中不可或缺的設備。提升生產效率，確保產品安全性和新鮮度，為企業降低成本、提高市場競爭力、提升品牌強有力的支持，從市場中脫穎而出，讓包裝過程更簡單，讓產品更完美！
            ',
            'en'=>''
          ],

          'option' => [
            'zh'=>'噴墨日期機、日期機等。',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>高效自動化，提升生產效率</h4>
                  <ol>
                    <li>
                      <strong>全自動操作：</strong>
                      <span>連續式充填封口機從自動落盒、充填、檢測、封口、切刀、排出自動化生產，提高生產效率。</span>
                    </li>
                    <li>
                      <strong>高速生產能力：</strong>
                      <span>連續式充填封口機設計具有高速運行能力，能短時間完成大量包裝，滿足大規模生產需求，大幅提升產能。</span>
                    </li>
                  </ol>
                </li>

                <li>
                  <h4>高密封性，保證產品品質</h4>
                  <ol>
                    <li>
                      <strong>先進封口技術：</strong>
                      <span>連續式充填封口機使用先進的熱封封口技術，確保包裝容器密封性。封口密實避免包裝外漏或空氣進入，有效保護產品品質與新鮮度。</span>
                    </li>
                    <li>
                      <strong>防潮、防氧化：</strong>
                      <span>對於豆類製品，良好的封口能防止產品與外界的空氣與濕氣接觸，有效延長保存期限，避免氧化或腐敗。</span>
                    </li>
                  </ol>
                </li>

                <li>
                  <h4>操作簡單，維護簡便</h4>
                  <ol>
                    <li>
                      <strong>易於操作：</strong>
                      <span>連續式充填封口機配有觸控式人機畫面，操作人員能輕鬆選擇和設定包裝參數。迅速掌握操作流程，減少培訓時間。</span>
                    </li>
                    <li>
                      <strong>減少維護時間：</strong>
                      <span>設計結構簡單使用，容易維護清潔與保養方便，降低設備維護成本和生產停機時間。</span>
                    </li>
                  </ol>
                </li>

                <li>
                  <h4>食品安全與衛生保障</h4>
                  <ol>
                    <li>
                      <strong>符合食品安全標準：</strong>
                      <span>連續式充填封口機食品接觸採用SUS304材料，符合國際食品安全標準，確保包裝過程衛生安全。</span>
                    </li>
                    <li>
                      <strong>易清潔設計：</strong>
                      <span>本機結構設計簡單、方便清潔，避免交叉污染，符合食品工業的衛生要求。</span>
                    </li>
                  </ol>
                </li>
              </ul>
            ',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'applications' => [
          'intro' => [
            'zh'=>'食品: 豆腐、豆花、優格、布丁、冷凍食品等。',
            'en'=>''
          ],

          'items' => [
            [
              'img' => ['bst-app-1.webp', 'bst-app-2.webp'],
              'text'  => ['zh'=>'','en'=>'']
            ],
          ]
        ],
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
                    <th>BST-1</th>
                    <th>BST-2</th>
                    <th>BST-3</th>
                    <th>BST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>20~30</td>
                    <td>30~50</td>
                    <td>60~80</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td colspan="2">3HP</td>
                    <td colspan="2">5HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V<br>三相 1/2HP</td>
                    <td colspan="2">AC 220V<br>三相 1HP</td>
                    <td>AC 220V<br>三相 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2800 x 700 x 1600</td>
                    <td>3000 x 800 x 1700</td>
                    <td>3500 x 1200 x 1700</td>
                    <td>4000 x 1500 x 1700</td>
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
                    <th>BST-1</th>
                    <th>BST-2</th>
                    <th>BST-3</th>
                    <th>BST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>20~30</td>
                    <td>30~50</td>
                    <td>60~80</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="2">3HP</td>
                    <td colspan="2">5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td>AC 220V<br>3-Phase 1/2HP</td>
                    <td colspan="2">AC 220V<br>3-Phase 1HP</td>
                    <td>AC 220V<br>3-Phase 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>2800 x 700 x 1600</td>
                    <td>3000 x 800 x 1700</td>
                    <td>3500 x 1200 x 1700</td>
                    <td>4000 x 1500 x 1700</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],
      
      'cst' => [
        'slug' => 'cst',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'CST 杯裝充填封口包裝機 ',
          'en' => 'CST Rotary Cup Filling & Sealing Machine',
        ],
        'type' => 'CST-6 / CST-8 / CST-10 / CST-12 / CST-24', 
        'image' => [
          'cst.webp',
        ],
        'image_class' => [
          'h-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              杯裝充填封口包裝機專為果凍、布丁、咖啡膠囊、中藥沖泡杯、等物料自動充填與封口設計，從自動下杯、檢測、充填、封口、切刀、排出，能高速且精確充填封口包裝，適用於各類果凍杯、沾醬杯、小杯粉劑等包裝需求。本機採用先進技術，提升生產效率、確保產品新鮮、安全、乾淨的包裝外觀是食品廠、生技廠實現生產自動化和提升品牌市場競爭力的理想選擇。
            ',
            'en'=>'
              Designed for automated filling and sealing of jelly, pudding, coffee capsules, and herbal tea cups, this machine manages the entire process—from cup dropping and detection to filling, sealing, cutting, and discharging. It delivers high-speed, precise packaging for various jelly cups, dipping sauce containers, and small-dose powder cups. Utilizing advanced technology to boost efficiency and ensure fresh, secure, and clean packaging, it is the ideal choice for food and biotech plants to achieve automation and enhance brand competitiveness.
            '
          ],

          'option' => [
            'zh'=>'粉劑充填機、殺菌設備、噴墨日期機、日期機等。',
            'en'=>'Powder Filling Machine, Sterilization Equipment, Inkjet Coder, Date Coder, etc.'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>高效自動化</h4>
                  整個充填、封口過程自動化，提高生產效率，適應大規模生產需求，降低人力成本，提升產線運行效率。
                </li>

                <li>
                  <h4>精確充填</h4>
                  搭配先進充填系統，精準控制每杯充填容量，確保包裝一致，滿足市場對產品品質的要求。
                </li>

                <li>
                  <h4>完美封口</h4>
                  先進的熱封技術，確保每個果凍杯、容器封口緊密，保持產品新鮮與安全，延長保存期限並防止外界污染。
                </li>

                <li>
                  <h4>靈活包裝設計</h4>
                  能客製化使用不同尺寸、形狀的果凍杯，因應市場上各種規格包裝需求，符合各種形式的印刷封膜設計。
                </li>

                <li>
                  <h4>簡單操作和維護</h4>
                  簡單操作界面，配有觸控人機畫面，操作人員輕鬆設定和監控生產過程，提供快速故障診斷和維護，減少設備停機時間。
                </li>

                <li>
                  <h4>符合食品安全標準</h4>
                  全機採用符合食品級標準的SUS304材料製造，所有接觸食品的部分可輕鬆清洗，保持機器衛生，確保果凍製品符合各項安全要求。
                </li>

                <li>
                  <h4>節能環保</h4>
                  高效節能設計，能夠最大化減少能源消耗，有助於降低生產成本。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>High-Efficiency Automation</h4>
                  Automates the entire filling and sealing process, significantly boosting productivity to meet large-scale demands while reducing labor costs and enhancing line efficiency.
                </li>

                <li>
                  <h4>Precise Filling</h4>
                  Equipped with advanced filling systems to precisely control the volume of each cup, ensuring consistency and meeting strict market quality standards.
                </li>

                <li>
                  <h4>Perfect Sealing</h4>
                  Advanced heat-sealing technology ensures airtight integrity for jelly cups and containers, maintaining product freshness and safety while extending shelf life and preventing contamination.
                </li>

                <li>
                  <h4>Flexible Packaging Design</h4>
                  Customizable to various cup sizes and shapes, accommodating diverse market specifications and perfectly aligning with various printed sealing film designs.
                </li>

                <li>
                  <h4>Simple Operation & Maintenance</h4>
                  An intuitive interface with a touch-screen HMI allows operators to easily set parameters and monitor production, offering rapid diagnostics to minimize downtime.
                </li>

                <li>
                  <h4>Food Safety Compliance</h4>
                  Constructed with food-grade SUS304 stainless steel. All contact parts are easy to clean, ensuring high hygiene standards and compliance with safety regulations.
                </li>

                <li>
                  <h4>Energy Efficient & Eco-Friendly</h4>
                  Designed for high energy efficiency, minimizing power consumption to help lower overall operational costs.
                </li>
              </ul>
            '
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li>食品：果凍、果汁、寵物食品、果醬、蜂蜜、油醋醬、沾醬、糖漿等</li><li>日用美容：洗髮精、潤絲精、化妝水、乳液、洗面乳、面膜、美容液</li><li>醫藥產品：口服液、眼藥水、藥膏、藥粉</li></ul>
            ',
            'en'=>'
              <ul>
                <li>Food: Jelly, juice, pet food, jam, honey, vinaigrette, dipping sauces, syrups, etc.</li>
                <li>Beauty & Personal Care: Shampoo, hair conditioner, toner, lotion, facial cleanser, facial mask, essence/serum.</li>
                <li>Pharmaceuticals: Oral liquids, eye drops, ointments, medicinal powders.</li>
              </ul>
            '
          ],

          'items' => [
            [
              'img' => ['cst-app-1.webp','cst-app-2.webp','cst-app-3.webp'],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
          ]
        ],
        'spec' => [
          'table' => 
          [
            'zh'=>'
              <table class="spec-table" style="margin-bottom: 30px;">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>CST-6</th>
                    <th>CST-8</th>
                    <th>CST-10</th>
                    <th>CST-12</th>
                    <th>CST-24</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                    <td>400~480</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 800 x 1700</td>
                    <td>3500 x 1000 x 1700</td>
                    <td>4000 x 1200 x 1800</td>
                    <td>4500 x 1500 x 1800</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table" style="margin-bottom: 30px;">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>CST-6</th>
                    <th>CST-8</th>
                    <th>CST-10</th>
                    <th>CST-12</th>
                    <th>CST-24</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                    <td>400~480</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 800 x 1700</td>
                    <td>3500 x 1000 x 1700</td>
                    <td>4000 x 1200 x 1800</td>
                    <td>4500 x 1500 x 1800</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],

      'fst' => [
        'slug' => 'fst',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'FST 杯裝/盒裝充填封口機 (單片鋁膜封口)',
          'en' => 'FST Cup / Tray Filling & Sealing Machine (Pre-cut Foil Sealing)',
        ],
        'type' => 'FST-1 / FST-2 / FST-3 / FST-4 / FST-6 / FST-8 / FST-10 / FST-12', 
        'image' => [
          'fst.webp',
          'fst-1.webp',
          'fst-2.webp'
        ],
        'image_class' => [
          'box-style',
          'box-style',
          'box-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              杯裝和盒裝充填封口機是包裝行業中不可或缺的重要設備，廣泛應用於食品、飲料、乳製品、美容用品、五金材料等行業。從自動落杯、檢測、充填、下紙、封口、排出，將產品準確地充填到容器中，並進行密封封口，確保食物、產品品質穩定性、防止外界污染。自動化操作、精確充填技術、高密封性、靈活多樣包裝選擇和簡單操作設計等優勢，已經成為現代生產線中不可或缺的設備。不僅提升生產效率，確保產品安全性和新鮮度，為企業降低成本、提高市場競爭力、提升品牌強有力的支持，從市場中脫穎而出，讓包裝過程更簡單，讓產品更完美！
            ',
            'en'=>'
              Cup and tray filling/sealing machines are indispensable assets in the packaging industry, widely utilized in food, beverage, dairy, beauty, and hardware sectors. From automatic cup dropping, detection, and filling to foil placement, sealing, and discharging, this equipment accurately dispenses products and ensures airtight integrity to maintain quality and prevent contamination. With advantages such as automated operation, precise dosing, superior sealing, and flexible design, it has become a cornerstone of modern production lines. It not only boosts efficiency and ensures freshness but also helps enterprises reduce costs, enhance market competitiveness, and elevate brand image, making the packaging process simpler and the final product more perfect!
            '
          ],

          'option' => [
            'zh'=>'粉劑充填機、計量機、多頭秤、洗杯裝置、殺菌設備、噴墨日期機、日期機、排出輸送帶等。',
            'en'=>'Powder Filling Machine, Dosing System, Multi-head Weigher, Cup Washing Device, Sterilization Equipment, Inkjet Coder, Date Coder, Discharge Conveyor, etc.'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'',
            'en'=>''
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'', 'en'=>'']
            // ],
          ]
        ],
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li>食品：優格、乳製品、果汁、果凍、寵物食品、果醬、蜂蜜、醬油、油醋、沾醬、糖漿、布丁、礦泉水等</li><li>日用美容用品：芳香劑、除濕劑、凡士林、洗髮用品、清潔用品、化妝水、乳液、洗面乳、面膜、美容產品等</li><li>生技醫療：醫療器材等</li></ul>
            ',
            'en'=>'
              <ul>
                <li>Food: Yogurt, dairy products, fruit juice, jelly, pet food, jam, honey, soy sauce, vinaigrettes, dipping sauces, syrups, pudding, mineral water, etc.</li>
                <li>Daily Use & Beauty: Air fresheners, dehumidifiers, Vaseline, shampoos, cleaning products, toners, lotions, facial cleansers, facial masks, beauty products, etc.</li>
                <li>Biotech & Medical: Medical devices and related supplies.</li>
              </ul>
            '
          ],

          'items' => [
            [
              'img' => ['fst-app-1.webp'],
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
              <table class="spec-table" style="margin-bottom: 30px;">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>FST-1</th>
                    <th>FST-2</th>
                    <th>FST-3</th>
                    <th>FST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>2HP</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 5HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3500 x 700 x 1700</td>
                  </tr>
                </tbody>
              </table>

              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型號</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>FST-6</th>
                    <th>FST-8</th>
                    <th>FST-10</th>
                    <th>FST-12</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V 5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>4000 x 800 x 2000</td>
                    <td>4000 x 1000 x 2000</td>
                    <td>4000 x 1200 x 2000</td>
                    <td>4000 x 1500 x 2000</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table" style="margin-bottom: 30px;">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>FST-1</th>
                    <th>FST-2</th>
                    <th>FST-3</th>
                    <th>FST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>2HP</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>2500 x 500 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3000 x 600 x 1700</td>
                    <td>3500 x 700 x 1700</td>
                  </tr>
                </tbody>
              </table>

              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Spec.</span>
                      </div>
                    </th>
                    <th>FST-6</th>
                    <th>FST-8</th>
                    <th>FST-10</th>
                    <th>FST-12</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>100~120</td>
                    <td>140~160</td>
                    <td>180~200</td>
                    <td>200~240</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>7.5HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                    <td>10HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC 220V 5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                    <td>AC 220V 7.5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>4000 x 800 x 2000</td>
                    <td>4000 x 1000 x 2000</td>
                    <td>4000 x 1200 x 2000</td>
                    <td>4000 x 1500 x 2000</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],

      'rsm' => [
        'slug' => 'rsm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'RSM 轉盤式杯裝充填封口包裝機 (捲膜式)',
          'en' => 'RSM Rotary Cup Filling & Sealing Machine (Roll Film Type)',
        ],
        'type' => 'RSM-F1 / RSM-F2',
        'image' => [
          'rsm.webp',
        ],
        'image_class' => [
          'v-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              轉盤式杯裝充填封口包裝機，專為滿足小規模產能和有空間考量客戶設計從自動落杯、檢測、充填、切刀、封口、排出，提高包裝效率，縮短生產排程。精確簡便、穩定封口包裝生產設備，降低人力成本、提升工作效率從果汁到乳品、即食湯到仙草凍，杯裝盒裝封口包裝機能多元使用各種產品需求，提供解決包裝方案，讓產品在市場中脫穎而出，革新包裝，成就品質，品質至上，從包裝開始。
            ',
            'en'=>'
              The Rotary Cup Filling and Sealing Machine is specifically engineered for clients with space constraints and small-to-medium production needs. This system automates cup dropping, detection, filling, cutting, sealing, and discharging, effectively shortening production schedules. From juices and dairy to instant soups and grass jelly, this stable and user-friendly equipment offers a versatile packaging solution that reduces labor costs and enhances output. Elevate your brand with superior packaging quality—where innovation meets precision.
            '
          ],

          'option' => [
            'zh'=>'粉劑充填機、殺菌設備、噴墨日期機、日期機等。',
            'en'=>'Powder Filling Machine, Sterilization Equipment, Inkjet Coder, Date Coder, etc.'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                <h4>自動化生產</h4>
                轉盤式充填封口包裝機，從自動落杯、檢測、充填、封口、切刀、排出，提高包裝效率，縮短生產排程，滿足小規模產能和有空間考量食品廠設計。
                </li>
                <li>
                <h4>穩定可靠的性能</h4>
                精密設計和使用高品質材質確保設備運行穩定，減少故障率，延長使用年限，降低維護成本。
                </li>
                <li>
                <h4>精確充填與封口技術</h4>
                採用先進充填和封口技術，確保每樣產品充填量準確無誤，封口密封，確保產品品質和新鮮度。
                </li>
                <li>
                <h4>多元化使用</h4>
                適用各類飲品及食品，如果汁、乳製品、即食湯、仙草凍等，可客製化使用不同尺寸杯型和封口方式，靈活滿足多樣化需求。
                </li>
                <li>
                <h4>簡單易操作</h4>
                觸控式人機控制，操作簡單。具備自動檢測和故障警報功能，即使新手也能輕鬆操作，提升生產效率。
                </li>
                <li>
                <h4>符合食品安全標準</h4>
                產品接觸材質選用SUS304符合國際食品安全規範，確保生產過程中無污染。
                </li>
                <li>
                <h4>低耗能、高性能</h4>
                高效能驅動系統及精密控制系統，提高效能、降低耗能同時確保高效運行，降低生產成本。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                <h4>Automated Production</h4>
                Streamlines cup dropping, detection, filling, sealing, cutting, and discharging to optimize packaging efficiency—ideal for food plants with space limitations.
                </li>
                <li>
                <h4>Stable & Reliable Performance</h4>
                Precision-engineered with high-quality materials to ensure stable operation, lower failure rates, and extended equipment lifespan, reducing overall maintenance costs.
                </li>
                <li>
                <h4>Precision Filling & Sealing</h4>
                Utilizes advanced dosing and heat-sealing technology to guarantee accurate volume and airtight seals, preserving product quality and freshness.
                </li>
                <li>
                <h4>Versatile Applications</h4>
                Suitable for juices, dairy, instant soups, and grass jelly. Customizable for various cup sizes and sealing methods to meet diverse market demands.
                </li>
                <li>
                <h4>User-Friendly Operation</h4>
                Equipped with a touch-screen HMI for intuitive control. Features automatic detection and alarm systems, allowing even beginners to operate efficiently.
                </li>
                <li>
                <h4>Compliance with Food Safety Standards</h4>
                Contact parts are constructed from SUS304 stainless steel, adhering to international food safety standards to ensure a contamination-free process.
                </li>
                <li>
                <h4>Low Energy Consumption & High Performance</h4>
                Features a high-efficiency drive and control system that minimizes energy waste while maintaining high-speed operation and lowering production costs.
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
        'applications' => [
          'intro' => [
            'zh'=>'
              <ul><li><strong>食品：</strong>果汁、果凍、寵物食品、果醬、蜂蜜、醬油、油醋、沾醬、糖漿、豆腐、豆花、優格、布丁、冷凍食品、調理食品、礦泉水、仙草凍等</li><li><strong>日用美容用品：</strong>芳香劑、除濕劑、凡士林、洗髮用品、清潔用品、化妝水、乳液、洗面乳、面膜、美容產品、去光水等</li><li><strong>生鮮食物：</strong>水海產、水果、蔬菜、肉片等</li><li><strong>五金材料：</strong>五金零件、醫療器材等</li><li><strong>固體+液混合產品：</strong>粉圓、羊肉爐、麻油雞、小菜、年菜等</li></ul>
            ',
            'en'=>'
              <ul>
                <li><strong>Food:</strong> Juice, jelly, pet food, jam, honey, soy sauce, vinaigrettes, dipping sauces, syrups, tofu, soybean pudding, yogurt, pudding, frozen foods, ready-to-eat meals, mineral water, grass jelly, etc.</li>
                <li><strong>Daily Use & Cosmetics:</strong> Air fresheners, dehumidifiers, Vaseline, shampoos, cleaning supplies, toners, lotions, facial cleansers, facial masks, beauty products, nail polish remover, etc.</li>
                <li><strong>Fresh Food:</strong> Seafood, fruits, vegetables, sliced meats, etc.</li>
                <li><strong>Hardware & Medical:</strong> Hardware components, medical devices, etc.</li>
                <li><strong>Solid-Liquid Mixtures:</strong> Tapioca pearls, lamb stew, sesame oil chicken, side dishes, Lunar New Year specialty dishes, etc.</li>
              </ul>
            '
          ],

          'items' => [
            [
              'img' => ['rsm-app-1.webp', 'rsm-app-2.webp'],
              'text'  => ['zh'=>'', 'en'=>'']
            ],
          ]
        ],
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
                    <th>RSM-F1</th>
                    <th>RSM-F2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度 (杯/分)</td>
                    <td>18~20</td>
                    <td>30~40</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>2HP</td>
                    <td>3HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC220V</td>
                    <td>AC220V</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>1000 x 1000 x 1600</td>
                    <td>1200 x 1200 x 1600</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th>Specs / Model</th>
                    <th>RSM-F1</th>
                    <th>RSM-F2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed (cups/min)</td>
                    <td>18~20</td>
                    <td>30~40</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>2HP</td>
                    <td>3HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption</td>
                    <td>AC220V</td>
                    <td>AC220V</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H (mm)</td>
                    <td>1000 x 1000 x 1600</td>
                    <td>1200 x 1200 x 1600</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],
      ],

      'rdm' => [
        'slug' => 'rdm',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'RDM 轉盤式杯裝充填封口包裝機 (單片鋁膜封口)',
          'en' => 'RDM Rotary Cup Filling & Sealing Machine (Pre-cut Lid Type)',
        ],
        'type' => 'RDM-1 / RDM-2', 
        'image' => [
          'rdm.webp',
        ],
        'image_class' => [
          'v-style'
        ],
        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              轉盤式杯裝充填封口包裝機，專為滿足小規模產能和有空間考量客戶設計從自動落杯、檢測、充填、單片下紙、封口、排出，提高包裝效率，縮短生產排程。精確簡便且穩定的包裝生產設備，降低人力成本、提升工作效率從果汁到乳品、從即食湯到凝膠，杯裝盒裝封口包裝機能多元使用各種產品需求，提供包裝解決方案，讓產品在市場中脫穎而出，革新包裝，成就品質，品質至上，從包裝開始。
            ',
            'en'=>'
              Designed for space-efficiency and small-scale production, this rotary cup filling and sealing machine automates the entire process from cup dropping, detection, and filling to pre-cut lid placement, sealing, and discharging. This precise and stable equipment streamlines production schedules while reducing labor costs. From juices and dairy to instant soups and gels, it serves as a versatile solution for various packaging needs, helping your products stand out with superior quality and innovative packaging design.
            '
          ],

          'option' => [
            'zh'=>'粉劑充填機、殺菌設備、噴墨日期機、日期機等。',
            'en'=>'Powder Filling Machine, Sterilization Equipment, Inkjet Coder, Date Coder, etc.'
          ],

          'items' => [
            // [
            //   'img' => [''],
            //   'text'  => ['zh'=>'','en'=>'']
            // ],
          ]
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>自動化生產</h4>
                  轉盤式充填封口包裝機，從自動落杯、檢測、充填、單片下紙、封口、排出，提高包裝效率，縮短生產排程，滿足小規模產能和有空間考量食品廠設計。
                </li>
                <li>
                  <h4>穩定可靠的性能</h4>
                  精密設計和使用高品質材質確保設備運行穩定，減少故障率，延長使用年限，降低維護成本。
                </li>
                <li>
                  <h4>精確充填與封口技術</h4>
                  採用先進充填和封口技術，確保每樣產品充填量準確無誤，封口密封，確保產品品質和新鮮度。
                </li>
                <li>
                  <h4>多元化使用</h4>
                  適用各類飲品及食品，如果汁、乳製品、即食湯、仙草凍等，可客製化使用不同尺寸杯型和封口方式，靈活滿足多樣化需求。
                </li>
                <li>
                  <h4>簡單易操作</h4>
                  觸控式人機控制，操作簡單。具備自動檢測和故障警報功能，即使新手也能輕鬆操作，提升生產效率。
                </li>
                <li>
                  <h4>符合食品安全標準</h4>
                  產品接觸材料選用SUS304符合國際食品安全規範，確保生產過程中無污染。
                </li>
                <li>
                  <h4>低耗能、高性能</h4>
                  高效能驅動系統及精密控制系統，提高效能、降低耗能同時確保高效運行，降低生產成本。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>Automated Production</h4>
                  The rotary filling and sealing machine integrates automatic cup dropping, detection, filling, pre-cut lid placement, sealing, and discharging. It enhances packaging efficiency and shortens production schedules, ideally suited for food plants with space constraints or small-scale capacity needs.
                </li>
                <li>
                  <h4>Stable & Reliable Performance</h4>
                  Precision engineering combined with high-quality materials ensures stable equipment operation, effectively reducing failure rates, extending service life, and lowering maintenance costs.
                </li>
                <li>
                  <h4>Precision Filling & Sealing Technology</h4>
                  Utilizes advanced filling and sealing technology to ensure accurate dosing for every product and hermetic seals that preserve product quality and freshness.
                </li>
                <li>
                  <h4>Versatile Applications</h4>
                  Suitable for a wide range of beverages and foods, such as juices, dairy products, instant soups, and grass jelly. Customizable cup sizes and sealing methods are available to flexibly meet diverse market demands.
                </li>
                <li>
                  <h4>User-Friendly Operation</h4>
                  Features an intuitive touch-screen HMI for simple operation. Built-in automatic detection and fault alarm functions allow even inexperienced operators to master the system quickly, boosting overall productivity.
                </li>
                <li>
                  <h4>Compliance with Food Safety Standards</h4>
                  All material contact parts are made of SUS304 stainless steel, adhering to international food safety regulations to ensure a contamination-free production process.
                </li>
                <li>
                  <h4>Low Energy Consumption & High Performance</h4>
                  Equipped with a high-efficiency drive and precision control system, the machine optimizes performance while minimizing energy waste, ensuring high-speed operation and lower production costs.
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
        'applications' => [
          'intro' => [
            'zh'=>'<ul><li><strong>食品：</strong>果汁、果凍、寵物食品、果醬、蜂蜜、醬油、油醋、沾醬、糖漿、優格、冷凍食品、調理食品、礦泉水等</li><li><strong>日用美容用品：</strong>芳香劑、除濕劑、凡士林、洗髮用品、清潔用品、化妝水、乳液、洗面乳、面膜、美容產品、去光水等</li></ul>',
            'en'=>'<ul><li>Food: Juice, Jelly, Pet Food, Jam, Honey, Soy Sauce, Vinaigrette, Dipping Sauce, Syrup, Yogurt, Frozen Foods, Ready-to-eat Meals, Mineral Water, etc.</li><li>Daily Use & Beauty: Air Fresheners, Dehumidifiers, Vaseline, Shampoos, Cleaning Supplies, Toners, Lotions, Facial Cleansers, Facial Masks, Beauty Products, Nail Polish Remover, etc.</li></ul>'
          ],

          'items' => [
            [
              'img' => ['rdm-app-1.webp', 'rdm-app-2.webp'],
              'text'  => ['zh'=>'', 'en'=>'']
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
                    <th>RDM-1</th>
                    <th>RDM-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度<br>(杯/分)</td>
                    <td>18~20</td>
                    <td>36~40</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>2HP</td>
                    <td>3HP</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td>AC 220V<br>3相 1/2HP</td>
                    <td>AC 220V<br>3相 1/2HP</td>
                  </tr>
                  <tr>
                    <td class="label">機械尺寸<br>長 x 寬 x 高<br>(m/m)</td>
                    <td>1200x1200x1600</td>
                    <td>1500x1500x1700</td>
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
                    <th>RDM-1</th>
                    <th>RDM-2</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Packaging Speed<br>(cups/min)</td>
                    <td>18~20</td>
                    <td>36~40</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>2HP</td>
                    <td>3HP</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td>AC 220V<br>3-Phase 1/2HP</td>
                    <td>AC 220V<br>3-Phase 1/2HP</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Dimensions<br>L x W x H<br>(mm)</td>
                    <td>1200x1200x1600</td>
                    <td>1500x1500x1700</td>
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

      'st' => [
        'slug' => 'st',
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'ST 杯裝盒裝充填封口包裝機',
          'en' => 'ST Semi-auto Square Tray Sealing Machine',
        ],
        'type' => 'ST-1 / ST-2 / ST-3 / ST-4 / ST-5', 
        'image' => [
          'st.webp',
          'st-1.webp'
        ],
        'image_class' => [
          'h-style',
          'h-style'
        ],

        //優勢特徵
        'features' => [
          'intro' => [
            'zh'=>'
              杯裝/盒裝封口包裝機是食品行業包裝產品時不可或缺的重要設備，廣泛應用於食品、飲料、乳製品、美容用品、五金材料等行業。從自動落杯、檢測、充填、封口、切刀、排出，將產品封盒封口，確保食物、產品品質、延長保存期限、防止外界污染。高密封性、靈活多樣包裝選擇和簡單操作設計等優勢，已經成為現代生產線中不可或缺的設備。不僅提升生產效率，確保產品安全性和新鮮度，為企業降低成本、提高市場競爭力、提升品牌強有力的支持，從市場中脫穎而出，讓包裝過程更簡單，讓產品更完美！
              <p><strong>可依產品不同選購 :殺菌設備、噴墨日期機、日期機等</strong></p>
            ',
            'en'=>'
              Cup and Tray Filling & Sealing Machines are essential equipment in the food packaging industry, widely utilized across food, beverage, dairy, beauty products, and hardware sectors.<br/>
              From automatic cup dropping, detection, and precision filling to sealing, cutting, and discharging, this machine ensures perfect container sealing to maintain product quality, extend shelf life, and prevent external contamination. With its high sealing integrity, flexible packaging options, and user-friendly design, it has become an indispensable asset for modern production lines.<br/>
              Beyond boosting production efficiency and ensuring safety and freshness, our equipment helps enterprises reduce costs and enhance brand competitiveness, allowing your products to stand out in the market. We make the packaging process simpler and your products more perfect!<br/>
              <p><strong>* Optional features：Sterilization equipment, Inkjet printer, Ribbon coder, etc.</strong></p>
            '
          ],
        ],

        'applications' => [
          'intro' => [
            'zh'=>'
              <strong>1. 食品：</strong>豆腐、優格、果汁、果凍、寵物食品、果醬、蜂蜜、沾醬、糖漿、布丁等。
              <strong>2. 冷凍生鮮：</strong>水果、肉片、海產、水餃、貢丸。
              <strong>3. 日用美容用品：</strong>芳香劑、除濕劑、凡士林、洗髮用品、清潔用品、化妝水、美容產品等。
              <strong>4. 生技醫療：</strong>醫療器材等。
            ',
            'en'=>'
              <strong>1. Food:</strong> Tofu, yogurt, juice, jelly, pet food, jam, honey, dipping sauce, syrup, pudding, etc.
              <br/>
              <strong>2. Frozen & Fresh Produce:</strong> Fruit, sliced meat, seafood, dumplings, meatballs.
              <br/>
              <strong>3. Daily Care & Cosmetics:</strong> Air freshener, dehumidifier, petroleum jelly (Vaseline), shampoo, cleaning products, toner, beauty products, etc.
              <br/>
              <strong>4. Biotech & Medical:</strong> Medical devices and supplies.
            '
          ],

          'items' => [
            ['img' => ['st-sample-1.webp'], 'text'  => ['zh'=>'','en'=>'']],
            ['img' => ['st-sample-2.webp'], 'text'  => ['zh'=>'','en'=>'']],
            ['img' => ['st-sample-3.webp'], 'text'  => ['zh'=>'','en'=>'']],
            ['img' => ['st-sample-4.webp'], 'text'  => ['zh'=>'','en'=>'']],
            // ['img' => ['st-sample-5.webp'], 'text'  => ['zh'=>'','en'=>'']],
            ['img' => ['st-sample-6.webp'], 'text'  => ['zh'=>'','en'=>'']],
            ['img' => ['st-sample-7.webp'], 'text'  => ['zh'=>'','en'=>'']],
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
                    <th>ST-1</th>
                    <th>ST-2</th>
                    <th>ST-3</th>
                    <th>ST-4</th>
                    <th>ST-5</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">產能 (杯/分)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>2HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                  </tr>
                  <tr>
                    <td class="label">電力規格</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">機台尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2500 × 500 × 1700</td>
                    <td>3000 × 600 × 1700</td>
                    <td>4000 × 700 × 1700</td>
                    <td>4000 × 700 × 1700</td>
                    <td>4000 × 700 × 1700</td>
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
                    <th>ST-1</th>
                    <th>ST-2</th>
                    <th>ST-3</th>
                    <th>ST-4</th>
                    <th>ST-5</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity<br/>(Cup/Min)</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>50~60</td>
                    <td>60~100</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>2HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                    <td>5HP</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td>AC 220V 1/2HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">Dimensions<br>L x W x H (m/m)</td>
                    <td>2500 × 500 × 1700</td>
                    <td>3000 × 600 × 1700</td>
                    <td>4000 × 700 × 1700</td>
                    <td>4000 × 700 × 1700</td>
                    <td>4000 × 700 × 1700</td>
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

      'aicf' => [
        'slug' => 'aicf',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'title' => [
          'zh' => 'AICF 全自動冰淇淋充填封口包裝機',
          'en' => 'AICF Automatic Ice Cream Filling & Sealing Machine',
        ],
        'type' => 'AICF-1 / AICF-2 / AICF-4', 
        'image' => [
          'aicf.webp',
        ],
        'image_class' => [
          'h-style'
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  具備自動落杯、冰淇淋充填、配料投放及封口功能。操作簡易，調整方便。
                </li>
                <li>
                  接觸冰淇淋之零件均採用不鏽鋼材質，符合衛生標準且穩定可靠。可依需求選配單頭或雙頭充填裝置。
                </li>
                <li>
                  機台可依客戶需求進行客製化設計。適用於盒裝冰淇淋、甜筒、鑽石冰（碎冰）及配料充填等。
                </li>
                <li>
                  本機採用氣動控制運作，具備充填速度快、節省人力成本等優點。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Automatic cup dropping, ice cream filling, seasoning filling, sealing. Easy to Operating and adjusting</li>
                <li>The parts that ice cream contacted are made of stainless steel, which are hygienic and reliable. Single and dual cup filler are selective.</li>
                <li>The machine can be designed as per your request. It can fill tray ice cream, ice cream cone, diamond ice and topping ice, etc.</li>
                <li>This machine operates by pneumatic control. Works with fast filling speed and labor saving.</li>
              </ul>
            '
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
        'applications' => [
          'intro' => [
            'zh'=>'本機可充填盒裝冰淇淋、甜筒冰淇淋、鑽石冰（碎冰）及配料（淋醬/撒料）等。',
            'en'=>'It can fill tray ice cream, ice cream cone, diamond ice and topping ice, etc'
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
                    <th>AICF-1</th>
                    <th>AICF-2</th>
                    <th>AICF-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">產能 (杯/分)</td>
                    <td>20~30</td>
                    <td>30~60</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">空氣壓縮機</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7HP</td>
                  </tr>
                  <tr>
                    <td class="label">電力規格</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">機台尺寸<br>長 x 寬 x 高 (mm)</td>
                    <td>2500 × 500 × 1700</td>
                    <td>3000 × 700 × 1700</td>
                    <td>4000 × 800 × 1800</td>
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
                    <th>AICF-1</th>
                    <th>AICF-2</th>
                    <th>AICF-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity<br/>(Cup/Min)</td>
                    <td>20~30</td>
                    <td>30~60</td>
                    <td>80~100</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td>3HP</td>
                    <td>5HP</td>
                    <td>7HP</td>
                  </tr>
                  <tr>
                    <td class="label">Electric Power</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 1HP</td>
                    <td>AC 220V 2HP</td>
                  </tr>
                  <tr>
                    <td class="label">Dimensions<br>L x W x H (m/m)</td>
                    <td>2500 × 500 × 1700</td>
                    <td>3000 × 700 × 1700</td>
                    <td>4000 × 800 × 1800</td>
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
      ]
    ],

  ], // 杯裝/盒裝充填包裝機 END
]
?>