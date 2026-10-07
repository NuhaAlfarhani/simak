<div class="flex items-center justify-between w-full pb-6 mb-6 border-b border-slate-200">
    <!-- Judul Halaman Dinamis -->
    <h2 class="text-2xl font-semibold text-slate-800">
        @yield('page_title', 'Dashboard')
    </h2>
    
    <!-- Area Tombol Kanan Atas -->
    <div class="flex items-center gap-3">
        <!-- Tombol Toggle Light/Dark Mode -->
        <button id="theme-toggle" class="p-2 text-slate-400 hover:text-emerald-600 bg-white rounded-full shadow-sm transition-colors focus:outline-none" title="Ganti Tema">
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
        </button>

        <!-- Ikon Notifikasi -->
        <button class="p-2 text-slate-400 hover:text-emerald-600 bg-white rounded-full shadow-sm transition-colors" title="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        </button>
    </div>
</div>