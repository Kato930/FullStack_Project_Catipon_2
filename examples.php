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
    <title>Examples | Deliverables</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a1a2e] text-white p-8">
    <div class="max-w-2xl mx-auto bg-[#16213e] p-8 rounded-xl border border-white/5">
        <h1 class="text-2xl font-bold text-[#e94560] mb-6 border-b border-[#e94560] pb-2">SYSTEM DELIVERABLES</h1>
        
        <div class="space-y-8">
            <section>
                <h3 class="text-lg font-bold text-blue-400">1. WEB (Standard HTTP)</h3>
                <p class="text-sm text-gray-400 mb-2">The browser requests this page and gets HTML back.</p>
                <code class="block bg-black/40 p-3 rounded text-xs">GET /examples.php HTTP/1.1</code>
            </section>

            <section>
                <h3 class="text-lg font-bold text-green-400">2. REST (JSON API)</h3>
                <p class="text-sm text-gray-400 mb-2">Click below to see a JSON response example.</p>
                <button onclick="document.getElementById('json-demo').classList.toggle('hidden')" class="bg-green-600 px-3 py-1 rounded text-[10px] mb-2">Execute REST Call</button>
                <pre id="json-demo" class="hidden bg-black/40 p-3 rounded text-xs text-green-400">{"id":1,"user":"bagon","status":"online"}</pre>
            </section>

            <section>
                <h3 class="text-lg font-bold text-yellow-500">3. SOAP (XML Envelope)</h3>
                <p class="text-sm text-gray-400 mb-2">A SOAP message wrapped in an XML envelope.</p>
                <pre class="bg-black/40 p-3 rounded text-[10px] text-yellow-500 overflow-x-auto">
&lt;soap:Envelope&gt;
 &lt;soap:Body&gt;
  &lt;GetUserData&gt;&lt;user&gt;bagon&lt;/user&gt;&lt;/GetUserData&gt;
 &lt;/soap:Body&gt;
&lt;/soap:Envelope&gt;</pre>
            </section>
        </div>
        <div class="mt-8 pt-4 border-t border-white/5">
            <a href="dashboard.php" class="text-gray-500 hover:text-[#e94560] text-sm italic">← Return to Dashboard</a>
        </div>
    </div>
</body>
</html>
