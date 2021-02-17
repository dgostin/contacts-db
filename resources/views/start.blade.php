@extends('base')

@section('main')

<div class="jumbotron vertical-center"> 
    
    <div class="container">
        <div class="row">
        <div class="col text-center">

          <a href="{{ route('contacts.index') }}" class="btn btn-primary">Contacts</a>

        </div>
      </div>
    </div>

</div>

    

@endsection