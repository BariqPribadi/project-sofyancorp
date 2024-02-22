@extends('layouts.main')

@section('container')
    <div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white">
                <h2 class="text-xl font-semibold mb-4">Edit Anggota</h2>
                <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-semibold mb-1">Nama:</label>
                        <input type="text" name="nama" id="nama" value="{{ $anggota->nama }}" class="bg-gray-100 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-1">Email:</label>
                        <input type="email" name="email" id="email" value="{{ $anggota->email }}" class="bg-gray-100 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-4">
                        <label for="no_hp" class="block text-gray-700 font-semibold mb-1">Telepon:</label>
                        <input type="text" name="no_hp" id="no_hp" value="{{ $anggota->no_hp }}" class="bg-gray-100 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700 font-semibold mb-1">Alamat:</label>
                        <textarea name="alamat" id="alamat" class="bg-gray-100 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">{{ $anggota->alamat }}</textarea>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Simpan Perubahan</button>
                        <a href="{{ route('anggota.index') }}" class="px-4 py-2 ml-2 border border-gray-300 rounded hover:bg-gray-100">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
