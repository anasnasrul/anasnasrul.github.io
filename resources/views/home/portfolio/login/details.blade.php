<form action="/portfolio/login" method="post">

    @csrf

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
        <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
    </div>

    <div class="form-group">
        <button class="btn btn-outline-info col-md-2"> Login</button>
    </div>

</form>