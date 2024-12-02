@props(['patient'])

<table>
    <thead>
        <tr>
            <th>Status</th>
            <th>Rx ID</th>
            <th>Name</th>
            <th>Dosage</th>
            <th>Instructions</th>
            <th>
                <div>Prescriber</div>
                <div>Specialty</div>
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($patient->medications as $med)
            @dd($patient->medications->toArray(), $med->toArray())
            <tr>
                <td class='updateLink' data-id='{{ $med->id }}'>{{ ucfirst($med->status) }}</td>
                <td>{{ $med->rxid ?? '' }}</td>
                <td>{{ $med->display }}</td>
                <td>{{ $med->dosage }}</td>
                <td>{{ $med->instructions }}</td>
                <td class='provider'>
                    {{-- @if (isset($med->prescriber))
                        @dd($med)
                        <div>{{ $med->prescriber->name }}</div>
                        <div>{{ $med->prescriber->specialty->name }}</div>
                    @else
                        N/A
                    @endif --}}
                </td>
            </tr>
            <tr>
                <th>Notes</th>
                <td colspan='99'>{{ $med->notes ?? '' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<script type='module'>
    const meds = @json($patient->medications);
    console.log(meds);

    $(() => {
        $(document).on('click', '.updateLink', function(e) {
            window.location.assign('/medication/' + $(this).data('id'));
        });
    })

    window.moreInfo = (id) => {
        console.log(id);
    };
</script>
