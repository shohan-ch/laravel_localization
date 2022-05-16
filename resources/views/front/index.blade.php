@extends("front.common.master")

@section("content")

{{-- <h2>Welcome Page</h2> --}}



<div class="container-fluid">
    <h2>Registration Form</h2>


    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form action="{{ route(" store") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name" value="{{ old(" email") }}">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="name" value="{{ old(" email") }}">
                </div>


                <button class="btn btn-danger mt-3" type="submit">Save</button>

            </form>

        </div>

    </div>



</div>



@forelse ( $array as $data )

<p>{{ $data }}</p>

@empty

<p>No data foumd</p>


@endforelse



@endsection