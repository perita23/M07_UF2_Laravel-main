<x-layout>
    <div style="height: 80vh" class="d-flex flex-row">
        <div class="w-100 d-flex justify-content-center">
            <div class="w-100 h-50 align-center text-light" style="margin-top: 10vh;">
                <h1 style="font-size: 60px" class="text-light text-center">Bienvenido a StuFilms</h1>
                <h2 style="color: rgb(89, 48, 237)" class="text-center">Revisa nuestra catalogo y descubre los ultimos
                    lanzamientos</h2>
                <div style="margin-top: 5vh" class="d-flex justify-content-center gap-3">
                    <a href="{{ route('filmsByYear') }}" class="btn btn-primary">Ver cartelera</a>
                    <a href="{{ route('newFilms') }}" class="btn btn-secondary">Ultimos lanzamientos</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>