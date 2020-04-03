<?php

function adminer_object() {

    include_once "../plugins/plugin.php";
    include_once "../plugins/bastion-jumper.php";

    return new AdminerPlugin(array(
        new BastionJumper(),
    ));       
}

include "./adminer.php"

?>
