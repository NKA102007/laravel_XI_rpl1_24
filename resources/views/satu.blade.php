<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Satu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased">

    <!-- NAVBAR  -->
    <header class="border-b border-slate-800 bg-slate-900/50 backdrop-blur sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <div class="text-xl font-bold tracking-wider text-amber-400">
                TUGAS<span class="text-white">LARAVEL</span>
            </div>
            
            <!-- Navigasi  -->
            <nav class="flex space-x-3">
                <a href="/satu" class="bg-amber-500 text-slate-950 font-semibold px-4 py-2 rounded-lg text-sm transition shadow">
                    Halaman 1
                </a>
                <a href="/dua" class="bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold px-4 py-2 rounded-lg text-sm transition border border-slate-700">
                    Halaman 2
                </a>
            </nav>
        </div>
    </header>

    <section class="max-w-5xl mx-auto px-6 py-20 md:py-28 flex flex-col items-center text-center">
        <span class="bg-blue-500/10 text-blue-400 text-xs font-semibold px-3 py-1 rounded-full border border-blue-500/20 mb-6">
           tugas laravel pak radit
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight max-w-3xl leading-tight">
            Selamat Datang di <span class="text-amber-400">Halaman Pertama</span>
        </h1>
        <p class="mt-6 text-slate-400 text-base md:text-lg max-w-xl">
            ini adalah landing page  
        <div class="mt-8 flex gap-4">
            <a href="/dua" class="bg-amber-500 hover:bg-amber-600 text-slate-950 font-medium px-6 py-3 rounded-xl transition shadow-lg shadow-amber-500/20">
                Lihat Halaman 2 &rarr;
            </a>
        </div>
    </section>

    <!-- KARTU INFORMASI SINGKAT -->
    <section class="max-w-5xl mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl">
                <h3 class="text-lg font-semibold text-white mb-2">💻 Teknologi yang Digunakan</h3>
                <p class="text-sm text-slate-400">Dibangun di atas framework Laravel dengan styling utility-first dari Tailwind CSS agar desain cepat dan rapi.</p>
            </div>
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl">
                <h3 class="text-lg font-semibold text-white mb-2">🚀 Status Tugas</h3>
                <p class="text-sm text-slate-400">saya behasil menjalankan html dan tailwind css pada laravel</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="border-t border-slate-800 py-6 text-center text-xs text-slate-500">
        <p>&copy; 2026 - Tugas Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>