<x-app>
    <main id="medication" class='index'>
        <header>
            <h1>Medications</h1>
            <h2>{{ $patient->name }}</h2>
        </header>


        <x-med-table :patient="$patient"/>
    </main>
</x-app>
