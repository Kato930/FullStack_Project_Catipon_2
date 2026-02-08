<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vector Vault | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a2e] text-white min-h-screen flex items-center justify-center p-6">
    <div class="max-w-md w-full bg-[#16213e] rounded-2xl shadow-2xl border border-[#e94560] p-8">
        <h1 class="text-3xl font-bold text-[#e94560] mb-2 text-center">VECTOR VAULT</h1>
        <p class="text-gray-400 text-center mb-6">Access Level: Verified</p>
        
        <div class="space-y-4">
            <div class="bg-[#0f3460] p-4 rounded-lg border-l-4 border-[#e94560]">
                <p class="text-sm text-gray-400 uppercase">Operator</p>
                <p class="text-xl font-mono"><?php echo strtoupper($_SESSION['username']); ?></p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <a href="users.php" class="bg-[#e94560] hover:bg-[#ff5e78] text-center py-3 rounded-lg font-bold transition">User List</a>
                <a href="logout.php" class="bg-gray-700 hover:bg-gray-600 text-center py-3 rounded-lg font-bold transition">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
