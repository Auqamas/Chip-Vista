<?php
// Simple resume submission handler
$uploadDir = __DIR__ . "/uploads/";
if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $role  = $_POST["role"] ?? "Unknown Role";
    $name  = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");

    // File upload
    $resume = $_FILES["resume"] ?? null;
    if ($resume && $resume["error"] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($resume["name"], PATHINFO_EXTENSION));
        $allowed = ["pdf","doc","docx"];
        if (!in_array($ext, $allowed)) {
            die("❌ Invalid file type. Only PDF/DOC/DOCX allowed.");
        }
        $filename = time() . "_" . preg_replace("/[^a-zA-Z0-9]/", "_", $name) . "." . $ext;
        $filepath = $uploadDir . $filename;
        move_uploaded_file($resume["tmp_name"], $filepath);

        // Save application info (JSON log)
        $dataFile = __DIR__ . "/data/applications.json";
        if (!is_dir(__DIR__ . "/data")) mkdir(__DIR__ . "/data", 0777, true);
        $applications = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];
        $applications[] = [
            "role" => $role,
            "name" => $name,
            "email" => $email,
            "resume" => "uploads/" . $filename,
            "time" => date("Y-m-d H:i:s")
        ];
        file_put_contents($dataFile, json_encode($applications, JSON_PRETTY_PRINT));

        echo "<h2>✅ Thank you, $name!</h2>";
        echo "<p>Your application for <strong>$role</strong> has been submitted.</p>";
        echo "<a href='index.php'>← Back to Careers</a>";
    } else {
        die("❌ Resume upload failed.");
    }
} else {
    echo "❌ Invalid request.";
}
