<script>
let carrito = [];
let total = 0;

function agregarAlCarrito(nombre, descripcion, precio) {
    carrito.push({ nombre, descripcion, precio });
    total += precio;
    actualizarCarrito();
}

function actualizarCarrito() {
    const listaCompras = document.getElementById('lista-compras');
    listaCompras.innerHTML = '';
    carrito.forEach(item => {
        let li = document.createElement('li');
        li.textContent = `${item.nombre} - ${item.descripcion} - $${item.precio}`;
        listaCompras.appendChild(li);
    });
    document.getElementById('total').innerText = total;
    actualizarContadorCarrito();
}

function actualizarContadorCarrito() {
    const contador = document.getElementById('contador-carrito');
    contador.innerText = carrito.length;
    contador.style.display = carrito.length > 0 ? 'inline-block' : 'none';
}

function mostrarCarrito() {
    document.getElementById('modal').style.display = 'block';
}

function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
}
</script>