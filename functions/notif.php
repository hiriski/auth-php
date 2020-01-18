<?php

function notification($type, $content) {
  echo "<div class='floating-alert'>
          <div class='alert alert-$type' role='alert'>$content</div>
        </div>";
}

?>