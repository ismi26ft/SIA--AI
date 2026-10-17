@extends('layouts.app')

@section('content')
<div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                Daftar Asesmen
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Daftar asesmen pembelajaran yang telah dibuat.
            </p>
        </div>

        <a href="{{ route('assessments.create') }}"
           class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">
            + Tambah Asesmen
        </a>
    </div>

    @if (session('success'))
        <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">No.</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Nama Asesmen</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Kelas</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Mata Pelajaran</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Guru</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">Tanggal</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($assessments as $assessment)
                        <tr class="hover:bg-gray-50">
                            <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-4 py-3 text-sm font-medium text-gray-900">
                                {{ $assessment->nama_asesmen }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                {{ $assessment->classRoom->nama_kelas ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                {{ $assessment->subject->nama ?? '-' }}
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                {{ $assessment->teacher->nama ?? '-' }}
                            </td>
                            <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">
                                {{ $assessment->tanggal ? \Illuminate\Support\Carbon::parse($assessment->tanggal)->format('d-m-Y') : '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-10 text-center text-sm text-gray-500">
                                Belum ada data asesmen.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <p class="mt-3 text-sm text-gray-500">
        Total asesmen: {{ $assessments->count() }}
    </p>
</div>
@endsection
