<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dua</title>
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
                <a href="/satu" class="bg-slate-800 hover:bg-slate-700 text-slate-200 font-semibold px-4 py-2 rounded-lg text-sm transition border border-slate-700" >
                    Halaman 1
                </a>
                <a href="/dua" class="bg-amber-500 text-slate-950 font-semibold px-4 py-2 rounded-lg text-sm transition shadow">
                    Halaman 2
                </a>
            </nav>
        </div>
    </header>

    
    

</body>
</html>
