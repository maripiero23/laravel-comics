
    @extends('layout.app')

    @section('content')
    <main class="bg-dark">
        <section class="jumbotron-bg"></section>
        
        <div class="container">
            <div class="current-text text-white fw-bold bg-primary p-2">
                <h5>CURRENT SERIES</h5>
            </div>
            <div class="row my-3 g-4">
                @foreach($comics as $comicsElement)
                <div class="col-2 card border-0 bg-dark">
                    <img class="img-card" src="{{$comicsElement["thumb"]}}"  alt="">
                    <div class="card-body">
                        <h6 class="text-white">{{$comicsElement["title"]}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary rounded-0 mb-3 px-4">LOAD MORE</button>
        </div>
    </main>
    <section class="banner-blu bg-primary">
        <div class="container d-flex justify-content-center py-5">
            <div class="d-flex align-items-center gap-3">
                @foreach($brands as $brand)
                <div>
                    <img class="brand-img img-fluid" src="{{Vite::asset($brand["img"])}}" alt="">
                </div>
                <div class="me-5"><a href="#" class="text-white fw-semibold">{{ $brand["title"] }}</a></div>
                @endforeach
            </div>
        </div>
    </section>
    
    @endsection
