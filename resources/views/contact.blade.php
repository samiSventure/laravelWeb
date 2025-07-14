{{--<h1>Welcome : {{$users[3]}}</h1>--}}
{{$email}}
@foreach($users as $user)
    {{$user}} <br>
@endforeach



@if($email=="Sami@gmail.com")
    {{$email}}
@else
    email not Match
@endif
<br>
@for ($i = 0; $i < 10; $i++)
    {{ $i }}
@endfor

