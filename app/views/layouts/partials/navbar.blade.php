<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Malton App</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                @if (Auth::guest())
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
                @else
                <li><a href="/tasks">Tasks</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="/logout">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
