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
    {{-- {{ videos }} must be between " " --}}
       <episodes :videos="{{ $videos }}"></episodes>
   </section>
  </div>

@endsection