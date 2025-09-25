@session('success')
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endsession
@section('error')
    <script>
        toastr.success("{{ session('error') }}");
    </script>
@endsection
@section('warning')
    <script>
        toastr.success("{{ session('warning') }}");
    </script>
@endsection
@section('info')
    <script>
        toastr.success("{{ session('info') }}");
    </script>
@endsection