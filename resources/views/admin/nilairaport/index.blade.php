<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="UTF-8">
        <link href="{{ asset('template/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title> Nilai Raport</title>
        <!-- BEGIN: CSS Assets -->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- END: CSS Assets -->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img src="{{ asset('template/dist/images/logo.svg') }}" class="w-6">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"><i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i></a>
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
                <!-- BEGIN Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img src="{{asset('template/dist/images/logo.svg')}}" class="w-6">
                    <span class="text-white text-lg ml-3">APK - <span class="font-medium">PSB</span></span>
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"><a href="">Beranda</a><i data-feather="chevron-right" class="breadcrumb__icon"></i><a href="" class="breadcrumb--active"></a>Nilai Raport</div>
                <!-- END: breadcrumb -->
                <!-- BEGIN: notification -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"><i data-feather="bell" class="notification__icon dark:text-gray-300"></i></div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifikasi</div>
                        </div>
                    </div>
                </div>
                <!-- END: notification -->
                <!-- BEGIN: account menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img src="{{ asset('template/dist/images/profile-3.jpg') }}">
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
                            </div>
                            <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: account menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: side menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="monitor"></i> </div>
                                <div class="side-menu__title"> Dashboard </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mastersiswa') }}" class="side-menu ">
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
                                    <a href="{{ route('nilaiakhir') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Jurusan Siswa </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu ">
                                <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                                <div class="side-menu__title"> Kelas <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('masterkelas')}}" class="side-menu ">
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
                                    <a href="{{route('masterkriteria')}}" class="side-menu ">
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
                            <a href="javascript:;" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title">Data Nilai<div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilairaport') }}" class="side-menu side-menu--active">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Nilai Raport </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiketidakhadiran') }}" class="side-menu ">
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
                                    <a href="{{ route('nilaiprestasi') }}" class="side-menu ">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Prestasi Akademik / Non-Akademik </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiketerlambatan') }}" class="side-menu ">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Keterlambatan Masuk Sekolah </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaihafalan') }}" class="side-menu ">
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
                                    <a href="{{ route('nilaiakhir') }}" class="side-menu ">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Perangkingan </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: side menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <!-- BEGIN: tampilan tambah data dan pencarian -->
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            List Data Nilai Raport
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                                {{-- <button class="btn btn-primary shadow-md mr-2 -nilairaport">
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-4 h-4" data-feather="user-plus"></i></span>
                                </button> --}}
                                <button class="btn btn-primary shadow-md mr-2 modal-import_nilairaport"> <!-- menampilkan button import data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4" data-feather="file-plus"></i> </span>
                                </button>
                                <a href="{{ route('exportNilaiRaport') }}" class="btn btn-success btn-md shadow-md mr-2"> <!-- menampilkan button export data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4 bi bi-file-earmark-excel"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: tampilan tambah data dan pencarian -->
                    <!-- BEGIN: HTML table data -->
                    <div class="intro-y box p-1 mt-5">
                        <div style="overflow-x:auto">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    {{-- <tr>
                                        <th rowspan="3">No</th>
                                        <th rowspan="3">NIS</th>
                                        <th rowspan="3">Kelas ID</th>
                                        <th colspan="18" class="text-center">Nilai Pengetahuan</th>
                                        <th colspan="18" class="text-center">Nilai Keterlampilan</th>
                                    </tr>
                                    <tr>
                                        <th colspan="4" class="text-center">Kelompok A</th>
                                        <th colspan="6" class="text-center">Kelompok B</th>
                                        <th colspan="8" class="text-center">Kelompok C</th>
                                        <th colspan="4" class="text-center">Kelompok A</th>
                                        <th colspan="6" class="text-center">Kelompok B</th>
                                        <th colspan="8" class="text-center">Kelompok C</th>
                                    </tr> --}}
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Kelas ID</th>
                                        <th>PAI</th>
                                        <th>PPKN</th>
                                        <th>B.IND</th>
                                        <th>MTK(U)</th>
                                        <th>SJR IND</th>
                                        <th>BING</th>
                                        <th>S.BDY</th>
                                        <th>PENJASKES</th>
                                        <th>PKWU</th>
                                        <th>ML.BHS DAERAH</th>
                                        <th>MTK(P)</th>
                                        <th>FSK</th>
                                        <th>KMA</th>
                                        <th>BIO</th>
                                        <th>FQH</th>
                                        <th>B.ARAB</th>
                                        <th>CVRST</th>
                                        <th>EKNM</th>
                                        <th>PAI</th>
                                        <th>PPKN</th>
                                        <th>B.IND</th>
                                        <th>MTK(U)</th>
                                        <th>SJR IND</th>
                                        <th>BING</th>
                                        <th>S.BDY</th>
                                        <th>PENJASKES</th>
                                        <th>PKWU</th>
                                        <th>ML.BHS DAERAH</th>
                                        <th>MTK(P)</th>
                                        <th>FSK</th>
                                        <th>KMA</th>
                                        <th>BIO</th>
                                        <th>FQH</th>
                                        <th>B.ARAB</th>
                                        <th>CVRST</th>
                                        <th>EKNM</th>
                                        <th>Nilai Pengetahuan</th>
                                        <th>Nilai Keterampilan</th>
                                        <th>Nilai Raport</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END: HTML table data -->
                    
                    <!-- END: Modal Import Content -->
                    <div id="modal-import" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Import Data Nilai Raport
                                    </h2>
                                    <a href="javascript:;" data-dismiss="modal"><i data-feather="x" class="w-8 h-8 text-gray-500"></i></a>
                                </div>
                                {{-- <form action="http://127.0.0.1:8000/api/master-kriteria/import-kriteria" method="POST" enctype="multipart/form-data"> --}}
                                <form action="/halaman/import-nilai_raport" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <!-- END: Modal Header -->
                                    <!-- BEGIN: Modal Body -->
                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                        <div class="form-group">
                                            <input type="file" name="file" required>
                                        </div>
                                    </div>
                                    <!-- END: Modal Body -->
                                    <!-- BEGIN: Modal Footer -->
                                    <div class="modal-footer text-right">
                                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                        <button type="submit" class="btn btn-primary w-20 btn-import">Import</button>
                                    </div>
                                    <!-- END: Modal Footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Modal import Sukses Content -->
                    <div id="success-import-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="check-circle" class="w-16 sh-16 text-theme-10 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Berhasil import data nilai raport baru!</div>
                                        <div class="text-gray-600 mt-2 import-sukses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal import Gagal Content -->
                    <div id="warning-import-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Oops...Gagal import data nilai raport baru!</div>
                                        <div class="text-gray-600 mt-2 import-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->

                    {{-- <!-- BEGIN: modal create content -->
                    <div id="modal-create" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: modal header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Form Tambah Data Nilai Raport
                                    </h2>
                                    <a href="javascript:;" data-dismiss="modal"><i data-feather="x" class="w-8 h-8 text-gray-500"></i></a>
                                </div>
                                <!-- END: modal header -->
                                <!-- BEGIN: modal body -->
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Nama Siswa</label>
                                        <input type="text" class="form-control create-nama_siswa" placeholder="Masukkan Nama Siswa" requireds>
                                    </div>
                                </div>
                                <!-- END: modal body -->
                            </div>
                        </div>
                    </div>
                    <!-- END: modal create content --> --}}
                <!-- END: Content -->
            </div>
        </div>

        <!-- BEGIN: KS Assets -->
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

                $('#data-table').DataTable({
                    "processing": true,
                    "serverside": true,
                    "ajax": {
                        "url": "http://127.0.0.1:8000/api/nilai-raport/list",
                        "dataType": "json",
                        "type": "POST",
                        "headers": {
                            'Authorization' : 'Bearer ' + token
                        }
                    },
                    "columns": [
                        { data: 'nomor_urut', className: 'text-center'},
                        { data: 'nis', className: 'text-center'},
                        { data: 'kelas_id', className: 'text-center'},
                        { data: 'png_pai', className: 'text-center'},
                        { data: 'png_ppkn', className: 'text-center'},
                        { data: 'png_bind', className: 'text-center'},
                        { data: 'png_mtk_umum', className: 'text-center'},
                        { data: 'png_sjr_indo', className: 'text-center'},
                        { data: 'png_bing', className: 'text-center'},
                        { data: 'png_senbud', className: 'text-center'},
                        { data: 'png_penjaskes', className: 'text-center'},
                        { data: 'png_pkwu', className: 'text-center'},
                        { data: 'png_bhs_daerah', className: 'text-center'},
                        { data: 'png_mtk_peminatan', className: 'text-center'},
                        { data: 'png_fisika', className: 'text-center'},
                        { data: 'png_kimia', className: 'text-center'},
                        { data: 'png_biologi', className: 'text-center'},
                        { data: 'png_fiqih', className: 'text-center'},
                        { data: 'png_bhs_arab', className: 'text-center'},
                        { data: 'png_conversation', className: 'text-center'},
                        { data: 'png_ekonomi', className: 'text-center'},
                        { data: 'ktr_pai', className: 'text-center'},
                        { data: 'ktr_ppkn', className: 'text-center'},
                        { data: 'ktr_bind', className: 'text-center'},
                        { data: 'ktr_mtk_umum', className: 'text-center'},
                        { data: 'ktr_sjr_indo', className: 'text-center'},
                        { data: 'ktr_bing', className: 'text-center'},
                        { data: 'ktr_senbud', className: 'text-center'},
                        { data: 'ktr_penjaskes', className: 'text-center'},
                        { data: 'ktr_pkwu', className: 'text-center'},
                        { data: 'ktr_bhs_daerah', className: 'text-center'},
                        { data: 'ktr_mtk_peminatan', className: 'text-center'},
                        { data: 'ktr_fisika', className: 'text-center'},
                        { data: 'ktr_kimia', className: 'text-center'},
                        { data: 'ktr_biologi', className: 'text-center'},
                        { data: 'ktr_fiqih', className: 'text-center'},
                        { data: 'ktr_bhs_arab', className: 'text-center'},
                        { data: 'ktr_conversation', className: 'text-center'},
                        { data: 'ktr_ekonomi', className: 'text-center'},
                        { data: 'nilai_pengetahuan', className: 'text-center'},
                        { data: 'nilai_keterampilan', className: 'text-center'},
                        { data: 'nilai_raport', className: 'text-center'},
                        { data: 'semester', className: 'text-center'},
                        { data: 'tahun_ajar', className: 'text-center'},
                        {
                            data: null,
                            render: function(data, type, row){
                                // var editBtn = '<button class="btn btn-primary btn-edit" data-id="' + data.id + '" data-nis="' + data.nis + '" data-kelas_id="' + data.kelas_id + '" data-png_pai="' + data.png_pai +'" data-png_ppkn="' + data.png_ppkn + '" data-png_bind="' + data.png_bind + '" data-png_mtk_umum="' + data.png_mtk_umum + '" data-png_sjr_indo="' + data.png_sjr_indo + '" data-png_bing="' + data.png_bing + '" data-png_senbud="' + data.png_senbud + '" data-png_penjaskes="' + data.png_penjaskes + '" data-png_pkwu="' + data.png_pkwu + '" data-png_bhs_daerah="' + data.png_bhs_daerah + '" data-png_mtk_peminatan="' + data.png_mtk_peminatan + '" data-png_fisika="' + data.png_fisika + '" data-png_kimia="' + data.png_kimia + '" data-png_biologi="' + data.png_biologi + '" data-png_fiqih="' + data.png_fiqih + '" data-png_bhs_arab="' + data.png_bhs_arab + '" data-png_conversation="' + data.png_conversation + '" data-png_ekonomi="' + data.png_ekonomi + '" data-ktr_pai="' + data.ktr_pai +'" data-ktr_ppkn="' + data.ktr_ppkn + '" data-ktr_bind="' + data.ktr_bind + '" data-ktr_mtk_umum="' + data.ktr_mtk_umum + '" data-ktr_sjr_indo="' + data.ktr_sjr_indo + '" data-ktr_bing="' + data.ktr_bing + '" data-ktr_senbud="' + data.ktr_senbud + '" data-ktr_penjaskes="' + data.ktr_penjaskes + '" data-ktr_pkwu="' + data.ktr_pkwu + '" data-ktr_bhs_daerah="' + data.ktr_bhs_daerah + '" data-ktr_mtk_peminatan="' + data.ktr_mtk_peminatan + '" data-ktr_fisika="' + data.ktr_fisika + '" data-ktr_kimia="' + data.ktr_kimia + '" data-ktr_biologi="' + data.ktr_biologi + '" data-ktr_fiqih="' + data.ktr_fiqih + '" data-ktr_bhs_arab="' + data.ktr_bhs_arab + '" data-ktr_conversation="' + data.ktr_conversation + '" data-ktr_ekonomi="' + data.ktr_ekonomi + '" data-nilai_pengetahuan="' + data.nilai_pengetahuan + '" data-nilai_keterampilan="' + data.nilai_keterampilan + '" data-nilai_raport="' + data.nilai_raport + '" data-semester="' + data.semester + '" data-tahun_ajar="' + data.tahun_ajar + '" ><i data-feather = "edit" class = "w-4 h-4"> </i> </button>';
                                var deleteBtn = '<button class = "btn btn-danger btn-delete" data-id="' + data.id + '"><i data-feather = "trash-2" class = "w-4 h-4"></i> </button>';

                                // var actions = editBtn + ' || ' + deleteBtn;
                                var actions = deleteBtn;
                                return actions;
                            }
                        }
                    ],
                    "drawCallback": function (settings){
                        feather.replace(); //untuk memperbarui ikon - ikon SVG setelah data di perbarui
                    }
                });

                $('.modal-import_nilairaport').click(function() {
                    cash("#modal-import").modal("show");
                });

                $(".btn-import").click(function()
                {
                    cash("#modal-import").modal("show");
                    //ajax delete API
                    $.ajax({
                        success: function(response) {
                            //show the modal
                            $('.import-sukses').text(response.message);
                            cash("#success-import-modal-preview").modal("show");

                            setTimeout(function() {
                                cash("#success-import-modal-preview").modal("hide");

                                location.reload();
                            }, 3000); // 3000 milliseconds = 3 seconds
                        },
                        error: function(xhr, status, error) {
                            //show error aler
                            $('.import-gagal').text(response.meesage);
                            cash("#warning-import-modal-preview").modal("show");

                            setTimeout(function() {
                                cash("#warning-import-modal-preview").modal("hide");

                                location.reload();
                            }, 5000); // 3000 milliseconds = 3 seconds
                        }
                    });
                });

            });
        </script>
    </body>
</html>