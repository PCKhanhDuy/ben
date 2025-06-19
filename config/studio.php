<?php
$prefixAdmin = 'vfr-admin';
return [
    'vfr_prefix_admin' => [
        'vfr_prefix' => $prefixAdmin
    ],

    'vfr_navi_admin' => [
        ['url' => "$prefixAdmin/dashboard",    'label' => 'Dashboard',  'icon' => 'fa-home'],
        ['url' => "$prefixAdmin/article",      'label' => 'Article',    'icon' => 'fa-newspaper-o'],
        ['url' => "$prefixAdmin/category",     'label' => 'Category',   'icon' => 'fa-building-o'],
        ['url' => "$prefixAdmin/user",         'label' => 'User',       'icon' => 'fa-user'],
        ['url' => "$prefixAdmin/slider",       'label' => 'Slider',     'icon' => 'fa-sliders'],
        ['url' => "$prefixAdmin/opportunities",'label' => 'Jobs',       'icon' => 'fa-ticket'],
    ],

    'studio_description' => [
        'title' => 'Vietnam Furniture Resources',
        'year'  => '2023',
        'admin' => 'VFR'
    ],

    'vfr_contact'   => [
        'address'   => 'Binh Chuan Ward, Thuan An City, Binh Duong Province, Vietnam',
        'email'     => 'inquiries@vfr.net.vn',
        'tel'       => '+84 (0) 274 379 8960',
        'fax'       => '+84 (0) 274 379 8961',
    ],

    'url_vfr'           => [
        'home'          => '/',
        'contact-us'    => '/contact-us.html',
        'about-us'      => '/about-us.html',
        'gallery'       => '/gallery.html',
        'oem-projects'  => '/oem-projects.html',
        'company-news'  => '/company-news-1.html',
        'blog'          => '/blog-2.html',
        'opportunities' => '/opportunities.html',
    ],

    'vfr_breadcrumbs'   => [
        'home'          => ['url'=> '/',                  'label' => 'Home'],
        'category'      => ['url'=> 'category.html',      'label' => 'Category'],
        'opportunities' => ['url'=> 'opportunities.html', 'label' => 'Opportunities'],
        'craftsmanship' => ['url'=> 'craftsmanship.html', 'label' => 'Craftsmanship'],
        'oem'           => ['url'=> 'oem-projects.html',  'label' => 'OEM Projects'],
        'gallery'       => ['url'=> 'gallery.html',       'label' => 'Gallery'],

    ],

    'vfr_menu_2'        => [
        ['slug' => '/',                                              'url' => '/',                            'label'          => 'Home'],
        ['slug' => 'about-us.html',                                  'url' => 'about-us.html',                'label'          => 'About Us'],
        ['slug' => 'oem-projects.html',                              'url' => 'oem-projects.html',            'label'          => 'OEM Projects'],
        ['slug' => 'craftsmanship.html',                             'url' => 'craftsmanship.html',           'label'          => 'Craftsmanship'],
        ['slug' => 'contact-us.html',                                'url' => 'contact-us.html',              'label'          => 'Contact Us'],
        ['slug' => 'category/{category_name}-{category_id}.html',    'url' => 'category/company-news-1.html', 'label'          => 'Company News'],
        ['slug' => 'category/{category_name}-{category_id}.html',    'url' => 'category/blog-2.html',         'label'          => 'Blog'],
        ['slug' => 'company-rewards.html',                           'url' => 'company-rewards.html',         'label'          => 'Company Rewards'],
        ['slug' => 'opportunities.html',                             'url' => 'opportunities.html',           'label'          => 'Opportunities'],
    ],

    'vfr_menu_link'     => [
        '/'                            => 'Home',
        'about-us.html'                => 'About Us',
        'gallery.html'                 => 'Gallery',
        'oem-projects.html'            => 'OEM Projects',
        'contact-us.html'              => 'Contact Us',
        'category/company-news-1.html' => 'Company News',
        'category/blog-2.html'         => 'Blog',
        'company-rewards.html'         => 'Company Rewards',
        'opportunities.html'           => 'Opportunities',
    ],
    'vfr_social' => [
        ['title' => 'Instagram', 'icon' => 'fab fa-instagram',   'url' => 'https://www.instagram.com/jonathancharlesfurniture/'],
        ['title' => 'Pinterest', 'icon' => 'fab fa-pinterest',   'url' => 'https://www.pinterest.com/jcfinefurniture/'],
        ['title' => 'Linked',    'icon' => 'fab fa-linkedin-in', 'url' => 'https://www.linkedin.com/company/jonathan-charles-fine-furniture/mycompany/'],
    ],
    'vfr_favicon'      
          => [
        'favicon' => 'images/vfr-favicon.png',
    ],
    'vfr_image'  => [
        'image_factory'         => 'images/aboutus/VFR-Company-Images-18.jpg',
        'image_factory_top'     => 'images/aboutus/company-news-background-2.jpg',
        'image_oem_top'         => 'images/aboutus/Hardware-cover.jpg',
        'image_craftmanship'         => 'images/aboutus/Wood-Carving-cover.jpg',
    ],
    'logo'              => [
        'prefix_header'                 => 'images/vfr-icon-fill.png',
        'prefix_header_2x'              => 'images/vfr-icon-fill@2x.png',
        'prefix_footer'                 => 'images/vfr-icon-fill.png',
        'prefix_footer_2x'              => 'images/vfr-icon-fill@2x.png',
        'prefix_footer_white'           => 'images/vfr-icon-white-fill.png',
        'prefix_footer_white_2x'        => 'images/vfr-icon-white-fill@2x.png',
        'prefix_header_topnav'          => 'images/vfr-icon-fill-topnav.png',
        'prefix_header_topnav_2x'       => 'images/vfr-icon-fill-topnav@2x.png',
        'prefix_header_topnav_white'    => 'images/vfr-icon-fill-topnav-white.png',
        'prefix_header_topnav_white_2x' => 'images/vfr-icon-fill-topnav-white@2x.png',
    ],

    'vfr_team' => [
        [
            'thumbx381'                 => 'images/aboutus/Jonathan-Sowter.jpg',
            'thumbx700'                 => 'images/aboutus/Jonathan-Sowterx700.jpg',
            'thumb_ourteam_home'        => 'btn-success',
            'full_name'                 => 'Jonathan Sowter',
            'description'               => 'Jonathan has been in the furniture industry for over 20 years. He founded his own manufacturing company, Vietnam Furniture Resources, in 2004, launching his residential home brand, Jonathan Charles Fine Furniture, in the same year.',
            'position'                  => 'Founder & CEO',
        ],
        [
            'thumbx381'                 => 'images/aboutus/Lasse-Skov.jpg',
            'thumbx700'                 => 'images/aboutus/Lasse-Skov-x700.jpg',
            'thumb_ourteam_home'        => 'btn-success',
            'full_name'                 => 'Lasse Skov',
            'description'               => 'Based in Vietnam for over 15 years and fluent in Vietnamese, Lasse works closely with our factory, overseeing each project from start to finish. Utilizing his experience in supply chain and operations, product design and project management, he ensures our pieces are delivered on time with the highest quality standards.',
            'position'                  => 'Head of Hospitality Division (VietNam)',
        ],
        [
            'thumbx381'                 => 'images/aboutus/Steve-Stilwel.jpg',
            'thumbx700'                 => 'images/aboutus/Steve-Stilwel-x700.jpg',
            'thumb_ourteam_home'        => 'btn-success',
            'full_name'                 => 'Steve Stilwell',
            'description'               => 'Steve has 30+ years of experience in the high-end hospitality, contract and residential furniture industry. This includes positions in purchasing, product development, and sales. His focus with JC Hospitality is North America.',
            'position'                  => 'OEM & Hospitality Sales Director',
        ],
            
    ], 

    'vfr_craftsmanship_icon' => [
        [   'title'                     => 'Hand Painting',    'icon' => 'images/elements/Hand-Painting.jpg',   'url' => 'https://www.youtube.com/watch?v=kjyK44IDP28'],
        [   'title'                     => 'Wax Casting',      'icon' => 'images/elements/Wax-Casting.jpg',     'url' => 'https://www.youtube.com/watch?v=CLpSsu6R_Ik'],
        [   'title'                     => 'Wood Carving',     'icon' => 'images/elements/Wood-Carving.jpg',    'url' => 'https://www.youtube.com/watch?v=J4Qh9gXrW88'],
        [   'title'                     => 'Eggshell',         'icon' => 'images/elements/Eggshell.jpg',        'url' => 'https://www.youtube.com/watch?v=894S9nHQ_jg'],
        [   'title'                     => 'Eglomisé',         'icon' => 'images/elements/Eglomisé.jpg',        'url' => 'https://www.youtube.com/watch?v=bgTbkM9xx0I'],
        [   'title'                     => 'Marquetry',        'icon' => 'images/elements/Marquetry.jpg',       'url' => 'https://www.youtube.com/watch?v=AlNmJtBmDIo'],
    ],
    
    'url'              => [
        'prefix_admin' => 'admin123',
        'prefix_news'  => 'news69',
    ],
    'format'           => [
        'long_time'    => 'H:m:s d/m/Y',
        'short_time'   => 'd/m/Y',
    ],
    'template'         => [
        'form_input' => [
            'class'     => 'form-control col-md-6 col-xs-12'
        ],
        'form_label' => [
            'class'     => 'control-label col-md-3 col-sm-3 col-xs-12'
        ],
        'form_label_edit' => [
            'class' => 'control-label col-md-4 col-sm-3 col-xs-12'
        ],
        
      
        'form_ckeditor' => [
            'class' => 'form-control col-md-6 col-xs-12 ckeditor'
        ],
        'status'            => [
            'all'           => ['name' => 'All',        'class' => 'btn-success'],
            'active'        => ['name' => 'Active',     'class' => 'btn-success'],
            'inactive'      => ['name' => 'Unactive',   'class' => 'btn-info'],
            1               => ['name' => 'Active',     'class' => 'btn-success'],
            0               => ['name' => 'Unactive',   'class' => 'btn-info'],
            'block'         => ['name' => 'Is Locked',  'class' => 'btn-danger'],
            'default'       => ['name' => 'Unknow',     'class' => 'btn-success'],
        ],

        'is_home'       => [
            'yes'           =>  ['name'=> 'Show',     'class'=> 'btn-primary'],
            'no'            =>  ['name'=> 'Not Show', 'class'=> 'btn-warning']
        ],
        'display'           => [
            'list'          => ['name'=> 'List'],
            'grid'          => ['name'=> 'Grid'],
        ],
        'type' => [
            'featured'      => ['name'=> 'Featured'],
            'normal'        => ['name'=> 'Normal'],
        ],
        'rss_source' => [
            'vnexpress'     => ['name'=> 'VNExpress'],
            'tuoitre'       => ['name'=> 'Tuổi Trẻ'],
        ],
        'level'       => [
            'admin'         => ['name'=> 'Admin'],
            'member'        => ['name'=> 'Member'],
        ],
        'search'       => [
            'all'           => ['name'=> 'Search by All'],
            'id'            => ['name'=> 'Search by ID'],
            'name'          => ['name'=> 'Search by Name'],
            'username'      => ['name'=> 'Search by Username'],
            'fullname'      => ['name'=> 'Search by Fullname'],
            'email'         => ['name'=> 'Search by Email'],
            'description'   => ['name'=> 'Search by Description'],
            'link'          => ['name'=> 'Search by Link'],
            'content'       => ['name'=> 'Search by Content'],
        ],
        'button' => [
            'edit'          => ['class' => 'btn-success',           'title' => 'Edit',      'icon' => 'fa-pencil', 'route-name' => '/form'],
            'delete'        => ['class' => 'btn-danger btn-delete', 'title' => 'Delete',    'icon' => 'fa-trash', 'route-name' => '/delete'],
            'info'          => ['class' => 'btn-info',              'title' => 'View',      'icon' => 'fa-pencil', 'route-name' => '/delete'],
        ]
    ],
    'config' => [
        'search' => [
            'default'       => ['all', 'id', 'fullname'],
            'slider'        => ['all', 'id', 'name', 'description', 'link'],
            'category'      => ['all', 'name'],
            'article'       => ['all', 'name', 'content'],
            'rss'           => ['all', 'name', 'link'],
            'user'          => ['all', 'username', 'email', 'fullname'],
        ],
        'button' => [
            'default'       => ['edit', 'delete'],
            'slider'        => ['edit', 'delete'],
            'category'      => ['edit', 'delete'],
            'article'       => ['edit', 'delete'],
            'opportunities' => ['edit', 'delete'],
            'dashboard'     => ['edit'],
            'user'          => ['edit'],
        ]
    ]
    
];

