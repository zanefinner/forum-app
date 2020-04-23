@include('partials.top')
<div class="container">
    <form action = "/posts/new" method="post">@csrf
        Select a Tag:<select name="tag">
            @foreach($tags as $tag)
            <option value="{{ $tag }}">{{ $tag }}</option>
            @endforeach
          </select><br>
        <input type='text' name='heading' placeholder='Title'><br>
        <textarea style="height: 400px; width: 100%" name="description" placeholder="Write your content here"></textarea>
        <button type="submit">Write</button>
    </form>
</div>
@include('partials.footer')
</body></html>