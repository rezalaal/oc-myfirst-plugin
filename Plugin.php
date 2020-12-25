<?php namespace Rezalaal\Tb;

use Backend;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function registerPDFTemplates()
    {
        return [
            'rezalaal.tb::pdf.invoice',
        ];
    }

    public function registerPDFLayouts()
    {
        return [
            'rezalaal.tb::pdf.layouts.default',
        ];
    }

    public function registerComponents()
    {
        return [
            'Rezalaal\Tb\Components\EmpTeachFeeReport' => 'empteachfeereport'
        ];
    }

    public function registerSettings()
    {
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */ 
    public function registerPermissions()
    {
        return [
            'rezalaal.tb.tb_top_menu' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_top_menu'
            ],
            'rezalaal.tb.tb_dashboard' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_dashboard'
            ],
            'rezalaal.tb.tb_cities' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_cities'
            ],            
            'rezalaal.tb.tb_courses' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_courses'
            ],             
            'rezalaal.tb.tb_monthly_performances' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_monthly_performances'
            ], 
            'rezalaal.tb.tb_st_ratios' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_st_ratios'
            ], 
            'rezalaal.tb.tb_genders' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_genders'
            ], 
            'rezalaal.tb.tb_months' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_months'
            ], 
            'rezalaal.tb.tb_emptypes' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_emptypes'
            ], 
            'rezalaal.tb.tb_years' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.permission.tb_years'
            ], 
            'rezalaal.tb.tb_weekly_hours' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.tables.weekly_contracts.title'
            ], 
            'rezalaal.tb.tb_signatures' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.tables.signatures.title'
            ],
            'rezalaal.tb.tb_empteachfeereport' => [
                'tab' => 'rezalaal.tb::lang.plugin.name',
                'label' => 'rezalaal.tb::lang.report.empteach.freeandemp'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'tb' => [
                'label'       => 'rezalaal.tb::lang.plugin.name',
                'url'         => Backend::url('rezalaal/tb/dashboard'),
                'icon'        => 'icon-pie-chart',
                'permissions' => ['rezalaal.tb.tb_top_menu'],
                'order'       => 500,

                'sideMenu' => [    
                    'dashboard' => [ 
                        'label'       => 'rezalaal.tb::lang.dashboard.title',
                        'icon'        => 'icon-sun-o',
                        'url'         => Backend::url('rezalaal/tb/dashboard'),                        
                        'permissions' => ['rezalaal.tb.dashboard'],
                        'group'       => 'main',
                        'description' => 'main'
                    ],  
                    'monthly_performances' => [ 
                        'label'       => 'rezalaal.tb::lang.tables.monthly_performances.title',
                        'icon'        => 'icon-sellsy',
                        'url'         => Backend::url('rezalaal/tb/monthlyperformances'),                        
                        'permissions' => ['rezalaal.tb.tb_monthly_performances'],
                        'group'       => 'main',
                        'description' => 'main'
                    ],  
                    'empteachfeereport' => [ 
                        'label'       => 'rezalaal.tb::lang.report.empteach.freeandemp',
                        'icon'        => 'icon-bar-chart',
                        'url'         => Backend::url('rezalaal/tb/dashboard/empteachfeereport'),                        
                        'permissions' => ['rezalaal.tb.tb_empteachfeereport'],
                        'group'       => 'settings',
                        'description' => 'settings',
                    ],  
                    'settings' => [ 
                        'label'       => 'rezalaal.tb::lang.settings.title',
                        'icon'        => 'icon-database',
                        'url'         => Backend::url('rezalaal/tb/dashboard/settings'),                        
                        'permissions' => ['rezalaal.tb.tb_dashboard'],
                        'group'       => 'settings',
                        'description' => 'settings',
                    ],     
                    // 'st_ratio' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.stratios.title',
                    //     'icon'        => 'icon-newspaper-o',
                    //     'url'         => Backend::url('rezalaal/tb/stratios'),                        
                    //     'permissions' => ['rezalaal.tb.tb_st_ratios'],
                    //     'group'       => 'main',
                    //     'description' => 'main',
                    // ],                           
                    // 'weekly_hours' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.weekly_contracts.title',
                    //     'icon'        => 'icon-pencil-square-o',
                    //     'url'         => Backend::url('rezalaal/tb/weeklycontract'),                        
                    //     'permissions' => ['rezalaal.tb.tb_weekly_hours'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],
                    // 'cities' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.cities.title',
                    //     'icon'        => 'icon-bank',
                    //     'url'         => Backend::url('rezalaal/tb/cities'),                        
                    //     'permissions' => ['rezalaal.tb.tb_cities'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],
                    // 'courses' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.courses.title',
                    //     'icon'        => 'icon-building-o',
                    //     'url'         => Backend::url('rezalaal/tb/courses'),                        
                    //     'permissions' => ['rezalaal.tb.tb_courses'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],
                    // 'genders' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.genders.title',
                    //     'icon'        => 'icon-venus-double',
                    //     'url'         => Backend::url('rezalaal/tb/genders'),                        
                    //     'permissions' => ['rezalaal.tb.tb_genders'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],                    
                    // 'months' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.months.title',
                    //     'icon'        => 'icon-moon-o',
                    //     'url'         => Backend::url('rezalaal/tb/months'),                        
                    //     'permissions' => ['rezalaal.tb.tb_months'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],       
                    // 'years' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.years.title',
                    //     'icon'        => 'icon-adjust',
                    //     'url'         => Backend::url('rezalaal/tb/years'),                        
                    //     'permissions' => ['rezalaal.tb.tb_years'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings'
                    // ],               
                    // 'emptypes' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.emptypes.title',
                    //     'icon'        => 'icon-pencil-square-o',
                    //     'url'         => Backend::url('rezalaal/tb/emptypes'),                        
                    //     'permissions' => ['rezalaal.tb.tb_emptypes'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],
                    // 'signatures' => [ 
                    //     'label'       => 'rezalaal.tb::lang.tables.signatures.title',
                    //     'icon'        => 'icon-forumbee',
                    //     'url'         => Backend::url('rezalaal/tb/signatures'),                        
                    //     'permissions' => ['rezalaal.tb.tb_signatures'],
                    //     'group'       => 'settings',
                    //     'description' => 'settings',
                    // ],
                ]
            ],
        ];
    }

}
