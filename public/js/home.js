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
