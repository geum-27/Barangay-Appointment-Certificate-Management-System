<?php
require_once __DIR__ . '/../src/Config/DatabaseConnection.php';
require_once __DIR__ . '/../src/Appointments/ReferenceGenerator.php';

use Src\Appointments\ReferenceGenerator;
$mockTrackingCode = ReferenceGenerator::generateNext();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Barangay 25 J.P. Rizal</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fc; margin: 0; padding: 30px; color: #2c3e50; }
        .form-container { background: white; max-width: 600px; margin: 0 auto; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); border: 1px solid #e3e6f0; }
        h2 { margin-top: 0; color: #4e73df; font-size: 22px; border-bottom: 2px solid #eaecf4; padding-bottom: 10px; margin-bottom: 20px; }
        .doc-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin-bottom: 20px; }
        .doc-option { border: 2px solid #e3e6f0; padding: 15px; border-radius: 6px; text-align: center; cursor: pointer; font-weight: 600; font-size: 14px; transition: all 0.2s; }
        .doc-option:hover { border-color: #4e73df; background: #f8f9fc; }
        .form-group { margin-bottom: 18px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 6px; color: #4e5e6a; }
        input[type="date"], textarea { width: 100%; padding: 10px; border: 1px solid #dcdde1; border-radius: 4px; box-sizing: border-box; font-size: 14px; }
        textarea { height: 80px; resize: none; }
        
        .privacy-container { background: #f1f3f9; padding: 15px; border-radius: 6px; display: flex; gap: 10px; margin-top: 25px; margin-bottom: 20px; align-items: flex-start; }
        .privacy-container input { margin-top: 3px; }
        .privacy-text { font-size: 12px; line-height: 1.5; color: #5a5c69; }
        
        .book-btn { background: #1cc88a; color: white; border: none; width: 100%; padding: 14px; border-radius: 4px; font-weight: bold; font-size: 16px; cursor: pointer; }
        .book-btn:hover { background: #17a673; }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Document Clearance Request Wizard</h2>
        <form onsubmit="alert('Appointment successfully created! Generated Token: <?= $mockTrackingCode ?>'); return false;">
            
            <label>Select Required Municipal Form / Certificate</label>
            <div class="doc-grid">
                <div class="doc-option" onclick="selectDoc(this)">📜 Barangay Clearance</div>
                <div class="doc-option" onclick="selectDoc(this)">🏠 Certificate of Residency</div>
                <div class="doc-option" onclick="selectDoc(this)">💼 Business Clearance</div>
                <div class="doc-option" onclick="selectDoc(this)">🤝 Certificate of Indigency</div>
            </div>

            <div class="form-group">
                <label for="date">Preferred Appointment Schedule Date</label>
                <input type="date" id="date" required value="2026-05-27">
            </div>

            <div class="form-group">
                <label for="purpose">Purpose of Request</label>
                <textarea id="purpose" placeholder="State reason explicitly..." required></textarea>
            </div>

            <div class="privacy-container">
                <input type="checkbox" id="privacy" required>
                <div class="privacy-text">
                    I explicitly confirm that all submitted fields match my citizen records under Barangay 25 J.P. Rizal. I authorize this system to process my profile inputs to generate official certificates in accordance with local Data Privacy Laws.
                </div>
            </div>

            <button type="submit" class="book-btn">Confirm & Submit Request</button>
        </form>
    </div>

    <script>
        function selectDoc(element) {
            document.querySelectorAll('.doc-option').forEach(el => {
                el.style.borderColor = '#e3e6f0';
                el.style.backgroundColor = 'white';
                el.style.color = '#2c3e50';
            });
            element.style.borderColor = '#4e73df';
            element.style.backgroundColor = '#f8f9fc';
            element.style.color = '#4e73df';
        }
    </script>
</body>
</html>