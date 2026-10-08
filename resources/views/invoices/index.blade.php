@extends('layouts.app')

@section('title', 'Daftar Tagihan')
@section('page_title', 'Daftar Tagihan & Tunggakan Siswa')

@section('content')
    <!-- Card Filter & Tabel -->
    <div class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden">
        
        <!-- Header & Toolbar -->
        <div class="p-6 border-b border-slate-100 dark:border-[#374151] flex flex-col md:flex-row md:items-center justify-between gap-4">
            
            <!-- Pencarian & Filter -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full md:w-auto">
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-900 dark:text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5 transition-colors" placeholder="Cari nama atau NIS...">
                </div>
                
                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Unit</option>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                </select>
            </div>

            <!-- Tombol Aksi Tambah -->
            <button class="flex items-center justify-center gap-2 px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Buat Tagihan Manual
            </button>
        </div>

        <!-- Tabel Data -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50/50 dark:bg-[#111827]/50">
                    <tr class="border-b border-slate-200 dark:border-[#374151]">
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Siswa</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Unit / Kelas</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-right">Total Tunggakan</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 center">Status</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700 dark:text-slate-300">
                    
                    <!-- Data 1: Menunggak Besar (Urutan Teratas) -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-900 dark:text-slate-100">Ahmad Budi Santoso</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">NIS: 2026001</p>
                        </td>
                        <td class="py-4 px-6">SD - Kelas 3A</td>
                        <td class="py-4 px-6 text-right font-bold text-red-600 dark:text-red-400">Rp. 1.250.000</td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-red-50 dark:bg-red-900/30 text-red-600 dark:text-red-400 text-xs font-medium border border-red-100 dark:border-red-800">Menunggak</span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <!-- Tombol WA -->
                                <button title="Kirim WA Pengingat" class="p-1.5 text-emerald-600 hover:text-white hover:bg-emerald-600 rounded transition-colors border border-emerald-600 dark:border-emerald-500 dark:text-emerald-400 dark:hover:text-white dark:hover:bg-emerald-600">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                                </button>
                                <!-- Tombol Detail (Mata) -->
                                <button title="Lihat Detail Tagihan" class="p-1.5 text-slate-500 hover:text-slate-800 hover:bg-slate-200 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-700 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <!-- Tombol Bayar -->
                                <a href="#" title="Proses Pembayaran" class="px-2.5 py-1.5 text-xs font-medium text-emerald-700 bg-emerald-100 hover:bg-emerald-200 dark:text-emerald-400 dark:bg-emerald-900/40 dark:hover:bg-emerald-800/60 rounded transition-colors">
                                    Bayar
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 2: Menunggak Sebagian -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-900 dark:text-slate-100">Siti Nurhaliza</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">NIS: 2026045</p>
                        </td>
                        <td class="py-4 px-6">SMP - Kelas 8B</td>
                        <td class="py-4 px-6 text-right font-bold text-amber-600 dark:text-amber-400">Rp. 350.000</td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 text-xs font-medium border border-amber-100 dark:border-amber-800">Menunggak</span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Kirim WA Pengingat" class="p-1.5 text-emerald-600 hover:text-white hover:bg-emerald-600 rounded transition-colors border border-emerald-600 dark:border-emerald-500 dark:text-emerald-400 dark:hover:text-white dark:hover:bg-emerald-600">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                                </button>
                                <button title="Lihat Detail Tagihan" class="p-1.5 text-slate-500 hover:text-slate-800 hover:bg-slate-200 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-700 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <a href="#" title="Proses Pembayaran" class="px-2.5 py-1.5 text-xs font-medium text-emerald-700 bg-emerald-100 hover:bg-emerald-200 dark:text-emerald-400 dark:bg-emerald-900/40 dark:hover:bg-emerald-800/60 rounded transition-colors">
                                    Bayar
                                </a>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 3: Lunas (Urutan Bawah) -->
                    <tr class="hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-900 dark:text-slate-100">Bima Arya</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">NIS: 2026112</p>
                        </td>
                        <td class="py-4 px-6">TK - Kelompok B</td>
                        <td class="py-4 px-6 text-right font-medium text-slate-500 dark:text-slate-400">Rp. 0</td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-700/50 text-slate-600 dark:text-slate-400 text-xs font-medium">Lunas</span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Lihat Detail Tagihan" class="p-1.5 text-slate-500 hover:text-slate-800 hover:bg-slate-200 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-700 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <!-- Tombol Bayar & WA disembunyikan karena sudah lunas -->
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-slate-100 dark:border-[#374151] flex items-center justify-between text-sm text-slate-500 dark:text-slate-400">
            <p>Menampilkan 1-3 dari 845 siswa</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&laquo;</button>
                <button class="px-3 py-1 rounded bg-emerald-600 text-white">1</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">2</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&raquo;</button>
            </div>
        </div>
    </div>
@endsection