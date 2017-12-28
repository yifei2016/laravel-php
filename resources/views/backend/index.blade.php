@extends('backend.main')

@section('menu')

    <nav id="sidebar">
        <!-- Sidebar Header -->
        <div class="sidebar-header">
            <h3>Collapsible Sidebar</div>
        </div>

        <!-- Sidebar Links -->
        <ul class="list-unstyled components">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>

            <li><!-- Link with dropdown items -->
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                    <li><a href="#">Page</a></li>
                </ul>

            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

@endsection


@section('dashboard')
    <div class="col-sm-9 main">
        @section('dashboard.content')
        <h1>this is dashboard </h1>
        @endsection
    </div>
@endsection