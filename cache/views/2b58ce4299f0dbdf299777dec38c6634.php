<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
</head>
<body>
    <h1><?php echo e($message); ?></h1>

    <?php if(isset($user)): ?>
        <p>Usuário logado: <?php echo e($user['name']); ?></p>
    <?php else: ?>
        <p>Nenhum usuário logado.</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH /var/www/html/views/home.blade.php ENDPATH**/ ?>