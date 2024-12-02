<nav>
    <div class="dropdown">
        <div class="header">File</div>
        <div class="dropdown-content hidden">
            <z id="quit" onclick="">Quit</z>
        </div>
    </div>

    <div class="dropdown">
        <div class="header">Gerbers</div>
        <div class="dropdown-content hidden">
            @foreach ($patients as $patient)
                <z onclick="updatePatient(`{{ $patient->id }}`)">{{ $patient->first_name }}</z>
            @endforeach
        </div>
    </div>

    <div class="dropdown">
        <div class="header">Medications</div>
        <div class="dropdown-content hidden">
            <a href="{{ route('medication.index') }}">List Medications</a>
            <a href="{{ route('medication.create') }}">Add Medication</a>
            <a href="{{ route('medication.print') }}">Print Medications</a>
        </div>
    </div>

    <div class="dropdown">
        <div class="header">Diagnoses</div>
        <div class="dropdown-content hidden">
            <a href="{{ route('diagnosis.index') }}">List Diagnoses</a>
            <a href="{{ route('diagnosis.create') }}">Add Diagnosis</a>
            <a href="{{ route('diagnosis.print') }}">Print Diagnoses</a>
        </div>
    </div>

    <a href="{{ route('report') }}">Weekly Report</a>


</nav>

<script type='module'>
    $(() => {
        let activeDropdown = null;

        $("#quit").on('click', function() {
            window.location.assign("{{ route('quit') }}");
        });

        $(document).on('click', '.dropdown', function(e) {
            e.stopPropagation();
            const dropdownContent = $(this).find('> .dropdown-content');

            if (dropdownContent.hasClass('hidden')) {
                if (activeDropdown) {
                    activeDropdown.addClass('hidden');
                }
                dropdownContent.removeClass('hidden');
                activeDropdown = dropdownContent;
            } else {
                dropdownContent.addClass('hidden');
                activeDropdown = null;
            }
        });

        $(document).on('click', function() {
            if (activeDropdown) {
                activeDropdown.addClass('hidden');
                activeDropdown = null;
            }
        });
    });

    window.updatePatient = (id) => {
        axios.post('{{ route('patient.select') }}', {
                id: id
            })
            .then(response => {
                console.log(response.data.message);

                const name = response.data.name;

                $("footer>.left").html(`Current Patient: ${name}`);
                $("footer>.right").html(`<span class='message'>${response.data.message}</span>`);

                setTimeout(() => {
                    $("footer>.right .message").fadeOut(2000,
                function() { // Fadeout lasts for 2000ms (2 seconds)
                        $(this).html("");
                        $(this).show();
                    });
                }, 7000); // Fadeout begins at 7000ms (7 seconds)
            })
            .catch(error => {
                console.error(error);
            });
    }
</script>
