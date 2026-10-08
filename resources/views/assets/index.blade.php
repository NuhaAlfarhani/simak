@extends('layouts.app')

@section('title', 'Manajemen Aset')
@section('page_title', 'Inventaris & Manajemen Aset')

@section('content')
    <!-- Statistik Mini Kondisi Aset -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center text-blue-600 dark:text-blue-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Total Aset Tercatat</p>
                <p class="text-lg font-bold text-slate-900 dark:text-white">1,248</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-emerald-600 dark:text-emerald-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Kondisi Baik</p>
                <p class="text-lg font-bold text-emerald-600 dark:text-emerald-400">1,190</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-amber-600 dark:text-amber-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Perlu Perbaikan</p>
                <p class="text-lg font-bold text-amber-600 dark:text-amber-400">45</p>
            </div>
        </div>
        <div class="bg-white dark:bg-[#1F2937] p-5 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] border border-slate-100 dark:border-[#374151] flex items-center gap-4">
            <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center text-red-600 dark:text-red-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Rusak / Afkir</p>
                <p class="text-lg font-bold text-red-500 dark:text-red-400">13</p>
            </div>
        </div>
    </div>

    <!-- Card Tabel Aset -->
    <div class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden">
        
        <!-- Header & Toolbar -->
        <div class="p-6 border-b border-slate-100 dark:border-[#374151] flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            
            <!-- Pencarian & Filter -->
            <div class="flex flex-col sm:flex-row items-center gap-3 w-full lg:w-auto">
                <div class="relative w-full sm:w-56">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-900 dark:text-white text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full pl-10 p-2.5 transition-colors" placeholder="Cari nama atau kode aset...">
                </div>
                
                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Lokasi</option>
                    <option value="tk">Gedung TK</option>
                    <option value="sd">Gedung SD</option>
                    <option value="smp">Gedung SMP</option>
                    <option value="yayasan">Kantor Yayasan</option>
                </select>

                <select class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-600 text-slate-700 dark:text-slate-300 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full sm:w-auto p-2.5 transition-colors">
                    <option value="">Semua Kondisi</option>
                    <option value="baik">Baik</option>
                    <option value="perbaikan">Perlu Perbaikan</option>
                    <option value="rusak">Rusak / Afkir</option>
                </select>
            </div>

            <!-- Tombol Aksi Tambah -->
            <button class="flex items-center justify-center gap-2 px-4 py-2.5 text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700 rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Aset Baru
            </button>
        </div>

        <!-- Tabel Data Aset -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-slate-50/50 dark:bg-[#111827]/50">
                    <tr class="border-b border-slate-200 dark:border-[#374151]">
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Informasi Aset</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Kategori & Lokasi</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Tgl Pendataan</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400">Kondisi</th>
                        <th class="py-4 px-6 font-medium text-slate-500 dark:text-slate-400 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700 dark:text-slate-300">
                    
                    <!-- Data 1: Baik -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6 flex items-center gap-3">
                            <div class="w-10 h-10 rounded bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="font-medium text-slate-900 dark:text-slate-100">Laptop Lenovo Thinkpad</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Kode: AST-ELK-001</p>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Elektronik</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Gedung SD - Ruang Guru</p>
                        </td>
                        <td class="py-4 px-6 text-slate-600 dark:text-slate-400">
                            12 Jan 2025
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-xs font-medium border border-emerald-100 dark:border-emerald-800">
                                Baik
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Label QR" class="p-1.5 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50 dark:text-slate-400 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                                </button>
                                <button title="Edit Data" class="p-1.5 text-slate-500 hover:text-blue-600 hover:bg-blue-50 dark:text-slate-400 dark:hover:text-blue-400 dark:hover:bg-blue-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button title="Hapus Aset" class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 dark:text-slate-400 dark:hover:text-red-400 dark:hover:bg-red-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 2: Perbaikan -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6 flex items-center gap-3">
                            <div class="w-10 h-10 rounded bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                            <div>
                                <p class="font-medium text-slate-900 dark:text-slate-100">Lemari Arsip Besi</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Kode: AST-MBL-042</p>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Mebel / Furnitur</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Kantor Yayasan - Ruang TU</p>
                        </td>
                        <td class="py-4 px-6 text-slate-600 dark:text-slate-400">
                            05 Mar 2024
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 text-xs font-medium border border-amber-100 dark:border-amber-800">
                                Perlu Perbaikan
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Label QR" class="p-1.5 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50 dark:text-slate-400 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                                </button>
                                <button title="Edit Data" class="p-1.5 text-slate-500 hover:text-blue-600 hover:bg-blue-50 dark:text-slate-400 dark:hover:text-blue-400 dark:hover:bg-blue-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button title="Hapus Aset" class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 dark:text-slate-400 dark:hover:text-red-400 dark:hover:bg-red-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Data 3: Rusak -->
                    <tr class="border-b border-slate-50 dark:border-[#374151] hover:bg-slate-50 dark:hover:bg-[#374151] transition-colors">
                        <td class="py-4 px-6 flex items-center gap-3">
                            <div class="w-10 h-10 rounded bg-slate-100 dark:bg-slate-700 flex items-center justify-center text-slate-400 flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            </div>
                            <div>
                                <p class="font-medium text-slate-900 dark:text-slate-100">AC Daikin 1 PK</p>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Kode: AST-ELK-088</p>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-medium text-slate-900 dark:text-slate-100">Elektronik</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Gedung SMP - Kelas 8B</p>
                        </td>
                        <td class="py-4 px-6 text-slate-600 dark:text-slate-400">
                            20 Jun 2023
                        </td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs font-medium border border-red-100 dark:border-red-800">
                                Rusak / Afkir
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center justify-center gap-2">
                                <button title="Cetak Label QR" class="p-1.5 text-slate-500 hover:text-emerald-600 hover:bg-emerald-50 dark:text-slate-400 dark:hover:text-emerald-400 dark:hover:bg-emerald-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm14 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                                </button>
                                <button title="Edit Data" class="p-1.5 text-slate-500 hover:text-blue-600 hover:bg-blue-50 dark:text-slate-400 dark:hover:text-blue-400 dark:hover:bg-blue-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button title="Hapus Aset" class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 dark:text-slate-400 dark:hover:text-red-400 dark:hover:bg-red-900/30 rounded transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-slate-100 dark:border-[#374151] flex items-center justify-between text-sm text-slate-500 dark:text-slate-400">
            <p>Menampilkan 1-3 dari 1,248 aset</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&laquo;</button>
                <button class="px-3 py-1 rounded bg-emerald-600 text-white">1</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">2</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">3</button>
                <button class="px-3 py-1 rounded bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">&raquo;</button>
            </div>
        </div>
    </div>
@endsection