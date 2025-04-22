
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shazam Count</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            background-color: #f8f9fa;
        }
        .shazam-box {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 1.5rem;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        h1 {
            color: #1DB954;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Shazam Count</h1>

    <div class="shazam-box">
        <div class="info-item"><span class="label">ID:</span> {{ $data['id'] }}</div>
        <div class="info-item"><span class="label">Total Shazams:</span> {{ number_format($data['total']) }}</div>
        <div class="info-item"><span class="label">Type:</span> {{ ucfirst($data['type']) }}</div>
    </div>
</body>
</html>
