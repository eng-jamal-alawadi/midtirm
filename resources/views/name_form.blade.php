@extends('layouts.app')
@section('content')
<!DOCTYPE html>

    <div class="container">

        {{-- @foreach ($products as $product)

        @endforeach --}}

        <div>
            <h3>Please enter you name: </h3>
            <form class="form-inline" method="post" action="name_form">
                @csrf
                <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ" />

                <div class="form-group">
                    <input type="text" class="form-control" name="name" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <hr>
            <h3>Hello, {{$name}}</h3>
        </div>
    </div>

@endsection
