<?php

namespace Drupal\xoxo_game\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'XoXo Game' Block
 *
 * @Block(
 *   id = "xoxo_game",
 *   admin_label = @Translation("XOXO Game Block"),
 * )
 */
 class XoXoGameBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#type' => 'markup',
            '#markup' => "<div id='xoxogame'></div>",
            '#attached' => array(
                'library' =>  array(
                    'xoxo_game/game'
                ),
            ),
        );
    }
}
?>