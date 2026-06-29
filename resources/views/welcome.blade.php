<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kawaleaves Coffee</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Outfit for clean sans-serif, DM Serif Display for elegant logo/headings, Lora for premium subtitles, Caveat for cursive -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Caveat:wght@600&display=swap" rel="stylesheet">

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
            background-color: #F7F5F0;
        }
        .logo-font {
            font-family: 'DM Serif Display', serif;
        }
        .subtitle-font {
            font-family: 'Lora', serif;
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
            background-color: #B85C38; /* Warm Terracotta */
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease-out;
        }
        .book-link:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .arch-image {
            border-radius: 999px 999px 2rem 2rem;
        }
    </style>
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="antialiased text-gray-800 overflow-x-hidden w-full">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 bg-[#F7F5F0]/90 backdrop-blur-md border-b border-black/5 py-5 transition-all" data-aos="fade-down" data-aos-duration="1000">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex-shrink-0 w-1/4">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="relative overflow-hidden rounded-full h-10 w-10 md:h-12 md:w-12 shadow-sm border border-black/5">
                            <img src="/logo.jpg" alt="Kawaleaves Logo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        </div>
                        <span class="logo-font text-[1.5rem] md:text-[2rem] tracking-tight font-bold lowercase text-[#2C2520]">kawaleaves</span>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex flex-grow justify-center w-2/4">
                    <div class="flex items-center space-x-14">
                        <a href="#menu" class="text-[15px] font-medium text-[#2C2520] hover:text-[#B85C38] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#B85C38] hover:after:w-full after:transition-all after:duration-300">Menus</a>
                        <a href="#about" class="text-[15px] font-medium text-[#2C2520] hover:text-[#B85C38] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#B85C38] hover:after:w-full after:transition-all after:duration-300">About & Careers</a>
                        <a href="#contact" class="text-[15px] font-medium text-[#2C2520] hover:text-[#B85C38] transition-colors relative after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-0.5 after:bg-[#B85C38] hover:after:w-full after:transition-all after:duration-300">Contact Us</a>
                    </div>
                </div>

                <!-- CTA Button & Hamburger -->
                <div class="flex justify-end w-auto md:w-1/4 items-center gap-6">
                    <a href="#book" class="hidden md:inline-block book-link text-[15px] font-bold text-[#2C2520] hover:text-[#B85C38] transition-colors">
                        Book a Table
                    </a>
                    
                    <!-- Hamburger Button -->
                    <button id="hamburger-btn" class="md:hidden flex flex-col justify-center items-center w-8 h-8 z-[60] relative focus:outline-none">
                        <span class="bg-[#2C2520] block transition-all duration-300 ease-out h-[2px] w-6 rounded-sm -translate-y-1.5"></span>
                        <span class="bg-[#2C2520] block transition-all duration-300 ease-out h-[2px] w-6 rounded-sm my-0.5"></span>
                        <span class="bg-[#2C2520] block transition-all duration-300 ease-out h-[2px] w-6 rounded-sm translate-y-1.5"></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-[#F7F5F0]/95 backdrop-blur-xl z-50 flex flex-col justify-center items-center opacity-0 pointer-events-none transition-all duration-500 ease-in-out">
        <div class="flex flex-col items-center space-y-8 text-2xl font-medium text-[#2C2520]">
            <a href="#menu" class="mobile-link hover:text-[#B85C38] transition-colors">Menus</a>
            <a href="#about" class="mobile-link hover:text-[#B85C38] transition-colors">About & Careers</a>
            <a href="#contact" class="mobile-link hover:text-[#B85C38] transition-colors">Contact Us</a>
            <a href="#book" class="mobile-link mt-8 px-8 py-3 bg-[#2C2520] text-white rounded-full text-lg hover:bg-[#B85C38] transition-colors shadow-lg">Book a Table</a>
        </div>
    </div>

    <!-- Hero Section (Split Layout) -->
    <section class="relative min-h-screen flex items-center bg-[#F7F5F0] pt-32 pb-12 overflow-hidden">
        <div class="max-w-[100rem] mx-auto px-6 lg:px-16 w-full flex flex-col lg:flex-row items-center gap-10 lg:gap-20">
            <!-- Bagian Kiri: Teks -->
            <div class="w-full lg:w-1/2 relative z-10 pt-8 lg:pt-0" data-aos="fade-right" data-aos-duration="1200">
                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-[4rem] font-medium leading-[1.1] tracking-tight text-[#2C2520] relative text-center lg:text-left">
                    <span class="block relative w-fit mx-auto lg:mx-0 z-10 pb-6 lg:pb-0">
                        Taste
                        <!-- Tulisan latin -->
                        <span class="cursive-font text-[#B85C38] text-[3rem] md:text-[5.5rem] lg:text-[6rem] absolute left-[20%] md:left-[50%] lg:left-[90%] top-[110%] lg:top-1/2 -translate-y-[50%] ml-0 lg:ml-6 -rotate-[10deg] whitespace-nowrap z-20 opacity-90">
                            the finest
                        </span>
                    </span>
                    <span class="block mt-8 md:mt-12 lg:mt-10 lg:ml-[12rem] z-10 relative">
                        artisanal coffee<br>
                        <span class="logo-font italic text-gray-400">& roastery.</span>
                    </span>
                </h1>
                <p class="subtitle-font mt-8 lg:mt-10 text-gray-600 text-lg md:text-xl max-w-md text-center lg:text-left mx-auto lg:mx-0 leading-relaxed">
                    Experience the art of slow-drip and artisanal blends in a minimalist space designed for your comfort.
                </p>
                <div class="mt-10 lg:mt-12 text-center lg:text-left">
                    <a href="#full-menu" class="inline-block px-10 py-4 bg-[#2C2520] text-white font-medium hover:bg-[#B85C38] transition-colors duration-300 rounded-full shadow-xl hover:shadow-2xl hover:-translate-y-1 transform">
                        Explore Menu
                    </a>
                </div>
            </div>

            <!-- Bagian Kanan: Gambar Portrait Arch -->
            <div class="w-full lg:w-1/2 relative h-[50vh] md:h-[65vh] lg:h-[85vh] arch-image overflow-hidden shadow-2xl mt-8 lg:mt-0" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="200">
                <!-- Menggunakan gambar kopi memanjang ke bawah -->
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" alt="Aesthetic Coffee" class="w-full h-full object-cover hover:scale-105 transition-transform duration-[1.5s] ease-out" />
                
                <!-- Overlay Gradient for mood -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#2C2520]/40 to-transparent pointer-events-none"></div>
                
                <!-- Decorative Spinning Badge -->
                <div class="absolute bottom-10 -left-6 md:left-10 w-32 h-32 md:w-40 md:h-40 bg-white/10 backdrop-blur-md rounded-full border border-white/20 flex items-center justify-center animate-[spin_10s_linear_infinite] shadow-lg pointer-events-none hidden sm:flex">
                    <svg viewBox="0 0 100 100" class="w-full h-full opacity-80" fill="white">
                        <path d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" id="circleText" fill="none" />
                        <text class="text-[11px] font-bold tracking-[0.2em] uppercase">
                            <textPath href="#circleText">100% Local Beans • Premium Roastery • </textPath>
                        </text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Signature Menu Section -->
    <section id="menu" class="py-32 bg-white">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16" data-aos="fade-up">
                <div>
                    <h2 class="logo-font text-4xl md:text-5xl text-[#2C2520] mb-4">Signature <span class="italic text-gray-400">Brews</span></h2>
                    <p class="subtitle-font text-gray-500 text-lg">Our most loved creations, crafted with precision.</p>
                </div>
                <a href="#full-menu" class="hidden md:inline-block border-b-2 border-[#2C2520] pb-1 font-medium hover:text-gray-500 hover:border-gray-500 transition-colors">View Full Menu</a>
            </div>

            <!-- Menu Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
            <!-- Item 1 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <!-- Gambar bisa diganti foto asli nanti -->
                    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?q=80&w=1000&auto=format&fit=crop" alt="Coffee" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-[#2C2520]">Es Kopi Kawa</h3>
                    <span class="text-lg text-gray-500 font-medium">22k</span>
                </div>
                <p class="text-sm text-[#B85C38] font-medium mt-1 tracking-wide uppercase">Coffee Time</p>
                <p class="text-gray-500 mt-2">Our signature iced coffee blend perfectly crafted for a refreshing kick.</p>
            </div>

            <!-- Item 2 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?q=80&w=1000&auto=format&fit=crop" alt="Latte" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-[#2C2520]">Caramel</h3>
                    <span class="text-lg text-gray-500 font-medium">22k/20k</span>
                </div>
                <p class="text-sm text-[#B85C38] font-medium mt-1 tracking-wide uppercase">Flavour Latte</p>
                <p class="text-gray-500 mt-2">Smooth espresso blended with creamy milk and rich caramel.</p>
            </div>

            <!-- Item 3 -->
            <div class="group cursor-pointer" data-aos="fade-up" data-aos-delay="300">
                <div class="w-full h-[24rem] lg:h-[32rem] overflow-hidden rounded-3xl mb-6 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=1000&auto=format&fit=crop" alt="Manual Brew" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" />
                </div>
                <div class="flex justify-between items-center">
                    <h3 class="text-2xl font-medium text-[#2C2520]">Local Beans</h3>
                    <span class="text-lg text-gray-500 font-medium">22k/20k</span>
                </div>
                <p class="text-sm text-[#B85C38] font-medium mt-1 tracking-wide uppercase">Manual Brew</p>
                <p class="text-gray-500 mt-2">Carefully selected local beans, brewed manually to perfection.</p>
            </div>
        </div>

        <div class="mt-12 text-center md:hidden">
            <a href="#full-menu" class="inline-block border-b-2 border-[#2C2520] pb-1 font-medium hover:text-gray-500 hover:border-gray-500 transition-colors">View Full Menu</a>
        </div>
    </div>
</section>

    <!-- Full Menu Section -->
    <section id="full-menu" class="py-24 bg-[#F7F5F0]">
        <div class="max-w-[100rem] mx-auto px-8 lg:px-16">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="logo-font text-3xl md:text-4xl text-[#2C2520] mb-4">Full <span class="italic text-[#B85C38]">Menu</span></h2>
                <p class="subtitle-font text-gray-500 text-lg">Explore our complete selection of beverages.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-20 max-w-7xl mx-auto">
                <!-- Kolom 1: Coffee -->
                <div class="space-y-16" data-aos="fade-up" data-aos-delay="100">
                    <!-- Coffee Time -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Coffee Time</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Es Kopi Kawa</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Creamy Kawa</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Americano</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">20k/18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Long Black</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">20k/18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Mazagran</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Espresso</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">15k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Cafe Latte</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Cappucino</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Magic</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Picocolo</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Flavour Latte -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Flavour Latte</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Caramel</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Hazelnut</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Vanila</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Pandan</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Manual Brew -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Manual Brew</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Local Beans</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Guest Beans</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">32k/30k</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 2: Non Coffee & Tea -->
                <div class="space-y-16" data-aos="fade-up" data-aos-delay="200">
                    <!-- Mocktail Session -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Mocktail Session</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Karambia</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Pandanales</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Holiday Berry</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Bloody Mery</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Tropical Iced Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Nuansa</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Secret Garden</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">25k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Non Coffee -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Non Coffee</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Green Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Red Velvet</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Chocolate</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Charcoal</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Surrenders</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22k/20k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Tea Time -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Tea Time</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Lychee Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">20k/18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Lemon Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">20k/18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Peach Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">20k/18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Black Tea</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">15k/13k</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 3: Food -->
                <div class="space-y-16" data-aos="fade-up" data-aos-delay="300">
                    <!-- Light Meal -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Light Meal</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Tofu Spicy</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">15k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Chicken Popcorn</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">French Fries</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">15k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Cilok Crispy</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">15k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Churros</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">18k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Banana Nugget</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">17k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Rice Bowl -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Rice Bowl</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Chicken Karage</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">24k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Sambal Matah</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">24k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Sambal Geprek</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">24k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Blackpaper</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">24k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Plater -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Plater</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Kawa Plater</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">35k</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Pastry -->
                    <div>
                        <h3 class="text-xl font-bold tracking-widest text-[#2C2520] uppercase mb-8 border-b-2 border-gray-200 pb-4">Pastry</h3>
                        <ul class="space-y-6">
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Chocolate</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">22.5k</span>
                            </li>
                            <li class="flex items-baseline w-full group">
                                <span class="text-lg font-medium text-gray-800">Plain</span>
                                <span class="flex-grow border-b-2 border-dotted border-[#2C2520]/20 mx-4 relative -top-1.5 group-hover:border-[#B85C38]/50 transition-colors duration-300"></span><span class="text-lg text-[#2C2520]/70 font-medium">18k</span>
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
            <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                <div class="aspect-[4/5] md:aspect-video lg:aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl relative group">
                    <!-- Gradient overlay to hide pixelation and add mood -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#2C2520]/70 via-transparent to-transparent z-10 pointer-events-none"></div>
                    <!-- Nanti gambarnya taruh di folder public/ dengan nama about.png -->
                    <img src="/about.png" alt="Kawaleaves Ambience" class="w-full h-full object-cover contrast-125 brightness-90 group-hover:scale-105 transition-transform duration-700" />
                </div>

            </div>
            
            <div class="w-full lg:w-1/2" data-aos="fade-left">
                <h2 class="logo-font text-4xl md:text-5xl text-[#2C2520] mb-8">The <span class="italic text-gray-400">Story</span></h2>
                <p class="subtitle-font text-gray-600 text-lg md:text-xl leading-relaxed mb-6">
                    Mulai dari secangkir kopi, Kawaleaves Coffee hadir sebagai pelarian kecil di tengah hiruk pikuk kota. Kami percaya bahwa setiap seduhan menceritakan kisah yang berbeda.
                </p>
                <p class="subtitle-font text-gray-600 text-lg md:text-xl leading-relaxed mb-10">
                    Dengan komitmen terhadap biji kopi lokal terbaik dan suasana "Kawasan Menikmati Hidup", kami menciptakan ruang di mana kamu bisa bersantai, berkreasi, dan merayakan momen-momen sederhana.
                </p>
                <div class="grid grid-cols-2 gap-8 border-t border-gray-200 pt-10">
                    <div>
                        <h4 class="text-4xl font-light text-[#2C2520] mb-2">20+</h4>
                        <p class="text-gray-500 font-medium">Artisanal Drinks</p>
                    </div>
                    <div>
                        <h4 class="text-4xl font-light text-[#2C2520] mb-2">100%</h4>
                        <p class="text-gray-500 font-medium">Local Beans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book A Table Section -->
    <section id="book" class="pt-24 pb-12 bg-[#F7F5F0]">
        <div class="max-w-[70rem] mx-auto px-8 lg:px-16 text-center">
            <h2 class="logo-font text-4xl md:text-5xl text-[#2C2520] mb-4" data-aos="fade-up">Reserve Your <span class="italic text-gray-400">Spot</span></h2>
            <p class="subtitle-font text-gray-500 text-lg mb-12" data-aos="fade-up" data-aos-delay="100">Plan your visit and secure a table for your next coffee session.</p>
            
            <form class="bg-white p-8 md:p-12 rounded-3xl shadow-sm text-left grid grid-cols-1 md:grid-cols-2 gap-8 relative overflow-hidden" data-aos="zoom-in" data-aos-delay="200">
                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#F7F5F0] rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-gray-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50"></div>
                
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Name</label>
                    <input type="text" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-[#2C2520] transition-colors bg-transparent text-lg" placeholder="John Doe">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">WhatsApp Number</label>
                    <input type="text" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-[#2C2520] transition-colors bg-transparent text-lg" placeholder="+62 812...">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Date & Time</label>
                    <input type="datetime-local" class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-[#2C2520] transition-colors bg-transparent text-lg text-gray-700">
                </div>
                <div class="relative z-10">
                    <label class="block text-sm font-medium text-gray-500 mb-2 uppercase tracking-wider">Guests</label>
                    <select class="w-full border-b-2 border-gray-100 py-3 focus:outline-none focus:border-[#2C2520] transition-colors bg-transparent text-lg text-gray-700">
                        <option>1 Person</option>
                        <option selected>2 People</option>
                        <option>3 People</option>
                        <option>4 People</option>
                        <option>5+ People (Group)</option>
                    </select>
                </div>
                <div class="md:col-span-2 mt-8 text-center relative z-10">
                    <button type="button" class="inline-block px-12 py-4 bg-[#2C2520] text-white font-medium hover:bg-[#B85C38] transition-colors rounded-full shadow-xl hover:-translate-y-1 transform duration-300">
                        Confirm Reservation
                    </button>
                    <p class="text-sm text-gray-400 mt-4">*Kami akan mengonfirmasi reservasi Anda melalui WhatsApp.</p>
                </div>
            </form>
        </div>
    </section>

    <footer id="contact" class="bg-[#2C2520] text-white pt-16 pb-12 rounded-t-[3rem] mt-0 mx-4 lg:mx-8 mb-4">
        <div class="max-w-[90rem] mx-auto px-8 lg:px-16 flex flex-col md:flex-row justify-between items-start md:items-center gap-12">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <div class="flex items-center gap-4 mb-4">
                    <!-- Logo Footer -->
                    <img src="/logo.jpg" alt="Kawaleaves Logo" class="h-12 w-12 md:h-16 md:w-16 rounded-full object-cover" />
                    <h2 class="logo-font text-[2rem] md:text-[3rem] leading-none lowercase tracking-tight">kawaleaves</h2>
                </div>
                <p class="subtitle-font text-gray-400 text-lg max-w-sm">Kawasan Menikmati Hidup.</p>
            </div>
            
            <div class="w-full md:w-1/2 flex flex-col sm:flex-row justify-start md:justify-end gap-16" data-aos="fade-left">
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
        <div class="max-w-[90rem] mx-auto px-8 lg:px-16 mt-12 pt-8 border-t border-gray-800 text-center md:text-left text-gray-500 text-sm flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Kawaleaves Coffee. All rights reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });

        // Mobile Menu Toggle Logic
        const btn = document.getElementById('hamburger-btn');
        const menu = document.getElementById('mobile-menu');
        const links = document.querySelectorAll('.mobile-link');
        let isOpen = false;

        function toggleMenu() {
            isOpen = !isOpen;
            if (isOpen) {
                // Open Menu
                menu.classList.remove('opacity-0', 'pointer-events-none');
                menu.classList.add('opacity-100', 'pointer-events-auto');
                
                // Animate Hamburger into X
                btn.children[0].classList.replace('-translate-y-1.5', 'translate-y-1');
                btn.children[0].classList.add('rotate-45');
                btn.children[1].classList.add('opacity-0');
                btn.children[2].classList.replace('translate-y-1.5', '-translate-y-1');
                btn.children[2].classList.add('-rotate-45');
            } else {
                // Close Menu
                menu.classList.add('opacity-0', 'pointer-events-none');
                menu.classList.remove('opacity-100', 'pointer-events-auto');
                
                // Animate X back to Hamburger
                btn.children[0].classList.remove('rotate-45', 'translate-y-1');
                btn.children[0].classList.add('-translate-y-1.5');
                btn.children[1].classList.remove('opacity-0');
                btn.children[2].classList.remove('-rotate-45', '-translate-y-1');
                btn.children[2].classList.add('translate-y-1.5');
            }
        }

        btn.addEventListener('click', toggleMenu);
        
        // Close menu when clicking a link
        links.forEach(link => {
            link.addEventListener('click', () => {
                if(isOpen) toggleMenu();
            });
        });
    </script>
</body>
</html>
