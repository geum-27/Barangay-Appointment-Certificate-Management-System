<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Barangay 25 J.P. Rizal Portal</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f4f6f9; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .welcome-container { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center; max-width: 450px; width: 100%; border-top: 5px solid #4e73df; }
        h1 { font-size: 24px; color: #2c3e50; margin-bottom: 5px; }
        h2 { font-size: 14px; color: #7f8c8d; font-weight: 400; margin-top: 0; margin-bottom: 30px; text-transform: uppercase; letter-spacing: 1px; }
        .routing-options { display: flex; flex-direction: column; gap: 15px; }
        .portal-btn { display: block; padding: 15px; border-radius: 6px; font-weight: 600; text-decoration: none; font-size: 16px; transition: all 0.2s ease; text-align: center; }
        .btn-resident { background-color: #4e73df; color: white; }
        .btn-resident:hover { background-color: #2e59d9; }
        .btn-staff { background-color: white; color: #4e73df; border: 2px solid #4e73df; }
        .btn-staff:hover { background-color: #f8f9fc; }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1>Barangay 25 J.P. Rizal</h1>
        <h2>Appointment & Certificate Portal</h2>
        
        <div class="routing-options">
            <a href="resident-login.php" class="portal-btn btn-resident">Resident Access</a>
            <a href="staff-dashboard.php" class="portal-btn btn-staff">Staff / Admin Portal</a>
        </div>
    </div>

</body>
</html>