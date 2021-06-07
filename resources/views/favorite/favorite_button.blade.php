@if(Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route'=>['favorites.unfavorite', $micropost->id],'method'=>'delete']) !!}
        {!! Form::submit('Unfavorite', ['class'=>"btn mt-2 btn-secondary"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route'=>['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class'=>"btn mt-2 btn-success"]) !!}
    {!! Form::close() !!}
@endif
