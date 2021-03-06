@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/art-project.css') }}" rel="stylesheet">
@endsection

@section( 'content' )
    <p><a href="{{ route( 'art-project.create' ) }}">Create a new project</a></p>
    @foreach( $my_pics as $pic )
        <a href="{{ route( 'art-project.edit', $pic[ 'filename' ] ) }}">
            <img src="{{ URL::to( '/' ) . '/' . $pic[ 'dirname' ] . '/' . $pic[ 'basename' ] }}" class="project_thumbnail">
        </a>
    @endforeach
@endsection

@section( 'footer' )
    
@endsection
