<footer class="footer-bg">
    <div class="container overflow-hidden py-5">

        <div class="d-flex gap-3 text-secondary">
            <div>

                <ul>
                    <li class="list-item">
                        <h5>DC COMICS</h5>
                        @foreach($arrayFooter[0] as $footerLink)
                        <div>
                            {{$footerLink}}
            
                        </div>
                            
                        @endforeach
            
                    </li>
                </ul>
                <ul>
                    <li class="list-item">
                        <h5>SHOP</h5>
                        @foreach($arrayFooter[1] as $footerLink)
                        <div>
                            {{$footerLink}}
                        </div>
                            
                        @endforeach
            
                    </li>
                </ul>
            </div>
            
            <div class="d-flex gap-3">

                <ul>
                    <li class="list-item">
                        <h5>DC</h5>
                        @foreach($arrayFooter[2] as $footerLink)
                        <div>
                            {{$footerLink}}
                        </div>
                        @endforeach
            
                    </li>
                </ul>
            </div>
            <div class="d-flex gap-3">

                <ul>
                    <li class="list-item">
                        <h5>SITES</h5>
                        @foreach($arrayFooter[3] as $footerLink)
                        <div>
                            {{$footerLink}}
                        </div>
                        @endforeach
            
                    </li>
                </ul>
            </div>

            <div class="dc-logo-bg">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
        <div class="ps-4 text-secondary">
            <small> Sites Content TM and &#xA9; 2020 DC Entertainment, unless otherwise <span class="text-primary">notted here.</span>All rights reserved
            <span class="text-primary">Cookies Setting</span></small>
        </div>
    </div>
    <div class="banner-footer bg-dark">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <div>
                <button type="button" class="btn btn-dark border-primary">
                    <h6>SIGN-UP NOW</h6>
                </button>
            </div>

            <div class="d-flex justify-content-center align-items-center gap-3">
                <div><a href=""><h6 class="text-primary">FOLLOW US</h6></a></div>
                @foreach($iconsFooter as $imgicon)
                <div><a href="#"><img src="{{ Vite::asset($imgicon)}}" alt=""></a></div>
                    
                @endforeach
            </div>

        </div>

    </div>
</footer>