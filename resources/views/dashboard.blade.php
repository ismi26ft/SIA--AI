
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard SIA-AI SMP
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    Sistem Informasi Akademik Berbasis AI
                </h1>
                <p class="mt-2 text-gray-600">
                    Selamat datang di sistem pengelolaan dan analisis hasil belajar siswa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-sm text-gray-500">Data Siswa</p>
                    <p class="mt-2 text-3xl font-bold text-blue-600">{{ \App\Models\Student::count() }}</p>
                    <p class="mt-2 text-sm text-gray-500">Jumlah siswa terdaftar</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-sm text-gray-500">Data Guru</p>
                    <p class="mt-2 text-3xl font-bold text-green-600"><p class="mt-2 text-3xl font-bold text-green-600">{{ \App\Models\Teacher::count() }}</p></p>
                    <p class="mt-2 text-sm text-gray-500">Jumlah guru terdaftar</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-sm text-gray-500">Perlu Remedial</p>
                    <p class="mt-2 text-3xl font-bold text-red-600">0</p>
                    <p class="mt-2 text-sm text-gray-500">Siswa perlu tindak lanjut</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <p class="text-sm text-gray-500">Rekomendasi AI</p>
                    <p class="mt-2 text-3xl font-bold text-purple-600">0</p>
                    <p class="mt-2 text-sm text-gray-500">Rekomendasi tersedia</p>
                </div>

            </div>

            <div class="mt-8 bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">
                    Menu Akademik
                </h3>

                <p class="mt-2 text-gray-600">
                    Pada tahap berikutnya, menu data siswa, guru, kelas, mata pelajaran,
                    nilai, analisis hasil belajar, dan rekomendasi AI akan dihubungkan
                    dengan database.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>
