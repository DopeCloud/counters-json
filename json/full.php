<?php
require '../../config.php';
# TOTAL ADMINS
$db->where ("is_admin", 1);
$totalAdmins = $db->getValue ("users", "count(id)");
# echo "TOTAL ADMINS : $totalAdmins";
# END TOTAL ADMINS

# TOTAL USERS
$db->where ("is_valid_user", 1);
$totalUsers = $db->getValue ("users", "count(id)");
# echo "TOTAL USERS : $totalUsers";
# END TOTAL USERS

# TOTAL SERVERS
$totalServers = $db->getValue ("servers", "count(id)");
# echo "TOTAL SERVERS : $totalServers";
# END TOTAL SERVERS

$json_array = array(
    "FULL" => array(
        "ADMINS" => array(
            "TOTAL" => "{$totalAdmins}"
        ),
        "USERS" => array(
            "TOTAL" => "{$totalUsers}"
        ),
        "SERVERS" => array(
            "TOTAL" => "{$totalServers}"
        ),
    ),
);
$full = json_encode($json_array);
echo $full;
?>
