<?php

$taxonomy = [
    'categorie' => 'TECHNOLOGIES',
    'format' => 'DIFFICULTES',
    'annees' => 'TRIER PAR',
];


echo "<div id='filtrePhoto'>";

// Section gauche
echo "<div class='left-section'>";

foreach ($taxonomy as $taxonomy_slug => $label) {
    // Exclure 'annees' de la section gauche
    if ($taxonomy_slug !== 'annees') {
        
        $terms = get_terms($taxonomy_slug);

        
        if ($terms && !is_wp_error($terms)) {
           
            $select_class = 'custom-select ' . $taxonomy_slug . '-select';

            // Début du conteneur pour la taxonomie
            echo "<div class='taxonomy-container'>";
            // Afficher le select avec l'ID et la classe appropriés
            echo "<select id='$taxonomy_slug' class='$select_class'>";
            // Option par défaut avec le label de la taxonomie
            echo "<option value=''>$label</option>";

            // Afficher chaque terme comme une option
            foreach ($terms as $term) {
                echo "<option value='$term->slug'>$term->name</option>";
            }

          
            echo "</select>";
            echo "</div>";
        }
    }
}

echo "</div>";

// Section droite
echo "<div class='right-section'>";

$select_class_annees = 'custom-select annees-select';
// Début du conteneur pour la taxonomie 'annees'
echo "<div class='taxonomy-container'>";
// Afficher le select avec l'ID et la classe appropriés
echo "<select id='annees' class='$select_class_annees'>";
// Option par défaut avec le label de la taxonomie 'annees'
echo "<option value=''>{$taxonomy['annees']}</option>";
// Options spécifiques pour 'annees'
echo "<option value='date_asc'>A partir des plus récentes</option>";
echo "<option value='date_desc'>A partir des plus anciennes</option>";
// Fin du select et du conteneur pour la taxonomie 'annees'
echo "</select>";
echo "</div>";


echo "</div>";

// Fin du conteneur #filtrePhoto
echo "</div>";
?>
