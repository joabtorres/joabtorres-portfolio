<?php

/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "joabta");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://localhost/joabtorres-portfolio/");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Joab Torres");
define("CONF_SITE_TITLE", "Analista de Sistema &lt;/&gt;");
define("CONF_SITE_DESC", "Olá meu nome é Joab, seja bem-vindo ao meu portfólio profissional. Fique a vontade para conhecer mais ao meu respeito, é também visualizar alguns projetos desenvolvidos por mim, caso fique interessado em entrar em contato, você poderá utilizar a sessão de contato presente neste site");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "joabtorres.com.br");
define("CONF_SITE_ADDR_STREET", "Travessa Amapa");
define("CONF_SITE_ADDR_NUMBER", "4");
define("CONF_SITE_ADDR_COMPLEMENT", "Quadra E1 Lote 4");
define("CONF_SITE_ADDR_CITY", "Castanhal");
define("CONF_SITE_ADDR_STATE", "PA");
define("CONF_SITE_ADDR_ZIPCODE", "68744-460");


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@joabta");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@joabta");
define("CONF_SOCIAL_FACEBOOK_APP", "joabta");
define("CONF_SOCIAL_FACEBOOK_PAGE", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "message-alert");
define("CONF_MESSAGE_INFO", "message-info");
define("CONF_MESSAGE_SUCCESS", "message-success");
define("CONF_MESSAGE_WARNING", "message-warning");
define("CONF_MESSAGE_ERROR", "message-danger");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "joabtorres");
define("CONF_VIEW_APP", "app");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "", "address" => ""]);
define("CONF_MAIL_SUPPORT", "");
define("CONF_MAIL_DESTINATARY", "");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
