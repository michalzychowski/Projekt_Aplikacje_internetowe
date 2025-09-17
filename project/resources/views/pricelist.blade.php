@extends('layout')
@section('title', 'Przychodnia dentystyczna')

<style>
    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url("/image/background.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(5px);
    }
</style>

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
