@extends('layouts.app')

@section('title', 'Pengaturan')
@section('page_title', 'Pengaturan Sistem & Master Data')

@section('content')
    <div class="flex flex-col md:flex-row gap-6 items-start">
        
        <!-- Navigasi Kiri (Tab Menu) -->
        <div class="w-full md:w-64 flex-shrink-0 sticky top-24">
            <div class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden">
                <nav class="flex flex-col p-2 gap-1">
                    <a href="#profil" class="px-4 py-2.5 text-sm font-medium rounded-lg bg-emerald-50 text-emerald-700 dark:bg-emerald-500/15 dark:text-emerald-400 transition-colors">
                        Profil & Identitas
                    </a>
                    <a href="#whatsapp" class="px-4 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition-colors">
                        Template WhatsApp
                    </a>
                    <a href="#" class="px-4 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition-colors">
                        Tahun Ajaran & Unit
                    </a>
                    <a href="#" class="px-4 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition-colors">
                        Manajemen Pengguna
                    </a>
                    <a href="#" class="px-4 py-2.5 text-sm font-medium rounded-lg text-slate-600 hover:bg-slate-50 hover:text-slate-900 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white transition-colors">
                        Backup & Restore
                    </a>
                </nav>
            </div>
        </div>

        <!-- Konten Kanan -->
        <div class="flex-1 w-full space-y-6">
            
            <!-- Card 1: Profil Yayasan -->
            <div id="profil" class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden scroll-mt-24">
                <div class="p-6 border-b border-slate-100 dark:border-[#374151]">
                    <h3 class="font-semibold text-slate-800 dark:text-white">Profil Yayasan</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Data ini akan digunakan sebagai kop surat pada invoice dan kuitansi.</p>
                </div>
                
                <div class="p-6">
                    <form class="space-y-6">
                        <!-- Upload Logo -->
                        <div class="flex items-center gap-6">
                            <div class="w-20 h-20 rounded-xl bg-slate-100 dark:bg-slate-800 border-2 border-dashed border-slate-300 dark:border-slate-600 flex items-center justify-center text-slate-400">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <button type="button" class="px-4 py-2 text-sm font-medium bg-white dark:bg-slate-800 border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-300 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Ganti Logo</button>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Format PNG/JPG maksimal 2MB.</p>
                            </div>
                        </div>

                        <!-- Nama & Kontak -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nama Yayasan / Instansi</label>
                                <input type="text" value="Yayasan Insan Madani Mulia" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Nomor Telepon / WA</label>
                                <input type="text" value="0812-3456-7890" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Email Resmi</label>
                                <input type="email" value="info@insanmadani.sch.id" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1">Alamat Lengkap</label>
                                <textarea rows="3" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">Jl. Pendidikan No. 123, Kecamatan Ilmu, Kota Cerdas, 60123</textarea>
                            </div>
                        </div>

                        <!-- Data Bank -->
                        <div class="p-4 bg-slate-50 dark:bg-slate-800/50 rounded-lg border border-slate-200 dark:border-slate-700">
                            <h4 class="text-sm font-semibold text-slate-800 dark:text-slate-200 mb-4">Informasi Rekening Pembayaran</h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-xs font-medium text-slate-700 dark:text-slate-400 mb-1">Nama Bank</label>
                                    <input type="text" value="Bank Syariah Indonesia (BSI)" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-3 py-2 text-sm bg-white dark:bg-slate-800 text-slate-900 dark:text-white">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-700 dark:text-slate-400 mb-1">Nomor Rekening</label>
                                    <input type="text" value="7001234567" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-3 py-2 text-sm bg-white dark:bg-slate-800 text-slate-900 dark:text-white">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-700 dark:text-slate-400 mb-1">Atas Nama</label>
                                    <input type="text" value="Yayasan Insan Madani" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-3 py-2 text-sm bg-white dark:bg-slate-800 text-slate-900 dark:text-white">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="px-5 py-2 text-sm font-medium bg-emerald-600 text-white hover:bg-emerald-700 rounded-lg transition-colors">
                                Simpan Profil
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Card 2: Template WhatsApp -->
            <div id="whatsapp" class="bg-white dark:bg-[#1F2937] rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.12)] dark:shadow-none dark:border dark:border-[#374151] overflow-hidden scroll-mt-24">
                <div class="p-6 border-b border-slate-100 dark:border-[#374151]">
                    <h3 class="font-semibold text-slate-800 dark:text-white">Template Pesan WhatsApp</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Atur format pesan otomatis untuk pengingat tagihan dan bukti pembayaran.</p>
                </div>
                
                <div class="p-6 space-y-6">
                    <!-- Template Pengingat Tagihan -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pesan Pengingat Tunggakan</label>
                        <div class="mb-2 flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded cursor-help" title="Klik untuk menyalin">{nama_ortu}</span>
                            <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded cursor-help" title="Klik untuk menyalin">{nama_siswa}</span>
                            <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded cursor-help" title="Klik untuk menyalin">{total_tagihan}</span>
                            <span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-xs rounded cursor-help" title="Klik untuk menyalin">{link_pembayaran}</span>
                        </div>
                        <textarea rows="5" class="w-full rounded-lg border border-slate-300 dark:border-slate-600 px-4 py-2.5 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 bg-white dark:bg-slate-800 text-slate-900 dark:text-white transition-colors">Assalamu'alaikum, Yth. Bapak/Ibu {nama_ortu}.

Kami dari TU Yayasan Insan Madani ingin mengingatkan bahwa terdapat tagihan administrasi pendidikan atas nama ananda *{nama_siswa}* sebesar *{total_tagihan}* yang belum terselesaikan.

Mohon berkenan untuk segera melunasi tagihan tersebut. Pembayaran dapat dilakukan langsung ke ruang TU atau transfer ke rekening BSI 7001234567 (a.n Yayasan Insan Madani).

Terima kasih atas perhatian dan kerja samanya.
Wassalamu'alaikum.</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="px-5 py-2 text-sm font-medium bg-emerald-600 text-white hover:bg-emerald-700 rounded-lg transition-colors">
                            Simpan Template
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection