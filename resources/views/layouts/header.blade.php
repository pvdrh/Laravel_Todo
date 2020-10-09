<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Danh sách công việc
            </a>
        </div>

        @foreach($menus as $menu)
            <div>
                <a href="#" style="color: blue">{{ $menu }}</a>
            </div>
        @endforeach
    </div>
</nav>
