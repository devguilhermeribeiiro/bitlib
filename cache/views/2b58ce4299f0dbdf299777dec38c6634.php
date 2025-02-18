<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <style>
        .file-input {
            display: none; /* Esconde o input real */
        }

        .file-label {
            display: inline-block;
            background-color: #4CAF50; /* Cor de fundo */
            color: white; /* Cor do texto */
            padding: 10px 20px; /* Espaçamento interno */
            cursor: pointer; /* Mostra um cursor de ponteiro */
            border-radius: 5px; /* Bordas arredondadas */
            font-size: 16px; /* Tamanho da fonte */
        }

        .file-label:hover {
            background-color: #45a049; /* Cor do fundo ao passar o mouse */
        }

        /* Exibe o nome do arquivo selecionado */
        .file-name {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }
    </style>

</head>
<body>
    <input type="file" name="file" id="file" class="file-input">
    <label for="file" class="file-label">Escolher arquivo</label>
    <p class="file-name" id="file-name">Nenhum arquivo selecionado</p>
    <button id="openModal">Abrir modal</button>
    <dialog id="dialog">
        <h1>OI</h1>
        <button id="closeModal">Fechar modal</button>
    </dialog>
    <script>
    // Exibe o nome do arquivo selecionado
    document.getElementById('file').addEventListener('change', function() {
        const fileName = document.getElementById('file-name');
        fileName.textContent = this.files.length > 0 ? this.files[0].name : 'Nenhum arquivo selecionado';
    });
    
    const dialog = document.getElementById("dialog");
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");

    openModal.addEventListener('click', () => {
        dialog.showModal();
    });

    closeModal.addEventListener('click', () => {
        dialog.close();
    });
    </script>
</body>
</html>
<?php /**PATH /var/www/html/views/home.blade.php ENDPATH**/ ?>