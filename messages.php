<?php

$messages = array(
  /*
  array(
    'type' => 'error|warning|info|success',
    'date' => '1/1/1234',
    'text' => 'Hello, world'
  )
  */


  array(
    'type' => 'info',
    'date' => '7/16/2016',
    'text' => 'Testing, 123'
  )
);


if (count($messages)) {
  $message_html = array();
  foreach ($messages as $message) {
    array_push($message_html,
      '<div class="'.$message['type'].'">'
        .'<div class="container">'
          .'<strong>'.$message['date'].'</strong> - '
          .$message['text']
        .'</div>'
      .'</div>'
    );
  }
  $message_html = '<div class="messages">'.implode('', $message_html).'</div>';
} else {
  $message_html = '';
}

?>
