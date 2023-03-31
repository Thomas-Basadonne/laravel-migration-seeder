<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
     {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
    <h1>treni</h1>

    <div class="container">
        <div class="row">
            @foreach($trains as $train)
                <div class="col-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->codice_treno }}</h5>
                            <p class="card-text">Partenza: {{ $train->orario_partenza }}</p>
                            <p class="card-text">Arrivo: {{ $train->orario_arrivo }}</p>
                            <p class="card-text">Azienda: {{ $train->azienda }}</p>
                            <p class="card-text">Stazione partenza: {{ $train->stazione_partenza }}</p>
                            <p class="card-text">Stazione arrivo: {{ $train->stazione_arrivo }}</p>
                            <p class="card-text">Numero carrozze: {{ $train->numero_carrozze }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">In orario: {{ $train->in_orario ? 'Si' : 'No' }}</small>
                                <small class="text-muted">Cancellato: {{ $train->cancellato ? 'Si' : 'No' }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>
