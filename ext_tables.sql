

CREATE TABLE tx_dvowlscroller_settings (
	images int(11) unsigned NOT NULL DEFAULT '0',
	items int(11) DEFAULT '0' NOT NULL,
	items_mobile int(11) DEFAULT '0' NOT NULL,
	items_tablet int(11) DEFAULT '0' NOT NULL,
	items_desktop int(11) DEFAULT '0' NOT NULL,
	margin int(11) DEFAULT '0' NOT NULL,
	loop varchar(80) NOT NULL,
	center varchar(80) NOT NULL,
	stagepadding int(11) DEFAULT '0' NOT NULL,
	autowidth varchar(80) NOT NULL,
	startposition int(11) DEFAULT '0' NOT NULL,
	nav varchar(80) NOT NULL,
	rewind varchar(80) NOT NULL,
	navtext varchar(255) DEFAULT '' NOT NULL,
	dots varchar(80) NOT NULL,
	autoplay varchar(80) NOT NULL,
	autoplayhoverpause varchar(80) NOT NULL,
	autoplayspeed int(11) DEFAULT '0' NOT NULL,
	navspeed int(11) DEFAULT '0' NOT NULL,
	responsive varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT 'OWL Scroller' NOT NULL,
);

CREATE TABLE tt_content(
	dvowlscroller_settings_relation varchar(255) DEFAULT '' NOT NULL
);
