
@extends('layouts.app')

@section('content')
<div class="assessment-page">
    <div class="assessment-card">
        <div class="card-body p-4">
            <h1 class="h3 mb-4">Tambah Asesmen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('assessments.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_asesmen" class="form-label">
                Nama Asesmen
            </label>
            <input
                type="text"
                name="nama_asesmen"
                id="nama_asesmen"
                class="form-control"
                value="{{ old('nama_asesmen') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="class_id" class="form-label">Kelas</label>
            <select name="class_id" id="class_id" class="form-select" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                    <option
                        value="{{ $class->id }}"
                        @selected(old('class_id') == $class->id)
                    >
                        {{ $class->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="subject_id" class="form-label">
                Mata Pelajaran
            </label>
            <select
                name="subject_id"
                id="subject_id"
                class="form-select"
                required
            >
                <option value="">-- Pilih Mata Pelajaran --</option>
                @foreach ($subjects as $subject)
                    <option
                        value="{{ $subject->id }}"
                        @selected(old('subject_id') == $subject->id)
                    >
                        {{ $subject->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="teacher_id" class="form-label">Guru</label>
            <select
                name="teacher_id"
                id="teacher_id"
                class="form-select"
                required
            >
                <option value="">-- Pilih Guru --</option>
                @foreach ($teachers as $teacher)
                    <option
                        value="{{ $teacher->id }}"
                        @selected(old('teacher_id') == $teacher->id)
                    >
                        {{ $teacher->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_asesmen" class="form-label">
                Jenis Asesmen
            </label>
            <select
                name="jenis_asesmen"
                id="jenis_asesmen"
                class="form-select"
                required
            >
                <option value="">-- Pilih Jenis Asesmen --</option>
                @foreach (['tugas', 'kuis', 'proyek', 'uts', 'uas', 'sumatif', 'lainnya'] as $jenis)
                    <option
                        value="{{ $jenis }}"
                        @selected(old('jenis_asesmen') == $jenis)
                    >
                        {{ ucfirst($jenis) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input
                type="date"
                name="tanggal"
                id="tanggal"
                class="form-control"
                value="{{ old('tanggal') }}"
            >
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea
                name="deskripsi"
                id="deskripsi"
                class="form-control"
                rows="3"
            >{{ old('deskripsi') }}</textarea>
        </div>

        
<div class="d-flex gap-2 mt-3">
    <button type="submit" class="btn btn-primary">
        Simpan Asesmen
    </button>

    <a href="{{ route('assessments.index') }}" class="btn btn-secondary">
        Batal
    </a>
</form>
        </div>
    </div>
</div>
@endsection