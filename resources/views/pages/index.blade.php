@extends('layout')
<br>
<div class="col-sm-offset-5 col-sm-2 text-center">
<a class="btn btn-warning btn-lg center-block" href="{{ route('pages.create') }}"> Dodaj Video ! </a>
</div>
@section('content')
<h2>Najlepsze filmy</h2>
@foreach($pages as $page)
<div class="col-xs-12 col-md-6 col-lg-4 single-video">
        <div class="card">
        
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $page->url }}" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="card-content">
                <a href="{{ url('pages', $page->id) }}">
                    <h4>{{ $page->title }}</h4>
                </a>
                <p>{{ str_limit($page->content, $limit=40) }}</p>
                <span class="upper-label">Dodał</span>
                <span class="video-author">{{ $page->nick }}</span>
                <br>
                <td>
                <a class="btn btn-info" href="{{route('pages.edit', $page)}}">Edytuj video</a></td><td>
                  <td>
                    {!! Form::model($page, ['route' => ['pages.delete', $page], 'method' => 'DELETE']) !!}
                    <br><button class="btn btn-danger">usuń video</button>
                    {!! Form::close() !!}
      </td>
            </div>
            
        </div>
    </div>
    @endforeach

{{ $pages->links() }}
@endsection
