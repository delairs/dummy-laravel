<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Env Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 32px;
            background: #f5f7fb;
            color: #1f2937;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 25px rgba(0,0,0,.06);
        }
        h1 {
            margin-top: 0;
            margin-bottom: 8px;
        }
        p {
            color: #6b7280;
            margin-top: 0;
            margin-bottom: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 14px 12px;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background: #f9fafb;
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 999px;
            background: #eef2ff;
            color: #3730a3;
            font-size: 12px;
            font-weight: 700;
        }
        .warn {
            margin-top: 18px;
            padding: 14px 16px;
            background: #fff7ed;
            color: #9a3412;
            border: 1px solid #fdba74;
            border-radius: 12px;
        }
        code {
            background: #f3f4f6;
            padding: 2px 6px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <span class="badge">Laravel</span>
            <h1>Environment Viewer</h1>
            <p>Halaman ini hanya menampilkan environment variable yang aman.</p>

            <table>
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key => $value)
                        <tr>
                            <td><strong>{{ $key }}</strong></td>
                            <td>{{ is_bool($value) ? ($value ? 'true' : 'false') : ($value ?? '-') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="warn">
                Jangan tampilkan secret seperti <code>APP_KEY</code>, <code>DB_PASSWORD</code>,
                <code>MAIL_PASSWORD</code>, atau token API ke UI publik.
            </div>
        </div>
    </div>
</body>
</html>