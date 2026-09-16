<form action="/register" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    @error('name')
    <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    @error('email')
    <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    @error('password')
    <div style="color: red;">{{ $message }}</div>
    @enderror

    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation">

    <button type="submit">Register</button>
</form>
