window.addEventListener('DOMContentLoaded', event => {
    
    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
    const datatablesSimple1 = document.getElementById('datatablesSimple1');
    if (datatablesSimple1) {
        new simpleDatatables1.DataTable(datatablesSimple1);
    }
    const datatablesSimple2 = document.getElementById('datatablesSimple2');
    if (datatablesSimple2) {
        new simpleDatatables2.DataTable(datatablesSimple2);
    }
});
