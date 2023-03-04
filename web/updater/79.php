<?php
    if ( !defined('IN_UPDATER') )
    {
        die('Do not access this file directly.');
    }

    /**
     * It converts all tables to utf8mb4
     */

    $db->query("ALTER TABLE geolitecity_blocks CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE geolitecity_location CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_actions CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_awards CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_clans CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_clantags CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_countries CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_admin CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_changename CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_changerole CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_changeteam CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_chat CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_connects CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_disconnects CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_entries CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_frags CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_latency CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_playeractions CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_playerplayeractions CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_rcon CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_statsme CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_statsme2 CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_statsmelatency CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_statsmetime CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_suicides CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_teambonuses CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_events_teamkills CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_games CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_games_defaults CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_games_supported CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_heatmap_config CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_hostgroups CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_livestats CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_maps_counts CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_mods_defaults CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_mods_supported CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_options CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_options_choices CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_playernames CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_players CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_players_awards CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_players_history CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_players_ribbons CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_playeruniqueids CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_ranks CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_ribbons CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_roles CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_server_load CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_servers CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_servers_config CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_servers_config_default CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_servers_voicecomm CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_teams CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_trend CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_users CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    $db->query("ALTER TABLE hlstats_weapons CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");

    $dbversion = 79;
    $version = "1.6.20";

    // Perform database schema update notification
    print "Updating database and verion schema numbers.<br />";
    $db->query("UPDATE hlstats_Options SET `value` = '$version' WHERE `keyname` = 'version'");
    $db->query("UPDATE hlstats_Options SET `value` = '$dbversion' WHERE `keyname` = 'dbversion'");
?>
