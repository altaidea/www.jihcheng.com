<?php
// 酒精棉片充填包裝機 // 內容管理 
return [
// Products.php
  'alcohol-pad-packing-mc' => [
    // --- 新增：分類識別標籤
    'category_tags' => ['others'],

    // New Patents 是否判定 // true 顯示，false 不顯示
    'new_patent' => ['enabled' => false,], 

    // series-name
    'title' => [
      'zh' => '酒精棉片充填包裝機',
      'en' => 'Alcohol Pad Packing M/C'
    ],

    // series 主視覺圖片（Swiper 主圖）
    'images' => [
      [
        'src' => 'amc/amc.webp',
        'caption' => [
          'zh' => '',
          'en' => '',
        ],
      ],
    ],

    // products-series.php
    'series' => [
      'slug' => 'alcohol-pad-packing-mc',
      // series-intro
      'intro' => [
        'zh' => '
          
        ',
        'en' => '
          
        '
      ],

      // products-series.php + products-detail.php
      'amc' => [
        'slug' => 'amc',
        
        // New Patents 是否判定 // true 顯示，false 不顯示
        'new_patent' => ['enabled' => false,], 
        'new_patent_title' => ['zh' => '', 'en' => ''],

        'title' => [
          'zh' => 'AMC 自動酒精棉片包裝機 / 全自動小樣包裝機',
          'en' => 'AMC Automatic Alcohol pad packing machine / sachet packing machine',
        ],

        'type' => '', 
        'type_ml' => [
          'zh'=>'AMC-1(單包式) / AMC-2 (雙包式)',
          'en'=>'AMC-1(Single bag type) / AMC-2 (Double bags type)'
        ], 

        'image' => [
          'amc.webp',
          'amc-1.webp'
        ],

        'image_class' => [
          'h-style',
          'box-style'
        ],

        // ADVANTAGES
        'advantages' => [
          'intro' => [
            'zh'=>'本機參照世界領先的紙張與不織布包裝機械技術進行設計，專門適用於酒精棉片、採樣棉棒等產品的三邊封口包裝。',
            'en'=>'We make design of the machine according to the world advanced paper and no woven  packing machinery technology, and it is suitable for three side sealing of alcohol pad, swab ect.'
          ],

          'option' => [
            // 'zh'=>'',
            // 'en'=>''
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
                  兼顧環保、衛生、節省攜帶及使用方便之多用途之包裝機。
                </li>
                <li>
                  全採用PLC 系統電控裝置，人機操作，調整簡單，操作方便之高科技機台。
                </li>
                <li>
                  本機適合使用不織布、紗布、濕紙巾之棉紙包裝。
                </li>
                <li>
                  使用進口充填幫浦,調整容易，可在0.1-20ml 內調整。
                </li>
                <li>
                  本機外觀及主要零件均採用不銹鋼 SUS 304，清洗容易，衛生美觀，符合生醫科技之衛生規範要求之機台。
                </li>
                <li>
                  包裝方式能依客戶實際使用要求，單包、雙包、三包性之機型。
                </li>
                <li>
                  在一定的範圍內，可以客製化客戶尺寸規格、包材厚度、充填不同之原料之機台。
                </li>
                <li>
                  可另選購紙袋之UV殺菌裝置及印日期機。
                </li>
              </ul>
            ',
            'en'=>'
              <ul>
                <li>Taking into account environmental protection, health, savings and convenience to bring the multi-packaging machine .</li>
                <li>Adopts PLC control system with touch screen panel, adjustment simple and convenient operation of the high-tech machine. </li>
                <li>This machine suitable for the use of non-woven, gauze, wet tissue packaging of tissue paper</li>
                <li>Equipped with imported filling pumps; easy to adjust within a range of 0.1–20ml.</li>
                <li>Appearance and the main parts of this machine are made of stainless steel SUS 304, easy to clean, sanitary appearance, in line with Health and Medical Science and Technology of the health of the machine specifications. </li>
                <li>Packaged in a manner that the actual use in accordance with customer requirements, a single bag, double bag, three bags of the models. </li>
                <li>In a certain range, it can be customized customer size specifications, package material thickness, filled with different materials of the machine.</li>
                <li>Option Device: bags of UV disinfection device or date coding device</li>
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

        // APPLICATIONS
        'applications' => [
          'intro' => [
            'zh'=>'
              酒精棉片、碘酒棉片、眼鏡擦拭片、濕紙巾、澗滑膠、化粧水、乳液、指甲油去光水等各醫療及化粧品等用品
            ',
            'en'=>'
              Alcohol cotton bandage, Alcohol cotton pad, Iodine pad, Glasses cleaning pad, Wet wipes, Slip jelly, Lubricating Jelly, Lotion, Nail polish remove pad,such as the various medical and cosmetic products
            '
          ],

          'items' => [
            [
              'img' => ['amc-app-1.webp', 'amc-app-2.webp', 'amc-app-3.webp'],
              // 'text'  => [
              //   'zh'=>'',
              //   'en'=>''
              // ]
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
                    <th style="width:40%;">AMC-1<br/>單包式</th>
                    <th style="width:40%;">AMC-2<br/>雙包式</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">包裝袋尺寸</td>
                    <td>袋寬 50～80 mm<br/>袋長 50～80 mm</td>
                    <td>袋寬 100～120 mm<br/>袋長 50～80 mm</td>
                  </tr>
                  <tr>
                    <td class="label">包裝能力</td>
                    <td>每分鐘 30～45包<br/>(依不同產品流動性而定)</td>
                    <td>每分鐘 30～80包<br/>(依不同產品流動性而定)</td>
                  </tr>
                  <tr>
                    <td class="label">使用電力</td>
                    <td colspan="2">
                      AC 220 V - 440 V<br/>
                      (可依不同國家客製)
                    </td>
                  </tr>
                  <tr>
                    <td class="label">空壓機</td>
                    <td colspan="2">7.5 HP (本機使用的空壓機設備由客人自備)</td>
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
                        <span class="bottom-left">Specs</span>
                      </div>
                    </th>
                    <th style="width:40%;">AMC-1<br/>Single Bag</th>
                    <th style="width:40%;">AMC-2<br/>Double Bag</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="label">Bag Size</td>
                    <td>Width: 50–80 mm<br/>Length: 50–80 mm</td>
                    <td>Width: 100–120 mm<br/>Length: 50–80 mm</td>
                  </tr>
                  <tr>
                    <td class="label">Packaging Capacity</td>
                    <td>30–45 ppm<br/>(Subject to product fluidity)</td>
                    <td>30–80 ppm<br/>(Subject to product fluidity)</td>
                  </tr>
                  <tr>
                    <td class="label">Power Supply</td>
                    <td colspan="2">
                      AC 220 V - 440 V<br/>
                      (Customizable by country)
                    </td>
                  </tr>
                  <tr>
                    <td class="label">Air Compressor</td>
                    <td colspan="2">7.5 HP (Air compressor provided by customer)</td>
                  </tr>
                </tbody>
              </table>
            ',
          ],

          'table_note' => [
            'zh'=>'* 其他包裝尺寸可以客製化設計',
            'en'=>'* Other packaging sizes can be customized.'
          ],

          'machine-line' => [
            // [
            //   'image' => '',
            //   'text'  => ['zh'=>'','en'=>''],
            // ]
          ],

          'machine-combin' => [
            // [
            //   'combin_name' => '',
            //   'combin_type'  => '',
            //   'image' => [
            //     'URL',
            //     'URL'
            //   ]
            // ]
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
        //             <th>AMC-1<br/>單包式</th>
        //             <th>AMC-2<br/>雙包式</th>
        //             <th>AMC-3<br/>三包式</th>
        //           </tr>
        //         </thead>
        //         <tbody>
        //           <tr>
        //             <td class="label">充填容量</td>
        //             <td colspan="3">0～20 ml / piece</td>
        //           </tr>
        //           <tr>
        //             <td class="label">包裝尺寸</td>
        //             <td>L 40~120 mm<br/>W 40~80 mm</td>
        //             <td>L 35~60 mm<br/>W 40~80 mm</td>
        //             <td>L 35~60 mm<br/>W 40~80 mm</td>
        //           </tr>
        //           <tr>
        //             <td class="label">包裝速度</td>
        //             <td>50~60 bag/min<br/>(依袋子尺寸)</td>
        //             <td>100~120 bag/min<br/>(依袋子尺寸)</td>
        //             <td>120~150 bag/min<br/>(依袋子尺寸)</td>
        //           </tr>
        //           <tr>
        //             <td class="label">使用電力</td>
        //             <td colspan="3">
        //               AC220 單相/三相 1/2HP<br/>
        //               (電壓可依客戶需求調整)
        //             </td>
        //           </tr>
        //           <tr>
        //             <td class="label">空壓機</td>
        //             <td colspan="3">5 HP (不含空壓機，客戶自備)</td>
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
        //             <th>AMC-1<br/>Single bag type</th>
        //             <th>AMC-2<br/>Double bag type</th>
        //             <th>AMC-3<br/>Three bag type</th>
        //           </tr>
        //         </thead>
        //         <tbody>
        //           <tr>
        //             <td class="label">Filling capacity</td>
        //             <td colspan="3">0~20 ml/pieces</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Bag size</td>
        //             <td>L40~120 mm<br/>W40~80 mm</td>
        //             <td>L35~60 mm<br/>W40~80 mm</td>
        //             <td>L35~60 mm<br/>W40~80 mm</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Packing capacity</td>
        //             <td>50~60 bag/min<br/>(depend on bag size)</td>
        //             <td>100~120 bag/min<br/>(depend on bag size)</td>
        //             <td>120~150 bag/min<br/>(depend on bag size)</td>
        //           </tr>
        //           <tr>
        //             <td class="label">Electric power</td>
        //             <td colspan="3">
        //               AC220 Single Phase/Three Phase 1/2HP<br/>
        //               (Voltage can be changed according to customer demand)
        //             </td>
        //           </tr>
        //           <tr>
        //             <td class="label">Air compressor</td>
        //             <td colspan="3">5 HP (Buyer provide Air composer)</td>
        //           </tr>
        //         </tbody>
        //       </table>
        //     '
        //   ],

        //   'table_note' => [
        //     // 'zh'=>'* 選配裝置：可另選購紙袋之UV殺菌裝置及印日期機',
        //     // 'en'=>'* Option Devices: UV disinfection device or date coding device for bag.'
        //   ],

        //   'machine-line' => [
        //     // [
        //     //   'image' => '',
        //     //   'text'  => ['zh'=>'','en'=>''],
        //     // ]
        //   ],

        //   'machine-combin' => [
        //     // [
        //     //   'combin_name' => '',
        //     //   'combin_type'  => '',
        //     //   'image' => [
        //     //     'URL',
        //     //     'URL'
        //     //   ]
        //     // ]
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
    ],

  ], // 酒精棉片充填包裝機 END
]
?>