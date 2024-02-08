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
        <title> List Data Nilai | Semua Kriteria </title>
        <!-- BEGIN: CSS Assets -->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
                <div class="-intro-x breadcrumb mr-auto"> <a href=""> Beranda </a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active"> Master Siswa </a> </div>
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

        <div class="wrapper"> <!-- menampilkan tampilan layer kotak -->
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
                            <a href="javascript:;" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title">
                                    Penilaian
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('nilaisemuakriteria') }}" class="side-menu side-menu--active">
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
                    <!-- BEGIN: tampilan tambah data dan pencarian -->
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8"> <!-- menampilkan layer baru untuk isi content atau data -->
                        <h2 class="text-lg font-medium mr-auto"> 
                            List Data Nilai | Semua Kriteria
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0"> 
                            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                                {{-- <button class="btn btn-primary shadow-md mr-2 modal-siswa"> <!-- menampilkan button tambah data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-4 h-3" data-feather="user-plus"></i> </span>
                                </button> --}}
                                <button class="btn btn-primary shadow-md mr-2 modal-import_nilaisemuakriteria"> <!-- menampilkan button import data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4" data-feather="file-plus"></i> </span>
                                </button>
                                <a href="{{ route('exportNilaiSemuaKriteria') }}" class="btn btn-success btn-md shadow-md mr-2"> <!-- menampilkan button export data -->
                                    <span class="w-5 h-5 flex items-center justify center"> <i class="w-5 h-4 bi bi-file-earmark-excel"></i> </span>
                                </a>
                                {{-- <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                        <input type="text" class="form-control w-56 bpx pr-10 placeholder-theme-8" placeholder="Cari.....">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- END: tampilan tambah data dan pencarian -->

                    <!-- BEGIN: HTML Table Data -->
                    <div class="intro-y box p-1 mt-5"> <!-- menampilkan layer -->
                        <div style="overflow-x:auto ">
                            <table id="data-table" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>NIlai Raport</th>
                                        <th>Nilai Ketidakhadiran</th>
                                        <th>Nilai Sikap</th>
                                        <th>Nilai Prestasi Akademik / Non-Akademik</th>
                                        <th>Nilai Keterlambatan Masuk Sekolah</th>
                                        <th>Nilai Hafalan Juz Al-Qur'an</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
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
                                        Import Data Nilai | Semua Kriteria
                                    </h2>
                                    <a href="javascript:;" data-dismiss="modal"><i data-feather="x" class="w-8 h-8 text-gray-500"></i></a>
                                </div>
                                {{-- <form action="http://127.0.0.1:8000/api/master-kriteria/import-kriteria" method="POST" enctype="multipart/form-data"> --}}
                                <form action="/halaman/import-nilaisemuakriteria" method="POST" enctype="multipart/form-data">
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
                                        <div class="text-3xl mt-5">Berhasil import data nilai semua kriteria baru!</div>
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
                                        <div class="text-3xl mt-5">Oops...Gagal import data nilai semua kriteria baru!</div>
                                        <div class="text-gray-600 mt-2 import-gagal"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Modal Content -->
                </div>
                <!-- END: Conten -->
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
                // 1. menampilkan token (nama user dan jabatan user)
                // 1.1 mendapatkan nilai dari cookie dengan nama tertentur
                function getCookie(name){ 
                    var cookieName = name + "="; // membuat string yang akan di cari dalam cookie
                    var decodedCookie = decodeURIComponent(document.cookie); // mengkode nilai cookie dari format URL
                    var cookieArray = decodedCookie.split(';'); // membuat array yang berisi nilai - nilai cookie yang terpisah

                    for (var i = 0; i < cookieArray.length; i++){
                        var cookie = cookieArray[i];
                        while (cookie.charAt(0) === ' '){
                            cookie = cookie.substring(1); // menghapus spasi awal pada nilai cookie
                        }
                        if  (cookie.indexOf(cookieName) === 0){ // memeriksa apakah nilai cookie dimulai dengan string 'cookieName'. Jika ya, itu berarti cookie ditemukan
                            return cookie.substring(cookieName.length, cookie.length); //mengembalikan nilai cookie yang diinginkan
                        }
                    }
                }
                var token = getCookie('token'); // memanggil fungsi getCookie untuk mendapatkan nilai cookie dengan nama 'token' dan menyimpannya dalam variabel token
               
                // 1.2 flow control
                if (token)
                {
                    // token ada dalam cookie, lakukan tindakan yang sesuai
                    console.log('Token:', token); // jika if benar, akan mencetak nilai token ke konsol
                }else{
                    window.location.href = "{{ route('login') }}"; // jika if tidak benar, akan di arahkan ke login lagi
                }

                // 1.3 melakukan permintaan GET ke URL dengan memberikan HEADER OTORISASI menggunakan token
                var url = 'http://127.0.0.1:8000/api/dashboard/profil'; // mendefinisikan endpoint yang akan di akses
                fetch(url, { // membuat permintaan ke URL
                    method: 'GET',
                    headers: {
                        'Authorization' : 'Bearer ' + token // header mengandung token yang berfungsi untuk otentikasi, dalam format 'Bearer {token}'
                    }
                }).then(response => response.json()).then(data => {
                    $('.nama-user').text(data.name);
                    $('.role-user').text(data.role);
                    // $('#sambutan').text (data.name); //cara tes data masuk ke halaman atau tidak
                }). catch (error => {
                    console.error('Error:', error);
                });

                // 2.4 Initialize DataTable/Panggil Ajax Master Siswa
                $('#data-table').DataTable({
                    "processing": true, //menampilkan pesan loading
                    "serverside": true,
                    "ajax": {
                        "url": "http://127.0.0.1:8000/api/nilai-semuakriteria/list",
                        "dataType": "json",
                        "type": "POST",
                        "headers": {
                            'Authorization': 'Bearer ' + token
                        }
                    },
                    "columns": [
                        { data: 'nomor_urut', className: 'text-center' },
                        { data: 'nis', className: 'text-center' },
                        { data: 'nilairaport_id', className: 'text-center' },
                        { data: 'nulaiketidakhadiran_id', className: 'text-center' },
                        { data: 'nilaisikap_id', className: 'text-center' },
                        { data: 'nilaiprestasi_id', className: 'text-center' },
                        { data: 'nilaiketerlambatan_id', className: 'text-center' },
                        { data: 'nilaihafalan_id', className: 'text-center' },
                        { data: 'semester', className: 'text-center' },
                        { data: 'tahun_ajar', className: 'text-center' },
                        // {
                        //     data: null,
                        //     render: function (data, type, row){
                        //         // create action button
                        //         var editBtn = '<button class = "btn btn-primary btn-edit" data-nis = "' + data.nis + '" data-kelas_id = "' + data.kelas_id + '" data-nik = "' + data.nik + '" data-nisn = "' + data.nisn + '" data-nama_siswa = "' + data.nama_siswa + '" data-tempat_lahir = "' + data.tempat_lahir + '" data-tgl_lahir = "' + data.tgl_lahir + '" data-jenkel = "' + data.jenkel + '" data-agama = "' + data.agama + '" data-nama_ayah = "' + data.nama_ayah + '" data-nama_ibu = "' + data.nama_ibu + '" data-pekerjaan_ayah = "' + data.pekerjaan_ayah + '" data-pekerjaan_ibu = "' + data.pekerjaan_ibu + '" data-alamat = "' + data.alamat + '"><i data-feather = "edit" class = "w-4 h-4"> </i> </button>';
                        //         var deleteBtn = '<button class = "btn btn-danger btn-delete" data-ni="' + data.ni + '"><i data-feather = "trash-2" class = "w-4 h-4"></i> </button>';

                        //         //combine the button
                        //         var actions = editBtn + ' || ' + deleteBtn;
                        //         return actions;
                        //     }
                        // }
                    ],
                    "drawCallback": function (settings){
                        feather.replace(); //untuk memperbarui ikon - ikon SVG setelah data di perbarui
                    }
                });

                $('.modal-import_nilaisemuakriteria').click(function() {
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
        <!-- END: JS Assets -->
    </body>
</html>