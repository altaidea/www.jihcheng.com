<?php
// 內容管理 // 水平式計量充填包裝機
return [
// Products.php
  'h-w-filling-and-packaging' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['granule', 'powder', 'liquid'],
    // 'slug' => 'h-w-filling-and-packaging-machine',
    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '水平式計量充填包裝機',
      'en' => 'Horizontal Weighing, Filling & Packaging Machine'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'ahm/ahm.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'h-w-filling-and-packaging',
      // series-intro
      'intro' => [
        'zh' => '
          
        ',
        'en' => '
          
        '
      ],

      // products-series.php + products-detail.php
      'ahm' => [
        'slug' => 'ahm',
        'new_patent' => ['enabled' => false,], 
        'type' => 'AHM-1 / AHM-2', 
        'title' => [
          'zh' => 'AHM 水平自動包裝機',
          'en' => 'AHM Horizontal Auto Packing Machine (paper roll type)',
        ],
        'image' => [
          'ahm.webp',
        ],
        'image_class' => [
          'h-style'
        ],
        'features' => [
          'intro' => [
            'zh'=>'
              AHM 是一款特殊的切換式高速包裝機。該機台採用全伺服技術與 PLC 微電腦控制，運行平穩。此外，配備移動式觸控人機互動介面，操作簡便，並設有安全防護門，易於清潔與維護。<br/>本機台適用於食品、醫藥、農藥及日化用品等包裝。針對液體、粉末、顆粒等不同產品，可採用不同的充填方式。此外，還可配備光電感應裝置、日期機及易開撕裂口。<br/>包裝形式：三邊封、四邊封袋或自立袋（Doypack 類型）。
            ',
            'en'=>'
              AHM is special high speed packing machine. It operates via full servo technologies and PLC microcomputer control with stable operation. Also, it is with mobile touchscreen interactive interface, which is easy to operate and with safely doors, which is easy to clean and maintain.<br/>
              The machine is suitable for packing foodstuff, pharmaceuticals, pesticide and daily using chemicals, etc. Different filling methods can be used for different products, such as liquid, powder, granule. Additionally, it can be equipped with photoelectric cell device, printers, tear notch.<br/>
              Packing type：three-side or four-side sealed sachets or stand-up pouches (doypack type)
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
            'zh'=>'
              顆粒、奶粉、碳粉、清潔劑、藥粉等。
            ',
            'en'=>'
              Granule, Milk Powder, Toner, Detergent, Powder Medicine, etc.
            '
          ],

          'items' => [
            [
              'img' => ['ahm-sample-1.webp'],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
            [
              'img' => ['ahm-sample-2.webp'],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
            [
              'img' => ['ahm-sample-3.webp'],
              'text'  => [
                'zh'=>'',
                'en'=>''
              ]
            ],
          ]
        ],

        // OPTIONAL EQUIPMENT
        'optional_equipment' => [
          'intro' => [
            'zh'=>'
              1. 電腦自動秤重機
              2. 螺旋充填機
              3. 液體 / 漿體充填機
              4. 容積式計量杯充填機
            ',
            'en'=>'
              1. Computerized weigher
              2. Auger filler
              3. Filler for liquid or pasty products
              4. Volumetric cup filler
            '
          ],

          'items' => [
            [
              'img' => [''],
              'text'  => [
                'zh'=>'intro',
                'en'=>'intro'
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
                    <th>AHM-1 (Single bags)</th>
                    <th>AHM-2 (Dual-link bags)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">充填容積 / 充填量</td>
                    <td>50~200ml </td>
                    <td>20~100ml</td>
                  </tr>
                  <tr>
                    <td class="label">包裝速度</td>
                    <td>40~60 bag/min</td>
                    <td>80~120 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">包裝尺寸</td>
                    <td>W 80~100 mm<br/>L 180~225 mm</td>
                    <td>W (60+60)x L 70 mm<br/>W (90+90)x L 220 mm</td>
                  </tr>
                  <tr>
                    <td class="label">電源規格 / 功率</td>
                    <td>220/380V 5KW</td>
                    <td>220/380V 5KW</td>
                  </tr>
                  <tr>
                    <td class="label">機械外型尺寸<br/>L x W x H (m/m)</td>
                    <td>3200x1000x1600</td>
                    <td>3200x1000x1600</td>
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
                    <th>AHM-1 (Single bags)</th>
                    <th>AHM-2 (Dual-link bags)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Filling Volume </td>
                    <td>50~200ml </td>
                    <td>20~100ml</td>
                  </tr>
                  <tr>
                    <td class="label">Packing Speed </td>
                    <td>40~60 bag/min</td>
                    <td>80~120 bag/min</td>
                  </tr>
                  <tr>
                    <td class="label">Packing Size </td>
                    <td>W 80~100 mm<br/>L 180~225 mm</td>
                    <td>W (60+60)x L 70 mm<br/>W (90+90)x L 220 mm</td>
                  </tr>
                  <tr>
                    <td class="label">Power Source</td>
                    <td>220/380V 5KW</td>
                    <td>220/380V 5KW</td>
                  </tr>
                  <tr>
                    <td class="label"> Dimensions<br/>L x W x H (m/m)</td>
                    <td>3200x1000x1600</td>
                    <td>3200x1000x1600</td>
                  </tr>
                </tbody>
              </table>
            '
          ],

          'table_note' => [
            'zh'=>'*不含空氣壓縮機',
            'en'=>'*Air compressor is not included'
          ],

          'machine-line' => [
            [
              'image' => 'ahm-mchineline-1.webp',
              'text'  => ['zh'=>'','en'=>''],
            ],
            [
              'image' => 'ahm-mchineline-2.webp',
              'text'  => ['zh'=>'','en'=>''],
            ],
            [
              'image' => 'ahm-mchineline-3.webp',
              'text'  => ['zh'=>'','en'=>''],
            ]
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
      ]
    ],

  ], // 水平式計量充填包裝機 END
]
?>