<?php
if(!defined("__PROJECTROOT__")) define("__PROJECTROOT__", dirname(__FILE__));

class generate {

	private static $adjectives;
	private static $nouns;

	private static function getFiles() {
		self::$adjectives = file("dictionaries/adjectives.txt");
		self::$nouns = file("dictionaries/nouns.txt");
	}

	public static function username() {
		if(!isset(self::$adjectives) || !isset(self::$nouns)) self::getFiles();
		$adjectives = self::$adjectives;
		$nouns = self::$nouns;
		return trim($adjectives[array_rand($adjectives)]) . trim($nouns[array_rand($nouns)]) . rand(01, 99);
	}

	public static function adjective() {
		if(!isset(self::$adjectives)) self::getFiles();
		$adjectives = self::$adjectives;
		return trim($adjectives[array_rand($adjectives)]);
	}

	public static function noun() {
		if(!isset(self::$nouns)) self::getFiles();
		$nouns = self::$nouns;
		return trim($nouns[array_rand($nouns)]);
	}

	public static function help() {
		echo "\r\nUsage:\r\n	generate::username() -> Generates random username consisting of a random adjective, noun, and number between 01 and 99.\r\n	generate::adjective() -> Generates a random adjective from a file containing 1000 different adjectives.\r\n	generate::noun() -> Generates a random noun from a file containing 2328 different nouns.";
	}
}
?>
