<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - SIMAK</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
            }
            
            // Logika sederhana untuk cek tema
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
            body { font-family: 'Inter', sans-serif; }
        </style>
    </head>
    <body class="bg-[#F8FAFC] dark:bg-[#111827] text-slate-800 dark:text-slate-200 antialiased min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 transition-colors duration-200">

        <div class="sm:mx-auto sm:w-full sm:max-w-md flex flex-col items-center">
            <!-- Logo -->
            <div class="w-16 h-16 bg-emerald-600 rounded-full shadow-lg mb-4 flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h2 class="text-center text-3xl font-bold tracking-tight text-slate-900 dark:text-white">
                SIMAK
            </h2>
            <p class="mt-2 text-center text-sm text-slate-600 dark:text-slate-400">
                Sistem Informasi Manajemen Aset dan Keuangan<br>Yayasan Insan Madani Mulia
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Perbaikan Border & Shadow Card di sini -->
            <div class="bg-white dark:bg-[#1F2937] py-8 px-4 sm:rounded-2xl sm:px-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-200 dark:border-[#374151]">
                
                <form class="space-y-6" action="#" method="POST">
                    
                    <!-- Input Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300">
                            Alamat Email
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="block w-full appearance-none rounded-lg border border-slate-300 dark:border-slate-600 px-3 py-2 placeholder-slate-400 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500 sm:text-sm bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors"
                                placeholder="admin@yayasan.com">
                        </div>
                    </div>

                    <!-- Input Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-300">
                            Kata Sandi
                        </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required 
                                class="block w-full appearance-none rounded-lg border border-slate-300 dark:border-slate-600 px-3 py-2 placeholder-slate-400 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-emerald-500 sm:text-sm bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Ingat Saya & Lupa Sandi -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" 
                                class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500 dark:border-slate-600 dark:bg-slate-800">
                            <label for="remember-me" class="ml-2 block text-sm text-slate-700 dark:text-slate-300">
                                Ingat saya
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500 dark:text-emerald-400 dark:hover:text-emerald-300 transition-colors">
                                Lupa sandi?
                            </a>
                        </div>
                    </div>

                    <!-- Tombol Masuk -->
                    <div>
                        <button type="button" onclick="window.location.href='{{ url('/') }}'" 
                            class="flex w-full justify-center rounded-lg border border-transparent bg-emerald-600 py-2.5 px-4 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors">
                            Masuk
                        </button>
                    </div>
                </form>
                
            </div>
            
            <!-- Area Tautan Publik & Ganti Tema -->
            <div class="mt-8 flex flex-col items-center gap-6">
                
                <!-- Tautan Publik untuk Guru/Staf -->
                <div class="flex items-center gap-4 text-sm font-medium">
                    <a href="{{ url('/form_budget') }}" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        Form Pengajuan
                    </a>
                    <span class="text-slate-300 dark:text-slate-600">•</span>
                    <a href="{{ url('/track_budget') }}" class="text-slate-500 dark:text-slate-400 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors flex items-center gap-1.5">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        Cek Pengajuan
                    </a>
                </div>

                <!-- Tombol Ganti Tema -->
                <button id="theme-toggle-login" class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-slate-500 dark:text-slate-400 bg-white dark:bg-[#1F2937] border border-slate-200 dark:border-[#374151] rounded-full hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors focus:outline-none shadow-sm">
                    <!-- Ikon Matahari (Muncul saat Dark Mode) -->
                    <svg id="theme-toggle-light-icon-login" class="hidden w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <!-- Ikon Bulan (Muncul saat Light Mode) -->
                    <svg id="theme-toggle-dark-icon-login" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <span id="theme-text">Ganti Tema</span>
                </button>
            </div>
        </div>
        
        <!-- Script Logika Toggle Tema untuk Halaman Login -->
        <script>
            const themeToggleBtn = document.getElementById('theme-toggle-login');
            const darkIcon = document.getElementById('theme-toggle-dark-icon-login');
            const lightIcon = document.getElementById('theme-toggle-light-icon-login');
            const themeText = document.getElementById('theme-text');

            // Setup awal ikon saat halaman dimuat
            if (document.documentElement.classList.contains('dark')) {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
                themeText.textContent = "Mode Terang";
            } else {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
                themeText.textContent = "Mode Gelap";
            }

            // Fungsi klik tombol
            themeToggleBtn.addEventListener('click', function() {
                darkIcon.classList.toggle('hidden');
                lightIcon.classList.toggle('hidden');

                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    themeText.textContent = "Mode Gelap";
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    themeText.textContent = "Mode Terang";
                }
            });
        </script>
    </body>
</html>