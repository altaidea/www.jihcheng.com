<?php
// 內容管理 // 桶蓋/隱形眼鏡封口機
return [
// Products.php
  'cap-contact-lens-sealing-machine' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['others'],
    // 'slug' => 'cap-sealing-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '桶蓋 / 隱形眼鏡封口機',
      'en' => 'Cap / Contact Lens Sealing Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'gst/gst.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'cap-contact-lens-sealing-machine',
      // series-intro
      'intro' => [
        'zh' => '專為 5 加侖水桶蓋、大型容器蓋及隱形眼鏡設計的自動化封口解決方案，確保產品密封性與衛生。',
        'en' => 'Automated sealing solutions specifically designed for 5-gallon water bottle caps, large container lids, and contact lenses, ensuring product airtightness and hygiene.'
      ],

      // products-series.php + products-detail.php
      'at' => [
        'slug' => 'at',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],
        
        'title' => [
          'zh' => 'AT 5 加侖桶蓋組立機',
          'en' => 'AT 5 Gallon Cap Assembly Machine',
          // 'zh' => 'AT 五加侖瓶蓋墊片與內塞組裝機', // 五加侖蓋自動入墊塞機 // 五加侖瓶蓋墊片與內塞組裝機
          // 'en' => 'AT 5 Gallons Cap Foam & Plug Assembly Machine',
        ],

        'type' => 'AT-1', 

        'image' => [
          'at.webp',
          'at-1.webp'
        ],

        'image_class' => [
          'h-style',
          'v-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            // 'zh'=>'
            //   5加侖桶蓋封口機特別為5加侖水桶蓋、其他大尺寸容器蓋子、隱形眼鏡而開發的封口專用機（如飲用水、飲料業、食品業、光學業等）不可或缺設備，從自動下蓋或容器、紙卷切斷、下紙、封口、排出、UV殺菌，確保每個蓋子容器不會滲漏，確保產品衛生與安全。讓封口工作變得輕鬆又快速！自動化操作，高速封口，每分鐘處理多個桶蓋，大幅提升生產效率。不僅適用於5加侖水桶，還能調整適應不同大小的桶蓋，實現靈活生產。取代人工黏貼時間、穩定封口、提高產能、降低成本、確保產品品質讓生產線運行更高效，品牌更具信譽，讓產品更具市場競爭力！
            //   <h4>「堅固耐用，讓每個封口都無懈可擊！」</h4><h4  style="margin-top: 1rem; margin-bottom: 1rem;">「封口強度，品質保障！」</h4><h4>「您的生產好幫手，精準封口，確保無憂！」</h4>
            // ',
            // 'en'=>'
            //   The 5-Gallon Cap Sealing Machine is an indispensable piece of equipment specifically developed for 5-gallon water bottle caps, other large container lids, and contact lenses (serving industries such as drinking water, beverages, food, and optics). From automatic cap/container feeding and film cutting to sealing, discharging, and UV sterilization, it ensures leak-proof integrity and guarantees hygiene and safety. Make sealing effortless and fast! With automated operation and high-speed sealing, it processes multiple caps per minute, drastically improving efficiency. It is versatile enough to be adjusted for various lid sizes, enabling flexible production. By replacing manual labeling, it stabilizes sealing quality, boosts output, reduces costs, and enhances brand credibility and market competitiveness!
            //   <h4>"Robust and durable, making every seal flawless!"</h4><h4 style="margin-top: 1rem; margin-bottom: 1rem;">"Sealing strength, quality guaranteed!"</h4><h4>"Your best production partner, precise sealing for total peace of mind!"</h4>
            // '
            'zh'=>'
              桶蓋組立機是專為桶蓋安裝和組裝設計的自動化設備，能夠快速有效、準確地完成各類桶蓋的裝配。使用先進控制系統和精密機械設計，大幅提升生產效率，確保每個桶蓋精準安裝，適用於化工、食品、日用化學等多種行業的組立包裝需求。<h4 style="margin-top: 1rem; margin-bottom: 1rem;">「封口強度，品質保障！」桶蓋組立機——提升效率，確保品質的自動化解決方案</h4>
            ',
            'en'=>'
              The 5-Gallon Cap Sealing Machine is an indispensable piece of equipment specifically developed for 5-gallon water bottle caps, other large container lids, and contact lenses (serving industries such as drinking water, beverages, food, and optics). From automatic cap/container feeding and film cutting to sealing, discharging, and UV sterilization, it ensures leak-proof integrity and guarantees hygiene and safety. Make sealing effortless and fast! With automated operation and high-speed sealing, it processes multiple caps per minute, drastically improving efficiency. It is versatile enough to be adjusted for various lid sizes, enabling flexible production. By replacing manual labeling, it stabilizes sealing quality, boosts output, reduces costs, and enhances brand credibility and market competitiveness!
              <h4>"Robust and durable, making every seal flawless!"</h4><h4 style="margin-top: 1rem; margin-bottom: 1rem;">"Sealing strength, quality guaranteed!"</h4><h4>"Your best production partner, precise sealing for total peace of mind!"</h4>
            '
          ],

          'option' => [
            // 'zh'=>'','en'=>''
          ],

          'items' => [
            // [ 'img' => [''], 'text'  => ['zh'=>'','en'=>''] ],
          ]
        ],
        
        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>提高生產效率：</h4>
                  自動化設計大大縮短了組裝時間，能夠連續工作，提升生產線整體運作效率。
                </li>
                <li>
                  <h4>降低人力成本：</h4>
                  減少人工操作，降低操作不當造成錯誤，降低人事成本和風險。
                </li>
                <li>
                  <h4>保證產品一致性：</h4>
                  自動化控制系統確保每個桶蓋組立安裝、穩定，提升產品一致性和合格率。
                </li>
                <li>
                  <h4>高效封口速度</h4>
                  高速封口設計，可以在短時間完成每個桶蓋封口，提升整體生產線的效率，特別適合需求量大的生產線。
                </li>
                <li>
                  <h4>穩定可靠：</h4>
                  強化機械結構及先進驅動系統，長時間穩定運行，減少設備故障率。
                </li>
                <li>
                  <h4>環保節能：</h4>
                  設計符合現代節能要求，降低能源消耗，減少生產過程中環境影響。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  The machine is foam and plug assembly machine for 5 gallons water bottle cap.<br/>
                  The assembled caps can prevent 5 gallons water bottle from leaking water.
                </li>
                <li>
                  It is designed for 5 gallons water bottle caps.
                </li>
                <li>
                  It can operate with 5 gallons water bottle cap sealing machine (model: GST) produced by us.
                </li>
              </ul>
            '
            // 'zh'=>'
            //   <ul>
            //     <li>
            //       <h4>強力密封效果</h4>
            //       本機確保桶蓋和封膜間密封效果，防止滲漏或污染，適用於食品、水、化學品等容器封口，保證內部產品完整性和安全性。
            //     </li>
            //     <li>
            //       <h4>自動化生產</h4>
            //       自動化操作系統，從自動下蓋、紙卷切斷、封口、排出、UV 消菌，自動化完成封口過程，減少人工操作時間，提升生產效率，適用於大產能生產環境。
            //     </li>
            //     <li>
            //       <h4>適用於 5 加侖及多種尺寸</h4>
            //       專為 5 加侖桶蓋設計，可以客製化設計不同大小的桶蓋，提供更好靈活性。
            //     </li>
            //     <li>
            //       <h4>高效封口速度</h4>
            //       高速封口設計，可以在短時間完成每個桶蓋封口，提升整體生產線的效率，特別適合需求量大的生產線。
            //     </li>
            //     <li>
            //       <h4>可調封口壓力</h4>
            //       可根據桶蓋材質調整封口壓力與溫度，進行準確封口設定，確保最佳密封效果。
            //     </li>
            //     <li>
            //       <h4>堅固耐用結構</h4>
            //       採用高品質的材料，如不銹鋼與耐用合金製成，抗腐蝕、耐磨損，適應長時間、高頻率的工作環境需求，確保設備穩定性和耐用性。
            //     </li>
            //     <li>
            //       <h4>簡單易用</h4>
            //       操作簡單，無需繁複設置，啟動機器即可完成封口過程，適合各種使用者。
            //     </li>
            //     <li>
            //       <h4>節能設計</h4>
            //       節能高效，使用現代化節能系統，減少能源消耗，適應長期運行，提高運營效率並降低達到能源消耗。
            //     </li>
            //     <li>
            //       <h4>安全防護設計</h4>
            //       配備多重安全保護功能，如過載保護、過熱保護和操作錯誤警示，確保使用過程中的人身安全和設備保護。
            //     </li>
            //     <li>
            //       <h4>多用途封口技術</h4>
            //       5 加侖桶蓋封口機支援多種封口方式，如熱封、冷封、壓力封等，適用於不同類型的桶蓋和容器。
            //     </li>
            //     <li>
            //       <h4>提升產品品質與品牌形象</h4>
            //       準確封口技術提高產品密封性和整體包裝品質，提升產品品牌形象，確保消費者在使用時的安全性。
            //     </li>
            //     <li>
            //       <h4>低維護需求</h4>
            //       簡單面板操作設計並使用耐用材質，減少日常維護，降低運營成本和停機時間。
            //     </li>
            //   </ul>
            // ',
            // 'en'=>'
            //   <ul>
            //     <li>
            //       <h4>Powerful Sealing Effect</h4>
            //       Ensures a perfect seal between the cap and film to prevent leakage or contamination. Suitable for food, water, and chemical containers, guaranteeing product integrity and safety.
            //     </li>
            //     <li>
            //       <h4>Automated Production</h4>
            //       A fully automated system—from cap dropping and film cutting to sealing, discharging, and UV sterilization—optimizing production speed and reducing labor costs for high-capacity environments.
            //     </li>
            //     <li>
            //       <h4>Compatible with 5-Gallon & Various Sizes</h4>
            //       Specifically designed for 5-gallon pails, with customizable options for different cap dimensions to provide maximum flexibility.
            //     </li>
            //     <li>
            //       <h4>High-Speed Sealing</h4>
            //       The high-speed design completes each sealing cycle in a short timeframe, significantly boosting overall production line efficiency for high-demand operations.
            //     </li>
            //     <li>
            //       <h4>Adjustable Sealing Pressure</h4>
            //       Allows precise adjustment of sealing pressure and temperature based on cap material, ensuring the most optimal and secure seal.
            //     </li>
            //     <li>
            //       <h4>Robust & Durable Construction</h4>
            //       Built with premium materials like stainless steel and durable alloys. Corrosion-resistant and wear-resistant, it withstands long-term, high-frequency industrial use.
            //     </li>
            //     <li>
            //       <h4>Simple & Easy to Use</h4>
            //       Features an intuitive operation process with no complex setups required. Start the machine to complete the sealing process, suitable for all operators.
            //     </li>
            //     <li>
            //       <h4>Energy-Efficient Design</h4>
            //       Utilizes modern energy-saving systems to minimize power consumption during long-term operation, improving efficiency while lowering overhead.
            //     </li>
            //     <li>
            //       <h4>Safety Protection Features</h4>
            //       Equipped with multiple safety safeguards, including overload protection, overheat protection, and fault alerts to ensure personnel and equipment safety.
            //     </li>
            //     <li>
            //       <h4>Versatile Sealing Technology</h4>
            //       Supports various methods such as heat sealing, cold sealing, and pressure sealing, adaptable to different cap types and container requirements.
            //     </li>
            //     <li>
            //       <h4>Enhanced Quality & Brand Image</h4>
            //       Precision sealing enhances product aesthetics and integrity, elevating the brand image and ensuring consumer safety upon use.
            //     </li>
            //     <li>
            //       <h4>Low Maintenance Requirements</h4>
            //       Designed with a simple control panel and durable materials to minimize routine maintenance, reducing downtime and operational costs.
            //     </li>
            //   </ul>
            // '
          ],
        ],

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'飲用水、飲料業、食品業、光學業等',
            'en'=>'Drinking water, beverage industry, food industry, optics industry, etc.'
          ],

          'items' => [
            [
              'img' => ['at-sample-1.webp', 'at-sample-2.webp'],
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
                    <th>AT-1</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度</td>
                    <td>20～30</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220－415V（可依不同國家客製）</td>
                  </tr>
                  <tr>
                    <td class="label">空壓機</td>
                    <td colspan="3">3HP（空壓機由客人自備）</td>
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
                    <th>AT-1</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity (cap/min)</td>
                    <td>20–30 pcs/min</td>
                  </tr>
                  <tr>
                    <td class="label">Electric power</td>
                    <td colspan="3">AC 220–415V (Customizable by country)</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="3">3HP (Air compressor provided by customer)</td>
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

      'gst' => [
        'slug' => 'gst',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => true,], 
        'new_patent_title' => ['zh' => '榮獲食品給料及膠膜冲切貼合等二項新專利', 'en' => ''],
        
        'title' => [
          // 'zh' => 'GST 5加侖桶裝水蓋封口機 (隱形眼鏡封口機)',
          // 'en' => 'GST 5 Gallons Water Bottle Cap Sealing Machine (Contact Lens Sealing M/C)',
          'zh' => 'GST 三統自動桶蓋封口機',
          'en' => 'GST 5 Gallon Cap Sealing Machine',
        ],

        'type' => 'GST-1 / GST-2 / GST-4', 

        'image' => [
          'gst.webp',
          'gst-1.webp',
        ],

        'image_class' => [
          'h-style',
          'box-style',
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'
              5加侖桶蓋封口機特別為5加侖水桶蓋、其他大尺寸容器蓋子、隱形眼鏡而開發的封口專用機（如飲用水、飲料業、食品業、光學業等）不可或缺設備，從自動下蓋或容器、紙卷切斷、下紙、封口、排出、UV殺菌，確保每個蓋子容器不會滲漏，確保產品衛生與安全。讓封口工作變得輕鬆又快速！自動化操作，高速封口，每分鐘處理多個桶蓋，大幅提升生產效率。不僅適用於5加侖水桶，還能調整適應不同大小的桶蓋，實現靈活生產。取代人工黏貼時間、穩定封口、提高產能、降低成本、確保產品品質讓生產線運行更高效，品牌更具信譽，讓產品更具市場競爭力！
              <h4>「堅固耐用，讓每個封口都無懈可擊！」</h4><h4  style="margin-top: 1rem; margin-bottom: 1rem;">「封口強度，品質保障！」</h4><h4>「您的生產好幫手，精準封口，確保無憂！」</h4>
            ',
            'en'=>'
              Specifically developed for 5-gallon water pails, large container lids, and contact lenses, the GST series is essential for the beverage, food, and optical industries. The process—including automatic cap feeding, film cutting, heat sealing, discharging, and UV sterilization—ensures an airtight finish to prevent leaks and maintain hygiene. It streamlines production with automated, high-speed operation, replacing manual labor to reduce costs and increase output. Its adjustable design accommodates various lid sizes, ensuring a high-quality production line that builds brand trust and market presence.
              <h4>"Engineered for durability, delivering impeccable seals every time!"</h4><h4 style="margin-top: 1rem; margin-bottom: 1rem;">"Superior seal strength, guaranteed quality!"</h4><h4>"Your reliable production assistant, ensuring precision and peace of mind!"</h4>
            '
          ],

          'option' => [
            // 'zh'=>'','en'=>''
          ],

          'items' => [
            // [ 'img' => [''], 'text'  => ['zh'=>'','en'=>''] ],
          ]
        ],

        // FEATURES
        'features' => [
          'intro' => [
            'zh'=>'
              <ul>
                <li>
                  <h4>強力密封效果</h4>
                  本機確保桶蓋和封膜間密封效果，防止滲漏或污染，適用於食品、水、化學品等容器封口，保證內部產品完整性和安全性。
                </li>
                <li>
                  <h4>自動化生產</h4>
                  自動化操作系統，從自動下蓋、紙卷切斷、封口、排出、UV 消菌，自動化完成封口過程，減少人工操作時間，提升生產效率，適用於大產能生產環境。
                </li>
                <li>
                  <h4>適用於 5 加侖及多種尺寸</h4>
                  專為 5 加侖桶蓋設計，可以客製化設計不同大小的桶蓋，提供更好靈活性。
                </li>
                <li>
                  <h4>高效封口速度</h4>
                  高速封口設計，可以在短時間完成每個桶蓋封口，提升整體生產線的效率，特別適合需求量大的生產線。
                </li>
                <li>
                  <h4>可調封口壓力</h4>
                  可根據桶蓋材質調整封口壓力與溫度，進行準確封口設定，確保最佳密封效果。
                </li>
                <li>
                  <h4>堅固耐用結構</h4>
                  採用高品質的材料，如不銹鋼與耐用合金製成，抗腐蝕、耐磨損，適應長時間、高頻率的工作環境需求，確保設備穩定性和耐用性。
                </li>
                <li>
                  <h4>簡單易用</h4>
                  操作簡單，無需繁複設置，啟動機器即可完成封口過程，適合各種使用者。
                </li>
                <li>
                  <h4>節能設計</h4>
                  節能高效，使用現代化節能系統，減少能源消耗，適應長期運行，提高運營效率並降低達到能源消耗。
                </li>
                <li>
                  <h4>安全防護設計</h4>
                  配備多重安全保護功能，如過載保護、過熱保護和操作錯誤警示，確保使用過程中的人身安全和設備保護。
                </li>
                <li>
                  <h4>多用途封口技術</h4>
                  5 加侖桶蓋封口機支援多種封口方式，如熱封、冷封、壓力封等，適用於不同類型的桶蓋和容器。
                </li>
                <li>
                  <h4>提升產品品質與品牌形象</h4>
                  準確封口技術提高產品密封性和整體包裝品質，提升產品品牌形象，確保消費者在使用時的安全性。
                </li>
                <li>
                  <h4>低維護需求</h4>
                  簡單面板操作設計並使用耐用材質，減少日常維護，降低運營成本和停機時間。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>
                  <h4>Powerful Sealing Effect</h4>
                  Ensures a perfect seal between the cap and film to prevent leakage or contamination. Suitable for food, water, and chemical containers, guaranteeing product integrity and safety.
                </li>
                <li>
                  <h4>Automated Production</h4>
                  A fully automated system—from cap dropping and film cutting to sealing, discharging, and UV sterilization—optimizing production speed and reducing labor costs for high-capacity environments.
                </li>
                <li>
                  <h4>Compatible with 5-Gallon & Various Sizes</h4>
                  Specifically designed for 5-gallon pails, with customizable options for different cap dimensions to provide maximum flexibility.
                </li>
                <li>
                  <h4>High-Speed Sealing</h4>
                  The high-speed design completes each sealing cycle in a short timeframe, significantly boosting overall production line efficiency for high-demand operations.
                </li>
                <li>
                  <h4>Adjustable Sealing Pressure</h4>
                  Allows precise adjustment of sealing pressure and temperature based on cap material, ensuring the most optimal and secure seal.
                </li>
                <li>
                  <h4>Robust & Durable Construction</h4>
                  Built with premium materials like stainless steel and durable alloys. Corrosion-resistant and wear-resistant, it withstands long-term, high-frequency industrial use.
                </li>
                <li>
                  <h4>Simple & Easy to Use</h4>
                  Features an intuitive operation process with no complex setups required. Start the machine to complete the sealing process, suitable for all operators.
                </li>
                <li>
                  <h4>Energy-Efficient Design</h4>
                  Utilizes modern energy-saving systems to minimize power consumption during long-term operation, improving efficiency while lowering overhead.
                </li>
                <li>
                  <h4>Safety Protection Features</h4>
                  Equipped with multiple safety safeguards, including overload protection, overheat protection, and fault alerts to ensure personnel and equipment safety.
                </li>
                <li>
                  <h4>Versatile Sealing Technology</h4>
                  Supports various methods such as heat sealing, cold sealing, and pressure sealing, adaptable to different cap types and container requirements.
                </li>
                <li>
                  <h4>Enhanced Quality & Brand Image</h4>
                  Precision sealing enhances product aesthetics and integrity, elevating the brand image and ensuring consumer safety upon use.
                </li>
                <li>
                  <h4>Low Maintenance Requirements</h4>
                  Designed with a simple control panel and durable materials to minimize routine maintenance, reducing downtime and operational costs.
                </li>
              </ul>
            '
          ],
        ],

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'五加侖桶蓋、隱形眼鏡。',
            'en'=>'Five-gallon cap, contact lens.'
          ],

          'items' => [
            [
              'img' => ['gst-sample-1.webp','gst-sample-2.webp','gst-sample-3.webp','gst-sample-4.webp','gst-sample-5.webp'],
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
                    <th>GST-1</th>
                    <th>GST-2</th>
                    <th>GST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝速度</td>
                    <td>15~20</td>
                    <td>30~40</td>
                    <td>70~80</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="3">AC 220－415V（可依不同國家客製）</td>
                  </tr>
                  <tr>
                    <td class="label">空壓機</td>
                    <td colspan="3">3HP－7.5HP（空壓機由客人自備）</td>
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
                    <th>GST-1</th>
                    <th>GST-2</th>
                    <th>GST-4</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Capacity (pcs/min)</td>
                    <td>15–20 pcs/min</td>
                    <td>30–40 pcs/min</td>
                    <td>70–80 pcs/min</td>
                  </tr>
                  <tr>
                    <td class="label">Electric power</td>
                    <td colspan="3">AC 220–415V (Customizable by country)</td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="3">3HP–7.5HP (Air compressor provided by customer)</td>
                  </tr>
                </tbody>
              </table>
            '
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

  ], // 桶蓋/隱形眼鏡封口機 END
]
?>