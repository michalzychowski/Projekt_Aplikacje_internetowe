@extends('layout')
@section('title', 'Przychodnia dentystyczna')

@section('content')
    <div class="container pt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($treatments as $treatment)
                    <tr>
                        <td>{{ $treatment->name }}</td>
                        <td>{{ $treatment->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
