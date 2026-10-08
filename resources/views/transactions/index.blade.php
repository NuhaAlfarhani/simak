@extends('layouts.app')

@section('title', 'Riwayat Transaksi')
@section('page_title', 'Buku Kas & Riwayat Transaksi')

@section('content')
    <!-- Statistik Mini Khusus Halaman Transaksi -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Pemasukan -->
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Pemasukan Hari Ini</p>
                <p class="text-xl font-bold text-emerald-600 dark:text-emerald-400">Rp. 4.500.000</p>
            </div>
        </div>
        <!-- Pengeluaran -->
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-600 dark:text-red-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Pengeluaran Hari Ini</p>
                <p class="text-xl font-bold text-red-500 dark:text-red-400">Rp. 1.200.000</p>
            </div>
        </div>
        <!-- Saldo -->
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Saldo Bersih Hari Ini</p>
                <p class="text-xl font-bold text-slate-900 dark:text-white">Rp. 3.300.000</p>
            </div>
        </div>
    </div>

    <!-- Card Tabel Transaksi -->
    <div class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden">
        
        <!-- Header & Toolbar -->
        <div class="p-6 border-b border-slate-100 dark:border-[#374151] flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            
            <!-- Pencarian & Filter -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full lg:w-auto">
                <div class="relative w-full sm:w-56">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-900 dark:text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5 transition-colors" placeholder="Cari Kode / Nama...">
                </div>
                
                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="hari_ini">Hari Ini</option>
                    <option value="minggu_ini">Minggu Ini</option>
                    <option value="bulan_ini">Bulan Ini</option>
                </select>

                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Jenis</option>
                    <option value="pemasukan">Pemasukan Saja</option>
                    <option value="pengeluaran">Pengeluaran Saja</option>
                </select>
            </div>

            <!-- Tombol Aksi Export -->
            <div class="flex items-center gap-2">
                <button class="flex items-center justify-center gap-2 px-4 py-2.5 text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-600 hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg transition-colors">
                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Export Excel
                </button>
            </div>
        </div>

        <!-- Tabel Data Riwayat Transaksi -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50/50 dark:bg-[#111827]/50">
                    <tr class="border-b border-slate-200 dark:border-[#374151]">
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Waktu & Kode</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Pihak Terkait</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Rincian Transaksi</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Metode</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-right">Nominal</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700 dark:text-slate-300">
                    
                    <!-- Data 1: Pemasukan (Siswa) -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">08 Okt 2026, 09:30</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">IN-1026-0001</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Bima Arya</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">TK - Kelompok B</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Pembayaran SPP Oktober 2026</p>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs font-medium border border-slate-200 dark:border-slate-600">
                                Tunai
                            </span>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-emerald-600 dark:text-emerald-400">
                            + Rp. 250.000
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Kuitansi" class="p-1.5 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50 dark:text-slate-400 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 2: Pengeluaran (Pencairan Anggaran) -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">08 Okt 2026, 10:15</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">OUT-1026-0001</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Bpk. Ahmad</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Guru PAI (SD)</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Pencairan Dana: Pembelian ATK</p>
                            <p class="text-xs text-emerald-600 dark:text-emerald-400">Ref: PGA-06-2026-0001</p>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs font-medium border border-slate-200 dark:border-slate-600">
                                Tunai
                            </span>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-red-500 dark:text-red-400">
                            - Rp. 1.200.000
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Bukti Pengeluaran" class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 dark:text-slate-400 dark:hover:text-red-400 dark:hover:bg-red-900/30 rounded transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 3: Pemasukan (Siswa) -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">08 Okt 2026, 11:45</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">IN-1026-0002</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Siti Nurhaliza</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">SMP - Kelas 8B</p>
                        </td>
                        <td class="py-4 px-6">
                            <p class="text-slate-600 dark:text-slate-300">Pembayaran Seragam Baru</p>
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400 text-xs font-medium border border-blue-100 dark:border-blue-800">
                                Transfer
                            </span>
                        </td>
                        <td class="py-4 px-6 text-right font-bold text-emerald-600 dark:text-emerald-400">
                            + Rp. 650.000
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Kuitansi" class="p-1.5 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50 dark:text-slate-400 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-slate-100 dark:border-[#374151] flex items-center justify-between text-sm text-slate-500 dark:text-slate-400">
            <p>Menampilkan 1-3 dari 3 transaksi hari ini</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&laquo;</button>
                <button class="px-3 py-1 rounded bg-emerald-600 text-white">1</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&raquo;</button>
            </div>
        </div>
    </div>
@endsection