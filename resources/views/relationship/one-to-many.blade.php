
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>one to many</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1 class="text-center">One to many</h1>
    <hr>
    <div class="container">

        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Author</th>
                <th>slug</th>



            </tr>
            @foreach ( $posts as $post )

                <tr>
                       <td>{{ $loop->index+1 }}</td>
                        <td> {{ $post->name }}</td>
                        <td> {{ $post->user->name }}</td>
                        <td> {{ $post->slug }}</td>



                </tr>

             @endforeach

        </table>

{{-- <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>User</th>
                <th>Address</th>



            </tr>
        @foreach ($profiles as $profile )
        <tr>
                <th>{{ $profile->id }}</th>
                <th>{{ $profile->user->name }}</th>
                <th>{{ $profile->address }}</th>

        </tr>

        @endforeach


 </table> --}}
<hr>
    </div>


</body>
</html>
