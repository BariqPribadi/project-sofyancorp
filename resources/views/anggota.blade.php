@extends('layouts.main')

@section('container')
    <div class="mb-8 relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Email
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Telepon
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Alamat
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->nama }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->no_hp }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->alamat }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('anggota.show', $item->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Lihat</a>
                            <a href="{{ route('anggota.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</a>
                            <form action="{{ route('anggota.delete', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mb-4">
        <a href="{{ route('anggota.create') }}" class="px-4 py-2 bg-blue-800 text-white rounded hover:bg-blue-950">Tambah Anggota Baru</a>
    </div>

@endsection