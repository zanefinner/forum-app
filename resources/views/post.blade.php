@include('partials.top')
<div class="container">
    <div class="section">
        <h1>{{$data['heading']}}</h1>
        <h2>{{$data['category']}}</h2>
        <p>Posted by: {{$data['author']}}</p>
        <p>{{$data['description']}}</p>
        <p>Created: <i>{{$data['created_at']}}</i></p>
        <p>Updated: <i>{{$data['updated_at'] ?? ''}}</i></p>
        <div id="options">
            <button>Reply</button>
            <button>Upvote</button>
        </div>
        @foreach (json_decode($data['replies']) as $reply)
            <div class="section">
                <h3>{{ $reply->author }}:</h3>
                <p>{{ $reply->description }}</p>
                <div id="options">
                    <button>Reply</button>
                    <button>Upvote</button>
                </div>
            </div>
        @endforeach

    </div>
    @include('partials.footer')
</div>
</body></html>