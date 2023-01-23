<header>
    <div class="bg-primary d-flex justify-content-end text-white fw-semibold">
        <div class="me-5">DC POWER VISA</div>
        <div class="me-5">ADDICTIONAL DC SITES</div>
    </div>
    <nav class="bg-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route("home")}}"><img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
                </div>
                <div class="nav-list">
                    <ul class="d-flex fw-semibold gap-4">
                        @foreach($arrayHeader as  $headerLink)
                        <li class="list-item">{{$headerLink}}</li>
                        @endforeach
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input type="search" class="form-control" placeholder="Search" aria-label="Search">
                </form>

            </div>

        </div>

    </nav>
</header>