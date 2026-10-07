<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Pengajuan Anggaran - SIMAK</title>
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
        
        <!-- Navbar Publik -->
        <nav class="bg-white dark:bg-[#1F2937] border-b border-slate-200 dark:border-[#374151] px-6 py-4 flex justify-between items-center shadow-sm">
            <div class="flex items-center gap-3 cursor-pointer" onclick="window.location.href='{{ url('/login') }}'">
                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <span class="font-bold text-lg text-slate-900 dark:text-white">SIMAK Yayasan Insan Madani Mulia</span>
            </div>
            
            <div class="flex items-center gap-4">
                <a href="{{ url('/track_budget') }}" class="text-sm font-medium text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors hidden sm:block">
                    Cek Status Pengajuan
                </a>
                <!-- Tombol Toggle Tema -->
                <button id="theme-toggle" class="p-2 text-slate-500 dark:text-slate-400 bg-slate-100 dark:bg-slate-800 rounded-full hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors border border-transparent dark:border-[#374151]">
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>
            </div>
        </nav>

        <!-- Konten Utama -->
        <main class="flex-grow flex flex-col items-center justify-start py-10 px-4 sm:px-6">
            
            <div class="text-center mb-8 max-w-2xl">
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2">Form Pengajuan Anggaran</h1>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Silakan lengkapi formulir di bawah ini. Pastikan Anda mengunggah proposal/rincian biaya dalam format PDF.</p>
            </div>

            <!-- Card Form -->
            <div class="w-full max-w-3xl bg-white dark:bg-[#1F2937] p-6 sm:p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-none border border-slate-200 dark:border-[#374151] mb-12 relative overflow-hidden">
                
                <!-- Layar Sukses Dummy (Awalnya Tersembunyi) -->
                <div id="success-screen" class="hidden absolute inset-0 bg-white dark:bg-[#1F2937] z-10 flex flex-col items-center justify-center p-8 text-center">
                    <div class="w-16 h-16 bg-emerald-100 dark:bg-emerald-900/30 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Pengajuan Berhasil Dikirim!</h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6">Kode pengajuan Anda adalah <strong class="text-emerald-600 dark:text-emerald-400 text-lg">PGA-06-2026-0089</strong>. Simpan kode ini untuk melacak status pencairan.</p>
                    <div class="flex gap-4">
                        <button onclick="window.location.reload()" class="px-5 py-2.5 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 rounded-lg font-medium hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">Ajukan Lagi</button>
                        <button onclick="window.location.href='{{ url('/track_budget') }}'" class="px-5 py-2.5 bg-emerald-600 text-white rounded-lg font-medium hover:bg-emerald-700 transition-colors">Lacak Pengajuan</button>
                    </div>
                </div>

                <form id="dummy-form" class="space-y-6">
                    
                    <!-- Nama Pemohon (Satu Baris Penuh) -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nama Pemohon</label>
                        <input type="text" required placeholder="Nama lengkap" 
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors placeholder-slate-400">
                    </div>

                    <!-- Unit & Jabatan (Dibagi 2 Kolom) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Unit -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Unit</label>
                            <select required class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                                <option value="">Pilih Unit...</option>
                                <option value="KB">KB Insan Madani</option>
                                <option value="TK">TK Insan Madani</option>
                                <option value="SD">SD Insan Madani</option>
                                <option value="SMP">SMP Insan Madani</option>
                                <option value="Yayasan">Pengurus Yayasan</option>
                            </select>
                        </div>

                        <!-- Jabatan -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Jabatan</label>
                            <input type="text" required placeholder="Contoh: Guru PAI / Staf TU" 
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors placeholder-slate-400">
                        </div>
                    </div>

                    <!-- Tujuan Dana -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nama Kegiatan</label>
                        <input type="text" required placeholder="Nama kegiatan" 
                            class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors placeholder-slate-400">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nominal -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nominal (Rp)</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500 font-medium">Rp</span>
                                <input type="number" required placeholder="0" min="10000"
                                    class="w-full rounded-lg border border-slate-300 dark:border-slate-600 pl-12 pr-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                            </div>
                        </div>
                        
                        <!-- Tanggal Dibutuhkan -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Tanggal Dibutuhkan</label>
                            <input type="date" required 
                                class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors [color-scheme:light] dark:[color-scheme:dark]">
                        </div>
                    </div>

                    <!-- Upload Dokumen -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Upload Proposal / Rincian (PDF)</label>
                        <div class="mt-1 flex justify-center rounded-lg border border-dashed border-slate-300 dark:border-slate-600 px-6 py-8 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-slate-300 dark:text-slate-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-slate-600 dark:text-slate-400 justify-center">
                                    <label for="file-upload" class="relative cursor-pointer rounded-md font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-emerald-600 focus-within:ring-offset-2">
                                        <span>Pilih file PDF</span>
                                        <input id="file-upload" name="file-upload" type="file" accept=".pdf" class="sr-only">
                                    </label>
                                    <p class="pl-1">atau seret ke sini</p>
                                </div>
                                <p class="text-xs leading-5 text-slate-500 dark:text-slate-500">Maksimal 10MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-slate-200 dark:border-[#374151] pt-6 flex justify-end gap-3">
                        <button type="button" onclick="window.location.href='{{ url('/login') }}'" class="px-5 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors">Batal</button>
                        <button type="submit" id="btn-submit" class="px-5 py-2.5 text-sm font-medium bg-emerald-600 text-white hover:bg-emerald-700 rounded-lg transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            Kirim Pengajuan
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <script>
            // Logika Tema
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

            // Dummy Submit Form (Metode Spiral)
            const form = document.getElementById('dummy-form');
            const btnSubmit = document.getElementById('btn-submit');
            const successScreen = document.getElementById('success-screen');

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah reload halaman
                
                // Ubah tombol jadi loading
                const originalText = btnSubmit.innerHTML;
                btnSubmit.innerHTML = `<svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Memproses...`;
                btnSubmit.disabled = true;

                // Simulasi proses backend selama 1.5 detik
                setTimeout(() => {
                    successScreen.classList.remove('hidden');
                    btnSubmit.innerHTML = originalText;
                    btnSubmit.disabled = false;
                    form.reset();
                }, 1500);
            });
        </script>
    </body>
</html>