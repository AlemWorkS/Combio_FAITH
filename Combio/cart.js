// Fonction pour ajouter un élément au panier
function addToCart(event) {
    // Récupération des données de l'élément à ajouter
    let itemElement = event.target.closest('.featured__item');
    let itemImage = itemElement.querySelector('.featured_item_pic').dataset.setbg;
    let itemName = itemElement.querySelector('.featured_item_text h6 a').textContent;
    let itemPrice = parseFloat(itemElement.querySelector('.featured_item_text h5').textContent);
  
    // Création de l'objet représentant l'élément à ajouter
    let item = {
      image: itemImage,
      name: itemName,
      price: itemPrice,
      quantity: 1
    };
  
    // Récupération des données actuelles du panier à partir du stockage local
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
  
    // Vérification si l'élément à ajouter existe déjà dans le panier
    let itemIndex = cart.findIndex(cartItem => cartItem.name === item.name);
    if (itemIndex !== -1) {
      // Si l'élément existe déjà, augmenter sa quantité
      cart[itemIndex].quantity++;
    } else {
      // Sinon, ajouter l'élément au panier
      cart.push(item);
    }
  
    // Enregistrement des données mises à jour du panier dans le stockage local
    localStorage.setItem('cart', JSON.stringify(cart));
  
    // Mise à jour de l'interface utilisateur pour refléter les changements dans le panier
    updateCartUI();
  }
  
  // Fonction pour mettre à jour l'interface utilisateur du panier
  function updateCartUI() {
    // Récupération des données actuelles du panier à partir du stockage local
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
  
    // Création du code HTML pour afficher les éléments du panier sous forme de tableau
    let cartHTML = '<table><tr><th>Image</th><th>Nom</th><th>Prix</th><th>Quantité</th></tr>';
    for (let item of cart) {
      cartHTML += `<tr>
        <td><img src="${item.image}" alt="${item.name}"></td>
        <td>${item.name}</td>
        <td>${item.price}</td>
        <td>${item.quantity}</td>
      </tr>`;
    }
    cartHTML += '</table>';
  
    // Mise à jour de l'affichage des éléments du panier dans l'interface utilisateur
    document.querySelector('#cart').innerHTML = cartHTML;
  }
  
  // Ajout d'un écouteur d'événements pour détecter les clics sur les icônes "fa fa-shopping-cart"
  document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', addToCart);
  });
  