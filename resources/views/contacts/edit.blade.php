@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Contact</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" name="firstname" value="{{ $contact->firstname }}" />
            </div>

            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" name="lastname" value="{{ $contact->lastname }}" />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $contact->email }}" />
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" />
            </div>
            <div class="form-group">
                <label for="notes">Notes:</label>
                <!-- input type="text" class="form-control" name="notes" value="{{ $contact->notes }}" / -->
                <textarea name="notes" class="form-control">{{ $contact->notes }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection