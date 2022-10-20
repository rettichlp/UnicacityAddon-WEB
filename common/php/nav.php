<?php
$api_url = 'http://rettichlp.de:8888/unicacityaddon/v1/dhgpsklnag2354668ec1d905xcv34d9bdee4b877/mgmt';
$json_data = json_decode(file_get_contents($api_url));
$latestVersion = $json_data->latestVersion;
?>
<nav id="nav" class="nav">
    <a class="nav-child nav-child-right text-20-400" href="https://github.com/rettichlp/UnicacityAddon-1.12.2/releases/download/v<?php echo $latestVersion ?>/UnicacityAddon-<?php echo $latestVersion ?>.jar">Download</a>
    <span class="nav-child text-20-400" style="float: right"> | </span>
    <a class="nav-child nav-child-right text-20-400" href="/houseBans.php">House Bans</a>
    <a class="nav-child nav-child-right text-20-400" href="/wantedReasons.php">Wanted Reasons</a>
    <a class="nav-child nav-child-right text-20-400" href="/team.php">Team</a>
    <a class="nav-child nav-child-right text-20-400" href="https://github.com/rettichlp/UnicacityAddon-1.12.2/wiki">Wiki</a>
    <a class="nav-child nav-child-right text-20-400" href="https://github.com/rettichlp/UnicacityAddon-1.12.2/releases/latest">What's new?</a>
    <a class="nav-child nav-child-right text-20-400" href="https://github.com/rettichlp/UnicacityAddon-1.12.2/tree/main">Code</a>
    <a class="nav-child nav-child-left text-20-800" href="/index.php">UnicacityAddon</a>
</nav>