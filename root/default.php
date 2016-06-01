<?php
$app['cakebox.root'] = '%CAKEBOX_ROOT%/';
$app['cakebox.access'] = '%CAKEBOX_ACCESS%';
$app['cakebox.language'] = '%CAKEBOX_LANGUAGE%';
$app['directory.ignoreDotFiles'] = filter_var('%DIRECTORY_IGNORE_DOTFILES%', FILTER_VALIDATE_BOOLEAN);
$app['directory.ignore'] = '%DIRECTORY_IGNORE%';
$app['player.default_type'] = '%PLAYER_DEFAULT_TYPE%';
$app['player.auto_play'] = '%PLAYER_AUTO_PLAY%';
$app['rights.canPlayMedia'] = filter_var('%RIGHTS_CAN_PLAY_MEDIA%', FILTER_VALIDATE_BOOLEAN);
$app['rights.canDownloadFile'] = filter_var('%RIGHTS_CAN_DOWNLOAD_FILE%', FILTER_VALIDATE_BOOLEAN);
$app['rights.canArchiveDirectory'] = filter_var('%RIGHTS_CAN_ARCHIVE_DIRECTORY%', FILTER_VALIDATE_BOOLEAN);
$app['rights.canDelete'] = filter_var('%RIGHTS_CAN_DELETE%', FILTER_VALIDATE_BOOLEAN);
$app['bs.login'] = '%BETASERIES_LOGIN%';
$app['bs.passwd'] =  '%BETASERIES_PASSWORD%';
$app['bs.apikey'] = '%BETASERIES_API_KEY%';
