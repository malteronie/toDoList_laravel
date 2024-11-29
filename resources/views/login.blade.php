<a href="/">Home</a>


<center><h1>Se Connecter</h1>

<div class="card">
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
    
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <p class="error">{{$errors->first('email')}}</p>
                @endif
                <br><br>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password">
                @if ($errors->has('password'))
                <p class="error">{{$errors->first('password')}}</p>
                @endif
                <br><br>
                <button class="btn btn-primary">Se connecter</button>
                <a href="/register">s'inscrire</a>
            </div>
        </form>
    </div>
</div>
</center>