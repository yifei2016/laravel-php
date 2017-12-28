@for($i=0;$i<3;$i++)
  current $i={{$i}}
@endfor

@foreach($arr as $v)
  <h1>{{$v}}</h1>
@endforeach

