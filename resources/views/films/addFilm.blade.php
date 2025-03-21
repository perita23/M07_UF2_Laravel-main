<x-layout>

    <body class="bg-dark text-light">

        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="card bg-secondary text-light p-4 w-100" style="max-width: 500px;">
                <h2 class="text-center mb-4">Añadir Película</h2>
                <form action="{{route('createFilm')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control bg-dark text-light border-0" id="name" name="name"
                            required placeholder="Ej. El Padrino">
                        @if ($exist)
                            <span class="text-danger">Esta película ya existe</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="year" class="form-label">Año</label>
                        <input type="number" class="form-control bg-dark text-light border-0" id="year" name="year"
                            required placeholder="Ej. 1972">
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label">Género</label>
                        <input type="text" class="form-control bg-dark text-light border-0" id="genre" name="genre"
                            required placeholder="Ej. Drama, Acción">
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">País</label>
                        <input type="text" class="form-control bg-dark text-light border-0" id="country" name="country"
                            required placeholder="Ej. EE.UU.">
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Duración (horas)</label>
                        <input type="number" class="form-control bg-dark text-light border-0" id="duration"
                            name="duration" step="0.1" required placeholder="Ej. 2.5">
                    </div>

                    <div class="mb-3">
                        <label for="img_url" class="form-label">URL de Imagen</label>
                        <input type="url" class="form-control bg-dark text-light border-0" id="img_url" name="img_url"
                            required placeholder="Ej. https://imagen.com/poster.jpg">
                        @if ($invalidUrl)
                            <span class="text-danger">Url no valida</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2">Añadir Película</button>
                </form>
            </div>
        </div>
</x-layout>