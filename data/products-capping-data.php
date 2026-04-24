<?php
// 裝盒機 Cartoning Machine // 內容管理 
return [
  'capping' => [
    // 目前沒有使用
    'slug' => 'capping',
    
    // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
    // SEO title
    'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO description
    'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO keywords
    'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

    // --- 新增：分類識別標籤
    'category_tags' => ['capping'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name // ⚡⚡⚡ 優先必填不然會造成退回
    'title' => [
      'zh' => '鎖蓋機',
      'cn' => '锁盖机',
      'en' => 'Capping Machine',
      'ko' => '캡핑기'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'main-machine.webp',
        // 'src' => 'capping/main-machine.webp',
        'caption' => [
          'zh' => '自動鎖蓋機',
          'cn' => '自动锁盖机',
          'en' => 'Automatic Capping Machine (Sealing/Press on/Screw on)',
          'ko' => '자동캡핑기 (캡핑 프레스 스크류)'
        ],
      ],
    ],

    // series-intro // 系列產品說明文字
    'intro' => [
      'zh' => '
        本機是針對各種方式的容器之封蓋作業所設計；美觀、不易損傷瓶蓋，完全符合cGMP之標準。操作簡單，可在短時間內變更不同容器封蓋作業，達到一機數用的成本效益。適用於一般化工、製藥、食品、化妝品以及清潔用品等的自動封蓋作業使用。
      ',
      'cn'=>'本机是针对各种方式的容器之封盖作业所设计；美观丶不易损伤瓶盖，完全符合cGMP之标准。操作简单，可在短时间内变更不同容器封盖作业，达到一机数用的成本效益。适用於一般化工丶制药丶食品丶化妆品以及清洁用品等的自动封盖作业使用。',
      'en' => '
        The machine is designed for containers of various forms. Being good looking, not damaging bottles and meeting cGMP rules, it is easy in operation, short change-over time for different container and caps, thus very economical for one-machine-multiple application operation. These automatic capping operations include applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
      ',
      'ko'=>'
        캡핑 시리즈 다양한 용기의 캡핑 작업이 가능하도록 설계. 캡 외관 손상없이 캡핑. cGMP 규정 준수. 단순 조작으로 짧은 시간에 다른 사이즈 캡, 용기 변경가능. 한대의 설비에서 다양한 사이즈 캡핑 가능. 각종 화학제품, 제약, 식품, 음료수, 화장품 및 세제 산업분야에서 사용.
      '
    ],

    // 系列產品列表
    'series' => [
      // products-series.php + products-detail.php
      // 自動鎖蓋機
      'automatic-screwing-machine' => [
        'slug' => 'automatic-screwing-machine',
        
        // 首頁工具
        'home_show' => true,
        'home_sort' => 3,
        
        // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
        // SEO title
        'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO description
        'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO keywords
        'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

        // New Patents 是否判定 // true 顯示，false 不顯示
        // 'new_patent' => ['enabled' => false,], 
        // 'new_patent_title' => ['zh' => '', 'en' => ''],

        // ⚡⚡⚡ 優先必填不然會造成退回
        'title' => [
          'zh' => '自動鎖蓋機',
          'cn' => '自动锁盖机',
          'en' => 'Automatic Capping Machine<br/>(Sealing/Press on/Screw on)',
          'ko' => '자동캡핑기<br/>(캡핑 프레스 스크류)'
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        // 以image_ml為優先判斷，若為空字串或Null則直接統一取用image的圖片
        'images' => [
          'automatic-screwing-machine-1.jpg',
          'automatic-screwing-machine-2.jpg',
          'automatic-screwing-machine-3.jpg',
          'automatic-screwing-machine-4.jpg',
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],
        'images_ml' => [
          'zh' => ['automatic-screwing-machine-1.jpg',],
          'cn' => ['automatic-screwing-machine-1.jpg',],
          'en' => [
            'automatic-screwing-machine-1.jpg',
            'automatic-screwing-machine-2.jpg',
            'automatic-screwing-machine-3.jpg',
            'automatic-screwing-machine-4.jpg',
          ],
          'ko' => [
            'automatic-screwing-machine-1.jpg',
            'automatic-screwing-machine-2.jpg',
            'automatic-screwing-machine-3.jpg',
            'automatic-screwing-machine-4.jpg',
          ]
        ],

        'image_class' => [
            0 => '',     // 第一張圖使用的 class
            1 => '',     // 第二張圖使用的 class
            2 => 'v-big-style',     // 第三張圖使用的 class
        ],

        // 產品大圖（有資料再使用）
        // 產品大圖對應 class

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-cap-screwing-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-cap-screwing-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-cap-screwing-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-cap-screwing-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機是針對各種方式的容器之封蓋作業所設計；美觀、不易損傷瓶蓋，完全符合cGMP之標準。操作簡單，可在短時間內變更不同容器封蓋作業，達到一機數用的成本效益。適用於一般化工、製藥、食品、化妝品以及清潔用品等的自動封蓋作業使用。
          ',
          'cn'=>'本机是针对各种方式的容器之封盖作业所设计；美观丶不易损伤瓶盖，完全符合cGMP之标准。操作简单，可在短时间内变更不同容器封盖作业，达到一机数用的成本效益。适用於一般化工丶制药丶食品丶化妆品以及清洁用品等的自动封盖作业使用。',
          'en' => '
            The machine is designed for containers of various forms. Being good looking, not damaging bottles and meeting cGMP rules, it is easy in operation, short change-over time for different container and caps, thus very economical for one-machine-multiple application operation. These automatic capping operations include applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
          ',
          'ko'=>'캡핑 시리즈 다양한 용기의 캡핑 작업이 가능하도록 설계. 캡 외관 손상없이 캡핑. cGMP 규정 준수. 단순 조작으로 짧은 시간에 다른 사이즈 캡, 용기 변경가능. 한대의 설비에서 다양한 사이즈 캡핑 가능. 각종 화학제품, 제약, 식품, 음료수, 화장품 및 세제 산업분야에서 사용.'
        ],

        // FEATURES
        'features' => [
          [
            // ⚡ 第一組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            // 備註：如要擴增不同語系不同呈現方式，可以由圖片對應語系，如果空字串或Null則該「列、行」不顯示
            'images' => [
              'zh' => ['src' => 'img-features-1.jpg', 'class' => ''], 
              'cn' => ['src' => 'img-features-1.jpg', 'class' => ''],
              'en' => ['src' => 'img-features-en-1.jpg', 'class' => ''],
              'ko' => ['src' => 'img-features-en-1.jpg', 'class' => '']
            ],
            'image_class' => '',
            'title' => [
              'zh' => '星盤扭力過載',
              'cn' => '星盘扭力过载',
              'en' => 'Roll-on cap sealing "C" -Series',
              'ko' => '롤온 캡핑 “C”-시리즈'
            ],
            'description' => [
              'zh' => '星盤附有扭力過載跳脫停機安全裝置。',
              'cn' => '星盘附有扭力过载跳脱停机安全装置。',
              'en' => 'The sealing head is a sealing roller, possible for adjustment of cap sealing tightness without affecting smooth appearance of caps. It is easy in bottle size change-over for different bottle cap sizes.',
              'ko' => '알루미늄 캡을 씌우고 실링하는 방식. 실링 강도 조절이 용이하고 실링 외관에 영향을 주지 않음. 병 사이즈 교체와 캡 사이즈 교체가 쉬움.'
            ]
          ],
          [
            // ⚡ 第二組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            'images' => [
              'zh' => ['src' => 'img-features-2.jpg', 'class' => ''], 
              'cn' => ['src' => 'img-features-2.jpg', 'class' => ''],
              'en' => ['src' => 'img-features-en-2.jpg', 'class' => 'v-style'],
              'ko' => ['src' => 'img-features-en-2.jpg', 'class' => 'v-style']
            ],
            'title' => [
              'zh' => '旋蓋',
              'cn' => '旋盖',
              'en' => 'Screw-on cap sealing "S" -Series',
              'ko' => '스크류 방식 캡 실링 “S”-시리즈'
            ],
            'description' => [
              'zh' => '旋蓋位置上設計有瓶子固定裝置，且旋蓋頭設計有扭力調整裝置，可依不同需求自由調整瓶蓋緊實度；旋蓋頭可依瓶蓋尺寸不同，輕易的進行更換。',
              'cn' => '旋盖位置上设计有瓶子固定装置，且旋盖头设计有扭力调整装置，可依不同需求自由调整瓶盖紧实度；旋盖头可依瓶盖尺寸不同，轻易的进行更换。',
              'en' => 'By using a mechanical arm to pick up the cap, place it under sealing head, precisely place it on top of bottle by the sealing head, this process ensures a very smooth and exact sealing operation. The sealing head is also equipped with adjustable torque as needed for individual cap & bottle, in addition to tension absorbing mechanism to extend sealing durability. It is easy in bottle size change-over for different bottle cap sizes.',
              'ko' => '플라스틱 캡을 기계팔을 사용해 실링 헤드 밑에 정확히 놓고 실링 헤드로 병 상부에 정확하고 부드럽게 실링함. 캡핑 헤드는 토크 조절이 가능하며 다양한 사이즈 뚜껑을 사용할 수 있음.。'
            ]
          ],
          [
            // ⚡ 第三組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            'images' => [
              'zh' => ['src' => 'img-features-3.jpg', 'class' => ''], 
              'cn' => ['src' => 'img-features-3.jpg', 'class' => ''],
              'en' => ['src' => 'img-features-en-3.jpg', 'class' => ''],
              'ko' => ['src' => 'img-features-en-3.jpg', 'class' => '']
            ],
            'image_class' => '',
            'title' => [
              'zh' => '迴轉式系列 "R" Series',
              'cn' => '回转式系列 "R" Series',
              'en' => '"R" -Series',
              'ko' => '로타리 방식 캡핑 “R”-시리즈'
            ],
            'description' => [
              'zh' => '迴轉式的設計，利用空壓將蓋子吸取，待瓶子定位，塑蓋即進行封蓋，速度快、產能高，能滿足客戶高產量的需求。',
              'cn' => '回转式的设计，利用空压将盖子吸取，待瓶子定位，塑盖即进行封盖，速度快丶产能高，能满足客户高产量的需求。',
              'en' => 'It is a rotary, multi-sealing head design for faster sealing operation to meet customer’s high volume requirement.',
              'ko' => '대량 생산 시스템에 적합한 로타리방식 캡핑 설비.'
            ]
          ],
          [
            // ⚡ 第四組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            'images' => [
              'zh' => ['src' => 'img-features-4.jpg', 'class' => ''], 
              'cn' => ['src' => 'img-features-4.jpg', 'class' => ''],
            ],
            'image_class' => '',
            'title' => [
              'zh' => '下外蓋-單頭',
              'cn' => '下外盖-单头',
            ],
            'description' => [
              'zh' => '利用機械手與取蓋擺臂將塑膠蓋勾取至鎖蓋頭下方，再利用空壓將蓋子吸，待瓶子定位，塑蓋即由上往下旋入蓋口。蓋子可以精準及順暢的鎖緊。',
              'cn' => '利用机械手与取盖摆臂将塑胶盖勾取至锁盖头下方，再利用空压将盖子吸，待瓶子定位，塑盖即由上往下旋入盖口。盖子可以精准及顺畅的锁紧。',
            ]
          ],
          [
            // ⚡ 第五組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            'images' => [
              'zh' => ['src' => 'img-features-5.jpg', 'class' => ''], 
              'cn' => ['src' => 'img-features-5.jpg', 'class' => ''],
            ],
            'image_class' => '',
            'title' => [
              'zh' => '下外蓋-多頭',
              'cn' => '下外盖-多头',
            ],
            'description' => [
              'zh' => '採用星形盤供蓋設計，方便鎖蓋頭快速取蓋，以達高速鎖蓋要求。',
              'cn' => '采用星形盘供盖设计，方便锁盖头快速取盖，以达高速锁盖要求。',
            ]
          ],
        ],

        // SPECIFICATIONS
        'spec' => [
          'table' => 
          [
            'zh'=>'
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">塑膠蓋拴緊系列 "S" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-SP</th>
                    <th>JC-CP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封蓋種類</td>
                    <td>塑膠拴緊</td>
                    <td>塑膠壓蓋</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">迴轉式系列 "RS" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-RS6</th>
                    <th>JC-RS8</th>
                    <th>JC-RS10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封蓋種類</td>
                    <td colspan="3">迴轉式塑膠拴蓋</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>70-90</td>
                    <td>90-120</td>
                    <td>120-150</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td colspan="3">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="3">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td colspan="3">600</td>
                  </tr>
                </tbody>
              </table>
            ',
            'cn'=>'
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">塑胶盖拴紧系列 "S" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-SP</th>
                    <th>JC-CP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封盖种类</td>
                    <td>塑料拴紧</td>
                    <td>塑料压盖</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源（VAC）</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率（kw）</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">回转式系列 "RS" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-RS6</th>
                    <th>JC-RS8</th>
                    <th>JC-RS10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封盖种类</td>
                    <td colspan="3">回转式塑胶拴盖</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td>70-90</td>
                    <td>90-120</td>
                    <td>120-150</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源（VAC）</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率（kw）</td>
                    <td colspan="3">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td colspan="3">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td colspan="3">600</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">"S" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-SP</th>
                    <th>JC-CP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Type</td>
                    <td>Screw-Tight plastic</td>
                    <td>Press-on plastic</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">"RS" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-RS6</th>
                    <th>JC-RS8</th>
                    <th>JC-RS10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Type</td>
                    <td colspan="3">Screw-Tight plastic</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>70-90</td>
                    <td>90-120</td>
                    <td>120-150</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="3">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="3">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td colspan="3">600</td>
                  </tr>
                </tbody>
              </table>
            ',
            'ko' => '
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">"S" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-SP</th>
                    <th>JC-CP</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">실링 방식</td>
                    <td>플라스틱 스크류 실링</td>
                    <td>플라스틱 프레스 실링</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">"RS" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-RS6</th>
                    <th>JC-RS8</th>
                    <th>JC-RS10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">실링 방식</td>
                    <td colspan="3">로터리 플라스틱 스크류 실링</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>70-90</td>
                    <td>90-120</td>
                    <td>120-150</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="3">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="3">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td colspan="3">600</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          'table_note' => [
            'zh'=>'* 其他包裝尺寸可以客製化設計',
            'en'=>'* Other packaging sizes can be customized.'
          ],
        ],

        // 產品影片
        'video' => [
            [
                'id'    => 'Rmpyfj8f6lo',
                'title' => ['en' => 'JihCheng TECH JC SP',]
            ],
        ],

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

      // 自動封蓋機 // 英文韓文沒有
      'automatic-sealing-machine' => [
        'slug' => 'automatic-sealing-machine',

        'home_show' => false,
        'home_sort' => 999,

        // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
        // SEO title
        'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO description
        'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO keywords
        'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

        // New Patents 是否判定 // true 顯示，false 不顯示
        // 'new_patent' => ['enabled' => false,], 
        // 'new_patent_title' => ['zh' => '', 'en' => ''],

        'title' => [
          'zh' => '自動封蓋機',
          'cn' => '自动封盖机',
          'en' => 'Automatic Capping Machine',
          'ko' => '자동 캡핑기',
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        'images' => [
          'automatic-sealing-machine-1.jpg'
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],

        'image_class' => [
            0 => 'bg-multiply',     // 第一張圖使用的 class
            1 => '',     // 第二張圖使用的 class
            2 => '',     // 第三張圖使用的 class
        ],

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-capping-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-capping-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-capping-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-capping-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機是針對各種方式的容器之封蓋作業所設計；美觀、不易損傷瓶蓋，完全符合cGMP之標準。操作簡單，可在短時間內變更不同容器封蓋作業，達到一機數用的成本效益。適用於一般化工、製藥、食品、化妝品以及清潔用品等的自動封蓋作業使用。
          ',
          'cn'=>'本机是针对各种方式的容器之封盖作业所设计；美观丶不易损伤瓶盖，完全符合cGMP之标准。操作简单，可在短时间内变更不同容器封盖作业，达到一机数用的成本效益。适用於一般化工丶制药丶食品丶化妆品以及清洁用品等的自动封盖作业使用。',
          'en' => '
            The machine is designed for containers of various forms. Being good looking, not damaging bottles and meeting cGMP rules, it is easy in operation, short change-over time for different container and caps, thus very economical for one-machine-multiple application operation. These automatic capping operations include applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
          ',
          'ko'=>'
            캡핑 시리즈 다양한 용기의 캡핑 작업이 가능하도록 설계. 캡 외관 손상없이 캡핑. cGMP 규정 준수. 단순 조작으로 짧은 시간에 다른 사이즈 캡, 용기 변경가능. 한대의 설비에서 다양한 사이즈 캡핑 가능. 각종 화학제품, 제약, 식품, 음료수, 화장품 및 세제 산업분야에서 사용.
          '
        ],

        // FEATURES
        'features' => [
          [
            // ⚡ 第一組：繁中、簡中（和英、韓不一樣）
            'images' => [
              'zh' => 'img-features-1.jpg',
              'cn' => 'img-features-1.jpg',
              'en' => 'img-features-1.jpg',
              'ko' => 'img-features-1.jpg'
            ],
            'image_class' => '',
            'title' => [
              'zh' => '星盤扭力過載',
              'cn' => '星盘扭力过载',
              'en' => 'Starwheel Torque Overload Protection',
              'ko' => '스타휠 토크 과부하 보호'
            ],
            'description' => [
              'zh' => '星盤附有扭力過載跳脫停機安全裝置。',
              'cn' => '星盘附有扭力过载跳脱停机安全装置。',
              'en' => 'The starwheel is equipped with a torque overload safety clutch that triggers an automatic shutdown for protection.',
              'ko' => '스타휠에는 토크 과부하 시 작동을 멈추는 안전 클러치 장치가 장착되어 있어 장비를 보호합니다.'
            ]
          ],
          [
            // ⚡ 第二組：繁中、簡中（和英、韓不一樣）
            'images' => [
              'zh' => 'img-features-2.jpg',
              'cn' => 'img-features-2.jpg',
              'en' => 'img-features-2.jpg',
              'ko' => 'img-features-2.jpg'
            ],
            'image_class' => '',
            'title' => [
              'zh' => '震動下蓋',
              'cn' => '震动下盖',
              'en' => 'Vibratory Cap Feeder',
              'ko' => '진동 캡 공급 장치'
            ],
            'description' => [
              'zh' => '利用週期性震動原理將瓶蓋規則送出，達到自動化要求。另依不同瓶蓋設計和速度要求規劃不同供蓋設備。',
              'cn' => '利用周期性震动原理将瓶盖规则送出，达到自动化要求。另依不同瓶盖设计和速度要求规划不同供盖设备。',
              'en' => 'Utilizes periodic vibration to feed caps orderly for automation. Various feeding systems can be designed based on cap types and speed requirements.',
              'ko' => '주기적인 진동 원리를 이용해 캡을 규칙적으로 공급하여 자동화를 실현합니다. 캡의 디자인과 생산 속도에 따라 다양한 공급 설비 맞춤 설계가 가능합니다.'
            ]
          ],
          [
            // ⚡ 第三組：繁中、簡中（和英、韓不一樣）
            'images' => [
              'zh' => ['src' => 'img-features-3.jpg', 'class' => 'v-style'], 
              'cn' => ['src' => 'img-features-3.jpg', 'class' => 'v-style'],
              'en' => ['src' => 'img-features-3.jpg', 'class' => 'v-style'],
              'ko' => ['src' => 'img-features-3.jpg', 'class' => 'v-style']
            ],
            'image_class' => '',
            'title' => [
              'zh' => '鋁蓋攻牙系列 "C" Series',
              'cn' => '铝盖攻牙系列 "C" Series',
              'en' => 'Aluminum ROPP Capping "C" Series',
              'ko' => '알루미늄 캡 실링 "C" 시리즈'
            ],
            'description' => [
              'zh' => '封蓋頭設計為不鏽鋼滾刀，並可自由調整封蓋緊實度，瓶蓋美觀不易受損，可依瓶蓋尺寸不同，輕易的進行更換封蓋頭，滿足客戶不同需求。',
              'cn' => '封盖头设计为不锈钢滚刀，并可自由调整封盖紧实度，瓶盖美观不易受损，可依瓶盖尺寸不同，轻易的进行更换封盖头，满足客户不同需求。',
              'en' => 'Features stainless steel rollers with adjustable sealing tightness to ensure aesthetically pleasing results without damaging caps. Heads are easily interchangeable for different sizes.',
              'ko' => '스테인리스 스틸 롤러 헤드로 설계되어 실링 강도를 자유롭게 조절할 수 있으며, 캡 손상 없이 미려하게 마감됩니다. 캡 크기에 따라 헤드 교체가 간편하여 다양한 요구를 충족합니다.'
            ]
          ],
          [
            // ⚡ 第四組：繁中、簡中（和英、韓不一樣）
            'images' => [
              'zh' => 'img-features-4.jpg',
              'cn' => 'img-features-4.jpg',
              'en' => 'img-features-4.jpg',
              'ko' => 'img-features-4.jpg'
            ],
            'image_class' => '',
            'title' => [
              'zh' => '迴轉式系列 "R" Series',
              'cn' => '回转式系列 "R" Series',
              'en' => 'Rotary Capping "R" Series',
              'ko' => '로터리 방식 "R" 시리즈'
            ],
            'description' => [
              'zh' => '迴轉式的設計，由多組封蓋頭同時進行封蓋，速度快、產能高，能滿足客戶高產量的需求。',
              'cn' => '回转式的设计，由多组封盖头同时进行封盖，速度快丶产能高，能满足客户高产量的需求。',
              'en' => 'The rotary design features multiple capping heads operating simultaneously, providing high speed and high capacity to meet mass production demands.',
              'ko' => '로터리 방식의 설계로 여러 개의 캡핑 헤드가 동시에 작동하여, 빠른 속도와 높은 생산성으로 대량 생산 요구를 완벽하게 충족합니다.'
            ]
          ],
        ],

        // SPECIFICATIONS // NULL 會統一取用預設語系
        'spec' => [
          'table' => 
          [
            'zh'=>'
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">鋁蓋攻牙系列 "C" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-CAS</th>
                    <th>JC-CA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封蓋種類</td>
                    <td>螺旋式鋁蓋</td>
                    <td>封鋁蓋</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="2">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">迴轉式系列 "RC" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-RC6</th>
                    <th>JC-RC8</th>
                    <th>JC-RC10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Type</td>
                    <td>
                      (6支式) 迴轉式封鋁蓋
                    </td>
                    <td>
                      (8支式) 迴轉式封鋁蓋
                    </td>
                    <td>
                      (10支式) 迴轉式封鋁蓋
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>70-100</td>
                    <td>90-120</td>
                    <td>100-150</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="3">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="3">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>800</td>
                    <td>850</td>
                    <td>900</td>
                  </tr>
                </tbody>
              </table>
            ',
            'cn' => '
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">铝盖攻牙系列 "C" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-CAS</th>
                    <th>JC-CA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封盖种类</td>
                    <td>螺旋式铝盖</td>
                    <td>封铝盖</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源（VAC）</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率（kw）</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td colspan="2">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">回转式系列 "RC" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-RC6</th>
                    <th>JC-RC8</th>
                    <th>JC-RC10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">封口类型</td>
                    <td>
                      (6支式) 回转式封铝盖
                    </td>
                    <td>
                      (8支式) 回转式封铝盖
                    </td>
                    <td>
                      (10支式) 回转式封铝盖
                    </td>
                  </tr>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>70-100</td>
                    <td>90-120</td>
                    <td>100-150</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">功率消耗 (kw)</td>
                    <td colspan="3">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="3">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量 (kg)</td>
                    <td>800</td>
                    <td>850</td>
                    <td>900</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en'=>'
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">"C" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-CAS</th>
                    <th>JC-CA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Type</td>
                    <td>Roll-on aluminum (R.O.P.P)</td>
                    <td>Vial-seal aluminum</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="2">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">"RC" Series</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-RC6</th>
                    <th>JC-RC8</th>
                    <th>JC-RC10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Sealing Type</td>
                    <td>
                      (6 Heads)<br/>
                      Roll-on aluminum / <br/>
                      Vial-seal aluminum
                    </td>
                    <td>
                      (8 Heads)<br/>
                      Roll-on aluminum / <br/>
                      Vial-seal aluminum
                    </td>
                    <td>
                      (10 Heads)<br/>
                      Roll-on aluminum / <br/>
                      Vial-seal aluminum
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>70-100</td>
                    <td>90-120</td>
                    <td>100-150</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="3">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="3">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>800</td>
                    <td>850</td>
                    <td>900</td>
                  </tr>
                </tbody>
              </table>
            ',
            'ko' => '
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="3">알루미늄 캡 실링 "C" 시리즈</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-CAS</th>
                    <th>JC-CA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">실링 방식</td>
                    <td>나사산 알루미늄 캡 (R.O.P.P)</td>
                    <td>바이알 알루미늄 실링</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td colspan="2">30-50</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="2">1.2</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="2">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td colspan="2">600</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr class="table-top">
                    <td colspan="4">로터리(회전식) "RC" 시리즈</td>
                  </tr>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-RC6</th>
                    <th>JC-RC8</th>
                    <th>JC-RC10</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">실링 방식</td>
                    <td>
                      (6헤드식)<br/>
                      알루미늄 캡 실링 /<br/>
                      바이알 알루미늄 실링
                    </td>
                    <td>
                      (8헤드식)<br/>
                      알루미늄 캡 실링 /<br/>
                      바이알 알루미늄 실링
                    </td>
                    <td>
                      (10헤드식)<br/>
                      알루미늄 캡 실링 /<br/>
                      바이알 알루미늄 실링
                    </td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>70-100</td>
                    <td>90-120</td>
                    <td>100-150</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="3">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="3">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="3">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>800</td>
                    <td>850</td>
                    <td>900</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],

        // 產品影片
        'video' => [
            // [
            //     'id'    => '',
            //     'title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',]
            // ],
        ],

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
  ], // END
]
?>