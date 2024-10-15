<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="#libros-recomendados">Libros recomendados</a></li>
                <li><a href="#mas-vendidos">Más vendidos</a></li>
                <li><a href="#generos">Géneros</a></li>
                <li><a href="#anos">Años</a></li>
            </ul>
        </nav>
    </header>

    <!-- Secciones -->
    <main>
        <section id="libros-recomendados">
            <h2>Libros recomendados</h2>
            <ul>
                <li>
                    <img src="imagen-del-libro1.jpg" alt="Imagen del libro 1">
                    <h3>El señor de los anillos</h3>
                    <p>Breve descripción del libro 1</p>
                </li>
                <li>
                    <img src="imagen-del-libro2.jpg" alt="Imagen del libro 2">
                    <h3>Harry Potter y la piedra filosofal</h3>
                    <p>Breve descripción del libro 2</p>
                </li>
                <!-- Más libros recomendados -->
                <li>
                    <img src="imagen-del-libro3.jpg" alt="Imagen del libro 3">
                    <h3>El código Da Vinci</h3>
                    <p>Breve descripción del libro 3</p>
                </li>
            </ul>
            <button>Ver más</button>
        </section>

        <section id="mas-vendidos">
            <h2>Más vendidos</h2>
            <ul>
                <li>
                    <img src="imagen-del-libro4.jpg" alt="Imagen del libro 4">
                    <h3>El hobbit</h3>
                    <p>Breve descripción del libro 4</p>
                </li>
                <li>
                    <img src="imagen-del-libro5.jpg" alt="Imagen del libro 5">
                    <h3>La sombra del viento</h3>
                    <p>Breve descripción del libro 5</p>
                </li>
                <!-- Más libros vendidos -->
            </ul>
            <button>Ver más</button>
        </section>

        <section id="generos">
            <h2>Géneros</h2>
            <ul>
                <li><a href="#">Ficción</a></li>
                <li><a href="#">No ficción</a></li>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Terror</a></li>
                <!-- Más géneros -->
            </ul>
            <button>Ver más</button>
        </section>

        <section id="anos">
            <h2>Años</h2>
            <ul>
                <li><a href="#">2022</a></li>
                <li><a href="#">2021</a></li>
                <li><a href="#">2020</a></li>
                <!-- Más años -->
            </ul>
            <button>Ver más</button>
        </section>
    </main>

    <!-- Botones de acción -->
    <footer>
        <button id="acordar-entrega">Acordar día de retirar libro</button>
        <button id="devolver-libro">Devolver libro</button>
    </footer>

    <!-- Formularios para acordar día de retirada y devolución -->
    <div id="formulario-entrega">
        <h2>Acordar día de retirada</h2>
        <form>
            <label for="fecha-entrega">Fecha de entrega:</label>
            <input type="date" id="fecha-entrega" name="fecha-entrega">
            <label for="hora-entrega">Hora de entrega:</label>
            <input type="time" id="hora-entrega" name="hora-entrega">
            <button type="submit">Acordar</button>
        </form>
    </div>

    <div id="formulario-devolucion">
        <h2>Devolver libro</h2>
        <form>
            <label for="libro-devolucion">Libro a devolver:</label>
            <input type="text" id="libro-devolucion" name="libro-devolucion">
            <label for="fecha-devolucion">Fecha de devolución:</label>
            <input type="date" id="fecha-devolucion" name="fecha-devolucion">
            <button type="submit">Devolver</button>
        </form>
    </div>

    <!-- Script para mostrar y ocultar los formularios -->
    <script>
        const botonAcordar = document.getElementById('acordar-entrega');
        const botonDevolver = document.getElementById('devolver-libro');
        const formularioEntrega = document.getElementById('formulario-entrega');
        const formularioDevolucion = document.getElementById('formulario-devolucion');

        botonAcordar.addEventListener('click', () => {
            formularioEntrega.classList.add('show');
        });

        botonDevolver.addEventListener('click', () => {
            formularioDevolucion.classList.add('show');
        });

        formularioEntrega.addEventListener('click', (e) => {
            if (e.target === formularioEntrega) {
                formularioEntrega.classList.remove('show');
            }
        });

        formularioDevolucion.addEventListener('click', (e) => {
            if (e.target === formularioDevolucion) {
                formularioDevolucion.classList.remove('show');
            }
        });
    </script>
</body>

</html>