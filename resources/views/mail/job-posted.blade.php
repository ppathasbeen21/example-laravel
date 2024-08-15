<h2>
    {{ $job->title }}
</h2>
<p>
    Parabens! Sua vaga foi postada em nosso site.
    <br>
    Poste outras vagas
</p>

<p>
    Veja sua <a href="{{ url('/jobs/' . $job->id) }}">Vaga de {{ $job->title }}</a>
</p>
