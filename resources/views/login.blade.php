<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIA-AI SMP</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef3f8;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .logo {
            text-align: center;
            margin-bottom: 28px;
        }

        .logo h1 {
            margin: 0 0 10px;
            color: #123b68;
            font-size: 30px;
        }

        .logo p {
            margin: 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #93c5fd;
            border-color: #2563eb;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #123b68;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #1d4f85;
        }

        .message {
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
        }

        .success {
            background: #dcfce7;
            color: #166534;
        }

        .footer {
            margin-top: 24px;
            text-align: center;
            color: #64748b;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <h1>SIA-AI SMP</h1>
            <p>Sistem Informasi Akademik<br>
            Berbasis Artificial Intelligence</p>
        </div>

        @if (session('success'))
            <div class="message success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="message error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    autocomplete="username"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan kata sandi"
                    autocomplete="current-password"
                    required
                >
            </div>

            <button type="submit">Masuk</button>
        </form>

        <div class="footer">
            &copy; {{ date('Y') }} SIA-AI SMP
        </div>
    </div>
</body>
</html>
