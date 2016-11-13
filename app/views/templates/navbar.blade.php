<div class="app-bar">
    <div style="width:80%; margin:0 auto;">
        <a class="app-bar-element" href="/">CSSOCUK</a>
            @if(Auth::check())
            <div class="app-bar-element place-right">
                <a class="dropdown-toggle fg-white">
                    <div class="image-container rounded"><img style="width: 50px;height: 46px;" src="/images/logo.png"></div> </a>&nbsp;
                <div class="app-bar-drop-container bg-white fg-dark place-right"
                     data-role="dropdown" data-no-close="true">
                    <div class="padding20 align-center" style=" width: 400px;">
                        <h4 class="text-light">You are logged in as Salford Computing Society</h4>
                        <a class="button success full-size" href="/settings">Settings</a>
                    </div>
                </div>
            </div>
            @else
            <div class="app-bar-element place-right">
                <a class="dropdown-toggle fg-white"><span class="mif-enter"></span> Enter</a>
                <div class="app-bar-drop-container bg-white fg-dark place-right"
                     data-role="dropdown" data-no-close="true">
                    <div class="padding20">
                        {{ Form::open( array('url' => '/login', 'method' => 'POST')) }}
                        <h4 class="text-light">Login</h4>
                        <div class="input-control text">
                            <span class="mif-user prepend-icon"></span>
                            {{Form::text('email', null, array('placeholder' => 'Email'))}}
                        </div>
                        <div class="input-control text">
                            <span class="mif-lock prepend-icon"></span>
                            {{Form::password('password', null, array('placeholder' => 'Password'))}}
                        </div>
                        {{Form::submit('Login',array('class'=> 'button primary full-size'))}}
                        {{ Form::close(); }}
                        <a class="button success full-size" href="/register">Register</a>
                    </div>
                </div>
            </div>
            @endif
    </div>
</div>