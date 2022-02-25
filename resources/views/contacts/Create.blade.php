@extends('layout.app')
@section('title')
    This is create
@endsection
@push('css')
    <style>
       .lb
       {
           color: red;
       }
    </style>
@endpush
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('store') }}" method="post">

                <label class="lb">Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@endsection
@push('js')
    <script>
        alert();
    </script>
@endpush
