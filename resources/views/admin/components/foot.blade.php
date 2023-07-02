</body>
<script>

    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
    }

    const token = '{{ csrf_token() }}';
    const baseURL = "{{ asset('/') }}";
    $(document).ready(function() {
        $('select').selectpicker();

        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        $(document).ajaxStart(function () {
            $("body").css("cursor", "not-allowed");
            $("#loading-spinner").fadeIn();
        }).ajaxStop(function () {
            $("body").css("cursor", "default");
            $("#loading-spinner").fadeOut();
        });

    });
</script>
@yield('scripts')
</html>
