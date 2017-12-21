<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div class="container">
        <br/><br/>

        @if(count($errors))
        <div class="form-group">
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

        <form action="/post" method='post'>
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">URL:</label>
                <input type="url" class="form-control" name='url' placeholder="Enter URL" required>
            </div>

            <button type="submit" class="btn btn-primary">Short</button>
        </form>

        <br/><br/>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Orignal</th>
                    <th scope="col">Id</th>
                    <th scope="col">Short</th>

                </tr>
            </thead>
            <tbody>
                @foreach($urls as $key=>$url)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{$url->url}}</td>
                    <td><a href="view/{{$url->id}}">{{$url->id}}</a></td>
                    <td><a href="view/{{$url->id}}">{{$url->short}}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    <script>

    </script>
</body>
</html>
