<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lacak Pengajuan Anggaran - SIMAK</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = { darkMode: 'class' }
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
    <body class="bg-[#F8FAFC] dark:bg-[#111827] text-slate-800 dark:text-slate-200 antialiased min-h-screen flex flex-col transition-colors duration-200">
        
        <!-- Navbar Sederhana untuk Publik -->
        <nav class="bg-white dark:bg-[#1F2937] border-b border-slate-200 dark:border-[#374151] px-6 py-4 flex justify-between items-center shadow-sm">
            <div class="flex items-center gap-3 cursor-pointer" onclick="window.location.href='{{ url('/login') }}'">
                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="font-bold text-lg text-slate-900 dark:text-white">SIMAK Yayasan Insan Madani Mulia</span>
            </div>
            
            <!-- Tombol Toggle Tema -->
            <button id="theme-toggle" class="p-2 text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 rounded-full hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors border border-transparent dark:border-[#374151]">
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
            </button>
        </nav>

        <!-- Konten Utama -->
        <main class="flex-grow flex flex-col items-center justify-start pt-16 px-4">
            
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Lacak Pengajuan Anggaran</h1>
                <p class="text-slate-600 dark:text-slate-400">Masukkan kode pengajuan (misal: PGA-06-2026-0001) untuk melihat status pencairan.</p>
            </div>

            <!-- Form Pencarian -->
            <div class="w-full max-w-2xl bg-white dark:bg-[#1F2937] p-4 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-200 dark:border-[#374151] flex flex-col sm:flex-row gap-3 mb-8">
                <input type="text" id="kode-pengajuan" placeholder="Contoh: PGA-06-2026-0001" 
                    class="flex-grow appearance-none rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-3 placeholder-slate-400 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                <button id="btn-cari" class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    Cari
                </button>
            </div>

            <!-- Hasil Pencarian (Awalnya disembunyikan dengan class 'hidden') -->
            <div id="hasil-pencarian" class="hidden w-full max-w-2xl bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-200 dark:border-[#374151]">
                <div class="flex justify-between items-start mb-6 pb-4 border-b border-slate-100 dark:border-[#374151]">
                    <div>
                        <h3 class="text-sm text-slate-500 dark:text-slate-400 mb-1">Kode Pengajuan Ditemukan</h3>
                        <p class="text-xl font-bold text-slate-900 dark:text-white tracking-wide" id="result-kode">PGA-06-2026-0001</p>
                    </div>
                    <div class="text-right">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 text-sm font-medium border border-amber-100 dark:border-amber-800">
                            Menunggu Pencairan
                        </span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Keterangan / Tujuan Dana</p>
                        <p class="font-medium text-slate-800 dark:text-slate-200">Pembelian ATK Kegiatan Belajar</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Tanggal Diajukan</p>
                        <p class="font-medium text-slate-800 dark:text-slate-200">19-06-2026</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Nama Pemohon</p>
                        <p class="font-medium text-slate-800 dark:text-slate-200">Bpk. Ahmad (Guru PAI)</p>
                    </div>
                    <div>
                        <p class="text-sm text-slate-500 dark:text-slate-400 mb-1">Nominal Disetujui</p>
                        <p class="font-bold text-emerald-600 dark:text-emerald-400 text-xl">Rp. 1.200.000</p>
                    </div>
                </div>
                
                <div class="mt-6 pt-4 border-t border-slate-100 dark:border-[#374151]">
                    <p class="text-xs text-slate-500 dark:text-slate-400 text-center">
                        Harap bawa kuitansi atau bukti pembayaran asli ke ruang TU setelah dana digunakan.
                    </p>
                </div>
            </div>
        </main>

        <!-- Script Simulasi Pencarian & Tema -->
        <script>
            // Logika Toggle Tema
            const themeToggleBtn = document.getElementById('theme-toggle');
            const darkIcon = document.getElementById('theme-toggle-dark-icon');
            const lightIcon = document.getElementById('theme-toggle-light-icon');

            if (document.documentElement.classList.contains('dark')) {
                lightIcon.classList.remove('hidden');
            } else {
                darkIcon.classList.remove('hidden');
            }

            themeToggleBtn.addEventListener('click', function() {
                darkIcon.classList.toggle('hidden');
                lightIcon.classList.toggle('hidden');
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            });

            // Logika Simulasi Tombol Cari (Spiral Prototype)
            const btnCari = document.getElementById('btn-cari');
            const inputKode = document.getElementById('kode-pengajuan');
            const hasilDiv = document.getElementById('hasil-pencarian');
            const resultKode = document.getElementById('result-kode');

            btnCari.addEventListener('click', function() {
                if (inputKode.value.trim() !== '') {
                    // Menampilkan kode yang diketik ke dalam card hasil
                    resultKode.innerText = inputKode.value.toUpperCase();
                    // Memunculkan kotak hasil
                    hasilDiv.classList.remove('hidden');
                } else {
                    // Memicu peringatan jika kolom kosong
                    inputKode.focus();
                    inputKode.classList.add('ring-2', 'ring-red-500', 'border-red-500');
                    setTimeout(() => {
                        inputKode.classList.remove('ring-2', 'ring-red-500', 'border-red-500');
                    }, 1000);
                }
            });
        </script>
    </body>
</html>