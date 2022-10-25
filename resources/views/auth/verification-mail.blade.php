
<h1>Verify your account.</h1>

<p>Welcome {{$user->name}}</p>

<p>Please click on the verification link to verify your account.</p>
<p>
    <a href="{{url('/verification/' . $user->id . '/'. $user->remember_token)}}">Click here</a>
</p>
