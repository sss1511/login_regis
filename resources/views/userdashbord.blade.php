
<html>
<h1>welocme to userdashbord</h1>



@if (session('status'))
<div class="alert alert-success" role="alert">
<p> sucessfully loged in in user dashbord </p>
	<button type="button" class="close" data-dismiss="alert">×</button>
<p>	{{ session('status') }}</p>
</div>

@endif

<p>{{ Auth::user()->username}}</p>





<a href="logout"> logout</a>






