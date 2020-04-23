@include('partials.top')
<body>
    <h1>{{$data['heading']}}</h1>
    <h2>{{$data['category']}}</h2>
    <p>Posted by: {{$data['author']}}</p>
    <hr>
    <p>{{$data['description']}}</p>
    <p>Created: <i>{{$data['created_at']}}</i></p>
    <p>Updated: <i>{{$data['updated_at'] ?? ''}}</i></p>
    @include('partials.footer')
</body></html>