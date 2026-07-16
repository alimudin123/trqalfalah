@extends('layouts.app')

@section('title', 'Pendaftaran Santri')

@section('content')

    <section class="py-10 md:py-16 bg-orange-50 min-h-screen">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Tombol Kembali --}}
            <div class="mb-6">
                <a href="{{ url('/') }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-emerald-700 px-5 py-2.5 text-emerald-800 font-semibold hover:bg-emerald-700 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

            <div class="bg-white rounded-3xl shadow-lg overflow-hidden">

                {{-- Header --}}
                <div class="bg-emerald-900 px-6 md:px-8 py-6 md:py-8">
                    <h1 class="text-2xl md:text-3xl font-bold text-white">
                        Formulir Pendaftaran Santri Baru
                    </h1>
                    <p class="text-sm md:text-base text-amber-200 mt-2">
                        Silakan lengkapi seluruh data dengan benar.
                    </p>
                </div>

                {{-- Alert Success --}}
                @if(session('success'))
                    <div class="mx-6 mt-6 rounded-xl bg-green-100 border border-green-300 text-green-700 px-5 py-4">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Alert Error --}}
                @if ($errors->any())
                    <div class="mx-6 mt-6 rounded-xl bg-red-100 border border-red-300 text-red-700 px-5 py-4">
                        <p class="font-bold mb-1">Pendaftaran gagal dikirim. Silakan periksa kembali form Anda:</p>
                        <ul class="list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form Content --}}
                <form action="{{ route('pendaftaran.store') }}" method="POST" class="p-5 md:p-8">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        {{-- Nama Santri --}}
                        <div class="md:col-span-2">
                            <label class="block mb-2 font-semibold">
                                Nama Santri Baru <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama_santri" value="{{ old('nama_santri') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('nama_santri') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('nama_santri')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Jenis Kelamin <span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center gap-6 mt-3">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="jenis_kelamin" value="Laki-Laki" required
                                        class="text-emerald-700 focus:ring-emerald-700" {{ old('jenis_kelamin') === 'Laki-Laki' ? 'checked' : '' }}>
                                    Laki-Laki
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                                        class="text-emerald-700 focus:ring-emerald-700" {{ old('jenis_kelamin') === 'Perempuan' ? 'checked' : '' }}>
                                    Perempuan
                                </label>
                            </div>
                            @error('jenis_kelamin')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- NIK --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                NIK (Nomor Induk Kependudukan) <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nik" value="{{ old('nik') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('nik') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('nik')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tempat Lahir --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Tempat Lahir (Kota Kelahiran) <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('tempat_lahir') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('tempat_lahir')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tanggal Lahir --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Tanggal, Bulan, Tahun Lahir <span class="text-red-500">*</span>
                            </label>
                            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('tanggal_lahir') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('tanggal_lahir')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Asal Sekolah --}}
                        <div class="md:col-span-2">
                            <label class="block mb-2 font-semibold">
                                Asal Sekolah (Sekolah Pagi) <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('asal_sekolah') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('asal_sekolah')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Nama Ayah --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Nama Ayah <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama_ayah" value="{{ old('nama_ayah') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('nama_ayah') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('nama_ayah')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- HP Ayah --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                No HP Ayah <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="hp_ayah" value="{{ old('hp_ayah') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('hp_ayah') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('hp_ayah')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pekerjaan Ayah --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Pekerjaan Ayah <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('pekerjaan_ayah') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('pekerjaan_ayah')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Nama Ibu --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Nama Ibu <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('nama_ibu') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('nama_ibu')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- HP Ibu --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                No HP / WhatsApp Ibu <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="hp_ibu" value="{{ old('hp_ibu') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('hp_ibu') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('hp_ibu')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pekerjaan Ibu --}}
                        <div>
                            <label class="block mb-2 font-semibold">
                                Pekerjaan Ibu <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required
                                class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('pekerjaan_ibu') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                            @error('pekerjaan_ibu')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    {{-- Alamat --}}
                    <div class="mt-6">
                        <label class="block mb-2 font-semibold">
                            Alamat Lengkap (Tempat Tinggal) <span class="text-red-500">*</span>
                        </label>
                        <textarea name="alamat" rows="4" required
                            class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('alamat') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Wali --}}
                    <div class="mt-6">
                        <label class="block mb-2 font-semibold">
                            Nama Wali / Orang Tua Sambung <span class="text-gray-500 text-sm">(Opsional)</span>
                        </label>
                        <input type="text" name="nama_wali" value="{{ old('nama_wali') }}"
                            class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('nama_wali') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">
                        @error('nama_wali')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Kritik --}}
                    <div class="mt-6">
                        <label class="block mb-2 font-semibold">
                            Kritik / Saran <span class="text-gray-500 text-sm">(Opsional)</span>
                        </label>
                        <textarea name="kritik_saran" rows="5"
                            class="w-full rounded-xl border-gray-300 px-4 py-3 text-sm focus:border-emerald-700 focus:ring-emerald-700 @error('kritik_saran') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror">{{ old('kritik_saran') }}</textarea>
                        @error('kritik_saran')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <div class="mt-8">
                        <button type="submit"
                            class="w-full sm:w-auto px-8 py-3 rounded-xl bg-emerald-800 hover:bg-emerald-900 text-white font-semibold transition">
                            Kirim Pendaftaran
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection