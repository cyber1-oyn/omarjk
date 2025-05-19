<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "youremail@example.com"; // <-- ضع بريدك هنا
    $subject = "رسالة جديدة من $name";
    $body = "الاسم: $name\nالبريد: $email\n\nالرسالة:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>✅ تم إرسال الرسالة بنجاح!</p>";
    } else {
        echo "<p>❌ حدث خطأ أثناء الإرسال. حاول مرة أخرى.</p>";
    }
} else {
    echo "<p>الوصول غير مسموح.</p>";
}
?>
