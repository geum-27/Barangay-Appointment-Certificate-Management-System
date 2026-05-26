<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Login - Barangay 25 J.P. Rizal</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-card { background: white; padding: 35px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); width: 100%; max-width: 380px; }
        h2 { margin-top: 0; color: #2c3e50; font-size: 20px; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-size: 13px; color: #34495e; margin-bottom: 5px; font-weight: 500; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #dcdde1; border-radius: 4px; box-sizing: border-box; font-size: 14px; }
        .submit-btn { background: #4e73df; color: white; border: none; width: 100%; padding: 12px; border-radius: 4px; font-weight: 600; font-size: 15px; cursor: pointer; margin-top: 10px; }
        .submit-btn:hover { background: #2e59d9; }
        .demo-box { background: #ebf5fb; border-left: 4px solid #3498db; padding: 12px; margin-top: 20px; border-radius: 0 4px 4px 0; font-size: 12px; color: #2c3e50; line-height: 1.5; }
        .back-link { display: block; text-align: center; margin-top: 15px; font-size: 13px; color: #7f8c8d; text-decoration: none; }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Resident Log In</h2>
        <form action="book-appointment.php" method="GET">
            <div class="form-group">
                <label for="username">Username / Account Email</label>
                <input type="text" id="username" placeholder="Enter your credentials" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="submit-btn">Proceed to Booking</button>
        </form>

        <div class="demo-box">
            <strong>Development Note:</strong><br>
            Use registered local resident accounts or click above to preview the document request wizard fields.
        </div>

        <a href="index.php" class="back-link">← Return to Main Page</a>
    </div>

</body>
</html>