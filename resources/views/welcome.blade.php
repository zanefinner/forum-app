@include('partials.top')
<div class="container">
    <h1 class="text-center">Welcome!</h1>
    <div class="section">
        <h2>Message of the Day</h2>
        <p>{{$message}}</p>
        <div id="options">
            <button>Reply</button>
            <button>Upvote</button>
        </div>
    </div>
    @include('partials.footer')
</div>
</body></html>