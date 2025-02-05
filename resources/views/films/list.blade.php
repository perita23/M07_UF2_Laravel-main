<x-layout>
    @if($films->isEmpty())
        <div class="d-flex justify-content-center align-items-center vh-10 pt-4">
            <div class="bg-danger text-white fw-bold fs-4 p-4 rounded shadow-lg bg-opacity-75 border border-light">
                No se ha encontrado ninguna película
            </div>
        </div>


    @else
        <div class="d-flex justify-content-center">
            <div class="d-flex w-75 justify-content-center pt-4 gap-4 flex-wrap">

                @foreach($films as $film)
                    <div class="card mb-3 shadow-sm border-0 rounded overflow-hidden" style="width: 440px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$film['img_url']}}" class="w-100 h-100 object-fit-cover rounded-start"
                                    alt="{{$film->name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{$film->name}}</h5>
                                    <p class="card-text text-muted mb-1"><i class="bi bi-calendar"></i> {{$film->year}}</p>
                                    <p class="card-text mb-1"><i class="bi bi-film"></i> {{$film->genre}}</p>
                                    <p class="card-text mb-1"><i class="bi bi-geo-alt"></i> {{$film->country}}</p>
                                    <p class="card-text"><i class="bi bi-clock"></i> {{$film->duration}} horas</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    @endif

</x-layout>
<h1>{{$title}}</h1>