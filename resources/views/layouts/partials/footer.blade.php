 <!-- Plugins Js -->
 <script src="{{ asset('/assets/js/app.min.js')}}"></script>
 {{-- <script src="{{ asset('/assets/js/chart.min.js')}}"></script> --}}
 {{-- <script src="{{ asset('/assets/js/bundles/apexcharts/apexcharts.min.js')}}"></script> --}}
 @stack('scripts')
 <!-- Custom Js -->
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
 <script src="{{ asset('/assets/js/admin.js')}}"></script>
 <script src="{{ asset('assets/js/number_format.js') }}"></script>
 {{-- <!-- Sweet Alert js CONFIRMATION--> --}}
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
 @if(Session::has('msg-login'))
        <script defer>
            $(document).ready(function(){
                swal("Félicitations {{ Auth::user()->prenom }} {{ Auth::user()->nom }}", "{{ Session::get('msg-login') }}", "success",
                    {
                        button: "OK",
                    }
                );
            });
        </script>
    @endif
    @if(Session::has('msg-error'))
        <script defer>
            $(document).ready(function(){
                swal("Erreur", "{{ Session::get('msg-error') }}", "error",
                    {
                        button: "OK",
                        type: 'error',
                        timerProgressBar: true
                    }
                );
            });
        </script>
    @endif

    @if(Session::has('msg-success'))
        <script defer>
            $(document).ready(function(){
                swal("Félicitations", "{{ Session::get('msg-success') }}", "success",
                    {
                        button: "OK",
                        type: 'success',
                    }
                );
            });
        </script>
    @endif

    @if(Session::has('msg-info'))
        <script defer>

            $(document).ready(function(){
                swal("Informations", "{{ Session::get('msg-info') }}", "info",
                    {
                        button: "OK",
                        type: 'info',
                    }
                );
            });
        </script>
    @endif
<script>
    $('.delete-confirm').click(function(event) {

        event.preventDefault();
        var form =  $(this).closest("form");
        var name = $(this).data("name");

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
                buttonsStyling: true
            })

            swalWithBootstrapButtons.fire({
                title: 'Etes-vous sûr ?',
                text: "Voulez-vous suprimer cet element !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: 'Oui, supprimer !',
                cancelButtonText: 'Non, annuler !',
                reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                swalWithBootstrapButtons.fire(
                    'Supprimer !',
                    'Suppression en cours...',
                    'success'
                )
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Annuler',
                'Vous avez annulé la suppression de cet element !',
                'error'
                )
            }
        });
    });
</script>
 {{-- <script src="{{ asset('/assets/js/pages/index.js')}}"></script> --}}

</body>
