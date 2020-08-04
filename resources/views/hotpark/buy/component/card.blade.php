@php
    $newPrice = 0;
           if($day->className == 'altaTemporada') {
               $newPrice = $product->value_high_percent;
           } else if ($day->className == 'mediaTemporada') {
               $newPrice = $product->value_medium_percent;
           } else if ($day->className == 'baixaTemporada') {
               $newPrice = $product->value_low_percent;
           } else {
               $newPrice = $product->price;
           }
@endphp

<div class="row" style="width: 100%;margin-left: 0">
    <div class="col minus-item remove" role="button" title="Reduzir quantidade" data-id="item-{{ $product->id }}" data-name-item="qprod{{ $product->id }}" data-name="{{ $product->name }}">
        <i class="lni-minus"></i>
    </div>
    <div class="col quantity">
        <input type="number" step="1" value="0" maxlength="2" class="input-value" id="qprod{{ $product->id }}" data-max="{{ $product->available }}" data-price="{{ $newPrice }}">
    </div>
    <div class="col add-more add-to-cart" role="button" title="Aumentar quantidade" data-max="{{ $product->available }}" data-name-item="qprod{{ $product->id }}" data-id="item-{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $newPrice }}">
        <i class="lni-plus"></i>
    </div>
</div>
