<?php
// 充填機 Filling Machine // 內容管理 
return [
// Products.php 和 Series.php 共用
  'filling' => [
    'slug' => 'filling',

    // 這裡有建立則優先取用，其次才會使用自動串接的邏輯
    // SEO title
    'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO description
    'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO keywords
    'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

    // --- 新增：分類識別標籤
    'category_tags' => ['filling'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 
    
    // series-name // ⚡⚡⚡ 優先必填不然會造成退回
    'title' => [
      'zh' => '充填機',
      'cn' => '充填机',
      'en' => 'Filling Machine',
      'ko' => '충진기'
    ],
    
    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'main-machine.webp',
        // 'src' => 'filling/main-machine.webp',
        'caption' => [
          'zh' => '自動充填內塞外蓋機',
          'cn' => '自动充填内塞外盖机',
          'en' => 'Automatic Filling Plugging And Overcapping Machine',
          'ko' => '모노블럭 시스템',
        ],
        'image_class' => 'bg-multiply', // ⭐ 在這裡指定 CSS Class
      ],
    ],

    // series-intro
    'intro' => [
      'zh' => '
        本系列充填機涵蓋液體、稀黏體及粉末等多樣化物料包裝需求，採直線式運動設計，利用PLC邏輯控制器與高精度感應裝置，實現從充填、塞栓到封蓋的一體化自動流程。
        設備完全符合cGMP標準，具備節能、操作簡單及快速更換規格等特性。無論是小容量精密包裝或大容量定量作業，皆能提供卓越的生產效益，廣泛應用於醫藥、化工、食品及化妝品等產業。
      ',
      'cn' => '
          本系列充填机涵盖液体、稀黏体及粉末等多样化物料包装需求，采直线式运动设计，利用PLC逻辑控制器与高精度感应装置，实现从充填、塞栓到封盖的一体化自动流程。
          设备完全符合cGMP标准，具备节能、操作简单及快速更换规格等特性。无论是小容量精密包装或大容量定量作业，皆能提供卓越的生产效益，广泛应用于医药、化工、食品及化妆品等产业。
      ',
      'en' => '
          Our filling machine series covers a wide range of packaging needs for liquids, viscous fluids, and powders. Featuring a straight-line motion design and PLC logic control with high-precision sensors, the system achieves a fully integrated automated process from filling and plugging to capping. 
          All units comply with cGMP standards, offering energy efficiency, simple operation, and quick change-over times. Whether for small-volume precision packaging or large-volume dosing, our machines provide exceptional productivity across the pharmaceutical, chemical, food, and cosmetic industries.
      ',
      'ko' => '
          본 충진기 시리즈는 액체, 점성체 및 분말 등 다양한 원료의 포장 요구를 충족합니다. 직선형 이동 방식 설계와 PLC 로직 제어 및 고정밀 감지 장치를 통해 충진, 내부 마개 삽입, 캡핑까지 일체화된 자동 공정을 실현합니다. 
          모든 장비는 cGMP 기준을 완벽히 준수하며 에너지 절감, 간편한 조작 및 신속한 규격 변경 등의 특성을 갖추고 있습니다. 소용량 정밀 포장부터 대용량 정량 작업까지 뛰어난 생산 효율을 제공하며 제약, 화학, 식품, 화장품 등 다양한 산업 분야에 널리 적용됩니다.
      ',
    ],

    // products-series.php
    'series' => [
      // products-series.php + products-detail.php
      // 自動充填內塞外蓋機
      'automatic-filling-plugging-and-overcapping-machine' => [
        'slug' => 'automatic-filling-plugging-and-overcapping-machine',
        
        // 首頁工具
        'home_show' => true,
        'home_sort' => 2,

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
          'zh' => '自動充填內塞外蓋機',
          'cn' => '自动充填内塞外盖机',
          'en' => 'Automatic Filling Plugging And Overcapping Machine',
          'ko' => '모노블럭 시스템',
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        // 以image_ml為優先判斷，若為空字串或Null則直接統一取用image的圖片
        'images' => [
          'automatic-filling-plugging-and-overcapping-machine-1.jpg',
          'automatic-filling-plugging-and-overcapping-machine-2.jpg',
          'automatic-filling-plugging-and-overcapping-machine-3.jpg',
          'automatic-filling-plugging-and-overcapping-machine-4.jpg',
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],

        'image_class' => [
            0 => 'bg-multiply',     // 第一張圖使用的 class
            1 => '',     // 第二張圖使用的 class
            2 => '',     // 第三張圖使用的 class
        ],

        'download' => [
          'zh' => [
              ['label' => 'JC-FSD、JC-FSX ', 'file' => 'jc-fsd-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSB、JC-FSC', 'file' => 'jc-fsb-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSD-P、JC-FSX-P', 'file' => 'jc-fsd-p-automatic-filling-plugging-and-overcapping-machine.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => 'JC-FSD、JC-FSX', 'file' => 'jc-fsd-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSB、JC-FSC', 'file' => 'jc-fsb-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSD-P、JC-FSX-P', 'file' => 'jc-fsd-p-automatic-filling-plugging-and-overcapping-machine.pdf'],
          ],
          'en' => [
              ['label' => 'JC-FSD、JC-FSX', 'file' => 'jc-fsd-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSB、JC-FSC', 'file' => 'jc-fsb-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSD-P、JC-FSX-P', 'file' => 'jc-fsd-p-automatic-filling-plugging-and-overcapping-machine.pdf'],
          ],
          'ko' => [
              ['label' => 'JC-FSD、JC-FSX', 'file' => 'jc-fsd-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSB、JC-FSC', 'file' => 'jc-fsb-automatic-filling-plugging-and-overcapping-machine.pdf'],
              ['label' => 'JC-FSD-P、JC-FSX-P', 'file' => 'jc-fsd-p-automatic-filling-plugging-and-overcapping-machine.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機為具有充填、打內塞/栓及封鎖外蓋能力的機型，專門使用在小容量的液體包裝作業，尤其對於無菌室的硬體設施，能源消耗，頗具節省與精簡之功效；並利用PLC邏輯控制器及各種檢測感應裝置，將充填、打內塞/栓及封鎖外蓋一次完成，完全符合cGMP之標準。適用於眼藥水、水型針劑、化粧品、香精等的自動包裝。
          ',
          'cn'=>'本机为具有充填丶打内塞/栓及封锁外盖能力的机型，专门使用在小容量的液体包装作业，尤其对於无菌室的硬体设施，能源消耗，颇具节省与精简之功效；并利用PLC逻辑控制器及各种检测感应装置，将充填丶打内塞/栓及封锁外盖一次完成，完全符合cGMP之标准。适用於眼药水丶水型针剂丶化妆品丶香精等的自动包装。',
          'en' => '
            This monoblock machine incorporates filling, plug insertion and over cap sealing functions. It is mainly used in small volume liquid packing applications. Being compact, minimal energy consumption, the machine is especially suitable for use inside a sterile area. With PLC and other photoelectric sensor controls, the filling, plug insertion & cap sealing operations are completed in cGMP compliance manner. It is suitable for eye drop, small volume liquid injectable, cosmetics, volatile oil packing applications.
          ',
          'ko'=>'모노블럭 시스템은 용기 세척, 내용물 주입, 캡핑 과정을 한 설비에서 자동화를 이루는 시스템. 주로 소량의 액체 포장 분야에 사용되며 콤팩트하고 에너지 소모가 적기 때문에 클린룸에서 사용하기 적합. PLC 및 기타 광센서 컨트롤, 충진, 플러그 삽입 및 밀봉 작업은 cGMP 규정을 준수. 점안액, 수성 주사제, 화장품, 향수 및 인공눈물, 화장품, 휘발성 오일 등의 포장에 적합.'
        ],

        // FEATURES
        'features' => [
          [
            // ⚡ 第一組
            'images' => [
              'zh' => 'img-features-1.jpg',
              'cn' => 'img-features-1.jpg',
              'en' => 'img-features-1.jpg',
              'ko' => 'img-features-1.jpg'
            ], 
            'title' => [
              'zh' => '充填',
              'cn' => '充填',
              'en' => 'Filling',
              'ko' => '충진 공정'
            ],
            'description' => [
              'zh' => '充填缸採用高衛生度的玻璃製品，充填量可以進行個別調整或是全部調整，利用萬向接頭連結充填缸與充填管，不易斷裂。並有 電眼監視控制，達到『有瓶充填，無瓶不充填』。',
              'cn' => '充填缸采用高卫生度的玻璃制品，充填量可以进行个别调整或是全部调整，利用万向接头连结充填缸与充填管，不易断裂。并有 电眼监视控制，达到『有瓶充填，无瓶不充填』。',
              'en' => '
                It adopts high quality hygienic glass material for filling pumps. It allows for volume adjustment of one single cylinder or complete set of cylinders. It is using a universal joint in connection of cylinder and filling nozzle to minimize breakage. There is a photo sensor for bottle detection so to achieve a goal of Bottle-Fill and No-Bottle-No-Fill.
              ',
              'ko' => '충진량을 개별 실린더 조절과 전체 조절 가능. 유니버셜 조인트 사용으로 파이프 연결부위가 쉽게 단절되지 않음. 비전검사 방식으로 충진되지 않은 제품 검사 가능.'
            ]
          ],
          [
            // ⚡ 第二組
            'images' => [
              'zh' => 'img-features-2.jpg',
              'cn' => 'img-features-2.jpg',
              'en' => 'img-features-2.jpg',
              'ko' => 'img-features-2.jpg'
            ], 
            'title' => [
              'zh' => '打內塞',
              'cn' => '打内塞',
              'en' => 'Dropper insertion',
              'ko' => '플러깅 공정'
            ],
            'description' => [
              'zh' => '利用機械手臂與機械爪校正瓶口，能準確的將內塞 / 內栓打入瓶子。',
              'cn' => '利用机械手臂与机械爪校正瓶口，能准确的将内塞 / 内栓打入瓶子。',
              'en' => '
                By using a mechanical arm with a jaw will allow the machine to insert the plug precisely into the bottle.
              ',
              'ko' => '내부 플러그를 병에 기계팔과 톱니로 고정시켜 정확한 위치에 놓을 수 있음.'
            ]
          ],
          [
            // ⚡ 第三組
            'images' => [
              'zh' => 'img-features-3.jpg',
              'cn' => 'img-features-3.jpg',
              'en' => 'img-features-3.jpg',
              'ko' => 'img-features-3.jpg'
            ], 
            'title' => [
              'zh' => '下外蓋',
              'cn' => '下外盖',
              'en' => 'Cap placing',
              'ko' => '캡핑 오류 방지'
            ],
            'description' => [
              'zh' => '準確的將蓋子由下蓋處送至瓶子上，並利用電眼檢測內塞 / 內栓，避免無內塞 / 內栓而供給瓶蓋，造成不良產品流出。',
              'cn' => '准确的将盖子由下盖处送至瓶子上，并利用电眼检测内塞 / 内栓，避免无内塞 / 内栓而供给瓶盖，造成不良产品流出。',
              'en' => '
                Before placing a cap on the top of a bottle, a photo sensor detects the availability of plug. It avoids bottles without plugs.
              ',
              'ko' => '캡을 씌우기 전, 비전검사로 플러그 유무판단, 캡핑 공정의 불량 제어.'
            ]
          ],
          [
            // ⚡ 第四組
            'images' => [
              'zh' => 'img-features-4.jpg',
              'cn' => 'img-features-4.jpg',
              'en' => 'img-features-4.jpg',
              'ko' => 'img-features-4.jpg'
            ], 
            'title' => [
              'zh' => '旋蓋',
              'cn' => '旋盖',
              'en' => 'Cap sealing',
              'ko' => '캡 실링'
            ],
            'description' => [
              'zh' => '旋蓋位置上設計有瓶子固定裝置，且旋蓋頭設計有扭力調整裝置，可依不同需求自由調整瓶蓋緊實度與更換瓶蓋尺寸。',
              'cn' => '旋盖位置上设计有瓶子固定装置，且旋盖头设计有扭力调整装置，可依不同需求自由调整瓶盖紧实度与更换瓶盖尺寸。',
              'en' => '
                There is a bottle clasping device at the sealing station, while the sealing head equipped with adjustable torque as needed for individual cap & bottle, in addition to tension absorbing mechanism to extend sealing durability.
              ',
              'ko' => '충진, 플러깅이 끝난 제품의 캡을 씌우고 스크류 방식으로 마감하는 공정. 다양한 캡 크기 변경 가능. 。'
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
                    <th>JC-FSD</th>
                    <th>JC-FSX</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td>700</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-FSB</th>
                    <th>JC-FSC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td colspan="2">30-60</td>
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
                    <td colspan="2">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="2">4-6 Kgs x 70 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td colspan="2">900</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">機型</span>
                        <span class="bottom-left">規格</span>
                      </div>
                    </th>
                    <th>JC-FSD-P</th>
                    <th>JC-FSX-P</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.1</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td>800</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
            ',
            'cn'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-FSD</th>
                    <th>JC-FSX</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td>700</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-FSB</th>
                    <th>JC-FSC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td colspan="2">30-60</td>
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
                    <td colspan="2">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td colspan="2">4-6 Kgs x 70 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td colspan="2">900</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-FSD-P</th>
                    <th>JC-FSX-P</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">生产速度（bpm）</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.1</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量（min）</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量（kg）</td>
                    <td>800</td>
                    <td>950</td>
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
                    <th>JC-FSD</th>
                    <th>JC-FSX</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.0</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>700</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FSB</th>
                    <th>JC-FSC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td colspan="2">30-60</td>
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
                    <td colspan="2">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="2">4-6 Kgs x 70 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td colspan="2">900</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FSD-P</th>
                    <th>JC-FSX-P</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Speed (pcs/min)</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.1</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>800</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
            ',
            'ko'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-FSD</th>
                    <th>JC-FSX</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.0</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>700</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-FSB</th>
                    <th>JC-FSC</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td colspan="2">30-60</td>
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
                    <td colspan="2">1.5</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="2">4-6 Kgs x 70 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td colspan="2">900</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FSD-P</th>
                    <th>JC-FSX-P</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">생산 속도 (pcs/min)</td>
                    <td>40-50</td>
                    <td>80-90</td>
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
                    <td>1.6</td>
                    <td>2.1</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td>4-6 Kgs x 60 Liter</td>
                    <td>4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>800</td>
                    <td>950</td>
                  </tr>
                </tbody>
              </table>
            '
          ],
        ],

        // 產品影片 // 若標題以英文為主，無其他語系，則保留英文即可
        'video' => [
          [
            'id'    => 'jglbIQIq60w',
            'title' => ['en' => 'JihCheng TECH JC-FSX']
          ],
          [
            'id'    => 'RJ8Hjr6Ccrg',
            'title' => ['en' => 'JihCheng TECH JC-FSD ']
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

      // 自動液體充填機
      'automatic-liquid-filling-machine' => [
        'slug' => 'automatic-liquid-filling-machine',

        'home_show' => false,
        'home_sort' => 999, // 首頁排序，若無顯示可忽略

        // New Patents 是否判定 // true 顯示，false 不顯示
        // 'new_patent' => ['enabled' => false,], 
        // 'new_patent_title' => ['zh' => '', 'en' => ''],

        // ⚡⚡⚡ 優先必填不然會造成退回
        'title' => [
          'zh' => '自動液體充填機',
          'cn' => '自动液体充填机',
          'en' => 'Automatic Liquid Filling Machine',
          'ko' => '자동액체충진기'
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        'images' => [
          'automatic-liquid-filling-machine-1.jpg',
          'automatic-liquid-filling-machine-2.jpg',
          'automatic-liquid-filling-machine-3.jpg',
          'automatic-liquid-filling-machine-4.jpg',
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],

        'image_class' => [
            0 => 'bg-multiply',     // 第一張圖使用的 class
            1 => '',     // 第二張圖使用的 class
            2 => '',     // 第三張圖使用的 class
        ],

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-liquid-filling-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-liquid-filling-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-liquid-filling-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-liquid-filling-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機為定量式自動液體充填機，可使用在液體、稀黏濃體的充填作業，在設計上採用機械為主的直線運動方式，利用PLC邏輯控制器及各種檢測感應裝置及氣缸的收放，達到自動控制的目的，且完全符合cGMP之標準。操作簡單，可在短時間內，變更不同的容量充填作業，達到一機數用的成本效益。適用於一般化工、製藥、食品、化妝品、清潔用品等的自動充填作業使用。
          ',
          'cn'=>'本机为定量式自动液体充填机，可使用在液体丶稀黏浓体的充填作业，在设计上采用机械为主的直线运动方式，利用PLC逻辑控制器及各种检测感应装置及气缸的收放，达到自动控制的目的，且完全符合cGMP之标准。操作简单，可在短时间内，变更不同的容量充填作业，达到一机数用的成本效益。适用於一般化工丶制药丶食品丶化妆品丶清洁用品等的自动充填作业使用。',
          'en' => '
            This is an automatic liquid filling machine of volumetric filling type, applicable in liquid of low viscosity. It is a straight-line system using pneumatic cylinders and other sensors with PLC control for bottle positioning and liquid filling without spillage and meeting cGMP rules. It is easy in operation, short change-over time for different containers, thus very economical for one-machine-multiple application operation. The automatic filling operation includes applications in chemical, pharmaceutical, food, cosmetic and detergent industries.
          ',
          'ko'=>'저점도의 액체에 적용 할 수 있는 공압 실린더 방식 충진기. 직선 운동 모드를 기반으로 설계. 병 위치, 액체 충진 등 PLC제어 방식. cGMP 규정 준수. 포장용기 변경을 간단한 조작으로 짧은시간에 변경가능. 한 설비에서 다양한 사이즈의 포장용기 사용가능. 음료수, 생수, 화장품, 약품, 구강 청결제, 각종 세제 등 사용.'
        ],

        // FEATURES（中文、英文不同）
        'features' => [
          [
            // ⚡ 第一組
            'images' => [
              'zh' => 'img-features-1.jpg',
              'cn' => 'img-features-1.jpg',
              'en' => 'img-features-en-1.jpg',
              'ko' => 'img-features-en-1.jpg'
            ],
            'title' => [
              'zh' => '伺服控制',
              'cn' => '伺服控制',
              'en' => 'Major adjustment',
              'ko' => '메인 조절 장치.'
            ],
            'description' => [
              'zh' => '充填系統採用伺服控制，連接 PLC 和人機介面可直接在人機調整充填量。',
              'cn' => '充填系统采用伺服控制，连接 PLC 和人机介面可直接在人机调整充填量。',
              'en' => 'It allows for adjustment of filling volume for all filling cylinders at the same time. Operation is quick and easy.',
              'ko' => '충진 실리더에 대한 충진량을 동시에 조절 가능. 쉽고 빠른 조절 가능.'
            ]
          ],
          [
            // ⚡ 第二組
            'images' => [
              'zh' => 'img-features-2.jpg',
              'cn' => 'img-features-2.jpg',
              'en' => 'img-features-en-2.jpg',
              'ko' => 'img-features-en-2.jpg'
            ],
            'title' => [
              'zh' => '液體充填',
              'cn' => '液体充填',
              'en' => 'Liquid Filling',
              'ko' => '액체 충진'
            ],
            'description' => [
              'zh' => '充填幫補採用定量式的設計，液體接觸部分使用不鏽鋼316L#，充填針並設計有防漏裝置，充填時，利用夾瓶器進行瓶口校正，可準確的將充填針送入瓶子；充填部分拆卸容易，易於清洗，符合cGMP標準。',
              'cn' => '充填帮补采用定量式的设计，液体接触部分使用不锈钢316L#，充填针并设计有防漏装置，充填时，利用夹瓶器进行瓶口校正，可准确的将充填针送入瓶子；充填部分拆卸容易，易於清洗，符合cGMP标准。',
              'en' => 'Filling pump adopts volumetric positive displacement design. SS # 316L is used for liquid contact parts. Filling nozzles are equipped with drip free devices. During filling, bottles are clamped to allow precise insertion of nozzles. Simple in disassembly of filling components and ease in cleaning, meeting cGMP rules.',
              'ko' => '정량식 충진펌프 설계. 엑체주입구 스테인레스 316사용. 주입바늘 누수방지 장치설계. 충진 시, 포장용기 입구 고정, 주입바늘이 포장용기 입구에 정확히 들어감. 충진파트 분해가 쉬워 세척 용이. cGMP 규정 준수.'
            ]
          ],
          [
            // ⚡ 第三組
            'images' => [
              'zh' => 'img-features-3.jpg',
              'cn' => 'img-features-3.jpg',
              'en' => 'img-features-en-3.jpg',
              'ko' => 'img-features-en-3.jpg'
            ],
            'title' => [
              'zh' => '小調整',
              'cn' => '小调整',
              'en' => 'Minor adjustment',
              'ko' => '미제 조절 파트'
            ],
            'description' => [
              'zh' => '可針對各個充填缸進行微幅的調整，充填量精確度可達容量之±0.5%。',
              'cn' => '可针对各个充填缸进行微幅的调整，充填量精确度可达容量之±0.5%。',
              'en' => 'It allows for minor adjustment of each filling cylinder to achieve fill volume accuracy of +/- 0.5%t',
              'ko' => '각각의 충진 실리더 충진량을 +/- 0.5 %의 정확도로 미세 조절 가능.'
            ]
          ],
          [
            // ⚡ 第四組
            'images' => [
              'zh' => ['src' => 'img-features-4.jpg', 'class' => 'v-style'],
              'cn' => ['src' => 'img-features-4.jpg', 'class' => 'v-style'],
            ],
            'title' => [
              'zh' => '充填針',
              'cn' => '充填针',
            ],
            'description' => [
              'zh' => '充填針上下採伺服控制器，可以調整充填時充填針上下速度。',
              'cn' => '充填针上下采伺服控制器，可以调整充填时充填针上下速度。',
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
                    <th>JC-FS-8</th>
                    <th>JC-FM-8</th>
                    <th>JC-FML-8</th>
                    <th>JC-FL-8</th>
                    <th>JC-FXL-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容量（g）</td>
                    <td>5-30</td>
                    <td>15-100</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>70-90</td>
                    <td>50-70</td>
                    <td>50-70</td>
                    <td>40-60</td>
                    <td>35-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td colspan="4">1.0</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="5">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td>550</td>
                    <td>580</td>
                    <td>620</td>
                    <td>680</td>
                    <td>750</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FML-12</th>
                    <th>JC-FL-12</th>
                    <th>JC-FXL-12</th>
                    <th>JC-FML-16</th>
                    <th>JC-FL-16</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity (g)</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                    <td>30-150</td>
                    <td>60-300</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>90-110</td>
                    <td>80-100</td>
                    <td>50-60</td>
                    <td>110-130</td>
                    <td>90-110</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="3">1.5</td>
                    <td colspan="2">2.25</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="3">4-6 Kgs x 45 Liter</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>700</td>
                    <td>800</td>
                    <td>910</td>
                    <td>950</td>
                    <td>980</td>
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
                    <th>JC-FS-8</th>
                    <th>JC-FM-8</th>
                    <th>JC-FML-8</th>
                    <th>JC-FL-8</th>
                    <th>JC-FXL-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">填充容量 (g)</td>
                    <td>5-30</td>
                    <td>15-100</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>70-90</td>
                    <td>50-70</td>
                    <td>50-70</td>
                    <td>40-60</td>
                    <td>35-50</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>单相 / 三相</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率 (kw)</td>
                    <td colspan="4">1.0</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="5">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机械重量 (kg)</td>
                    <td>550</td>
                    <td>580</td>
                    <td>620</td>
                    <td>680</td>
                    <td>750</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">机型</span>
                        <span class="bottom-left">规格</span>
                      </div>
                    </th>
                    <th>JC-FML-12</th>
                    <th>JC-FL-12</th>
                    <th>JC-FXL-12</th>
                    <th>JC-FML-16</th>
                    <th>JC-FL-16</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">填充容量 (g)</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                    <td>30-150</td>
                    <td>60-300</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>90-110</td>
                    <td>80-100</td>
                    <td>50-60</td>
                    <td>110-130</td>
                    <td>90-110</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率 (kw)</td>
                    <td colspan="3">1.5</td>
                    <td colspan="2">2.25</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="3">4-6 Kgs x 45 Liter</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机械重量 (kg)</td>
                    <td>700</td>
                    <td>800</td>
                    <td>910</td>
                    <td>950</td>
                    <td>980</td>
                  </tr>
                </tbody>
              </table>
            ',
            'en' => '
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FS-8</th>
                    <th>JC-FM-8</th>
                    <th>JC-FML-8</th>
                    <th>JC-FL-8</th>
                    <th>JC-FXL-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity (g)</td>
                    <td>5-30</td>
                    <td>15-100</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>70-90</td>
                    <td>50-70</td>
                    <td>50-70</td>
                    <td>40-60</td>
                    <td>35-50</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="4">1.0</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="5">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
                    <td>580</td>
                    <td>620</td>
                    <td>680</td>
                    <td>750</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">Model</span>
                        <span class="bottom-left">Specs.</span>
                      </div>
                    </th>
                    <th>JC-FML-12</th>
                    <th>JC-FL-12</th>
                    <th>JC-FXL-12</th>
                    <th>JC-FML-16</th>
                    <th>JC-FL-16</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity (g)</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                    <td>30-150</td>
                    <td>60-300</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>90-110</td>
                    <td>80-100</td>
                    <td>50-60</td>
                    <td>110-130</td>
                    <td>90-110</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="3">1.5</td>
                    <td colspan="2">2.25</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="3">4-6 Kgs x 45 Liter</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>700</td>
                    <td>800</td>
                    <td>910</td>
                    <td>950</td>
                    <td>980</td>
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
                    <th>JC-FS-8</th>
                    <th>JC-FM-8</th>
                    <th>JC-FML-8</th>
                    <th>JC-FL-8</th>
                    <th>JC-FXL-8</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">충진 용량 (g)</td>
                    <td>5-30</td>
                    <td>15-100</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>70-90</td>
                    <td>50-70</td>
                    <td>50-70</td>
                    <td>40-60</td>
                    <td>35-50</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="4">1.0</td>
                    <td>1.5</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="5">4-6 Kgs x 30 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>550</td>
                    <td>580</td>
                    <td>620</td>
                    <td>680</td>
                    <td>750</td>
                  </tr>
                </tbody>
              </table>
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델명</span>
                        <span class="bottom-left">사양</span>
                      </div>
                    </th>
                    <th>JC-FML-12</th>
                    <th>JC-FL-12</th>
                    <th>JC-FXL-12</th>
                    <th>JC-FML-16</th>
                    <th>JC-FL-16</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">충진 용량 (g)</td>
                    <td>30-150</td>
                    <td>60-300</td>
                    <td>200-500</td>
                    <td>30-150</td>
                    <td>60-300</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>90-110</td>
                    <td>80-100</td>
                    <td>50-60</td>
                    <td>110-130</td>
                    <td>90-110</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="3">1.5</td>
                    <td colspan="2">2.25</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="3">4-6 Kgs x 45 Liter</td>
                    <td colspan="2">4-6 Kgs x 72 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>700</td>
                    <td>800</td>
                    <td>910</td>
                    <td>950</td>
                    <td>980</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],

        // 產品影片
        'video' => [
          [
            'id'    => '0tfFyAgAg6g',
            'title' => ['zh' => 'JihCheng TECH JC-FL12', 'cn' => 'JihCheng TECH JC-FL12', 'en' => 'JihCheng TECH JC-FL12', 'en' => 'JihCheng TECH JC-FL12']
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

      // 自動粉末充填機
      'automatic-powder-filling-machine' => [
        'slug' => 'automatic-powder-filling-machine',

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

        // ⚡⚡⚡ 優先必填不然會造成退回
        'title' => [
          'zh' => '自動粉末充填機',
          'cn' => '自动粉​​末充填封盖机',
          'en' => 'Automatic Powder Filling Machine',
          'ko' => '자동분말충진기',
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        'images' => [
          'automatic-powder-filling-machine-1.jpg',
          'automatic-powder-filling-machine-2.jpg',
          'automatic-powder-filling-machine-3.jpg',
          'automatic-powder-filling-machine-4.jpg',
        ],
        // 若不使用可以忽略 'images_ml' => ['zh' => [''], 'cn' => [''], 'en' => [''], 'ko' => [''],],

        'image_class' => [
            0 => 'bg-multiply',     // 第一張圖使用的 class
            1 => '',                // 第二張圖使用的 class
            2 => '',                // 第三張圖使用的 class
        ],

        'download' => [
          'zh' => [
              ['label' => '', 'file' => 'automatic-powder-filling-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-powder-filling-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-powder-filling-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-powder-filling-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '
            本機為具有粉末充填的機型；主要是利用一體成型的螺桿旋轉達到充填物料之目的。美觀、粉末不外漏，瓶蓋不易受損，完全符合cGMP之標準。適用於各類顆粒體、粉末；化工藥粉、中西藥藥粉、咖啡粉等的自動包裝。
          ',
          'cn'=>'本机为具有粉末充填的机型；主要是利用一体成型的螺杆旋转达到充填物料之目的。美观丶粉末不外漏，瓶盖不易受损，完全符合cGMP之标准。适用於各类颗粒体丶粉末；化工药粉丶中西药药粉丶咖啡粉等的自动包装。',
          'en' => '
            This is a type of machine which is able to fill powder into bottle. It is using the single piece machined rotating auger for filling of powder material into a container. Good in looking, no powder spillage, meeting cGMP rules are some of the features. It is suitable for automatic packing of free-flowing powder materials such as granules, powder, chemicals, Chinese & Western medicine powder, coffee powder, etc.
          ',
          'ko'=>'오거회전 방식으로 파우더 충진. 파우더 누출이 없고, 캡손상이 적음. cGMP 규정 준수. 각종 미세 입자, 문말, 화공약품, 양약, 한약, 커피분말 등 자동포장.'
        ],

        // FEATURES（中文、英文不同）
        'features' => [
          [
            // ⚡ 第一組
            'images' => [
              'zh' => ['src' => 'img-features-1.jpg', 'class' => 'v-style'], 
              'cn' => ['src' => 'img-features-1.jpg', 'class' => 'v-style'],
              'en' => ['src' => 'img-features-1.jpg', 'class' => 'v-style'],
              'ko' => ['src' => 'img-features-1.jpg', 'class' => 'v-style']
            ],
            'title' => [
              'zh' => '粉末充填',
              'cn' => '粉末充填',
              'en' => 'Powder filling',
              'ko' => '분말 충진.'
            ],
            'description' => [
              'zh' => '本機構皆有防塵隔離，避免粉塵進入導致機件損傷；不銹鋼充填槽易於清洗，避免二次污染。',
              'cn' => '本机构皆有防尘隔离，避免粉尘进入导致机件损伤；不锈钢充填槽易于清洗，避免二次污染。',
              'en' => 'The machine is equipped with dust detraction device to free machine from damages due to powder contamination. The stainless steel material hopper is easy to clean, which minimizes cross-contamination.',
              'ko' => '분진 오염으로 인한 설비 손상을 방지하기 위한 분진 감소 장치 장착. 스테인레스 소재의 호퍼는 오염에 강하고 청소가 쉬움.'
            ]
          ],
          [
            // ⚡ 第二組
            'images' => [
              'zh' => ['src' => 'img-features-2.jpg', 'class' => 'v-style'], 
              'cn' => ['src' => 'img-features-2.jpg', 'class' => 'v-style'],
              'en' => ['src' => 'img-features-2.jpg', 'class' => 'v-style'],
              'ko' => ['src' => 'img-features-2.jpg', 'class' => 'v-style']
            ],
            'title' => [
              'zh' => '螺桿',
              'cn' => '螺杆',
              'en' => 'Auger',
              'ko' => '오거'
            ],
            'description' => [
              'zh' => '螺桿採用不銹鋼一體加工成型，利用螺桿的旋轉充填原物料，計量準確度高，誤差在 +/- 1~3% 以內；充填時，利用攪拌棒進行攪拌工作，使原物料能正常充填，增加準確性。',
              'cn' => '螺杆採用不锈钢一体加工成型，利用螺杆的旋转充填原物料，计量准确度高，误差在 +/- 1~3% 以内；充填时，利用搅拌棒进行搅拌工作，使原物料能正常充填，增加准确性。',
              'en' => 'The auger is single-piece machined for precision. Adopting auger for precise filling volume, filling is kept within +/- 1 - 3% weight variation, depending on powder physical characteristics. With a stirrer rotating in the material hopper, it ensures a smoother and more precise filling operation',
              'ko' => '스크류는 스테인레스로 만들어져 있으며 스크류의 회전에 의해 원료가 채워지며 정확도가 높고 오차범위 ± 1 % ~ 3 %이내. 교반 막대를 사용하여 원료를 정상적으로 채우고 정확도를 높임.'
            ]
          ],
          [
            // ⚡ 第三組
            'images' => [
              'zh' => 'img-features-3.jpg',
              // 如果帶有 class 則使用 'zh' => ['src' => 'img-features-2.jpg', 'class' => ''], 
              'cn' => 'img-features-3.jpg',
              'en' => 'img-features-3.jpg',
              'ko' => 'img-features-3.jpg'
            ],
            'title' => [
              'zh' => '封蓋',
              'cn' => '封盖',
              'en' => 'Roll-on cap sealing',
              'ko' => '캡 실링'
            ],
            'description' => [
              'zh' => '封蓋頭設計為四片滾刀，並可自由調整封蓋緊實度，瓶蓋美觀不易受損，可依瓶蓋尺寸不同，輕易的進行更換封蓋頭，滿足客戶不同需求。',
              'cn' => '封盖头设计为四片滚刀，并可自由调整封盖紧实度，瓶盖美观不易受损，可依瓶盖尺寸不同，轻易的进行更换封盖头，满足客户不同需求。',
              'en' => 'The sealing head is a sealing roller design, possible for adjustment of cap sealing tightness without affecting smooth appearance of caps. It is easy in bottle size change-over for different bottle cap sizes.',
              'ko' => '롤러 방식 실링헤드로 뚜껑 외관에 영향을 주지 않으면서 캡 밀봉 강도를 조절할 수 있음. 다양한 종류의 캡을 쉽게 교체할 수 있음.'
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
                        <span class="top-right">型號 Model</span>
                        <span class="bottom-left">規格 Specs.</span>
                      </div>
                    </th>
                    <th>JC-PCB</th>
                    <th>JC-PSD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">填充容量(g)</td>
                    <td colspan="2">5-40</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度(bpm)</td>
                    <td>15-35</td>
                    <td>15-30</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源(VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率(kw)</td>
                    <td colspan="2">2.6</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量(min)</td>
                    <td colspan="2">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量(kg)</td>
                    <td colspan="2">950</td>
                  </tr>
                </tbody>
              </table>
            ',
            'cn'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">型号 Model</span>
                        <span class="bottom-left">规格 Specs.</span>
                      </div>
                    </th>
                    <th>JC-PCB</th>
                    <th>JC-PSD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">填充容量(g)</td>
                    <td colspan="2">5-40</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度(bpm)</td>
                    <td>15-35</td>
                    <td>15-30</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源(VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率(kw)</td>
                    <td colspan="2">2.6</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量(min)</td>
                    <td colspan="2">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">机器重量(kg)</td>
                    <td colspan="2">950</td>
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
                    <th>JC-PCB</th>
                    <th>JC-PSD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Capacity (g)</td>
                    <td colspan="2">5-40</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>15-35</td>
                    <td>15-30</td>
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
                    <td colspan="2">2.6</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="2">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td colspan="2">950</td>
                  </tr>
                </tbody>
              </table>
            ',
            'ko'=>'
              <table class="spec-table">
                <thead>
                  <tr>
                    <th class="split-cell">
                      <div class="split-container">
                        <span class="top-right">모델 Model</span>
                        <span class="bottom-left">사양 Specs.</span>
                      </div>
                    </th>
                    <th>JC-PCB</th>
                    <th>JC-PSD</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">충진 용량(g)</td>
                    <td colspan="2">5-40</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도(bpm)</td>
                    <td>15-35</td>
                    <td>15-30</td>
                  </tr>
                  <tr>
                    <td class="label">사용 전원(VAC)</td>
                    <td colspan="2">
                      <span>220V / 380V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력(kw)</td>
                    <td colspan="2">2.6</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량(min)</td>
                    <td colspan="2">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량(kg)</td>
                    <td colspan="2">950</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],
        ],

        // 產品影片
        'video' => [
          [
            'id'    => 'YrC7snZiOWA',
            'title' => ['zh' => 'JihCheng TECH JC-PCB', 'cn' => 'JihCheng TECH JC-PCB', 'en' => 'JihCheng TECH JC-PCB', 'ko' => 'JihCheng TECH JC-PCB']
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