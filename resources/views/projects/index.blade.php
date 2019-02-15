<!DOCTYPE html>

<html>
    <title>
        Projects Page
    </title>
<body>

<ul>
    @foreach ($projects as $pro)
        <a href ="/projects/{{$pro->id}}">
            <li>{{ $pro->desc }} </li>
        </a>

    @endforeach
</ul>

</body>
</html>
