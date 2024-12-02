<footer>
    <div class="left">
        @if (session()->has('patient'))
            Current Patient: {{ session('patient')->first_name }}
        @else
            Current Patient: Jordan
        @endif
    </div>
    <div class="right">
        @if (session()->has('message'))
            <span class='message'>{{ session('message') }}</span>
        @endif
        @if (session()->has('status'))
            <span class='status'>{{ session('status') }}</span>
        @endif
    </div>
</footer>
