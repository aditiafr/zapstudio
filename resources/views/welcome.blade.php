<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zap Studio</title>

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/icon/site.webmanifest">
    <link rel="mask-icon" href="/assets/images/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="path/css/font-awesome.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    @include('components.navbar')

    <section class="relative" id="home">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/assets/images/background.jpg');"></div>
        <div class="max-w-screen-xl pt-40 md:pt-48 pb-20 flex flex-wrap items-center justify-around mx-auto relative z-10">
            <div class="content mb-10 md:mb-0">
                <h2 class="text-5xl text-center md:text-left font-bold leading-tight">
                    Abadikan <br>
                    Moment <br>
                    Bersama di <br>
                    <span class="text-blue-500"> Zap Studio </span>
                </h2>
                <div class="flex flex-col md:flex-row items-center md:items-start mt-6 gap-4">
                    <a href="{{url('userbooking')}}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white py-3 px-6 rounded-3xl font-semibold transition-transform duration-300 ease-in-out transform hover:scale-105 w-auto">
                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                            Booking Now
                        </button>
                    </a>
                    <a href="https://wa.me/6289502244317">
                        <button class="bg-[#25d366] hover:bg-[#25d300] text-white py-3 px-6 rounded-3xl font-semibold transition-transform duration-300 ease-in-out transform hover:scale-105 w-auto">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            Contact Admin
                        </button>
                    </a>
                </div>
            </div>
            <div class="content">
                <img src="/assets/images/content-1.jpg" alt="Content 1" class="w-[300px] rounded-2xl shadow-2xl transition-transform duration-300 ease-in-out transform hover:scale-105">
            </div>
        </div>
    </section>

    <section id="about" class="bg-gray-100 h-full px-6">
        <div class="max-w-screen-xl py-24 flex flex-col items-center justify-around mx-auto">
            <h1 class="text-4xl font-bold mb-4">About Us</h1>
            <div class="border-b-4 border-gray-400 w-24"></div>

            <div class="flex flex-col md:flex-row gap-8 w-full justify-center items-center mt-8">

                <div class="content">
                    <img src="/assets/images/content-2.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
                <div class="grid md:grid-cols-2 gap-8 h-full justify-center">
                    <div class="flex flex-col gap-3 bg-white p-4 rounded-xl shadow-lg text-center">
                        <!-- <div class="flex gap-2 mb-2 text-blue-700">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div> -->
                        <h2 class="text-xl font-bold text-blue-700">Kreasi Tanpa Batas</h2>
                        <p class="leading-relaxed">Kamu memiliki kendali penuh atas semua aspek fotografi, termasuk pencahayaan, latar belakang, sudut pengambilan gambar, dan pengeditan.</p>
                    </div>
                    <div class="flex flex-col gap-3 bg-white p-4 rounded-xl shadow-lg text-center">
                        <h2 class="text-xl font-bold text-blue-700">Harga Terjangkau</h2>
                        <p class="leading-relaxed">Nikmati kualitas foto yang sama seperti studio foto profesional, tanpa perlu membayar biaya yang mahal.</p>
                    </div>
                    <div class="flex flex-col gap-3 bg-white p-4 rounded-xl shadow-lg text-center">
                        <h2 class="text-xl font-bold text-blue-700">Privasi</h2>
                        <p class="leading-relaxed">Privasi memberikan Kamu lingkungan yang tenang dan intim untuk mengambil foto yang lebih personal atau pribadi, tanpa gangguan dari orang lain.</p>
                    </div>
                    <div class="flex flex-col gap-3 bg-white p-4 rounded-xl shadow-lg text-center">
                        <h2 class="text-xl font-bold text-blue-700">Banyak Properti</h2>
                        <p class="leading-relaxed">Kami menawarkan berbagai latar belakang dan properti foto yang dapat digunakan oleh pelanggan untuk menciptakan tampilan yang berbeda-beda.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="services" class="bg-white h-full px-6">
        <div class="max-w-screen-xl py-24 flex flex-col items-center justify-around mx-auto">
            <h1 class="text-4xl font-bold mb-4">Services</h1>
            <div class="border-b-4 w-24"></div>

            <p class="text-center md:w-3/4 md:text-xl leading-relaxed my-10">Ciptakan kenangan indah tanpa menyewa fotografer dengan layanan Self-Studio Foto. Dapatkan hasil foto terbaik dengan berbagai properti kreatif yang kami sediakan dan tersedia paket sebagai berikut.</p>
            <div class="grid grid-cols-2 md:grid-cols-3 items-center gap-4 mb-12">
                <div class="content">
                    <img src="/assets/images/pakets/friendly-package.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
                <div class="content">
                    <img src="/assets/images/pakets/package.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
                <div class="content">
                    <img src="/assets/images/pakets/kind-package.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
                <div class="content">
                    <img src="/assets/images/pakets/family-package.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
                <div class="content">
                    <img src="/assets/images/pakets/add-package.jpg" alt="Content 1" class="w-full rounded shadow-lg transition-transform duration-300 ease-in-out transform hover:scale-105">
                </div>
            </div>
            <a href="{{url('userbooking')}}">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-3 px-6 rounded-3xl font-semibold transition-transform duration-300 ease-in-out transform hover:scale-105 w-auto">
                    <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
                    Booking Now
                </button>
            </a>
        </div>
    </section>

    <section id="contact" class="bg-gray-50 h-full px-6">
        <div class="max-w-screen-xl py-24 flex flex-col items-center justify-around mx-auto">
            <h1 class="text-4xl font-bold mb-4">Contact</h1>
            <div class="border-b-4 w-24"></div>

            <div class="flex flex-col md:flex-row gap-8 w-full mt-8">
                <div class="bg-white flex flex-col justify-around px-6 py-8 w-full rounded-xl shadow-md">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-2xl font-bold text-blue-700">Kritik & Saran</h2>
                        <div class="border-b-4 w-full"></div>
                    </div>
                    <form class="flex flex-col gap-6">
                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name..." required />
                        </div>

                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Message..."></textarea>
                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>

                <div class="w-full bg-white shadow-lg p-6 rounded-lg">
                    <div class="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.647737775927!2d106.82750887572654!3d-6.439264846314795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb22922efc8d%3A0xe0ddab6d9d34b6a4!2sZAP%20self%20photo%20studio!5e0!3m2!1sid!2sid!4v1719029120825!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-96"></iframe>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-lg mt-4 font-semibold">
                            Alamat : Jl. Mandor Samin No.129, Kalibaru, Kec. Cilodong, Kota Depok, Jawa Barat 16473
                        </p>
                        <p class="text-lg font-semibold flex items-center gap-2">
                            <i class="fa fa-whatsapp text-2xl" aria-hidden="true"></i>
                            0895-0224-4317
                        </p>
                        <p class="text-lg font-semibold flex items-center gap-2">
                            <i class="fa fa-instagram text-2xl" aria-hidden="true"></i>
                            @zapselfphoto
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        // Smooth scrolling and active section highlighting
        document.querySelectorAll('a.nav-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('nav .flex-col li a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollY >= sectionTop - 60) {
                    current = section.getAttribute('id');
                }
            });

            navLi.forEach(li => {
                li.classList.remove('bg-blue-700', 'text-white', 'rounded', 'md:bg-transparent', 'md:text-blue-700');
                li.classList.add('text-gray-900', 'hover:bg-gray-100', 'md:hover:bg-transparent', 'md:hover:text-blue-700', 'md:p-0', 'dark:hover:text-blue-500', 'dark:text-white', 'dark:hover:bg-gray-700', 'dark:hover:text-white', 'md:dark:hover:bg-transparent', 'dark:border-gray-700');
                if (li.getAttribute('href').substring(1) === current) {
                    li.classList.add('bg-blue-700', 'text-white', 'rounded', 'md:bg-transparent', 'md:text-blue-700');
                }
            });
        });
    </script>

</body>

</html>