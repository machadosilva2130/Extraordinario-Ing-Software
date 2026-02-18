document.getElementById("formProducto").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("productos/crear.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        alert(data);
        this.reset();
    });
});

function cargarProductos() {
    fetch("productos/listar.php")
    .then(res => res.json())
    .then(data => {
        let lista = document.getElementById("lista");
        lista.innerHTML = "";
        data.forEach(p => {
            lista.innerHTML += `<li>${p.nombre} - Stock: ${p.stock_actual}</li>`;
        });
    });
}




function cargarMovimientos() {
    fetch("movimientos/listar.php")
    .then(res => res.json())
    .then(data => {
        let lista = document.getElementById("listaMovimientos");
        lista.innerHTML = "";
        data.forEach(m => {
            lista.innerHTML += `<li>
                Folio: ${m.folio} | 
                Producto: ${m.nombre} | 
                Tipo: ${m.tipo_movimiento} | 
                Cantidad: ${m.cantidad}
            </li>`;
        });
    });
}
