<?php
// 裝盒機 Cartoning Machine // 內容管理 
return [
// Products.php
  'labeling' => [
    // 目前沒有使用
    'slug' => 'labeling',
    
    // ⚡ 這裡有建立則優先取用，其次才會使用自動串接的邏輯
    // SEO title
    'seo_title' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO description
    'seo_description' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],
    // SEO keywords
    'seo_keywords' => ['zh' => '', 'cn' => '', 'en' => '', 'ko' => '',],

    // --- 新增：分類識別標籤
    'category_tags' => ['labeling'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name // ⚡⚡⚡ 優先必填不然會造成退回
    'title' => [
      'zh' => '貼標機',
      'cn' => '贴标机',
      'en' => 'Labeling Machine',
      'ko' => '라벨러'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'main-machine.webp',
        'caption' => [
          'zh' => '自動貼標機',
          'cn' => '自动贴标籤机',
          'en' => 'Automatic Labeling Machine',
          'ko' => '자동라벨기',
        ],
        'image_class' => 'bg-multiply', // ⭐ 在這裡指定 CSS Class
      ],
    ],

    // series-intro
    'intro' => [
      'zh' => '本機為上糊式自動貼標籤機(貼標機)，作業時先以貼標稈沾取樹脂膠，再由貼標稈黏取標籤旋至真空皮帶後，將標籤貼上瓶子(容器)。可快速更換不同大小的瓶子規格，操作簡單、整齊、美觀、乾淨、清洗容易。適用於一般化工、製藥、食品、酒廠之圓型容器。',
      'cn' => '本机为上糊式自动贴标签机，作业时先以贴标秆沾取树脂胶，再由贴标秆黏取标签旋至真空皮带後，将标签贴上瓶子(容器)。可快速更换不同大小的瓶子规格，操作简单丶整齐丶美观丶乾净丶清洗容易。适用於一般化工丶制药丶食品丶酒厂之圆型容器。',
      'en' => 'This machine delivers label, gummed with resinous glue, from turret to vacuum belt and from belt to the bottle surface. It is possible to quickly exchange different bottle and label sizes with ease. It is simple in operation, neat, easy to clean up and suitable for round container labeling applications in industries, such as chemical, pharmaceutical, food, winery, etc.',
      'ko' => '자동 라벨링 설비 다양한 병크기와 라벨 사이즈를 부착할 수 있는 설비. 조작이 쉽고, 구조가 간단하여, 청결 및 유지보수가 간편함. 각종 일반 화학, 의약품, 의료기기, 식품, 음료수, 건강음료, 건강식품, 포도주 등 병포장에 사용.'
    ],

    // 系列產品列表
    'series' => [
      // products-series.php + products-detail.php
      'automatic-labeling-machine' => [
        'slug' => 'automatic-labeling-machine',
        
        // 首頁工具
        'home_show' => true,
        'home_sort' => 4,

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
          'zh' => '自動貼標機',
          'cn' => '自动贴标籤机',
          'en' => 'Automatic Labeling Machine',
          'ko' => '자동라벨기',
        ],

        // 'type' => '', 
        // 'type_ml' => [
        //   'zh'=>'',
        //   'en'=>''
        // ], 

        'images' => [
          'automatic-labeling-machine-1.jpg'
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
              ['label' => '', 'file' => 'automatic-labeling-machice.pdf'],
              // ['label' => 'JC-CTM-L (中文)', 'file' => 'jc-ctm-l-zh.pdf'], // 增加第二本
          ],
          'cn' => [
              ['label' => '', 'file' => 'automatic-labeling-machice.pdf'],
          ],
          'en' => [
              ['label' => '', 'file' => 'automatic-labeling-machice.pdf'],
          ],
          'ko' => [
              ['label' => '', 'file' => 'automatic-labeling-machice.pdf'],
          ],
        ],

        // INTRO
        'intro' => [
          'zh' => '本機為上糊式自動貼標籤機(貼標機)，作業時先以貼標稈沾取樹脂膠，再由貼標稈黏取標籤旋至真空皮帶後，將標籤貼上瓶子(容器)。可快速更換不同大小的瓶子規格，操作簡單、整齊、美觀、乾淨、清洗容易。適用於一般化工、製藥、食品、酒廠之圓型容器。',
          'cn' => '本机为上糊式自动贴标签机，作业时先以贴标秆沾取树脂胶，再由贴标秆黏取标签旋至真空皮带後，将标签贴上瓶子(容器)。可快速更换不同大小的瓶子规格，操作简单丶整齐丶美观丶乾净丶清洗容易。适用於一般化工丶制药丶食品丶酒厂之圆型容器。',
          'en' => 'This machine delivers label, gummed with resinous glue, from turret to vacuum belt and from belt to the bottle surface. It is possible to quickly exchange different bottle and label sizes with ease. It is simple in operation, neat, easy to clean up and suitable for round container labeling applications in industries, such as chemical, pharmaceutical, food, winery, etc.',
          'ko' => '자동 라벨링 설비 다양한 병크기와 라벨 사이즈를 부착할 수 있는 설비. 조작이 쉽고, 구조가 간단하여, 청결 및 유지보수가 간편함. 각종 일반 화학, 의약품, 의료기기, 식품, 음료수, 건강음료, 건강식품, 포도주 등 병포장에 사용.'
        ],

        // FEATURES
        'features' => [
          [
            // ⚡ 第一組：繁中、簡中（和英、韓不一樣）；先以英文版為主
            // 備註：如要擴增不同語系不同呈現方式，可以由圖片對應語系，如果空字串或Null則該「列、行」不顯示
            'images' => [
              'zh' => 'img-features-1.jpg',
              'cn' => 'img-features-1.jpg',
              'en' => 'img-features-en-1.jpg',
              'ko' => 'img-features-en-1.jpg'
            ],
            'title' => [
              'zh' => '膠水滾輪',
              'cn' => '胶水滚轮',
              'en' => 'Vacuum adherence',
              'ko' => ''
            ],
            'description' => [
              'zh' => '膠水組合及膠輪設計精准簡潔，使機器達到易於操作、易於清洗、易於保養。',
              'cn' => '胶水组合及胶轮设计精准简洁，使机器达到易於操作丶易於清洗丶易於保养。',
              'en' => 'The label is hold-up on its back side by a blower/vacuum system and is precisely and smoothly pressed on bottle. Standard no-bottle-no-label mechanism is ensured with a photo sensor control.',
              'ko' => ''
            ]
          ],
          [
            // ⚡ 第二組：Steel type wheel (右文左圖)
            'images' => [
              'zh' => 'img-features-2.jpg',
              'cn' => 'img-features-2.jpg',
              'en' => 'img-features-en-2.jpg',
              'ko' => 'img-features-en-2.jpg'
            ],
            'title' => [
              'zh' => '真空吸引',
              'cn' => '真空吸引',
              'en' => 'Rollers',
              'ko' => ''
            ],
            'description' => [
              'zh' => '使用真空吸標將貼桿上的標籤反面吸住，平整的將標籤黏貼於瓶子上，運用電眼監視控制，達到無瓶無標的目的。',
              'cn' => '使用真空吸标将贴杆上的标签反面吸住，平整的将标签黏贴於瓶子上，运用电眼监视控制，达到无瓶无标的目的。',
              'en' => 'It is in a simple design for ease of operation, cleaning and maintenance.',
              'ko' => ''
            ]
          ],
          [
            // ⚡ 第三組：Insert (左文右圖 - 索引為 3，故會自動維持左文右圖的節奏)
            'images' => [
              'zh' => 'img-features-3.jpg',
              'cn' => 'img-features-3.jpg',
              'en' => '',
              'ko' => ''
            ],
            'title' => [
              'zh' => '雙標盒設計',
              'cn' => '双标盒设计',
              'en' => '',
              'ko' => ''
            ],
            'description' => [
              'zh' => '雙標盒設計可滿足前後兩張標貼標的需求，特別適用于葡萄酒、白酒、黃酒及食品等行業。',
              'cn' => '双标盒设计可满足前後两张标贴标的需求，特别适用于葡萄酒丶白酒丶黄酒及食品等行业。',
              'en' => '',
              'ko' => ''
            ]
          ],
          [
            // ⚡ 第四組：Insert (右文左圖 - 索引為 4，故會自動維持右文左圖的節奏)
            'images' => [
              'zh' => 'img-features-4.jpg',
              'cn' => 'img-features-4.jpg',
              'en' => '',
              'ko' => ''
            ],
            'title' => [
              'zh' => '三組貼頭',
              'cn' => '三组贴头',
              'en' => '',
              'ko' => ''
            ],
            'description' => [
              'zh' => '三組式貼頭，可以達到2倍貼標速度。',
              'cn' => '三组式贴头，可以达到2倍贴标速度。',
              'en' => '',
              'ko' => ''
            ]
          ],
          [
            // ⚡ 第五組：Insert (左文右圖 - 索引為 5，故會自動維持左文右圖的節奏)
            'images' => [
              'zh' => 'img-features-5.jpg',
              'cn' => 'img-features-5.jpg',
              'en' => '',
              'ko' => ''
            ],
            'title' => [
              'zh' => '四組貼頭',
              'cn' => '四组贴头',
              'en' => '',
              'ko' => ''
            ],
            'description' => [
              'zh' => '四組式貼頭，可以達到3倍貼標速度。',
              'cn' => '四组式贴头，可以达到3倍贴标速度。',
              'en' => '',
              'ko' => ''
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
                    <th>JC-M</th>
                    <th>JC-MM</th>
                    <th>JC-L</th>
                    <th>JC-LL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">瓶直徑（mm）</td>
                    <td colspan="2">16-70</td>
                    <td colspan="2">30-100</td>
                  </tr>
                  <tr>
                    <td class="label">標籤尺寸（mm）-高(H)x寬(L)</td>
                    <td colspan="2">20-80 x 50-100</td>
                    <td>40-180 x 50-300</td>
                    <td>40-180 x 50-110</td>
                  </tr>
                  <tr>
                    <td class="label">生產速度（bpm）</td>
                    <td>40-80</td>
                    <td>80-140</td>
                    <td>50-100</td>
                    <td>80-140</td>
                  </tr>
                  <tr>
                    <td class="label">使用電源（VAC）</td>
                    <td colspan="4">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">電機功率（kw）</td>
                    <td colspan="2">0.8</td>
                    <td colspan="2">1.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗氣量（min）</td>
                    <td colspan="4">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">使用黏著劑</td>
                    <td colspan="4">樹脂膠 resin</td>
                  </tr>
                  <tr>
                    <td class="label">機器重量（kg）</td>
                    <td>550</td>
                    <td>600</td>
                    <td>550</td>
                    <td>600</td>
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
                    <th>JC-LH</th>
                    <th>JC-HX</th>
                    <th>JC-X</th>
                    <th>JC-3M</th>
                    <th>JC-4M</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Bottle Die (mm)</td>
                    <td colspan="2">50-80</td>
                    <td>80-120</td>
                    <td colspan="2">30-80</td>
                  </tr>
                  <tr>
                    <td class="label">Label Size (mm) - H x L</td>
                    <td>40-140 x 140-240</td>
                    <td>100-150</td>
                    <td>40-110 x 50-360</td>
                    <td>40-140 x 100-180</td>
                    <td>40-90 x 50-90</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>60-120</td>
                    <td>100-150</td>
                    <td>30-50</td>
                    <td>120-180</td>
                    <td>160-280</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="2">1.0</td>
                    <td colspan="3">1.4</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="5">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Type of Paste</td>
                    <td colspan="5">樹脂膠 resin</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
                    <td colspan="4">600</td>
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
                    <th>JC-M</th>
                    <th>JC-MM</th>
                    <th>JC-L</th>
                    <th>JC-LL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">瓶直径 (mm)</td>
                    <td colspan="2">16-70</td>
                    <td colspan="2">30-100</td>
                  </tr>
                  <tr>
                    <td class="label">标签尺寸 (mm) - 高(H) x 长(L)</td>
                    <td colspan="2">20-80 x 50-100</td>
                    <td>40-180 x 50-300</td>
                    <td>40-180 x 50-110</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>40-80</td>
                    <td>80-140</td>
                    <td>50-100</td>
                    <td>80-140</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="4">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率 (kw)</td>
                    <td colspan="2">0.8</td>
                    <td colspan="2">1.0</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="4">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">使用黏合剂</td>
                    <td colspan="4">树脂胶 resin</td>
                  </tr>
                  <tr>
                    <td class="label">机械重量 (kg)</td>
                    <td>550</td>
                    <td>600</td>
                    <td>550</td>
                    <td>600</td>
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
                    <th>JC-LH</th>
                    <th>JC-HX</th>
                    <th>JC-X</th>
                    <th>JC-3M</th>
                    <th>JC-4M</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">瓶径 (mm)</td>
                    <td colspan="2">50-80</td>
                    <td>80-120</td>
                    <td colspan="2">30-80</td>
                  </tr>
                  <tr>
                    <td class="label">标签尺寸 (mm) - 高 x 长</td>
                    <td>40-140 x 140-240</td>
                    <td>100-150</td>
                    <td>40-110 x 50-360</td>
                    <td>40-140 x 100-180</td>
                    <td>40-90 x 50-90</td>
                  </tr>
                  <tr>
                    <td class="label">生产速度 (bpm)</td>
                    <td>60-120</td>
                    <td>100-150</td>
                    <td>30-50</td>
                    <td>120-180</td>
                    <td>160-280</td>
                  </tr>
                  <tr>
                    <td class="label">使用电源 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>单相 / 三相</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">电机功率 (kw)</td>
                    <td colspan="2">1.0</td>
                    <td colspan="3">1.4</td>
                  </tr>
                  <tr>
                    <td class="label">耗气量 (min)</td>
                    <td colspan="5">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">胶水类型</td>
                    <td colspan="5">树脂胶 resin</td>
                  </tr>
                  <tr>
                    <td class="label">机械重量 (kg)</td>
                    <td>550</td>
                    <td colspan="4">600</td>
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
                    <th>JC-M</th>
                    <th>JC-MM</th>
                    <th>JC-L</th>
                    <th>JC-LL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Bottle Die (mm)</td>
                    <td colspan="2">16-70</td>
                    <td colspan="2">30-100</td>
                  </tr>
                  <tr>
                    <td class="label">Label Size (mm) - H x L</td>
                    <td colspan="2">20-80 x 50-100</td>
                    <td>40-180 x 50-300</td>
                    <td>40-180 x 50-110</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>40-80</td>
                    <td>80-140</td>
                    <td>50-100</td>
                    <td>80-140</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="4">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="2">0.8</td>
                    <td colspan="2">1.0</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="4">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Type of Paste</td>
                    <td colspan="4">樹脂膠 resin</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
                    <td>600</td>
                    <td>550</td>
                    <td>600</td>
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
                    <th>JC-LH</th>
                    <th>JC-HX</th>
                    <th>JC-X</th>
                    <th>JC-3M</th>
                    <th>JC-4M</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Bottle Die (mm)</td>
                    <td colspan="2">50-80</td>
                    <td>80-120</td>
                    <td colspan="2">30-80</td>
                  </tr>
                  <tr>
                    <td class="label">Label Size (mm) - H x L</td>
                    <td>40-140 x 140-240</td>
                    <td>100-150</td>
                    <td>40-110 x 50-360</td>
                    <td>40-140 x 100-180</td>
                    <td>40-90 x 50-90</td>
                  </tr>
                  <tr>
                    <td class="label">Speed (bpm)</td>
                    <td>60-120</td>
                    <td>100-150</td>
                    <td>30-50</td>
                    <td>120-180</td>
                    <td>160-280</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Power Consumption (kw)</td>
                    <td colspan="2">1.0</td>
                    <td colspan="3">1.4</td>
                  </tr>
                  <tr>
                    <td class="label">Air Consumption (min)</td>
                    <td colspan="5">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">Type of Paste</td>
                    <td colspan="5">樹脂膠 resin</td>
                  </tr>
                  <tr>
                    <td class="label">Machine Weight (kg)</td>
                    <td>550</td>
                    <td colspan="4">600</td>
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
                    <th>JC-M</th>
                    <th>JC-MM</th>
                    <th>JC-L</th>
                    <th>JC-LL</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">병 직경 (mm)</td>
                    <td colspan="2">16-70</td>
                    <td colspan="2">30-100</td>
                  </tr>
                  <tr>
                    <td class="label">라벨 크기 (mm) - H x L</td>
                    <td colspan="2">20-80 x 50-100</td>
                    <td>40-180 x 50-300</td>
                    <td>40-180 x 50-110</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>40-80</td>
                    <td>80-140</td>
                    <td>50-100</td>
                    <td>80-140</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="4">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>single phase / 3 phase</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="2">0.8</td>
                    <td colspan="2">1.0</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="4">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">접착제 종류</td>
                    <td colspan="4">수지풀 (Resin)</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>550</td>
                    <td>600</td>
                    <td>550</td>
                    <td>600</td>
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
                    <th>JC-LH</th>
                    <th>JC-HX</th>
                    <th>JC-X</th>
                    <th>JC-3M</th>
                    <th>JC-4M</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">병 직경 (mm)</td>
                    <td colspan="2">50-80</td>
                    <td>80-120</td>
                    <td colspan="2">30-80</td>
                  </tr>
                  <tr>
                    <td class="label">라벨 크기 (mm) - H x L</td>
                    <td>40-140 x 140-240</td>
                    <td>100-150</td>
                    <td>40-110 x 50-360</td>
                    <td>40-140 x 100-180</td>
                    <td>40-90 x 50-90</td>
                  </tr>
                  <tr>
                    <td class="label">생산 속도 (bpm)</td>
                    <td>60-120</td>
                    <td>100-150</td>
                    <td>30-50</td>
                    <td>120-180</td>
                    <td>160-280</td>
                  </tr>
                  <tr>
                    <td class="label">전원 (VAC)</td>
                    <td colspan="5">
                      <span>220V / 380V / 440V</span>
                      <span>50HZ / 60HZ</span>
                      <span>단상 / 삼상</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="label">소비 전력 (kw)</td>
                    <td colspan="2">1.0</td>
                    <td colspan="3">1.4</td>
                  </tr>
                  <tr>
                    <td class="label">공기 소모량 (min)</td>
                    <td colspan="5">4-6 Kgs x 18 Liter</td>
                  </tr>
                  <tr>
                    <td class="label">접착제 종류</td>
                    <td colspan="5">수지풀 (Resin)</td>
                  </tr>
                  <tr>
                    <td class="label">기계 중량 (kg)</td>
                    <td>550</td>
                    <td colspan="4">600</td>
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