<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230408231455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `formation` (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, debut DATETIME NOT NULL, fin DATETIME NOT NULL, confirmation TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_404021BFA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `participationformation` (idparticipationformation INT AUTO_INCREMENT NOT NULL, formations_id INT DEFAULT NULL, user_id INT DEFAULT NULL, confirmation VARCHAR(255) NOT NULL, INDEX IDX_82A8E8483BF5B0C2 (formations_id), INDEX IDX_82A8E848A76ED395 (user_id), PRIMARY KEY(idparticipationformation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, is_active INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `formation` ADD CONSTRAINT FK_404021BFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `participationformation` ADD CONSTRAINT FK_82A8E8483BF5B0C2 FOREIGN KEY (formations_id) REFERENCES `formation` (id)');
        $this->addSql('ALTER TABLE `participationformation` ADD CONSTRAINT FK_82A8E848A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `formation` DROP FOREIGN KEY FK_404021BFA76ED395');
        $this->addSql('ALTER TABLE `participationformation` DROP FOREIGN KEY FK_82A8E8483BF5B0C2');
        $this->addSql('ALTER TABLE `participationformation` DROP FOREIGN KEY FK_82A8E848A76ED395');
        $this->addSql('DROP TABLE `formation`');
        $this->addSql('DROP TABLE `participationformation`');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}