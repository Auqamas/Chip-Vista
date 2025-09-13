<?php $role = "Junior UI/UX Fullstack Designer"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apply - <?= $role ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="max-w-2xl mx-auto bg-white p-8 mt-10 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-4"><?= $role ?></h1>
    <p class="mb-6 text-gray-600">Location: Boston, United States<br>Compensation: $100K – $500K<br>Full Time</p>

    <form action="../apply.php" method="POST" enctype="multipart/form-data" class="space-y-4">
      <input type="hidden" name="role" value="<?= $role ?>">

      <div>
        <label class="block text-gray-700">Full Name</label>
        <input type="text" name="name" required class="w-full border rounded p-2">
      </div>

      <div>
        <label class="block text-gray-700">Email</label>
        <input type="email" name="email" required class="w-full border rounded p-2">
      </div>

      <div>
        <label class="block text-gray-700">Resume (PDF/DOC)</label>
        <input type="file" name="resume" accept=".pdf,.doc,.docx" required class="w-full">
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit Application</button>
    </form>
  </div>
</body>
</html>
