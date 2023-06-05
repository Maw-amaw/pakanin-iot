@extends('laptops.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 mt-3">
            <h2>Data Laptop</h2>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Merk</th>
        </tr>

        @foreach ($ph as $data)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $data->PH }}</td>
            <td>
                <form action="{{ route('data.destroy',$data->id) }}" method="POST">
                @csrf
                    <a class="btn btn-info" href="{{ route('data.show',$data->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('data.edit',$data->id) }}">Edit</a>
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection