<form action="/login" method="POST">
    @csrf


    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    @error('email')
    <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="password">Password</label>
    <input type="password" name="password" id="password">


    <button type="submit">Login</button>
</form>
