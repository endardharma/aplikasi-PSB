<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="{{ asset('template/dist/images/logo.svg') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title> Jurusan Siswa </title>
        <!-- BEGIN: CSS Assets -->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- END: CSS Assets -->
    </head>
    <!-- END: Head -->

    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img src="{{ asset('template/dist/images/logo.svg') }}" alt="Icewall Tailwind HTML Admin Template" class="w-6">
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
        <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -m-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img src="{{ asset('template/dist/images/logo.svg') }}" alt="Icewall Tailwing HTML Admin Template" class="w-6">
                    <span class="text-white text-lg ml-3"> APK - <span class="font-medium"> PSB </span> </span>
                </a>
                <!-- END: Logo- -->
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"> <a href=""> Beranda </a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active"> Master Kriteria </a> </div>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Notification -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6"> <!-- menampilkan POP UP -->
                            <div class="notification-content__title"> Notifikasi </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notification -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow--lg image-fit zoom-in scale-110" role="button" aria-expanded="false">
                        <img src="{{ asset('template/dist/images/profile-3.jpg') }}" alt="Icewall Tailwind HTML Admin Template">
                    </div>
                    <div class="dropdown-menu w-56"> <!-- awal: menampilkan dropwdown menu -->
                        <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white"> <!--menampilkan dropwdown -->
                            <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                                <div class="font-medium nama-user"></div>
                                <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600 role-user"></div> <!-- menampilkan ROLE USER pada halaman profile secara otomatis berdasarkan LOGIN -->
                            </div> 
                            <div class="p-2"> <!-- menambahkan baris baru dalam 1 halaman dropdown -->
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </div>
                            <div class="p-2 border-t border-theme-12 dark:boder-dark-3">
                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div> <!-- END: menampilkan dropwdown menu -->
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
                            <a href="javascript:;" class="side-menu ">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Users <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('user')}}" class="side-menu ">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Master User </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('userdetail') }}" class="side-menu ">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> User Detail </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu side-menu--active">
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
                                    <a href="{{ route('jurusansiswa') }}" class="side-menu side-menu--active">
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
                                    <a href="{{ route('kelassiswa') }}" class="side-menu ">
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
                            <a href="javascript:;" class="side-menu ">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title">Data Nilai<div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilairaport') }}" class="side-menu ">
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
                                    <a href="{{ route('nilaisikap') }}" class="side-menu ">
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
                            <a href="javascript:;" class="side-menu ">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Penilaian
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilaisemuakriteria') }}" class="side-menu ">
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
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            List Data Jurusan Siswa
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <div class="intro-y col-span-12 flex flex-weap sm:flex-nowrap items-center mt-2">
                                <button class="btn btn-primary shadow-md mr-2 modal-jurusan_siswa">
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-4 h-4" data-feather="user-plus"></i></span>
                                </button>
                                <button class="btn btn-primary shadow-md mr-2 modal-jurusan_siswa"> <!-- menampilkan button import data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4" data-feather="file-plus"></i> </span>
                                </button>
                                <a href="{{ route('exportJurusanSiswa') }}" class="btn btn-success btn-md shadow-md mr-2"> <!-- menampilkan button export data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4 bi bi-file-earmark-excel"></i> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-1 mt-5">
                        <div class="overflow-x-auto svrollbar-hidden">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Jurusan ID</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END: HTML Table Data -->

                    <!-- END: Modal Import Content -->
                    <div id="modal-import" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Import Data Jurusan Siswa
                                    </h2>
                                    <a href="javascript:;" data-dismiss="modal"><i data-feather="x" class="w-8 h-8 text-gray-500"></i></a>
                                </div>
                                {{-- <form action="http://127.0.0.1:8000/api/master-kriteria/import-kriteria" method="POST" enctype="multipart/form-data"> --}}
                                <form action="/halaman/import-jurusan_siswa" method="POST" enctype="multipart/form-data">
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
                                        <div class="text-3xl mt-5">Berhasil import data jurusan siswa baru!</div>
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
                                        <div class="text-3xl mt-5">Oops...Gagal import data jurusan siswa baru!</div>
                                        <div class="text-gray-600 mt-2 import-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->

                    <!-- BEGIN: Modal Create Content -->
                    <div id="modal-create" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Form Tambah Data Jurusan Siswa
                                    </h2>
                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                </div>
                                <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    {{-- <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">NIS</label>
                                        <input type="text" class="form-control create-nis" name="nis" id="nis" placeholder="Masukkan NIS Siswa" required>
                                    </div> --}}
                                    {{-- <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Jurusan ID</label>
                                        <input type="text" class="form-control create-jurusan_id" name="jurusan_id" id="jurusan_id" placeholder="Masukkan Jurusan ID" required>
                                    </div> --}}
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">NIS</label>
                                        <select class="form-select create-nis" id="nis" name="nis">
                                            <option selected disabled>--Pilih NIS--</option>
                                                @foreach ($mastersiswa as $siswa)
                                                    <option value="{{ $siswa-> nis}}">{{ $siswa->nis }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">User ID</label>
                                        <select class="form-select create-jurusan_id" id="jurusan_id" name="jurusan_id">
                                            <option selected disabled>--Pilih Jurusan ID--</option>
                                                @foreach ($masterjurusan as $jurusan)
                                                    <option value="{{ $jurusan-> nama_jurusan}}">{{ $jurusan->nama_jurusan }}</option>
                                                @endforeach
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
                                        <div class="text-3xl mt-5">Berhasil Menambahkan Data Jurusan Siswa Baru!</div>
                                        <div class="text-gray-600 mt-2 create-sukses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Update Sukses Content -->
                    <!-- BEGIN: Modal Update Gagal Content -->
                    <div id="warning-create-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Oops...Gagal Menambahkan Data Jurusan Siswa Baru!</div>
                                        <div class="text-gray-600 mt-2 create-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Update Content -->
                    <div id="modal-update" class="modal" tabindex="-1" aria-hidden="true" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- BEGIN: Modal Header -->
                                <div class="modal-header">
                                    <h2 class="font-medium text-base mr-auto">
                                        Form Update Data Jurusan Siswa
                                    </h2>
                                    <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                                </div>
                                <!-- END: Modal Header -->
                                <!-- BEGIN: Modal Body -->
                                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">NIS</label>
                                        <input type="hidden" class="form-control update-id" required>
                                        <input type="text" class="form-control update-nis" name="nis" id="nis" placeholder="Masukkan NIS Siswa" required>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="modal-form-1" class="form-label">Jurusan ID</label>
                                        <input type="text" class="form-control update-jurusan_id" name="jurusan_id" id="jurusan_id" placeholder="Masukkan Jurusan ID" required>
                                    </div>
                                </div>
                                <!-- END: Modal Body -->
                                <!-- BEGIN: Modal Footer -->
                                <div class="modal-footer text-right">
                                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Batal</button>
                                    <button type="button" class="btn btn-primary w-20 btn-update">Update</button>
                                </div>
                                <!-- END: Modal Footer -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Update Sukses Content -->
                    <div id="success-update-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="check-circle" class="w-16 sh-16 text-theme-10 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Berhasil update data Jurusan Siswa baru!</div>
                                        <div class="text-gray-600 mt-2 update-sukses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Update Gagal Content -->
                    <div id="warning-update-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Oops...Gagal update data Jurusan Siswa  baru!</div>
                                        <div class="text-gray-600 mt-2 update-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Delete Content -->
                    <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-24 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Apa kamu yakin ingin hapus data Jurusan Siswa s ini?</div>
                                        <div class="text-gray-600 mt-2">
                                            Apa kamu yakin akan menghapus data Jurusan Siswa ini?
                                            <br>
                                            Data yang dihapus tidak akan bisa dikembalikan.
                                        </div>
                                    </div>
                                    <div class="px-5 pb-8 text-center">
                                        <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Batalkan</button>
                                        <button type="button" class="btn btn-danger w-24 hapus-btn">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Hapus Sukses Content -->
                    <div id="success-hapus-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="check-circle" class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Hapus Data Jurusan Siswa Berhasil!</div>
                                        <div class="text-gray-600 mt-2 hapus-sukses"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                    <!-- BEGIN: Modal Hapus Gagal Content -->
                    <div id="warning-hapus-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="p-5 text-center">
                                        <i data-feather="x-circle" class="w-16 h-16 text-theme-23 mx-auto mt-3"></i>
                                        <div class="text-3xl mt-5">Oops...Hapus Data Gagal!</div>
                                        <div class="text-gray-600 mt-2 hapus-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                </div>
                <!-- END: COntent -->
            </div>
        </div>
        <!-- BEGIN: JS Asset -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- memanggil JQuery -->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('template/dist/js/app.js') }}"></script> <!-- menampilkan logo.svg JS -->
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
                        if (cookie.indexOf(cookieName) === 0) {
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
                    window.location.href = "{ route('login' )}"
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
                }).catch(error => {
                    console.error ('Error: ', error);
                });

                $('#data-table').DataTable({
                    "processing": true, //menampilkan pesan loading
                    "serverside": true,
                    "ajax": {
                        "url": "http://127.0.0.1:8000/api/jurusan-siswa/list",
                        "dataType": "json",
                        "type": "POST",
                        "headers": {
                            'Authorization': 'Bearer ' + token
                        }
                    },
                    "columns": [
                        { data: 'nomor_urut', className: 'text-center' },
                        { data: 'nis', className: 'text-center' },
                        { data: 'jurusan_id', className: 'text-center' },
                        {
                            data: null,
                            render: function (data, type, row){
                                // create action button
                                var editBtn = '<button class = "btn btn-primary btn-edit" data-id = "' + data.id + '" data-nis = "' + data.nis + '" data-jurusan_id = "' + data.jurusan_id + '" ><i data-feather = "edit" class = "w-4 h-4"> </i> </button>';
                                var deleteBtn = '<button class = "btn btn-danger btn-delete" data-id="' + data.id + '"><i data-feather = "trash-2" class = "w-4 h-4"></i> </button>';

                                //combine the button
                                var actions = editBtn + ' || ' + deleteBtn;
                                return actions;
                            }
                        }
                    ],
                    "drawCallback": function (settings){
                        feather.replace(); //untuk memperbarui ikon - ikon SVG setelah data di perbarui
                    }
                });

                $(".modal-jurusan_siswa").click(function() {
                    cash("#modal-create").modal("show");
                });

                $(".btn-create").click(function() {
                    // Ajax update
                    var nis = $('.create-nis').val();
                    var jurusan_id = $('.create-jurusan_id').val();

                    var formData = new FormData();
                    // formData.append('id', id);
                    formData.append('nis', nis);
                    formData.append('jurusan_id', jurusan_id);
                    

                    // Kirim permintaan pembaruan produk ke API
                    $.ajax({
                        url: "http://127.0.0.1:8000/api/jurusan-siswa/tambah-jurusan_siswa",
                        type: 'POST',
                        dataType: 'json',
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
                            console.log('Data Jurusan Siswa Berhasil di Tambahkan!');

                            setTimeout(function() {
                                cash("#success-update-modal-preview").modal("hide");

                                location.reload();
                            }, 3000); // 3000 milliseconds = 3 seconds
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan dalam permintaan Ajax itu sendiri
                            console.log('Data Jurusan Siswa Gagal untuk di Tambahkan. Status: ' + error);

                            // Tampilkan pesan kesalahan yang dikirim oleh server
                            var response = JSON.parse(xhr.responseText);
                            if (response.success === false && response.message) {
                                $('.create-gagal').text(response.message);
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
                });

                $('#data-table').on('click', '.btn-edit', function() {
                    cash("#modal-update").modal("show");
                    var id = $(this).attr("data-id");
                    var nis = $(this).attr("data-nis");
                    var jurusan_id = $(this).attr("data-jurusan_id");

                    // Handle edit action
                    $('.update-id').val(id);
                    $('.update-nis').val(nis);
                    $('.update-jurusan_id').val(jurusan_id);
                });

                $(".btn-update").click(function() {
                    // Ajax update
                    var id = $('.update-id').val();
                    var nis = $('.update-nis').val();
                    var jurusan_id = $('.update-jurusan_id').val();
               
                    // Validasi id
                    if (!id || id === "") {
                        alert("ID user harus diisi!");
                        
                        return;
                    }
                    // console.log($id);

                    // Kirim permintaan pembaruan produk ke API
                    $.ajax({
                        url: "http://127.0.0.1:8000/api/jurusan-siswa/update-jurusan_siswa/" + id,
                        type: "PUT",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                        },
                        data: {
                            id: id,
                            nis: nis,
                            jurusan_id: jurusan_id,
                        },
                        success: function(response) {
                            // Show the modal
                            // console.log(response);
                            $('.update-sukses').text(response.message);
                            cash("#success-update-modal-preview").modal("show");
                            
                            setTimeout(function() {
                                cash("#success-update-modal-preview").modal("hide");

                                location.reload();
                            }, 3000); // 3000 milliseconds = 3 secondse
                        },
                        error: function(xhr, status, error) {
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
                });

                $('#data-table').on('click', '.btn-delete', function() {
                    var id = $(this).attr("data-id");
                    // var id = $('.update-id').val();
                    // console.log(id);

                    cash("#delete-modal-preview").modal("show");
                    $('.hapus-btn').show();
                    $('.hapus-btn').click(function() {
                        // Ajax delete Api
                        $.ajax({
                            url: "http://127.0.0.1:8000/api/jurusan-siswa/hapus-jurusan_siswa/" + id,
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
                                    }, 3000); // 3000 milliseconds = 3 seconds
                                }
                        });
                    });
                });

                $('.modal-jurusan_siswa').click(function() {
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
                
                function logout(name){
                    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    winddow.location.href = "{{ route('login') }}";
                }
                
            });

        </script>
    </body>
</html>