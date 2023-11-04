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
        <link href="{{ asset('template/dist/images/logo.svg') }} " rel="shortcut icon"> <!--untuk memanggil template -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('template/dist/css/app.css') }} " />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="{{ asset('template/dist/images/logo.svg') }}">
                        <span class="text-white text-lg ml-3"> Ice<span class="font-medium">wall</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('template/dist/images/illustration.svg') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block form-email" placeholder="Email" required>
                            <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4 form-password" placeholder="Password" required>
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                            </div>
                            <a href="">Forgot Password?</a> 
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top btn-login">Login</button>
                            <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</button>
                        </div>
                        <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                            By signin up, you agree to our 
                            <br>
                            <a class="text-theme-17 dark:text-gray-300" href="">Terms and Conditions</a> & <a class="text-theme-17 dark:text-gray-300" href="">Privacy Policy</a> 
                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
                <!--BEGIN: Konten Notifikasi Sukses-->
                <div id="success-notification-content" class="toastify-content hidden flex">
                    <i class="text-theme-10" data-feather="check-circle"></i>
                    <div class="ml-4 mr-4">
                        <div class="font-medium">Login Berhasil!</div>
                        <div class="text-gray-600 mt-1 pesan-sukses"></div>
                    </div>
                </div>

                <!--BEGIN: Konten Notifikasi Gagal-->
                <div id="failed-notification-content" class="toastify-content hidden flex">
                    <i class="text-theme-10" data-feather="x-circle"></i>
                    <div class="ml-4 mr-4">
                        <div class="font-medium">Login Gagal!</div>
                        <div class="text-gray-600 mt-1 pesan-gagal"></div>
                    </div>
                </div>
                {{-- END: Konten Notifikasi --}}
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="login-dark-login.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('template/dist/js/app.js') }}"></script>
        <script src="{{ asset('template/src/toastify.js') }}"></script>
        <script>
            $(document).ready(function(){
                //text js
                $('.btn-login').click(function(){
                    var email = $('.form-email').val();
                    var password = $('.form-password').val();

                    // console.log(email);
                    // console.log(password);
                    if(email != '' && password != ''){
                        //ajax login
                        const data = {
                            email: $(".form-email").val(),
                            password: $(".form-password").val(),
                        };

                        //send the ajax POST requents
                        fetch('http://127.0.0.1:8000/api/otentikasi/masuk', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data),
                        }).then(response => response.json()).then(result => {
                            //handle the API respone here
                            if(result.success){
                                //fungsi untuk mengatur cookie
                                function setCookie(name, value, days) {
                                    var expires = "";

                                    if (days){
                                        var date = new Date();
                                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                                        expires = "; expires=" + date.toUTCString();
                                    }

                                    document.cookie = name + "=" + encodeURIComponent(value) + expires + ";path=/";
                                }

                                //fungsi untuk mendapatkan nilai cookie
                                function getCookie(name){
                                    var cookieName = name + "=";
                                    var decodedCookie = decodeURIComponent(document.cookie);
                                    var cookieArray = decodedCookie.split(';');

                                    for (var i = 0; i < cookieArray.length; i++) {
                                        var cookie = cookieArray[i];
                                        while (cookie.charAt(0) === ' '){
                                            cookie = cookie.substring(1);
                                        }
                                        if (cookie.indexOf(cookieName) === 0 ){
                                            return cookie.substring(cookieName.length, cookie.length);
                                        }
                                    }

                                    return null;
                                }

                                //simpan token ke cookie
                                var token = result.token;
                                setCookie('token', token, 7); //simpan cookie selama 7 hari

                                $('.pesan-sukses').text(result.message);
                                Toastify({
                                    node: cash("#success-notification-content")
                                    .clone()
                                    .removeClass("hidden")[0],
                                    duration: 3000,
                                    newWindows: true,
                                    close: true,
                                    hravotu: "top",
                                    position: "right",
                                    stopOnFocus: true,
                                }).showToast();

                                if(token){
                                    //redirect after 3 seconds
                                    setTimeout(function(){
                                        window.location.href = "{{ route('dashboard') }}"; //replace with your desired destination URL
                                    }, 3000); //3000 milliseconds = 3 seconds
                                }
                            }else{
                                $('.pesan-gagal').text(result.message);
                                Toastify({
                                    node: cash("#failed-notification-content")
                                    .clone()
                                    .removeClass("hidden")[0],
                                    duration: -1,
                                    newWindow: true,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    stopOnFocus: true,
                                }).showToast();
                            }
                        }).catch(error => {
                            //handle any network or other errors
                            console.error('Error:', error);
                        });
                    }else{
                        //show error alert
                        $('.login-gagal').text("Field Email / Password tidak boleh kosong");
                        cash("#waring-login-modal-preview").modal("hide");

                        setTimeout(function(){
                            cash ("#warning-login-modal-preview").mode("hide");

                            location.reload();
                        }, 5000); //3000 milliseconds = 3 seconds
                    }
                });
            });
        </script>
        <!-- END: JS Assets-->
    </body> 
</html>
