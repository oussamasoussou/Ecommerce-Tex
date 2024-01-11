@php
    $ip = request()->ip();
    $paniers = \App\Models\Panier::where('ip', $ip)->get();
@endphp

<div class="panier">
    <h3>Panier</h3>
    <ul>
        @foreach ($paniers as $panier)
            <li>{{ $panier->nom_produit }} - {{ $panier->prix }} TND</li>
        @endforeach
    </ul>
</div>
