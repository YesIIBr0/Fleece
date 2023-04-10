// Function to get the cart data from localStorage
function getCart() {
  var cart = JSON.parse(localStorage.getItem('cart'));
  return cart ? cart : [];
}

// Function to save the cart data to localStorage
function saveCart(cart) {
  localStorage.setItem('cart', JSON.stringify(cart));
}

function clearCart() {
  var cart = [];
  saveCart(cart);
  displayCart();
}

function AddItem(imgSrc, title, price) {
  // Create a new item element
  var item = document.createElement("div");
  item.classList.add("cart__item");

  // Create an image element
  var img = document.createElement("img");
  img.classList.add("cart__img");
  img.src = imgSrc;
  item.appendChild(img);

  // Create a title element
  var titleEl = document.createElement("h3");
  titleEl.classList.add("cart__title");
  titleEl.textContent = title;

  item.appendChild(titleEl);

    // Create a price element
    var priceEl = document.createElement("span");
    priceEl.classList.add("cart__price");
    priceEl.textContent = "$" + price.toFixed(2);
    item.appendChild(priceEl);

    // Add the item to the cart
    var cart = document.getElementById("cart");
    cart.appendChild(item);
      }

      function AddItem(image, name, price) {
          // Create a new item object
          var item = { image: image, name: name, price: price };
        
          // Get the cart from localStorage
          var cart = getCart();
        
          // Add the new item to the cart
          cart.push(item);
        
          // Save the updated cart to localStorage
          saveCart(cart);
        }
        
        function displayCart() {
          var cart = getCart();
          var cartContainer = document.getElementById("cart");
          var total = 0; // Initialize the total to 0
        
          // Clear the cart container
          cartContainer.innerHTML = '';
        
          // Add each item to the cart container and calculate the total price
          for (var i = 0; i < cart.length; i++) {
            var item = cart[i];
            var quantity = item.quantity || 1; // Set the quantity to 1 if not present
        
            var itemEl = document.createElement("div");
            itemEl.classList.add("cart__item");
        
            var imageEl = document.createElement("img");
            imageEl.src = item.image;
            imageEl.alt = item.name;
            itemEl.appendChild(imageEl);
        
            var titleEl = document.createElement("h3");
            titleEl.textContent = item.name;
            itemEl.appendChild(titleEl);
        
            var priceEl = document.createElement("span");
            priceEl.classList.add("cart__price");
            priceEl.textContent = "$" + item.price.toFixed(2) + " x " + quantity; // Add the quantity to the price
            itemEl.appendChild(priceEl);
        
            cartContainer.appendChild(itemEl);
        
            // Add the item price multiplied by the quantity to the total
            total += item.price * quantity;
          }
        
          // Add the total price to the cart container
          var totalEl = document.createElement("div");
          totalEl.classList.add("cart__total");
          totalEl.textContent = "Total: $" + total.toFixed(2);
          cartContainer.appendChild(totalEl);

        }
        function clearCart() {
          var cart = [];
          saveCart(cart);
          displayCart();
        }

       

        
        
        
        
        
        