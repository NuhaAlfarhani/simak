@extends('layouts.app')

@section('title', 'Dashboard Utama')

@section('page_title', 'Dashboard Sistem Informasi Manajemen Aset dan Keuangan Yayasan Insan Madani Mulia')

@section('content')
    <!-- Kotak Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">

        <!-- Tagihan -->
        <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-4">
                <h3 class="text-slate-700 font-medium">Tagihan</h3>
                <a href="{{ url('/invoices') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Tagihan <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 mb-1">845</p>
                    <p class="text-xs text-slate-500">Jumlah Siswa</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 mb-1">Rp. 100.000.000</p>
                    <p class="text-xs text-slate-500">Total Tagihan</p>
                </div>
            </div>
        </div>

        <!-- Tunggakan -->
        <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-4">
                <h3 class="text-slate-700 font-medium">Tunggakan</h3>
                <a href="{{ url('/arrears') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Tunggakan <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 mb-1">298</p>
                    <p class="text-xs text-slate-500">Jumlah Siswa Menunggak</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 mb-1">Rp. 50.000.000</p>
                    <p class="text-xs text-slate-500">Total Tunggakan</p>
                </div>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-4">
                <h3 class="text-slate-700 font-medium">Pembayaran</h3>
                <a href="{{ url('/payments') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Pembayaran <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 mb-1">547</p>
                    <p class="text-xs text-slate-500">Jumlah Siswa Lunas</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 mb-1">Rp. 50.000.000</p>
                    <p class="text-xs text-slate-500">Total Terbayar</p>
                </div>
            </div>
        </div>

        <!-- Pengajuan Anggaran -->
        <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] flex flex-col justify-between">
            <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-4">
                <h3 class="text-slate-700 font-medium">Pengajuan Anggaran</h3>
                <a href="{{ url('/budget-requests') }}" class="text-xs text-emerald-600 hover:text-emerald-700 font-medium flex items-center gap-1">
                    Pergi ke Halaman Pengajuan Anggaran <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            <div class="flex justify-between items-end">
                <div>
                    <p class="text-4xl font-bold text-emerald-700 mb-1">7</p>
                    <p class="text-xs text-slate-500">Pengajuan Berjalan</p>
                </div>
                <div class="text-right">
                    <p class="text-lg font-semibold text-slate-800 mb-1">3</p>
                    <p class="text-xs text-slate-500">Menunggu Pencairan</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Transaksi Terbaru -->
    <div class="bg-white p-6 rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.12)]">
        <h3 class="text-slate-700 font-medium mb-4">Transaksi Terbaru</h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="py-3 pr-4 font-semibold text-slate-800">Tanggal</th>
                        <th class="py-3 pr-4 font-semibold text-slate-800">Kode</th>
                        <th class="py-3 pr-4 font-semibold text-slate-800">Keterangan</th>
                        <th class="py-3 pr-4 font-semibold text-slate-800">Nominal</th>
                        <th class="py-3 font-semibold text-slate-800">Status</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    <!-- Uang masuk: pembayaran siswa -->
                    <tr class="border-b border-slate-100">
                        <td class="py-3 pr-4">19-06-2026</td>
                        <td class="py-3 pr-4">DAR-06-2026-0001</td>
                        <td class="py-3 pr-4">Pembayaran SPP</td>
                        <td class="py-3 pr-4">Rp. 250.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-slate-200 text-slate-500 text-xs font-medium">Pending</span>
                        </td>
                    </tr>

                    <!-- Uang keluar: pengajuan anggaran -->
                    <tr class="border-b border-slate-100">
                        <td class="py-3 pr-4">19-06-2026</td>
                        <td class="py-3 pr-4">PGA-06-2026-0003</td>
                        <td class="py-3 pr-4">Pembelian ATK kegiatan belajar</td>
                        <td class="py-3 pr-4 text-red-600 font-medium">- Rp. 1.200.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-amber-100 text-amber-700 text-xs font-medium">Menunggu Pencairan</span>
                        </td>
                    </tr>

                    <tr class="border-b border-slate-100">
                        <td class="py-3 pr-4">18-06-2026</td>
                        <td class="py-3 pr-4">DAR-06-2026-0002</td>
                        <td class="py-3 pr-4">Pembayaran SPP</td>
                        <td class="py-3 pr-4">Rp. 500.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-emerald-100 text-emerald-700 text-xs font-medium">Lunas</span>
                        </td>
                    </tr>

                    <tr class="border-b border-slate-100">
                        <td class="py-3 pr-4">18-06-2026</td>
                        <td class="py-3 pr-4">PGA-06-2026-0002</td>
                        <td class="py-3 pr-4">Perbaikan AC ruang kelas</td>
                        <td class="py-3 pr-4 text-red-600 font-medium">- Rp. 2.500.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-emerald-100 text-emerald-700 text-xs font-medium">Dicairkan</span>
                        </td>
                    </tr>

                    <tr class="border-b border-slate-100">
                        <td class="py-3 pr-4">17-06-2026</td>
                        <td class="py-3 pr-4">DAR-06-2026-0003</td>
                        <td class="py-3 pr-4">Uang gedung</td>
                        <td class="py-3 pr-4">Rp. 250.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-emerald-100 text-emerald-700 text-xs font-medium">Lunas</span>
                        </td>
                    </tr>

                    <tr>
                        <td class="py-3 pr-4">17-06-2026</td>
                        <td class="py-3 pr-4">PGA-06-2026-0001</td>
                        <td class="py-3 pr-4">Kegiatan pesantren kilat</td>
                        <td class="py-3 pr-4 text-red-600 font-medium">- Rp. 5.000.000</td>
                        <td class="py-3">
                            <span class="inline-block px-2.5 py-0.5 rounded bg-emerald-100 text-emerald-700 text-xs font-medium">Dicairkan</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection