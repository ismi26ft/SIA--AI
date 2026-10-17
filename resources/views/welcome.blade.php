<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA-AI SMP</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }
        header {
            background: #123b68;
            color: white;
            padding: 24px 7%;
        }
        header h1 { margin: 0 0 8px; }
        header p { margin: 0; color: #dbeafe; }
        main {
            max-width: 1100px;
            margin: 35px auto;
            padding: 0 20px;
        }
        .welcome {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0000000d;
        }
        .welcome h2 { margin-top: 0; color: #123b68; }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 24px;
        }
        .card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            border-top: 4px solid #2563eb;
        }
        .card h3 { margin-top: 0; }
        .card p { color: #64748b; line-height: 1.6; }
        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIA-AI SMP</h1>
        <p>Sistem Informasi Akademik Berbasis Artificial Intelligence</p>
    </header>

    <main>
        <section class="welcome">
            <h2>Selamat Datang di SIA-AI SMP</h2>
            <p>
                Sistem informasi akademik untuk membantu guru mengelola nilai,
                menganalisis hasil belajar, dan memperoleh rekomendasi tindak
                lanjut pembelajaran bagi peserta didik.
            </p>
        </section>

        <section class="cards">
            <div class="card">
                <h3>Data Akademik</h3>
                <p>Pengelolaan data siswa, kelas, mata pelajaran, dan penilaian.</p>
            </div>
            <div class="card">
                <h3>Analisis Hasil Belajar</h3>
                <p>Membantu melihat pencapaian belajar dan kebutuhan tindak lanjut siswa.</p>
            </div>
            <div class="card">
                <h3>Rekomendasi AI</h3>
                <p>Mendukung guru dalam mempertimbangkan remedial, pengayaan, dan pendampingan.</p>
            </div>
            <div class="card">
                <h3>Laporan Akademik</h3>
                <p>Menyediakan gambaran hasil belajar untuk mendukung keputusan berbasis data.</p>
            </div>
        </section>
    </main>

    <footer>
        SIA-AI SMP &copy; 2026 — Sistem Informasi Akademik
    </footer>
</body>
</html>
