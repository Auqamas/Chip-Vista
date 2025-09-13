<?php
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

        // Thank you message with auto redirect
                // Thank you message with auto redirect
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
          <meta charset='UTF-8'>
          <title>Application Submitted</title>
          <script src='https://cdn.tailwindcss.com'></script>
        </head>
        <body class='bg-gray-100 flex items-center justify-center min-h-screen font-sans'>
          <div class='bg-white shadow-lg rounded-xl p-8 max-w-md text-center'>
            <!-- Success Icon -->
            <div class='mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-4'>
              <svg class='h-10 w-10 text-green-600' fill='none' stroke='currentColor' stroke-width='2' viewBox='0 0 24 24'>
                <path stroke-linecap='round' stroke-linejoin='round' d='M5 13l4 4L19 7'/>
              </svg>
            </div>

            <h2 class='text-2xl font-bold text-gray-900 mb-2'>Thank you, {$name}!</h2>
            <p class='text-gray-700 mb-4'>
              Your application for <strong class='text-blue-600'>{$role}</strong> has been submitted.
            </p>
            <p class='text-sm text-gray-500 mb-6'>
              You will be redirected to the homepage in <span id='countdown'>5</span> seconds...
            </p>
            
            <a href='index.html' 
               class='inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-blue-600 text-white font-medium shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400'>
              ← Back to Home
            </a>
          </div>

          <script>
            let seconds = 5;
            const countdownEl = document.getElementById('countdown');
            const interval = setInterval(() => {
              seconds--;
              countdownEl.textContent = seconds;
              if (seconds <= 0) {
                clearInterval(interval);
                window.location.href = 'index.html';
              }
            }, 1000);
          </script>
        </body>
        </html>
        ";

    } else {
        die('❌ Resume upload failed.');
    }
} else {
    echo "❌ Invalid request.";
}