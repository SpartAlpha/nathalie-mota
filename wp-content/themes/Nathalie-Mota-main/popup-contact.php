<?php
/**
 * Template pour la popup de contact
 *
 * @package WordPress
 * @subpackage nathalie-mota theme
 */
?>
<div class="popup-overlay hidden">
    <div class="popup-contact" style="position: relative !important;">
        
        <div id="close-popup" class="close-popup" style="display: block !important; position: absolute !important; top: 15px !important; right: 15px !important; width: 20px !important; height: 20px !important; z-index: 999999 !important; cursor: pointer !important;">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/icon/close.png'); ?>" 
                 alt="Fermer la popup" 
                 width="20" 
                 height="20" 
                 style="display: block !important; width: 20px !important; height: 20px !important; max-width: 20px !important; max-height: 20px !important; margin: 0 !important; padding: 0 !important; object-fit: contain !important;" />
        </div>

        <div class="popup-title__container">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <img class="popup-decor" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/contact.png'); ?>" alt="Décoration de la popup">
            <?php endfor; ?>
        </div>
        
        <div class="popup-informations">
            <?php
            // Récupération de la référence depuis ACF
            $reference = get_field('reference');
            $escaped_reference = '';
            
            // Vérifier si la référence existe et n'est pas vide
            if ($reference) {
                // Échapper la référence pour l'affichage dans le champ input_text du Fluent Form
                $escaped_reference = esc_attr($reference);
            }

            // Construire le shortcode avec la référence
            if (!empty($escaped_reference)) {
                $shortcode_with_reference = '[fluentform id="3" ref="' . $escaped_reference . '"]';
            } else {
                $shortcode_with_reference = '[fluentform id="3"]';
            }

            // Afficher le formulaire en utilisant le shortcode avec la référence
            echo do_shortcode($shortcode_with_reference);
            ?>
        </div>
    </div>
</div>

<script> 
// Affichage dynamique de la référence dans la popup 
jQuery(document).ready(function($) {
    // Récupérer la référence PHP et échapper pour JavaScript
    var referenceValue = "<?php echo esc_js(get_field('reference')); ?>";
    
    // Utiliser une classe spécifique pour cibler uniquement le formulaire Fluent Form
    var inputRefPhoto = document.querySelector('.fluentform .ff-el-input