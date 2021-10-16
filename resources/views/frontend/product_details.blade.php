@extends('frontend.layout.app2')
@section('page_css')
<style>
    .ps-product__addcart{
    color: white;
    background-color: #3fc979;
    border: none;
    border-radius: 3px;
    width: 100%;
    font-size: 14px;
    padding: 5px;
    margin-bottom: 10px;
}

</style>
@endsection
@section('main_content')
<main class="no-main">

    <section class="section--product-type">
        <div class="container">
            <div class="product__header">

                <h3 class="product__name">{{ $product->name }}</h3>

            </div>
            <div class="product__detail">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="ps-product--detail">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="ps-product__variants">

                                        <div class="ps-product__thumbnail">
                                            <div class="ps-product__zoom"><img id="ps-product-zoom" src="../{{ $product->thumbnail_image }}" alt="alt" />

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    @if($discount_percentage>0)
                                    <div class="ps-product__sale">
                                        <span class="price-sale">Tk {{ $discount_price }}</span><span class="price"> Tk {{ $product->price  }}</span><span class="ps-product__off">{{ $discount_percentage }} off</span>
                                    </div>
                                    @else
                                    <div class="ps-product__sale">
                                        <span class="price-sale">Tk{{ $product->price }}</span>
                                    </div>
                                    @endif

                                    <div class="ps-product__unit">
                                        {{ $product->unit->unit_quantity }} {{ $product->unit->unit_type }}
                                    </div>

                                    <div class="ps-product__avai alert__success">Product Stock: <span>{{ $product->stock }} Unit</span>
                                    </div>

                                    <div class="ps-product__shopping">
                                        <div class="ps-product__quantity">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus dec" onclick="dec({{$product->id  }})" ><i class="icon-minus"></i></button>
                                                <input class="quantity quantity-{{ $product->id }}" value="1" min="0" name="quantity" type="number" id="quantity-{{ $product->id }}"  readonly='readonly' />
                                                <input type="hidden" name="hidden_product_id" value={{  $product->id}}>
                                                <button class="plus inc"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        @if($discount_percentage>0)
                                        <button class="add-to-cart  ps-product__addcart"  data-type='product'  data-unit= '{{ $product->unit_quantity }} {{ $product->unit_type }}' data-id = '{{ $product->id }}' data-image='{{ $product->thumbnail_image }}' data-name="{{ $product->name }}" data-price="{{ $discount_price}}" ><i class="icon-cart"></i>Add to cart</button>
                                        @else
                                        <button class="add-to-cart  ps-product__addcart"  data-type='product' data-unit= '{{ $product->nit_quantity }} {{ $product->unit_type }}' data-id = '{{ $product->id }}' data-image='{{ $product->thumbnail_image }}' data-name="{{ $product->name }}" data-price="{{ $product->price }}" ><i class="icon-cart"></i>Add to cart</button>
                                        @endif
                                    </div>

                                    <div class="ps-product__footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="ps-product--extention">



                            <div class="extention__block extention__contact">
                                <p> <span class="text-black">Hotline Order: </span></p>
                                <h4 class="extention__phone">{{ $company_info->contact_no1 }}</h4>
                                <h4 class="extention__phone">{{ $company_info->contact_no2 }}</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="product__content">
                <ul class="nav nav-pills" role="tablist" id="productTabDetail">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description-content" role="tab" aria-controls="description-content" aria-selected="true">Description</a></li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description-content" role="tabpanel" aria-labelledby="description-tab">

                    </div>



                </div>
            </div>

        </div>


    </section>

</main>
@endsection

