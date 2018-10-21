<?php
require '../../config.php';
# TOTAL ADMINS
$db->where ("is_admin", 1);
$totalAdmins = $db->getValue ("users", "count(id)");
# echo "TOTAL ADMINS : $totalAdmins";
# END TOTAL ADMINS

# TOTAL USERS
$db->where ("is_admin", 0);
$totalUsers = $db->getValue ("users", "count(id)");
# echo "TOTAL USERS : $totalUsers";
# END TOTAL USERS

# TOTAL SERVERS
$totalServers = $db->getValue ("servers", "count(id)");
# echo "TOTAL SERVERS : $totalServers";
# END TOTAL SERVERS
?>
