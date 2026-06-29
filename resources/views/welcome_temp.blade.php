<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kawaleaves Coffee</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Outfit for clean sans-serif (nav and hero), Playfair Display for logo, Caveat for the cursive red text -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,700;1,700&family=Caveat:wght@600&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback if not compiled -->
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    @endif

    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #FAF9F6;
        }
        .logo-font {
            font-family: 'Playfair Display', serif;
        }
        .cursive-font {
            font-family: 'Caveat', cursive;
        }
        /* Smooth scrolling */
        html { scroll-behavior: smooth; }
        
        /* The underline effect for the Book button */
        .book-link {
            position: relative;
            padding-bottom: 2px;
        }
        .book-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #e53e3e; /* Red underline like the screenshot */
        }
    </style>
</head>
<body class="antialiased text-gray-800">

    <!-- Navigation -->
    <nav class="absolute w-full z-50 top-0 text-gray-900 pt-8">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex-shrink-0 w-1/4">
                    <a href="/" class="flex items-center gap-3">
                        <!-- Nanti gambarnya taruh di folder public/ dengan nama logo.jpg -->
                        <img src="/logo.jpg" alt="Kawaleaves Logo" class="h-10 w-10 md:h-12 md:w-12 rounded-full object-cover shadow-sm border border-black/5" />
                        <span class="logo-font text-[1.5rem] md:text-[2rem] tracking-tight font-bold lowercase">kawaleaves</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex flex-grow justify-center w-2/4">
                    <div class="flex items-center space-x-14">
                        <a href="#menu" class="text-[15px] font-medium hover:text-gray-500 transition-colors">Menus</a>
                        <a href="#about" class="text-[15px] font-medium hover:text-gray-500 transition-colors">About & Careers</a>
                        <a href="#contact" class="text-[15px] font-medium hover:text-gray-500 transition-colors">Contact Us</a>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:flex justify-end w-1/4">
                    <a href="#book" class="book-link text-[15px] font-bold hover:text-gray-500 transition-colors">
                        Book a Table
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Split Layout) -->
    <section class="relative min-h-screen flex items-center bg-[#FAF9F6] pt-28 lg:pt-24 pb-12 overflow-hidden">
        <div class="max-w-[100rem] mx-auto px-6 lg:px-16 w-full flex flex-col lg:flex-row items-center gap-10 lg:gap-20">
            <!-- Bagian Kiri: Teks (Di HP tampil duluan) -->
            <div class="w-full lg:w-1/2 relative z-10 pt-8 lg:pt-0">
                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-[4.5rem] font-medium leading-[1.2] tracking-tight text-[#1b1b18] relative text-center lg:text-left">
                    <span class="block relative w-fit mx-auto lg:mx-0">
                        Taste
                        <!-- Tulisan latin -->
                        <span class="cursive-font text-[#ff5757] text-5xl md:text-[5rem] lg:text-[6rem] absolute left-[70%] lg:left-full top-1/2 -translate-y-[60%] ml-2 lg:ml-6 -rotate-[10deg] whitespace-nowrap z-20">
                            the finest
                        </span>
                    </span>
                    <span class="block mt-6 md:mt-12 lg:mt-10 lg:ml-[14rem]">
                        artisanal coffee & roastery.
                    </span>
                </h1>
                <p class="mt-6 lg:mt-8 text-gray-500 text-lg max-w-md text-center lg:text-left mx-auto lg:mx-0">
                    Experience the art of slow-drip and artisanal blends in a minimalist space designed for your comfort.
                </p>
                <div class="mt-8 lg:mt-10 text-center lg:text-left">
                    <a href="#full-menu" class="inline-block px-8 py-3 bg-gray-900 text-white font-medium hover:bg-[#ff5757] transition-colors rounded-full shadow-lg">
                        Explore Menu
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Gambar Portrait (Di HP ukurannya disesuaikan biar gak menuhin layar) -->
            <div class="w-full lg:w-1/2 relative h-[45vh] md:h-[60vh] lg:h-[80vh] rounded-3xl overflow-hidden shadow-2xl mt-4 lg:mt-0">
                <!-- Menggunakan gambar kopi memanjang ke bawah -->
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" alt="Aesthetic Coffee" class="w-full h-full object-cover" />
            </div>
        </div>
    </section>

    <!-- Signature Menu Section -->
    <section id="menu" class="py-32 bg-white">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <h2 class="logo-font text-5xl md:text-6xl text-gray-900 mb-4">Signature <span class="italic text-gray-400">Brews</span></h2>
                    <p class="text-gray-500 text-lg">Our most loved creations, crafted with precision.</p>
                </div>
                <a href="#full-menu" class="hidden md:inline-block border-b-2 border-gray-900 pb-1 font-medium hover:text-gray-500 hover:border-gray-500 transition-colors">View Full Menu</a>
            </div>

            <!-- Menu Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
            <!-- Item 1 -->
            <div class="group cursor-pointer">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <!-- Gambar bisa diganti foto asli nanti -->
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=1000&auto=format&fit=crop" alt="Coffee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-gray-900">Es Kopi Kawa</h3>
                    <span class="text-lg text-gray-500 font-medium">22k</span>
                </div>
                <p class="text-sm text-[#ff5757] font-medium mt-1 tracking-wide uppercase">Coffee Time</p>
                <p class="text-gray-500 mt-2">Our signature iced coffee blend perfectly crafted for a refreshing kick.</p>
            </div>

            <!-- Item 2 -->
            <div class="group cursor-pointer">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?q=80&w=1000&auto=format&fit=crop" alt="Latte" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-gray-900">Caramel</h3>
                    <span class="text-lg text-gray-500 font-medium">22k/20k</span>
                </div>
                <p class="text-sm text-[#ff5757] font-medium mt-1 tracking-wide uppercase">Flavour Latte</p>
                <p class="text-gray-500 mt-2">Smooth espresso blended with creamy milk and rich caramel.</p>
            </div>

            <!-- Item 3 -->
            <div class="group cursor-pointer">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=1000&auto=format&fit=crop" alt="Manual Brew" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-gray-900">Local Beans</h3>
                    <span class="text-lg text-gray-500 font-medium">22k/20k</span>
                </div>
                <p class="text-sm text-[#ff5757] font-medium mt-1 tracking-wide uppercase">Manual Brew</p>
                <p class="text-gray-500 mt-2">Carefully selected local beans, brewed manually to perfection.</p>
            </div>
        </div>

        <div class="mt-12 text-center md:hidden">
            <a href="#full-menu" class="inline-block border-b-2 border-gray-900 pb-1 font-medium hover:text-gray-500 hover:border-gray-500 transition-colors">View Full Menu</a>
        </div>
    </div>
</section>

    <!-- Full Menu Section -->
    <section id="full-menu" class="py-24 bg-[#FAF9F6]">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="text-center mb-16">
                <h2 class="logo-font text-4xl md:text-5xl text-gray-900 mb-4">Full <span class="italic text-[#ff5757]">Menu</span></h2>
                <p class="text-gray-500 text-lg">Explore our complete selection of beverages.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-20 max-w-7xl mx-auto">
                <!-- Kolom 1: Coffee -->
                <div class="space-y-16">
                    <!-- Coffee Time -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Coffee Time</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Es Kopi Kawa</span>
                                <span class="text-lg text-gray-500">22k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Creamy Kawa</span>
                                <span class="text-lg text-gray-500">22k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Americano</span>
                                <span class="text-lg text-gray-500">20k/18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Long Black</span>
                                <span class="text-lg text-gray-500">20k/18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Mazagran</span>
                                <span class="text-lg text-gray-500">22k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Espresso</span>
                                <span class="text-lg text-gray-500">15k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Cafe Latte</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Cappucino</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Magic</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Picocolo</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Flavour Latte -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Flavour Latte</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Caramel</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Hazelnut</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Vanila</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Pandan</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Manual Brew -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Manual Brew</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Local Beans</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Guest Beans</span>
                                <span class="text-lg text-gray-500">32k/30k</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 2: Non Coffee & Tea -->
                <div class="space-y-16">
                    <!-- Mocktail Session -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Mocktail Session</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Karambia</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Pandanales</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Holiday Berry</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Bloody Mery</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Tropical Iced Tea</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Nuansa</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Secret Garden</span>
                                <span class="text-lg text-gray-500">25k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Non Coffee -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Non Coffee</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Green Tea</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Red Velvet</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Chocolate</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Charcoal</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Surrenders</span>
                                <span class="text-lg text-gray-500">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tea Time -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Tea Time</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Lychee Tea</span>
                                <span class="text-lg text-gray-500">20k/18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Lemon Tea</span>
                                <span class="text-lg text-gray-500">20k/18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Peach Tea</span>
                                <span class="text-lg text-gray-500">20k/18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Black Tea</span>
                                <span class="text-lg text-gray-500">15k/13k</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 3: Food -->
                <div class="space-y-16">
                    <!-- Light Meal -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Light Meal</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Tofu Spicy</span>
                                <span class="text-lg text-gray-500">15k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Chicken Popcorn</span>
                                <span class="text-lg text-gray-500">18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">French Fries</span>
                                <span class="text-lg text-gray-500">15k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Cilok Crispy</span>
                                <span class="text-lg text-gray-500">15k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Churros</span>
                                <span class="text-lg text-gray-500">18k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Banana Nugget</span>
                                <span class="text-lg text-gray-500">17k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Rice Bowl -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Rice Bowl</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Chicken Karage</span>
                                <span class="text-lg text-gray-500">24k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Sambal Matah</span>
                                <span class="text-lg text-gray-500">24k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Sambal Geprek</span>
                                <span class="text-lg text-gray-500">24k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Blackpaper</span>
                                <span class="text-lg text-gray-500">24k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Plater -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Plater</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Kawa Plater</span>
                                <span class="text-lg text-gray-500">35k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Pastry -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-gray-900 uppercase mb-8 border-b-2 border-gray-200 pb-4">Pastry</h3>
                        <ul class="space-y-6">
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Chocolate</span>
                                <span class="text-lg text-gray-500">22.5k</span>
                            </li>
                            <li class="flex justify-between items-baseline">
                                <span class="text-lg font-medium text-gray-800">Plain</span>
                                <span class="text-lg text-gray-500">18k</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16 flex flex-col lg:flex-row items-center gap-16">
            <div class="w-full lg:w-1/2 relative">
                <div class="aspect-[4/5] md:aspect-video lg:aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl relative group">
                    <!-- Gradient overlay to hide pixelation and add mood -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1b1b18]/70 via-transparent to-transparent z-10 pointer-events-none"></div>
                    <!-- Nanti gambarnya taruh di folder public/ dengan nama about.png -->
                    <img src="/about.png" alt="Kawaleaves Ambience" class="w-full h-full object-cover contrast-125 brightness-90 group-hover:scale-105 transition-transform duration-700" />
                </div>

            </div>
            
            <div class="w-full lg:w-1/2">
                <h2 class="logo-font text-5xl md:text-6xl text-gray-900 mb-8">The <span class="italic text-gray-400">Story</span></h2>
                <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-6">
                    Mulai dari secangkir kopi, Kawaleaves Coffee hadir sebagai pelarian kecil di tengah hiruk pikuk kota. Kami percaya bahwa setiap seduhan menceritakan kisah yang berbeda.
                </p>
                <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-10">
                    Dengan komitmen terhadap biji kopi lokal terbaik dan suasana "Kawasan Menikmati Hidup", kami menciptakan ruang di mana kamu bisa bersantai, berkreasi, dan merayakan momen-momen sederhana.
                </p>
                <div class="grid grid-cols-2 gap-8 border-t border-gray-200 pt-10">
                    <div>
                        <h4 class="text-4xl font-light text-gray-900 mb-2">20+</h4>
                        <p class="text-gray-500 font-medium">Artisanal Drinks</p>
                    </div>
                    <div>
                        <h4 class="text-4xl font-light text-gray-900 mb-2">100%</h4>
                        <p class="text-gray-500 font-medium">Local Beans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book A Table Section -->
    <section id="book" class="py-24 bg-[#FAF9F6]">
        <div class="max-w-[70rem] mx-auto px-8 lg:px-16 text-center">
            <h2 class="logo-font text-5xl md:text-6xl text-gray-900 mb-4">Reserve Your <span class="italic text-gray-400">Spot</span></h2>
            <p class="text-gray-500 text-lg mb-12">Plan your visit and secure a table for your next coffee session.</p>
            
            <form class="bg-white p-8 md:p-12 rounded-3xl shadow-sm text-left grid grid-cols-1 md:grid-cols-2 gap-8 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#FAF9F6] rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-gray-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
                
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Name</label>
                    <input type="text" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-gray-900 transition-colors bg-transparent text-lg" placeholder="John Doe">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">WhatsApp Number</label>
                    <input type="text" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-gray-900 transition-colors bg-transparent text-lg" placeholder="+62 812...">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Date & Time</label>
                    <input type="datetime-local" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-gray-900 transition-colors bg-transparent text-lg text-gray-700">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Guests</label>
                    <select class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-gray-900 transition-colors bg-transparent text-lg text-gray-700">
                        <option>1 Person</option>
                        <option selected>2 People</option>
                        <option>3 People</option>
                        <option>4 People</option>
                        <option>5+ People (Group)</option>
                    </select>
                </div>
                <div class="md:col-span-2 mt-8 text-center relative z-10">
                    <button type="button" class="inline-block px-12 py-4 bg-gray-900 text-white font-medium hover:bg-[#ff5757] transition-colors rounded-full shadow-xl hover:-translate-y-1 transform duration-300">
                        Confirm Reservation
                    </button>
                    <p class="text-sm text-gray-400 mt-4">*Kami akan mengonfirmasi reservasi Anda melalui WhatsApp.</p>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-[#1b1b18] text-white pt-24 pb-12 rounded-t-[3rem] mt-12 mx-4 lg:mx-8 mb-4">
        <div class="max-w-[90rem] mx-auto px-8 lg:px-16 flex flex-col md:flex-row justify-between items-start md:items-center gap-12">
            <div class="w-full md:w-1/2">
                <div class="flex items-center gap-4 mb-4">
                    <!-- CSS Magic: Turn brown background transparent to keep white leaf on dark footer -->
                    <img src="/logo.jpg" alt="Kawaleaves Logo" style="filter: grayscale(1) contrast(100); mix-blend-mode: screen;" class="h-12 w-12 md:h-16 md:w-16 rounded-full object-cover" />
                    <h2 class="logo-font text-[2.5rem] md:text-[4rem] leading-none lowercase tracking-tight">kawaleaves</h2>
                </div>
                <p class="text-gray-400 text-lg max-w-sm">Kawasan Menikmati Hidup.</p>
            </div>
            
            <div class="w-full md:w-1/2 flex flex-col sm:flex-row justify-start md:justify-end gap-16">
                <div>
                    <h4 class="text-xl font-medium mb-6">Visit Us</h4>
                    <p class="text-gray-400 mb-4 max-w-[18rem] leading-relaxed">Jl. Sukarame, RT.30/RW.03, Sukarame, Kec. Sukarame, Kabupaten Tasikmalaya, Jawa Barat 46461</p>
                    <p class="text-gray-400">Operating Hours 08:00 - 22:00 WIB</p>
                </div>
                <div>
                    <h4 class="text-xl font-medium mb-6">Socials</h4>
                    <p><a href="https://instagram.com/kawaleaves.coffee" target="_blank" class="text-gray-400 hover:text-white transition-colors mb-2 block">Instagram</a></p>
                    <p><a href="#" class="text-gray-400 hover:text-white transition-colors mb-2 block">TikTok</a></p>
                    <p><a href="https://wa.me/6281234567890" target="_blank" class="text-gray-400 hover:text-white transition-colors block">WhatsApp</a></p>
                </div>
            </div>
        </div>
        <div class="max-w-[90rem] mx-auto px-8 lg:px-16 mt-24 pt-8 border-t border-gray-800 text-center md:text-left text-gray-500 text-sm flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Kawaleaves Coffee. All rights reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
