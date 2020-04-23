<form method="post" action="/users/login">
@csrf
<input name="email" type="text" placeholder="Email"><br>
<input name="name" type="text" placeholder="Full Name"><br>
<input name="password" type="passsword" placeholder="password"><br>
<button type="submit">Log in</button>
</form>Don't have an account? Sign up <a href="/users/signup">here</a>