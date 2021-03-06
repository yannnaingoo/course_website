@extends('layouts.app')

@section('content')

<div class="container">
   <section>
    <b-jumbotron>
        <template v-slot:header>{{$series->title}}</template>
    
        <template v-slot:lead>
          {{$series->description}}
        </template>
    
        <hr class="my-4">
    
        <b-button variant="primary" href="#">Start Series</b-button>
        <b-button variant="success" href="#">Subscribe</b-button>
      </b-jumbotron>
   </section>
   {{-- {{ $videos }} --}}

   <section>
    <h3>Episodes</h3>
<<<<<<< HEAD
       <episodes :videos="{{$series->videos}}"></episodes>
       {{-- @foreach ($videos as $video)
       <b-card no-body class="overflow-hidden mb-2">
          <b-row no-gutters>
              <b-col md="2">
                  <b-button>{{$video->episode_number}}</b-button>
              </b-col>
              <b-col md="10">
              <b-card-body title="{{$video->title}}">
                      <b-card-text>
                          {{$video->description}}
                      </b-card-text>
                  </b-card-body>
              </b-col>
          </b-row>
      </b-card>
      @endforeach --}}
=======
    {{-- {{ videos }} must be between " " --}}
       <episodes :videos="{{ $videos }}"></episodes>
>>>>>>> 72c9e4cbafdf5c342e1e8f4783d1d254247216a8
   </section>
  </div>

@endsection