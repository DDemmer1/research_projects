CREATE TABLE tx_researchprojects_domain_model_research (
	uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

  titel varchar(255) DEFAULT '',
  vorname varchar(255) DEFAULT '' NOT NULL,
  name varchar(255) DEFAULT '' NOT NULL,
  weitere varchar(255) DEFAULT '',
  projekttitel text NOT NULL,
  abteilung varchar(255) DEFAULT '' NOT NULL,
  foerderung text DEFAULT '',
  betreuer varchar(255) DEFAULT '' NOT NULL,
  betreuerURL text DEFAULT '',
  nameURL text DEFAULT '',
  projektURL text DEFAULT '',
  laufzeit varchar(255) DEFAULT '' NOT NULL,


	PRIMARY KEY (uid),
	KEY parent (pid)
);
