<!-- /resources/views/common/errors.blade.php -->

@if ($errors->any())
    <!-- Form Error List -->
    <div class="alert alert-danger" role="alert">
        <strong>Whoops! Something went wrong!</strong>
        <hr>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
