<script>
    let get_all_category_url = '{{route("get_all_category")}}';
    let get_all_category_mobile_url = '{{route("get_all_category_mobile")}}';

    let search_product_url = '{{route("search_product")}}';
    let cart_add_url = '{{route("cart_add")}}';
    let checkout_url = '{{route("checkout")}}';

    function image_asset(image)
    {

        var image_url = '{{ asset('') }}/'+image;
        return image_url;
    }


</script>
