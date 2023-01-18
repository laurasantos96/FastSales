<div>
    {{-- <div class="alert alert-{{ __($type) }} text-center fw-bold fs-5">
        {{ __($message) }}
    </div> --}}
    <script>
        Swal.fire({
            title: '{{ $message }}',
            icon: '{{ $type }}',
            showConfirmButton: false,
            timer: 1500
        })
        // se importa la clase en app.js
    </script>
</div>
{{-- controlamos los mesajes de aceptar y todos los demas --}}
