<div class="image-list-center-text-top">
  <?php
    for ($i = 1; $i <= 8; $i++):

      $text = exhibit_builder_page_text($i,$exhibitPage);
      $attachment = exhibit_builder_page_attachment($i,0,$exhibitPage);

      if ($text || $attachment):

        echo '<div class="image-text-group">';

        if ($text):

          echo '<div class="exhibit-text">';
          echo $text;
          echo '</div>';

        endif;

        if ($attachment):

          echo '<div class="exhibit-item">';
          echo cul_exhibit_builder_attachment_markup($attachment, 
						     array('imageSize' => 'fullsize'), 
						     array('class' => 'permalink'));
          echo '</div>';

        endif;

        echo '</div>';

      endif;

    endfor;
  ?>
</div>
