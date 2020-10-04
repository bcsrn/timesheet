CREATE TABLE `timesheet`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`time-entry-date` date NOT NULL,
`project_id` int(11) unsigned NOT NULL ,
`activity_id` int(11) unsigned NOT NULL ,
`monday` int(11) unsigned NOT NULL DEFAULT 0,
`tuesday` int(11) unsigned NOT NULL DEFAULT 0,
`wednesday` int(11) unsigned NOT NULL DEFAULT 0,
`thursday` int(11) unsigned NOT NULL DEFAULT 0,
`friday` int(11) unsigned NOT NULL DEFAULT 0,
`total` int(11) unsigned NOT NULL DEFAULT 0,
`status` varchar(250) NOT NULL DEFAULT '',
`remarks` varchar(250) NOT NULL DEFAULT '',
FOREIGN KEY (`id`) REFERENCES `users`(`id`)
);