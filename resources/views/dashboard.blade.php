@extends('layouts.app')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  animate__animated animate__bounce">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <button id="sweetalert-button" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Hit sweetalert
            </button>
        </div>
    </div>
@endsection


@push('jquery')
    <script>
        $(document).ready(function() {

            $('#sweetalert-button').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    toast: true,
                    position: "top",
                    icon: "success",
                    title: moment().format('MMMM Do YYYY, h:mm:ss a'),
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    showClass: {
                        popup: `
                        animate__animated
                        animate__fadeInDown
                        animate__faster
                        `
                    },
                    hideClass: {
                        popup: `
                        animate__animated
                        animate__fadeOutUp
                        animate__faster
                        `
                    }
                });
            });


            console.log('Dashboard loaded successfully!');
        });
    </script>
@endpush
