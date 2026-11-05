<?php
// Link único dos e-mails do ProCards: manda cada aparelho para a sua loja.
// Desktop (ou aparelho não reconhecido) vê uma página com os dois links.
$ios = 'https://apps.apple.com/br/app/procards-concursos/id6450422859';
$android = 'https://play.google.com/store/apps/details?id=com.fpedrosa.flashcards';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (preg_match('/iPhone|iPad|iPod/i', $ua)) {
    header('Location: ' . $ios, true, 302);
    exit;
}
if (preg_match('/Android/i', $ua)) {
    header('Location: ' . $android, true, 302);
    exit;
}
?><!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ProCards</title>
<style>
  body { margin: 0; min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #E4F5F4; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif; color: #0A1F20; }
  main { max-width: 420px; padding: 32px 24px; text-align: center; }
  h1 { font-size: 32px; letter-spacing: -0.8px; margin: 0 0 12px; }
  p { color: #34484A; line-height: 1.6; margin: 0 0 28px; }
  a { display: block; margin: 0 0 12px; padding: 14px; border-radius: 12px; font-weight: 600; text-decoration: none; }
  .ios { background: #0A1F20; color: #fff; }
  .android { border: 2px solid #0A1F20; color: #0A1F20; }
</style>
</head>
<body>
<main>
  <h1>ProCards</h1>
  <p>O ProCards é um app para celular. Abra este link no seu iPhone ou Android, ou escolha a loja:</p>
  <a class="ios" href="<?= $ios ?>">App Store (iPhone)</a>
  <a class="android" href="<?= $android ?>">Google Play (Android)</a>
</main>
</body>
</html>
