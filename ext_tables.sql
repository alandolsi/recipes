CREATE TABLE tx_recipes_domain_model_recipe (
	title varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0',
	instructions text,
	demo varchar(255) NOT NULL DEFAULT '',
	ingredients int(11) unsigned NOT NULL DEFAULT '0',
	categories text NOT NULL
);

CREATE TABLE tx_recipes_domain_model_ingredient (
	recipe int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	unit varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_recipes_domain_model_category (
	title varchar(255) NOT NULL DEFAULT ''
);
