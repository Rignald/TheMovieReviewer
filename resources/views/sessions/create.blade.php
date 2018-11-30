@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Login</h1>
        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @include ('layouts.validate')

        </form>
    </div>
@endsection
