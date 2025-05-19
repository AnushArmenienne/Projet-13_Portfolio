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
    
    if ($taxonomy_slug !== 'annees') {
        
        $terms = get_terms($taxonomy_slug);

        
        if ($terms && !is_wp_error($terms)) {
           
            $select_class = 'custom-select ' . $taxonomy_slug . '-select';

        
            echo "<div class='taxonomy-container'>";
            
            echo "<select id='$taxonomy_slug' class='$select_class'>";
            
            echo "<option value=''>$label</option>";

           
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

echo "<div class='taxonomy-container'>";

echo "<select id='annees' class='$select_class_annees'>";

echo "<option value=''>{$taxonomy['annees']}</option>";

echo "<option value='date_asc'>A partir des plus récentes</option>";
echo "<option value='date_desc'>A partir des plus anciennes</option>";

echo "</select>";
echo "</div>";


echo "</div>";


echo "</div>";
?>
