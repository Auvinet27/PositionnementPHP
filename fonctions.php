<?php

// Fonction pour calculer le sous-total d'un produit
function calculerSousTotal($produit) {
  return $produit['prix'] * $produit['quantite'];
}

// Fonction pour calculer le montant total du panier
function calculerMontantTotal($produits) {
  $total = 0;
  foreach ($produits as $produit) {
    $total += calculerSousTotal($produit);
  }
  return $total;
}

// Fonction pour calculer le montant total après réduction
function calculerMontantTotalApresReduction($montant_total, $seuil = 50, $reduction = 0.10) {
  if ($montant_total > $seuil) {
    return $montant_total * (1 - $reduction);
  }
  return $montant_total;
}
?>
