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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vector Vault | Registry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a2e] text-white p-6 md:p-12">
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
            <h1 class="text-4xl font-extrabold text-[#e94560] tracking-tighter">USER REGISTRY</h1>
            <a href="dashboard.php" class="bg-[#0f3460] hover:bg-[#1f2a44] px-6 py-2 rounded-full text-sm font-bold transition border border-[#e94560]/30">← Return to Console</a>
        </div>

        <div class="bg-[#16213e] rounded-2xl overflow-hidden border border-[#e94560]/20 shadow-2xl">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-[#0f3460] text-[#e94560] uppercase text-xs tracking-widest">
                        <tr>
                            <th class="px-8 py-5">ID</th>
                            <th class="px-8 py-5">Username</th>
                            <th class="px-8 py-5">Email Address</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#0f3460]">
                        <?php foreach ($all_users as $u): ?>
                        <tr class="hover:bg-[#1f2a44] transition-colors group">
                            <td class="px-8 py-5 font-mono text-[#e94560]"><?php echo $u['id']; ?></td>
                            <td class="px-8 py-5 font-semibold"><?php echo htmlspecialchars($u['username']); ?></td>
                            <td class="px-8 py-5 text-gray-400 group-hover:text-white"><?php echo htmlspecialchars($u['email']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <p class="mt-6 text-center text-gray-500 text-sm italic">Total Authorized Personnel: <?php echo count($all_users); ?></p>
    </div>
</body>
</html>
