<x-layout>

    @if($actors->isEmpty())
        <div class="d-flex justify-content-center align-items-center vh-10 pt-4">
            <div class="bg-danger text-white fw-bold fs-4 p-4 rounded shadow-lg bg-opacity-75 border border-light">
                No se ha encontrado ningun actor
            </div>
        </div>
    @else
        <div class="d-flex justify-content-center">
            <div>
                <form action="{{route('listActor')}}" method="get" class="d-flex align-items-center gap-2 mt-4">
                    @csrf
                    @method('GET')
                    <label for="decade" class="form-label fw-bold">Filtrar por década:</label>
                    <select name="decade" id="decade" class="form-select">
                        <option value="1980-1989">1980-1989</option>
                        <option value="1990-1999">1990-1999</option>
                        <option value="2000-2009">2000-2009</option>
                        <option value="2010-2019">2010-2019</option>
                        <option value="2020-2029">2020-2029</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>

            </div>
        </div>
        <div class="d-flex justify-content-center">

            <div class="d-flex w-75 justify-content-center pt-4 gap-4 flex-wrap">

                @foreach($actors as $actor)
                    <div class="card mb-3 shadow-sm border-0 rounded overflow-hidden" style="width: 440px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{$actor['img_url']}}" class="w-100 h-100 object-fit-cover rounded-start"
                                    alt="{{$actor->name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{$actor->name . $actor->surname}}</h5>
                                    <p class="card-text text-muted mb-1"><i class="bi bi-calendar"></i> {{$actor->birthdate}}
                                    </p>
                                    <p class="card-text mb-1"><i class="bi bi-film"></i> {{$actor->country}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</x-layout>