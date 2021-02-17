@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add Contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>

          <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="notes">Notes:</label>
              <!-- input type="text" class="form-control" name="notes"/ -->
              <textarea name="notes" class="form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add Contact</button>
      </form>
  </div>
</div>
</div>
@endsection