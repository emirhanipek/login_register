<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Kayıt Ol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Style css -->
    <link href="../assets/css/style.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <section class="h-screen flex items-center justify-center bg-no-repeat inset-0 bg-cover bg-[url('../images/bg-2.png')]">
        <div class="container 2xl:px-80 xl:px-52">
            <div class="bg-white rounded-lg overflow-hidden" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="grid xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 gap-6">

                    <div class="xl:col-span-2 lg:col-span-1">
                        <div class="bg-sky-600 text-white gap-10 h-full w-full p-7 space-y-6 lg:space-y-0">
                            <span class="font-semibold tracking-widest uppercase">Sergio Ferrari </span>

                            <div class="flex flex-col justify-center text-center h-full">
                                <h1 class="text-3xl/tight mb-4">Hoşgeldiniz ! </h1>
                                <p class="text-gray-200 font-normal leading-relaxed">Bizimle bağlantıda kalmak için lütfen kişisel bilgilerinizle giriş yapın</p>
                                <div class="my-8">
                                    <a href="signin-2.php" class="border text-white font-medium text-sm rounded-full transition-all duration-300 hover:bg-white hover:text-black focus:bg-white focus:text-black px-14 py-2.5">Giriş Yap</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="xl:col-span-3 lg:col-span-2 lg:m-10 m-5">
                        <div class="text-center">
                            <div>
                                <h1 class="text-3xl/tight text-sky-600 mb-3">Kayıt Ol</h1>

                                <div class="flex items-center justify-center gap-2 my-5">
                                    <a href="#" class="border rounded-full flex items-center justify-center transition-all duration-300 focus:bg-sky-600 focus:text-white hover:bg-sky-600 hover:text-white h-10 w-10">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="border rounded-full flex items-center justify-center transition-all duration-300 focus:bg-sky-600 focus:text-white hover:bg-sky-600 hover:text-white h-10 w-10">
                                        <i class="fa-brands fa-google-plus-g"></i>
                                    </a>
                                    <a href="#" class="border rounded-full flex items-center justify-center transition-all duration-300 focus:bg-sky-600 focus:text-white hover:bg-sky-600 hover:text-white h-10 w-10">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>

                                <p class="text-sm font-medium leading-relaxed">Veya Mail Kullanarak Kayıt Olun.</p>
                            </div>
                            <form action="../../controller/userController/usercontroller.php?operation=register" method="POST">
                            <div class="space-y-5 mt-10">
                                <div class="relative">
                                    <input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full ps-11" type="text" id="text" name="text" placeholder="Name">
                                    <div class="absolute text-sky-600 inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full ps-11" type="email" id="email" name="email" placeholder="Email">
                                    <div class="absolute text-sky-600 inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full ps-11" type="password" id="pwd" name="pwd" placeholder="Password">
                                    <div class="absolute text-sky-600 inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
                                        <i class="fa-solid fa-lock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <button class="bg-sky-600 text-white font-medium text-sm rounded-full px-14 py-3">Kayıt Ol</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>