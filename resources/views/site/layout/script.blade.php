<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
    $.get('/cart-count', function (data) {
        $('#cart-badge').text(data.count);
    });
});
</script>

@yield('scripts')