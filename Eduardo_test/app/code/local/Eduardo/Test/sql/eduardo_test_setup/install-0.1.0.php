<?php
/**
 * 
 * @author Eduardo Garcia <uker29@gmail.com>
 * @package Eduardo_Test
 */
 
$installer = $this;

$installer->startSetup();

$installer->run("
DROP TABLE IF EXISTS `eduardo_test`;
CREATE  TABLE `eduardo_test` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL,
  `lastname` TEXT NOT NULL ,
  `birthday` TEXT NOT NULL ,
  `email` TEXT NULL ,
  `create_at` DATE NOT NULL,
  PRIMARY KEY (`id`) )
");

$installer->endSetup();
