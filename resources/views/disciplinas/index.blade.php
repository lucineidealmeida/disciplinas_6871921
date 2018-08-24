<a href="/disciplinas/create">CADASTRAR DISCIPLINA</a>
<ul>
@foreach ($disciplinas as $disciplina)
	<li><a href="/disciplinas/{{$disciplina->id}}">{{ $disciplina->titulo }}</a></li>
@endforeach
</ul>