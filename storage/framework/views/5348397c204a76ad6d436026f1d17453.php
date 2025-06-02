<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
    <h1>Laravel</h1>
    <?php echo '<p>Elemento gerado pelo php</p>'; ?>
    <?php $teste = true; ?>
    <?php if( ($teste) ) { ?>
    <?php echo '<p>Verdadeiro</p>'; ?>
    <?php } ?>
    <?php if($teste): ?>
        <p>Verdadeiro</p>
    <?php endif; ?>
    <?php for($i = 0; $i < 3; $i++): ?>
        <p>Execução <?php echo e($i); ?> do for</p>
    <?php endfor; ?>
</body>

</html>
<?php /**PATH C:\Users\Leo_s\Documents\ProjetoAula3\resources\views/welcome.blade.php ENDPATH**/ ?>