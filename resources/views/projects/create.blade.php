<!DOCTYPE html>

<html>
<head>
 <title>
        New Projects 
    </title>
</head>

<body>
    <h1 class="title"> New Record </h1>
    <form method="POST" action="/projects">

    {{ csrf_field() }}

        <div class='field'>
            <label class='label' for='desc'>Name</label>

            <div class='control'>
                <input type="text" class="input {{ $errors->has('desc') ? 'is-danger' : ''}}" name="desc" value="{{old('desc')}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="number">Number</label>
            <div class='control'>
                <input type="text " class="input {{ $errors->has('number') ? 'is-danger' : ''}}" name="number" value="{{old('number')}}">
            </div>
        </div>

        <div>
            <button type="submit">Add record!</button>
        </div>

        @if ($errors->any())
            <div class='notification is-danger'>
                <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                </ul>
            </div>
        @endif


                    


    
    </form>

</body>
</html>