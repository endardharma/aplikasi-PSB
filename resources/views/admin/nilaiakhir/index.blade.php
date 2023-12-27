<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('template/dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title> Nilai Akhir | Perangkingan</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }}" />
        <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
        <!-- END: CSS Assets-->
    </head>
    <!-- BEGIN: head -->
    <body class="main">
        <!-- BEGIN: mobile menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img src="{{ asset('template/dist/images/logo.svg')}}" class="w-6">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"><i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i></a>
            </div>
            <ul class="border-t border-theme-2 py-5 hidden">
                <li>
                    <a href="{{ route('dashboard') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>  <!-- menampilkan halaman drop down <i data-feather="chevron-down" class="menu__sub-icon">-->
                    </a>
                </li>
                <li>
                    <a href="{{ route('masterguru') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Master Guru </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mastersiswa') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="users"></i> </div>
                        <div class="menu__title"> Master Siswa </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('mastermapel') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Master Mata Pelajaran </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('masterkriteria') }}" class="menu">
                        <div class="menu__icon"> <i data-feather="slack"></i> </div>
                        <div class="menu__title"> Master Kriteria </div>
                    </a>
                </li>
                <li class="menu__devider my-6"></li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> 
                            Data Nilai 
                        </div>
                        <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{route('nilairaport')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Nilai Raport</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaiketidakhadiran') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Tingkat Ketidakhadiran Siswa</div>
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
                                <div class="menu__title"> Prestasi Akademik / Non-Akademik</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaiketerlambatan') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Keterlambatan mMasuk Sekolah</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('nilaihafalan') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                <div class="menu__title"> Hafalan Juz Al-Qur'an</div>
                            </a>
                        </li>
                    </ul>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                            <div class="menu__title"> Penilaian </div>
                            <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('nilaisemuamapel') }}" class="menu">
                                    <div class="menu__icon"> <i data-feather="plus"></i> </div>
                                    <div class="menu__title"> Nilai | Semua Mapel </div>
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
        <!-- END: mobile menu -->
        <!-- BEGIN: top bar -->
        <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img src="{{ asset('template/dist/images/logo.svg') }}" class="w-6">
                    <span class="text-white text-lg ml-3">APK - <span class="font-medium">PSB</span></span>
                </a>
                <!-- END: logo -->
                <!-- BEGIN: breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto"><a href="">Beranda</a><i data-feather="chevron-right" class="breadcrumb__icon"></i><a href="" class="breadcrumb--active">Nilai Akhir | Perangkingan</a></div>
                <!-- END: breadcrumb -->
                <!-- BEGIN: notifikasi -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false"><i data-feather="bell" class="notification__icon dark:text-gray-300"></i></div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                            <div class="notification-content__title">Notifikasi</div>
                        </div>
                    </div>
                </div>
                <!-- END: notifikasi -->
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
        <!-- END: top bar -->
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
                            <a href="{{ route('masterguru') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Master Guru </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mastersiswa') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Master Siswa </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mastermapel') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                                <div class="side-menu__title"> Master Mata Pelajaran </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('masterkriteria') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="slack"></i> </div>
                                <div class="side-menu__title"> Master Kriteria </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                <div class="side-menu__title">
                                    Data Nilai
                                    <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{route('nilairaport')}}" class="side-menu">
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
                                    <a href="{{ route('nilaisemuamapel') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Nilai | Semua Mapel </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('nilaiakhir') }}" class="side-menu side-menu--active">
                                        <div class="side-menu__icon"> <i data-feather="plus"></i> </div>
                                        <div class="side-menu__title"> Perangkingan </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: side menu -->
                <!-- BEGIN: content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            List Data Nilai Akhir | Perangkingan
                        </h2>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                                <!-- BEGIN: preview notifikasi data belum di setujui / not approve -->
                                {{-- <div class="preview">
                                    <div class="text-center">
                                        <!-- BEGIN: Notification Content -->
                                        <div id="success-notification-content" class="toastify-content hidden flex">
                                            <i class="text-theme-10" data-feather="x-circle"></i>
                                            <div class="ml-4 mr-4">
                                                <div class="font-medium">DATA NOT APRROVED!</div>
                                                <div class="text-gray-600 mt-1">Data belum di approved oleh Bagian Kurikulum, hubungi Bagian Kurikulum agar segera meng-approved data.</div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="success-notification-toggle" class="btn btn-danger mr-4 modal-not_approved"><i data-feather="x-circle" class="mr-2"></i>Not Approved</button>
                                        <!-- END: Notification Toggle -->
                                    </div>
                                </div> --}}
                                <!-- END: preview notifikasi data belum di setujui / not approve -->
                                <!-- BEGIN: preview notifikasi data telah di setujui / approve -->
                                <div class="preview">
                                    <div class="text-center">
                                        <!-- BEGIN: Notification Content -->
                                        <div id="success-notification-content" class="toastify-content hidden flex">
                                            <i class="text-theme-10" data-feather="check-circle"></i>
                                            <div class="ml-2 mr-2 ">
                                                <div class="font-medium">APRROVED!</div>
                                                <div class="text-gray-600 mt-1">Data telah di setujui oleh Bagian Kurikulum dan data dapat di cetak serta di publikasikan.</div>
                                            </div>
                                        </div>
                                        <!-- END: Notification Content -->
                                        <!-- BEGIN: Notification Toggle -->
                                        <button id="success-notification-toggle" class="btn btn-success mr-2 modal-approved"><i data-feather="check-circle" class="mr-2"></i>Approved</button>
                                        <!-- END: Notification Toggle -->
                                    </div>
                                </div>
                                <!-- BEGIN: preview notifikasi data telah di setujui / approve -->
                                {{-- <button type="button" class="btn btn-success mr-2" data-toggle="tooltip" data-placement="top" title="data telah di setujui oleh bagian kurikulum dan data dapat di publikasikan serta dapat di cetak.">
                                    <i data-feather="check-circle" class="mr-2"></i>
                                    Approved
                                </button> --}}
                                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                        <input type="text" class="form-control w-56 bpx pr-10 placeholder-theme-8" placeholder="Cari.....">
                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-5">
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mr-auto">
                            <select class="form-select create-is_active" required>
                                <option selected disabled> Kelas </option>
                                <option value="10"> 10 </option>
                                <option value="11"> 11 </option>
                                <option value="12"> 12 </option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mr-auto">
                            <select class="form-select create-is_active" required>
                                <option selected disabled> Jurusan </option>
                                <option value="IPA"> IPA </option>
                                <option value="IPS"> IPS </option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mr-auto">
                            <select class="form-select create-is_active" required>
                                <option selected disabled> Semester </option>
                                <option value="Ganjil"> Ganjil </option>
                                <option value="Genap"> Genap </option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mr-auto">
                            <select class="form-select create-is_active" required>
                                <option selected disabled> Tahun Ajar </option>
                                <option value="2023"> 2023 </option>
                                <option value="2024"> 2024 </option>
                                <option value="2025"> 2025 </option>
                            </select>
                        </div>
                        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mr-auto">
                            <button class="btn btn-primary shadow-md mr-2 modal-cari">
                                <span class="w-5 h-5 flex items-center justify center"><i class="w-4 h-4" data-feather="search"></i></span>
                                Cari
                            </button>
                        </div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                            </div>
                        </div>
                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center">
                                <button type="button" class="btn btn-primary text-white-700 dark:text-white-300 flex items-center mr-2 modal-pdf"><i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> PDF </button>
                                <button type="button" class="btn btn-primary text-white-700 dark:text-white-300 flex items-center mr-2 modal-excel"><i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> EXCEL </button>
                                {{-- <div class="flex items-center sm:ml-auto mt-3 sm:mt-0 mr-2">
                                    <button class="btn btn-primary flex items-center text-white-700 dark:text-white-300 modal-export_excel"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                                    <button class="ml-2 btn btn-primary flex items-center text-white-700 dark:text-white-300 modal-export_pdf"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                                </div> --}}
                                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                                    <div class="w-56 relative text-gray-700 dark:text-gray-300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: html table data -->
                    <div class="intro-y box p-1 mt-5">
                        <div class="overflow-x-auto scrollbar-hidden">
                            <table class="table table-striped" id="data-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Nilai Akhir</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- END: html table data -->
                </div>
                <!-- END: content -->
            </div>
        </div>

        <!-- BEGIN: JS Assets -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--manggil JQuery-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('template/dist/js/app.js') }}"></script>
        <script>
            $(document).ready(function() {
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
                    // token ada dalam cookie, lakukan tindakan yang sesuai
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
                }).catch(error => {
                    console.error('Error:', error);
                });

            });
        </script>
        <!-- END: JS Assets -->
    </body>
</html>