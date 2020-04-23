@include('partials.top')
<div class="container">
    <form method="post" action="/users/signup">
    @csrf
    <input name="email" type="text" placeholder="Email"><br>
    <input name="password" type="passsword" placeholder="password"><br>
    <button type="submit">Sign Up</button>
    </form>
    Already have an account? Log in <a href="/users/login">here</a>
    @include('partials.footer')
</div>
</body></html>