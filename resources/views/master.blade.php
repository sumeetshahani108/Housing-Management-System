<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav pull-right">
                @if(Auth::user())
                    <a href="{{ route('get.owner.apartments') }}"><button> Get Apartments </button></a>
                @else
                @endif
            </ul>
        </div>
    </div>
</body>