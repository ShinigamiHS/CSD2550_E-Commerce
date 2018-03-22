window.onload = createCart;

function createCart() {
	var cartArray;
	if(sessionStorage.cart === undefined || sessionStorage.cart === ""){
        cartArray = [];
    }
    else {
        cartArray = JSON.parse(sessionStorage.cart);
    }
}
