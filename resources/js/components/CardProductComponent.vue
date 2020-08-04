<template>
    <div class="sale-item">
        <div class="columns data clickable" role="button" title="Ver regras e condições" data-toggle="modal"
             :data-target="'#'+productIndex">
            <div class="equalizer-caption">
                <div class="name">{{ nameProduct }}</div>
            </div>
            <div class="equalizer-price">
                <div class="price">{{ priceProductFormatted }}</div>
                <div class="rules">Regras e condições</div>
            </div>
        </div>

        <div class="row" style="width: 100%;margin-left: 0">
            <div class="col remove" role="button" title="Reduzir quantidade" @click="removeProduct">
                <i class="lni-minus"></i>
            </div>
            <div class="col quantity">
                <input type="number" step="1" :value="productsQuantity" maxlength="2">
            </div>
            <div class="col add-more" role="button" title="Aumentar quantidade" @click="addProduct">
                <i class="lni-plus"></i>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" :id="productIndex" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black-50">Regras e condições</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #000">
                        {{ modalContent }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        props: [
            'maxProduct', 'nameProduct', 'priceProductFormatted', 'priceProduct', 'productIndex', 'modalContent'
        ],
        data: function () {
            return {
                limitProduct: this.maxProduct,
                productsQuantity: 0,
                totalAmount: 0
            }
        },
        methods: {
            addProduct: function () {
                if (this.productsQuantity != this.limitProduct) {
                    this.productsQuantity++;
                    this.totalAmount = this.productsQuantity++;
                } else {
                    iziToast.success({
                        title: 'Ops',
                        message: "Limite atingido!",
                        theme: 'dark',
                        backgroundColor: '#f72a07',
                        color: '#fff',
                        icon: 'lni-close',
                        position: 'bottomCenter',
                    });
                }
            },
            removeProduct: function () {
                if (this.productsQuantity <= 0) {
                    this.productsQuantity = 0;
                } else {
                    this.productsQuantity--;
                }
            }
        }
    }
</script>
