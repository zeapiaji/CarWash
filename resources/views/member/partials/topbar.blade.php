<!--  top bar -->
<div class="top-bar hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-bar">
                    <ul>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> carwash@gmail.com</li>
                        <li>|</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>(+62) 821 111 2222</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="top-bar-right">
                    <div class="top-menu hidden-sm">
                        <ul>
                            <li>
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            @endif
                            </li>
                            <li>|</li>
                            <li><a href="/register">Daftar</a></li>
                        </ul>
                    </div>
                    <div class="social-icon">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end top bar -->
