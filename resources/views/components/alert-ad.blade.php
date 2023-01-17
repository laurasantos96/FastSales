<div>
    <div class="alert alert-{{__($type)}} text-center fw-bold fs-5">
        {{__($message)}}
    </div>
    <script>
        console.log("ejecuta el script del alert");
        Swal.fire({
        title: 'Ad rejected',
        icon: 'success',
        showConfirmButton: false,
        timer: 1500
        })
        // se importa la clase en app.js
    </script>
</div>