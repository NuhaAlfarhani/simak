<aside class="flex flex-col w-72 h-screen px-4 py-8 bg-[#E8EFEA] dark:bg-[#1F2937] border-r border-[#D9E3DC] dark:border-[#374151]">
    <!-- Logo & Nama Aplikasi -->
    <div class="flex items-center gap-3 px-2 mb-8">
        <div class="w-10 h-10 bg-emerald-600 rounded-full flex-shrink-0"></div>
        <div onclick="window.location.href='{{ url('/') }}'" class="cursor-pointer">
            <h1 class="text-xl font-bold text-slate-900 dark:text-white leading-tight">SIMAK</h1>
            <p class="text-[10px] text-slate-600 dark:text-slate-400 leading-tight">Sistem Informasi Manajemen<br>Aset dan Keuangan</p>
        </div>
    </div>

    <!-- Profil Pegawai -->
    <div class="flex items-center gap-3 px-4 py-3 mb-6 bg-black/5 dark:bg-black/20 rounded-xl border border-black/5 dark:border-transparent">
        <img src="https://ui-avatars.com/api/?name=Nama+Kasir&background=random" alt="Profile" class="w-10 h-10 rounded-full object-cover shadow-sm">
        <div>
            <h2 class="text-sm font-semibold text-slate-900 dark:text-white">Nama Kasir</h2>
            <p class="text-xs text-slate-600 dark:text-slate-400">Administrator</p>
        </div>
    </div>

    <!-- Navigasi Menu -->
    <div class="flex flex-col flex-1 gap-1">
        
        <!-- Dashboard -->
        <a href="{{ url('/') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('/') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
            <span class="text-sm">Dashboard</span>
        </a>
        
        <!-- Tagihan -->
        <a href="{{ url('/invoices') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('invoices*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span class="text-sm">Tagihan</span>
        </a>

        <!-- Tunggakan -->
        <a href="{{ url('/arrears') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('arrears*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <span class="text-sm">Tunggakan</span>
        </a>

        <!-- Pembayaran -->
        <a href="{{ url('/payments') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('payments*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            <span class="text-sm">Pembayaran</span>
        </a>

        <!-- Aset -->
        <a href="{{ url('/assets') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('assets*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            <span class="text-sm">Aset</span>
        </a>

        <!-- Pengajuan Anggaran -->
        <a href="{{ url('/budget-requests') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('budget-requests*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            <span class="text-sm">Pengajuan Anggaran</span>
        </a>

        <!-- Pengaturan -->
        <a href="{{ url('/settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ request()->is('settings*') ? 'bg-emerald-50 dark:bg-emerald-500/15 text-emerald-700 dark:text-emerald-400 font-semibold' : 'text-slate-600 dark:text-slate-300 hover:text-emerald-700 dark:hover:text-emerald-400 hover:bg-black/5 dark:hover:bg-slate-800' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            <span class="text-sm">Pengaturan</span>
        </a>
    </div>

    <!-- Tombol Logout -->
    <a href="/login" class="flex items-center gap-3 px-4 py-3 mt-auto text-slate-600 dark:text-slate-300 hover:text-red-600 dark:hover:text-red-400 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
        <span class="text-sm font-medium">Logout</span>
    </a>
</aside>