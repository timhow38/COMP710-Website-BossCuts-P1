@extends('layouts.app')

@section('content')
<div class="container"style="padding-top:10em;">
    <h1 class="text-center">{{$title}}</h1>
    @if(count($services) > 0)
    <table class="table"> 
        <thead class="thead-dark">
            <tr>
                @foreach($services as $service)
                    <th scope="col">{{$service}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($priceskid as $pricek)
                <td>Under 5: {{$pricek}}</td>
            @endforeach
            </tr>
            <tr>
            @foreach($pricesstudent as $prices)
                <td>Student: ${{$prices}}</td>
            @endforeach
            </tr>
            <tr>
            @foreach($pricesadult as $pricea)
                <td>Adult: ${{$pricea}}</td>
            @endforeach
            </tr>

        </tbody>
    </table>
    @endif
</div>
@endsection