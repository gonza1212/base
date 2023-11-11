<x-app-layout>
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h2 class="mt-5">Inicio</h2>
                <hr class="hr-80">
            </div>
            <p>Algunos links rápidos...</p>
            <hr>
            <p>Datos de usuario:</p>
            <p>{{ \Auth::user() }}</p>
        </div>
    </div>
</x-app-layout>