// Generate unique reference number for appointment tracking
$currentYear = date('Y');
$prefix = "BGY-" . $currentYear . "-";

// Fetch latest reference number from database
$query = "SELECT reference_number FROM appointments 
          WHERE reference_number LIKE :prefix 
          ORDER BY id DESC LIMIT 1";

$stmt = $db->prepare($query);
$stmt->execute(['prefix' => $prefix . '%']);
$last = $stmt->fetch();

// Compute next sequence number
if ($last) {
    $parts = explode('-', $last['reference_number']);
    $next = intval(end($parts)) + 1;
} else {
    $next = 1;
}

// Format final reference number
$reference = $prefix . str_pad($next, 3, '0', STR_PAD_LEFT);