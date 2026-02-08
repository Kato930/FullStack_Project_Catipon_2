<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$host = 'localhost';
$db   = 'user_system';
$user = 'root';
$pass = ''; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT id, username, email FROM users");
    $all_users = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Connection Failed");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vector Vault | Registry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a2e] text-white p-10">
    <div class="max-w-4xl mx-auto bg-[#16213e] rounded-xl overflow-hidden border border-[#e94560]/30 shadow-2xl">
        <div class="p-6 bg-[#0f3460] flex justify-between items-center">
            <h1 class="text-2xl font-bold text-[#e94560]">USER REGISTRY</h1>
            <a href="dashboard.php" class="text-xs bg-gray-700 px-4 py-2 rounded">BACK</a>
        </div>
        <table class="w-full text-left">
            <thead class="bg-[#1a1a2e] text-[#e94560] text-xs">
                <tr>
                    <th class="px-6 py-4">ID</th>
                    <th class="px-6 py-4">USERNAME</th>
                    <th class="px-6 py-4">EMAIL</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#0f3460]">
                <?php foreach ($all_users as $u): ?>
                <tr class="hover:bg-[#1f2a44]">
                    <td class="px-6 py-4 font-mono text-[#e94560]"><?php echo $u['id']; ?></td>
                    <td class="px-6 py-4"><?php echo htmlspecialchars($u['username']); ?></td>
                    <td class="px-6 py-4 text-gray-400"><?php echo htmlspecialchars($u['email']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
