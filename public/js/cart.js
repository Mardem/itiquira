$(window).on('load', function(){
    // cartDay.clearCart();
    displayCart();
});

// ************************************************
// Shopping Cart API
// ************************************************

let cartDay = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    cart = [];

    // Constructor
    function Item(name, price, count, id) {
        this.name = name;
        this.price = price;
        this.count = count;
        this.id = id;
    }

    // Save cart
    function saveCart() {
        sessionStorage.setItem('cartDay', JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('cartDay'));
    }
    if (sessionStorage.getItem("cartDay") != null) {
        loadCart();
    }


    // =============================
    // Public methods and properties
    // =============================
    let obj = {};

    // Add to cart
    obj.addItemToCart = function(name, price, count, id) {
        for(let item in cart) {
            if(cart[item].name === name) {
                cart[item].count ++;
                saveCart();
                return;
            }
        }
        let item = new Item(name, price, count, id);
        cart.push(item);
        saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(name, count) {
        for(let i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
        }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(id) {
        for(let item in cart) {
            if(cart[item].id === id) {
                cart[item].count --;
                if(cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    }

    // Remove all items from cart
    obj.removeItemFromCartAll = function(id) {
        for(let item in cart) {
            if(cart[item].id === id) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart();
    }

    // Clear cart
    obj.clearCart = function() {
        cart = [];
        saveCart();
    }

    // Count cart
    obj.totalCount = function() {
        let totalCount = 0;
        for(let item in cart) {
            totalCount += cart[item].count;
        }
        return totalCount;
    }

    // Total cart
    obj.totalCart = function() {
        let totalCart = 0;
        for(let item in cart) {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    }

    // List cart
    obj.listCart = function() {
        let cartCopy = [];
        for(i in cart) {
            item = cart[i];
            itemCopy = {};
            for(p in item) {
                itemCopy[p] = item[p];

            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy)
        }
        return cartCopy;
    }

    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
})();


// *****************************************
// Triggers / Events
// *****************************************
// Add item
$('.add-to-cart').click(function(event) {
    event.preventDefault();
    let name = $(this).data('name');
    let price = Number($(this).data('price'));
    let id = $(this).data('id');

    let nameInput = $(this).data('nameItem');
    let input = document.querySelector('#' + nameInput);
    let limit = $(this).data('max');

    if(input.value >= limit) {
        iziToast.success({
            title: 'Ops',
            message: "O produto selecionado esgotou!",
            theme: 'dark',
            backgroundColor: '#f72a07',
            color: '#fff',
            icon: 'lni-close',
            position: 'bottomCenter',
        });
    } else {
        cartDay.addItemToCart(name, price, 1, id);
        input.value++;
    }
    displayCart();
});
// -1
$('.minus-item').on("click", function(event) {
    let id = $(this).data('id')

    let nameInput = $(this).data('nameItem');
    let input = document.querySelector('#' + nameInput);
    let limit = $(this).data('max');

    if(input.value <= 0) {
        input.value = 0;
    } else {
        cartDay.removeItemFromCart(id);
        input.value--;
    }
    displayCart();
})

// Clear items
$('.clear-cart').click(function() {
    cartDay.clearCart();
    displayCart();
    $('.input-value').val(0);
});


function displayCart() {
    let cartArray = cartDay.listCart();
    let output = "";
    for(let i in cartArray) {
        let real = 'R$ ' + (cartArray[i].price).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
        let total = 'R$ ' + (cartArray[i].total).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});

        output += "<tr>"
            + "<td>" + cartArray[i].name + "</td>"
            + "<td>" + real + "</td>"
            + "<td><b>"+ cartArray[i].count +"</b></td>"
            + "<td>" + total + "</td>"
            + "<td style='padding-top: 5px;'><button class='delete-item btn btn-danger' data-id='" + cartArray[i].id + "' data-name='" + cartArray[i].name + "'><i class='lni-trash'></i></button></td>"
            +  "</tr>";
    }
    $('.show-cart').html(output);

    let real = (cartDay.totalCart()).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'});
    $('.total-cart').html(real);
    $('.total-price').html(real);
    $('.total-count').html(cartDay.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
    let id = $(this).data('id')
    cartDay.removeItemFromCartAll(id);
    displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
    let name = $(this).data('name');
    let count = Number($(this).val());
    cartDay.setCountForItem(name, count);
    displayCart();
});
displayCart();

function makePayment() {
    let date = $('#date-selected');

    let origin = $(location).attr("origin"); // "http://127.0.0.1:8000"
    let checkout = "/checkout";
    let itemId = "?itemId=" + uuidv4();
    let itemDesc = "&itemDescription=Contratação de Day User - " + date.text();
    let itemAmount = "&itemAmount=" + cartDay.totalCart();

    console.log(sessionStorage.cartDay);

    window.location.href = origin + checkout + itemId + itemDesc + itemAmount;
}
function uuidv4() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        let r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}
