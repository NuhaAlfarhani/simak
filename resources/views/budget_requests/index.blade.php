@extends('layouts.app')

@section('title', 'Pengajuan Anggaran')
@section('page_title', 'Manajemen Pengajuan Anggaran')

@section('content')
    <!-- Statistik Mini Pengajuan -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Total Pengajuan (Bulan Ini)</p>
                <p class="text-lg font-bold text-slate-900 dark:text-white">24</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600 dark:text-amber-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Menunggu Review</p>
                <p class="text-lg font-bold text-amber-600 dark:text-amber-400">7</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Siap Dicairkan</p>
                <p class="text-lg font-bold text-blue-600 dark:text-blue-400">3</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Telah Dicairkan</p>
                <p class="text-lg font-bold text-emerald-600 dark:text-emerald-400">12</p>
            </div>
        </div>
    </div>

    <!-- Card Tabel Pengajuan -->
    <div class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden">
        
        <!-- Header & Toolbar -->
        <div class="p-6 border-b border-slate-100 dark:border-[#374151] flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            
            <!-- Pencarian & Filter -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full lg:w-auto">
                <div class="relative w-full sm:w-56">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-900 dark:text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5 transition-colors" placeholder="Cari Kode atau Pemohon...">
                </div>
                
                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Status</option>
                    <option value="menunggu">Menunggu Review</option>
                    <option value="disetujui">Menunggu Pencairan</option>
                    <option value="dicairkan">Telah Dicairkan</option>
                    <option value="ditolak">Ditolak</option>
                </select>

                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Unit</option>
                    <option value="tk">TK</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="yayasan">Yayasan</option>
                </select>
            </div>
        </div>

        <!-- Tabel Data Pengajuan -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50/50 dark:bg-[#111827]/50">
                    <tr class="border-b border-slate-200 dark:border-[#374151]">
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Tanggal & Kode</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Pemohon</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Tujuan Penggunaan</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-right">Nominal</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-center">Status</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700 dark:text-slate-300">
                    
                    <!-- Data 1: Menunggu Review -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">08 Okt 2026</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">PGA-1026-0089</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Ust. Ilham</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Kepala Sekolah (SMP)</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Subsidi Kegiatan Pramuka</p>
                            <a href="#" class="text-xs text-blue-600 hover:underline flex items-center gap-1 mt-0.5">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path></svg>
                                Proposal_Pramuka.pdf
                            </a>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-slate-800 dark:text-slate-200">
                            Rp. 2.500.000
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 text-xs font-medium border border-amber-100 dark:border-amber-800">
                                Menunggu Review
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Tolak" class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 dark:hover:text-red-400 dark:hover:bg-red-900/30 rounded transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </button>
                                <button title="Setujui" class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 2: Siap Dicairkan (Bpk Ahmad dari contoh kita sebelumnya) -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">07 Okt 2026</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">PGA-1026-0082</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Bpk. Ahmad</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Guru PAI (SD)</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Pembelian ATK Kegiatan Belajar</p>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-slate-800 dark:text-slate-200">
                            Rp. 1.200.000
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-medium border border-blue-100 dark:border-blue-800">
                                Disetujui
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Proses Pencairan Dana" class="px-3 py-1.5 text-xs font-medium text-white bg-blue-600 hover:bg-blue-700 rounded transition-colors flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    Cairkan
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 3: Telah Dicairkan -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">05 Okt 2026</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">PGA-1026-0075</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Ibu Ratna</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Guru Kelas (TK)</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Alat Peraga Edukatif</p>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-slate-800 dark:text-slate-200">
                            Rp. 850.000
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-xs font-medium border border-emerald-100 dark:border-emerald-800">
                                Telah Dicairkan
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Lihat Detail & Bukti" class="p-1.5 text-slate-500 hover:text-slate-800 hover:bg-slate-200 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-700 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-slate-100 dark:border-[#374151] flex items-center justify-between text-sm text-slate-500 dark:text-slate-400">
            <p>Menampilkan 1-3 dari 24 pengajuan</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&laquo;</button>
                <button class="px-3 py-1 rounded bg-emerald-600 text-white">1</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">2</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&raquo;</button>
            </div>
        </div>
    </div>
@endsection