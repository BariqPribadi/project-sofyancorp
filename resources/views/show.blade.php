@extends('layouts.main')

@section('container')
    <div class="max-w-3xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-slate-900">
                <h2 class="text-xl text-gray-400 font-semibold mb-4">Detail Anggota</h2>
                <div class="mb-4">
                    <strong class="block text-gray-400 font-semibold mb-1">Nama:</strong>
                    <div class="bg-gray-600 rounded">
                        <span class="text-gray-200 p-2">{{ $anggota->nama }}</span>
                    </div>
                </div>
                <div class="mb-4">
                    <strong class="block text-gray-400 font-semibold mb-1">Email:</strong>
                    <div class="bg-gray-600 rounded">
                        <span class="text-gray-200 p-2">{{ $anggota->email }}</span>
                    </div>
                </div>
                <div class="mb-4">
                    <strong class="block text-gray-400 font-semibold mb-1">Telepon:</strong>
                    <div class="bg-gray-600 rounded">
                        <span class="text-gray-200 p-2">{{ $anggota->no_hp }}</span>
                    </div>
                </div>
                <div class="mb-4">
                    <strong class="block text-gray-400 font-semibold mb-1">Alamat:</strong>
                    <div class="bg-gray-600 rounded">
                        <span class="text-gray-200 p-2">{{ $anggota->alamat }}</span>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                    <form action="{{ route('anggota.delete', $anggota->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
