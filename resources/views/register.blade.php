<a href="/">Home</a>


<center>
    <h1>S'inscrire</h1>
    
    <form method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <input type="text" id="name" name="name" placeholder="name" value="{{old('name')}}">
        @if ($errors->has('name'))
            <p class="error">{{$errors->first('name')}}</p>
        @endif
        <br><br>

        <input type="email" id="email" name="email" placeholder="email" value="{{old('email')}}">
        @if ($errors->has('email'))
            <p class="error">{{$errors->first('email')}}</p>
        @endif
        <br><br>

        <input type="password" id="password" name="mot_de_passe" placeholder="password" value="{{old('mot_de_passe')}}">
        @if ($errors->has('mot_de_passe'))
            <p class="error">{{$errors->first('mot_de_passe')}}</p>
        @endif
        <br><br>

        <input type="submit" value="Envoyer">
    </form>
</center>