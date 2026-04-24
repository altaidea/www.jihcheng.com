<?php
// 裝盒機 Cartoning Machine // 內容管理 
return [
  // products-series.php
  'cartoning' => [
    // 目前沒有使用
    'slug' => 'cartoning',
    
    // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
    // 留意空一串與Null的差異
    // SEO title
    'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO description
    'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO keywords
    'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

    // --- 新增：分類識別標籤
    'category_tags' => ['cartoning'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '裝盒機',
      'cn' => '装盒机',
      'en' => 'Cartoning Machine',
      'ko' => '카토닝 머신'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'main-machine.webp',
        // 'src' => 'cartoning/main-machine.webp',
        'caption' => [
          'zh' => '水平式自動裝盒機',
          'cn' => '水平式自动装盒机',
          'en' => 'Automatic Horizontal Cartoning Machine',
          'ko' => '수평형자동포장기',
        ],
      ],
    ],

    // series-intro
    'intro' => [
      'zh' => '透過我們最新的自動化包裝解決方案，體驗生產的未來。本系統專為無縫整合而設計，結合了高速精確性與直覺式使用者介面，能極大化食品、飲料及醫療產業的生產效率。憑藉更智慧、更具擴展性的工作流程，重新定義您的製造標準。',
      'cn' => '通过我们最新的自动化包装解决方案，体验生产的未来。本系统专为无缝整合而设计，结合了高速精确性与直观式用户界面，能极大化食品、饮料及医疗产业的生产效率。凭借更智能、更具扩展性的工作流程，重新定义您的制造标准。',
      'en' => 'Experience the future of production with our latest automated packaging solution. Engineered for seamless integration, this system combines high-speed precision with an intuitive UI to maximize efficiency in food, beverage, and medical sectors. Redefine your manufacturing standards with a smarter, more scalable workflow.',
      'ko' => '당사의 최신 자동화 패키징 솔루션으로 생산의 미래를 경험해 보십시오. 원활한 통합을 위해 설계된 이 시스템은 고속 정밀도와 직관적인 UI를 결합하여 식품, 음료 및 의료 분야의 효율성을 극대화합니다. 더 스마트하고 확장 가능한 워크플로우로 제조 표준을 새롭게 정의하십시오.'
    ],

    // 系列產品列表
    'series' => [
      // products-series.php + products-detail.php
      'automatic-horizontal-cartoning-machine' => [
        'slug' => 'automatic-horizontal-cartoning-machine',
        // 首頁工具
        'home_show' => true,
        'home_sort' => 1,
        
        // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
        // SEO title
        'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO description
        'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
        // SEO keywords
        'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],

        // ⚡⚡⚡ 優先必填不然會造成退回
        'title' => [
          'zh' => '水平式自動裝盒機',
          'cn' => '水平式自动装盒机',
          'en' => 'Automatic Horizontal Cartoning Machine',
          'ko' => '수평형자동포장기',
        ],

        'images' => [
          'automatic-horizontal-cartoning-machine-1.webp'
        ],

        // images_ml 不可以是空字串
        // 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],

        // ⭐ 新增：每張圖的專屬圖說 (選配)
        'image_titles' => [
            0 => [
                'zh' => '機器正面全視圖',
                'en' => 'Front view of the machine'
            ],
            // 1 => 留空則自動抓取上方 title
        ],

        'image_class' => [
          0 => '',     // 第一張圖使用的 class
          1 => '',     // 第二張圖使用的 class
          2 => '',     // 第三張圖使用的 class
        ],

        // --- 新增：自訂大圖路徑 (選配，若無則自動取用 images 內的圖) ---
        'images_zoom' => [
            0 => '' 
        ],
        // --- 新增：大圖專用 Class (選配) ---
        'image_zoom_class' => [
            0 => '' 
        ],

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-horizontal-cartoning-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-horizontal-cartoning-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-horizontal-cartoning-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-horizontal-cartoning-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機採用水平式間歇設計，盒子打開之後產品以推入方式入盒，可避免內容物受損且入盒順暢，即使內容物是軟質如藥片或隱形眼鏡，皆能平滑的入盒，另可加裝熱熔膠機適用黏合式紙盒。從盒子成型、包裝物裝入、說明書的插入及印製批號、生產日期皆一貫作業，並裝有各種故障顯示，安全性高；紙盒包裝美觀，亦節省大量人力，適用於製藥、化妝品、五金、鋁塑包裝、軟膏、隱形眼鏡、高爾夫球、食品、文具等包裝。
          ',
          'cn' => '本机采用水平式间歇设计，盒子打开之後产品以推入方式入盒，可避免内容物受损且入盒顺畅，即使内容物是软质如药片或隐形眼镜，皆能平滑的入盒，另可加装热熔胶机适用黏合式纸盒。从盒子成型丶包装物装入丶说明书的插入及印制批号丶生产日期皆一贯作业，并装有各种故障显示，安全性高；纸盒包装美观，亦节省大量人力，适用於制药丶化妆品丶五金丶铝塑包装丶软膏丶隐形眼镜丶高尔夫球丶食品丶文具等包装。',
          'en' => '
            This machine completes product insertion, leaflet insertion and production batch & expiry date coding in one run. Also equipped are malfunction warnings for fail safe packaging processes. It is labor saving, suitable for pharmaceutical, ointment or cream tubes, cosmetics, hardwares, stationary, etc.
          ',
          'ko' => '박스 성형, 제품 투입, 설명서 투입, 제조정보 인쇄 등 순서로 포장이 완료. 작업 중 오류 표시, 안전사고 방지, 뛰어난 포장 완성도, 인건비 절감 효과 등의 장점. 의약품, 화장품, 의료기기, 골프공, 문구류, 치약, 연고류 등 포장가능.'
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
              'zh' => '星盤',
              'cn' => '星盘',
              'en' => 'Starwheel',
              'ko' => '스타 휠 방식 공급'
            ],
            'description' => [
              'zh' => '利用星盤做分瓶動作，準確的將包裝物放置於輸送帶上，更換不同規格時，只需要更換星盤。',
              'cn' => '利用星盘做分瓶动作，准确的将包装物放置於输送带上，更换不同规格时，只需要更换星盘。',
              'en' => 'A starwheel is equipped for bottle separating from each other and for precise loading on conveyer. It is only to replace a new starwheel for other bottle sizes.',
              'ko' => '병을 서로 분리하고 컨베이어에 정확히 적재하기 위해 장착되었으며, 스타 휠 교체로 다양한 사이즈 사용가능.'
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
              'zh' => '印字輪',
              'cn' => '印字轮',
              'en' => 'Steel Type Wheel',
              'ko' => '스틸 타입 휠'
            ],
            'description' => [
              'zh' => '在裝盒過程中，利用鋼字輪打印上生產日期，有效日期與生產批號，且鋼字採用高級合金鋼硬度處理，不易磨損，可長期使用。',
              'cn' => '在装盒过程中，利用钢字轮打印上生产日期，有效日期与生产批号，且钢字采用高级合金钢硬度处理，不易磨损，可长期使用。',
              'en' => 'To print manufacturing date, expiry date and batch numbers, a durable steel type wheel is adopted to emboss such information on carton.',
              'ko' => '제조 일자, 유효 기간 및 로트 번호를 인쇄하기 위해 상자에 해당 정보를 엠보싱 방식으로 인쇄. 스틸 타입으로 내구성이 높음.'
            ]
          ],
          [
            // ⚡ 第三組：Insert (左文右圖 - 索引為 2，故會自動維持左文右圖的節奏)
            'images' => [
              'zh' => 'img-features-3.jpg',
              'cn' => 'img-features-3.jpg',
              'en' => 'img-features-3.jpg',
              'ko' => 'img-features-3.jpg'
            ],
            'title' => [
              'zh' => '說明書插入',
              'cn' => '说明书插入',
              'en' => 'Instruction Insert System',
              'ko' => '설명서 투입'
            ],
            'description' => [
              'zh' => '由真空吸盤及夾爪運作，能準確的將說明書放入盒中，夾爪沒夾說明書時，機器會自動停機，避免造成不良品的流出。',
              'cn' => '由真空吸盘及夹爪运作，能准确的将说明书放入盒中，夹爪没夹说明书时，机器会自动停机，避免造成不良品的流出。',
              'en' => 'By using a vacuum cup and a gripper, the insert is pushed precisely into the carton. The machine stops when there is no insert so as to avoid product missing with insert.',
              'ko' => '제품을 감싸는 방식, 제품 위, 아래 놓는 방식 등 다양한 방식으로 설명서 투입 가능. 설명서 누락 시 기계 작동이 멈춰 불량 발생 가능성을 낮춤.'
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
                    <th>JC-CTM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>30 - 60</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td><span>220V / 380V</span><span>50HZ / 60HZ</span><span>single phase / 3 phase</span></td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td>4 - 6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td>550</td>
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
                    <th>JC-CTM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td>30 - 60</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源（VAC）</td>
                    <td><span>220V / 380V</span><span>50HZ / 60HZ</span><span>single phase / 3 phase</span></td>
                  </tr>
                  <tr>
                    <td class="label">电机功率（kw）</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td>4 - 6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td>550</td>
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
                    <th>JC-CTM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Speed(bpm)</td>
                    <td>30 - 60</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td><span>220V / 380V</span><span>50HZ / 60HZ</span><span>single phase / 3 phase</span></td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td>4 - 6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
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
                    <th>JC-CTM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>30 - 60</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td><span>220V / 380V</span><span>50HZ / 60HZ</span><span>single phase / 3 phase</span></td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td>4 - 6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>550</td>
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

        // 產品影片 // 若標題以英文為主，無其他語系，則保留英文即可
        'video' => [
          [
            'id'    => 'oVVDmClcuSQ',
            'title' => ['en' => 'JihCheng TECH JC CTM']
          ],
          [
            'id'    => '6-0aLXDoxuk',
            'title' => ['en' => 'JihCheng TECH JC CTM BLISTER']
          ],
          [
            'id'    => 'JBZSMKKSzDQ',
            'title' => ['en' => 'JihCheng TECH JC CTM TUBE']
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
    ],

  ], // END
]
?>