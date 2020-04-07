<?php

function adminer_object() {

    include_once "../plugins/plugin.php";
    include_once "../plugins/bastion-jumper.php";

    return new AdminerPlugin(array(
        new BastionJumper("zR4TRHWZyn9CKa843ayZy0qW2VT3JxPDaFz3YVWRTY8NDW/svBo9LrypHLeAPz22o+Oths6mNKZpFxQ7jcAedCzm6sDMowPqlpUUG9KaV+IM2xmBuTcBZFbOuoJyhSMi2+XXF92JkRu59YaJzyc56j5C9/2Oy9JfnWulW0Lw6JnBnRipsZqVxvju8R0cMPUJqYu0drGne6C/PIezRic9LVDpx94Nnf6SXNmx7PQO8wyMNBrwV+tTS/LN8QnPtKZ7SK9stXF2/4RWVSAgiCzWoV1PGeMLJeB+iBDnYIUUaB6mWN4dkCLPu6fR2OARV0C/BB/RybWOBRed0sC2bbpDsVMHL0g8uLA4s0iVahUTJHIQYigalW5yuqK31psbqCatnLkh+GgbQrPqRUthbB7OH9Am5nS7d9kf2wOw5mYp3h3RcqJz++x26cliHF4xalLtAHCxfjtbC/5t8d4OdDJB1EtfBDY+QKtlBLqzmEo4N4oLSv5Eb7u/52anDdwCTHhWbkBosQjHZXVNpcoC07V9tLeWGZVfo+bBgg8QBAEBkgxexiD2CxVMQiNWqFXrUaPZllV/2+PJLyNI3pCiRaDnFvMHkk5iUdZlSueFnvGvVPLSsVghtNXc2hMY45Y2MNSzeSKy/8VLqPs7Wm3pLBM6gLlV1Pw+SvtoD/vaKVcX9ROigvCsn8GhCsJYu9HnPJUYKhcm/FmUE5WjtM7yqofGDg=="),
    ));       
}

include "./adminer.php"

?>
