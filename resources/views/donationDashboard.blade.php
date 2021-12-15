@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <table style="width: 95%" class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Limit</th>
                                <th scope="col">Description</th>
                                <th scope="col">Donate</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($goals as $goal)
                                <tr>
                                    <td>{{$goal['name']}}</td>
                                    <td>{{$goal['limit']}}</td>
                                    <td>{{$goal['description']}} </td>
                                    <td> @if (Auth::check())  <a class="btn btn-danger" href="/donate/verwijderen/{{$goal['id']}}">Donate</a> @else  pls log in to donate @endif</td>


                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
