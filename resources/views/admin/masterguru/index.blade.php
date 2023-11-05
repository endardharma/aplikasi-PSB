<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('template/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}" />
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('template/dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-2 py-5 hidden">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-chat.html" class="menu">
                        <div class="menu__icon"> <i data-feather="message-square"></i> </div>
                        <div class="menu__title"> Chat </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-post.html" class="menu">
                        <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                        <div class="menu__title"> Post </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-calendar.html" class="menu">
                        <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                        <div class="menu__title"> Calendar </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-crud-data-list.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Data List </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-crud-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Form </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-users-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-users-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Layout 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="trello"></i> </div>
                        <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-profile-overview-1.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 1 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-2.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 2 </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-profile-overview-3.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overview 3 </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="layout"></i> </div>
                        <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-blog-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-blog-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-faq-layout-1.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 1</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-2.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 2</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-faq-layout-3.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Layout 3</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login-light-login.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Login </div>
                            </a>
                        </li>
                        <li>
                            <a href="login-light-register.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Register </div>
                            </a>
                        </li>
                        <li>
                            <a href="main-light-error-page.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Error Page </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-update-profile.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update profile </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-change-password.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Change Password </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="javascript:;.html" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Table <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="menu__sub-open">
                                <li>
                                    <a href="side-menu-light-regular-table.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Regular Table</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tabulator.html" class="menu menu--active">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Tabulator</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Overlay <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-modal.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Modal</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slide-over.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Slide Over</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-notification.html" class="menu">
                                        <div class="menu__icon"> <i data-feather="zap"></i> </div>
                                        <div class="menu__title">Notification</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="side-menu-light-accordion.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Accordion </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-button.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Button </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-alert.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Alert </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-progress-bar.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Progress Bar </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tooltip.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tooltip </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-dropdown.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Dropdown </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-typography.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Typography </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Icon </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-loading-icon.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Loading Icon </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
                        <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-form.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Regular Form </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-datepicker.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Datepicker </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tail-select.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Tail Select </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-upload.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> File Upload </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Wysiwyg Editor </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-validation.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Validation </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-chart.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Chart </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slider.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Slider </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-image-zoom.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Image Zoom </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('template/dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> Ice<span class="font-medium">wall</span> </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"> <a href="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('template/dist/images/profile-11.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('template/dist/images/profile-12.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('template/dist/images/profile-1.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('template/dist/images/profile-15.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('template/dist/images/profile-8.jpg') }}">
                                    <div class="w-3 h-3 bg-theme-10 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Arnold Schwarzenegger</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('template/dist/images/profile-3.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                <div class="font-medium nama-user"></div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600 role-user"></div>
                            </div>
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </div>
                            <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-feather="monitor"></i> </div>
                                <div class="side-menu__title"> Dashboard </div>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title">
                                    Menu Layout
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="index.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Side Menu </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="simple-menu-light-dashboard-overview-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Simple Menu </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="top-menu-light-dashboard-overview-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Top Menu </div>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="{{ route('masterguru') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title"> Master Guru </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-file-manager.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                                <div class="side-menu__title"> File Manager </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-point-of-sale.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                                <div class="side-menu__title"> Point of Sale </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-chat.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="message-square"></i> </div>
                                <div class="side-menu__title"> Chat </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-post.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                                <div class="side-menu__title"> Post </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-calendar.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                                <div class="side-menu__title"> Calendar </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title">
                                    Crud
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-crud-data-list.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Data List </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-crud-form.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Form </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title">
                                    Users
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 1 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 2 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-users-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 3 </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                                <div class="side-menu__title">
                                    Profile
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 1 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 2 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 3 </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="layout"></i> </div>
                                <div class="side-menu__title">
                                    Pages
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Wizards
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Blog
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Pricing
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Invoice
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            FAQ
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="login-light-login.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Login </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-light-register.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Register </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="main-light-error-page.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Error Page </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-update-profile.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Update profile </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-change-password.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Change Password </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title">
                                    Components
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Table
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-regular-table.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Regular Table</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-tabulator.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Tabulator</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Overlay
                                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-light-modal.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Modal</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-slide-over.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Slide Over</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-light-notification.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-feather="zap"></i> </div>
                                                <div class="side-menu__title">Notification</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="side-menu-light-accordion.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Accordion </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-button.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Button </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-alert.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Alert </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-progress-bar.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Progress Bar </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tooltip.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Tooltip </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-dropdown.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Dropdown </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-typography.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Typography </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-icon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Icon </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-loading-icon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Loading Icon </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="sidebar"></i> </div>
                                <div class="side-menu__title">
                                    Forms
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-regular-form.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Regular Form </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-datepicker.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Datepicker </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-tail-select.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Tail Select </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-file-upload.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> File Upload </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-wysiwyg-editor.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Wysiwyg Editor </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-validation.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Validation </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                                <div class="side-menu__title">
                                    Widgets
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-light-chart.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Chart </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-slider.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Slider </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-light-image-zoom.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                        <div class="side-menu__title"> Image Zoom </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            List Master Guru
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <button class="btn btn-primary shadow-md mr-2 modal-guru">Tambah Guru</button>
                        </div>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-5 mt-5">
                        <div class="overflow-x-auto scrollbar-hidden">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama Guru</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status Pegawai</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END: HTML Table Data -->
                    <!-- BEGIN: Modal Update Content -->
                    <div id="modal-create" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Form Pembuatan Data Guru
                                    </h2>
                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                </div>
                                <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Nama Guru</label>
                                        <input type="text" class="form-control create-name" placeholder="Beny Putra Spd" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Email Guru</label>
                                        <input type="text" class="form-control create-email" placeholder="beny@mail.com" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Password</label>
                                        <input type="password" class="form-control create-password" placeholder="********" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">NIP</label>
                                        <input type="number" class="form-control create-nip" placeholder="123456789" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select create-jenkel" required>
                                            <option selected disabled> --- Pilih Jenis Kelamin --- </option>
                                            <option value="L"> Laki-Laki </option>
                                            <option value="P"> Perempuan </option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Status Pegawai</label>
                                        <input type="text" class="form-control create-status-pegawai" placeholder="Guru Fisika Modern" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Jabatan</label>
                                        <input type="text" class="form-control create-jabatan" placeholder="Guru PNS" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Status Akun</label>
                                        <select class="form-select create-jenkel" required>
                                            <option selected disabled> --- Pilih Jenis Status Akun --- </option>
                                            <option value="true"> Aktif </option>
                                            <option value="false"> Tidak Aktif </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- END: Modal Body -->
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer text-right">
                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                    <button type="button" class="btn btn-primary w-20 btn-create">Simpan</button>
                                </div>
                                <!-- END: Modal Footer -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Update Sukses Content -->
                    <div id="success-create-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Berhasil membuat data guru baru!</div>
                                        <div class="text-gray-600 mt-2 create-sukses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Update Gagal Content -->
                    <div id="warning-create-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Oops...Gagal membuat data guru baru!</div>
                                        <div class="text-gray-600 mt-2 create-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--manggil JQuery-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('template/dist/js/app.js') }}"></script>
        <script>
            $(document).ready(function(){
                function getCookie(name){
                    var cookieName = name + "=";
                    var decodedCookie = decodeURIComponent(document.cookie);
                    var cookieArray = decodedCookie.split(';');

                    for (var i = 0; i < cookieArray.length; i++){
                        var cookie = cookieArray[i];
                        while (cookie.charAt(0) === ' '){
                            cookie = cookie.substring(1);
                        }
                        if (cookie.indexOf(cookieName) === 0){
                            return cookie.substring(cookieName.length, cookie.length);
                        }
                    }
                }
                var token = getCookie('token');

                if (token)
                {
                    //Token ada dalam cookie, lakukan tindakan yang sesuai
                    console.log('Token:', token);
                }else{
                    window.location.href = "{{ route('login') }}";
                }

                var url = 'http://127.0.0.1:8000/api/dashboard/profil';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization' : 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {

                    $('.nama-user').text(data.name);
                    $('.role-user').text(data.role);
                    // $('#sambutan').text(data.name);

                }). catch (error => {
                    console.error('Error:', error);
                });

                // Modal Create master guru
                // Modal form create portfolio
                $(".modal-guru").click(function() {
                    cash("#modal-create").modal("show");
                });

                // Button Simpan Portfolio
                $(".btn-create").click(function() {
                    // Ajax update
                    var title = $('.create-title').val();
                    var deskripsi = $('.create-deskripsi').val();
                    var pc = $('#fileInput')[0];
                    var gambar = pc.files[0];

                    var formData = new FormData();
                    formData.append('title', title);
                    formData.append('deskripsi', deskripsi);
                    formData.append('gambar', gambar);

                    // Kirim permintaan pembaruan produk ke API
                    $.ajax({
                        url: "http://127.0.0.1:8000/api/master-guru/tambah-guru",
                        type: 'POST',
                        headers: {
                            "Authorization": "Bearer " + token
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // Show the modal
                            $('.create-sukses').text(response.message);
                            cash("#success-create-modal-preview").modal("show");

                            setTimeout(function() {
                                cash("#success-create-modal-preview").modal("hide");

                                location.reload();
                            }, 3000); // 3000 milliseconds = 3 seconds
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan dalam permintaan Ajax itu sendiri
                            console.log(error);

                            // Tampilkan pesan kesalahan yang dikirim oleh server
                            var response = JSON.parse(xhr.responseText);
                            if (response.success === false && response.message) {
                                $('.create-gagal').text(response.message);
                                cash("#warning-create-modal-preview").modal("show");

                                setTimeout(function() {
                                    cash("#warning-create-modal-preview").modal("hide");

                                    location.reload();
                                }, 5000); // 5000 milliseconds = 5 seconds
                            } else {
                                // Tangani kesalahan lainnya jika ada
                                // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                alert('Terjadi kesalahan lainnya: ' + error);
                            }
                        }
                    });
                });

                // Panggil Ajax Master Guru
                var url = 'http://127.0.0.1:8000/api/master-guru/list';
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                }).then(response => response.json()).then(data => {
                    // Panggil fungsi untuk mengisi data ke dalam tbody DataTable
                    populateDataTable(data);
                }).catch(error => {
                    console.error('Error:', error);
                });

                function populateDataTable(data) {
                    var tableBody = $("#data-body");

                    // Bersihkan isi tbody sebelum mengisi dengan data baru
                    tableBody.empty();

                    var rowDataArray = []; // Variabel untuk menyimpan objek baris

                    // Perulangan menggunakan $.each()
                    $.each(data, function(index, item) {
                        for (let i = 0; i < item.length; i++) {
                            // // Create an object with the desired properties
                            var rowData = {
                                id: item[i].id,
                                nomor_urut: item[i].nomor_urut,
                                nip: item[i].nip,
                                name: item[i].name,
                                jenkel: item[i].jenkel,
                                status_pegawai: item[i].status_pegawai,
                                jabatan: item[i].jabatan,
                                is_active: item[i].is_active,
                            };

                            // Push the object to the data array
                            rowDataArray.push(rowData);
                        }
                    });

                    var dataTable = $('#data-table').DataTable();
                    if (dataTable) {
                        // Destroy DataTable
                        dataTable.destroy();
                    }

                    // Initialize DataTable
                    var table = $('#data-table').DataTable({
                        data: rowDataArray,
                        columns: [
                            { data: 'nomer_urut', className: 'text-center' },
                            { data: 'nip', className: 'text-center' },
                            { data: 'name', className: 'text-center' },
                            { data: 'jenkel', className: 'text-center' },
                            { data: 'status_pegawai', className: 'text-center' },
                            { data: 'jabatan', className: 'text-center' },
                            { data: 'is_active', className: 'text-center' },
                            {
                                data: null,
                                render: function (data, type, row) {

                                    // Create action buttons
                                    var editBtn = '<button class="btn btn-primary btn-edit" data-id="' + data.id + '" data-name="' + data.name + '" data-jenkel="' + data.jenkel + '" data-status_pegawai="' + data.status_pegawai + '" data-jabatan="' + data.jabatan + '" data-is_active="' + data.is_active + '"><i data-feather="edit" class="w-4 h-4"></i></button>';
                                    var deleteBtn = '<button class="btn btn-danger btn-delete" data-id="' + data.id + '"><i data-feather="trash-2" class="w-4 h-4"></i></button>';

                                    // Combine the buttons
                                    var actions = editBtn + ' || ' + deleteBtn;
                                    return actions;
                                }
                            }
                        ]
                    });

                    feather.replace();

                    // Handle button click events
                    $('#data-table').on('click', '.btn-edit', function() {
                        cash("#modal-update").modal("show");
                        var id = $(this).attr("data-id");
                        var title = $(this).attr("data-title");
                        var deskripsi = $(this).attr("data-deskripsi");

                        // Handle edit action
                        $('.update-id').val(id);
                        $('.update-title').val(title);
                        $('.update-deskripsi').val(deskripsi);
                    });

                    // Tombol Update Admin
                    $(".btn-update").click(function() {
                        // Ajax update
                        var id = $('.update-id').val();
                        var title = $('.update-title').val();
                        var deskripsi = $('.update-deskripsi').val();
                        var gambar = $('#fileInput1')[0];
                        var gport = gambar.files[0];

                        if(gport)
                        {
                            var formData = new FormData();
                            formData.append('title', title);
                            formData.append('deskripsi', deskripsi);
                            formData.append('gambar', gambar);

                            // Kirim permintaan pembaruan produk ke API
                            $.ajax({
                                url: "http://127.0.0.1:8000/api/portfolio/update?id=" + id,
                                type: 'POST',
                                headers: {
                                    "Authorization": "Bearer " + token
                                },
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    // Show the modal
                                    $('.update-sukses').text(response.message);
                                    cash("#success-update-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#success-update-modal-preview").modal("hide");

                                        location.reload();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                },
                                error: function(xhr, status, error) {
                                    // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                    console.log(error);

                                    // Tampilkan pesan kesalahan yang dikirim oleh server
                                    var response = JSON.parse(xhr.responseText);
                                    if (response.success === false && response.message) {
                                        $('.update-gagal').text(response.message);
                                        cash("#warning-update-modal-preview").modal("show");

                                        setTimeout(function() {
                                            cash("#warning-update-modal-preview").modal("hide");

                                            location.reload();
                                        }, 5000); // 5000 milliseconds = 5 seconds
                                    } else {
                                        // Tangani kesalahan lainnya jika ada
                                        // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                        alert('Terjadi kesalahan lainnya: ' + error);
                                    }
                                }
                            });
                        }else{

                            var formData = new FormData();
                            formData.append('title', title);
                            formData.append('deskripsi', deskripsi);
                            formData.append('gambar', '');

                            // Kirim permintaan pembaruan produk ke API
                            $.ajax({
                                url: "http://127.0.0.1:8000/api/portfolio/update?id=" + id,
                                type: 'POST',
                                headers: {
                                    "Authorization": "Bearer " + token
                                },
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    // Show the modal
                                    $('.update-sukses').text(response.message);
                                    cash("#success-update-modal-preview").modal("show");

                                    setTimeout(function() {
                                        cash("#success-update-modal-preview").modal("hide");

                                        location.reload();
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                },
                                error: function(xhr, status, error) {
                                    // Tangani kesalahan dalam permintaan Ajax itu sendiri
                                    console.log(error);

                                    // Tampilkan pesan kesalahan yang dikirim oleh server
                                    var response = JSON.parse(xhr.responseText);
                                    if (response.success === false && response.message) {
                                        $('.update-gagal').text(response.message);
                                        cash("#warning-update-modal-preview").modal("show");

                                        setTimeout(function() {
                                            cash("#warning-update-modal-preview").modal("hide");

                                            location.reload();
                                        }, 5000); // 5000 milliseconds = 5 seconds
                                    } else {
                                        // Tangani kesalahan lainnya jika ada
                                        // Contoh: pesan kesalahan bawaan dari permintaan Ajax
                                        alert('Terjadi kesalahan lainnya: ' + error);
                                    }
                                }
                            });
                        }
                    });

                    // Button Hapus data
                    $('#data-table').on('click', '.btn-delete', function() {
                        var id = $(this).attr("data-id");
                        cash("#delete-modal-preview").modal("show");
                        $('.hapus-btn').show();
                        $('.hapus-btn').click(function() {
                            // Ajax delete Api
                            $.ajax({
                                url: 'http://127.0.0.1:8000/api/portfolio/hapus/' + id,
                                type: 'DELETE',
                                headers: {
                                    'Authorization': 'Bearer ' + token
                                },
                                success: function(response) {
                                        // Show the modal
                                        $('.hapus-sukses').text(response.message);
                                        cash("#success-hapus-modal-preview").modal("show");

                                        setTimeout(function() {
                                            cash("#success-hapus-modal-preview").modal("hide");

                                            location.reload();
                                        }, 3000); // 3000 milliseconds = 3 seconds
                                    },
                                    error: function(xhr, status, error) {
                                        // Show error alert
                                        $('.hapus-gagal').text(response.message);
                                        cash("#warning-hapus-modal-preview").modal("show");

                                        setTimeout(function() {
                                            cash("#warning-update-modal-preview").modal("hide");

                                            location.reload();
                                        }, 5000); // 3000 milliseconds = 3 seconds
                                    }
                            });
                        });
                    });
                }

                function logout(name){
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    winddow.location.href = "{{ route('login') }}";
                }
            });
        </script>
        <!-- END: JS Assets-->
    </body>
</html>
