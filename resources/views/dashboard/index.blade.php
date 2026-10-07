@extends('layouts.app')

@section('title', 'Dashboard Utama')
@section('page_title', 'Dashboard Sistem Informasi Manajemen Aset dan Keuangan')

@section('content')
    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        
        <!-- Tagihan -->
        <div class="bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-100 dark:border-[#374151] pb-4 mb-4">
                <h3 class="text-slate-700 dark:text-slate-200 font-medium">Tagihan</h3>
                <a href="{{ url('/invoices') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Tagihan <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 dark:text-emerald-400 mb-1">845</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Jumlah Siswa</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 dark:text-white mb-1">Rp. 100.000.000</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Total Tagihan</p>
                </div>
            </div>
        </div>

        <!-- Tunggakan -->
        <div class="bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-100 dark:border-[#374151] pb-4 mb-4">
                <h3 class="text-slate-700 dark:text-slate-200 font-medium">Tunggakan</h3>
                <a href="{{ url('/arrears') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Tunggakan <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 dark:text-emerald-400 mb-1">298</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Jumlah Siswa Menunggak</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 dark:text-white mb-1">Rp. 50.000.000</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Total Tunggakan</p>
                </div>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-100 dark:border-[#374151] pb-4 mb-4">
                <h3 class="text-slate-700 dark:text-slate-200 font-medium">Pembayaran</h3>
                <a href="{{ url('/payments') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Pembayaran <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 dark:text-emerald-400 mb-1">547</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Jumlah Siswa Lunas</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 dark:text-white mb-1">Rp. 50.000.000</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Total Terbayar</p>
                </div>
            </div>
        </div>

        <!-- Pengajuan Anggaran -->
        <div class="bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-100 dark:border-[#374151] pb-4 mb-4">
                <h3 class="text-slate-700 dark:text-slate-200 font-medium">Pengajuan Anggaran</h3>
                <a href="{{ url('/budget-requests') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Pengajuan Anggaran <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 dark:text-emerald-400 mb-1">7</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Pengajuan Berjalan</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 dark:text-white mb-1">3</p>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Menunggu Pencairan</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaksi Terbaru -->
    <div class="bg-white dark:bg-[#1F2937] p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151]">
        <!-- Header Tabel & Tombol Aksi -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
            <h3 class="text-slate-800 dark:text-white font-semibold">Transaksi Terbaru</h3>
            
            <div class="flex items-center gap-2">
                <!-- Tombol Saring -->
                <button class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-slate-600 dark:text-slate-300 bg-white dark:bg-transparent border border-slate-300 dark:border-[#374151] rounded-lg hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                    Saring
                </button>
                
                <!-- Tombol Tambah Pembayaran -->
                <button class="flex items-center gap-2 px-3 py-1.5 text-sm font-medium text-emerald-700 dark:text-emerald-400 bg-emerald-50 dark:bg-transparent border border-emerald-200 dark:border-emerald-500/30 rounded-lg hover:bg-emerald-100 dark:hover:bg-emerald-500/10 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Tambah Pembayaran
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-slate-200 dark:border-[#374151]">
                        <th class="py-3 pr-4 font-medium text-slate-500 dark:text-slate-400">Tanggal</th>
                        <th class="py-3 pr-4 font-medium text-slate-500 dark:text-slate-400">Kode</th>
                        <th class="py-3 pr-4 font-medium text-slate-500 dark:text-slate-400">Keterangan</th>
                        <th class="py-3 pr-4 font-medium text-slate-500 dark:text-slate-400">Nominal</th>
                        <th class="py-3 font-medium text-slate-500 dark:text-slate-400">Status</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 pr-4 dark:text-slate-300">19-06-2026</td>
                        <td class="py-4 pr-4 font-medium text-slate-900 dark:text-slate-200">DAR-06-2026-0001</td>
                        <td class="py-4 pr-4 dark:text-slate-300">Pembayaran SPP</td>
                        <td class="py-4 pr-4 text-emerald-600 dark:text-emerald-400 font-medium">+ Rp. 250.000</td>
                        <td class="py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 text-xs font-medium">Pending</span>
                        </td>
                    </tr>
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 pr-4 dark:text-slate-300">19-06-2026</td>
                        <td class="py-4 pr-4 font-medium text-slate-900 dark:text-slate-200">PGA-06-2026-0003</td>
                        <td class="py-4 pr-4 dark:text-slate-300">Pembelian ATK kegiatan belajar</td>
                        <td class="py-4 pr-4 text-red-500 dark:text-red-400 font-medium">- Rp. 1.200.000</td>
                        <td class="py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-amber-50 dark:bg-amber-900/30 text-amber-600 dark:text-amber-400 text-xs font-medium border border-amber-100 dark:border-amber-800">Menunggu Pencairan</span>
                        </td>
                    </tr>
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 pr-4 dark:text-slate-300">18-06-2026</td>
                        <td class="py-4 pr-4 font-medium text-slate-900 dark:text-slate-200">DAR-06-2026-0002</td>
                        <td class="py-4 pr-4 dark:text-slate-300">Pembayaran SPP</td>
                        <td class="py-4 pr-4 text-emerald-600 dark:text-emerald-400 font-medium">+ Rp. 500.000</td>
                        <td class="py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 text-xs font-medium border border-emerald-100 dark:border-emerald-800">Lunas</span>
                        </td>
                    </tr>
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 pr-4 dark:text-slate-300">18-06-2026</td>
                        <td class="py-4 pr-4 font-medium text-slate-900 dark:text-slate-200">PGA-06-2026-0002</td>
                        <td class="py-4 pr-4 dark:text-slate-300">Perbaikan AC ruang kelas</td>
                        <td class="py-4 pr-4 text-red-500 dark:text-red-400 font-medium">- Rp. 2.500.000</td>
                        <td class="py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-xs font-medium border border-blue-100 dark:border-blue-800">Dicairkan</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection