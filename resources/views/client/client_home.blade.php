@extends('client.layouts.app')
@section('content')

<div class="container">
Hello there ! welcome {{session()->get('client_name')}} <br>

</div>


@endsection