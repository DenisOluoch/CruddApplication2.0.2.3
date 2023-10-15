@extends('layouts.app')

@section('content')
<div class="container">
    @include('messages')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach($customers as $customer)
            <tr>
              <th scope="row">{{ $customer->id }}</th>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->phone }}</td>
              <td>
                <form action="/customers/{{$customer->id }}" method="PUT">
                    @method('DELETE')
                    @csrf
                    <a href="/customers/{{ $customer->id }}"class="btn btn-sucess">View</a>
                    <a href="/customers/{{ $customer->id }}/edit"class="btn btn-sucess">Edit</a>
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>       
            </td>
         @endforeach
       </tbody>

      
 </div>
@endsection