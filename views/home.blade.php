<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">

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
