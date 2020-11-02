@if (count($errors) > 0)
    <ul class="alert alert-danger pl-5" role="alert">
        @foreach ($errors->all() as $error_message)
            <li>{{ $error_message }}</li>
        @endforeach
    </ul>
@endif