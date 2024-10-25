<?php
// index.php : Programme principal pour gérer le panier

// Inclure les fichiers produits et fonctions
include 'produits.php';
include 'fonctions.php';

// Stocker les produits dans un tableau
$produits = [$produit1, $produit2, $produit3];

// Calcul et affichage des sous-totaux pour chaque produit
foreach ($produits as $produit) {
  $sous_total = calculerSousTotal($produit);
  echo "Le sous-total pour le " . $produit['nom'] . " est de " . $sous_total . " €.<br>";
}

// Calcul du montant total du panier
$total_panier = calculerMontantTotal($produits);
echo "Le montant total du panier est de " . $total_panier . " €.<br>";

// Calcul et affichage du montant après réduction
$total_apres_reduction = calculerMontantTotalApresReduction($total_panier);
if ($total_panier > 50) {
  echo "Après une réduction de 10%, le total est de " . $total_apres_reduction . " €.<br>";
} else {
  echo "Aucune réduction appliquée.<br>";
}

// Affichage d'un tableau HTML du panier
echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th><th>Sous-total</th></tr>";
foreach ($produits as $produit) {
  $sous_total = calculerSousTotal($produit);
  echo "<tr><td>" . $produit['nom'] . "</td><td>" . $produit['prix'] . " €</td><td>" . $produit['quantite'] . "</td><td>" . $sous_total . " €</td></tr>";
}
echo "<tr><td colspan='3'><strong>Total</strong></td><td><strong>" . $total_panier . " €</strong></td></tr>";
if ($total_panier > 50) {
  echo "<tr><td colspan='3'><strong>Total après réduction</strong></td><td><strong>" . $total_apres_reduction . " €</strong></td></tr>";
}
echo "</table>";
?>
