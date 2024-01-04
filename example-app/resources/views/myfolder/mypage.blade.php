<head>
    <meta charset="UTF-8">
</head>
<h1>My Page & My Folder</h1>
<h1>{{$val_a . ' ' . $val_b}}</h1>
<form method="post" action="{{ url('/my-controller4') }}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>
