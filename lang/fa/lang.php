<?php return [
    'plugin' => [
        'name' => 'حق التدریس',
        'description' => ' اداره کل آموزش و پرورش خراسان شمالی',
        'topmenu' => 'منوی افقی بالا'
    ],
    'tables' => [
        'cities' => [
            'title' => 'شهرستان / منطقه ',
            'code' => 'کد ',
            'code_placeholder' => 'کد چهار رقمی شهرستان / منطقه ',
            'name' => 'نام',
            'name_placeholder' => 'نام شهرستان / منطقه'
        ],
        'courses' => [
            'title' => 'دوره تحصیلی',
            'name' => 'دوره تحصیلی ',
            'name_placeholder' => 'دوره تحصیلی '
        ],
        'genders' => [
            'title' => 'جنسیت',
            'name' => 'جنسیت',
            'name_placeholder' => 'جنسیت'
        ],
        'monthly_performances' => [
            'title' => 'عملکرد ماهیانه حق التدریس',
            'hours' => 'ساعت',
            'hours_placeholder' => 'عملکرد ماهیانه بر حسب ساعت'
        ],
        'months' => [
            'title' => 'ماه های سال',
            'name' => 'ماه',
            'name_placeholder' => 'نام ماه',
            'number_of_month' => 'عدد ماه',
            'number_of_weeks' => 'تعداد هفته کاری در ماه'
        ],
        'stratios' => [
            'title' => 'نسبت دانش آموز به گروه معلم حق التدریس',
            'contract_ratio' => 'قرارداد',
            'contract_ratio_placeholder' => 'میزان ساعت قرارداد',
            'available_ratio' => 'موجود',
            'available_ratio_placeholder' => 'میزان ساعت موجود',
            'contract_per_week_emp' => 'قرارداد در هفته شاغلین',
            'contract_per_week_emp_placeholder' => 'میزان قرارداد در هفته شاغلین',
            'contract_per_week_toi' => 'قرارداد در هفته حق التدریس آزاد',
            'contract_per_week_toi_placeholder' => 'میزان قرارداد در هفته حق التدریس آزاد'
        ],
        'emptypes' => [
            'title' => 'نوع حق التدریس',
            'type' => 'نوع حق التدریس',
            'type_placeholder' => 'نوع حق التدریس'
        ],
        'years' => [
            'title' => 'سال تحصیلی',
            'name' => 'سال تحصیلی',
            'name_placeholder' => 'سال تحصیلی'
        ],
        'weekly_contracts' => [
            'title' => 'قرارداد ساعت هفتگی حق التدریس',
            'hours' => 'ساعت حق التدریس '
            
        ],
        'signatures' => [
            'title' => 'امضاء تایید کنندگان',
            'name' => 'نام ',
            'name_placeholder' => 'نام امضاء کننده ',
            'post_title' => 'سمت',
            'post_title_placeholder' => 'سمت اداری امضاء کننده'
        ]
    ],
    'dashboard' => [
        'title' => 'داشبورد',
        'tab1' => 'گزارش حق التدریس شاغل',
        'tab2' => 'گزارش حق التدریس آزاد',
        'tab3' => 'گزارش کلی حق التدریس'
    ],
    'settings' => [
        'title' => 'جداول'
    ],
    'permission' => [
        'tb_top_menu' => 'منوی اصلی طرح و برنامه',
        'tb_cities' => ' شهرستان / منطقه ',
        'tb_courses' => 'دوره های تحصیلی ',
        'tb_monthly_performances' => 'عملکرد ماهیانه',
        'tb_st_ratios' => 'ثبت قرارداد ',
        'tb_genders' => 'جنسیت',
        'tb_months' => 'ماه های سال',
        'tb_emptypes' => 'نوع حق التدریس',
        'tb_dashboard' => 'داشبورد',
        'tb_years' => 'سال تحصیلی',
        'tb_weekly_hours' => 'قرارداد ساعت هفتگی حق التدریس',
        'tb_signatures' => 'امضاء کنندگان'
    ],
    'global' => [
        'sidenav' => [
            'default' => 'پیش فرض',
            'main' => 'اصلی',
            'settings' => 'تنظیمات'
        ]
    ],
    'report' => [
        'empteach' => [
            'free' => 'گزارش حق التدریس آزاد',
            'comments' => 'توضیحات',
            'emptype' => 'نوع حق التدریس',
            'freeandemp' => ' حق التدریس آزاد و شاغل'
        ]
        ],
        'components' => [
            'empteachfeereport' => [
                'name' => 'گزارش حق التدریس آزاد',
                'description' => 'گزارش جهت چاپ'
            ]
        ]
];