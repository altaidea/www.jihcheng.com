<?php
// 氣洗機 // 內容管理 // 韓文版沒有
return [
// Products.php
  'airWashing' => [
    // 目前沒有使用
    'slug' => 'airWashing',
    
    // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
    // SEO title
    'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO description
    'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO keywords
    'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

    // --- 新增：分類識別標籤
    'category_tags' => ['airWashing'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    // 'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '氣洗機',
      'cn' => '气洗机',
      'en' => 'Air Rinsing Machine',
      'ko' => '에어 린싱기'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'main-machine.webp',
        // 'src' => 'airWashing/main-machine.webp',
        'caption' => [
          'zh' => '自動氣洗機',
          'cn' => '自动气洗机',
          'en' => 'Automatic Air Washing Machice',
          'ko' => '자동 에어 세척기'
        ],
        'image_class' => 'bg-multiply', // ⭐ 在這裡指定 CSS Class
      ],
    ],

    // series-intro
    'intro' => [
      'zh' => '
        本機是運用乾淨空氣噴洗容器內部，並加真空吸引將瓶內微粒吸出，達到容器清潔的效果。在設計上採直線運動方式，利用PLC邏輯控制及各種感應裝置及汽缸的收放，達到自動控制的目的。且符合cGMP之標準。操作簡單，可在短時間內變更不同的容器清潔作業。適用於一般化工、製藥、食品、化粧品、清潔用品等的自動化作業使用。
      ',
      'cn'=>'本机是运用乾净空气喷洗容器内部，并加真空吸引将瓶内微粒吸出，达到容器清洁的效果。在设计上采直线运动方式，利用PLC逻辑控制及各种感应装置及汽缸的收放，达到自动控制的目的。且符合cGMP之标准。操作简单，可在短时间内变更不同的容器清洁作业。适用於一般化工丶制药丶食品丶化妆品丶清洁用品等的自动化作业使用。',
      'en' => '
        This is a automatic washing machine of air clean, with air sucking to take out the particle of bottle. It is a straight-line system, using pneumatic cylinders and other sensor with PLC control for bottle positioning and meet cGMP requirement. It is easy in operation, short change-over time for difference containers. The automatic air washing applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
      ',
      'ko' => '
        본 장비는 청정 공기로 용기 내부를 분사 세척하고, 진공 흡입 방식을 더해 병 안의 미세 입자를 제거함으로써 완벽한 세정 효과를 제공합니다. 직선형 이동 방식 설계로 PLC 로직 제어와 다양한 감지 장치 및 실린더 구동을 통해 정밀한 자동 제어를 실현하며, cGMP 기준을 충족합니다. 조작이 간편하여 단시간 내에 다양한 용기에 맞춰 세척 작업 설정을 변경할 수 있습니다. 일반 화학, 제약, 식품, 화장품, 세제 등 다양한 산업 분야의 자동화 공정에 적합합니다.
      ',
    ],

    // 系列產品列表
    'series' => [
      // products-series.php + products-detail.php
      'automatic-air-washing-machice' => [
        'slug' => 'automatic-air-washing-machice',
        
        // 首頁工具
        'home_show' => true,
        'home_sort' => 5,

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
          'zh' => '自動氣洗機',
          'cn' => '自动气洗机',
          'en' => 'Automatic Air Washing Machice',
          'ko' => '자동 에어 세척기'
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        'images' => [
          'automatic-air-washing-machice-1.jpg'
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],
        'images_ml' => [
          // 'zh' => [''],
          // 'cn' => [''],
          // 'en' => [''],
          // 'ko' => ['']
        ],

        'image_class' => [
            0 => 'bg-multiply',     // 第一張圖使用的 class
            1 => '',     // 第二張圖使用的 class
            2 => '',     // 第三張圖使用的 class
        ],

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-air-washing-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-air-washing-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-air-washing-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-air-washing-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機是運用乾淨空氣噴洗容器內部，並加真空吸引將瓶內微粒吸出，達到容器清潔的效果。在設計上採直線運動方式，利用PLC邏輯控制及各種感應裝置及汽缸的收放，達到自動控制的目的。且符合cGMP之標準。操作簡單，可在短時間內變更不同的容器清潔作業。適用於一般化工、製藥、食品、化粧品、清潔用品等的自動化作業使用。
          ',
          'cn'=>'本机是运用乾净空气喷洗容器内部，并加真空吸引将瓶内微粒吸出，达到容器清洁的效果。在设计上采直线运动方式，利用PLC逻辑控制及各种感应装置及汽缸的收放，达到自动控制的目的。且符合cGMP之标准。操作简单，可在短时间内变更不同的容器清洁作业。适用於一般化工丶制药丶食品丶化妆品丶清洁用品等的自动化作业使用。',
          'en' => '
            This is a automatic washing machine of air clean, with air sucking to take out the particle of bottle. It is a straight-line system, using pneumatic cylinders and other sensor with PLC control for bottle positioning and meet cGMP requirement. It is easy in operation, short change-over time for difference containers. The automatic air washing applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
          ',
          'ko' => '
            본 장비는 청정 공기로 용기 내부를 분사 세척하고, 진공 흡입 방식을 더해 병 안의 미세 입자를 제거함으로써 완벽한 세정 효과를 제공합니다. 직선형 이동 방식 설계로 PLC 로직 제어와 다양한 감지 장치 및 실린더 구동을 통해 정밀한 자동 제어를 실현하며, cGMP 기준을 충족합니다. 조작이 간편하여 단시간 내에 다양한 용기에 맞춰 세척 작업 설정을 변경할 수 있습니다. 일반 화학, 제약, 식품, 화장품, 세제 등 다양한 산업 분야의 자동화 공정에 적합합니다.
          ',
        ],

        // FEATURES
        'features' => [
          [
            // ⚡ 第一組：Starwheel (左文右圖)
            'images' => [
              'zh' => 'img-features-1.jpg',
              'cn' => 'img-features-1.jpg',
              'en' => 'img-features-1.jpg',
              'ko' => 'img-features-1.jpg'
            ],
            'title' => [
              'zh' => '翻轉裝置',
              'cn' => '翻转装置',
              'en' => 'Bottle reverse system',
              'ko' => '용기 반전 장치'
            ],
            'description' => [
              'zh' => '翻轉系統採用伺服馬達驅動系統，搭配特殊設計夾瓶架，夾瓶翻轉動作順暢，可以準確對準清洗針。',
              'cn' => '翻转系统采用伺服马达驱动系统，搭配特殊设计夹瓶架，夹瓶翻转动作顺畅，可以准确对准清洗针。',
              'en' => 'The bottle reverse system adopt servo motor with special design bottle holder to ensures smooth rinsing action, also provides easier adjustments.',
              'ko' => '반전 시스템은 서보 모터 구동 방식을 채택하고 특수 설계된 그리퍼를 결합하여, 용기 반전 동작이 부드러우며 세척 노즐과 정확하게 정렬됩니다.'
            ]
          ],
          [
            // ⚡ 第二組：Steel type wheel (右文左圖)
            'images' => [
              'zh' => 'img-features-2.jpg',
              'cn' => 'img-features-2.jpg',
              'en' => 'img-features-2.jpg',
              'ko' => 'img-features-2.jpg'
            ],
            'title' => [
              'zh' => '吹吸針',
              'cn' => '吹吸针',
              'en' => 'Blow & suck nozzle',
              'ko' => '에어 블로우 및 흡입 노즐'
            ],
            'description' => [
              'zh' => '吹氣針採用不鏽鋼#316材質，潛入式設計可確實將瓶內完全清洗，清潔效能佳。再經由真空收集裝置將微粒吸出排出機器以避免污染。',
              'cn' => '吹气针采用不锈钢#316材质，潜入式设计可确实将瓶内完全清洗，清洁效能佳。再经由真空收集装置将微粒吸出排出机器以避免污染。',
              'en' => 'The Blow nozzle material in SUS 316#, action in insert to the bottle for clean. And with air sucking system to discharge out the particle to avoid contamination.',
              'ko' => '세척 노즐은 스테인리스 SUS316 재질이며, 다이빙(Diving) 설계로 용기 내부를 확실하게 세척하여 뛰어난 세정력을 자랑합니다. 또한 진공 흡입 장치를 통해 미세 입자를 외부로 배출하여 교차 오염을 방지합니다.'
            ]
          ],
          [
            // ⚡ 第三組：Insert (左文右圖 - 索引為 3，故會自動維持左文右圖的節奏)
            'images' => [
              'zh' => 'img-features-3.jpg',
              'cn' => 'img-features-3.jpg',
              'en' => 'img-features-3.jpg',
              'ko' => 'img-features-3.jpg'
            ],
            'title' => [
              'zh' => '雙翻裝置',
              'cn' => '双翻装置',
              'en' => 'Double unit device',
              'ko' => '더블 유닛 장치'
            ],
            'description' => [
              'zh' => '採用二組翻轉系統和雙邊吹吸針設計，避免因洗瓶時間而延誤作業，達到加倍的產能。',
              'cn' => '采用二组翻转系统和双边吹吸针设计，避免因洗瓶时间而延误作业，达到加倍的产能。',
              'en' => 'Use 2 sets bottle reverse and nozzle device. It is save time and reach more speed.',
              'ko' => '두 세트의 반전 시스템과 양방향 세척 노즐 설계를 적용하여, 세척 공정으로 인한 지연을 방지하고 생산 능력을 두 배로 향상시켰습니다.'
            ]
          ],
          [
            // ⚡ 第四組：Insert (右文左圖 - 索引為 4，故會自動維持右文左圖的節奏)
            'images' => [
              'zh' => 'img-features-4.jpg',
              'cn' => 'img-features-4.jpg',
              'en' => 'img-features-4.jpg',
              'ko' => 'img-features-4.jpg'
            ],
            'title' => [
              'zh' => '高品質潔淨空氣',
              'cn' => '高品质洁净空气',
              'en' => 'Air filter',
              'ko' => '고품질 청정 공기'
            ],
            'description' => [
              'zh' => '壓縮空氣附有高品質過濾器，可達到 0.01 micron 的潔淨空氣。',
              'cn' => '压缩空气附有高品质过滤器，可达到0.01 micron 的洁净空气。',
              'en' => 'With air filter to 0.01 micro to get sanitary air for bottle clean.',
              'ko' => '고성능 필터가 장착된 압축 공기 시스템을 통해 0.01 micron 수준의 청정 공기를 공급하여 위생적인 세척이 가능합니다.'
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
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-AW-750-1R</th>
                    <th>JC-AW-750-2R</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產速度 (bpm)</td>
                    <td>40~50 (60cc)</td>
                    <td>80~100 (60cc)</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源 (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率 (kw)</td>
                    <td colspan="2">2.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量 (min)</td>
                    <td colspan="2">7 Kgs x 108 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">乾淨空氣 (min)</td>
                    <td colspan="2">7 Kgs x 200 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機械重量 (kg)</td>
                    <td>550</td>
                    <td>650</td>
                  </tr>
                </tbody>
              </table>
            ',
            'cn' => '
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-AW-750-1R</th>
                    <th>JC-AW-750-2R</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>40~50 (60cc)</td>
                    <td>80~100 (60cc)</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率 (kw)</td>
                    <td colspan="2">2.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="2">7 Kgs x 108 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">洁净空气 (min)</td>
                    <td colspan="2">7 Kgs x 200 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机械重量 (kg)</td>
                    <td>550</td>
                    <td>650</td>
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
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-AW-750-1R</th>
                    <th>JC-AW-750-2R</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>40~50 (60cc)</td>
                    <td>80~100 (60cc)</td>
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
                    <td colspan="2">2.0</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="2">7 Kgs x 108 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Clean Air Consumption (min)</td>
                    <td colspan="2">7 Kgs x 200 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
                    <td>650</td>
                  </tr>
                </tbody>
              </table>
            ',
            'ko' => '
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-AW-750-1R</th>
                    <th>JC-AW-750-2R</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>40~50 (60cc)</td>
                    <td>80~100 (60cc)</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="2">2.0</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="2">7 Kgs x 108 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">청정 공기 소모량 (min)</td>
                    <td colspan="2">7 Kgs x 200 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>550</td>
                    <td>650</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          // 'table_note' => [
          //   'zh'=>'* 其他包裝尺寸可以客製化設計',
          //   'en'=>'* Other packaging sizes can be customized.'
          // ],
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