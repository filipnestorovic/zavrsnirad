@include('admin.pixel')
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

    {{--moment.locale('sr');--}}

    const token = '{{ csrf_token() }}';
    const baseURL = "{{ asset('/') }}";
    $(document).ready(function() {
        $('select').selectpicker();

        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        {{--$('#fileInput').change(function() {--}}
            {{--var i = $(this).prev('label').clone();--}}
            {{--var file = $('#inputGroupFile01')[0].files[0].name;--}}
            {{--$('#fileName').html(file);--}}
        {{--});--}}

        {{--$(document).ajaxStart(function () {--}}
            {{--$("body").css("cursor", "wait");--}}
            {{--$("#loading-spinner").fadeIn();--}}
        {{--}).ajaxStop(function () {--}}
            {{--$("body").css("cursor", "default");--}}
            {{--$("#loading-spinner").fadeOut();--}}
        {{--});--}}


        {{--window.formatAgoDate = function(){--}}
            {{--$( ".unformattedAgo" ).each(function( index ) {--}}
                {{--let dateUnformatted = $(this).html();--}}
                {{--$(this).html(moment(dateUnformatted).fromNow());--}}
            {{--});--}}
        {{--};--}}

        {{--window.formatDate = function(){--}}
            {{--$( ".unformattedDate" ).each(function( index ) {--}}
                {{--let dateUnformatted = $(this).html();--}}
                {{--$(this).html(moment(dateUnformatted).format('ll'));--}}
            {{--});--}}
        {{--};--}}

        {{--$(document).on("click", '[data-name="price"],[data-name="quantity"]', function(event) {--}}
            {{--let objDiscount = $(this).closest('tr').find('[data-name="discount"]');--}}
            {{--objDiscount.html(0);--}}
            {{--objDiscount.addClass('pink lighten-4');--}}
            {{--setTimeout(function(thisObj){--}}
                {{--objDiscount.removeClass('pink lighten-4');--}}
            {{--}, 3000);--}}

        {{--});--}}

        {{--$(document).on("focusout", '[data-name="price"]', function(event) {--}}
            {{--let quantity = parseInt($(this).closest('tr').find('[data-name="quantity"]').html());--}}
            {{--let price = Math.floor(parseFloat(($(this).html())));--}}
            {{--$(this).html(price);--}}
            {{--let discount = parseFloat($(this).closest('tr').find('[data-name="discount"]').html()).toFixed(2);--}}
            {{--let subtotal = quantity*price-discount;--}}
            {{--$(this).closest('tr').find('[data-name="subtotal"]').html(subtotal.toFixed(2));--}}
        {{--});--}}

        {{--$(document).on("focusout", '[data-name="quantity"]', function(event) {--}}
            {{--let quantity = parseInt($(this).html());--}}
            {{--let price = parseFloat(($(this).closest('tr').find('[data-name="price"]').html())).toFixed(2);--}}
            {{--let discount = parseFloat($(this).closest('tr').find('[data-name="discount"]').html()).toFixed(2);--}}
            {{--let subtotal = quantity*price-discount;--}}
            {{--$(this).closest('tr').find('[data-name="subtotal"]').html(subtotal.toFixed(2));--}}
        {{--});--}}

        {{--$(document).on("focusout", '[data-name="subtotal"]', function(event) {--}}
            {{--let subtotal = parseFloat($(this).html()).toFixed(2);--}}
            {{--let quantity = parseInt($(this).closest('tr').find('[data-name="quantity"]').html());--}}
            {{--let price = parseFloat($(this).closest('tr').find('[data-name="price"]').html()).toFixed(2);--}}

            {{--let itemTotal = price*quantity;--}}
            {{--let discount = itemTotal - subtotal;--}}

            {{--let percentUnformatted = discount/itemTotal*100;--}}
            {{--let percent = 0;--}}

            {{--if(percentUnformatted % 1 != 0){--}}
                {{--percent = Math.ceil(percentUnformatted);--}}
            {{--}--}}
            {{--else{--}}
                {{--percent = percentUnformatted;--}}
            {{--}--}}

            {{--let roundDiscount = (percent / 100) * itemTotal;--}}
            {{--let calculatedSubtotal = itemTotal - roundDiscount;--}}

            {{--$(this).closest('tr').find('[data-name="discount"]').html((roundDiscount).toFixed(2));--}}
            {{--$(this).html(calculatedSubtotal.toFixed(2));--}}

        {{--});--}}

    });
</script>
@yield('scripts')
</html>
