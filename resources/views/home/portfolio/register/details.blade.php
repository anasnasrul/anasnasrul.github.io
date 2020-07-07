<div class="row">
    <div class="col-md-12" id="register">
        <div class="card col-md-8">
            <div class="card-body">
                <h4 class="card-title">Register</h4>
                <hr>
                <form action="/portfolio/register" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                        <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                    </div>

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
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                        
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea name="address" placeholder="Address" id="address" class="form-control"></textarea>
                        <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-outline-info col-md-2">Register</button>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>