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
        <title>Dashboard - TeamIT</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                    <a href="{{ route('dashboard') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </i> </div>  <!-- menampilkan halaman drop down <i data-feather="chevron-down" class="menu__sub-icon">-->
                    </a>
                </li>
                <li>
                    <a href="{{ route('mastersiswa') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Master Siswa </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('user')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Master User </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('userdetail') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> User Detail </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="server"></i> </div>
                        <div class="menu__title"> Jurusan <i data-feather="chevron-down" class="menu__sub-icon"></i></div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('masterjurusan') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Master Jurusan </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jurusansiswa') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Jurusan Siswa </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="layers"></i> </div>
                        <div class="menu__title"> Kelas <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('masterkelas')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Master Kelas </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kelassiswa') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Kelas Siswa </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="slack"></i> </div>
                        <div class="menu__title"> Kriteria <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('masterkriteria')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Master Kriteria </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('periodekriteria') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Periode Kriteria </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> Data Nilai <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('nilairaport')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Nilai Raport </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaiketidakhadiran') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Tingkat Ketidakhadiran </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaisikap') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Sikap </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaiprestasi') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Prestasi Akademik / Non-Akademik </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaiketerlambatan') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Keterlambatan Masuk Sekolah </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaihafalan') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Hafalan Juz Al-Qur'an </div>
                            </a>
                        </li>
                    </ul>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                            <div class="menu__title"> Penilaian <i data-feather="chevron-down" class="menu__sub-icon"></i></div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('nilaisemuakriteria') }}" class="menu">
                                    <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                    <div class="menu__title"> Nilai | Semua Kriteria </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('nilaiakhir') }}" class="menu">
                                    <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                    <div class="menu__title"> Perangkingan </div>
                                </a>
                            </li>
                        </ul>
                    </li>
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
                    <span class="text-white text-lg ml-3"> APK - <span class="font-medium">PSB</span> </span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"> <a href="">Beranda</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifications</div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('template/dist/images/profile-14.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                <div class="font-medium nama-user"> </div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600 role-user"> </div>
                            </div>
                            <div class="p-2">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                {{-- <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a> --}}
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
                        <li>
                            <a href="{{ route('mastersiswa') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Master Siswa </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Users <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('user')}}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Master User </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('userdetail') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> User Detail </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="server"></i> </div>
                                <div class="side-menu__title"> Jurusan <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i></div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('masterjurusan') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Master Jurusan </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('jurusansiswa') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Jurusan Siswa </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                                <div class="side-menu__title"> Kelas <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('masterkelas')}}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Master Kelas </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kelassiswa') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Kelas Siswa </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="slack"></i> </div>
                                <div class="side-menu__title"> Kriteria <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('masterkriteria')}}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Master Kriteria </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('periodekriteria') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Periode Kriteria </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title">Data Nilai<div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilairaport') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Nilai Raport </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiketidakhadiran') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Tingkat Ketidakhadiran </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaisikap') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Sikap </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiprestasi') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Prestasi Akademik / Non-Akademik </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiketerlambatan') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Keterlambatan Masuk Sekolah </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaihafalan') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Hafalan Juz Al-Qur'an </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Penilaian
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilaisemuakriteria') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Nilai | Semua Kriteria </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiakhir') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Perangkingan </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12 xxl:col-span-9">
                            <div class="grid grid-cols-12 gap-6">
                                <!-- BEGIN: Notification -->
                                <div class="col-span-12 mt-8">
                                    <div class="col-span-12 mt-6 -mb-6 intro-y">
                                        <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                                            <span>Hallo <b id="sambutan"></b>... Selamat datang dalam aplikasi PSB</span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <i data-feather="x" class="w-4 h-4"></i> </button>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-6 mt-2">
                                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-2">
                                            <div class="report-box zoom-in">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-feather="users" class="report-box__icon text-theme-21"></i>
                                                    </div>
                                                    <div class="text-base text-gray-600 mt-1"> Siswa</div>
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer mt-2" title="terdapat 350 siswa di tahun 2023"> 350 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                    {{-- <div class="text-3xl font-bold leading-8 mt-6">350</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- BEGIN: content jumlah keseluruhan -->
                                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-2">
                                            <div class="report-box zoom-in">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-feather="users" class="report-box__icon text-theme-21"></i>
                                                    </div>
                                                    <div class="text-base text-gray-600 mt-1"> User Detailu</div>
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer mt-2" title="terdapat 6 User Detail "> 6 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                    {{-- <div class="text-3xl font-bold leading-8 mt-6">350</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-2">
                                            <div class="report-box zoom-in">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-feather="slack" class="report-box__icon text-theme-21"></i>
                                                    </div>
                                                    <div class="text-base text-gray-600 mt-1"> Kriteria </div>
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer mt-2" title="terdapat 6 kriteria di tahun 2023"> 6 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                    {{-- <div class="text-3xl font-bold leading-8 mt-6">350</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y mt-2">
                                            <div class="report-box zoom-in">
                                                <div class="box p-5">
                                                    <div class="flex">
                                                        <i data-feather="edit" class="report-box__icon text-theme-21"></i>
                                                    </div>
                                                    <div class="text-base text-gray-600 mt-1"> Data Nilai</div>
                                                    <div class="ml-auto">
                                                        <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer mt-2" title="terdapat 350 data nilai di tahun 2023"> 350 <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i> </div>
                                                    </div>
                                                    {{-- <div class="text-3xl font-bold leading-8 mt-6">350</div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: content jumlah keseluruhan -->
                                    </div>
                                </div>
                                <!-- BEGIN: Notification -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--manggil JQuery-->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
        <script src="{{ asset('template/dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        {{-- CODE JS mendapatkan nilai cookie--}}
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
                    $('#sambutan').text(data.name);

                }). catch (error => {
                    console.error('Error:', error);
                });

                function logout(name){
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    winddow.location.href = "{{ route('login') }}";
                }
            });
        </script>

    </body>
</html>
