<?php
//application/views/news/success.php

$this->load->view($this->config->item('theme') . 'header');

?>
<p><b>you have successfully created a news item!</b></p>
<p>now I suppose you want to see it?</p>
<?php

$this->load->view($this->config->item('theme') . 'footer');
?>